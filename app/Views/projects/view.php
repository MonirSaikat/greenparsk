<?=$this->extend('layouts/main')?>
<?=$this->section('content')?>

<div class="page-wrapper">
    <h1><?=$project->title?></h1>
    <div>
        <p>
            <?=$project->details?>
        </p>
    </div>
</div>

<?=$this->endSection()?>