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
                <div class="card-header">Edit Chronology
                  <div class="float-sm-right">
                  <a class="btn btn-primary btn-sm" href="{{ route('chronologies.index') }}"> Back</a>
                  </div>
                </div>
                <div class="card-body">
                <form action="{{ route('chronologies.update',$chronology->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Status ID:</strong>
                                    <input disabled value= "{{ $chronology->status_id }}" type="text" name="status_id" class="form-control" placeholder="status_id">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Chronology:</strong>
                                    <input  value= "{{ $chronology->cronology }}" type="text" name="cronology" class="form-control" placeholder="cronology">
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