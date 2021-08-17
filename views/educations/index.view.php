<?php require 'views/partials/header.view.php' ?>
<head>
  <link rel="stylesheet" href="public/css/main.css" />
 </head>
<div class="main container">
<a href="/education/create" class="btn btn-primary"> create </a>
       
<section class="opleidingen">
  <div class="row">
      <h2>Educations:</2>
      
  <?php foreach ($vars['educations'] as $education) : ?>
        <div class="col-md-12"><?= $education->start_year ?>/<?= $education->end_year ?></div>
        <div class="col-md-12"><?= $education->degree ?></div>
        <div class="col-md-12"><?= $education->college ?></div>

        <a href="/education/<?= $education->id ?>/edit" class="btn btn-primary"> Edit </a>
       
       
   <?php endforeach ?>
  </div>

       
   
  </section>
</div>
           
<?php require 'views/partials/footer.view.php' ?>

