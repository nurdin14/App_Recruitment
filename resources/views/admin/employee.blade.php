@extends('template-admin')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table id="example" class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>No.Telpon</th>
                                <th>Email</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($employees as $e)
                                <td>{{$e->name}}</td>
                                <td>{{$e->telp}}</td>
                                <td>{{$e->email}}</td>
                                <td>{{$e->address}}</td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection