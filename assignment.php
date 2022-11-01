<?php 
    include_once "header.php";
?>
<h1>Page 1</h1>
<pre><code class="javascript">
$(document).ready(function() {
  $('pre code').each(function(i, block) {
    hljs.highlightBlock(block);
  });
});
</code></pre>
<p>jemoeder</p>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
     Adipisci, dignissimos. Ab ullam numquam labore sequi laudantium doloremque expedita velit facilis.
     Aliquam obcaecati quaerat necessitatibus minus eius non velit dolor magni!</p>
<?php 
    include_once "footer.php";
?>