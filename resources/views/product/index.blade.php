@extends('layouts.master')

@section('main')

<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-9" style="position: relative; left:8px;" >
                    <h2>Manage <b>Products</b></h2>
                </div>
                <div class="col-sm-3" style="position: relative; right:-60px;">
                    <a href="#addModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span class="mb-3">Add New Product</span></a>			
                </div>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Products  Table </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>IMAGE</th>
                                <th>CATEGORY</th>
                                <th>PRICE</th>
                                <th>QUANTITY</th>
                                <th>DESCRIPTION</th>
                                <th>CODE_BARE</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                
                        <tbody>
                          
                                @foreach ($products as $product)
                                <tr>
                                <td>{{$product->id}}</td>
                            
                                <td>{{$product->name}}</td>
                                <td>
                                    <img class="img-profile rounded-circle" width="100"
                                        src="{{asset('/storage/product').'/'.$product->image}}">
                                </td> 
                                <td>{{$product->category_id}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->discount}}</td>
                                <td>{{$product->description}}</td>
                                <td>
                                    <img class="img-profile rounded-circle" width="100"
                                        src="{{asset('/storage/CodeBarreImages').'/'.$product->code_barre}}">
                                </td>
                                {{-- action --}}
                                <td style="padding-left: 12px;">
                                    <a href="#" data-target="#editModal{{ $product->id }}"  class="edit" data-toggle="modal" style="margin-right:30px;">
                                        <i class="fa-solid fa-pen-to-square" style="color: blue;"></i>
                                    </a>

                                    <form action='/product/destroy/{{ $product->id }}' method="post">
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
    @include('product.add')
    @include('product.edit')
    @include('product.delete')
    <script>
    </script>
@endsection