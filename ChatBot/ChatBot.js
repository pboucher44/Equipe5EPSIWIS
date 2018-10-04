    var steps = ["step0", "step1", "step2", "step3", "step4", "step5", "step6", "step7"];

    class ChatBot {

        constructor(pb) {
            this.csv = pb;
        }
        printText(message, cssclass) {
            if(cssclass==="decal-gauche"){
                $("#chat").append("<table><tr><td style=\"width:10%\"><img src=\"./images/bonhome.png\"  style=\"width:100%\"></img></td><td style=\"width:90%\"><div class=" + cssclass + "><p>" + message + "</p></div></td></tr></table>")
            }else{
                $("#chat").append("<div class=" + cssclass + "><p style=\"display: inline\">" + message + "</p></div>");
            }
        }

        buttonAssociator(id) {
            $("#buttonsList").empty();
 //           for (var i = 0; i < obj.length-2; i++) {
  //              $("#buttonsList").append("<div class=\"myButton\" onclick=\"changeContent("
  //                  +obj[i+2]+")\">" + (csv.getNom((obj[i+2])-2))[0] + "</div>");

            for (var i = 0; i < pb.getNom(id).length - 2; i++) {
                var suivant = (pb.getNom(id)[i+2])-2;
                $("#buttonsList").append("<div class=\"myButton\" onclick=\"update(" + suivant + ")\">" +
                    (this.csv.getNom(pb.getNom(id)[i + 2]-2))[0] + "</div>");
            }

        }

        readTextFile(file) {
            var rawFile = new XMLHttpRequest();
            rawFile.open("GET", file, false);
            rawFile.onreadystatechange = function () {
                if (rawFile.readyState === 4) {
                    if (rawFile.status === 200 || rawFile.status == 0) {
                        var allText = rawFile.responseText;
                        var div = document.getElementById("chat");
                        cb = new ChatBot();
                        cb.printText(allText,"decal-gauche");
                    }
                }
            }
            rawFile.send(null);
        }

    }
