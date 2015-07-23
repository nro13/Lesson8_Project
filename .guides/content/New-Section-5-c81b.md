<center><h1>Write the code to add t.</h1></center>

<ol>
<li>In the <b>script.js</b> file, add the following code to create a new function named <code>display</code> that takes a parameter called <code>event</code>:
<pre>function display(event){
<br>}end of display()</pre>
</li>
<li>
Within the <code>display()</code> function, enter the following <b>jQuery</b> <em>selector</em> to select the <code>currentTarget</code> value of the event parameter:
<pre>$(event.currentTarget)</pre>
This function will be <b>called or invoked</b> when the user clicks either of the <code>h3</code> elements.  This selector will reference the <code>h3</code> element the user clicked.  

In the Figure below, the image on the right represents the application rendered from the HTML code on the left.  Notice the <code>h3</code> tags contain the text:  <b>Ingredients</b> and <b>Instructions</b>.
</li>
<center>
<img src=".guides/img/CodeExplain1.png" alt="Rubric" />
</center><br>
<li>
After the selector you entered in the previous step, type <b>.next()</b>.  This method traverses the DOM tree to the element that follows the selected element - the ingredients list for the first <code>h3</code> heading, or the instructions for the second <code>h3</code> heading.

You should have the following code now:
<pre>
function display(event){<br>
    $(event.currentTarget).next()<br>
}//end of display()</pre>
</li>

<li>
After the method you entered in the previous step, type <b>.fadeIn("slow");</b>

Your completed function should match the following:
<pre>
function display(event){<br>
    $(event.currentTarget).next().fadeIn("slow");<br>
}//end of display()</pre>
</li>





