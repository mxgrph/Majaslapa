<html lang="en" style="--X:0.498453; --Y:0.0204082;"><link type="text/css" rel="stylesheet" id="dark-mode-general-link"><link type="text/css" rel="stylesheet" id="dark-mode-custom-link"><style lang="en" type="text/css" id="dark-mode-custom-style"></style><head>

  <meta charset="UTF-8">
  
<link rel="apple-touch-icon" type="image/png" href="https://static.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">

<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">


  <title>PAGE NOT FOUND🐻😭</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
  
<style>
@import url("https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap");
* {
  box-sizing: border-box;
}
:root {
  --light: 5;
}
body {
  background: hsl(0, 0%, calc(var(--light) * 1%));
  font-family: 'Roboto Mono', monospace;
}
@media (prefers-color-scheme: dark) {
  :root {
    --light: 5;
  }
}
@media (prefers-color-scheme: light) {
  :root {
    --light: 95;
  }
}
h1 {
  margin: 0;
}
a {
  color: hsl(0, 0%, calc((100 - var(--light)) * 1%));
  font-weight: bold;
}
#app {
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
          align-items: center;
  -webkit-box-pack: center;
          justify-content: center;
  min-height: 100vh;
}
.glitchy-text {
  color: hsl(0, 0%, calc((100 - var(--light, 95)) * 1%));
  display: inline-block;
  position: relative;
}
.glitchy-text__char--readable {
  opacity: 0;
  position: absolute;
}
.glitchy-text__char {
  color: transparent;
  position: relative;
}
.glitchy-text__char:after {
  --txt: attr(data-char);
  -webkit-animation-duration: 0.2s;
          animation-duration: 0.2s;
  -webkit-animation-delay: 0.2s;
          animation-delay: 0.2s;
  -webkit-animation-fill-mode: backwards;
          animation-fill-mode: backwards;
  -webkit-animation-timing-function: steps(1);
          animation-timing-function: steps(1);
  -webkit-animation-iteration-count: var(--count);
          animation-iteration-count: var(--count);
  -webkit-animation-name: glitch-switch;
          animation-name: glitch-switch;
  color: hsl(0, 0%, calc((100 - var(--light, 95)) * 1%));
  -webkit-transition: color 0.2s ease 0s;
  transition: color 0.2s ease 0s;
  position: absolute;
  content: var(--txt);
  left: 0;
  top: 0;
}
.bear__shades {
  opacity: var(--bear-shades);
}
.bear__tear-stream {
  fill: hsla(200, 100%, 75%, var(--bear-tears, 0));
}
.bear__brows {
  stroke: hsla(0, 0%, 0%, var(--bear-brows, 0));
}
.bear__eye {
  fill: hsla(0, 0%, 0%, var(--bear-eyes, 0));
}
.bear-logo {
  grid-row: span 2;
  position: relative;
  max-width: 400px;
  -o-object-fit: contain;
     object-fit: contain;
  height: 6rem;
  width: 6rem;
}
.bear__eye--teary {
  fill: hsla(200, 100%, 75%, calc(var(--bear-tears, 0) - 0.5));
}
@media (min-width: 768px) {
  .bear-logo {
    height: 12rem;
    width: 12rem;
  }
}
.return-link:hover ~ .bear-logo--tears {
  --bear-brows: 0;
  --bear-tears: 0;
}
.bear-logo--tears {
  --bear-shades: 0;
  --bear-brows: 1;
  --bear-tears: 0.75;
  --bear-eyes: 1;
}
.bear-logo--tears path,
.bear-logo--tears circle,
.bear-logo--tears ellipse {
  -webkit-transition: fill 0.2s ease 0s, -webkit-transform 0.2s ease 0s;
  transition: fill 0.2s ease 0s, -webkit-transform 0.2s ease 0s;
  transition: fill 0.2s ease 0s, transform 0.2s ease 0s;
  transition: fill 0.2s ease 0s, transform 0.2s ease 0s, -webkit-transform 0.2s ease 0s;
}
.return-link:hover ~ .bear-logo--tears .bear__eye {
  -webkit-transform: scaleY(1);
          transform: scaleY(1);
  fill: hsla(0, 100%, 0%, var(--bear-eyes));
}
.bear-logo--tears .bear__eye {
  -webkit-transform: scaleY(0.25);
          transform: scaleY(0.25);
  -webkit-transform-origin: 97px 894px;
          transform-origin: 97px 894px;
  fill: hsla(200, 100%, 75%, var(--bear-eyes));
}
.bear-logo--tears .bear__eye--right {
  -webkit-transform-origin: 201px 894px;
          transform-origin: 201px 894px;
}
/* Handle mousemove translation of characters */
/* Logo */
.bear-logo--tears {
  --scaleX: -50;
  --scaleY: -50;
}
/* 404 */
.four-oh-four__code span:nth-of-type(2) {
  --scaleX: 30;
  --scaleY: -20;
}
.four-oh-four__code span:nth-of-type(3) {
  --scaleX: -20;
  --scaleY: 50;
}
.four-oh-four__code span:nth-of-type(4) {
  --scaleX: -30;
  --scaleY: 40;
}
/* Not found */
.four-oh-four__code-message span:nth-of-type(2) {
  --scaleX: 20;
  --scaleY: 10;
}
.four-oh-four__code-message span:nth-of-type(3) {
  --scaleX: 5;
  --scaleY: -10;
}
.four-oh-four__code-message span:nth-of-type(4) {
  --scaleX: 40;
  --scaleY: -30;
}
.four-oh-four__code-message span:nth-of-type(6) {
  --scaleX: 50;
  --scaleY: 50;
}
.four-oh-four__code-message span:nth-of-type(7) {
  --scaleX: 0;
  --scaleY: -15;
}
.four-oh-four__code-message span:nth-of-type(8) {
  --scaleX: 35;
  --scaleY: 10;
}
.four-oh-four__code-message span:nth-of-type(9) {
  --scaleX: -40;
  --scaleY: 25;
}
.four-oh-four__code-message span:nth-of-type(10) {
  --scaleX: 50;
  --scaleY: -25;
}
.bear-logo,
.four-oh-four__code span:nth-of-type(2):after,
.four-oh-four__code span:nth-of-type(3):after,
.four-oh-four__code span:nth-of-type(4):after,
.four-oh-four__code-message span:nth-of-type(2):after,
.four-oh-four__code-message span:nth-of-type(3):after,
.four-oh-four__code-message span:nth-of-type(4):after,
.four-oh-four__code-message span:nth-of-type(6):after,
.four-oh-four__code-message span:nth-of-type(7):after,
.four-oh-four__code-message span:nth-of-type(8):after,
.four-oh-four__code-message span:nth-of-type(9):after,
.four-oh-four__code-message span:nth-of-type(10):after {
  --translateX: calc((var(--X)) * var(--scaleX) * 1px);
  --translateY: calc((var(--Y)) * var(--scaleY) * 1px);
  -webkit-transform: translate(var(--translateX), var(--translateY));
          transform: translate(var(--translateX), var(--translateY));
}
@-webkit-keyframes glitch-switch {
  0% {
    content: var(--char-0);
  }
  10% {
    content: var(--char-1);
  }
  20% {
    content: var(--char-2);
  }
  30% {
    content: var(--char-3);
  }
  40% {
    content: var(--char-4);
  }
  50% {
    content: var(--char-5);
  }
  60% {
    content: var(--char-6);
  }
  70% {
    content: var(--char-7);
  }
  80% {
    content: var(--char-8);
  }
  90% {
    content: var(--char-9);
  }
  100% {
    content: var(--char-0);
  }
}
@keyframes glitch-switch {
  0% {
    content: var(--char-0);
  }
  10% {
    content: var(--char-1);
  }
  20% {
    content: var(--char-2);
  }
  30% {
    content: var(--char-3);
  }
  40% {
    content: var(--char-4);
  }
  50% {
    content: var(--char-5);
  }
  60% {
    content: var(--char-6);
  }
  70% {
    content: var(--char-7);
  }
  80% {
    content: var(--char-8);
  }
  90% {
    content: var(--char-9);
  }
  100% {
    content: var(--char-0);
  }
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


<style data-styled-components=""></style><script type="text/javascript">// Promises 
var _eid_promises = {}; 
// Turn the incoming message from extension 
// into pending Promise resolving 
window.addEventListener("message", function(event) { 
    if(event.source !== window) return; 
    if(event.data.src && (event.data.src === "background.js")) { 
        console.log("Page received: "); 
        console.log(event.data); 
        // Get the promise 
        if(event.data.nonce) { 
            var p = _eid_promises[event.data.nonce]; 
            // resolve 
            if(event.data.result === "ok") { 
                if(event.data.signature !== undefined) { 
                    p.resolve({hex: event.data.signature}); 
                } else if(event.data.version !== undefined) { 
                    p.resolve(event.data.extension + "/" + event.data.version); 
                } else if(event.data.cert !== undefined) { 
                    p.resolve({hex: event.data.cert}); 
                } else { 
                    console.log("No idea how to handle message"); 
                    console.log(event.data); 
                } 
            } else { 
                // reject 
                p.reject(new Error(event.data.result)); 
            } 
            delete _eid_promises[event.data.nonce]; 
        } else { 
            console.log("No nonce in event msg"); 
        } 
    } 
}, false); 
 
 
function TokenSigning() { 
    function nonce() { 
        var val = ""; 
        var hex = "abcdefghijklmnopqrstuvwxyz0123456789"; 
        for(var i = 0; i < 16; i++) val += hex.charAt(Math.floor(Math.random() * hex.length)); 
        return val; 
    } 
 
    function messagePromise(msg) { 
        return new Promise(function(resolve, reject) { 
            // amend with necessary metadata 
            msg["nonce"] = nonce(); 
            msg["src"] = "page.js"; 
            // send message 
            window.postMessage(msg, "*"); 
            // and store promise callbacks 
            _eid_promises[msg.nonce] = { 
                resolve: resolve, 
                reject: reject 
            }; 
        }); 
    } 
    this.getCertificate = function(options) { 
        var msg = {type: "CERT", lang: options.lang, filter: options.filter}; 
        console.log("getCertificate()"); 
        return messagePromise(msg); 
    }; 
    this.sign = function(cert, hash, options) { 
        var msg = {type: "SIGN", cert: cert.hex, hash: hash.hex, hashtype: hash.type, lang: options.lang, info: options.info}; 
        console.log("sign()"); 
        return messagePromise(msg); 
    }; 
    this.getVersion = function() { 
        console.log("getVersion()"); 
        return messagePromise({ 
            type: "VERSION" 
        }); 
    }; 
}</script></head>

<body translate="no">
  <div id="app"><main class="sc-ifAKCX iOtDzm"><div class="sc-htpNat kfZKbw"><a class="return-link sc-bZQynM fMTyMn" href="/#" rel="noreferrer noopener">Return to happiness</a><svg class="bear-logo bear-logo--tears" viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg"><g transform="matrix(1.34105 0 0 1.34105 -51.157 -1049.694)"><path d="M242.822 893.869c0 61.251-41.365 106.284-94.67 106.284-53.306 0-90.974-45.033-90.974-106.284 0-61.252 37.668-85.951 90.973-85.951 53.306 0 94.67 24.699 94.67 85.95z" fill="#803300"></path><path d="M211.925 958.105c0 19.907-28.138 38.819-62.85 38.819-34.71 0-61-18.912-61-38.82 0-19.907 26.29-33.273 61-33.273 34.712 0 62.85 13.366 62.85 33.274z" fill="#e9c6af"></path><path d="M179.114 931.763c0 7.657-19.04 24.493-30.27 24.493s-32.117-16.836-32.117-24.493 20.888-12.477 32.118-12.477 30.27 4.82 30.27 12.477z"></path><ellipse ry="23.111" rx="23.762" cy="827.682" cx="68.304" fill="#803300"></ellipse><path d="M84.784 826.317a16.549 16.095 0 00-16.48-14.731 16.549 16.095 0 00-16.548 16.095 16.549 16.095 0 0016.548 16.096 16.549 16.095 0 001.132-.039c.815-1.337 1.582-2.727 2.471-3.983a65.703 65.703 0 015.055-6.283 65.597 65.597 0 015.713-5.548c.668-.576 1.417-1.058 2.109-1.607z" fill="#e9c6af"></path><ellipse transform="scale(-1 1)" cx="-231.243" cy="827.682" rx="23.762" ry="23.111" fill="#803300"></ellipse><path d="M214.764 826.317a16.549 16.095 0 0116.48-14.731 16.549 16.095 0 0116.548 16.095 16.549 16.095 0 01-16.549 16.096 16.549 16.095 0 01-1.131-.039c-.816-1.337-1.582-2.727-2.472-3.983a65.703 65.703 0 00-5.055-6.283 65.597 65.597 0 00-5.712-5.548c-.67-.576-1.418-1.058-2.11-1.607z" fill="#e9c6af"></path><path d="M147.731 815.358c-13.396 0-26.022 1.079-37.671 3.334v11.353c11.649-2.255 24.275-3.334 37.671-3.334 15.104 0 29.459 1.373 42.667 4.256v-11.355c-13.208-2.883-27.564-4.254-42.667-4.254z" fill="red"></path><path d="M165.195 816.013a15.875 7.813 0 014.43 5.412 15.875 7.813 0 01-5.414 5.863c9.116.653 17.878 1.866 26.186 3.68v-11.356c-8.007-1.748-16.44-2.931-25.202-3.6z" fill="#e50000"></path><path d="M148.387 789.038c-43.49 0-75.817 18.34-83.229 62.715 12.322-10.516 27.524-17.553 44.903-21.51 0 0-2.734-13.778 10.25-16.029 12.983-2.25 14.025-4 27.421-4 15.103 0 16.422.44 30.666 4 14.245 3.561 12 17.113 12 17.113 17.218 4.421 32.483 11.864 44.9 22.71-7.275-46.03-42.684-64.999-86.911-64.999z" fill="#1a1a1a"></path><path class="bear__tear-stream" d="M190.665 893.336v96.221c8.24-4.43 15.761-10.15 22.37-16.971v-79.25h-22.37zM86.056 893.336v80.399c6.546 6.885 14.056 12.592 22.37 16.92v-97.32h-22.37z"></path><path class="bear__brows" d="M96.601 864.041a21.271 21.271 0 01-6.78 15.572 21.271 21.271 0 01-16.02 5.644M203.53 864.041a21.271 21.271 0 006.78 15.572 21.271 21.271 0 0016.02 5.644" fill="none" stroke-width="2.983" stroke-linecap="round" stroke-linejoin="round"></path><circle class="bear__eye bear__eye--left" r="11.185" cy="894.081" cx="97.242"></circle><circle class="bear__eye bear__eye--right" r="11.185" cx="201.851" cy="894.081"></circle><g class="bear__shades"><path d="M77.29 854.608c-6.508-.07-13.363.182-22.8 2.131l-14.318 2.769 2.308 15.038c2.094.293 4.984 1.016 6.352 2.848 3.528 4.722 1.202 9.286 2.003 17.625 2.67 27.781 11.92 33.596 26.247 35.267 7.502.875 22.816 2.282 33.28-1.433 9.456-3.357 18.223-9.868 24.158-17.96 6.274-8.553 6.948-18.43 10.843-25.92 2.76-5.31 7.7-3.786 9.258.39 2.951 7.91 4.379 16.977 10.653 25.53 5.935 8.092 14.702 14.603 24.159 17.96 10.463 3.715 25.777 2.308 33.279 1.433 14.326-1.671 23.578-7.486 26.249-35.267.801-8.339-1.525-12.903 2.003-17.625 1.414-1.893 4.463-2.611 6.567-2.885l2.297-14.962-14.522-2.808c-15.1-3.12-23.591-1.89-34.623-1.957-4.093-.025-8.777.115-13.136.573-8.125.855-16.176 2.382-24.174 4.05-7.988 1.665-15.589 6.1-23.747 5.942-7.868-.153-14.966-4.977-22.664-6.616-8.132-1.732-14.824-3.106-24.713-3.376-4.794-.13-9.043-.598-13.136-.573-4.137.026-7.918-.132-11.823-.174z"></path><path d="M85.28 860.471c-10.088.168-24.807.706-28.48 12.251-3.277 15.249-3.122 32.76 5.735 45.627 7.396 10.745 23.365 8.637 35.258 8.22 18.899-.663 35.138-15.383 40.158-33.389 1.93-7.753 3.906-11.697.696-19.382-7.653-8.953-20.099-11.778-30.58-12.967a443.553 443.553 0 00-22.787-.36z" fill="#333"></path><path d="M56.04 864.299a4.079 1.692 0 01-4.058 1.692 4.079 1.692 0 01-4.1-1.675 4.079 1.692 0 014.017-1.71 4.079 1.692 0 014.14 1.658" fill="#b3b3b3"></path><path d="M214.515 860.471c10.088.168 24.807.706 28.481 12.251 3.276 15.249 3.12 32.76-5.736 45.627-7.396 10.745-23.365 8.637-35.257 8.22-18.9-.663-35.139-15.383-40.16-33.389-1.928-7.753-3.905-11.697-.695-19.382 7.653-8.953 20.1-11.778 30.58-12.967a443.553 443.553 0 0122.787-.36z" fill="#333"></path><path d="M243.755 864.299a4.079 1.692 0 004.058 1.692 4.079 1.692 0 004.1-1.675 4.079 1.692 0 00-4.017-1.71 4.079 1.692 0 00-4.14 1.658" fill="#b3b3b3"></path><path d="M100.812 860.598l-19.186 66.305c5.485.302 11.181-.16 16.165-.335.244-.008.486-.03.73-.043l18.585-64.222c-3.068-.678-6.13-1.14-9.039-1.47a473.891 473.891 0 00-7.255-.235zM89.154 860.456c-1.292.002-2.586 0-3.875.014-1.081.018-2.235.05-3.403.09l-17.662 59.853c1.729 1.827 3.77 3.172 6.025 4.148l18.915-64.105z" fill="#fff"></path></g></g></svg><h1 class="glitchy-text four-oh-four__code sc-bxivhb iOfoRQ"><span class="glitchy-text__char--readable sc-bdVaJa bDWFJH">404</span><span class="glitchy-text__char sc-bwzfXH uTxCW" aria-hidden="true" data-char="4" style="--count:1.40016; --char-0:&quot;≤&quot;; --char-1:&quot;˜&quot;; --char-2:&quot;£&quot;; --char-3:&quot;≥&quot;; --char-4:&quot;√&quot;; --char-5:&quot;•&quot;; --char-6:&quot;˚&quot;; --char-7:&quot;å&quot;; --char-8:&quot;£&quot;; --char-9:&quot;≈&quot;;">4</span><span class="glitchy-text__char sc-bwzfXH uTxCW" aria-hidden="true" data-char="0" style="--count:1.27005; --char-0:&quot;/&quot;; --char-1:&quot;≤&quot;; --char-2:&quot;<&quot;; --char-3:&quot;µ&quot;; --char-4:&quot;/&quot;; --char-5:&quot;`&quot;; --char-6:&quot;¡&quot;; --char-7:&quot;▒&quot;; --char-8:&quot;å&quot;; --char-9:&quot;>&quot;;">0</span><span class="glitchy-text__char sc-bwzfXH uTxCW" aria-hidden="true" data-char="4" style="--count:3.41184; --char-0:&quot;¡&quot;; --char-1:&quot;∫&quot;; --char-2:&quot;≥&quot;; --char-3:&quot;`&quot;; --char-4:&quot;∫&quot;; --char-5:&quot;–&quot;; --char-6:&quot;ç&quot;; --char-7:&quot;£&quot;; --char-8:&quot;˚&quot;; --char-9:&quot;¢&quot;;">4</span></h1><h1 class="glitchy-text four-oh-four__code-message sc-EHOje chyXhD"><span class="glitchy-text__char--readable sc-bdVaJa bDWFJH">Not found</span><span class="glitchy-text__char sc-bwzfXH uTxCW" aria-hidden="true" data-char="N" style="--count:2.24241; --char-0:&quot;∆&quot;; --char-1:&quot;ƒ&quot;; --char-2:&quot;<&quot;; --char-3:&quot;∆&quot;; --char-4:&quot;¢&quot;; --char-5:&quot;▒&quot;; --char-6:&quot;ç&quot;; --char-7:&quot;∞&quot;; --char-8:&quot;≥&quot;; --char-9:&quot;–&quot;;">N</span><span class="glitchy-text__char sc-bwzfXH uTxCW" aria-hidden="true" data-char="o" style="--count:2.31571; --char-0:&quot;æ&quot;; --char-1:&quot;å&quot;; --char-2:&quot;å&quot;; --char-3:&quot;µ&quot;; --char-4:&quot;<&quot;; --char-5:&quot;√&quot;; --char-6:&quot;√&quot;; --char-7:&quot;æ&quot;; --char-8:&quot;?&quot;; --char-9:&quot;≠&quot;;">o</span><span class="glitchy-text__char sc-bwzfXH uTxCW" aria-hidden="true" data-char="t" style="--count:3.22809; --char-0:&quot;ß&quot;; --char-1:&quot;å&quot;; --char-2:&quot;≤&quot;; --char-3:&quot;∆&quot;; --char-4:&quot;<&quot;; --char-5:&quot;¶&quot;; --char-6:&quot;˙&quot;; --char-7:&quot;…&quot;; --char-8:&quot;≈&quot;; --char-9:&quot;™&quot;;">t</span><span class="glitchy-text__char sc-bwzfXH uTxCW" aria-hidden="true" data-char=" " style="--count:5.73528; --char-0:&quot;§&quot;; --char-1:&quot;/&quot;; --char-2:&quot;ç&quot;; --char-3:&quot;˚&quot;; --char-4:&quot;å&quot;; --char-5:&quot;`&quot;; --char-6:&quot;√&quot;; --char-7:&quot;©&quot;; --char-8:&quot;ç&quot;; --char-9:&quot;/&quot;;"> </span><span class="glitchy-text__char sc-bwzfXH uTxCW" aria-hidden="true" data-char="f" style="--count:5.73247; --char-0:&quot;∫&quot;; --char-1:&quot;¢&quot;; --char-2:&quot;√&quot;; --char-3:&quot;¬&quot;; --char-4:&quot;∂&quot;; --char-5:&quot;≈&quot;; --char-6:&quot;§&quot;; --char-7:&quot;∞&quot;; --char-8:&quot;¢&quot;; --char-9:&quot;≥&quot;;">f</span><span class="glitchy-text__char sc-bwzfXH uTxCW" aria-hidden="true" data-char="o" style="--count:4.41602; --char-0:&quot;•&quot;; --char-1:&quot;∂&quot;; --char-2:&quot;˚&quot;; --char-3:&quot;░&quot;; --char-4:&quot;˙&quot;; --char-5:&quot;æ&quot;; --char-6:&quot;∫&quot;; --char-7:&quot;…&quot;; --char-8:&quot;º&quot;; --char-9:&quot;≠&quot;;">o</span><span class="glitchy-text__char sc-bwzfXH uTxCW" aria-hidden="true" data-char="u" style="--count:5.50208; --char-0:&quot;<&quot;; --char-1:&quot;ç&quot;; --char-2:&quot;√&quot;; --char-3:&quot;∞&quot;; --char-4:&quot;░&quot;; --char-5:&quot;–&quot;; --char-6:&quot;∆&quot;; --char-7:&quot;ç&quot;; --char-8:&quot;…&quot;; --char-9:&quot;–&quot;;">u</span><span class="glitchy-text__char sc-bwzfXH uTxCW" aria-hidden="true" data-char="n" style="--count:1.85064; --char-0:&quot;`&quot;; --char-1:&quot;≠&quot;; --char-2:&quot;ª&quot;; --char-3:&quot;˜&quot;; --char-4:&quot;˙&quot;; --char-5:&quot;§&quot;; --char-6:&quot;/&quot;; --char-7:&quot;∞&quot;; --char-8:&quot;©&quot;; --char-9:&quot;–&quot;;">n</span><span class="glitchy-text__char sc-bwzfXH uTxCW" aria-hidden="true" data-char="d" style="--count:5.21445; --char-0:&quot;÷&quot;; --char-1:&quot;∆&quot;; --char-2:&quot;§&quot;; --char-3:&quot;≈&quot;; --char-4:&quot;≠&quot;; --char-5:&quot;÷&quot;; --char-6:&quot;™&quot;; --char-7:&quot;<&quot;; --char-8:&quot;∆&quot;; --char-9:&quot;/&quot;;">d</span></h1></div></main></div>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/react/16.13.1/umd/react.production.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/react-dom/16.13.1/umd/react-dom.production.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/styled-components/3.2.1/styled-components.min.js"></script>
  
      <script id="rendered-js">
function _extends() {_extends = Object.assign || function (target) {for (var i = 1; i < arguments.length; i++) {if (window.CP.shouldStopExecution(2)) break;var source = arguments[i];for (var key in source) {if (Object.prototype.hasOwnProperty.call(source, key)) {target[key] = source[key];}}}window.CP.exitedLoop(2);return target;};return _extends.apply(this, arguments);}const {
  React: { useEffect },
  ReactDOM: { render },
  styled: { default: styled } } =
window;

const GLITCH_CHARS = '`¡™£¢∞§¶•ªº–≠åß∂ƒ©˙∆˚¬…æ≈ç√∫˜µ≤≥÷/?░▒▓<>/'.split('');

const ReadableChar = styled.span``;

const GlitchyChar = styled.span``;
/**
                                    * A glitchy text reveal title
                                    */
const GlitchyText = ({ children, ...props }) => {
  return (
    React.createElement("h1", _extends({}, props, { className: `glitchy-text ${props.className}` }),
    React.createElement(ReadableChar, { className: "glitchy-text__char--readable" },
    children),

    children.split('').map((char, idx) => {
      const charStyle = {
        '--count': Math.random() * 5 + 1 };

      for (let i = 0; i < 10; i++) {if (window.CP.shouldStopExecution(1)) break;if (window.CP.shouldStopExecution(0)) break;
        charStyle[`--char-${i}`] = `"${
        GLITCH_CHARS[Math.floor(Math.random() * GLITCH_CHARS.length)]
        }"`;
      }window.CP.exitedLoop(1);window.CP.exitedLoop(0);
      return (
        React.createElement(GlitchyChar, {
          className: "glitchy-text__char",
          "aria-hidden": true,
          "data-char": char,
          key: `glitch-char--${idx}`,
          style: charStyle },
        char));


    })));


};

const Logo = ({ className }) => {
  return (
    React.createElement("svg", {
      className: `bear-logo ${className}`,
      viewBox: "0 0 300 300",
      xmlns: "http://www.w3.org/2000/svg" },
    React.createElement("g", { transform: "matrix(1.34105 0 0 1.34105 -51.157 -1049.694)" },
    React.createElement("path", {
      d: "M242.822 893.869c0 61.251-41.365 106.284-94.67 106.284-53.306 0-90.974-45.033-90.974-106.284 0-61.252 37.668-85.951 90.973-85.951 53.306 0 94.67 24.699 94.67 85.95z",
      fill: "#803300" }),

    React.createElement("path", {
      d: "M211.925 958.105c0 19.907-28.138 38.819-62.85 38.819-34.71 0-61-18.912-61-38.82 0-19.907 26.29-33.273 61-33.273 34.712 0 62.85 13.366 62.85 33.274z",
      fill: "#e9c6af" }),

    React.createElement("path", { d: "M179.114 931.763c0 7.657-19.04 24.493-30.27 24.493s-32.117-16.836-32.117-24.493 20.888-12.477 32.118-12.477 30.27 4.82 30.27 12.477z" }),
    React.createElement("ellipse", {
      ry: "23.111",
      rx: "23.762",
      cy: "827.682",
      cx: "68.304",
      fill: "#803300" }),

    React.createElement("path", {
      d: "M84.784 826.317a16.549 16.095 0 00-16.48-14.731 16.549 16.095 0 00-16.548 16.095 16.549 16.095 0 0016.548 16.096 16.549 16.095 0 001.132-.039c.815-1.337 1.582-2.727 2.471-3.983a65.703 65.703 0 015.055-6.283 65.597 65.597 0 015.713-5.548c.668-.576 1.417-1.058 2.109-1.607z",
      fill: "#e9c6af" }),

    React.createElement("ellipse", {
      transform: "scale(-1 1)",
      cx: "-231.243",
      cy: "827.682",
      rx: "23.762",
      ry: "23.111",
      fill: "#803300" }),

    React.createElement("path", {
      d: "M214.764 826.317a16.549 16.095 0 0116.48-14.731 16.549 16.095 0 0116.548 16.095 16.549 16.095 0 01-16.549 16.096 16.549 16.095 0 01-1.131-.039c-.816-1.337-1.582-2.727-2.472-3.983a65.703 65.703 0 00-5.055-6.283 65.597 65.597 0 00-5.712-5.548c-.67-.576-1.418-1.058-2.11-1.607z",
      fill: "#e9c6af" }),

    React.createElement("path", {
      d: "M147.731 815.358c-13.396 0-26.022 1.079-37.671 3.334v11.353c11.649-2.255 24.275-3.334 37.671-3.334 15.104 0 29.459 1.373 42.667 4.256v-11.355c-13.208-2.883-27.564-4.254-42.667-4.254z",
      fill: "red" }),

    React.createElement("path", {
      d: "M165.195 816.013a15.875 7.813 0 014.43 5.412 15.875 7.813 0 01-5.414 5.863c9.116.653 17.878 1.866 26.186 3.68v-11.356c-8.007-1.748-16.44-2.931-25.202-3.6z",
      fill: "#e50000" }),

    React.createElement("path", {
      d: "M148.387 789.038c-43.49 0-75.817 18.34-83.229 62.715 12.322-10.516 27.524-17.553 44.903-21.51 0 0-2.734-13.778 10.25-16.029 12.983-2.25 14.025-4 27.421-4 15.103 0 16.422.44 30.666 4 14.245 3.561 12 17.113 12 17.113 17.218 4.421 32.483 11.864 44.9 22.71-7.275-46.03-42.684-64.999-86.911-64.999z",
      fill: "#1a1a1a" }),

    React.createElement("path", {
      className: "bear__tear-stream",
      d: "M190.665 893.336v96.221c8.24-4.43 15.761-10.15 22.37-16.971v-79.25h-22.37zM86.056 893.336v80.399c6.546 6.885 14.056 12.592 22.37 16.92v-97.32h-22.37z" }),

    React.createElement("path", {
      className: "bear__brows",
      d: "M96.601 864.041a21.271 21.271 0 01-6.78 15.572 21.271 21.271 0 01-16.02 5.644M203.53 864.041a21.271 21.271 0 006.78 15.572 21.271 21.271 0 0016.02 5.644",
      fill: "none",
      strokeWidth: "2.983",
      strokeLinecap: "round",
      strokeLinejoin: "round" }),

    React.createElement("circle", {
      className: "bear__eye bear__eye--left",
      r: "11.185",
      cy: "894.081",
      cx: "97.242" }),

    React.createElement("circle", {
      className: "bear__eye bear__eye--right",
      r: "11.185",
      cx: "201.851",
      cy: "894.081" }),

    React.createElement("g", { className: "bear__shades" },
    React.createElement("path", { d: "M77.29 854.608c-6.508-.07-13.363.182-22.8 2.131l-14.318 2.769 2.308 15.038c2.094.293 4.984 1.016 6.352 2.848 3.528 4.722 1.202 9.286 2.003 17.625 2.67 27.781 11.92 33.596 26.247 35.267 7.502.875 22.816 2.282 33.28-1.433 9.456-3.357 18.223-9.868 24.158-17.96 6.274-8.553 6.948-18.43 10.843-25.92 2.76-5.31 7.7-3.786 9.258.39 2.951 7.91 4.379 16.977 10.653 25.53 5.935 8.092 14.702 14.603 24.159 17.96 10.463 3.715 25.777 2.308 33.279 1.433 14.326-1.671 23.578-7.486 26.249-35.267.801-8.339-1.525-12.903 2.003-17.625 1.414-1.893 4.463-2.611 6.567-2.885l2.297-14.962-14.522-2.808c-15.1-3.12-23.591-1.89-34.623-1.957-4.093-.025-8.777.115-13.136.573-8.125.855-16.176 2.382-24.174 4.05-7.988 1.665-15.589 6.1-23.747 5.942-7.868-.153-14.966-4.977-22.664-6.616-8.132-1.732-14.824-3.106-24.713-3.376-4.794-.13-9.043-.598-13.136-.573-4.137.026-7.918-.132-11.823-.174z" }),
    React.createElement("path", {
      d: "M85.28 860.471c-10.088.168-24.807.706-28.48 12.251-3.277 15.249-3.122 32.76 5.735 45.627 7.396 10.745 23.365 8.637 35.258 8.22 18.899-.663 35.138-15.383 40.158-33.389 1.93-7.753 3.906-11.697.696-19.382-7.653-8.953-20.099-11.778-30.58-12.967a443.553 443.553 0 00-22.787-.36z",
      fill: "#333" }),

    React.createElement("path", {
      d: "M56.04 864.299a4.079 1.692 0 01-4.058 1.692 4.079 1.692 0 01-4.1-1.675 4.079 1.692 0 014.017-1.71 4.079 1.692 0 014.14 1.658",
      fill: "#b3b3b3" }),

    React.createElement("path", {
      d: "M214.515 860.471c10.088.168 24.807.706 28.481 12.251 3.276 15.249 3.12 32.76-5.736 45.627-7.396 10.745-23.365 8.637-35.257 8.22-18.9-.663-35.139-15.383-40.16-33.389-1.928-7.753-3.905-11.697-.695-19.382 7.653-8.953 20.1-11.778 30.58-12.967a443.553 443.553 0 0122.787-.36z",
      fill: "#333" }),

    React.createElement("path", {
      d: "M243.755 864.299a4.079 1.692 0 004.058 1.692 4.079 1.692 0 004.1-1.675 4.079 1.692 0 00-4.017-1.71 4.079 1.692 0 00-4.14 1.658",
      fill: "#b3b3b3" }),

    React.createElement("path", {
      d: "M100.812 860.598l-19.186 66.305c5.485.302 11.181-.16 16.165-.335.244-.008.486-.03.73-.043l18.585-64.222c-3.068-.678-6.13-1.14-9.039-1.47a473.891 473.891 0 00-7.255-.235zM89.154 860.456c-1.292.002-2.586 0-3.875.014-1.081.018-2.235.05-3.403.09l-17.662 59.853c1.729 1.827 3.77 3.172 6.025 4.148l18.915-64.105z",
      fill: "#fff" })))));





};

const Container = styled.div`
  display: inline-grid;
  grid-gap: 0 1rem;
  grid-template-columns: auto 1fr;
  grid-template-rows: auto auto;
`;

const Code = styled(GlitchyText)`
  align-self: end;
  font-size: 3rem;
  @media (min-width: 768px) {
    font-size: 6rem;
  }
`;

const AppShell = styled.main`
  display: flex;
  align-items: center;
  justify-content: center;
`;

const CodeMessage = styled(GlitchyText)`
  font-size: 1.5rem;

  @media (min-width: 768px) {
    font-size: 3rem;
  }
`;

const Message = styled.a`
  grid-column: span 2;
  grid-row: -1;
  text-align: center;
  margin: 2rem auto;

  &:hover {
    & ~ img {
      background: red;
    }
  }
`;

const FourOhFour = () => {
  useEffect(() => {
    const root = document.documentElement;
    const update = e => {
      if (e.acceleration && e.acceleration.x !== null) {
        root.style.setProperty('--X', e.acceleration.x);
        root.style.setProperty('--Y', e.acceleration.y);
      } else {
        root.style.setProperty('--X', e.pageX / window.innerWidth - 0.5);
        root.style.setProperty('--Y', e.pageY / window.innerHeight - 0.5);
      }
    };

    document.body.addEventListener('mousemove', update);
    window.ondevicemotion = update;
    return () => {
      document.body.removeEventListener('mousemove', update);
    };
  }, []);
  return (
    React.createElement(AppShell, null,
    React.createElement(Container, null,
    React.createElement(Message, { className: "return-link", href: "/#", rel: "noreferrer noopener" }, "Return to happiness"),


    React.createElement(Logo, { className: "bear-logo--tears" }),
    React.createElement(Code, { className: "four-oh-four__code" }, "404"),
    React.createElement(CodeMessage, { className: "four-oh-four__code-message" }, "Not found"))));





};
const ROOT = document.getElementById('app');
render(React.createElement(FourOhFour, null), ROOT);
//# sourceURL=pen.js
    </script>

  




 
</body></html>