@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Chronologies 
                  <div class="float-sm-right">
                  <a class="btn btn-primary btn-sm" href="{{ route('chronologies.index') }}"> Back</a>
                  </div>
                </div>
                <div class="card-body">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Status ID:</strong>
                            {{ $chronology->status_id }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Chronology:</strong>
                            {{ $chronology->cronology }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection