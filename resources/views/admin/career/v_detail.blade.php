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
                        <form>
                            @csrf
                            <div class="col">
                                <div class="form-group">
                                    <label for="" class="label">Position</label>
                                    <select name="position" class="form-control">
                                        <option>{{$data->position}}</option>
                                    </select>     
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Description</label>
                                     <textarea name="desc" id="desc" class="form-control form-control-sm">
                                     {{$data->desc}}
                                     </textarea>       
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Syarat</label>
                                     <textarea name="preq" id="preq" class="form-control form-control-sm">
                                     {{$data->preq}}
                                     </textarea>       
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">CV</label>
                                     <img src="{{ asset('storage/img/' . $data->foto) }}" alt="" width="250">       
                                    </label>
                                </div>
                            </div>
                        </div>
                        <a href="/career" class="btn btn-sm btn-secondary my-2">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection