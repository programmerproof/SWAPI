<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous"><?php echo $this->tag->linkTo(array('rent', 'Go Back')); ?></li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>
        Edit rent
    </h1>
</div>

<?php echo $this->getContent(); ?>

<?php echo $this->tag->form(array('rent/save', 'method' => 'post', 'autocomplete' => 'off', 'class' => 'form-horizontal')); ?>

<div class="form-group">
    <label for="fieldBranchofficeId" class="col-sm-2 control-label">Branchoffice</label>
    <div class="col-sm-10">
        <?php echo $this->tag->textField(array('branchoffice_id', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldBranchofficeId')); ?>
		<div id = "branchoffice"></div>
    </div>
</div>

<div class="form-group">
    <label for="fieldClientId" class="col-sm-2 control-label">Client</label>
    <div class="col-sm-10">
        <?php echo $this->tag->textField(array('client_id', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldClientId')); ?>
		<div id = "client"></div>
    </div>
</div>

<div class="form-group">
    <label for="fieldMovieId" class="col-sm-2 control-label">Movie</label>
    <div class="col-sm-10">
        <?php echo $this->tag->textField(array('movie_id', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldMovieId')); ?>
		<div id = "movie"></div>
    </div>
</div>

<div class="form-group">
    <label for="fieldRentStardate" class="col-sm-2 control-label">Rent Of Stardate</label>
    <div class="col-sm-10">
        <?php echo $this->tag->textField(array('rent_stardate', 'type' => 'date', 'class' => 'form-control', 'id' => 'fieldRentStardate')); ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldRentReturndate" class="col-sm-2 control-label">Rent Of Returndate</label>
    <div class="col-sm-10">
        <?php echo $this->tag->textField(array('rent_returndate', 'type' => 'date', 'class' => 'form-control', 'id' => 'fieldRentReturndate')); ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldRentValue" class="col-sm-2 control-label">Rent Of Value</label>
    <div class="col-sm-10">
        <?php echo $this->tag->textField(array('rent_value', 'size' => 30, 'class' => 'form-control', 'id' => 'fieldRentValue')); ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldRentAmount" class="col-sm-2 control-label">Rent Of Amount</label>
    <div class="col-sm-10">
        <?php echo $this->tag->textField(array('rent_amount', 'size' => 30, 'class' => 'form-control', 'id' => 'fieldRentAmount')); ?>
    </div>
</div>


<?php echo $this->tag->hiddenField(array('id')); ?>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo $this->tag->submitButton(array('Send', 'class' => 'btn btn-default')); ?>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$.post('http://localhost/videostoreplus/Branchoffice/select', function(obj){ 
   var html = '<select id="fieldBranchofficeId" name="branchoffice_id" class="form-control">';  
       html += '<option value = "">-- Select --</option>';  
   var data = JSON.parse(obj);
   jQuery.each(data, function (index, value) {
        if (typeof value != 'object')
            html += '<option value="' + index + '" ' + (index==$('#fieldBranchofficeId').val()?'selected=selected':'') + '>' + value + '</option>'; 
    });
	html += '</select>';
	$('#fieldBranchofficeId').remove();
	$('#branchoffice').html(html);

});
$.post('http://localhost/videostoreplus/Client/select', function(obj){ 
   var html = '<select id="fieldClientId" name="client_id" class="form-control">';  
       html += '<option value = "">-- Select --</option>';  
   var data = JSON.parse(obj);
   jQuery.each(data, function (index, value) {
        if (typeof value != 'object')
            html += '<option value="' + index + '" ' + (index==$('#fieldClientId').val()?'selected=selected':'') + '>' + value + '</option>'; 
    });
	html += '</select>';
	$('#fieldClientId').remove();
	$('#client').html(html);

});
$.post('http://localhost/videostoreplus/Movie/select', function(obj){ 
   var html = '<select id="fieldMovieId" name="movie_id" class="form-control">';  
       html += '<option value = "">-- Select --</option>';  
   var data = JSON.parse(obj);
   jQuery.each(data, function (index, value) {
        if (typeof value != 'object')
            html += '<option value="' + index + '" ' + (index==$('#fieldMovieId').val()?'selected=selected':'') + '>' + value + '</option>'; 
    });
	html += '</select>';
	$('#fieldMovieId').remove();
	$('#movie').html(html);

});
</script>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$("#fieldRentStardate").datepicker({yearRange: "-80:+3", /* this is the option you're looking for*/ showOn: "button", buttonImage: "http://localhost/videostoreplus/img/calendar.gif", buttonImageOnly: true, dateFormat: "yy-mm-dd", changeYear: true,
        								   beforeShow: function(input, inst){inst.dpDiv.css({marginTop: -input.offsetHeight + "px", marginLeft: input.offsetWidth + "px"});}});
$("#fieldRentReturndate").datepicker({yearRange: "-80:+3", /* this is the option you're looking for*/ showOn: "button", buttonImage: "http://localhost/videostoreplus/img/calendar.gif", buttonImageOnly: true, dateFormat: "yy-mm-dd", changeYear: true,
        								   beforeShow: function(input, inst){inst.dpDiv.css({marginTop: -input.offsetHeight + "px", marginLeft: input.offsetWidth + "px"});}});
</script>

</form>
