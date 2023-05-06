<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Audio Player</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://use.fontawesome.com/15af25ac7b.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jcarousel/0.3.1/jquery.jcarousel.min.js"></script>
</head>
<body>
  
<div id="wrapper">
 <div id="iphone">
  <div id="camera">
   <span></span>
   <span></span>
  </div>
  <div id="screen">
   <div id="content-wrap">
    <div id="background"></div>
    <div id="content">
     <div id="header">
      <span id="menu-btn"><img src="assets/svg/menu.svg" alt="" class="svg"></span>
      <span id="options-btn"><img src="assets/svg/more.svg" alt="" class="svg"></span>
     </div>
     <div class="jcarousel">
      <ul id="songs">
        <li class="song" data-audio="https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/Leo%20-%20Trying.mp3" data-color="#f38578">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/trying-album-cover.jpg">
          <p class="song-title">Trying</p>
          <p class="song-artist">Leo</p>
        </li>
      </ul>
     </div>
     <audio crossorigin>
        <source src="" type="audio/mpeg">
      </audio>
     <div id="controls">
      <span id="previous-btn"><i class="fa fa-step-backward fa-fw" aria-hidden="true"></i></span>
      <span id="play-btn"><i class="fa fa-play fa-fw" aria-hidden="true"></i></span>
      <span id="next-btn"><i class="fa fa-step-forward fa-fw" aria-hidden="true"></i></span>
     </div>
     <div id="timeline">
      <span id="current-time">--:--</span>
      <span id="total-time">--:--</span>
      <div class="slider" data-direction="horizontal">
        <div class="progress">
          <div class="pin" id="progress-pin" data-method="rewind"></div>
        </div>
      </div>
     </div>
     <div id="sub-controls">
      <i class="fa fa-random" aria-hidden="true"></i>
      <i class="fa fa-refresh" aria-hidden="true"></i>
      <i class="fa fa-bluetooth-b active" id="bluetooth-btn" aria-hidden="true"></i>
      <i class="fa fa-heart-o" id="heart-icon" aria-hidden="true"></i>
     </div>
    </div>
    <div id="overlay"></div>
   </div>
   <div id="sidemenu">
    <ul>
     <li>
      <i class="fa fa-search fa-fw" aria-hidden="true"></i>
       Search
     </li>
     <li>
      <img class="svg menu-icons" src="assets/svg/music-player.svg" alt="">
       Playlists
     </li>
     <li>
      <img id="album-icon" class="svg menu-icons" src="assets/svg/album-icon.svg" alt="">
      Albums
     </li>
     <li>
      <i class="fa fa-microphone fa-fw" aria-hidden="true"></i>
      Artists
     </li>
      <li>
        <i class="fa fa-podcast fa-fw" aria-hidden="true"></i>
        Podcasts
      </li>
      <li>
        <i class="fa fa-cog fa-fw" aria-hidden="true"></i>
        Settings
      </li>
    </ul>
   </div>
   <div id="bluetooth-devices" class="menu">
      <span class="close-btn"><span>&times;</span> Close</span>
      <h3>Devices nearby</h3>
      <ul>
        <li class="connected">
          <img id="headphones-icon" class="svg menu-icons" src="assets/svg/headphone.svg" alt="">
          <p>
            Major II Bluetooth
            <span>Connected</span>
          </p>
        </li>
        <li>
          <img id="headphones-icon" class="svg menu-icons" src="assets/svg/loudspeaker.svg" alt="">
          <p>
            Sonos One
            <span>Connected</span>
          </p>
        </li>
        <li>
          <img id="headphones-icon" class="svg menu-icons" src="assets/svg/car.svg" alt="">
          <p>
            Kia Motors
            <span>Connected</span>
          </p>
        </li>
      </ul>
      <p class="info-text">
        Make sure your bluetooth device is turned on and in range.
      </p>
    </div>
   <div id="song-options" class="menu">
     <span class="close-btn"><span>&times;</span> Close</span>
     <div id="song-info">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/rockstar-album-cover.jpg" alt="">
       <div class="artist-wrap">
        <p>
          <span class="title">rockstar</span>
          <span class="artist">Post Malone, 21 Savage</span>
        </p>
       </div>
     </div>
    <ul>
      <li>
        <i class="fa fa-music fa-fw add" aria-hidden="true"></i>
        Add to playlist
      </li>
      <li>
        <i class="fa fa-microphone fa-fw" aria-hidden="true"></i>
        View Artist
      </li>
     <li>
      <img id="album-icon" class="svg menu-icons" src="assets/svg/compact-disc.svg" alt="">
      View Album
     </li>
      <li>
        <i class="fa fa-share-square-o fa-fw" aria-hidden="true"></i>
        Share
      </li>
    </ul>
   </div>
   <div id="home-screen">
    <div class="home-content">
      <h2>Music Player App</h2>
      <p id="made-by">Made by <a href="https://codepen.io/emilcarlsson">@emilcarlsson</a></p>
      <div class="app-icon">
        <img class="svg" src="assets/svg/music-note.svg" alt="">
      </div>
      <p id="icons-by">Icons by <a href="http://fontawesome.io/" title="Font Awesome">Font Awesome</a>, <a href="https://www.flaticon.com/authors/those-icons" title="Those Icons">Those Icons</a>,<br /><a href="https://www.flaticon.com/authors/epiccoders" title="EpicCoders">EpicCoders</a> & <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a></p>
    </div>
   </div>
  </div>
  <div id="home-btn"></div>
 </div>
