/**
 * Calculator class
 *
 * requires jQuery to be available
 */
class Calculator {
    constructor() {
        this.output = 0;
        this.stored;
        this.operator;
        this.refresh();
    }

    input(value) {
        if(value >= 0 && value <= 9) {
            this.numberPressed(value);
        }
        else {
            if(value == 'C' || 'c') this.clear();
            else if (value == '+') this.operator(value);
            else if (value == '/') this.operator(value);
            else if (value == '-') this.operator(value);
            else if (value == '*') this.operator(value);
            else if (value == '=') this.equals();
        }
        this.refresh();
    }

    numberPressed(number) {
        if( this.output == 0 ) {
            this.editing = true;
            this.output = number;
        }
        else if (this.editing && this.output <= 100000000000000) {
            this.output = this.output * 10 + parseInt(number);
        }
    }

    operator(value) {
        this.stored = this.output;
        this.output = 0;
        this.operator = value;
    }

    clear() {
        this.output = 0;
        this.stored = 0;
        this.refresh();
    }

    refresh() {
        $('.Calculator__output').html(this.output);
    }
}

var calculator = new Calculator();

// Click event for each of the elements
$('.Calculator__row>span').click(function () {
    let clicked = $(this).data('value');
    calculator.input(clicked);
});

$(document).keypress(function(event){
    console.log('press');
    calculator.input(String.fromCharCode(event.which));
});
