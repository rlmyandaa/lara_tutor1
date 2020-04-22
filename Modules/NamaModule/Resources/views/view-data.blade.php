@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>View Data</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <b>Home</b> | welcome
                </div>
                <div class="card-body">
                    <div class="container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $dataNama)

                                <tr>
                                    <td>{{$dataNama->id}}</td>
                                    <td>{{$dataNama->first_name}} {{$dataNama->last_name}}</td>
                                    <td><a href="{{ route ('user.editdata', $dataNama->id) }}">Edit</a> | <a href="{{ route ('user.deletedata', $dataNama->id) }}">Delete</a> </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection