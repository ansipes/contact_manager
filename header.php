<?php
include 'database.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact Application</title>
    <!-- charset -->
    <meta charset="utf-8">

    <!-- responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- jQuery -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

    <!-- uikit -->
    <link rel="stylesheet" href="css/uikit.css" />
    <script src="js/uikit-icons.js"></script>
    <script src="js/uikit.js"></script>

    <!-- fontawesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="css/style.css" />

  </head>
  <body>

<div uk-sticky>
    <nav class="uk-navbar-container uk-margin" uk-navbar>
        <div class="uk-navbar-center">
            <div class="uk-navbar-center-left">
              <div>
                <ul class="uk-navbar-nav">
                    <li><a href="/index.php">People</a></li>
                </ul>
            </div>
        </div>
      <div title="New Contact" uk-tooltip>
            <a class="uk-navbar-item uk-logo" href="/new.php"><i class="fa fa-3x fa-plus-circle" aria-hidden="true"></i></a>
      </div>

      <div class="uk-navbar-center-right">
        <div>
            <ul class="uk-navbar-nav">
                <li><a href="/style.php">Styles</a></li>
            </ul>
        </div>
      </div>

      </div>
    </nav>
</div>
