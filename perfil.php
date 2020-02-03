<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user scalable=no">
        <title>PARSEC TASK MANAGER</title>
        <link type="text/css" rel="stylesheet" href="/assets/css/main.css">
        <link type="text/css" rel="stylesheet" href="/assets/css/crt.css">
        <script src="/assets/js/script.js" type="text/javascript"></script>  
    </head>
    <body class="">
        <header class="head_top" id="full">
            <div class="headerint">
                <div class="head_left">PARSEC TASK MANAGER</div>
                <div class="head_right">L.I.S. SUPPORTED MODULE</div>
            </div>
        </header>
        <section id="full">
            <div class="bannerint">
                <div class="logo"><img src="/assets/images/glitchlogo_bco.gif"></div>
            </div>  
            <div class="menuint">
                <div class="menu_left">
                    <nav>
                        <ul>
                            <li><a class="btn" href="/main.html">HOME</a></li>
                            <li><a class="btn" href="/tarefas.html">TAREFAS</a></li>
                            <li><a class="btn" href="/mensagens.html">MENSAGENS</a></li>
                            <li><a class="btn" href="/perfil.php">PERFIL</a></li>
                            <li><a class="btn2" href="#">LOGOFF</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="menu_right">
                    <div class="textarea" id="on" style="display: none">
                        <!--apagar aqui caso erro-->
                        <div class="scroll-left">
                            <a id="quoteDisplay"></a>
                        </div>
                        <!--apagar aqui caso erro--> 
                    </div>
                    <div class="textareaoff" id="off">
                        <a></a>
                    </div>
                    <div class="powerbtn" id="button" onclick="myFunction(), newQuote()">
                        <img src="/assets/images/power.png">
                    </div>
                    <audio id="Audio">
                        <source src="/assets/images/on-click.mp3" type="audio/mp3">
                    </audio>
                </div>
            </div> 
        </section>
        <section>
            <div class="container" id="full">
                <div class="barraup"></div>
                <div class="screen">
                    <div class="screen-left">
                        <div class="perfil-info">
                            <div class="perfil-top">
                                <div class="pic-square"></div>                              
                            </div>
                            <div class="prof-names">
                                <a class="title-info">USUÁRIO:</a><br>
                                <a class="phptext"><?php echo "USERNAME" ?></a>
                                <br><br>
                                <a class="title-info">ID#:</a><br>
                                <a class="phptext"><?php echo "ID NUMBER" ?></a>
                                <br><br>
                                <a class="title-info">EMAIL:</a><br>
                                <a class="phptext"><?php echo "EMAIL" ?></a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="screen-right">
                        <!--apagar aqui caso erro-->
                        <div class="innerscreen">
                            
                        </div>
                        <!--apagar aqui caso erro-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
    <script>
        function myFunction() {
            var x = document.getElementById("on");
            if (x.style.display === "none") {
              x.style.display = "block";
            } else {
              x.style.display = "none";
            }
          }
    </script></script>
    <script>
        document.getElementById("button").addEventListener("click", function() {
            document.getElementById("Audio").play();
        });
    </script>
   
</html>