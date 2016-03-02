// -------------------------------|
// Carousel
// -------------------------------|
$("#carousel").carousel();

// Menu Page
$('#Menu__tabs a:first').tab('show');

$('#Menu__nav a:first').tab('show');

// Movie Info
$('.get-movie-info').click(function (elem) {
    var slug = $(this).data('movie-slug');
    $.ajax({
        url: '/api/movie/slug/' + slug,
        success: function(data) {
            $('#movie-info-title').text(data.name)
            $('#movie-info-description').text(data.description)
            $('#movie-info-modal').modal('toggle')
        }
    });
});

// -------------------------------|
// Calculator stuff
// -------------------------------|
// Import the calculator
import { Calculator } from './Calculator';

// Create the calculator object
var calculator = new Calculator($('.Calculator__output'));

// event for each of the elements
$('.Calculator__row>span').click(function () {
    let clicked = $(this).data('value');
    calculator.input(clicked);
});

// Keypress events are sent to the calculator
$(document).keypress(function(event){
    calculator.input(String.fromCharCode(event.which));
});
