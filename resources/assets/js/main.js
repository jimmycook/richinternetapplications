// Importing libararies
window.$ = window.jQuery = require('jquery');
var moment = require('moment');
import Vue from 'vue';
var bootstrap = require('bootstrap');
import Firebase from 'firebase';

// Importing my own code
import App from './App.vue';

require('./jquery/app.js');
require('./vue/reviews.js')

// Start the vue instance
new Vue({
  el: 'body',
  components: { App }
});


var test = "test"
