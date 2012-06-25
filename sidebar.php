<ul id="sidebar">
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
 <li id="about">
  <h2>About</h2>
  <p>This is my blog.</p>
 </li>
 <li id="links">
  <h2>Links</h2>
  <ul>
   <li><a href="http://example.com">Example</a></li>
  </ul>
 </li>
<?php endif; ?>
</ul>