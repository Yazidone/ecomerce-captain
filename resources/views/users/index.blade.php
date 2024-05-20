@extends('layouts.master')

@section('main')

<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-9" style="position: relative; left:8px;" >
                    <h2>Manage <b>Users</b></h2>
                </div>
                <div class="col-sm-3" style="position: relative; right:-60px;">
                    <a href="#addModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span class="mb-3">Add New User</span></a>			
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
                            <th>NAME</th>
                            <th>IMAGE</th>
                            <th>Phone</th>
                            <th>Emil</th>
                            <th>Birthday</th>
                            <th>Gender</th>
                           
                    </thead>
              
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>fgghh</td>
                            <td>
                                <img class="img-profile rounded-circle" width="80"
                                src="{{asset('img/undraw_profile.svg')}}">
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                          
                            <td style="padding-left: 12px;">
                                <a href="#editModal" class="edit" data-toggle="modal" style=" margin-right:30px;">
                                <i class="fa-solid fa-pen-to-square" style="color: blue;"></i>
                                </a>
                                <a href="#deleteModal" class="delete" data-toggle="modal">
                                <i class="fa-solid fa-trash" style="color: red;"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>fgghh</td>
                            <td>
                                <img class="img-profile rounded-circle" width="80"
                                src="{{asset('img/undraw_profile.svg')}}">
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>                            
                           <td>
                            <a href="#editModal" class="edit" data-toggle="modal" style=" margin-right:30px;">
                                <i class="fa-solid fa-pen-to-square" style="color: blue;"></i>
                                </a>
                                <a href="#deleteModal" class="delete" data-toggle="modal">
                                <i class="fa-solid fa-trash" style="color: red;"></i>
                                </a>
                           </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>fgghh</td>
                            <td>
                                <img class="img-profile rounded-circle" width="80"
                                src="{{asset('img/undraw_profile.svg')}}">
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                           <td>
                            <a href="#editModal" class="edit" data-toggle="modal" style=" margin-right:30px;">
                                <i class="fa-solid fa-pen-to-square" style="color: blue;"></i>
                                </a>
                                <a href="#deleteModal" class="delete" data-toggle="modal">
                                <i class="fa-solid fa-trash" style="color: red;"></i>
                                </a>
                           </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>fgghh</td>
                            <td>
                                <img class="img-profile rounded-circle" width="80"
                                src="{{asset('img/undraw_profile.svg')}}">
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                           <td>
                            <a href="#editModal" class="edit" data-toggle="modal" style=" margin-right:30px;">
                                <i class="fa-solid fa-pen-to-square" style="color: blue;"></i>
                                </a>
                                <a href="#deleteModal" class="delete" data-toggle="modal">
                                <i class="fa-solid fa-trash" style="color: red;"></i>
                                </a>
                           </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>fgghh</td>
                            <td>
                                <img class="img-profile rounded-circle" width="80"
                                src="{{asset('img/undraw_profile.svg')}}">
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="#editModal" class="edit" data-toggle="modal" style=" margin-right:30px;">
                                    <i class="fa-solid fa-pen-to-square" style="color: blue;"></i>
                                    </a>
                                    <a href="#deleteModal" class="delete" data-toggle="modal">
                                    <i class="fa-solid fa-trash" style="color: red;"></i>
                                    </a>
                            </td>
                        </tr>
                        
                  
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('users.add')
    @include('users.edit')
    @include('users.delete')
    <script>
    </script>
@endsection
