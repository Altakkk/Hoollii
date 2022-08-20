
@extends('layouts.master')
@section('content')
@include('sidebar.dashbord')
{{-- message --}}
{!! Toastr::message() !!}
  
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Table</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Datatable</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Datatable</h4>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Profile</th>
                                        <th>Name</th>
                                        <th>User ID</th>
                                        <th>Role Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Joining Date</th>
                                        <th>Action</th>
                                        <th></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($user_table as $key=>$items)
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="{{URL::to('assets/images/'.$items->avatar)}}" alt=""></td>
                                        <td>{{$items->name}}</td>
                                        <td>{{$items->user_id}}</td>
                                        @if ($items->role_name =='Admin')
                                        <td><span class="badge light badge-success">{{$items->role_name}}</span></td>
                                        @else
                                        <td><span class="badge light badge-info">{{$items->role_name}}</span></td>
                                        @endif
                                        <td>{{$items->email}}</td>
                                        <td>
                                            <span class="badge light badge-success">
                                            <i class="fa fa-circle text-success me-1"></i>{{$items->status}}
                                            </span>
                                        </td>
                                        <td>{{$items->join_date}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>												
                                        </td>												
                                    </tr>
                                    @endforeach
                                </tbody>
                               
                                <tfoot>
                                    <tr>
                                        <th>Profile</th>
                                        <th>Name</th>
                                        <th>User ID</th>
                                        <th>Role Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Joining Date</th>
                                        <th>Action</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
