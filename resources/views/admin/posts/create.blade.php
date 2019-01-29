@extends('layouts.app')

@section('content')

    <!-- Displaying the errors -->
    @if (count($errors) > 0)
        
        <ul class="list-group">
            @foreach ($errors->all() as $error)
                
                <li class="list-group-item text-danger">
                    {{$error}}
                </li>

            @endforeach
        </ul>    

    @endif

    <!-- create card is starting from here-->
    <div class="card">

        <div class="card-heading text-center mt-3">
            <h5>Create a new post</h5>
        </div>

        <div class="card-body">

        <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                
                 {{ csrf_field() }}

                <!-- add title field --> 
                 <div class="form-group row">
                    
                    <label for="title" class="col-sm-4 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" id="title" placeholder="Write your Title here">
                    </div>
                 </div>

                <!-- Upload image form field -->
                <div class="form-group row">
                    <label for="title" class="col-sm-4 col-form-label">Feature</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="featured" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                            </div>
                        </div>
                    </div>                    
                </div>

                <!-- Post content field goes from here -->
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Your post's content</span>
                    </div>
                    <textarea class="form-control" id="content" name="content" cols="5" rows="5" aria-label="with textarea"></textarea>
                </div>
                 <!-- Post content field goes from here -->
                 
                 <div class="form-group row mt-3"> 
                    <div class="col-sm-10 text-center">
                        <button class="btn btn-outline-success" type="submit">Submit Post</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    
@endsection