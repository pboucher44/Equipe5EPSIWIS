    var steps = ["step0", "step1", "step2", "step3", "step4", "step5", "step6", "step7"];

    class ChatBot {


        constructor() {

        }
        printText(message, cssclass) {
            $("#chat").append("<div class=" + cssclass + "><p>" + message + "</p></div>");
        }

        buttonAssociator(obj,csv) {
            $("#buttonsList").empty();
            for (var i = 0; i < obj.length - 2; i++) {
                $("#buttonsList").append("<div class=\"myButton\" onclick=\"changeContent("
                    +obj[i + 2]+")\">" + (csv.getNom(obj[i+2]))[0] + "</div>");
            }

        }
        
        readTextFile(file){
            var rawFile = new XMLHttpRequest();
            rawFile.open("GET", file, false);
            rawFile.onreadystatechange = function ()
            {
                if(rawFile.readyState === 4)
                {
                    if(rawFile.status === 200 || rawFile.status == 0)
                    {
                        var allText = rawFile.responseText;
                        var div = document.getElementById("chat");
                        div.innerHTML += "<div class=decal-gauche><p>" + allText + "</p></div>";
                    }
                }
            }
            rawFile.send(null);
        }

    }
