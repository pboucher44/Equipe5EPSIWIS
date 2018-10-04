
function changeContent(monContenu) {
    var type = monContenu.substr(monContenu.length - 3);
    console.log(type);
    console.log(monContenu);
    if (type === 'mp4') {
        document.body.style.backgroundImage = "";
        document.body.style.backgroundColor = "black";
        $("#changeVid").html("<video class=\"animated fadeIn fast\" autoplay muted loop id=\"myVideo\" style=\"position: absolute;\"><source src=\"./video/" + monContenu + "\" type=\"video/mp4\"></video>");
    }else if (type === 'avi') {
        document.body.style.backgroundImage = "";
        document.body.style.backgroundColor = "black";
        $("#changeVid").html("<video class=\"animated fadeIn fast\" autoplay muted loop id=\"myVideo\" style=\"position: absolute;\"><source src=\"./video/" + monContenu + "\" type=\"video/avi\"></video>");
    }else if(type === 'jpg' || type === 'png'){
        $("#changeVid").html("");
        document.body.style.backgroundImage = "url('./images/" + monContenu + "')";

    }
}
