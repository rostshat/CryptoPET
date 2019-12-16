<head>
    <meta charset="UTF-8">
    <title>Crypto Exchange</title>

    <link rel="stylesheet" href="css/index.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
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
                        <button id="button__login">
                            Login
                        </button>
                        <button id="button__register">
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
                    <form action="">
                        <h4>Login</h4>
                        <input type="text" id="register_login" required>
                        <h4>Password</h4>
                        <input type="password" id="register_password" required>
                        <h4>Re-Password</h4>
                        <input type="password" id="register_password_verify" required>
                        <div class="registratin-accept__block">
                            <input type="checkbox" id="registration_accept" required>
                            <span>I submit my regisstration</span>
                        </div>
                        <button onclick="javascript:checkPassword(register_password, register_password_verify)">Register</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="popup" id="popup_login">
            <div class="popup-content">
                <a href="javascript:PopUpLogHide()">
                    <i class="fa fa-times"></i>
                </a>
                <div class="content">
                    <form action="">
                        <h4>Login</h4>
                        <input type="text" id="login_login" required>
                        <h4>Password</h4>
                        <input type="password" id="login_password" required>
                        <button onclick="">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </header>
