@extends('layouts.master')

@section('main')

<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-9" style="position: relative; left:8px;" >
                    <h2>Manage <b>Category</b></h2>
                </div>
                <div class="col-sm-3" style="position: relative; right:-60px;">
                    <a href="#addModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span class="mb-3">Add New Category</span></a>			
                </div>
            </div>
        </div>
 
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Category</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>IMAGES</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                
                        <tbody>
                            @foreach ($categories as $category)
                                
                            <tr>
                                <td> {{$category->id}}</td>
                                <td> {{$category->name}}</td>
                                <td> 
                                    {{--   image product --}}
                                        <img class="img-profile rounded-circle" width="100"
                                            src="{{asset('storage/category'.'/'.$category->image)}}"/>
                                </td>


                                <td style="padding-left: 12px;">
                                    {{-- <a href="#" data-target="#editModal" class="edit" data-toggle="modal" style=" margin-right:30px;">
                                    <i class="fa-solid fa-pen-to-square" style="color: blue;"></i>
                                    </a>
                                    <a href="#deleteModal" class="delete" data-toggle="modal">
                                    <i class="fa-solid fa-trash" style="color: red;"></i>
                                    </a> --}}
                                    <a href="#" data-target="#editModal{{ $category->id }}"  class="edit" data-toggle="modal" style="margin-right:30px;">
                                        <i class="fa-solid fa-pen-to-square" style="color: blue;"></i>
                                    </a>

                                    <form action='/category/destroy/{{ $category->id }}' method="post">
                                        @csrf
                                        @method('delete')
                                        <button style="border:name ; backgound-color: transparent;" type="submit"><i class=" fa-solid fa-trash" style="color:rgb(191,32,4);"></i>
                                        </button>
                                    </form>
                                </td>

                               
                                
                            </tr>

                         @endforeach
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    @include('category.add')
    @include('category.edit')
    @include('category.delete')
    <script>
    </script>
@endsection