<div id="wrap">
    <?php echo Form::open(['role' => 'form','autocomplete'=>'on']); ?>

    <?php echo Form::input('text','search',null,['id'=>'search', 'class'=>'form-control', 'placeholder'=>"Where are you looking for"]); ?>

    <?php echo Form::input('submit', 'search_submit', "Rechercher", ['id'=>'search_submit']); ?>

    <?php echo Form::close(); ?>

</div>

