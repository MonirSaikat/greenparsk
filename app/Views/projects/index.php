<?=$this->extend('layouts/main')?>

<?=$this->section('content')?>

<div class="page-wrapper">
    <h1>Projects</h1>

    <div class="columns columns-2">
        <?php foreach ($projects as $project): ?>
        <div class="column">
            <div class="card">
                <div class="card-img">
                    <img src="<?=base_url('images/' . $project->image)?>" alt="">
                </div>
                <div class="card-content">
                    <h2><?=$project->title?></h2>
                    <p style="margin-top: 10px">
                        <?=word_limiter($project->details, 40, '')?>
                        <a href="/projects/<?=$project->id?>">more...</a>
                    </p>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>

<?=$this->endSection()?>