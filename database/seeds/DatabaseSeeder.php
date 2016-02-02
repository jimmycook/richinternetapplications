<?php

use Illuminate\Database\Seeder;
use App\Movie;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $m = new Movie();
        $m->name = 'Pulp Fiction'; 
        $m->director = 'Quentin Tarentino';
        $m->genre = 'Crime'; 
        $m->image_url = 'http://imgc.allpostersimages.com/images/P-473-488-90/17/1723/QS53D00Z/posters/pulp-fiction-cover-with-uma-thurman-movie-poster.jpg';
        $m->ranking = 1;
        $m->year = '1994';
        $m->save();

        $m = new Movie();
        $m->name = 'Good Will Hunting'; 
        $m->director = 'Gus Van Sant';
        $m->genre = 'Drama';
        $m->image_url = 'http://t0.gstatic.com/images?q=tbn:ANd9GcT4vHOLWBM56R6fNs7K9xcEf7V8M8mzrzi6LtWGXrqfg8-KynGn';
        $m->ranking = 2;
        $m->year = '1997';
        $m->save();

        $m = new Movie();
        $m->name = 'The Dark Knight'; 
        $m->director = 'Chris Nolan';
        $m->genre = 'Crime'; 
        $m->image_url = 'http://www.gstatic.com/tv/thumb/movieposters/173378/p173378_p_v8_aa.jpg';
        $m->ranking = 3;
        $m->year = '2008';
        $m->save();

        $m = new Movie();
        $m->name = 'The Martian'; 
        $m->director = 'Ridley Scott';
        $m->genre = 'Science Fiction'; 
        $m->image_url = 'http://cdn.traileraddict.com/content/20th-century-fox/martian2015.jpg';
        $m->ranking = 4;
        $m->year = '2015';
        $m->save();

        $m = new Movie();
        $m->name = 'Star Wars: The Force Awakens'; 
        $m->director = 'JJ Abrams';
        $m->genre = 'Science Fiction'; 
        $m->image_url = 'http://a.dilcdn.com/bl/wp-content/uploads/sites/6/2015/10/star-wars-force-awakens-official-poster.jpg';
        $m->ranking = 5;
        $m->year = '2015';
        $m->save();   

        $m = new Movie();
        $m->name = 'Whiplash'; 
        $m->director = 'Damien Chazelle';
        $m->genre = 'Drama'; 
        $m->image_url = 'http://cdn.collider.com/wp-content/uploads/whiplash-poster.jpg';
        $m->ranking = 6;
        $m->year = '2014';
        $m->save(); 

        $m = new Movie();
        $m->name = 'Django Unchained'; 
        $m->director = 'Quentin Tarentino';
        $m->genre = 'Western'; 
        $m->image_url = 'http://movi.ca/im/mio/movie-Django-Unchained-2012.jpg';
        $m->ranking = 7;
        $m->year = '2012';
        $m->save(); 

        $m = new Movie();
        $m->name = 'Clerks'; 
        $m->director = 'Kevin Smith';
        $m->genre = 'Comedy'; 
        $m->image_url = 'http://images.moviepostershop.com/clerks-movie-poster-1994-1020189218.jpg';
        $m->ranking = 8;
        $m->year = '1993';
        $m->save(); 

        $m = new Movie();
        $m->name = 'The Hateful Eight'; 
        $m->director = 'Quentin Tarentino';
        $m->genre = 'Western'; 
        $m->image_url = 'http://cdn.collider.com/wp-content/uploads/the-hateful-eight-poster1.jpg';
        $m->ranking = 9;
        $m->year = '2015';
        $m->save(); 

        $m = new Movie();
        $m->name = 'Forrest Gump'; 
        $m->director = 'Robert Zemeckis';
        $m->genre = 'Drama'; 
        $m->image_url = 'http://images.fineartamerica.com/images-medium-large-5/no193-my-forrest-gump-minimal-movie-poster-chungkong-art.jpg';
        $m->ranking = 10;
        $m->year = '1994';
        $m->save(); 
    }
}
