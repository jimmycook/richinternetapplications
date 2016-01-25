window.$ = window.jQuery = require('jquery')
var moment = require('moment')
var Vue = require('vue')
Vue.use(require('vue-resource'))
var app = require('./app')
var bootstrap = require('bootstrap')

new Vue(app).$mount('#app')