</div>
</body>
<style type="text/css">
  @charset "UTF-8";
/* Flat UI Colors */
.alizarin {
  background: #e74c3c !important;
}

.sun-flower {
  background: #f1c40f !important;
}

.emerald {
  background: #2ecc71 !important;
}

/* Font with fallback */
/*--------*/
/* Mixins */
/*--------*/
/* Transition */
/* Border Radius */
/* Box-shadow */
/* User Select */
/* Filter */
/* Appearance */
/* Aspect Ratio */
/* Transform Base */
/* Transform - Scale */
/* Transform - Translate */
/* Transform - Skew */
/* Transform - Origin */
/* Linear Gradient */
/* Calculate REM */
/*---------*/
/* Presets */
/*---------*/
/* body */
body {
  background: #ecf0f1;
  font-family: "proxima-nova", "Lato", "Source Sans Pro", "Raleway", Arial, sans-serif;
  height: 100vh;
  width: 100vw;
}

/* Float: left/right */
.pull-left {
  float: left;
}

.pull-right {
  float: right;
}

/* Flex center */
.flex-center, div#home-screen div.home-content div.app-icon, div#home-screen {
  display: -webkit-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-flex-align: center;
  -ms-flex-align: center;
  -webkit-align-items: center;
  align-items: center;
  justify-content: center;
}

/* Flex */
.flex {
  display: -webkit-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
}

/* Outline none */
*, *:focus, *:active {
  outline: none;
}

.clearfix:after, div#song-options div#song-info:after, div#header:after {
  content: "";
  display: table;
  clear: both;
}

body {
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  width: 100vw;
  background: #ef8b80;
  font-family: "proxima-nova", "Lato", "Source Sans Pro", "Raleway", Arial, sans-serif;
  -webkit-transition: background 0.25s ease;
  -moz-transition: background 0.25s ease;
  -ms-transition: background 0.25s ease;
  -o-transition: background 0.25s ease;
  transition: background 0.25s ease;
}

.svg path {
  fill: white;
}

h3 {
  cursor: default;
  font-weight: 600;
  font-size: 12px;
  letter-spacing: 1px;
  margin: 0 0 15px;
  text-transform: uppercase;
}

p {
  cursor: default;
}
p.info-text {
  color: #b3b3b3;
  font-size: 10px;
}

.fa.add {
  position: relative;
}
.fa.add::after {
  background: #444444;
  border-radius: 100px;
  content: "";
  font-size: 10px;
  left: 2px;
  position: absolute;
  top: -1px;
  width: 10px;
  height: 11px;
}

div#iphone {
  background: white;
  border: 4px solid #ececec;
  border-radius: 30px;
  max-width: 257px;
  padding: 10px;
  -webkit-box-shadow: 0px 10px 25px rgba(51, 51, 51, 0.3);
  -moz-box-shadow: 0px 10px 25px rgba(51, 51, 51, 0.3);
  box-shadow: 0px 10px 25px rgba(51, 51, 51, 0.3);
}
div#iphone div#camera {
  cursor: default;
  margin: 5px auto 20px;
  width: 100%;
  text-align: center;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
}
div#iphone div#camera span {
  background: #ececec;
  display: inline-block;
}
div#iphone div#camera span:nth-child(1) {
  border-radius: 7px;
  height: 7px;
  margin-right: 7px;
  position: relative;
  top: 1px;
  width: 7px;
}
div#iphone div#camera span:nth-child(2) {
  border-radius: 5px;
  height: 5px;
  width: 35px;
}
div#iphone div#screen {
  background: #666666;
  border: 2px solid #f2f2f2;
  border-radius: 4px;
  height: 400px;
  overflow: hidden;
  position: relative;
  width: 225px;
  z-index: 1;
}
div#iphone div#screen::after {
  background: gray;
  content: "";
  display: block;
  height: 130%;
  left: 60%;
  opacity: 0.15;
  position: absolute;
  pointer-events: none;
  top: -25%;
  width: 100%;
  -moz-transform: rotate(-20deg);
  -o-transform: rotate(-20deg);
  -ms-transform: rotate(-20deg);
  -webkit-transform: rotate(-20deg);
  transform: rotate(-20deg);
}
div#iphone div#home-btn {
  border: 3px solid #ececec;
  border-radius: 35px;
  cursor: pointer;
  height: 35px;
  margin: 10px auto 5px;
  width: 35px;
}

div#content-wrap {
  background: #333;
  height: 100%;
  overflow: hidden;
  position: relative;
  z-index: 5;
  -webkit-transition: transform 0.25s ease;
  -moz-transition: transform 0.25s ease;
  -ms-transition: transform 0.25s ease;
  -o-transition: transform 0.25s ease;
  transition: transform 0.25s ease;
}
div#content-wrap.minimized {
  -moz-transform: scale(0);
  -o-transform: scale(0);
  -ms-transform: scale(0);
  -webkit-transform: scale(0);
  transform: scale(0);
}
div#content-wrap.inactive {
  -moz-transform: scale(0.85) translate(0, 60%);
  -o-transform: scale(0.85) translate(0, 60%);
  -ms-transform: scale(0.85) translate(0, 60%);
  -webkit-transform: scale(0.85) translate(0, 60%);
  transform: scale(0.85) translate(0, 60%);
}
div#content-wrap.inactive div#overlay {
  display: block;
}

div#overlay {
  cursor: pointer;
  display: none;
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 3;
}

div#content {
  padding: 15px;
  position: relative;
  z-index: 2;
}

div#background {
  background-size: cover;
  background-position: center;
  display: block;
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 1;
  -webkit-filter: blur(10px);
  -moz-filter: blur(10px);
  -ms-filter: blur(10px);
  -o-filter: blur(10px);
  filter: blur(10px);
  -webkit-transition: background-image 0.25s ease;
  -moz-transition: background-image 0.25s ease;
  -ms-transition: background-image 0.25s ease;
  -o-transition: background-image 0.25s ease;
  transition: background-image 0.25s ease;
}
div#background::before {
  background: #333;
  content: "";
  display: block;
  height: 100%;
  opacity: 0.5;
  position: absolute;
  width: 100%;
}
div#background::after {
  content: "";
  display: block;
  height: 100%;
  position: absolute;
  width: 100%;
  background: rgba(0, 0, 0, 0);
  background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 50%, #323232 100%);
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 50%, #323232 100%);
}

div#header {
  color: white;
}
div#header span {
  cursor: pointer;
  font-size: 20px;
}
div#header span .svg {
  height: 16px;
  width: 16px;
}
div#header span#menu-btn {
  float: left;
}
div#header span#options-btn {
  float: right;
}

div.jcarousel {
  left: -15px;
  width: calc(100% + 30px);
  position: relative;
  overflow: hidden;
}
div.jcarousel ul#songs {
  width: 20000em;
  position: relative;
}
div.jcarousel ul#songs li.song {
  float: left;
  margin: 10px 15px;
  text-align: center;
  width: calc(225px - 30px);
}
div.jcarousel ul#songs li.song img {
  width: 92.5%;
  -webkit-box-shadow: 0px 5px 25px rgba(50, 50, 50, 0.5);
  -moz-box-shadow: 0px 5px 25px rgba(50, 50, 50, 0.5);
  box-shadow: 0px 5px 25px rgba(50, 50, 50, 0.5);
}
div.jcarousel ul#songs li.song p {
  color: white;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.15);
}
div.jcarousel ul#songs li.song p.song-title {
  font-size: 16px;
  font-weight: 600;
  margin: 10px 0 5px;
}
div.jcarousel ul#songs li.song p.song-artist {
  color: #b3b3b3;
  font-size: 12px;
  margin: 0;
}

