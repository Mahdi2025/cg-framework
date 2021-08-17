<?php require 'views/partials/header.view.php' ?>

<div class="main container">
<a href="/job/create" class="btn btn-primary"> create </a>
    <section class="jobs">
        <div class="row">
            <h2 style="background-color:DodgerBlue;">Jobs:</h2>
            <hr>
            <?php foreach ($vars['jobs'] as $job) : ?>
                <div class="col-12"><?= $job->start_year ?>/<?= $job->end_year ?></div>
                <div class="col-12"><?= $job->company_name ?></div>
                <div class="col-12"><?= $job->position ?></div>


        <a href="/job/<?= $job->id ?>/edit" class="btn btn-primary"> Edit </a>

            <?php endforeach ?>
        </div>
    </section>

  
</div>


<?php require 'views/partials/footer.view.php' ?>
