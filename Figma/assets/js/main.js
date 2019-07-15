function AcessoAPI(acesstoken, stringFinal) {
    $.ajax({
        type: "GET",
        url: stringFinal,
        "headers": {
            "Authorization": "Bearer " + acesstoken,
        },
        dataType: "json",
        success: function(response) {
            var data = response;
            var tamanhoarray = data["document"]["children"]["0"]["children"].length;
            var i = 0;

            console.log(data["document"]["children"]["0"]["children"].length);
            while (i < tamanhoarray) {
                var componente = data["document"]["children"]["0"]["children"][i];
                console.log(componente);
                if (!(typeof componente["fills"] === "undefined")) {
                    var r = componente["fills"][0]['color']['r'];
                    var g = componente["fills"][0]['color']['g'] * 255;
                    var b = componente["fills"][0]['color']['b'] * 255;
                    var a = componente["fills"][0]['color']['a'];
                }
                $('body').append('<style> .comp_' + i + '{height: ' + componente["absoluteBoundingBox"]["height"] + 'px; width: ' + componente["absoluteBoundingBox"]["width"] + 'px; background:  rgba(' + r + ', ' + g + ', ' + b + ', ' + a + ');} </style> <div class="comp_' + i + '"> </div>');

                i++;
            }
        },
        error: function(response) {
            console.log(value['access_token']);
        }
    });
}

$('#form2').submit(function(e) {
    e.preventDefault();
    // console.log($('#form2').serialize());
    $.ajax({
        type: "POST",
        url: "https://www.figma.com/api/oauth/token",
        data: $('#form2').serialize(),
        dataType: "json",
        success: function(response) {
            var data = response;
        },
        error: function(response) {
            console.log(response);
        }
    });

});


$(document).ready(function() {
    $('.buttonteste').click(function(e) {
        e.preventDefault();
        var acess = $('#acess').val();
        AcessoAPI(acess, 'https://api.figma.com/v1/files/EgRklW3MZUgaza144c9kX8jv');
    });
});