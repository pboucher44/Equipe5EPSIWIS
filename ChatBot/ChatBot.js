class ChatBot {
    constructor(pb) {
        this.csv = pb;
    }
    printText(message, cssclass) {
        if (cssclass === "decal-gauche") {
            $("#chat").append("<table><tr><td style=\"width:10%\"><img src=\"./images/bonhome.png\"  style=\"width:100%\"></img></td><td style=\"width:90%\"><div class=" + cssclass + "><p>" + message + "</p></div></td></tr></table>")
        } else {
            $("#chat").append("<div class=" + cssclass + "><p style=\"display: inline\">" + message + "</p></div>");
        }
    }

    buttonAssociator(id,prev) {
        $.fn.scrollBottom = function () {
            return $(document).height() - this.scrollTop() - this.height();
        };
        $("#buttonsList").empty();
        for (var i = 0; i < pb.getNom(id).length - 2; i++) {
            var suivant = (pb.getNom(id)[i + 2]) - 2;
            $("#buttonsList").append("<div class=\"myButton\" onclick=\"update(" + suivant + ")\">" +
                (this.csv.getNom(pb.getNom(id)[i + 2] - 2))[0] + "</div>");
        }
        console.log(id);
        if (id > 0) {
            $("#buttonsList").append("<div class=\"myButton\" onclick=\"wayBack(" + prev + ")\">Retour</div>");
            $("#buttonsList").append("<div class=\"myButton\" onclick=\"restart()\">Recommencer la visite</div>");
        }
        $("#buttonsList").scrollBottom();

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
                    cb.printText(allText, "decal-gauche");
                }
            }
        }
        rawFile.send(null);
    }

}
