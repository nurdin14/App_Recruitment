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
                        <form action="/updateCareer/{{$data['edit']->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col">
                                <div class="form-group">
                                    <label for="" class="label">Position</label>
                                    <select name="position" class="form-control">
                                        <option value="{{$data['edit']->position}}">{{$data['edit']->position}}</option>
                                        @foreach($data['position'] as $p)
                                        <option value="{{ $p->position }}">{{ $p->position }}</option>
                                        @endforeach
                                    </select>     
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Description</label>
                                     <textarea name="desc" id="desc" class="form-control form-control-sm">
                                     {{$data['edit']->desc}}
                                     </textarea>       
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Syarat</label>
                                     <textarea name="preq" id="preq" class="form-control form-control-sm">
                                     {{$data['edit']->preq}}
                                     </textarea>       
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Upload CV</label>
                                     <input type="hidden" name="foto_old" value="{{$data['edit']->foto}}">       
                                     <input type="file" name="foto" class="form-control form-control-sm">
                                     <img src="{{ asset('storage/img/' . $data['edit']->foto) }}" alt="" width="250">       
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