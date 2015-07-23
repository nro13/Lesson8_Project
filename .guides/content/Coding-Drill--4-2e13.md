<center><h1>M</h1></center>

<ol><h1>Example #1:</h1>
The following steps will demonstrate additional jQuery Methods using the <b>Recipe Display Application</b>:
<li>Open the <code>script.js</code> file and add the following function:
<pre>
function display2(event) {<br>
   $(event.currentTarget).next().animate( { height: 'toggle'}, "slow");
<br>}
</pre>
</li>
<li>
Add <b>comments</b> around the following code located in the <code>script.js</code>:
<pre>
/*
$("h3").click(display);
*/
</pre>
</li>

<li>
Add the following line of code <b>after</b> the closing brace for the function created above:
<pre>
$("h3").click(display2);
</pre>
The code will trigger the <code>display2()</code> method, which will use the <code>animate()</code> method to toggle the display of the Instructions and Ingredients information.
</li>
<li>
Now, view the <code>index.htm</code> file in a browser to see the application changes.  Select <b>Ingredients</b> or <b>Instructions</b>.  Click on the <code>h3</code> headers several times to see what the <code>display2()</code> function is doing.

The <code>display2()</code> function uses the <b>animate()</b> method, which is used to create custom animations.  The pre-defined property - "toggle" is used to toggle the text below each header.
</li>
</ol>

<ol><h1>Example #2:</h1>
<li>
Add the following code at the end of the the <code>script.js</code> file:
<pre>
$("h3").hover(function(){
       $(this).css("background-color", "yellow");
       }, function(){
       $(this).css("background-color", "pink");
});
</pre>
The <code>hover()</code> method will change the background color of the <code>h3</code> element when the mouse pointer hovers over it.
</li>
<li>Now, view the <code>index.htm</code> file in a browser to see the application changes.  Select <b>Ingredients</b> or <b>Instructions</b>.  Click on the <code>h3</code> headers several times to see what changes were made to the application.</li>

</ol> 
  
<ol><h1>Example #3:</h1>
<li>Finally, add <b>comments</b> around the following code located in the <code>script.js</code>:
<pre>
/*
$("h3").click(display2);
*/
</pre></li>
<li>
Add the following line of code <b>after</b> the code that we commented out in the previous step:
<pre>
$("h3").hover(display2);
</pre>
The <code>hover()</code> method will trigger the <code>display2()</code> method each time the mouse pointer hovers over the <code>h3</code> element.
</li>
<li>Now, view the <code>index.htm</code> file in a browser to see the application changes.  Select <b>Ingredients</b> or <b>Instructions</b>.  Click on the <code>h3</code> headers several times to see what changes were made to the application.</li>
</ol>


