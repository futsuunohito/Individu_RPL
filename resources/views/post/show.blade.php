@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel panel-info">
                <div class="panel-heading" height="45" style="height:45px">
                    <font size=5><b>{{ $posts->title }}</b></font> <br>| <small><strong>{{ $posts->categories->name}}</strong></small> |
                </div>        
            <div class="panel-body">
                <br>
            <p>{{$posts->content}}</p>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection