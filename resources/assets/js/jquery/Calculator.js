/**
 * ES6 Calculator class
 *
 * @author  Jimmy Cook
 */

// Load class dependencies here, these need to 
// be installed via npm
require('jquery');
var fx = require('money');

class Calculator {

    // Accepts an element (could also just be a selector) for the output of the 
    // calculator
    // 
    // and also a debug field, which is used to log the object to the console
    // on this.refresh() when set to true
    constructor(element, debug = false) {
        this.debug = debug;
        this.outputElement = element;
        this.resetState();
        this.getExchangeRates();
    }

    // Input handler
    // 
    // Value is the current input to the calculator
    input(value) {
        if(value >= 0 && value <= 9) this.digitPressed(value);
        else if(value == 'C' || value == 'c') this.resetState();
        else if (value == '+') this.setOperator(value);
        else if (value == '-') this.setOperator(value);
        else if (value == '/') this.setOperator(value);
        else if (value == '*') this.setOperator(value);
        else if (value == '$') this.convert(this.output, "GBP", "USD");
        else if (value == '€') this.convert(this.output, "GBP", "EUR");
        else if (value == '=') this.run();
        else if (value == '.') this.dotPressed();
        this.refresh();
    }

    // Actions for a dot being pressed
    dotPressed() {
        this.editing = true;
        if( this.output % 1 == 0) {
            this.addCharacter('.');
        }
    }

    // Actions for a digit being pressed
    digitPressed(character) {
        if( !this.editing ) {
            this.editing = true;
            this.output = character;
        }
        else if (this.editing) {
            this.addCharacter(character);
        }
    }

    // Add a character to the output string 
    addCharacter(character) {
        this.output = String(this.output);
        this.output = this.output + character;
    }

    // Set the operator object up
    setOperator(operator) {
        // Run the current operation if you need to     
        if(this.operation.operator != "" && this.output != 0 && !this.ran) {
            this.run();
        }
        else{
            // Store and ready the output for new input
            this.stored = this.output;
            this.output = 0;
            this.editing = false;
        }

        // Create the new operator object
        this.operation = {
            operator,
            value: ""
        };

        // The new operation hasn't been run so set it to that
        this.ran = false;
    }

    // Run the current operation
    run() {
        // If the user has been editing and there's an operator 
        if(this.editing && this.operation.operator != ""){
            // Set the value and stop editing
            this.operation.value = this.output;            
            this.editing = false;
        }
        // Sanity check the operation
        if(this.operation.operator != "" && this.operation.value != "") {
            // Execute the operation and output it 
            this.executeOperation();
        }
        this.ran = true;
    }

    // Execute an operation on the current stored number
    // 
    // Accepts an operation object with the fields operator and value
    executeOperation(operation = this.operation) {
        let firstNum = String(this.stored);
        let operator = String(operation.operator);
        let secondNum = String(operation.value);
        let evalString = firstNum + operator + secondNum;    
        this.stored = eval(firstNum + operator + secondNum);        
        this.output = this.stored;
    }

    // Reset the calculator state 
    resetState() {
        this.output = 0;
        this.stored = "";
        this.operation = {
            value: "",
            operator: ""
        }
        this.ran = false;
        this.editing = false;
        this.refresh();
    }

    // Currency conversion using money.js
    convert(value, from, to) {
        // Run the convertion 
        let converted = fx(value).from(from).to(to);
        this.stored = converted.toFixed(2);    
        this.output = this.stored;
        // clear the operation
        this.operation = {
            value: "",
            operator: ""
        }
        // cleanup attributes
        this.ran = false;
        this.editing = false;
    }

    // Setup exchange rates from the money library using ajax
    getExchangeRates() {
        let apiUrl = "https://api.fixer.io/latest?base=GBP";
        // Load the rates into the money.js library
        $.getJSON(apiUrl, function(data) {
            fx.rates = data.rates;
            fx.base = data.base;
        });        
    }

    // Output the current output variable
    refresh() {
        $(this.outputElement).html(this.output);
        if(this.debug)
            console.log(this);
    }
}

export { Calculator };