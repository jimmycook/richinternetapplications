<template>
  	<div class="container-fluid" id="app">
    	<h1>Movie Booker</h1>
    	<movie-picker></movie-picker>
  	</div>
</template>

<script>
import Hello from './components/Hello.vue'
import MoviePicker from './components/MoviePicker.vue'

export default {
    components: {
        MoviePicker
    }
}
</script>

<style>
body {
    font-family: Helvetica, sans-serif;
}
</style>