@extends('layouts.default')

@section('content')
    @include('includes.alert')

    <div class="col-md-10">
        <legend>Pages</legend>
    </div>
    <div class="col-md-2">
       <a href="{{route('pages.add')}}"><button class="btn btn-primary btn">Add New Page</button></a>
    </div>

    <div class="col-md-12">
    <table class="table table-striped table-hover text-center">
        <thead>
        <tr>
            <th>ID</th>
            <th>Key</th>
            <th>Title</th>
            <th>Created</th>
            <th>Last Modified</th>
            <th colspan="3">Activity</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pages as $page)
        <tr>
            <td>{{$page->id}}</td>
            <td>{{$page->key}}</td>
            <td>{{$page->title}}</td>
            <td>{{$page->created_at}}</td>
            <td>{{$page->updated_at->diffForHumans()}}</td>
            <td><button class="btn btn-success btn-sm">Show</button></td>
            <td><a href="{{route('pages.edit',array('id'=>$page->id))}}"><button class="btn btn-primary btn-sm">Edit</button></a></td>
            <td><button class="btn btn-danger btn-sm">Delete</button></td>
        </tr>
        @endforeach

        </tbody>
    </table>
    </div>

@stop