div#controls {
  color: white;
  display: table;
  margin: 10px auto 25px;
  text-align: center;
  width: 75%;
}
div#controls span {
  display: table-cell;
  font-size: 20px;
  vertical-align: middle;
}
div#controls span#play-btn {
  font-size: 34px;
}
div#controls span i {
  cursor: pointer;
}

div#sub-controls {
  color: #999999;
  cursor: default;
  font-size: 14px;
  margin: 15px 0 0;
  text-align: center;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
}
div#sub-controls .svg {
  height: 14px;
  position: relative;
  top: 2px;
  width: 14px;
}
div#sub-controls .svg path {
  fill: #999999;
}
div#sub-controls i, div#sub-controls .svg {
  cursor: pointer;
  margin: 0 15px;
}
div#sub-controls i.active, div#sub-controls .svg.active {
  color: #e74c3c;
}

div#timeline {
  position: relative;
  margin: 0 auto;
  width: 92.5%;
}
div#timeline span {
  color: #b3b3b3;
  font-size: 7px;
  position: absolute;
  top: -10px;
}
div#timeline span#current-time {
  left: 0;
}
div#timeline span#total-time {
  right: 0;
}
div#timeline div.slider {
  background-color: gray;
  border-radius: 2px;
  cursor: pointer;
  height: 2px;
  position: relative;
  width: 100%;
}
div#timeline div.slider div.progress {
  background-color: #e74c3c;
  height: 100%;
  pointer-events: none;
  position: absolute;
  width: 0;
}
div#timeline div.slider div.progress div.pin {
  background-color: white;
  border-radius: 8px;
  height: 8px;
  position: absolute;
  pointer-events: all;
  right: -5px;
  top: -3px;
  width: 8px;
  -webkit-box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.32);
  -moz-box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.32);
  box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.32);
  -webkit-transition: transform 0.25s ease;
  -moz-transition: transform 0.25s ease;
  -ms-transition: transform 0.25s ease;
  -o-transition: transform 0.25s ease;
  transition: transform 0.25s ease;
}
div#timeline div.slider div.progress div.pin:active {
  -moz-transform: scale(1.5);
  -o-transform: scale(1.5);
  -ms-transform: scale(1.5);
  -webkit-transform: scale(1.5);
  transform: scale(1.5);
}

div#sidemenu {
  background: #444;
  box-sizing: border-box;
  height: 100%;
  left: 0;
  padding: 20px 10px;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 1;
}
div#sidemenu.active ul {
  -moz-transform: scale(1);
  -o-transform: scale(1);
  -ms-transform: scale(1);
  -webkit-transform: scale(1);
  transform: scale(1);
}
div#sidemenu ul {
  color: white;
  font-size: 18px;
  -webkit-transition: transform 0.25s ease;
  -moz-transition: transform 0.25s ease;
  -ms-transition: transform 0.25s ease;
  -o-transition: transform 0.25s ease;
  transition: transform 0.25s ease;
  -moz-transform: scale(0.8);
  -o-transform: scale(0.8);
  -ms-transform: scale(0.8);
  -webkit-transform: scale(0.8);
  transform: scale(0.8);
}
div#sidemenu ul li {
  cursor: pointer;
  font-weight: 300;
  padding: 8px 5px;
}
div#sidemenu ul li:nth-child(1) {
  margin-top: -8px;
}
div#sidemenu ul li:hover {
  background: #515151;
  border-radius: 5px;
}
div#sidemenu ul li:hover .svg, div#sidemenu ul li:hover i {
  opacity: 1;
}
div#sidemenu ul li .svg {
  display: inline-block;
  height: 16px;
  padding: 0 0.2em;
  position: relative;
  top: 2px;
  width: 16px;
}
div#sidemenu ul li .svg, div#sidemenu ul li i {
  margin-right: 5px;
  opacity: 0.75;
  -webkit-transition: opacity 0.25s ease;
  -moz-transition: opacity 0.25s ease;
  -ms-transition: opacity 0.25s ease;
  -o-transition: opacity 0.25s ease;
  transition: opacity 0.25s ease;
}

