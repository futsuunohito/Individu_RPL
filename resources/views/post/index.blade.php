@extends('layouts.app')

@section('content')
<div class="container-fluid">
        @include('layouts.partial._alert')
    <div class="row justify-content-center">
        <div class="col-md-6">
           @foreach ($posts as $item)
            <div class="panel panel-info">
                <div class="panel-heading" height="45" style="height:45px">
                    <a href="{{ route('post.show',$item) }}"><font size=5><b>{{ $item->title }}</b></font></a>
                    <div class="pull-right">
                            <div class="row">
                            <div class="col-4">
                            <form action="{{ route('post.toedit', $item) }}" method="post">
                                {{ csrf_field() }}
                             <button type="submit" class="btn btn-sm btn-success" style="position:relative;bottom:3px;">Edit</button>
                            </form>
                              </div>
                            <div class="col-4">
                            <form action="{{ route('post.destroy', $item) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE')}}
                             <button type="submit" class="btn btn-sm btn-danger" style="position:relative;bottom:3px;">Delete</button>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
                    
                <div class="panel-body">
                | <small><strong>{{ $item->categories->name}}</strong></small> |
                <p>{{ str_limit($item->content, 100, '...') }}</p>
                <sub>{{$item->created_at->format('l, d F Y [H:i:s]')}} ({{ $item->created_at->diffForHumans()}})</sub>
                </div>
            </div>
           @endforeach
           {{--  <div class="text-center">{!!$posts->links()!!}</div>  --}}
        </div>
    </div>
</div>
@endsection