@extends('template-admin')

@section('content')

<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <span class="fw-bold">Filter Data</span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <label for="" class="label">Divisi</label>
                                <select name="divisi" class="form-control">
                                    <option>All</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </label>
                        </div>
                        <div class="col">
                            <label for="" class="label">Position</label>
                                <select name="position" class="form-control">
                                    <option>All</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <a href="/createEmployee" class="btn btn-sm btn-danger my-2">+ Add Data</a>
                    <a href="#" class="btn btn-sm btn-secondary my-2">Search</a>
                </div>
            </div>
        </div>
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-body">
                    @if(Session:: has('success'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <strong>{{ Session::get('success')}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @endif
                    <table id="example" class="table table-hover table-striped custom-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>No.Telpon</th>
                                <th>Email</th>
                                <th>Divisi</th>
                                <th>Position</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $e)
                            <tr>
                                <td>{{$e->name}}</td>
                                <td>{{$e->telp}}</td>
                                <td>{{$e->email}}</td>
                                <td>{{$e->divisi}}</td>
                                <td>{{$e->position}}</td>
                                <td>{{$e->address}}</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                          Action
                                        </a>
                                      
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                          <li><a class="dropdown-item" href="#">Detail</a></li>
                                          <li><a class="dropdown-item" href="#">Edit</a></li>
                                          <li><a class="dropdown-item" href="#">Delete</a></li>
                                        </ul>
                                      </div>
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

@endsection