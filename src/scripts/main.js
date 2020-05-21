import $ from 'jquery';

$(document).ready(function () {
    //References
    var mainContent = $('.main__content');

    //Init Handlebars
    var source = $('#album-template').html();
    var template = Handlebars.compile(source);

    //Ajax
    var settings = {
        url: 'http://localhost/php-ajax-dischi/partials/scripts/import-data-json.php',
        method: 'GET'
    };
    $.ajax(settings)
    .done(function(res){
        console.log(res);
    })
    .fail(function(){
        console.log('Errore chiamata Ajax');
    });
});