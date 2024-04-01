@extends('template-admin')

@section('content')

<div class="container mt-2">
    <div class="row">
        <div class="col mt-3">
            <div class="card">
                <div class="card-header">
                    <a href="/createPosition" class="btn btn-sm btn-danger">+ Add Data</a>
                </div>
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
                                <th>No.</th>
                                <th>Kode</th>
                                <th>Name Position</th>
                                <th>Decription</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $no => $e)
                            <tr>
                                <td>{{$no+1}}</td>
                                <td>{{$e->kode}}</td>
                                <td>{{$e->position}}</td>
                                <td>{{$e->desc}}</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                          Action
                                        </a>
                                      
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                          <li><a class="dropdown-item" href="/fetchPosition/{{$e->id}}">Edit</a></li>
                                          <li><a class="dropdown-item" href="/detailPosition/{{$e->id}}">Detail</a></li>
                                          <li><a class="dropdown-item" href="/deletePosition/{{$e->id}}">Delete</a></li>
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