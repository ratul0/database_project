@extends('layouts.default')

@section('content')


    {{ Form::open(array('route' => array('pages.edit.do',$page->id), 'method' => 'put', 'class' => 'form-horizontal','files'=> true)) }}
    <fieldset>

        <legend>Edit Page</legend>

        @include('includes.alert')
        {{ Form::hidden('pageID', $page->id) }}
        <div class="form-group">
            <label class="col-md-2 control-label" for="sitename">Page Key:*</label>

            <div class="col-md-10">
                {{ Form::text('pageKey' ,$page->key, array('class' => 'form-control','required' => '')) }}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="sitename">Page Title:*</label>
            <div class="col-md-10">
                {{ Form::text('pageTitle' ,$page->title, array('class' => 'form-control','required' => '')) }}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="sitename">Page Content:*</label>
            <div class="col-md-10">
                <textarea class="ckeditor" id="content" name="content" >{{$page->content}}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" for="formSubmit"></label>

            <div class="col-md-4">
                <button id="formSubmit" name="formSubmit" class="btn btn-primary">Update</button>
            </div>
        </div>


    </fieldset>
    {{ Form::close() }}


@stop