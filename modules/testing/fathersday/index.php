

<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  
<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

<link rel="mask-icon" type="" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />


  <title>Father&#39;s Day</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Bungee+Shade'>
  
<style>
@charset "UTF-8";
.kid .pants:before, .kid .body:before, .kid .body:after, .dad .pants:after, .dad .pants:before, .dad .body .eye:before, .dad .body .eye:after, .dad .body:before, .dad .body:after, #message:after, .container:before, .ear {
  content: "";
  display: block;
  position: absolute;
}

@-webkit-keyframes arm-swing {
  0%, 10% {
    transform: rotate(80deg);
  }
  40%, 60% {
    transform: rotate(20deg);
  }
  90%, 100% {
    transform: rotate(80deg);
  }
}

@keyframes arm-swing {
  0%, 10% {
    transform: rotate(80deg);
  }
  40%, 60% {
    transform: rotate(20deg);
  }
  90%, 100% {
    transform: rotate(80deg);
  }
}
@-webkit-keyframes arm-swing-opp {
  0%, 10% {
    transform: rotate(-80deg);
  }
  40%, 60% {
    transform: rotate(-20deg);
  }
  90%, 100% {
    transform: rotate(-80deg);
  }
}
@keyframes arm-swing-opp {
  0%, 10% {
    transform: rotate(-80deg);
  }
  40%, 60% {
    transform: rotate(-20deg);
  }
  90%, 100% {
    transform: rotate(-80deg);
  }
}
@-webkit-keyframes toss {
  0% {
    top: 20%;
    transform: rotate(20deg);
  }
  40%, 50% {
    top: -60%;
    transform: rotate(0);
  }
  90%, 100% {
    top: 20%;
    transform: rotate(20deg);
  }
}
@keyframes toss {
  0% {
    top: 20%;
    transform: rotate(20deg);
  }
  40%, 50% {
    top: -60%;
    transform: rotate(0);
  }
  90%, 100% {
    top: 20%;
    transform: rotate(20deg);
  }
}
@-webkit-keyframes tip {
  0% {
    transform: rotate(10deg);
  }
  40%, 50% {
    transform: rotate(0);
  }
  90%, 100% {
    transform: rotate(10deg);
  }
}
@keyframes tip {
  0% {
    transform: rotate(10deg);
  }
  40%, 50% {
    transform: rotate(0);
  }
  90%, 100% {
    transform: rotate(10deg);
  }
}
@-webkit-keyframes blink {
  0% {
    transform: scaleX(1) scaleY(1);
  }
  1% {
    transform: scaleX(1.3) scaleY(0.1);
  }
  2% {
    transform: scaleX(1) scaleY(1);
  }
  60% {
    transform: scaleX(1) scaleY(1);
  }
  61% {
    transform: scaleX(1.3) scaleY(0.1);
  }
  62% {
    transform: scaleX(1) scaleY(1);
  }
  100% {
    transform: scaleX(1) scaleY(1);
  }
}
@keyframes blink {
  0% {
    transform: scaleX(1) scaleY(1);
  }
  1% {
    transform: scaleX(1.3) scaleY(0.1);
  }
  2% {
    transform: scaleX(1) scaleY(1);
  }
  60% {
    transform: scaleX(1) scaleY(1);
  }
  61% {
    transform: scaleX(1.3) scaleY(0.1);
  }
  62% {
    transform: scaleX(1) scaleY(1);
  }
  100% {
    transform: scaleX(1) scaleY(1);
  }
}
@-webkit-keyframes eye {
  0% {
    top: 6px;
  }
  40%, 50% {
    top: 2px;
  }
  100% {
    top: 6px;
  }
}
@keyframes eye {
  0% {
    top: 6px;
  }
  40%, 50% {
    top: 2px;
  }
  100% {
    top: 6px;
  }
}
@-webkit-keyframes mouth {
  0%, 100% {
    border-radius: 0;
    border-width: 8px 5px 5px 5px;
    border-color: #fff transparent transparent transparent;
    top: 35px;
  }
  40%, 50% {
    width: 10px;
    height: 5px;
    border-radius: 50%;
    border-width: 2px;
    border-color: transparent transparent #fff transparent;
    top: 30px;
  }
}
@keyframes mouth {
  0%, 100% {
    border-radius: 0;
    border-width: 8px 5px 5px 5px;
    border-color: #fff transparent transparent transparent;
    top: 35px;
  }
  40%, 50% {
    width: 10px;
    height: 5px;
    border-radius: 50%;
    border-width: 2px;
    border-color: transparent transparent #fff transparent;
    top: 30px;
  }
}
@-webkit-keyframes color-change {
  0%, 100% {
    background-color: #7dcdcc;
  }
  25% {
    background-color: #df202c;
  }
  50% {
    background-color: #ff6766;
  }
  75% {
    background-color: #525a5d;
  }
}
@keyframes color-change {
  0%, 100% {
    background-color: #7dcdcc;
  }
  25% {
    background-color: #df202c;
  }
  50% {
    background-color: #ff6766;
  }
  75% {
    background-color: #525a5d;
  }
}
body {
  background-image: url("https://www.transparenttextures.com/patterns/asfalt-light.png");
  -webkit-animation: color-change 12.5s linear infinite;
          animation: color-change 12.5s linear infinite;
}

.container, .body {
  position: relative;
}

.arm {
  position: absolute;
  border-radius: 50px;
}

.eye {
  position: absolute;
  border-radius: 50%;
  display: block;
}

.ear {
  border-radius: 50%;
}

.pants {
  position: absolute;
  bottom: 0;
  z-index: 50;
}

.body, .pants {
  border-radius: 50px 50px 0 0;
}

.container {
  width: 0px;
  margin: 30vh auto;
  
}
.container:before {
  width: 200px;
  height: 200px;
  left: 40px;
  top: 30px;
  background: rgba(250, 250, 250, 0.8);
  border-radius: 50%;
}

#message {
  margin-left: -465px;
  font-family: "Bungee Shade", cursive;
  font-size: 100px;
  color: #fafafa;
  text-shadow: -2px 2px 1px rgba(0, 0, 0, 0.2);
}
#message:after {
  width: 867px;
  padding: 30px;
  top: -140px;
  content: "To all the father figures out there";
  z-index: -1;
}
#message.one:after {
  width: 890px;
  content: "Thanks for every amazing thing you do";
}
#message.two:after {
  width: 867px;
  content: "We hope you have a great Father's Day By Your Son";
}

.dad {
  position: relative;
  margin-left: 100px;
}
.dad .body {
  width: 100px;
  height: 200px;
  background-color: #c68642;
  -webkit-animation: tip 1.25s cubic-bezier(1, 0.35, 0, 2) infinite;
          animation: tip 1.25s cubic-bezier(1, 0.35, 0, 2) infinite;
}
.dad .body:after {
  width: 30px;
  height: 10px;
  top: 70px;
  left: 40px;
  border: 3px solid transparent;
  border-radius: 50%;
  border-bottom: 3px solid #2e1e0e;
}
.dad .body:before {
  width: 110px;
  height: 10px;
  z-index: 100;
  bottom: 0;
  background-color: #070502;
}
.dad .body .ear {
  width: 20px;
  height: 20px;
  background: #c68642;
}
.dad .body .ear.left {
  top: 60px;
  left: -10px;
  box-shadow: -1px 1px 1px rgba(0, 0, 0, 0.2);
}
.dad .body .ear.right {
  top: 60px;
  right: -10px;
}
.dad .body .eye {
  width: 20px;
  height: 20px;
  background: #fff;
  top: 50px;
  border-top: 2px solid #7c5226;
  -webkit-animation: blink 1.25s infinite;
          animation: blink 1.25s infinite;
}
.dad .body .eye.left {
  left: 30px;
}
.dad .body .eye.right {
  left: 70px;
}
.dad .body .eye:after {
  width: 10px;
  height: 10px;
  right: 2px;
  background: #55381a;
  border-radius: 50%;
  -webkit-animation: eye 1.25s infinite;
          animation: eye 1.25s infinite;
}
.dad .body .eye:before {
  width: 20px;
  height: 20px;
  top: -15px;
  left: -5px;
  border-radius: 50%;
  border: 3px solid transparent;
  border-top: 3px solid #55381a;
}
.dad .pants {
  background-color: #a46c31;
  width: 100px;
  height: 100px;
}
.dad .pants:before {
  width: 100px;
  height: 45px;
  background: #fff;
}
.dad .pants:after {
  width: 3px;
  height: 30px;
  background: #070502;
  bottom: 0;
  left: 60px;
}
.dad .arm {
  background-color: #c68642;
  width: 30px;
  height: 60px;
  -webkit-animation: arm-swing 1.25s ease-out infinite;
          animation: arm-swing 1.25s ease-out infinite;
  transform-origin: 0 100%;
}
.dad .arm.right {
  left: 65px;
  top: 35px;
}
.dad .arm.left {
  left: 40px;
  top: 45px;
  z-index: 100;
  box-shadow: -1px 1px 1px rgba(0, 0, 0, 0.2);
}

