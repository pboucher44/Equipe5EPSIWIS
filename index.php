<!DOCTYPE html>
<html style="overflow: hidden;">

    <head>
        <title>HEP Campus chatbot</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <link rel="icon" href="favicon.ico" />
        <script src="js/bootstrap.min.js"></script>
        <script src="https://d3js.org/d3.v5.js"></script>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="ChatBot/ChatBot.js"></script>
        <script src="js/changementVideo.js"></script>

    </head>

    <body>
            <script>
        $.ajax({
                url: 'modele/SelectConversation.php',
                data: {param1: "ok"},
                type: "post",
                success: function(output) {
                    alert(output);
                }
            });

        </script>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top" style="font-size:1.5em;height: 12vh">
            <div class="container" style="margin-top: 5px;margin-bottom: 5px;">
                <img class="animated animated fadeIn slow" src="./images/LOGO_HEP_EDUCATION_BASELINE-FR.png" alt="" style="width: 20%;">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active animated fadeInRight slow">
                            <a class="nav-link" href="#">Accueil</a>
                        </li>

                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link animated fadeInRight slow">Nos écoles</a>

                                <div class="dropdown-content" style="font-size: 0.8em;background-color: #343a40;">
                                    <a class="nav-link" style="border-top: solid;" href="http://www.epsi.fr/campus/campus-de-nantes/" target=_blank>EPSI</a>
                                    <a class="nav-link" style="border-top: solid;" href="http://www.ecoles-idrac.com/Idrac/Campus-de-Nantes" target=_blank>IDRAC</a>
                                    <a class="nav-link" style="border-top: solid;" href="http://www.ifag.com/campus/campus-de-nantes/" target=_blank>IFAG</a>
                                    <a class="nav-link" style="border-top: solid;" href="http://www.opensourceschool.fr/campus/nantes/" target=_blank>OPEN SOURCE SCHOOL</a>
                                    <a class="nav-link" style="border-top: solid;" href="http://www.ecoles-supdecom.com/campus/nantes/" target=_blank>SUP DE COM</a>
                                    <a class="nav-link" style="border-top: solid;" href="http://www.wis-ecoles.com/campus/campus-de-nantes/" target=_blank>WIS</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item animated fadeInRight slow">
                            <a class="nav-link" href="./pages du site/aPropos.php">A propos</a>
                        </li>
                    </ul>


                    </ul>
                </div>
        </nav>
        <div id="changeVid">
            <video class="animated fadeIn fast" autoplay muted loop id="myVideo" style="position: absolute;">
                <source src="./video/Presentation_CAMPUS_HEP_Nantes.mp4" type="video/mp4">
            </video>
        </div>
        <div class="pre-scrollable animated fadeInRight slow" style="position:absolute;background-color: #88888888;margin-left: 70%;max-height: 75%;border-radius: 30px;width: 30%"><br>

            <div id="chat">
                <script>
                    cb = new ChatBot();
                    cb.printText("question 1", "decal-gauche");
                </script>
                <script>
                    cb = new ChatBot();
                    cb.printText("reponse 2", "decal-droit");
                </script>
            </div>


        <div class="choiceBox">
            <div href="#" class="myButton" onclick="changeContent('Presentation_CAMPUS_HEP_Nantes.mp4')">campus HEP</div>
            <div href="#" class="myButton" onclick="changeContent('30 Secondes sur le SENS DE LA VIE.mp4')">sens de la vie</div>
            <div href="#" class="myButton" onclick="changeContent('epsi_logo.png')">EPSI</div>
        </div>
    </div>
    <script>
        $.ajax({
            url: 'modele/SelectConversation.php',
            data: param1
            dataType: 'json',
            type: "post",
            success: function(output) {
                alert(param1);
            }
        });

    </script>

    </body>


</html>
