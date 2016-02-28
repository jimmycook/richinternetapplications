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
        $m->slug = 'pulp-fiction';
        $m->director = 'Quentin Tarentino';
        $m->genre = 'Crime';
        $m->image_url = 'http://imgc.allpostersimages.com/images/P-473-488-90/17/1723/QS53D00Z/posters/pulp-fiction-cover-with-uma-thurman-movie-poster.jpg';
        $m->ranking = 1;
        $m->year = '1994';
        $m->description = "Pulp Fiction is a 1994 American black comedy crime film written and directed by Quentin Tarantino, from a story by Tarantino and Roger Avary.[4] Tarantino's second feature film, it is iconic for its eclectic dialogue, ironic mix of humor and violence, nonlinear storyline, and a host of cinematic allusions and pop culture references. The film was nominated for seven Oscars, including Best Picture; Tarantino and Avary won for Best Original Screenplay. It was also awarded the Palme d'Or at the 1994 Cannes Film Festival. A major critical and commercial success, it revitalized the career of its leading man, John Travolta, who received an Academy Award nomination, as did co-stars Samuel L. Jackson and Uma Thurman.";
        $m->admission_price = 899;
        $m->save();

        $m = new Movie();
        $m->name = 'Good Will Hunting';
        $m->slug = 'good-will-hunting';
        $m->director = 'Gus Van Sant';
        $m->genre = 'Drama';
        $m->image_url = 'http://t0.gstatic.com/images?q=tbn:ANd9GcT4vHOLWBM56R6fNs7K9xcEf7V8M8mzrzi6LtWGXrqfg8-KynGn';
        $m->ranking = 2;
        $m->year = '1997';
        $m->description = "Good Will Hunting is a 1997 American drama film directed by Gus Van Sant, and stars Matt Damon, Robin Williams, Ben Affleck, Minnie Driver and Stellan Skarsgård. Written by Affleck and Damon, and with Damon in the title role, the film follows 20-year-old South Boston laborer Will Hunting, an unrecognized genius who, as part of a deferred prosecution agreement after assaulting a police officer, becomes a client of a therapist (Williams) and studies advanced mathematics with a renowned professor (Skarsgård). Through his therapy sessions, Will re-evaluates his relationships with his best friend (Affleck), his girlfriend (Driver) and himself, facing the significant task of thinking about his future.";
        $m->admission_price = 899;
        $m->save();

        $m = new Movie();
        $m->name = 'The Dark Knight';
        $m->slug = 'the-dark-knight';
        $m->director = 'Chris Nolan';
        $m->genre = 'Crime';
        $m->image_url = 'http://www.gstatic.com/tv/thumb/movieposters/173378/p173378_p_v8_aa.jpg';
        $m->ranking = 3;
        $m->year = '2008';
        $m->description = "The Dark Knight is a 2008 superhero film directed, produced, and co-written by Christopher Nolan. Based on the DC Comics character Batman, the film is the second part of Nolan's Batman film series and a sequel to 2005's Batman Begins, starring Christian Bale, Michael Caine, Heath Ledger, Gary Oldman, Aaron Eckhart, Maggie Gylenhaal and Morgan Freeman. With the help of police lieutenant James Gordon (Oldman) and newly elected district attorney Harvey Dent (Eckhart), Batman (Bale) raises the stakes on his war on crime by setting out to dismantle the remaining mafia groups that plague the streets. The partnership proves effective, until the mob draw Batman into combat with a criminal lunatic known as \"the Joker\" (Ledger), whom he must stop from unleashing a reign of chaos that would plunge Gotham City into anarchy.";
        $m->admission_price = 899;
        $m->save();

        $m = new Movie();
        $m->name = 'The Martian';
        $m->slug = 'the-martian';
        $m->director = 'Ridley Scott';
        $m->genre = 'Science Fiction';
        $m->image_url = 'http://cdn.traileraddict.com/content/20th-century-fox/martian2015.jpg';
        $m->ranking = 4;
        $m->year = '2015';
        $m->description = "The Martian is a 2015 American science fiction film directed by Ridley Scott and starring Matt Damon. The film is based on Andy Weir's 2011 novel The Martian, which was adapted into a screenplay by Drew Goddard. Damon stars as an astronaut who is mistakenly presumed dead and left behind on Mars. The film depicts his struggle to survive and others' efforts to rescue him. The film's ensemble cast also features Jessica Chastain, Kristen Wiig, Jeff Daniels, Michael Peña, Kate Mara, Sean Bean, Sebastian Stan, Aksel Hennie, and Chiwetel Ejiofor.";
        $m->admission_price = 899;
        $m->save();

        $m = new Movie();
        $m->name = 'Star Wars: The Force Awakens';
        $m->slug = 'star-wars-the-force-awakens';
        $m->director = 'JJ Abrams';
        $m->genre = 'Science Fiction';
        $m->image_url = 'http://a.dilcdn.com/bl/wp-content/uploads/sites/6/2015/10/star-wars-force-awakens-official-poster.jpg';
        $m->ranking = 5;
        $m->year = '2015';
        $m->description = "Star Wars: The Force Awakens (also known as Star Wars Episode VII: The Force Awakens) is a 2015 American epic space opera film directed, co-produced, and co-written by J. J. Abrams. The seventh installment in the main Star Wars film series, it stars Harrison Ford, Mark Hamill, Carrie Fisher, Adam Driver, Daisy Ridley, John Boyega, Oscar Isaac, Lupita Nyong'o, Andy Serkis, Domhnall Gleeson, Anthony Daniels, Peter Mayhew, and Max von Sydow. Produced by Lucasfilm and Abrams' Bad Robot Productions and distributed worldwide by Walt Disney Studios Motion Pictures, The Force Awakens is set about 30 years after Return of the Jedi; it follows Rey, Finn, and Poe Dameron's search for Luke Skywalker and their fight alongside the Resistance, led by veterans of the Rebel Alliance, against Kylo Ren and the First Order, successor to the Galactic Empire.";
        $m->admission_price = 899;
        $m->save();

        $m = new Movie();
        $m->name = 'Whiplash';
        $m->slug = 'whiplash';
        $m->director = 'Damien Chazelle';
        $m->genre = 'Drama';
        $m->image_url = 'http://cdn.collider.com/wp-content/uploads/whiplash-poster.jpg';
        $m->ranking = 6;
        $m->year = '2014';
        $m->description = "Whiplash is a 2014 American independent drama film written and directed by Damien Chazelle based on his experiences in the Princeton High School Studio Band.[3] Starring Miles Teller and J. K. Simmons, the film depicts the relationship between an ambitious jazz student (Teller) and an abusive instructor (Simmons). Paul Reiser and Melissa Benoist co-star as the student's father and love interest respectively. The film opened in limited release domestically in the US and Canada on October 10, 2014, gradually expanding to over 500 screens and finally closing after 24 weeks on March 26, 2015. Over this time the film grossed $49 million, against a production budget of $3.3 million.";
        $m->admission_price = 899;
        $m->save();

        $m = new Movie();
        $m->name = 'Django Unchained';
        $m->slug = 'django-unchained';
        $m->director = 'Quentin Tarentino';
        $m->genre = 'Western';
        $m->image_url = 'http://movi.ca/im/mio/movie-Django-Unchained-2012.jpg';
        $m->ranking = 7;
        $m->year = '2012';
        $m->description = "Django Unchained is a 2012 American western film written and directed by Quentin Tarantino, starring Jamie Foxx, Christoph Waltz, Leonardo DiCaprio, Kerry Washington, and Samuel L. Jackson. Set in the Old West and antebellum South, it is a highly stylized variation of Spaghetti Westerns, and a tribute to the 1966 Italian film Django by Sergio Corbucci, whose star Franco Nero has a cameo appearance.";
        $m->admission_price = 899;
        $m->save();

        $m = new Movie();
        $m->name = 'Clerks';
        $m->slug = 'clerks';
        $m->director = 'Kevin Smith';
        $m->genre = 'Comedy';
        $m->image_url = 'http://images.moviepostershop.com/clerks-movie-poster-1994-1020189218.jpg';
        $m->ranking = 8;
        $m->year = '1993';
        $m->description = "Clerks (stylized as Clerks.) is a 1994 American black-and-white comedy-drama film written and directed by Kevin Smith. Starring Brian O'Halloran as Dante Hicks and Jeff Anderson as Randal Graves, it presents a day in the lives of two store clerks and their acquaintances. Shot entirely in black and white, Clerks is the first of Smith's View Askewniverse films, and introduces several recurring characters, notably Jay and Silent Bob, the latter played by Smith himself. The structure of the movie contains nine scene breaks, signifying the nine rings of hell as in Dante Alighieri's Divine Comedy, from which the main character, Dante, clearly derives his name.";
        $m->admission_price = 899;
        $m->save();

        $m = new Movie();
        $m->name = 'The Hateful Eight';
        $m->slug = 'the-hateful-eight';
        $m->director = 'Quentin Tarentino';
        $m->genre = 'Western';
        $m->image_url = 'http://cdn.collider.com/wp-content/uploads/the-hateful-eight-poster1.jpg';
        $m->ranking = 9;
        $m->year = '2015';
        $m->description = "The Hateful Eight is a 2015 American Western mystery film written and directed by Quentin Tarantino. It stars Samuel L. Jackson, Kurt Russell, Jennifer Jason Leigh, Walton Goggins, Demián Bichir, Tim Roth, Michael Madsen, and Bruce Dern as eight strangers who seek refuge from a blizzard in a stagecoach stopover some time after the American Civil War.";
        $m->admission_price = 899;
        $m->save();

        $m = new Movie();
        $m->name = 'Forrest Gump';
        $m->slug = 'forrest-gump';
        $m->director = 'Robert Zemeckis';
        $m->genre = 'Comedy';
        $m->image_url = 'http://images.fineartamerica.com/images-medium-large-5/no193-my-forrest-gump-minimal-movie-poster-chungkong-art.jpg';
        $m->ranking = 10;
        $m->year = '1994';
        $m->description = "Forrest Gump is a 1994 American epic romantic-comedy-drama film based on the 1986 novel of the same name by Winston Groom. The film was directed by Robert Zemeckis and stars Tom Hanks, Robin Wright, Gary Sinise, Mykelti Williamson, and Sally Field. The story depicts several decades in the life of Forrest Gump, a slow-witted and naïve, but good-hearted and athletically prodigious man from Alabama who witnesses, and in some cases influences, some of the defining events of the latter half of the 20th century in the United States; more specifically, the period between Forrest's birth in 1944 and 1982. The film differs substantially from Winston Groom's novel, including Gump's personality and several events that were depicted.";
        $m->admission_price = 899;
        $m->save();
    }
}
