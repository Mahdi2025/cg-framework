<?php require 'views/partials/header.view.php' ?>

<div class="main container">
<a href="/hobbie/create/" class="btn btn-primary"> create </a>
    <section class="hobbies">
        <div class="row">
            <h2 style="background-color:DodgerBlue;">Hobbies:</h2>
            
            <?php foreach ($vars['hobbies'] as $hobbie) : ?>
                <div class="col-md-12"><?= $hobbie->hobbie ?></div>


        <a href="/hobbie/<?= $hobbie->id ?>/edit" class="btn btn-primary"> Edit </a>
   
                
            <?php endforeach ?>
        </div>
    </section>

  
</div>

<?php require 'views/partials/footer.view.php' ?>