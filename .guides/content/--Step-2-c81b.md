
<center><h1>Examine the next segment of code in the <br><code>"movie.html"</code> file displayed below: </h1></center>
<ol>
<ul>
 

The code segment below establishes the <b>placeholders</b> for FIVE movie information items chosen to display from the HTTP Response from the server:  <b>Title, Rated, Actors, Plot and Released</b>.  If you recall, the server responds with more than five movie information items.  The initial application will pull out ONLY five items to display on the webpage.

<pre>
&ltdiv class="container">
  &lth1 class="text-primary">Movie Information:</h1>
    &ltdiv class="list-group">
        &lta href="#" class="list-group-item">
            &lth3 class="list-group-item-heading">Movie Title:&lt/h3>
            &ltp class="list-group-item-text lead text-primary" id="Title"> &lt/p>
        &lt/a>
        &lta href="#" class="list-group-item">
            &lth3 class="list-group-item-heading">Rated:&lt/h3>
            &ltp class="list-group-item-text lead text-primary" id="Rated"> &lt/p>
        &lt/a>
        &lta href="#" class="list-group-item">
            &lth3 class="list-group-item-heading">Actors:&lt/h3>
            &ltp class="list-group-item-text lead text-primary" id="Actors"> &lt/p>
        &lt/a>        
        &lta href="#" class="list-group-item">
            &lth3 class="list-group-item-heading">Plot:&lt/h3>
            &ltp class="list-group-item-text lead text-primary" id="Plot">  &lt/p>
	&lt/a>        
        &lta href="#" class="list-group-item">
            &lth3 class="list-group-item-heading">Release Date:&lt/h3>
            &ltp class="list-group-item-text lead text-primary" id="Released">  &lt/p>
        &lt/a>        
    &lt/div>
</div> 

</pre>
</ul>

</ol>