<form method="POST" action="<?= $vars['action'] ?>">
    <div class="container">
        <div class="row mt-3">
            <div class="col-8">
                <input type="text" name="name" value="<?= isset($vars['user']) ? $vars['user']->name : '' ?>" 
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col-3">
                <input type="text" name="start_year" value="<?= isset($vars['user']) ? $vars['user']->start_year : '' ?>
            </div>
            <div class="col-3">
                <input type="text" name="end_year" value="<?= isset($vars['user']) ? $vars['user']->start_year : '' ?>
            </div>
        </div>
    </div>
</form>