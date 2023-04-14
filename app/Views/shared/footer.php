<?php
$setting = model('settings')->first();
?>

<div id="footer">
      <p>
        <a href="/">HOME PAGE</a> | <a href="#">ABOUT US</a> | <a href="/projects">PROJECTS</a> | <a href="/galleries">GALLERY</a> | <a
          href="#">CAREERS</a> | <a href="/news">NEWS</a> | <a href="/contact">CONTACTS</a><br />
        Copyright &copy; <a style="text-decoration: underline;" target="_blank" href="https://monirsaikat.me"><?=$setting->site_developer?></a> | Design by <a href="http://freshtemplates.com/">Website Templates</a></p>
    </div>
