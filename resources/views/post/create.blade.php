
@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                    <div class="panel panel-info" style="border-color:black">
                        <div class="panel-heading" style="border-color:black"><font size=5> NEW ENTRY </font></div>
                        <div class="panel-body">
                            <form class="" action="{{ route('post.store')}}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group has-feedback{{ $errors->has('title') ? 'has-error' : '' }}">
                                    <label for="">I want to talk about :</label>
                                    <input type="text" class="form-control" name="title" placeholder="The thing you want to talk about" value="{{ old('title') }}">
                                        @if($errors->has('title'))
                                            <span style="color:red" class="help-block">
                                            <p>{{ $errors->first('title') }}</p>
                                            </span>
                                        @endif
                                </div>
                        
                                    <div class="form-group">
                                        <label for="genre">Choose your topic :</label>
                                        <select name="categories_id" id="" class="form-control"  width="150" height="30" style="width: 150px;height: 30px" >
                                            @foreach ($categories as $categories)
                                            <option value="{{ $categories->id }}"> {{ $categories->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                        
                                    <div class="form-group  has-feedback{{ $errors->has('content') ? 'has-error' : '' }}">
                                    <label for="Content">What do you think about this?</label>
                                    <textarea name="content" rows="10" class="form-control" placeholder="Go on, open your mind.">{{ old('content') }}</textarea>
                                    @if($errors->has('content'))
                                        <span style="color:red" class="help-block">
                                            <p>{{ $errors->first('content') }}</p>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-block" style="border-color:black;" value="POST" >
                                  </div>
                                </form>
                        </div>
                    </div>
            </div>
        </div>

       
    </div>
@endsection
