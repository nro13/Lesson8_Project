<center><h1>Write the code to create the event listeners for the <code>h3</code> elements that call the <code>display()</code> function.</h1></center>
<ol>
<li>
<b>Below</b> the closing braces <b><code>}</code></b> for the <code>display()</code> function, enter the following statement to create event listeners for the <code>h3</code> elements that call the <code>display()</code> function when they are clicked:

You should have the following code now:
<pre>("h3").click(display);</pre>

The <code>click()</code> function specifies the code to execute on the <b>click</b> event.  
</li>
<li>
In the <b>index.htm</b> file just before the closing <code>&lt/body></code> tag, add a <code>script</code> element that specifies <b>script.js</b> as its source.

<pre>&ltscript src="script.js">&lt/script>
</pre>
</li>

<li>
Just above the <code>script</code> element you created in the previous step, add a second script element that references the <b>jquery-1.11.1.min.js</b> file.
<pre>&ltscript src="jquery-1.11.1.min.js">&lt/script>
</li>
<li>
Open the <b>index.htm</b> in a browser, and click the <b>Ingredients</b> and <b>Instructions</b> headers.  The ingredients list should now display using the jQuery <code>fadeIn</code> animation method after the user click the Ingredients header, and the instructions are displayed in the same way after the user clicks the Instructions header, as shown below.
</li>
<center>
<h1>Completed Recipe Display App</h1>
<img src=".guides/img/RecipeDisplayApp.png" alt="Rubric" />
</center>

