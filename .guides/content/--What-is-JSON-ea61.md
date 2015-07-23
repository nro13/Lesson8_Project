<center><h1>What is JSON?</h1></center>

<B>JSON stands for JavaScript Object Notation.</B> It is a lightweight, easy and popular way to exchange data.  JSON is a way of formatting data.  A lot of services we use everyday have JSON-based APIs:  Twitter, Facebook and Flickr all send back data (HTTP response) in JSON format.  In this project, we will look at loading JSON data using an HTTP GET request.  

Visit the following site to view 10 Examples of JSON Files:  http://www.sitepoint.com/10-example-json-files/

<b><center>Below is an example for the movie "Big" using the OMDb API where the HTTP response returns JSON data:</center></b>

<pre>
{
    Actors: "Tom Hanks, Elizabeth Perkins, Robert Loggia, John Heard"
    Awards: "Nominated for 2 Oscars. Another 12 wins and 11 nominations."
    Country: "USA"
    Director: "Penny Marshall"
    Genre: "Comedy, Drama, Fantasy"
    Language: "English"
    Metascore: "72"
    Plot: "When a boy wishes to be big at a magic wish machine, he wakes up the         next morning and finds himself in an adult body."
    Poster: "http://ia.media-   imdb.com/images/M/MV5BNDk0OTM1Mzk3M15BMl5BanBnXkFtZTgwNDg2NjIyMDE@._V1_SX300.jpg"
    Rated: "PG"
    Released: "3 Jun 1988"
    Response: "True"
    Runtime: "104 min"
    Title: "Big"
    Type: "movie"
    Writer: "Gary Ross, Anne Spielberg"
    Year: "1988"
    imdbID: "tt0094737"
    imdbRating: "7.3"
    imdbVotes: "137245"
}
</pre>

<b>Below is the same JSON response message viewed in Google Chrome's developer Console (using the "Network" tab):</b>
<center>
<b><h1>Figure 1: Seminole Movie Connection App</h1></b>
<img src=".guides/img/JsonMovie.png" alt="Json data" />
</center>