div#song-options div#song-info {
  margin: 0 0 20px;
  position: relative;
}
div#song-options div#song-info img {
  float: left;
  width: 50px;
  -webkit-box-shadow: 0 2px 5px rgba(50, 50, 50, 0.2);
  -moz-box-shadow: 0 2px 5px rgba(50, 50, 50, 0.2);
  box-shadow: 0 2px 5px rgba(50, 50, 50, 0.2);
}
div#song-options div#song-info div.artist-wrap {
  box-sizing: border-box;
  float: right;
  padding: 0 0 0 8px;
  width: calc(100% - 50px);
}
div#song-options div#song-info div.artist-wrap p {
  bottom: 4px;
  font-size: 16px;
  position: absolute;
}
div#song-options div#song-info div.artist-wrap p span {
  display: block;
}
div#song-options div#song-info div.artist-wrap p span.artist {
  font-size: 12px;
  font-weight: 300;
  margin: 4px 0 0;
}
div#song-options ul {
  font-size: 16px;
}

div#bluetooth-devices ul {
  margin: 5px 0 15px;
}
div#bluetooth-devices ul li.connected {
  border: 1px solid rgba(255, 255, 255, 0.2);
  font-size: 14px;
}
div#bluetooth-devices ul li.connected span {
  display: block;
}
div#bluetooth-devices ul li.connected i {
  color: #e74c3c;
}
div#bluetooth-devices ul li.connected .svg path {
  fill: #e74c3c !important;
}
div#bluetooth-devices ul li.connected .svg, div#bluetooth-devices ul li.connected i {
  opacity: 1;
  position: relative;
  top: -5px;
}
div#bluetooth-devices ul li p {
  display: inline-block;
}
div#bluetooth-devices ul li p span {
  display: none;
  font-size: 10px;
  margin: 2px 0 0;
  opacity: 0.75;
}

div.menu {
  background: #444;
  box-sizing: border-box;
  display: block;
  height: 100%;
  padding: 0 20px;
  position: absolute;
  top: 100%;
  width: 100%;
  z-index: 10;
  -webkit-transition: top 0.25s ease;
  -moz-transition: top 0.25s ease;
  -ms-transition: top 0.25s ease;
  -o-transition: top 0.25s ease;
  transition: top 0.25s ease;
}
div.menu.active {
  top: 0;
}
div.menu span.close-btn {
  color: #b3b3b3;
  cursor: pointer;
  display: block;
  font-size: 14px;
  margin: 5px auto 15px;
  padding: 0 8px 4px;
  text-align: center;
  width: 50px;
  -webkit-transition: color 0.25s ease;
  -moz-transition: color 0.25s ease;
  -ms-transition: color 0.25s ease;
  -o-transition: color 0.25s ease;
  transition: color 0.25s ease;
}
div.menu span.close-btn:hover {
  color: #e6e6e6;
}
div.menu span.close-btn span {
  font-size: 1.6em;
  position: relative;
  top: 3px;
}
div.menu li {
  border-radius: 5px;
  cursor: pointer;
  font-weight: 300;
  margin-bottom: 4px;
  padding: 8px 5px;
}
div.menu li:nth-child(1) {
  margin-top: -8px;
}
div.menu li:hover {
  background: #515151;
}
div.menu li:hover .svg, div.menu li:hover i {
  opacity: 1;
}
div.menu li .svg {
  display: inline-block;
  height: 14px;
  padding: 0 0.2em;
  position: relative;
  top: 2px;
  width: 14px;
}
div.menu li .svg, div.menu li i {
  margin-right: 5px;
  opacity: 0.75;
  -webkit-transition: opacity 0.25s ease;
  -moz-transition: opacity 0.25s ease;
  -ms-transition: opacity 0.25s ease;
  -o-transition: opacity 0.25s ease;
  transition: opacity 0.25s ease;
}
div.menu li i {
  position: relative;
  top: 1px;
}

