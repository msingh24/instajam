@extends('layouts.app')

@section('content')
<div class="container">
   
   


    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
            <div class="row">
                    <div class="col-8 offset-2">

                            <div class="row">
                                    <h1>Add New Post</h1>
                                </div>

                        <div class="form-group row">
                                <label for="Caption" class="col-md-4 col-form-label">Post Caption</label>
            
                                
                                    <input id="caption" 
                                    type="text" 
                                    class="form-control {{ $errors->has('caption') ? 'is-invalid' : ''}}" 
                                    name="caption" 
                                    value="{{ old('caption') }}" 
                                    autocomplete="name" autofocus>
            
                                    @if ($errors->has('caption'))
                                            <strong>{{ $errors->first('caption') }}</strong>
                                    @endif
                                
                            </div>

                            <div class="row">
                                <label for="image" class="col-md-4 col-form-label">Post image</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                                 
                                @if ($errors->has('image'))
                                            <strong>{{ $errors->first('image') }}</strong>
                                @endif
                            </div>

                            <div class="row pt-4">
                                <button class="btn btn-primary">Add New Post</button>
                            </div>
            
                    </div>
              </div>

    </form>

</div>
@endsection
