@extends('template-admin')

@section('content')

<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div class="card card-form-carir mb-5">
                <div class="card-header">
                    <span class="fw-bold">Form Create Career</span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <form action="/storeCareer" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col">
                                <div class="form-group">
                                    <label for="" class="label">Position</label>
                                    <select name="position" class="form-control">
                                        <option>All</option>
                                        @foreach($data as $p)
                                        <option value="{{ $p->position }}">{{ $p->position }}</option>
                                        @endforeach
                                    </select>     
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Description</label>
                                     <textarea name="desc" id="desc" class="form-control form-control-sm"></textarea>       
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Syarat</label>
                                     <textarea name="preq" id="preq" class="form-control form-control-sm"></textarea>       
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
                        <a href="/career" class="btn btn-sm btn-secondary my-2">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection