class ChatBot {
    constructor() {

    }
    printText(message, cssclass) {
        $("#chat").append("<div class=" + cssclass + "><p>" + message + "</p></div>");
    }
    
    loadDialog(){
        $.ajax({url:'ChatBot/test.js'});
    }

}
