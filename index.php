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
        <script src="ChatBot/CsvToArray.js"></script>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="ChatBot/ChatBot.js"></script>
        <script src="js/changementVideo.js"></script>

    </head>

    <body>
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
                        </div>
                    </li>
                    <li class="nav-item animated fadeInRight slow">
                        <a class="nav-link" href="./pages du site/aPropos.php">A propos</a>
                    </li>
                </ul>
            </div>
    </nav>
    <div id="changeVid">
        <video  autoplay muted loop id="myVideo" class="animated fadeIn fast" style="position: absolute; z-index:-1;">
            <source src="./video/Presentation_CAMPUS_HEP_Nantes.mp4" type="video/mp4">
        </video>
    </div>
    <div style="">
        <!-- -->
        <div class="pre-scrollable animated fadeInRight slow" style="background-color:#00000088;position:absolute;width: 30%; right: 0px; padding:0px; margin:0px;"><br>

            <div id="chat" style="margin:0px; padding:0px; height:500px;overflow-y: scroll;">
            </div>


            <div id="buttonsList" class="choiceBox">
                <div class="myButton" onclick="update(0)">Demarrer visite</div>
            </div>
        </div>
        <script>
            function topeuh() {
                document.getElementById('chat').scrollIntoView();
            }
            function bottom() {
                document.getElementById('buttonsList').scrollIntoView();
            }
            function update(id) {
                pb = new CsvToArray();
                cb = new ChatBot(pb);
                cb.buttonAssociator(id);
                var div = document.getElementById("chat");
                div.innerHTML += "<div class=decal-droit><p>" + pb.getNom(id)[0] + "</p></div>";
                console.log(pb.getNom(id));
                cb.readTextFile("data/" + (id + 2) + ".txt");
                bottom();
            }
            function restart() {
                $("#buttonsList").empty();
                $("#buttonsList").append("<div class=\"myButton\" onclick=\"update(0)\">Demarrer visite</div>");
                $("#chat").empty();
            }
        </script>

    </body>

</html>
