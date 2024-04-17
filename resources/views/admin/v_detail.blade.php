@extends('template-admin')

@section('content')

<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div class="card card-form mb-5">
                <div class="card-header">
                    <span class="fw-bold">Form Detail Data</span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="label">Name</label>
                                 <input type="text" name="name" class="form-control form-control-sm" value="{{ $data['Employee']->name }}">       
                            </div>
                            <div class="form-group">
                                <label for="" class="label">Email</label>
                                 <input type="text" name="email" class="form-control form-control-sm" value="{{ $data['Employee']->email }}">       
                            </div>
                            <div class="form-group">
                                <label for="" class="label">Phone Number</label>
                                 <input type="telp" name="telp" class="form-control form-control-sm" value="{{ $data['Employee']->telp }}">       
                            </div>
                            <div class="form-group">
                                <label for="" class="label">Divisi</label>
                                <select name="divisi" class="form-control">
                                    <option value="{{ $data['Employee']->divisi }}">{{ $data['Employee']->divisi }}</option>
                                </select>        
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="" class="label">Position</label>
                                <select name="position" class="form-control">
                                    <option value="{{ $data['Employee']->position }}">{{ $data['Employee']->position }}</option>
                                </select>        
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="" class="label">Address</label>
                                 <textarea name="address" class="form-control form-control-sm">{{ $data['Employee']->address }}</textarea>       
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="" class="label">Upload CV</label>
                                 <img src="{{ asset('storage/img/' . $data['Employee']->foto) }}" alt="" width="250">       
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