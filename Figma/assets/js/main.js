// $('#form1').submit(function(e) {
//     e.preventDefault();
//     $.ajax({
//         type: "GET",
//         url: "https://www.figma.com/oauth?",
//         data: $('form').serialize(),
//         dataType: "json",
//         success: function(response) {
//             console.log(response);
//         },
//         error: function(response) {
//             console.log(response);
//         }
//     });

// });

function AcessoAPI(value, stringFinal) {
    $.ajax({
        type: "GET",
        url: stringFinal,
        "headers": {
            "Authorization": "Bearer " + value['access_token'],
        },
        dataType: "json",
        success: function(response) {
            console.log('SUCESSOOO');

            console.log(response);
            $('body').append(response);
        },
        error: function(response) {
            console.log(value['access_token']);
            console.log('ERROO');
            console.log(response);
        }
    });
}

$('#form2').submit(function(e) {
    e.preventDefault();
    console.log($('#form2').serialize());
    $.ajax({
        type: "POST",
        url: "https://www.figma.com/api/oauth/token",
        data: $('#form2').serialize(),
        dataType: "json",
        success: function(response) {
            AcessoAPI(response, 'https://api.figma.com/v1/files/EgRklW3MZUgaza144c9kX8jv')
        },
        error: function(response) {
            console.log(response);
        }
    });

});