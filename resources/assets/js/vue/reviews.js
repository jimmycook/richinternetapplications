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

var Reviews = new Firebase(baseURL + 'reviews')

Reviews.on('child_added', function (snapshot) {
  var item = snapshot.val()

  app.reviews.push(item)
})

Reviews.on('child_removed', function (snapshot) {
  var id = snapshot.key()
  app.reviews.some(function (review) {
    if (review.id === id) {
      app.reviews.$remove(review)
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
    reviews: [],
    show: '',
    newReview: {
      name: '',
      rating: '',
      movieID: ''
    }
},

  // methods
  methods: {
    submitReview: function () {
      if(this.newReview.name != '' && this.newReview.rating && this.newReview.movieID != 'placeholder') {

      }
      Reviews.push(this.newReview)
      this.newReview.name = ''
      this.newReview.rating = '0'
      this.newReview.movieID = 'placeholder'
    },
    showRatings: function(movie) {
      this.show = movie.id
    },
    noRatings: function (movie) {
      var count = 0
      this.reviews.some(function (review){

        if(review.movieID == movie.id) {
          count++
        }

      })
      if(!count)
        return true
      return false
    },
    averageReviewScore: function (movie) {
      let total = 0
      let count = 0

      this.reviews.some(function (review){

        if(review.movieID == movie.id) {
          total += parseFloat(review.rating)
          count++
        }

      })

      if(total){
        let average = total / count

        movie.ranking = average
        return average
      }
      else {
        movie.ranking = 0
        return 0
      }
    }
  }
})
