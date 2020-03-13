@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Status 
                  <div class="float-sm-right">
                  <a class="btn btn-primary btn-sm" href="{{ route('status.index') }}"> Back</a>
                  </div>
                </div>
                <div class="card-body">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Input ID:</strong>
                            {{ $status->input_id }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Date of Arrest:</strong>
                            {{ $status->date_of_arrest }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Place of Arrest:</strong>
                            {{ $status->place_of_arrest }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $status->status }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Placement:</strong>
                            {{ $status->placement }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection