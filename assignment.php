<?php 
    include_once "header.php";
?>
<section class="main-container">
  <div class="container">
<pre><code class="javascript">
$(document).ready(function() {
  $('pre code').each(function(i, block) {
    hljs.highlightBlock(block);
  });
});
</code></pre>
</div>
</section>
<?php 
    include_once "footer.php";
?>