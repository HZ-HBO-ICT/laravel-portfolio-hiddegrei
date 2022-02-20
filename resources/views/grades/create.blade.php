@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/grade" enctype="multipart/form-data" method="post">
        @csrf
    <div class="row">
        <div class="col-8 offset-2">

        <div> <h1>Add new grade</h1></div>
        <div class="form-group row">
                            <label for="nameTest" class="col-md-4 col-form-label">name test</label>

                           
                                <input id="nameTest" type="text" class="form-control @error('nameTest') is-invalid @enderror" name="nameTest" value="{{ old('nameTest') }}"  >

                                @error('nameTest')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>
          
                        <div class="form-group row">
                            <label for="typeTest" class="col-md-4 col-form-label">type test</label>

                           
                                <input id="typeTest" type="text" class="form-control @error('typeTest') is-invalid @enderror" name="typeTest" value="{{ old('typeTest') }}"  >

                                @error('typeTest')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="form-group row">
                            <label for="ec" class="col-md-4 col-form-label">ec</label>

                           
                                <input id="ec" type="text" class="form-control @error('ec') is-invalid @enderror" name="ec" value="{{ old('ec') }}"   >

                                @error('ec')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>


                        <div class="form-group row">
                            <label for="grade" class="col-md-4 col-form-label">grade</label>

                           
                                <input id="grade" type="text" class="form-control @error('caption') is-invalid @enderror" name="grade" value="{{ old('grade') }}"  >

                                @error('grade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>
        </div>

        <div class="row pt-4">
            <button class="btn btn-primary">Add new post</button>
        </div>

        

    </div>

    </form>
   
</div>
@endsection
