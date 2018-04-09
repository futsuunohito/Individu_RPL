@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2">
        @if($posts->isEmpty())
                <div class="jumbotron ">
                    <h1 style="text-align:center">No posts yet...</h1>
                </div>
        @else
            @foreach ($posts as $item)
            <div class="panel panel-info" style="border-color:black">
                <div class="panel-heading" height="40" style="height:40px;border-color:black">
                    <a href="{{ route('post.show',$item) }}"><font size=3><b>{{ str_limit($item->title, 80, '...') }}</b></font></a>
                    @if(Auth::id()==$item->user->id)
                        <div class="pull-right">
                                <div class="row">
                                <div class="col-4"> 
                                <form action="{{ route('post.toedit', $item) }}" method="post">
                                    {{ csrf_field() }}
                                <button type="submit" class="btn btn-sm btn-primary" style="position:relative;bottom:5px;border-color:black">Edit</button>
                                </form>
                                </div>
                                <div class="col-4">
                                <form action="{{ route('post.destroy', $item) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE')}}
                                <button type="submit" class="btn btn-sm btn-danger" style="position:relative;bottom:5px;border-color:black">Delete</button>
                                </form>
                            </div>
                            </div>
                        </div>
                    @elseif(Auth::id()!=$item->user->id)
                        <div class="pull-right">
                            <div class="row">
                                <div class="col-4"> 
                                    <button type="submit" class="btn btn-sm btn-primary disabled tooltip" style="position:relative;bottom:5px;border-color:black">
                                            <span class="tooltiptext">Can't edit what's not yours!</span> Edit</button>
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-sm btn-danger disabled tooltip" style="position:relative;bottom:5px;border-color:black">
                                            <span class="tooltiptext">Can't delete what's not yours!</span> Delete</button>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
                <span style="border:1px solid black; padding:2px; background-color:#e0e2e4"> <strong> &nbsp;{{ $item->categories->name}}&nbsp; </strong> </span>  
                <span style="border:1px solid black; padding:2px; background-color:#daebe8">&nbsp;by <font color="blue"> {{ $item->user->name }} </font></span>
                <div class="panel-body" style="margin:-15px 0px">
                <p>{{ str_limit($item->content, 115 , '...') }}</p>
            </div>
                <div class="panel-footer" height="20" style="height:20px;border-color:black">
                <small style="position:relative;bottom:10px"><strong>{{$item->created_at->format('l, d F Y [H:i:s]')}} ({{ $item->created_at->diffForHumans()}})</strong></small>
              </div>
              
            </div>
           @endforeach
           {{--  <div class="text-center">{!!$posts->links()!!}</div>  --}}
        </div>
    </div>
</div>
@endif
@endsection