.kid {
  position: absolute;
  z-index: 51;
  left: 200px;
  -webkit-animation: toss 1.25s ease-in-out infinite;
          animation: toss 1.25s ease-in-out infinite;
}
.kid .body {
  background-color: #f1c27d;
  width: 50px;
  height: 100px;
}
.kid .body:after {
  width: 0;
  height: 0;
  left: 15px;
  border-style: solid;
  -webkit-animation: mouth 1.25s ease-in-out infinite;
          animation: mouth 1.25s ease-in-out infinite;
}
.kid .body:before {
  width: 56px;
  height: 3px;
  z-index: 100;
  bottom: 0;
  left: -3px;
  background-color: #070502;
}
.kid .body .eye {
  width: 10px;
  height: 10px;
  background: transparent;
  border: 2px solid transparent;
  border-top: 2px solid #c07b15;
  top: 25px;
  z-index: 1;
}
.kid .body .eye.right {
  left: 5px;
}
.kid .body .eye.left {
  left: 25px;
}
.kid .body .ear {
  width: 10px;
  height: 10px;
  background: #f1c27d;
  top: 30px;
}
.kid .body .ear.left {
  left: -5px;
}
.kid .body .ear.right {
  right: -5px;
}
.kid .pants {
  background-color: #ecac4f;
  width: 50px;
  height: 50px;
}
.kid .pants:before {
  width: 50px;
  height: 25px;
  background: #fff;
}
.kid .arm {
  background-color: #f1c27d;
  width: 20px;
  height: 40px;
  top: 35px;
}
.kid .arm.right {
  left: -5px;
  -webkit-animation: arm-swing 1.25s cubic-bezier(1, 0.35, 0, 2) infinite;
          animation: arm-swing 1.25s cubic-bezier(1, 0.35, 0, 2) infinite;
}
.kid .arm.left {
  left: 35px;
  -webkit-animation: arm-swing-opp 1.25s cubic-bezier(1, 0.35, 0, 2) infinite;
          animation: arm-swing-opp 1.25s cubic-bezier(1, 0.35, 0, 2) infinite;
}
.bg1{
	background-image: url("bg_container.png");
}

body {
  background-color: black;
  background-image:
radial-gradient(white, rgba(255,255,255,.2) .33em, transparent 20px),
radial-gradient(white, rgba(255,255,255,.15) .3em, transparent 30px),
radial-gradient(white, rgba(255,255,255,.1) .24em, transparent 47px),
radial-gradient(white, rgba(255,255,255,.05) .17em, transparent 57px),
radial-gradient(rgba(255,255,255,.4),2px, transparent 30px);
background-size: 100%, 350px 350px, 250px 250px, 150px 150px; 
background-position: 0 0, 40px 60px, 130px 270px, 70px 100px;
}

