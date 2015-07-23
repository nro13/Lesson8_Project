<center><h1>Coding Drill:  jQuery DOM Traversal Exercise.</h1></center>

<ol>
<li>Preview the <b>index.htm</b> web page in a browser by right-clicking on the file and selecting "Preview static".  </li>
<li>Open the <b>browser tool</b> that lets you inspect the DOM of the current web page using the method for your browser:

---Internet Explorer DOM Inspector:  Press <b>F12</b>, then <b>Ctrl + i</b><br>
---Firefox Inspector:  Press <b>Ctrl + Shift + C</b> (Windows) or <b>command + option + C</b> (Mac)<br>
---Chrome Elements:  Press <b>Ctrl + Shift + i</b> (Windows) or <b>command + option + i</b> (Mac), then click <b>Elements</b><br>
</li>
<li>
The following table describes several jQuery methods that enable you to traverse the DOM.<br><br>
<center>
<img src=".guides/img/jqueryDOMTraversal.png" alt="Rubric" />
</center>

</li>
<li>
In the JavaScript Console Pane, type the following statements that demonstrate the jQuery Methods for DOM Traversal using the <b>Recipe Display App</b>:
</li>

<li>
Type the following statement in the Javascript Console, then press enter:  <b>$(“h3”)</b>
<br><br><center> <b>RESULT:</b></center><center>
<img src=".guides/img/trav1.png" alt="" /></center>
</li>

<li>
Type the following statement in the Javascript Console, then press enter:  <b>$(“h3”).first()</b>
<br><br><center><b>RESULT:</b></center><center>
<img src=".guides/img/trav2.png" alt="" /></center>
</li>
<li>
Type the following statement in the Javascript Console, then press enter:  <b>$(“h3”).last()</b>
<br><br><center><b>RESULT:</b></center><center>
<img src=".guides/img/trav3.png" alt="" /></center>
</li>

<li>
Type the following statement in the Javascript Console, then press enter: <b>$(“h3”).first().next()</b>
<br><br><center><b>RESULT:</b></center><center>
<img src=".guides/img/trav4.png" alt="" /></center>
</li>

<li>
Type the following statement in the Javascript Console, then press enter:  <b>$(“h3”).last().next()</b>
<br><br><center><b>RESULT:</b></center><center>
<img src=".guides/img/trav5.png" alt="" /></center>
</li>

<li>
Type the following statement in the Javascript Console, then press enter:  <b>$(“h3”).siblings()</b>
<br><br><center><b>RESULT:</b></center><center>
<img src=".guides/img/trav6.png" alt="" /></center>
</li>

<li>
Type the following statement in the Javascript Console, then press enter:  <b>$(“ul”).children()</b>
<br><br><center><b>RESULT:</b></center><center>
<img src=".guides/img/trav7.png" alt="" /></center>
</li>
</ol> 
  



