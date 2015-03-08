@extends('layouts.default')

@section('content')


    {{ Form::open(array('route' => array('pages.add.do'), 'method' => 'post', 'class' => 'form-horizontal','files'=> true)) }}
    <fieldset>

        <legend>Add New Page</legend>

        @include('includes.alert')
        <div class="form-group">
            <label class="col-md-2 control-label" for="sitename">Page Key:*</label>

            <div class="col-md-10">
                {{ Form::text('pageKey' ,'', array('class' => 'form-control','required' => '')) }}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="sitename">Page Title:*</label>
            <div class="col-md-10">
                {{ Form::text('pageTitle' ,'', array('class' => 'form-control','required' => '')) }}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="sitename">Page Content:*</label>
            <div class="col-md-10">
                <textarea  id="content" name="content" ></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" for="formSubmit"></label>

            <div class="col-md-4">
                <button id="formSubmit" name="formSubmit" class="btn btn-primary">Add</button>
            </div>
        </div>


    </fieldset>
    {{ Form::close() }}
	<script>
			CKEDITOR.replace( 'content', {
			 //filebrowserUploadUrl: "http://localhost/sust/database_project/public/js/ckeditor/custom/file.php"
			} );
	</script>


@stop