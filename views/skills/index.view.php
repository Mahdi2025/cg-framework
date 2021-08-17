<?php require 'views/partials/header.view.php' ?>

<div class="main container">
<a href="/skill/create" class="btn btn-primary"> create </a>
    <section class="skills">
        <div class="row">
            <h2>Skills:</h2>
            <hr>
            <?php foreach ($vars['skills'] as $skill) : ?>
                <tr>
                    <div class="col-12"><?= $skill->skill ?></div>
                </tr>


       
                <a href="/skill/<?= $skill->id ?>/edit" class="btn btn-primary"> Edit </a>

            <?php endforeach ?>
        </div>
    </section>

    
<?php require 'views/partials/footer.view.php' ?>