@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="panel panel-info" style="border-color:black">
                <div class="panel-body">
                        <font size=5><b>{{ $posts->title }}</b></font><br>
                        <span style="border:1px solid black; padding:2px; background-color:#daebe8">&nbsp;by <font color="blue"> {{ $posts->user->name }} </font></span>
                        <span style="border:1px solid black; padding:2px; background-color:#e0e2e4"> <strong> &nbsp; {{ $posts->categories->name}}&nbsp;    </strong> </span> 
                        <span style="border:1px solid black; padding:2px; background-color:#e0e2e4"> <strong> &nbsp; {{$posts->created_at->format('l, d F Y [H:i:s]')}}&nbsp;    </strong> </span>
                        <hr class="half-rule" style="border-color:black;margin:7px 0px"/>
                         <p>{{$posts->content}}</p>
               
                </div>
            </div>
            <div class="panel panel-info" style="border-color:black">
                <div class="panel-body">
                    <form action="{{ route('post.comment.store',$posts) }}" method="post">
                            {{ csrf_field() }}    
                                <textarea name="message" id="" cols="30" rows="3" class="form-control" placeholder="Add a comment..."></textarea>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary btn-sm" value="Comment" style="position:relative;top:7px">
                                    </div>
                    </form>
                    @foreach ($posts->comments()->get() as $comment)
                    <hr class="half-rule" style="border-color:black;margin:7px 0px"/>
                        
                    <font color="blue"> {{ $comment->user->name }} </font>|| <small>{{ $comment->created_at->diffForHumans()}} </small>
                    <p style="word-wrap: break-word">{{$comment->message}}</p>
                    @endforeach
                 </div>
            </div>
    </div>
</div>
@endsection
