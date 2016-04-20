<template>
<div class="movie-list">
    <br>

    <h1 style="padding-left: 10px;">Welcome to your movie booker</h1>
    <p v-show="user">Logged in as {{ user.name }} - <a @click="showBookings()">Click here to view your bookings</a></p>
    <p><a href="/logout">Click here to logout</a></p>

    <div v-show="showingBookings">
        <h2>Your Bookings </h2>
        <div v-show="user.bookings.length < 1">You have no bookings</div>
        <div class="bookings">
            <div v-for="booking in user.bookings">
                Booking for {{ booking.seats }} seat(s) at {{ booking.showing.movie.name }} at {{ booking.showing.start_time }}
            </div>
        </div>
        <a @click="showBookings()">Hide bookings</a>
    </div>

    <div v-show="creatingBooking">
        <h2>Confirm a booking</h2>
        <div class="col-sm-2 clearfix">
            <label>Number of seats </label>
            <input class="form-control" type="number" placeholder="Number of seats" v-model="seats">
        </div>
        <p>Confirm that you would like to book the showing of {{bookingFor.movie.name}} at {{bookingFor.cinema.name}}.
        You will be charged for this at the venue the cost of £{{ (bookingFor.price / 100).toFixed(2) }} per seat (you've selected {{seats}} seats).</p>
        <button class="btn btn-success" @click="confirmBooking()">Book</button>
        <button class="btn btn-danger" @click="stopBooking()">Cancel</button>
    </div>

    <div v-for="movie in movies" class="movie">
        <br>
        <div class="row">
            <div class="col-sm-2">
                <img class="thumbnail-image" :src="movie.image_url" alt="">
            </div>
            <div class="col-sm-10">
                <h3>{{ movie.name }}</h3>
                <p>{{movie.description}}</p>
                <button @click="checkShowings(movie)" class="btn btn-primary btn-lg">Look for showings for this movie</button>
            </div>


        </div>
        <div v-show="selectedShowings.length < 1 && selectedMovie === movie">There are no showings coming up for this film</div>

        <div v-show="selectedMovie == movie" class="showings clearfix">
            <div v-for="showing in selectedShowings" v-show="showing.seats > 0" class="col-sm-6">
                <p>Location: {{showing.cinema.name}}, {{ showing.cinema.location }}</p>
                <p>Start Time: {{ showing.start_time }}</p>
                <p>Seats Remaining: {{ showing.seats }}</p>
                <p>Price: £{{ (showing.price / 100).toFixed(2) }}</p>
                <button class="btn btn-primary" @click="book(showing)">Book</button>
            </div>
        </div>
    </div>
</div>
</template>

<script>
window.$ = window.jQuery = require('jquery');

export default {
    data: function () {
        return {
            user: '',
            movies: '',
            seats: 1,
            showingBookings: false,
            creatingBooking: false,
            bookingFor: '',
            selectedMovie: '',
            selectedShowings: ''

        }
    },
    methods: {
        getMovies: function () {
            let vm = this
            $.get('/api/movies', (data) => {
                vm.movies = data;
            });
        },
        checkShowings: function (movie) {
            if (this.selectedMovie == movie) {
                this.selectedMovie = '';
                this.selectedShowings = '';
                return;
            }
            this.selectedMovie = movie;
            this.selectedShowings = '';
            let url = '/api/showings/' + movie.slug;
            $.get(url, (data) => {
                this.selectedShowings = data;
            });
        },
        getUser: function () {
            this.user = user;
        },
        showBookings: function () {
            this.showingBookings = !this.showingBookings;
        },
        confirmBooking: function () {
            if(this.seats < 1) {
                alert ('You cannot have negative seats');
                return;
            }

            let url = '/api/booking';
            let postData = {
                userid: this.user.id,
                seats: this.seats,
                showingid: this.bookingFor.id
            };
            $.post(url, postData, (data) => {
                if (data) {
                    alert('Booking created successfully');

                }
                else {
                    alert('sorry there was a problem with your input please try again');
                }
            } );
            $.get('/api/user/'+this.user.id, (data) => {
                this.user = data;
            } );
            this.getMovies();
            this.seats = 1;
            this.creatingBooking = false
        },
        stopBooking: function () {
            this.bookingFor = '';
            this.creatingBooking = false;
        },
        book: function (showing) {
            this.bookingFor = showing;
            this.creatingBooking = true;
            // Scroll to top with jquery
            $("html, body").animate({ scrollTop: 0 }, "slow");
        }
    },
    created: function () {
        this.getMovies();
        this.getUser();
    }
}
</script>

<style lang="less">

</style>
