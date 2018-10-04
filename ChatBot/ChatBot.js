    var steps = ["step0", "step1", "step2", "step3", "step4", "step5", "step6", "step7"];

    class ChatBot {

        constructor(pb) {
            this.csv = pb;
        }
        printText(message, cssclass) {
            $("#chat").append("<div class=" + cssclass + "><p>" + message + "</p></div>");
        }

        buttonAssociator(id) {
            $("#buttonsList").empty();
            for (var i = 0; i < pb.getNom(id).length - 2; i++) {
                $("#buttonsList").append("<div class=\"myButton\" onclick=\"update(" + pb.getNom(id)[i + 2] + ")\">" +
                    (this.csv.getNom(pb.getNom(id)[i + 2]-2))[0] + "</div>");
                console.log(pb.getNom(id));
            }

        }

        readTextFile(file) {
            var rawFile = new XMLHttpRequest();
            rawFile.open("GET", file, false);
            rawFile.onreadystatechange = function () {
                if (rawFile.readyState === 4) {
                    if (rawFile.status === 200 || rawFile.status == 0) {
                        var allText = rawFile.responseText;
                        alert(allText);
                    }
                }
            }
            rawFile.send(null);
        }

    }
