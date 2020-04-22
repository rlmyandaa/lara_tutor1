@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Insert Data</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 offset-sm-0">
            <div class="card">
                <div class="card-header">
                    <b>User Data</b> | Submission of Profile Data
                </div>
                <div class="card-body">
                    <!-- Grey with black text -->

                    <div class="col-md-10 offset-md-1">
                        <div class="card" style="width: 100%">
                            <div class="card-body">
                                <form action="{{ route('user.storedata') }}" method="POST" class="form-horizontal">
                                    {{ csrf_field() }}
                                    <!-- New Task Form -->

                                    <div class="row">
                                        <div class="col-md-6 offset-md-0">
                                            <div class="form-group">
                                                <label for="task" class="control-label">First Name</label>

                                                <div>
                                                    <input type="text" name="first_name" id="first_name" class="form-control bg-light text-dark">
                                                </div>
                                                @if ($errors->has('first_name')) <h7 class="text-danger">{{ $errors->first('first_name') }}</h7> @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6 offset-md-0">
                                            <div class="form-group">
                                                <label for="task" class="control-label ">Last Name</label>

                                                <div>
                                                    <input type="text" name="last_name" id="last_name" class="form-control bg-light text-dark">
                                                </div>
                                                @if ($errors->has('last_name')) <h7 class="text-danger">{{ $errors->first('last_name') }}</h7>
                                                @endif
                                            </div>
                                        </div>
                                    </div>



                                    <div class="btn-group">
                                        <td>{!! Form::submit('Submit', ['class'=> 'btn btn-primary']) !!}</td>
                                        <td> </td>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer">
            </div>

        </div>
    </div>

</div>
@endsection