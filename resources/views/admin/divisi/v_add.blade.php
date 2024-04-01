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
                        <form action="/storeDivisi" method="post">
                            @csrf
                            <div class="col">
                                <div class="form-group">
                                    <label for="" class="label">Kode</label>
                                     <input type="text" name="kode" class="form-control form-control-sm">       
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Divisi</label>
                                     <input type="text" name="divisi" class="form-control form-control-sm">       
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Description</label>
                                     <textarea name="desc" class="form-control form-control-sm"></textarea>       
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-sm btn-danger my-2">Save</button>
                        <a href="/divisi" class="btn btn-sm btn-secondary my-2">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection