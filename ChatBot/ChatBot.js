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

    }
