@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="panel panel-info" style="border-color:black">
                <div class="panel-heading" style="border-color:black"><font size=5> EDIT ENTRY </font></div>
                    <div class="panel-body">
                        <form class="" action="{{ route('post.update', $posts) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('patch') }}
                            <div class="form-group">
                                <label for="">Change the title?</label>
                                <input type="text" class="form-control" name="title" placeholder="The thing you want to talk about." value="{{ $posts->title }}">
                            </div>
                    
                            <div class="form-group">
                                <label for="">Change the topic?</label>
                                <select name="categories_id" id="genre" class="form-control"  width="150" height="30" style="width: 150px;height: 30px" >
                                    @foreach ($categories as $categories)
                                    <option value="{{ $categories->id }}">{{ $categories->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                    
                            <div class="form-group">
                            <label for="Content">Change your thoughts?</label>
                            <textarea name="content" rows="4" class="form-control" placeholder="Go on, open your mind.">{{ $posts->content }}</textarea>
                            </div>
                            <div class="form-group">
                            <input type="submit" class="btn btn-block btn-primary" style="border-color:black" value="SAVE" >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection