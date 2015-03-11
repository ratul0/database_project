@extends('layouts.default')

@section('content')
    @include('includes.alert')


        <legend>Manage Pages Orders</legend>


    <div class="col-md-6">
        <legend>Published Pages (Drag to Manage Order)</legend>

        <div class="dd" id="published">
            <ol class="dd-list list-group">
                    @foreach($pages as $page)
                    <li class="dd-item list-group-item list-group-item-success" value="{{$page->id}}">
                        <div class="dd-handle">{{$page->title}}</div>
                    </li>
                    @endforeach
            </ol>
        </div>
    </div>
    <script>
        $('#published').nestable('serialize');
        $('#published').on('change', function(e) {
            //alert($('ol li:nth-child(1)').text());
            var $lis = $('ol li');
            var menulist = [];
            for(var i=0; i < $lis.length; i++)
            {
                var str = $('ol li:eq(' + i + ')').attr('value');
                var trim = str.replace(/^\s+|\s+$/g, '');
                menulist[i] = trim;
            }
            console.log(JSON.stringify(menulist));
        });

    </script>

@stop