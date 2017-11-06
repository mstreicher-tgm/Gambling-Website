<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../else/css/materialize.css">
    <link rel="stylesheet" href="../else/css/stylesheet.css">
    <title></title>
  </head>
  <body>
  <!--  <header>
      <div class="navbar-fixed">
        <nav class="nav" style="background-color: rgba(100, 0, 0, 0.5) !important;">
          <div class="nav-wrapper">
            <div class="nav-container">
              <a href="#home" class="brand-logo page-scroll"><img src="" class="navlogo" /></a>
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li id="navhome"><a href="#home" class="page-scroll">Home</a></li>
                <li id="navabout"><a href="#about" class="page-scroll">Über uns</a></li>
                <li id="navpower"><a href="#power" class="page-scroll">Leistungen</a></li>
                <li id="navreferee"><a href="#referee" class="page-scroll">Referenzen</a></li>
                <li id="navcontact"><a href="#contact"class="page-scroll">Kontakt</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>

      <ul class="side-nav" id="mobile-demo">
        <li id="navhome"><a href="#home" class="page-scroll">Home</a></li>
        <li id="navabout"><a href="#about" class="page-scroll">Über uns</a></li>
        <li id="navpower"><a href="#power" class="page-scroll">Leistungen</a></li>
        <li id="navreferee"><a href="#referee" class="page-scroll">Referenzen</a></li>
        <li id="navcontact"><a href="#contact"class="page-scroll">Kontakt</a></li>
      </ul>
    </header>
