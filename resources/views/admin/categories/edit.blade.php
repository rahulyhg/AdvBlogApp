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
            <h5>Update a Category</h5>
        </div>

        <div class="card-body">
            <form action="{{route('categories.update', ['id' => $category->id])}}" method="post">
                
                    {{ csrf_field() }}

                    <!-- add category name field --> 
                    <div class="form-group row">
                    
                    <label for="category" class="col-sm-8 col-form-label">Category : <strong>{{ $category->name }}</strong></label>
                    <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="title" value="{{ $category->name }}">
                    </div>
                    </div>
                    
                    <div class="form-group row mt-3"> 
                    <div class="col-sm-10 text-center">
                        <button class="btn btn-outline-success" type="submit">Update Category</button>
                    </div>
                </div>
           </form>
        </div>
    </div>
    
@endsection