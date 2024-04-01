@extends('template-admin')

@section('content')

<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div class="card card-form mb-5">
                <div class="card-header">
                    <span class="fw-bold">Form Edit Data</span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <form action="/updateEmployee/{{ $data->id }}" method="post">
                            @csrf
                            <div class="col">
                                <div class="form-group">
                                    <label for="" class="label">Name</label>
                                     <input type="text" name="name" class="form-control form-control-sm" value="{{ $data->name }}">       
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Email</label>
                                     <input type="text" name="email" class="form-control form-control-sm" value="{{ $data->email }}">       
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Phone Number</label>
                                     <input type="telp" name="telp" class="form-control form-control-sm" value="{{ $data->telp }}">       
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Divisi</label>
                                     <input type="text" name="divisi" class="form-control form-control-sm" value="{{ $data->divisi }}">       
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Position</label>
                                     <input type="text" name="position" class="form-control form-control-sm" value="{{ $data->position }}">       
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Address</label>
                                     <textarea name="address" class="form-control form-control-sm">{{ $data->address }}</textarea>       
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-sm btn-danger my-2">Save</button>
                        <a href="/employee" class="btn btn-sm btn-secondary my-2">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection