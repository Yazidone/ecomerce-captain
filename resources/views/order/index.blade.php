@extends('layouts.master')

@section('main')

<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-9" style="position: relative; left:8px;" >
                    <h2>Manage <b>Orders</b></h2>
                </div>
            </div>
        </div>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>CLIENTS</th>
                            <th>TOTAL</th>
                            <th>DELIVERY ADDRESS</th>
                            <th>PHONE</th>
                            <th>CREATED AT</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>fgghh </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td style="padding-left: 12px;">
                                <a href="#editModal" class="edit" data-toggle="modal" style=" margin-right:30px;">
                                <i class="fa-solid fa-pen-to-square" style="color: blue;"></i>
                                </a>
                                <a href="#deleteModal" class="delete" data-toggle="modal" style=" margin-right:30px;">
                                <i class="fa-solid fa-trash" style="color: red;"></i>
                                </a>
                                <a href="{{url('/order/show')}}">
                                    <i class="fa-solid fa-eye" style="color: #7de663;"></i>

                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>tokyo</td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td style="padding-left: 12px;">
                                <a href="#editModal" class="edit" data-toggle="modal" style=" margin-right:30px;">
                                <i class="fa-solid fa-pen-to-square" style="color: blue;"></i>
                                </a>
                                <a href="#deleteModal" class="delete" data-toggle="modal" style=" margin-right:30px;">
                                <i class="fa-solid fa-trash" style="color: red;"></i>
                                </a>
                                <a href="{{url('/order/show')}}">
                                    <i class="fa-solid fa-eye" style="color: #7de663;"></i>

                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>eryyy</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td style="padding-left: 12px;">
                                <a href="#editModal" class="edit" data-toggle="modal" style=" margin-right:30px;">
                                <i class="fa-solid fa-pen-to-square" style="color: blue;"></i>
                                </a>
                                <a href="#deleteModal" class="delete" data-toggle="modal" style=" margin-right:30px;">
                                <i class="fa-solid fa-trash" style="color: red;"></i>
                                </a>
                                <a href="{{url('/order/show')}}">
                                    <i class="fa-solid fa-eye" style="color: #7de663;"></i>

                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>dazee</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td style="padding-left: 12px;">
                                <a href="#editModal" class="edit" data-toggle="modal" style=" margin-right:30px;">
                                <i class="fa-solid fa-pen-to-square" style="color: blue;"></i>
                                </a>
                                <a href="#deleteModal" class="delete" data-toggle="modal" style=" margin-right:30px;">
                                <i class="fa-solid fa-trash" style="color: red;"></i>
                                </a>
                                <a href="{{url('/order/show')}}">
                                    <i class="fa-solid fa-eye" style="color: #7de663;"></i>

                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td style="padding-left: 12px;">
                                <a href="#editModal" class="edit" data-toggle="modal" style=" margin-right:30px;">
                                <i class="fa-solid fa-pen-to-square" style="color: blue;"></i>
                                </a>
                                <a href="#deleteModal" class="delete" data-toggle="modal" style=" margin-right:30px;">
                                <i class="fa-solid fa-trash" style="color: red;"></i>
                                </a>
                                <a href="{{url('/order/show')}}">
                                    <i class="fa-solid fa-eye" style="color: #7de663;"></i>

                                </a>
                            </td>
                        </tr>
                        
                  
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('order.edit')
    @include('order.delete')
    <script>
    </script>
@endsection