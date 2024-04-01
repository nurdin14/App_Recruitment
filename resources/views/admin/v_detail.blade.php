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
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="label">Name</label>
                                <input type="text" name="name" disabled class="form-control form-control-sm" value="{{ $data->name }}">       
                            </div>
                            <div class="form-group">
                                <label for="" class="label">Email</label>
                                 <input type="text" name="email" disabled class="form-control form-control-sm" value="{{ $data->email }}">       
                            </div>
                            <div class="form-group">
                                <label for="" class="label">Phone Number</label>
                                 <input type="telp" name="telp" disabled class="form-control form-control-sm" value="{{ $data->telp }}">       
                            </div>
                            <div class="form-group">
                                <label for="" class="label">Divisi</label>
                                 <input type="text" name="divisi" disabled class="form-control form-control-sm" value="{{ $data->divisi }}">       
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="" class="label">Position</label>
                                 <input type="text" name="position" disabled class="form-control form-control-sm" value="{{ $data->position }}">       
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="" class="label">Address</label>
                                 <textarea name="address" disabled class="form-control form-control-sm">{{ $data->address }}</textarea>       
                                </label>
                            </div>
                        </div>
                        <a href="/employee" class="btn btn-sm btn-secondary my-2">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection