<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user scalable=no">
        <title>PARSEC LOGIN</title>
        <link type="text/css" rel="stylesheet" href="/assets/css/template.css">
        <link type="text/css" rel="stylesheet" href="/assets/css/crt.css">
        <!--scripts-->
        <?php
        
        ?>
        <!--scripts-->              
    </head>
    <body class="">
        <header>
            <div class="header"></div>
            </div>
        </header>

        <section>
            <div class="container">
                <div class="containerint">
                    <div class="loginarea">
                        <div class="logo">
                            <img src="/assets/images/parsec_black_glitch.gif">
                        </div>
                        <div class="formarea form">
                            <form method="POST" class="column login-form">
                                <input class="field" type="text" name="login" placeholder="USUÁRIO">
                                <input class="field" type="password" name="pword" placeholder="SENHA">
                                <div class="inputs">
                                    <input class="btn" type="submit" name="LOGIN" value="LOGIN">
                                    <p class="message">NOVO USUÁRIO?<a class="btn2" href="#" id="roll2">CRIAR CONTA</a></p>
                                    <audio id="Audio">
                                        <source src="/assets/images/roll.mp3" type="audio/mp3">
                                    </audio>
                                </div>
                            </form>
                            <form class="column register-form" method="POST">
                                <input class="field" type="text" name="loginreg" placeholder="USUÁRIO">
                                <input class="field" type="email" name="pwordreg" placeholder="E-MAIL" required>
                                <input class="field" type="password" name="pwordreg" placeholder="SENHA" required>
                                <input class="field" type="password" name="pwordreg2" placeholder="CONFIRMAR SENHA">
                                <div class="inputs">
                                    <input class="btn" type="submit" name="REGISTRAR" value="REGISTRAR">
                                    <p class="message">USUÁRIO CADASTRADO?<a class="btn2" href="#" id="roll">LOGIN</a></p>
                                    <audio id="Audio">
                                        <source src="/assets/images/roll.mp3" type="audio/mp3">
                                    </audio>
                                    
                                </div>
                            </form>
                        </div>                        
                    </div>                   
                </div>
            </div>
        </section>
       
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script>

        $('.message a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "normal");
        });
        </script>
        <script>
            document.getElementById("roll").addEventListener("click", function() {
                document.getElementById("Audio").play();
            });
        </script>
        <script>
            document.getElementById("roll2").addEventListener("click", function() {
                document.getElementById("Audio").play();
            });
        </script>
    </body>

</html>