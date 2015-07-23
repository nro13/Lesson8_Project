<center><h1>File Explanation:  <code>movie.html</code></h1></center>


This application allows the user to enter a movie title, run it through the OMDb API, and return movie information.  You will be examining how the application sends an <code>HTTP Request</code> (Movie Title) to the server and the server sends back an <code>HTTP Response</code> (Movie Information).


Examine the "movie.html" file.  It uses several javascript and stylesheet files including bootstrap and jquery.  Several pre-built styles and functionality from the bootstrap framework have been added.  For example:
<ul>
<li><b>Jumbotron</b> -  displaying the application title – “Seminole Movie Connection”</li>
<li><b>Typography</b> -  providing custom classes and Glyphicon icons to make the site easier on the eyes – for example:  Load Movie button</li>
<li><b>List Group</b> -  displays movie information retrieved from the server</li>
</ul>

<center><h1>Important Elements in the <code>movie.html</code> file</h1></center>
<ul>
Each element/node in the DOM has an id, which matches the “Key” of the key/value pair of the JSON response from the OMDb API (external server).  For example:  

<li><b>Movie Title</b> – element that will display the movie title retrieved from external server (id=”Title”)
</li>
<li>
<b>Rated</b> – element that will display the rating for the movie which is retrieved from external server (id=”Rated”)
</li>
<li>
<b>Actors</b> – element that will display the main actors associated with the movie which is retrieved from the external server (id=”Actors”)
</li>
<li>
<b>Plot</b> – element that will display the plot of the movie which is retrieved from the external server (id=”Plot”)
</li>
<li>
<b>Released</b> – element that will display the release date for the movie which is retrieved from the external server (id=”Plot”)
</li>

</ul>
