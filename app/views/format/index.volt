<div class="page-header">
    <h1>
        Search format
    </h1>
    <p>
        {{ link_to("format/new", "Create format") }}
    </p>
</div>

{{ content() }}

{{ form("format/search", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

<div class="form-group">
    <label for="fieldId" class="col-sm-2 control-label">Id</label>
    <div class="col-sm-10">
        {{ text_field("id", "type" : "numeric", "class" : "form-control", "id" : "fieldId") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldFormatName" class="col-sm-2 control-label">Format Of Name</label>
    <div class="col-sm-10">
        {{ text_field("format_name", "size" : 30, "class" : "form-control", "id" : "fieldFormatName") }}
    </div>
</div>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {{ submit_button('Search', 'class': 'btn btn-default') }}
    </div>
</div>

</form>
