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
            <td>{{$page->created_at->toDayDateTimeString()}}</td>
            <td>{{$page->updated_at->diffForHumans()}}</td>
            <td><button class="btn btn-success btn-sm">Show</button></td>
            <td><a href="{{route('pages.edit',array('id'=>$page->id))}}"><button class="btn btn-primary btn-sm">Edit</button></a></td>
            <td>
                <a href="#" class="btn btn-danger btn-sm deleteBtn" data-toggle="modal" data-target="#deleteConfirm" deleteId="{{ $page->id }}">Delete</a>

            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
    </div>


    <div class="modal fade" id="deleteConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                </div>
                <div class="modal-body">
                    Are you sure to delete?
                </div>
                <div class="modal-footer">
                    {{ Form::open(array('route' => array('pages.destroy', 0), 'method'=> 'delete', 'class' => 'deleteForm')) }}
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                    {{ Form::submit('Yes, Delete', array('class' => 'btn btn-success')) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>



@stop

@section('script')

    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {

            $('.deleteBtn').click(function() {
                var deleteId = $(this).attr('deleteId');
                console.log(deleteId);
                var url = "<?php echo URL::route('pages'); ?>";
                $(".deleteForm").attr("action", url+'/'+deleteId);

            });
        });
    </script>
@stop