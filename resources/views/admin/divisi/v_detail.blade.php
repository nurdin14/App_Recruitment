@extends('template-admin')

@section('content')

<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div class="card card-form mb-5">
                <div class="card-header">
                    <span class="fw-bold">Form Update Data</span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <form action="/updatePosition/{{ $data->id }}" method="post">
                            @csrf
                            <div class="col">
                                <div class="form-group">
                                    <label for="" class="label">Kode</label>
                                     <input type="text" disabled name="kode" value="{{ $data->kode }}" class="form-control form-control-sm">       
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Position</label>
                                     <input type="text" disabled name="position" value="{{ $data->position }}" class="form-control form-control-sm">       
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Description</label>
                                     <textarea name="desc" disabled class="form-control form-control-sm">{{ $data->position }}</textarea>       
                                    </label>
                                </div>
                            </div>
                        </div>
                        <a href="/position" class="btn btn-sm btn-secondary my-2">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection