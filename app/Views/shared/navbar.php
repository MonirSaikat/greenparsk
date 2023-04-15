<div id="menuPan">
<ul class="menu">
    <li class="btn_1"><a class="<?php if (current_url(true)->getSegment(1) == '') {echo 'active';}?>" href="/">home </a></li>
    <li class="btn_2"><a class="<?php if (current_url(true)->getSegment(1) == 'about-us') {echo 'active';}?>" href="/about-us">about us</a></li>
    <li class="btn_3"><a class="<?php if (current_url(true)->getSegment(1) == 'projects') {echo 'active';}?>" href="/projects">projects</a></li>
    <li class="btn_4"><a class="<?php if (current_url(true)->getSegment(1) == 'gallery') {echo 'active';}?>" href="/gallery">gallery</a></li>
    <li class="btn_5"><a class="<?php if (current_url(true)->getSegment(1) == 'career') {echo 'active';}?>" href="/">careers</a></li>
    <li class="btn_6"><a class="<?php if (current_url(true)->getSegment(1) == 'login') {echo 'active';}?>" href="/login">login</a></li>
</ul>
</div>
