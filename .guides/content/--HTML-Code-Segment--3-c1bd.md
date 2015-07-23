
<center><h1>Examine the next segment of code in the <br><code>"movie.html"</code> file displayed below: </h1></center>

AJAX is the art of exchanging data with a server, and update parts of the web page - without reloading the whole page.  Visit the following online tutorial to learn more about jQuery AJAX Methods:   http://www.w3schools.com/jquery/jquery_ref_ajax.asp

This application uses the <code>$.ajax()</code> method.  The method peforms an async AJAX request.  View the following online tutorials for more details:
<ul>
<li>http://www.w3schools.com/jquery/ajax_ajax.asp </li>
<li>http://api.jquery.com/jquery.ajax/</li>
<li>http://www.w3schools.com/jquery/jquery_ajax_intro.asp</li>
</ul>

The jQuery’s <code>$.ajax()</code> function is used to perform an asynchronous HTTP request. The <code>$.ajax()</code> function is a behind the scene function using a preset configuration. The signatures of this function are shown below:

<code> $.ajax(url[, options])</code>  <b>or</b>  <code>$.ajax([options])</code>.
</ul>


The <code>url</code> parameter is a string containing the URL you want to reach with the Ajax call, while <code>options</code> is an object literal containing the configuration for the Ajax request.



The code segment below uses the <code> jQuery .ajax() method</code>.  This preferred way of calling a JSON 

<pre>
    &ltscript>
        $(document).ready(function(){
           $(':button').click(function(){
                 var message = 't=' + $('#movieName').val();   
                 $.ajax({
                      type: 'GET',
                      url: 'movie.php?',
                      data: message             
                })
                .done(function(json){
                     $('#Title').html(json.Title);
                     $('#Rated').html(json.Rated);
                     $('#Actors').html(json.Actors);
                     $('#Released').html(json.Released);
                })
                .fail(function() {
                      alert("Posting failed.");              
                });                    
          return false;
      });//end of submit
  });//end of ready      
 &lt/script>
</pre>

In the snippet above, the application employed several optional parameters of the $.ajax() method.  Here is an brief explanation of the options needed: 
<ul>
<li><code>type</code> - The type of request to make, which can be either "POST" or "GET"</li>
<li><code>url</code> - A string containing the URL to which the request is sent.</li>
<li><code>data</code> - The data to send to the server when performing the Ajax request.</li>
</ul>








