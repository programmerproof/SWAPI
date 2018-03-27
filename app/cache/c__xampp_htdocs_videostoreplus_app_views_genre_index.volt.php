<div class="page-header">
    <h1>
        Search genre
    </h1>
    <p>
        <?php echo $this->tag->linkTo(array('genre/new', 'Create genre')); ?>
    </p>
</div>

<?php echo $this->getContent(); ?>

<?php echo $this->tag->form(array('genre/search', 'method' => 'post', 'autocomplete' => 'off', 'class' => 'form-horizontal')); ?>

<div class="form-group">
    <label for="fieldId" class="col-sm-2 control-label">Id</label>
    <div class="col-sm-10">
        <?php echo $this->tag->textField(array('id', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldId')); ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldGenreName" class="col-sm-2 control-label">Genre Of Name</label>
    <div class="col-sm-10">
        <?php echo $this->tag->textField(array('genre_name', 'size' => 30, 'class' => 'form-control', 'id' => 'fieldGenreName')); ?>
    </div>
</div>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo $this->tag->submitButton(array('Search', 'class' => 'btn btn-default')); ?>
    </div>
</div>

</form>
