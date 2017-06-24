<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="fb:app_id" content="1667228050231771"/>
    <meta property="fb:admins" content="jerezb"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:site_name" content="Giovanni Origins"/>
    <meta property="og:title" content="Posting a HTML5 Canvas Image to Facebook and Twitter"/>
    <meta itemprop="name" content="Posting a HTML5 Canvas image to Facebook and Twitter"/>
    <meta name="twitter:title" content="Posting a HTML5 Canvas image to Facebook and Twitter"/>
    <meta property="og:url" content="http://gorigins.com/posting-a-canvas-image-to-facebook-and-twitter/"/>
    <meta name="twitter:url" content="http://gorigins.com/posting-a-canvas-image-to-facebook-and-twitter/"/>
    <meta property="og:type" content="article"/>
    <meta property="article:published_time" content="2016-02-17T19:15:55+00:00"/>
    <meta property="article:modified_time" content="2016-02-18T14:27:16+00:00" />
    <meta property="og:updated_time" content="2016-02-18T14:27:16+00:00" />
    <meta property="article:section" content="Coding"/>
    <meta property="article:section" content="Tutorials"/>
    <meta property="article:publisher" content="https://www.facebook.com/jerezb"/>
    <link rel="publisher" href="https://plus.google.com/+JerezBain"/>
    <meta name="twitter:site" content="@jerezb31"/>
    <meta name="author" content="Jerez Bain"/>
    <meta name="twitter:creator" content="@jerezb31"/>
    <meta property="og:description" content="Part of a recent project was to take an HTML 5 Canvas Image and post it to Facebook and Twitter. Although this sounds pretty straightforward, the challenge was that there would be no image saved to the server. I couldn&#039;t just slap share buttons on the page, because share dialogs expect content"/>
    <meta itemprop="description" content="Part of a recent project was to take an HTML 5 Canvas Image and post it to Facebook and Twitter. Although this sounds pretty straightforward, the challenge was that there would be no image saved to the server. I couldn&#039;t just slap share buttons on the page, because share dialogs expect content"/>
    <meta property="og:image" content="http://gorigins.com/wp/wp-content/uploads/2016/02/Post-HTML5-Canvas-Image-on-Facebook-and-Twitter_panda.png"/>
    <meta itemprop="image" content="http://gorigins.com/wp/wp-content/uploads/2016/02/Post-HTML5-Canvas-Image-on-Facebook-and-Twitter_panda.png"/>
    <meta name="twitter:image:src" content="http://gorigins.com/wp/wp-content/uploads/2016/02/Post-HTML5-Canvas-Image-on-Facebook-and-Twitter_panda.png"/>
    <meta name="twitter:card" content="summary_large_image"/>

    <link rel="apple-touch-icon" sizes="57x57" href="../../wp/icons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../../wp/icons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../../wp/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../wp/icons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../../wp/icons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../wp/icons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../../wp/icons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../wp/icons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../../wp/icons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="../../wp/icons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../../wp/icons/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="../../wp/icons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="../../wp/icons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="../../wp/icons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="../../wp/icons/manifest.json">
    <link rel="mask-icon" href="../../wp/icons/safari-pinned-tab.svg" color="#990000">
    <link rel="shortcut icon" href="../../wp/icons/favicon.ico">
    <meta name="msapplication-TileColor" content="#b91d47">
    <meta name="msapplication-TileImage" content="../../wp/icons/mstile-144x144.png">
    <meta name="msapplication-config" content="../../wp/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <title>Post HTML5 Canvas Image on Facebook and Twitter</title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.8/css/bootstrap-material-design.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.8/css/ripples.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.8/js/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.8/js/ripples.min.js"></script>
    <style>
        /*Share Button Styles*/
        .flex-container {
            /* We first create a flex layout context */
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;;

            /* Then we define the flow direction and if we allow the items to wrap
             * Remember this is the same as:
             * flex-direction: row;
             * flex-wrap: wrap;
             */
            flex-flow: row nowrap;

            /* Then we define how is distributed the remaining space */
            justify-content: space-around;
        }

        .share-btn {
            padding: 0px 10px;
            width: 100%;
            height: 44px;
            margin: 10px;

            line-height: 44px;
            color: white;
            text-align: center;
            border-radius: 3px;
        }

        .share-btn, .share-btn:hover {
            color: #ffffff;
            text-decoration: none;
        }

        .share-btn.facebook,
        .btn.facebook {
            background: #3b5998;
        }

        .share-btn.facebook:hover, .btn.facebook:hover {
            background: #4c70ba !important;
        }

        .share-btn.twitter,
        .btn.twitter {
            background: #00aced;
        }

        .share-btn.twitter:hover, .btn.twitter:hover {
            background: #21c2ff !important;
        }
    </style>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '***',
                cookie: true,
                xfbml: true,
                version: 'v2.9'
            });
        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</head>
<body>
<div class="container">

    <div class="starter-template text-center">
        <h1>Post HTML5 Canvas Images on Facebook and Twitter</h1>
        <hr>
        <canvas id="canvas" style="border:1px solid black;" width="256" height="256"></canvas>
        <!--<div class="btn-group btn-group-justified btn-group-raised">
            <a href="javascript:void(0)" id="shareFB" class="btn facebook">Post to Facebook</a>
            <a href="javascript:void(0)" id="shareTW" class="btn twitter">Post to Twitter</a>
        </div>-->
        <div class='flex-container'>
            <a href='javascript:void(0)' id='shareFB' class='btn share-btn facebook'>Post to Facebook</a>
            <a href='javascript:void(0)' id='shareTW' class='btn share-btn twitter'>Post to Twitter</a>
        </div>
        <p>View the tutorial: <a href="http://gorigins.com/posting-a-canvas-image-to-facebook-and-twitter/">http://gorigins.com/posting-a-canvas-image-to-facebook-and-twitter/</a></p>

        <div>
            <a href="https://twitter.com/share" class="twitter-share-button" data-via="jerezb31" data-hashtags="html5">Tweet</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            <div
                class="fb-like"
                data-share="true"
                data-width="450"
                data-show-faces="true">
            </div>
        </div>
    </div>