marquee {
  margin: 0 auto;
  text-align:center;
}

h1, h2, h3, p {
  color: yellow;
  text-align: center;
}

h1 {
  font-size:1em;

}

h2 {
    font-variant:small-caps;
}

.scrollingtext {
font-family:"Franklin Gothic";
font-size:2em;
line-height:1em;
text-align: center;
color:#FFFF33;
  margin: auto;
  position: absolute;
  animation: marquee 24s linear infinite;
}

@keyframes marquee {
  0% {  	  transform: perspective(10px) rotateX(1deg);
 }
  100% { transform: perspective(10px) rotateX(1deg);
 }
}

#butterfly1 {
  position:absolute;
  top:0;
  right:50px;
}

#butterfly2 {
  position:absolute;
  top:0;
  left:50px;
  transform: scaleX(-1);
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" class="bg1">
  <div class="container">
  
  <div class="dad">
    <div class="left arm"></div>
    <div class="right arm"></div>
    <div class="body">
      <div class="ear right"></div>
      <div class="ear left"></div>
      <div class="eye right"></div>
      <div class="eye left"></div>
      <div class="pants"></div>
    </div>
  </div>
  <div class="kid">
    <div class="left arm"></div>
    <div class="right arm"></div>
    <div class="body">
      <div class="ear right"></div>
      <div class="ear left"></div>
      <div class="eye right"></div>
      <div class="eye left"></div>
      <div class="pants"></div>
    </div>
  </div>
  <div id="message"></div>
  
</div>
<img src="https://78.media.tumblr.com/9077410affcd1961f5fe0b49595e6fca/tumblr_otz3669tUl1rlcsyjo1_400.gif" id = "butterfly1">
      <img src="https://78.media.tumblr.com/9077410affcd1961f5fe0b49595e6fca/tumblr_otz3669tUl1rlcsyjo1_400.gif" id = "butterfly2">
<div style="
  margin:0 0 0 0;
  border: solid red 50px;
  border-radius: 10px;
  width: 100vw;
  height: auto;">
  <marquee direction="up" class="scrollingtext" scrollamount="4" behavior="scroll">
  	<h1>Happy Fathers Day Papa</h1>
  	<h1>AAP SADA KHUSH RAHIYE!!</h1>
<img src="https://i.pinimg.com/736x/1d/e2/e4/1de2e480e6af7cc1410baaf8de9146c1.jpg">
<img src="https://shayarinhindi.com/wp-content/uploads/2020/06/fathers-day-2020-quotes-in-hindi-S252-21-Papa-21.jpg">
</marquee>
</div>  
<!--<img src="https://www.achisoch.com/wp-content/uploads/2016/05/Quotes-on-Fathers-Day-in-Hindi-with-Images-Picture.jpg" style="
  margin:30px 0 0 0;
  width: auto;
  height: auto;">  
-->

    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-8216c69d01441f36c0ea791ae2d4469f0f8ff5326f00ae2d00e4bb7d20e24edb.js"></script>

  
      <script id="rendered-js" >
var message = document.querySelector('#message');
var messages = ["one", "two"];
var i = 0;

function myLoop() {
  var timeout =
  setTimeout(function () {
    message.removeAttribute("class");
    message.classList.add(messages[i]);
    i++;
    console.log(i);
    if (i > messages.length) {
      i = 0;
      message.removeAttribute("class");
    };
    clearTimeout(timeout);
    myLoop();
  }, 3000);
};
myLoop();
//# sourceURL=pen.js
    </script>
    <style type="text/css">
    	.m1{
    		position: static;
left: 1;
top: 1;
width: 70px;
height: 100%;
    	}

    </style>
	<marquee class="m1" direction="up">
	<h1>ADARSH pUSHPENDRA PANDEY</h1>
</marquee>

</body>

</html>
 
