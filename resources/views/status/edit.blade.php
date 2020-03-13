@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
            @endif

            <div class="card">
                <div class="card-header">Create New Biodata
                  <div class="float-sm-right">
                  <a class="btn btn-primary btn-sm" href="{{ route('status.index') }}"> Back</a>
                  </div>
                </div>
                <div class="card-body">
                <form action="{{ route('status.update',$status->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Input ID:</strong>
                                    <input disabled value= "{{ $status->input_id }}" type="text" name="input_id" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Date of arrest:</strong>
                                    <input  value= "{{ $status->date_of_arrest }}" type="text" name="date_of_arrest" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Place of arrest:</strong>
                                    <input  value= "{{ $status->place_of_arrest }}" type="text" name="place_of_arrest" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Status:</strong>
                                    <input  value= "{{ $status->status }}" type="text" name="status" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Placement:</strong>
                                    <input  value= "{{ $status->placement }}" type="text" name="placement" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection