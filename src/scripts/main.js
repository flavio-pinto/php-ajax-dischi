import $ from 'jquery';

$(document).ready(function () {
    //References
    var mainContent = $('.main__content');

    //Init Handlebars
    var source = $('#album-template').html();
    var template = Handlebars.compile(source);

    //Ajax call for php data
    var settings = {
        url: 'http://localhost/php-ajax-dischi/partials/scripts/import-data-json.php',
        method: 'GET'
    };
    $.ajax(settings)
    .done(function(res){
        for (var i = 0; i < res.length; i++) {
            var context = {
                cover: res[i].cover,
                title: res[i].title,
                artist: res[i].artist,
                year: res[i].year
            }
            var output = template(context);
            mainContent.append(output);
        }
    })
    .fail(function(){
        console.log('Errore chiamata Ajax');
    });
});