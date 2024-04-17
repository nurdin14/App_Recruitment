@extends('template-admin')

@section('content')

<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div class="card card-form mb-5">
                <div class="card-header">
                    <span class="fw-bold">Form Create Data</span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <form action="/stroreEmployee" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col">
                                <div class="form-group">
                                    <label for="" class="label">Name</label>
                                     <input type="text" name="name" class="form-control form-control-sm">       
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Email</label>
                                     <input type="text" name="email" class="form-control form-control-sm">       
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Phone Number</label>
                                     <input type="telp" name="telp" class="form-control form-control-sm">       
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Divisi</label>
                                    <select name="divisi" class="form-control">
                                        <option value="">All</option>
                                        @foreach($data['Divisi'] as $s)
                                        <option value="{{ $s->divisi }}">{{ $s->divisi }}</option>
                                        @endforeach
                                    </select>    
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Position</label>
                                    <select name="position" class="form-control">
                                        <option value="">All</option>
                                        @foreach($data['Posisi'] as $s)
                                        <option value="{{ $s->position }}">{{ $s->position }}</option>
                                        @endforeach
                                    </select>       
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Address</label>
                                     <textarea name="address" class="form-control form-control-sm"></textarea>       
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Upload CV</label>
                                     <input type="file" name="foto" class="form-control form-control-sm">       
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