<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Bear Bicycle Touring Co.</title>
    <meta name="keywords" content="Bicycle, Touring, Cycle, Bear, Bike, Pensylvania, New Jersey, New Hope, Lambertville">
    <meta name="description" content="Single and Multi day bicycle tours based out of Lambertville, NJ">
    <meta charset="UTF-8">
    <meta name="p:domain_verify" content="e3c2c2de804f79a43879ec6874d0e6b8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo $rel_url?>static/wmuSlider-master/css/wmuSlider.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $rel_url?>static/css/main.css" />
    <link rel="stylesheet" media="(max-width: 500px)" type="text/css"  href="<?php echo $rel_url?>static/css/mobile.css" />
    <link rel="stylesheet" href="https://fh-kit.com/buttons/v1/?blue=30a0e9" type="text/css" media="screen" />
    <?php if ($is_blog_post) { include("app/blog_meta.html.php"); } ?>
  </head>
  <body>
    <h1 style="display: none;">Bear Bicycle Touring Co.</h1>
    <div id="fb-root"></div>
    <div class="topper">
      <a href="./<?php echo $rel_url?>"><img class = "mainLogo" src="<?php echo $rel_url?>static/images/bearbicyclelogo-small.png" alt="Bear Bicycle Touring Co. logo"/></a>
      <div class="topperMenu" ontouchstart="" tabindex="0">
        <ul class="topperButtonList">
          <li class="topperButton">
            <a href="<?php echo $rel_url?>daytours">Day Tours<a/>
            <div class="dropDown">
              <ul>
                <li class="dropDownItem"><a href="<?php echo $rel_url?>dayEasy">Canals, Lanes and Shopping</a></li>
                <li class="dropDownItem"><a href="<?php echo $rel_url?>dayMedium">Historic River Towns</a></li>
                <li class="dropDownItem"><a href="<?php echo $rel_url?>dayGems">New Jersey Countryside Gems</a></li>
              </ul>
            </div>
          </li>
          <li class="topperButton">
            <a href="<?php echo $rel_url?>corporate">Corporate Events<a/>
          </li>
          <li class="topperButton">
            <a href="<?php echo $rel_url?>multiday">Multi-day Tours<a/>
            <div class="dropDown">
              <ul>
                <li class="dropDownItem"><a href="<?php echo $rel_url?>delaware">Tour of the Delaware Valley</a></li>
                <li class="dropDownItem"><a href="<?php echo $rel_url?>easton">Easton two-day</a></li>
                <li class="dropDownItem"><a href="<?php echo $rel_url?>faq">FAQ</a></li>
              </ul>
            </div>
          </li>  
          <li class="topperButton">
            <a href="<?php echo $rel_url?>blog/">Blog<a/>
          </li>
          <li class="topperButton">
            <a href="<?php echo $rel_url?>about">About Us<a/>
          </li>
          <li class="topperButton">
            <a href="<?php echo $rel_url?>contact">Get in touch<a/>
          </li>
          <a class="fh-topbar" href="https://fareharbor.com/bearbicycletouring/items/" onclick="FH.open({ shortname: 'bearbicycletouring', fullItems: 'yes' }); return false;">Book now</a>
        </ul>
      </div>
    </div>
    <div id="pageContent">