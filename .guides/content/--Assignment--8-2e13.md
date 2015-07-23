<center><h1>Add Additional Content to the Movie Search Application</h1></center>

<b>Description: </b>
Include additional information about the movie to be displayed in the movie application.  Visit the OMDb API site (http://www.omdbapi.com/) to view the additional parameters that can be displayed from the <code>HTTP Response</code>.   An example is depicted below for the movie "Big" using the OMDb API where the HTTP response returns JSON data:
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

<img src=".guides/img/JsonMovie.png" alt="Json data" />
</center>

<b><h2>Steps to add additional movie content to the web application:</h2></b>
<ol>
<li>
In the <code>(movie.html)</code>, add at least <b>FIVE</b> additional movie items to the web application interface.  This is done by adding additional <b>DOM nodes</b>.  For instance, to add the <b>Year</b> the movie "Big" was produced, the following code would be added in the <code>&ltbody>...&lt\body></code> tag:

<pre>
&lta href="#" class="list-group-item">
&lth3 class="list-group-item-heading">Year:&lt/h3>
&ltp class="list-group-item-text lead text-primary" id="Year">&lt/p>
&lt/a>
</pre>

<b>NOTE:</b>  The important part of the above statment is the <code>id="Year"</code>.  This is a placeholder where the year will be placed once the value is retrived from the OMDb API web service.
</li>

<li>Update the <code>jQuery</code> statements in the <code>(movie.html)</code> to pull out those additional parameters.  Use the demo on the OMDb site to find the additional movie information that can be displayed or view the parameters above!!!  For instance, to add the <b>Year</b> the movie "Big" was produced, the following code would be added in the <code>&ltscript>...&lt\script></code> tag in order to pull the value out of the <code>HTTP Response</code> from the OMDb API web service:
<pre>
$('#Year').html(json.Year);
</pre>
</li>
</ol>
<b>SPECIAL NOTE:  BE PATIENT IF THE APPLICATION DOES NOT DISPLAY THE MOVIE CONTENT RIGHT AWAY!!!  YOU MAY NEED TO REFRESH THE PAGE OR OPEN THE JAVASCRIPT CONSOLE USING THE 'NETWORK' TAB TO TROUBLESHOOT.</b>

<b><h2>Steps to use Javascript Console to Troubleshoot your Web Application (if needed!):</h2></b>
<ol>
<li>
Go to JavaScript Console.
</li>
<li>Click the 'Network' tab.</li>
<li>Select the last entry "move.php?&t=Big" <center>

<img src=".guides/img/NetworkTab.png" alt="" /></center></li>
<li>Select and review the "Preview" or "Response" tab to determine if you are properly retrieving the HTTP Response from the OMDb API Web Service.

<center>
<img src=".guides/img/NetworkTab2.png" alt="" /></center></li>
</ol>


<h3>Below is an example of the Movie Search Application after adding the Year!</h3>
<center>
<img src=".guides/img/MovieOMDB_Add.png" alt="" /></center>