-->
    <div class="fixed-action-btn">
      <a class="btn-floating btn-large waves-effect waves-light chat-button">
        <i class="fa fa-comments" aria-hidden="true"></i>
      </a>
    </div>

    <main>
      <div class="row countdown center">
        <dic class="l12 m12 s12">
          <div class="progress">
            <div class="determinate valign-wrapper" style="width: 50%"></div>
            <div class="determinate valign-wrapper" style="width: 100%; background-color: rgba(0,0,0,0) !important;"><span class="rolling-time"> Rolling in 10.00...</span></div>
          </div>
        </div>
      </div>

      <div class="row center">
        <dic class="l12 m12 s12">
          <div class="last-rolls">
            Previous rolls:
            <button class="btn-floating btn waves-effect waves-light last-rolls-btn last-rolls-green">0</button>
            <button class="btn-floating btn waves-effect waves-light last-rolls-btn last-rolls-red">1</button>
            <button class="btn-floating btn waves-effect waves-light last-rolls-btn last-rolls-black">8</button>
            <button class="btn-floating btn waves-effect waves-light last-rolls-btn last-rolls-red">2</button>
            <button class="btn-floating btn waves-effect waves-light last-rolls-btn last-rolls-black">9</button>
            <button class="btn-floating btn waves-effect waves-light last-rolls-btn last-rolls-red">3</button>
            <button class="btn-floating btn waves-effect waves-light last-rolls-btn last-rolls-black">10</button>
            <button class="btn-floating btn waves-effect waves-light last-rolls-btn last-rolls-red">4</button>
            <button class="btn-floating btn waves-effect waves-light last-rolls-btn last-rolls-black">11</button>
            <button class="btn-floating btn waves-effect waves-light last-rolls-btn last-rolls-red">5</button>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col l12 m12 s12">
          <div class="roll-reel">
            <div class="holder">
              <div class="indicator"></div>
              <div class="reel" id="rollit" style="transition-Duration: 0s; transform: matrix(1, 0, 0, 1, -700, 0);">
                  <div class="group">
                    <div class="reel-item red">1</div>
                    <div class="reel-item black">14</div>
                    <div class="reel-item red">2</div>
                    <div class="reel-item black">13</div>
                    <div class="reel-item red">3</div>
                    <div class="reel-item black">12</div>
                    <div class="reel-item red">4</div>
                    <div class="reel-item green">0</div>
                    <div class="reel-item black">11</div>
                    <div class="reel-item red">5</div>
                    <div class="reel-item black">10</div>
                    <div class="reel-item red">6</div>
                    <div class="reel-item black">9</div>
                    <div class="reel-item red">7</div>
                    <div class="reel-item black">8</div>
                  </div>
                  <div class="group">
                    <div class="reel-item red">1</div>
                    <div class="reel-item black">14</div>
                    <div class="reel-item red">2</div>
                    <div class="reel-item black">13</div>
                    <div class="reel-item red">3</div>
                    <div class="reel-item black">12</div>
                    <div class="reel-item red">4</div>
                    <div class="reel-item green">0</div>
                    <div class="reel-item black">11</div>
                    <div class="reel-item red">5</div>
                    <div class="reel-item black">10</div>
                    <div class="reel-item red">6</div>
                    <div class="reel-item black">9</div>
                    <div class="reel-item red">7</div>
                    <div class="reel-item black">8</div>
                  </div>
                  <div class="group">
                    <div class="reel-item red">1</div>
                    <div class="reel-item black">14</div>
                    <div class="reel-item red">2</div>
                    <div class="reel-item black">13</div>
                    <div class="reel-item red">3</div>
                    <div class="reel-item black">12</div>
                    <div class="reel-item red">4</div>
                    <div class="reel-item green">0</div>
                    <div class="reel-item black">11</div>
                    <div class="reel-item red">5</div>
                    <div class="reel-item black">10</div>
                    <div class="reel-item red">6</div>
                    <div class="reel-item black">9</div>
                    <div class="reel-item red">7</div>
                    <div class="reel-item black">8</div>
                  </div>
                  <div class="group">
                    <div class="reel-item red">1</div>
                    <div class="reel-item black">14</div>
                    <div class="reel-item red">2</div>
                    <div class="reel-item black">13</div>
                    <div class="reel-item red">3</div>
                    <div class="reel-item black">12</div>
                    <div class="reel-item red">4</div>
                    <div class="reel-item green">0</div>
                    <div class="reel-item black">11</div>
                    <div class="reel-item red">5</div>
                    <div class="reel-item black">10</div>
                    <div class="reel-item red">6</div>
                    <div class="reel-item black">9</div>
                    <div class="reel-item red">7</div>
                    <div class="reel-item black">8</div>
                  </div>
                  <div class="group">
                    <div class="reel-item red">1</div>
                    <div class="reel-item black">14</div>
                    <div class="reel-item red">2</div>
                    <div class="reel-item black">13</div>
                    <div class="reel-item red">3</div>
                    <div class="reel-item black">12</div>
                    <div class="reel-item red">4</div>
                    <div class="reel-item green">0</div>
                    <div class="reel-item black">11</div>
                    <div class="reel-item red">5</div>
                    <div class="reel-item black">10</div>
                    <div class="reel-item red">6</div>
                    <div class="reel-item black">9</div>
                    <div class="reel-item red">7</div>
                    <div class="reel-item black">8</div>
                  </div>
                  <div class="group">
                    <div class="reel-item red">1</div>
                    <div class="reel-item black">14</div>
                    <div class="reel-item red">2</div>
                    <div class="reel-item black">13</div>
                    <div class="reel-item red">3</div>
                    <div class="reel-item black">12</div>
                    <div class="reel-item red">4</div>
                    <div class="reel-item green">0</div>
                    <div class="reel-item black">11</div>
                    <div class="reel-item red">5</div>
                    <div class="reel-item black">10</div>
                    <div class="reel-item red">6</div>
                    <div class="reel-item black">9</div>
                    <div class="reel-item red">7</div>
                    <div class="reel-item black">8</div>
                  </div>
                  <div class="group">
                    <div class="reel-item red">1</div>
                    <div class="reel-item black">14</div>
                    <div class="reel-item red">2</div>
                    <div class="reel-item black">13</div>
                    <div class="reel-item red">3</div>
                    <div class="reel-item black">12</div>
                    <div class="reel-item red">4</div>
                    <div class="reel-item green">0</div>
                    <div class="reel-item black">11</div>
                    <div class="reel-item red">5</div>
                    <div class="reel-item black">10</div>
                    <div class="reel-item red">6</div>
                    <div class="reel-item black">9</div>
                    <div class="reel-item red">7</div>
                    <div class="reel-item black">8</div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row center">
        <div class="col l4 m4 s12 bet-balance">
          <button class="waves-effect waves-light btn-large red-button"><b>1 to 7, Win 2x</b></button><br>
          <i class="fa fa-money bet-balance-red" aria-hidden="true"></i> <span class="bet-balance-red">0</span>
        </div>
        <div class="col l4 m4 s12 bet-balance">
          <button class="waves-effect waves-light btn-large green-button"><b>0, Win 14x</b></button><br>
          <i class="fa fa-money bet-balance-green" aria-hidden="true"></i> <span class="bet-balance-green">0</span>
        </div>
        <div class="col l4 m4 s12 bet-balance">
          <button class="waves-effect waves-light btn-large black-button"><b>8 to 14, Win 2x</b></button>
          <i class="fa fa-money bet-balance-black" aria-hidden="true"></i> <span class="bet-balance-black">0</span>
        </div>
      </diV>

      <div class="row center">
        <div class="col l4 m4 s12">
          <div class="highest-color">
            <div class="row valign-wrapper">
              <div class="col s2">
                <img src="http://materializecss.com/images/yuna.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
              </div>
              <div class="col s10">
                <span class="black-text">
                  This is a square image. Add the "circle" class to it to make it appear circular.
                </span>
              </div>
            </div>
          </div>
          <br>
        </div>
        <div class="col l4 m4 s12">
          <div class="highest-color">
            <div class="row valign-wrapper">
              <div class="col s2">
                <img src="http://materializecss.com/images/yuna.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
              </div>
              <div class="col s10">
                <span class="black-text">
                  This is a square image. Add the "circle" class to it to make it appear circular.
                </span>
              </div>
            </div>
          </div>
          <br>
        </div>
        <div class="col l4 m4 s12">
          <div class="highest-color">
            <div class="row valign-wrapper">
              <div class="col l2 m4 s3">
                <img src="http://materializecss.com/images/yuna.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
              </div>
              <div class="col l10 m8 s9">
                <span>
                  This is a square image. Add the "circle" class to it to make it appear circular.
                </span>
              </div>
            </div>
          </div>
          <br>
        </div>
      </diV>
      <script src="../else/js/jquery.js"></script>
      <script src="../else/js/materialize.js"></script>
      <script src="../else/js/javascript.js"></script>
      <div class="row">
        <button class="waves-effect waves-light btn-large black-button" onclick="rolling();"><b>ROLL</b></button>
      </div>
      <script>
        var start = 650;
        document.getElementById("rollit").style.transform = "matrix(1, 0, 0, 1, -"+ start +", 0)";

        function rolling() {

          var random = Math.random() * (2000 - 4200) + 4200;
          var next = random + start;
          document.getElementById("rollit").style.transitionDuration = "6s";
          document.getElementById("rollit").style.transform = "matrix(1, 0, 0, 1, -"+ next +", 0)";
          var audio = new Audio('/else/sounds/rolling.wav');
          audio.play();

          setTimeout(function () {
            var reset = next - 4200;
            document.getElementById("rollit").style.transitionDuration = "0s";
            document.getElementById("rollit").style.transform = "matrix(1, 0, 0, 1, -"+ reset +", 0)";
            var audio = new Audio('/else/sounds/tone.wav');
            audio.play();
          }, 6000);
          start = reset;
        }
      </script>
    </main>
  </body>
</html>
