@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          @if ($message = Session::get('success'))
          <div class="alert alert-success">
            <p>{{ $message }}</p>
          </div>
          @endif
            <div class="card">
                <div class="card-header">Biodatas Management
                  <div class="float-sm-right">
                      <a class="btn btn-success btn-sm" href="{{ route('biodatas.create') }}"> Create New Biodata</a>
                  </div>
                </div>
                <div class="card-body">
                  <table class="table table-bordered">
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Age</th>
                      <th>address</th>
                      <th>gender</th>
                      <th width="280px">Action</th>
                    </tr>
                    @foreach ($biodatas as $key => $biodata)
                      <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $biodata->name }}</td>
                        <td>{{ $biodata->age }}</td>
                        <td>{{ $biodata->address }}</td>
                        <td>{{ $biodata->gender }}</td>
                        <td>
                          <a class="btn btn-info btn-sm" href="{{ route('biodatas.show',$biodata->id) }}">Show</a>
                          <a class="btn btn-primary btn-sm" href="{{ route('biodatas.edit',$biodata->id) }}">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['biodatas.destroy', $biodata->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </td>
                      </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{!! $biodatas->render() !!}

@endsection