</div>
<!-- /.container -->
<script type="text/javascript">
    (function () {
        // Canvas
        var canvas = document.getElementById('canvas');
        var ctx = canvas.getContext('2d');

        // load image from data url
        var imageObj = new Image();
        imageObj.onload = function () {
            ctx.drawImage(this, 0, 0);
        };

        imageObj.src = 'panda_dark.png';

        // Twitter oauth handler
        $.oauthpopup = function (options) {
            if (!options || !options.path) {
                throw new Error("options.path must not be empty");
            }
            options = $.extend({
                windowName: 'ConnectWithOAuth' // should not include space for IE
                , windowOptions: 'location=0,status=0,width=800,height=400'
                , callback: function () {
                    debugger;
                    //window.location.reload();
                }
            }, options);

            var oauthWindow = window.open(options.path, options.windowName, options.windowOptions);
            var oauthInterval = window.setInterval(function () {
                if (oauthWindow.closed) {
                    window.clearInterval(oauthInterval);
                    options.callback();
                }
            }, 1000);
        };
        // END Twitter oauth handler

        //bind to element and pop oauth when clicked
        $.fn.oauthpopup = function (options) {
            $this = $(this);
            $this.click($.oauthpopup.bind(this, options));
        };

        $('#shareFB').click(function () {
            var data = $('#canvas')[0].toDataURL("image/png");
            try {
                blob = dataURItoBlob(data);
            } catch (e) {
                console.log(e);
            }
            FB.getLoginStatus(function (response) {
                console.log(response);
                if (response.status === "connected") {
                    postImageToFacebook(response.authResponse.accessToken, "Canvas to Facebook/Twitter", "image/png", blob, "http://bit.ly/1QK0Qbsz");
                } else if (response.status === "not_authorized") {
                    FB.login(function (response) {
                        postImageToFacebook(response.authResponse.accessToken, "Canvas to Facebook/Twitter", "image/png", blob, "http://bit.ly/1QK0Qbsz");
                    }, {scope: "publish_actions"});
                } else {
                    FB.login(function (response) {
                        postImageToFacebook(response.authResponse.accessToken, "Canvas to Facebook/Twitter", "image/png", blob, "http://bit.ly/1QK0Qbsz");
                    }, {scope: "publish_actions"});
                }
            });
        });

        $('#shareTW').click(function () {
            var dataURL = $('#canvas')[0].toDataURL("image/png");
            $.oauthpopup({
                path: './auth/twitter.php',
                callback: function () {
                    console.log(window.twit);
                    var data = new FormData();
                    // Tweet text
                    data.append('status', "Look at the cute panda! HTML5 Canvas to Facebook/Twitter http://bit.ly/1QK0Qbs @jerezb31");
                    // Binary image
                    data.append('image', dataURL);
                    // oAuth Data
                    data.append('oauth_token', window.twit.oauth_token);
                    data.append('oauth_token_secret', window.twit.oauth_token_secret);
                    // Post to Twitter as an update with

                    return $.ajax({
                        url: './auth/share-on-twitter.php',
                        type: 'POST',
                        data: data,
                        cache: false,
                        processData: false,
                        contentType: false,
                        success: function (data) {
                            console.log('Posted to Twitter.');
                            console.log(data);
                        }
                    });
                }
            });
        });

        function postImageToFacebook(token, filename, mimeType, imageData, message) {
            var fd = new FormData();
            fd.append("access_token", token);
            fd.append("source", imageData);
            fd.append("no_story", true);

            // Upload image to facebook without story(post to feed)
            $.ajax({
                url: "https://graph.facebook.com/me/photos?access_token=" + token,
                type: "POST",
                data: fd,
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    console.log("success: ", data);

                    // Get image source url
                    FB.api(
                        "/" + data.id + "?fields=images",
                        function (response) {
                            if (response && !response.error) {
                                //console.log(response.images[0].source);

                                // Create facebook post using image
                                FB.api( "/me/feed", "POST",
                                    {
                                        "message": "",
                                        "picture": response.images[0].source, // 90-Day Deprecation - https://developers.facebook.com/docs/apps/changelog
                                        // "object_attachment": response.images[0].source, // 90-Day Deprecation - https://developers.facebook.com/docs/apps/changelog
                                        "link": window.location.href,
                                        "name": 'Look at the cute panda!',
                                        "description": message,
                                        "privacy": {
                                            value: 'SELF'
                                        }
                                    },
                                    function (response) {
                                        if (response && !response.error) {
                                            /* handle the result */
                                            alert("Posted story to facebook successfully");
                                            console.log("Posted story to facebook");
                                            console.log(response);
                                        } else {
                                            console.log("Failed to post story");
                                            console.log(response);
                                        }
                                    }
                                );
                            }
                        }
                    );
                },
                error: function (shr, status, data) {
                    console.log("error " + data + " Status " + shr.status);
                },
                complete: function (data) {
                    //console.log('Post to facebook Complete');
                }
            });
        }

        function dataURItoBlob(dataURI) {
            var byteString = atob(dataURI.split(',')[1]);
            var ab = new ArrayBuffer(byteString.length);
            var ia = new Uint8Array(ab);
            for (var i = 0; i < byteString.length; i++) {
                ia[i] = byteString.charCodeAt(i);
            }
            return new Blob([ab], {type: 'image/png'});
        }

    })();

</script>

</body>
</html>