window.$ = window.jQuery = require('jquery')
var moment = require('moment')
import Vue from 'vue'
import App from './App.vue'
var bootstrap = require('bootstrap')
require('./jquery/app.js')

new Vue({
  el: 'body',
  components: { App }
})