div#home-screen {
  background: #4f6f8f;
  background: -webkit-linear-gradient(top, #4f6f8f, #3d566e);
  background: linear-gradient(to bottom, #4f6f8f, #3d566e);
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  visibility: hidden;
  z-index: 2;
}
div#home-screen.active {
  visibility: visible;
}
div#home-screen div.home-content {
  margin: 15px;
  padding-bottom: 80px;
  text-align: center;
}
div#home-screen div.home-content h2 {
  font-size: 22px;
  font-weight: 600;
}
div#home-screen div.home-content p {
  font-size: 13px;
  line-height: 1.5;
  margin: 5px 0;
}
div#home-screen div.home-content p#made-by a {
  color: white;
}
div#home-screen div.home-content p#icons-by {
  color: #7796b4;
  bottom: 15px;
  font-size: 11px;
  left: 0;
  position: absolute;
  text-align: center;
  width: 100%;
}
div#home-screen div.home-content p a {
  color: #98afc6;
  border-bottom: 1px solid #7796b4;
  text-decoration: none;
  padding: 0 1px;
  -webkit-transition: border-color 0.25s ease, color 0.25s ease;
  -moz-transition: border-color 0.25s ease, color 0.25s ease;
  -ms-transition: border-color 0.25s ease, color 0.25s ease;
  -o-transition: border-color 0.25s ease, color 0.25s ease;
  transition: border-color 0.25s ease, color 0.25s ease;
}
div#home-screen div.home-content p a:hover {
  color: #b9c9d8;
  border-color: #b9c9d8;
}
div#home-screen div.home-content div.app-icon {
  cursor: pointer;
  border-radius: 10px;
  height: 40px;
  margin: 30px auto 0;
  position: relative;
  width: 40px;
  background: #e74c3c;
  background: -webkit-linear-gradient(top, #e74c3c, #d62c1a);
  background: linear-gradient(to bottom, #e74c3c, #d62c1a);
}
div#home-screen div.home-content div.app-icon:hover {
  background: #e43725;
  background: -webkit-linear-gradient(top, #e43725, #bf2718);
  background: linear-gradient(to bottom, #e43725, #bf2718);
}
div#home-screen div.home-content div.app-icon::after {
  content: "Music Player";
  font-size: 10px;
  position: absolute;
  top: 45px;
  white-space: nowrap;
}
div#home-screen div.home-content div.app-icon .svg {
  height: 60%;
  width: 60%;
}
</style>
<script>
  /*
 * Icons by:
 * Font Awesome – http://fontawesome.io/
 * Those Icons – https://www.flaticon.com/authors/those-icons
 * EpicCoders – https://www.flaticon.com/authors/epiccoders
 * Smashicons – https://www.flaticon.com/authors/smashicons
 */

$(document).ready(function () {
  var songs = [
    {
      title: "rockstar",
      artist: "Post Malone, 21 Savage",
      cover: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/rockstar-album-cover.jpg",
      audioFile: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/Post%20Malone%20-%20rockstar%20ft.%2021%20Savage%20(1).mp3",
      color: "#c3af50"
    },
    {
      title: "Let You Down",
      artist: "NF",
      cover: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/perception-album-cover.png",
      audioFile: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/NF%20-%20Let%20You%20Down.mp3",
      color: "#25323b"
    },
    {
      title: "Silence",
      artist: "Marshmello, Khalid",
      cover: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/silence-album-cover.jpg",
      audioFile: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/Marshmello%20-%20Silence%20ft.%20Khalid.mp3",
      color: "#c1c1c1"
    },
    {
      title: "I Fall Apart",
      artist: "Post Malone",
      cover: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/stoney-cover-album.jpg",
      audioFile: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/Post%20Malone%20-%20I%20Fall%20Apart.mp3",
      color: "#cd4829"
    },
    {
      title: "Fireproof",
      artist: "VAX, Teddy Sky",
      cover: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/fireproof-album-cover.jpeg",
      audioFile: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/VAX%20-%20Fireproof%20Feat%20Teddy%20Sky.mp3",
      color: "#5d0126"
    }
  ];
  
  for (let song of songs) {
    $("#songs").append('<li class="song" data-audio="' + song.audioFile + '" data-color="'+ song.color +'">' + 
      '<img src="' + song.cover + '">' +
      '<p class="song-title">' + song.title + '</p>' +
      '<p class="song-artist">' + song.artist + '</p>' + 
      '</li>');
  }
  
  $('.jcarousel').jcarousel({
      wrap: 'circular'
  });
});

