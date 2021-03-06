<?php require 'views/partials/header.view.php' ?>

<link rel="stylesheet" href="public/css/main.css" />


<div class="main container">
 
    <section class="opleidingen">
        <div class="row">
            <h2>Educations:</h2>
            <hr>
            <?php foreach ($vars['educations'] as $education) : ?>
                <div class="col-12"><?= $education->start_year ?>/<?= $education->end_year ?></div>
                <div class="col-md-12"><?= $education->degree ?></div>
                <div class="col-md-12"><?= $education->college ?></div>


        <a href="/education/create" class="btn btn-primary"> create </a>
        <a href="/education/<?= $education->id ?>/edit" class="btn btn-primary"> Edit </a>
   
            <?php endforeach ?>
        </div>
  
 
        <div class="main container">

<section class="jobs">
    <div class="row">
        <h2>Jobs:</h2>
        <hr>
        <?php foreach ($vars['jobs'] as $job) : ?>
            <div class="col-12"><?= $job->start_year ?>/<?= $job->end_year ?></div>
            <div class="col-12"><?= $job->company_name ?></div>

            <a href="/job/create" class="btn btn-primary"> create </a>
            <a href="/job/<?= $job->id ?>/edit" class="btn btn-primary"> Edit </a>

        <?php endforeach ?>
    </div>
</section>


</div>

 
<div class="main container">

    <section class="skills">
        <div class="row">
            <h2>Skills:</h2>
            <hr>
            <?php foreach ($vars['skills'] as $skills) : ?>
                
                    <div class="col-12"><?= $skills->skill ?></div>
                    
                <a href="/skill/create" class="btn btn-primary"> create </a>
                <a href="/skill/<?= $skill->id ?>/edit" class="btn btn-primary"> Edit </a>
            <?php endforeach ?>
        </div>


    </section>
    <section class="hobbies">
        <div class="row">
            <h2>Hobbies:</h2>
            <hr>
            <?php foreach ($vars['hobbies'] as $hobbie) : ?>
                <div class="col-12"><?= $hobbie->hobbie ?></div>


        <a href="/hobbie/create/" class="btn btn-primary"> create </a>
        <a href="/hobbie/<?= $hobbie->id ?>/edit" class="btn btn-primary"> Edit </a>
                
            <?php endforeach ?>
        </div>

        


</div>






 





























































<?php require 'views/partials/footer.view.php' ?>

