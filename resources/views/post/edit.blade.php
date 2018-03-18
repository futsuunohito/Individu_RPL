@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading"><b> Edit Entry </b></div>
                    <div class="panel-body">
                        <form class="" action="{{ route('post.update', $posts) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('patch') }}
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Post Title" value="{{ $posts->title }}">
                            </div>
                    
                            <div class="form-group">
                                <label for="">Genre</label>
                                <select name="categories_id" id="genre" class="form-control"  width="150" height="30" style="width: 150px;height: 30px" >
                                    @foreach ($categories as $categories)
                                    <option value="{{ $categories->id }}">{{ $categories->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                    
                            <div class="form-group">
                            <label for="Content">Review</label>
                            <textarea name="content" rows="4" class="form-control" placeholder="Tell me something about this">{{ $posts->content }}</textarea>
                            </div>
                            <div class="form-group">
                            <input type="submit" class="btn btn-block" value="Save" >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection