@extends('layouts.app')



@section('content')

    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">
                                Category Name
                            </th>
                        <tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($categories as $item)
                            <tr>
                                <td>
                                    {{ $item->name }}
                                
                                <!-- To delete a category -->
                                <a href="{{route('categories.delete', ['id' => $item->id])}}"><button type="button" class="btn btn-outline-danger float-right ml-1 btn-sm">Delete</button></a>

                                <!-- To edit a category -->
                                <a href="{{route('categories.edit', ['id' => $item->id])}}"><button type="button" class="btn btn-outline-primary float-right btn-sm">Edit</button></a>
        
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
@endsection