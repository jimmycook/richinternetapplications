import Vue from 'vue';
import Firebase from 'firebase';

var baseURL = 'https://riacoursework.firebaseIO.com/'
/**
 * Setup firebase sync
 */
var Movies = new Firebase(baseURL + 'movies')

Movies.on('child_added', function (snapshot) {
  var item = snapshot.val()
  item.id = snapshot.key()
  // Making sure we can add reviews  
  if(!item.reviews)
    item.reviews = []
  app.movies.push(item)
})

Movies.on('child_removed', function (snapshot) {
  var id = snapshot.key()
  app.movies.some(function (movie) {
    if (movie.id === id) {
      app.movies.$remove(movie)
      return true
    }
  })
})

// Vuejs Code
var app = new Vue({

  // element to mount to
  el: '#app',

  // initial data
  data: {
    movies: [],
    newReview: {
      name: '',
      rating: ''
    },
    reviewing: null
  },

  // methods
  methods: {
    addReview: function (movie) {      
      Movies.child(movie.id).child('reviews').push(this.newReview)
      this.newReview.name = ''
      this.newReview.rating = ''
    },
    toggleReviewing: function (movie) {
      this.newReview.name = ''
      this.newReview.rating = ''
      if(this.reviewing == movie.id)
        this.reviewing = null
      else
        this.reviewing = movie.id      
    },
    cancelReview: function (movie) {
      this.newReview.name = ''
      this.newReview.rating = ''
      movie.reviewing = false
    },
    checkReviewing: function (movie) {     
      if(movie.id == this.reviewing)
        return true
      else 
        return false
    },
    averageReviewScore: function (movie) {
      var reviews = this.movies[movie.id].reviews
      var count = 0
      var total = 0
      for(var key in reviews){
        var rating = reviews[key].rating 
        if(rating != null && rating != "") {
          count ++
          total += rating  
        }
      }
      return total / count
    }
  }
})
