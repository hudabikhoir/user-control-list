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
                <div class="card-header">Create New Chronology
                  <div class="float-sm-right">
                  <a class="btn btn-primary btn-sm" href="{{ route('chronologies.index') }}"> Back</a>
                  </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('chronologies.store') }}" method="POST">
                        @csrf
                        <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Status ID:</strong>
                                    <input type="text" name="status_id" class="form-control" placeholder="Status ID">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Chronology:</strong>
                                    <input type="text" name="cronology" class="form-control" placeholder="Cronology">
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