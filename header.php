<head>
    <meta charset="UTF-8">
    <title>Crypto Exchange</title>

    <link rel="stylesheet" href="css/index.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script>
      /*POP-UP*/
      $(document).ready(function(){
          PopUpRegHide();
          PopUpLogHide();
      });

      function PopUpRegShow(){
          $("#popup_register").show();
      }

      function PopUpRegHide(){
          $("#popup_register").hide();
      }


      function PopUpLogHide(){
          $("#popup_login").hide();
      }
      function PopUpLogShow(){
          $("#popup_login").hide();
      }
    </script>

    <header>
        <div class="container">
           <div class="row">
                <div id="header__logo" class="col-md-3">
                    <img src="assets/images/logo.png" alt="Logotype">
                </div>
                <div id="header__menu" class="col-md-6">
                    <div class="row menu">
                        <div class="menu__item col-md-3">Buy</div>
                        <div class="menu__item col-md-3">Sell</div>
                        <div class="menu__item col-md-3">Contacts</div>
                        <div class="menu__item col-md-3">About</div>
                    </div>
                </div>
                <div id="header__user" class="col-md-3">
                    <div class="buttons">
                        <button id="button__login" onclick="javascript:PopUpLogShow()">
                            Login
                        </button>
                        <button id="button__register" onclick="javascript:PopUpRegShow()">
                            Register
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Registration Form -->
        <div class="popup" id="popup_register">
            <div class="popup-content">
                <a href="javascript:PopUpRegHide()">
                    <i class="fa fa-times"></i>
                </a>
                <div class="content">
                    <form action="" method="post"> <!-- DO NOT CHANGE THE METHOD OR NAMES! -->
                        {% csrf_token %}
                        <h4>Login</h4>
                        <input type="text" id="register_login" name="reglogin" required>
                        <h4>Password</h4>
                        <input type="password" id="register_password" name="regpass" required>
                        <h4>Re-Password</h4>
                        <input type="password" id="register_password_verify" name="regpassv" required>
                        <div class="registratin-accept__block">
                            <input type="checkbox" id="registration_accept" required>
                            <span>I submit my regisstration</span>
                        </div>
                        <button onclick="javascript:PopUpRegHide()">Register</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Login Form -->
        <div class="popup" id="popup_login">
            <div class="popup-content">
                <a href="javascript:PopUpLogHide()">
                    <i class="fa fa-times"></i>
                </a>
                <div class="content">
                    <form action="" method="get"> <!-- DO NOT CHANGE THE METHOD OR NAMES! -->
                        {% csrf_token %}
                        <h4>Login</h4>
                        <input type="text" id="login_login" name="loginlogin" required>
                        <h4>Password</h4>
                        <input type="password" id="login_password" name="loginpass" required>
                        <button onclick="">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </header>
