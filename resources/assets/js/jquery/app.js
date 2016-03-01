// -------------------------------|
// Carousel
// -------------------------------|
$("#carousel").carousel();


$('#Menu__tabs a:first').tab('show');

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
