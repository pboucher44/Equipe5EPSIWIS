class ChatBot {
    constructor() {

    }
    printText(message, cssclass) {
        $("#chat").append("<div class=" + cssclass + "><p>" + message + "</p></div>");
    }
    
    loadDialog(){
        $.delay(5);
        $.ajax({url:'ChatBot/test.js'});
    }

}
