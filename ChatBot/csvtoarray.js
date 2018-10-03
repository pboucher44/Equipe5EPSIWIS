var tab = [];
class csvtoarray {


    constructor() {
        var myvar;


        function processData(allText) {
            var allTextLines = allText.split(/\r\n|\n/);
            var headers = allTextLines[0].split(',');
            var lines = [];

            for (var i = 1; i < allTextLines.length; i++) {
                var data = allTextLines[i].split(',');
                if (data.length == headers.length) {

                    var tarr = [];
                    for (var j = 0; j < headers.length; j++) {
                        tarr.push(data[j]);
                    }
                    lines.push(tarr);
                }
            }
            return lines;
        }

        $.ajax({
            type: "GET",
            url: "data/bdd.csv",
            dataType: "text",
            async: false,
            success: function (data) {
                myvar = data;
            }
        });
        tab = processData(myvar);

    }


    getNom(index) {

        var nom = tab[index];
        return nom
    }
}
