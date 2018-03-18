
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading"><strong>New Entry</strong></div>
                        <div class="panel-body">
                            <form class="" action="{{ route('post.store')}}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group has-feedback{{ $errors->has('title') ? 'has-error' : '' }}">
                                    <label for="">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Movie Title" value="{{ old('title') }}">
                                        @if($errors->has('title'))
                                            <span style="color:red" class="help-block">
                                            <p>{{ $errors->first('title') }}</p>
                                            </span>
                                        @endif
                                </div>
                        
                                    <div class="form-group">
                                    <label for="genre">Genre</label>
                                    <select name="categories_id" id="" class="form-control"  width="150" height="30" style="width: 150px;height: 30px" >
                                        @foreach ($categories as $categories)
                                        <option value="{{ $categories->id }}"> {{ $categories->name }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                        
                                    <div class="form-group  has-feedback{{ $errors->has('content') ? 'has-error' : '' }}">
                                    <label for="Content">Review</label>
                                    <textarea name="content" rows="4" class="form-control" placeholder="Tell me something about this">{{ old('content') }}</textarea>
                                    @if($errors->has('content'))
                                        <span style="color:red" class="help-block">
                                            <p>{{ $errors->first('content') }}</p>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-block" value="Save" >
                                       
                                
                                </div>
                                </form>
                        </div>
                    </div>
            </div>
        </div>
        
       
    </div>
@endsection
