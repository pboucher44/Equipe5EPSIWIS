<!DOCTYPE html>
<html>

    <head>
        <title>HEP Campus chatbot</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <script src="js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="ChatBot/ChatBot.js"></script>

    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top" style="font-size:1.5em;height: 12vh">
            <div class="container" style="margin-top: 5px;margin-bottom: 5px;">
                <img src="./images/LOGO_HEP_EDUCATION_BASELINE-FR.png" alt="" style="width: 20%;">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
        </nav>
        <div class="pre-scrollable" style="position: relative;background-color: grey;margin-left: 70%;height: 75%;border-radius: 30px;width: 30%">
            <div style="height: 100%;">
            <br>
            <div class="decal-droit">
                <p style="margin-left: 3%;margin-right: 3%;">
                    Coactique aliquotiens nostri pedites ad eos persequendos scandere clivos sublimes etiam si lapsantibus plantis fruticeta prensando vel dumos ad vertices venerint summos, inter arta tamen et invia nullas acies explicare permissi nec firmare nisu valido gressus: hoste discursatore rupium abscisa volvente, ruinis ponderum inmanium consternuntur, aut ex necessitate ultima fortiter dimicante, superati periculose per prona discedunt.
                </p>
            </div>
            <div class="decal-gauche">
                <p>
                    Coactique aliquotiens nostri pedites ad eos persequendos scandere clivos sublimes etiam si lapsantibus plantis fruticeta prensando vel dumos ad vertices venerint summos, inter arta tamen et invia nullas acies explicare permissi nec firmare nisu valido gressus: hoste discursatore rupium abscisa volvente, ruinis ponderum inmanium consternuntur, aut ex necessitate ultima fortiter dimicante, superati periculose per prona discedunt.
                </p>
            </div>
            <div class="decal-droit">
                <p>
                    Coactique aliquotiens nostri pedites ad eos persequendos scandere clivos sublimes etiam si lapsantibus plantis fruticeta prensando vel dumos ad vertices venerint summos, inter arta tamen et invia nullas acies explicare permissi nec firmare nisu valido gressus: hoste discursatore rupium abscisa volvente, ruinis ponderum inmanium consternuntur, aut ex necessitate ultima fortiter dimicante, superati periculose per prona discedunt.
                </p>
            </div>
            <div id="chat" class="col-md-4" style="background-color: grey;float: right;">
                <p>ici il y a un chatbot askyp</p>
                <script>
                    cb = new ChatBot();
                    cb.printText("ok", "ok");
                </script>
            </div>
            </div>
        </div>



        <video autoplay muted loop id="myVideo">
            <source src="./video/Presentation_CAMPUS_HEP_Nantes.mp4" type="video/mp4">
        </video>
    </body>

</html>