/*
 * Replace all SVG images with inline SVG
 */
jQuery('img[src$=".svg"]').each(function(){
  var $img = jQuery(this);
  var imgID = $img.attr('id');
  var imgClass = $img.attr('class');
  var imgURL = $img.attr('src');

  jQuery.get(imgURL, function(data) {
    // Get the SVG tag, ignore the rest
    var $svg = jQuery(data).find('svg');

    // Add replaced image's ID to the new SVG
    if(typeof imgID !== 'undefined') {
      $svg = $svg.attr('id', imgID);
    }
    // Add replaced image's classes to the new SVG
    if(typeof imgClass !== 'undefined') {
      $svg = $svg.attr('class', imgClass+' replaced-svg');
    }

    // Remove any invalid XML tags as per http://validator.w3.org
    $svg = $svg.removeAttr('xmlns:a');

    // Replace image with new SVG
    $img.replaceWith($svg);

  }, 'xml');

});

// Current slide
$('.jcarousel').on('jcarousel:visiblein', 'li', function(event, carousel) {
  let cover = $(this).find("img").attr("src");
  let songTitle = $(this).find("p.song-title").html();
  let songArtist = $(this).find("p.song-artist").html();
  let audioSrc = $(this).attr("data-audio");
  let backgroundColor = $(this).attr("data-color");
  $("body").css('background', backgroundColor)
  $("#background").css('background-image', 'url('+cover+')');
  $("audio").find("source").attr("src", ""+audioSrc+"");
  player.load();
  player.currentTime = 0;
  $("#song-info").find("img").attr("src", cover);
  $("#song-info .artist-wrap p").find("span.title").html(songTitle);
  $("#song-info .artist-wrap p").find("span.artist").html(songArtist);
});

// Previous slide
$('#previous-btn').click(function() {
  $('.jcarousel').jcarousel('scroll', '-=1');
  $('#play-btn i').removeClass('fa-pause');
  player.pause();
});

// Next slide
$('#next-btn').click(function() {
  if ($(".fa-random").hasClass('active')) {
    let songs = $("#songs li").length - 1;
    let randomSong = Math.floor(Math.random() * songs) + 1;
    $('.jcarousel').jcarousel('scroll', '+=' + randomSong);
  } else {
    $('.jcarousel').jcarousel('scroll', '+=1');
  }
  $('#play-btn i').removeClass('fa-pause');
  player.pause();
});

// Play Icon Switcher
$('#play-btn').click(function() {
  $(this).find('i').toggleClass('fa-pause');
});

// Menu
$("#menu-btn").click(function() {
  $("#content-wrap").addClass('inactive');
  $("#sidemenu").addClass('active');
});

// Home Button
$("#home-btn").click(function() {
  $("#home-screen").addClass('active');
  $(".menu").removeClass('active');
  $("#content-wrap").addClass('minimized');
});

// App
$(".app-icon").click(function() {
  $("#content-wrap").removeClass('minimized');
  setTimeout(function(){ $("#home-screen").removeClass('active'); }, 300);
});

// Overlay
$("#overlay").click(function () {
  $("#content-wrap").removeClass('inactive');
  $("#sidemenu").removeClass('active');
});

// Options
$("#options-btn").click(function() {
  $("#song-options").addClass('active');
});

// Bluetooth
$("#bluetooth-btn").click(function() {
  $("#bluetooth-devices").addClass('active');
});

// Bluetooth Menu
$("#bluetooth-devices ul li").click(function() {
  $(this).toggleClass('connected');
  $(this).siblings().removeClass('connected');
  
  if ($("#bluetooth-devices ul li").hasClass('connected')) {
    $("#sub-controls i.fa-bluetooth-b").addClass('active');
  } else {
    $("#sub-controls i.fa-bluetooth-b").removeClass('active');
  }
});

// Close Menu
$(".close-btn").click(function() {
  $(".menu").removeClass('active');
});

