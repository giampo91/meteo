<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Pota il meteo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/main.css">

        <link rel="stylesheet" href="css/style.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <div id="app" class="container-fluid">
            <!-- loading -->
            <section id="loading">
              <div class="row content">
                <div id="loading-message"></div>
              </div>
            </section>

            <!-- home -->
            <section id="home">
              <div class="row content">
                  <div id="weather">
                    <div id="today" class="weather">
                      <div id="icona-oggi" class="col-xs-6 col-sm-6 col-md-6"></div>
                      <div class="weather temp col-xs-6 col-sm-6 col-md-6"></div>
                      <div class="city col-xs-12 col-sm-12 col-md-12 "></div>
                      <div class="testo col-xs-12">
                        <div class="frase"></div>
                      </div>
                    </div>
                  </div>
              </div>-->
          </section>
        </div>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/purl.js"></script>
        <script src="js/plugins.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <script src="http://maps.google.com/maps/api/js?sensor=false"
        async defer></script>

        <script src="js/shake.js"></script>
        <script src="js/jquery.simpleWeather.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

        <!-- SCRIPT INIT -->
        <script>
          $(document).ready(function(){
            init()
            showSection("loading")
            getPosition()

          })
        </script>
    </body>
</html>
