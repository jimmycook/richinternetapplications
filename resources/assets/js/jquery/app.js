// Import the calculator 
import { Calculator } from './Calculator';
// Import conversion library
var fx = require('money');


// Create the calculator object
var calculator = new Calculator($('.Calculator__output'));
console.log
// Click event for each of the elements
$('.Calculator__row>span').click(function () {
    let clicked = $(this).data('value');
    calculator.input(clicked);
});



// Keypress events are sent to the calculato
$(document).keypress(function(event){
    calculator.input(String.fromCharCode(event.which));
});