$('#sub-controls i').click(function () {
  if(!$(this).hasClass('fa-bluetooth-b')) {
    $(this).toggleClass('active');
  }
  
  if ($("#heart-icon").hasClass('active')) {
    $("#heart-icon").removeClass('fa-heart-o');
    $("#heart-icon").addClass('fa-heart');
  } else {
    $("#heart-icon").removeClass('fa-heart');
    $("#heart-icon").addClass('fa-heart-o');
  }
});

/*
 * Music Player
 * By Greg Hovanesyan
 * https://codepen.io/gregh/pen/NdVvbm
 */

var audioPlayer = document.querySelector('#content');
var playpauseBtn = audioPlayer.querySelector('#play-btn');
var progress = audioPlayer.querySelector('.progress');
var sliders = audioPlayer.querySelectorAll('.slider');
var player = audioPlayer.querySelector('audio');
var currentTime = audioPlayer.querySelector('#current-time');
var totalTime = audioPlayer.querySelector('#total-time');

var draggableClasses = ['pin'];
var currentlyDragged = null;

window.addEventListener('mousedown', function(event) {
  
  if(!isDraggable(event.target)) return false;
  
  currentlyDragged = event.target;
  let handleMethod = currentlyDragged.dataset.method;
  
  this.addEventListener('mousemove', window[handleMethod], false);

  window.addEventListener('mouseup', () => {
    currentlyDragged = false;
    window.removeEventListener('mousemove', window[handleMethod], false);
  }, false);  
});

playpauseBtn.addEventListener('click', togglePlay);
player.addEventListener('timeupdate', updateProgress);
player.addEventListener('loadedmetadata', () => {
  totalTime.textContent = formatTime(player.duration);
});
player.addEventListener('ended', function(){
  player.currentTime = 0;
  
  if ($(".fa-refresh").hasClass('active')) {
    togglePlay();
  } else {
    if ($(".fa-random").hasClass('active')) {
      let songs = $("#songs li").length - 1;
      let randomSong = Math.floor(Math.random() * songs) + 1;
      $('.jcarousel').jcarousel('scroll', '+=' + randomSong);
    } else {
      $('.jcarousel').jcarousel('scroll', '+=1');
    }
    togglePlay();
  }
});

sliders.forEach(slider => {
  let pin = slider.querySelector('.pin');
  slider.addEventListener('click', window[pin.dataset.method]);
});

function isDraggable(el) {
  let canDrag = false;
  let classes = Array.from(el.classList);
  draggableClasses.forEach(draggable => {
    if(classes.indexOf(draggable) !== -1)
      canDrag = true;
  })
  return canDrag;
}

function inRange(event) {
  let rangeBox = getRangeBox(event);
  let direction = rangeBox.dataset.direction;
  let screenOffset = document.querySelector("#screen").offsetLeft + 26;
  var min = screenOffset - rangeBox.offsetLeft;
  var max = min + rangeBox.offsetWidth;   
  if(event.clientX < min || event.clientX > max) { return false };
  return true;
}

function updateProgress() {
  var current = player.currentTime;
  var percent = (current / player.duration) * 100;
  progress.style.width = percent + '%';
  
  currentTime.textContent = formatTime(current);
}

function getRangeBox(event) {
  let rangeBox = event.target;
  let el = currentlyDragged;
  if(event.type == 'click' && isDraggable(event.target)) {
    rangeBox = event.target.parentElement.parentElement;
  }
  if(event.type == 'mousemove') {
    rangeBox = el.parentElement.parentElement;
  }
  return rangeBox;
}

function getCoefficient(event) {
  let slider = getRangeBox(event);
  let screenOffset = document.querySelector("#screen").offsetLeft + 26;
  let K = 0;
  let offsetX = event.clientX - screenOffset;
  let width = slider.clientWidth;
  K = offsetX / width;
  return K;
}

function rewind(event) {
  if(inRange(event)) {
    player.currentTime = player.duration * getCoefficient(event);
  }
}

function formatTime(time) {
  var min = Math.floor(time / 60);
  var sec = Math.floor(time % 60);
  return min + ':' + ((sec<10) ? ('0' + sec) : sec);
}

function togglePlay() {
  player.volume = 0.5;
  
  if(player.paused) {
    player.play();
  } else {
    player.pause();
  }  
}
</script>
</html>