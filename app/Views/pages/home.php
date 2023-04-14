<?=$this->extend('layouts/main')?>

<?=$this->section('content')?>

<div class="columns">
<div id="leftPan">
    <div id="welcome">
        <h2></h2>
        <img src="images/img_welcome.jpg" width="225" height="68" alt="" />
        <p class="headline">Nam eu nulla. Donec lobortis purus vel urna. Nunc laoreet lacinia nunc. </p>
        <p>Nam eu nulla. Donec lobortis purus vel urna. Nunc laoreet lacinia nunc. In volutpat sodales ipsum. Sed
            vestibulum. Integer in ante. Sed Nunc laoreet lacinia nunc. In volutpat sodales ipsum. Sed vestibulum.
            Integer in ante. Sed posuere ligula rhoncus erat. Fusce urna dui, sollicitudin ac, pulvinar quis, <a
                href="#">more...</a></p>
    </div>
</div>

<div id="middlePan">
    <div id="services">
        <h2></h2>
        <ul>
            <?php foreach ($services as $service): ?>
            <li><a href="#"><?=$service->title?> </a></li>
            <?php endforeach;?>
        </ul>
    </div>
</div>

<div id="rightPan">
    <div id="featproject">
        <h2></h2>
        <img src="images/img_project.jpg" width="225" height="68" alt="" />
        <p class="headline"><?=$featured_project->title?></p>
        <p>
            <?=word_limiter($featured_project->details, 48, '')?>
            <a href="/projects/<?=$featured_project->id?>">more...</a>
        </p>
    </div>
</div>
</div>
<div class="clear" id="end"></div>

<?=$this->endSection()?>
