<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
//Path to autoload.php from current location
require_once '../vendor/abraham/twitteroauth/autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;

session_start();

$request_body = file_get_contents('php://input');
$data = json_decode($request_body);

define('CONSUMER_KEY', '*************');
define('CONSUMER_SECRET', '************');
define('OAUTH_CALLBACK', '*****************');

// Part 1 of 2: Initial request from Satellizer.
if (!isset($data->oauth_token) || !isset($data->oauth_verifier)) {
        $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
        $request_token = $connection->oauth('oauth/request_token', array('oauth_callback' => OAUTH_CALLBACK));
        if ($request_token['oauth_callback_confirmed']) {
        $_SESSION['oauth_token'] = $request_token['oauth_token'];
        $_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
        $url = $connection->url('oauth/authenticate', array('oauth_token' => $request_token['oauth_token']));
        echo '<script type="text/javascript">window.location = "'.$url.'"</script>';
        exit;
    }
} else {
// Part 2 of 2: Second request after Authorize app is clicked.
        $request_token = [];
    $request_token['oauth_token'] = $_SESSION['oauth_token'];
    $request_token['oauth_token_secret'] = $_SESSION['oauth_token_secret'];

    if (isset($data->oauth_token) && $request_token['oauth_token'] !== $data->oauth_token) {
        // Abort! Something is wrong.
        echo 'Abort! Something is wrong.';
        print_r($data);
        print_r($_SESSION);
        print_r($request_token);
        session_unset();
        exit;
    }

    $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $request_token['oauth_token'], $request_token['oauth_token_secret']);
    $access_token = $connection->oauth("oauth/access_token", array("oauth_verifier" => $data->oauth_verifier));
    $_SESSION['access_token'] = $access_token;
    $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
    $twitterUser = $connection->get("account/verify_credentials");
}