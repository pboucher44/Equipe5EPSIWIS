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
        <video autoplay muted loop id="myVideo" style="position: absolute;">
            <source src="./video/Presentation_CAMPUS_HEP_Nantes.mp4" type="video/mp4">
        </video>
        <div id ="chat" class="pre-scrollable" style="position:absolute;background-color: #88888888;margin-left: 70%;max-height: 75%;border-radius: 30px;width: 30%"><br>
            
            <div class="decal-gauche">
                <script>
                    cb = new ChatBot();
                    cb.printText("question 1", "decal-gauche");
                </script>
                <script>
                    cb = new ChatBot();
                    cb.printText("reponse 1", "decal-droit");
                </script>
                <script>
                    cb = new ChatBot();
                    cb.printText("question 2", "decal-gauche");
                </script>
                <script>
                    cb = new ChatBot();
                    cb.printText("reponse 2", "decal-droit");
                </script>
            </div>
        </div>
    </div>
</body>

</html>
