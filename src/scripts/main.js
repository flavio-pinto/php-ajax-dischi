import $ from 'jquery';

$(document).ready(function () {
    //References
    var mainContent = $('.main__content');
    var inputBar = $('.header__content__input__search');

    //Init Handlebars
    var source = $('#album-template').html();
    var template = Handlebars.compile(source);

    var settings = {
        url: 'http://localhost/php-ajax-dischi/partials/scripts/import-data-json.php',
        method: 'GET'
    };

    //Ajax call for php data
    $.ajax(settings)
    .done(function(res){
        for (var i = 0; i < res.length; i++) {
            printAlbums(res[i], template, mainContent);
        }
    })
    .fail(function(){
        console.log('Errore chiamata Ajax');
    });

    // Filter results with keyup event
    inputBar.keyup(function() {
        var inputText = $(this).val().trim().toLowerCase();
        //Reset list
        mainContent.html('');

        $.ajax(settings)
        .done(function(data) {
            data.forEach(function(el) {
                var controlArtist = el.artist.toLowerCase();
                if(controlArtist.includes(inputText)) {
                    printAlbums(el, template, mainContent);
                }
            });
        })
        .fail(function(){
            console.log('Errore chiamata Ajax');
        });
    });

}); //  <---- end doc ready

/**********************
 *******FUNCTIONS******
 **********************/

function printAlbums(item, template, mainContent) {
    var context = {
        cover: item.cover,
        title: item.title,
        artist: item.artist,
        year: item.year
    }
    var output = template(context);
    mainContent.append(output);
}