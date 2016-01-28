<template>
    <div class="col-sm-3  " v-for="movie in movies">
        <div class="panel">
            <div class="panel-body">
                <h3>{{ movie.name }}</h3>
                <p>Rank #{{ movie.ranking }}</p>
                <p>Directed By {{ movie.director }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default { 
    data: () => {
        return {
            movies: ''
        }
    },
    methods: {
        getMovies: function () {
            var vm = this
            $.get('/api/movies', function (data){
                vm.movies = data
            })

        }
    },
    created: function () {
        this.getMovies()
    }
}
</script>