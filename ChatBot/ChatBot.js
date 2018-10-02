class ChatBot {
    constructor() {

    }
    printText(message, cssclass) {
        $("#chat").append("<div class=" + cssclass + "><p>" + message + "</p></div>");
    }
<<<<<<< HEAD
    
    loadDialog(){
        $.ajax({url:'ChatBot/test.js'});
    }

=======
>>>>>>> 75440c0e4b05127e34676245738f7fe4aed371f0
}
