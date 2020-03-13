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
                <div class="card-header">Chronology Management
                  <div class="float-sm-right">
                      <a class="btn btn-success btn-sm" href="{{ route('chronologies.create') }}"> Create New Chronology</a>
                  </div>
                </div>
                <div class="card-body">
                  <table class="table table-bordered">
                    <tr>
                      <th>No</th>
                      <th>Status ID</th>
                      <th>Chronology</th>
                      <th>Action</th>
                    </tr>
                    @foreach ($chronologies as $key => $chronology)
                      <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $chronology->status_id }}</td>
                        <td>{{ $chronology->cronology }}</td>
                        <td>
                          <a class="btn btn-info btn-sm" href="{{ route('chronologies.show',$chronology->id) }}">Show</a>
                          <a class="btn btn-primary btn-sm" href="{{ route('chronologies.edit',$chronology->id) }}">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['chronologies.destroy', $chronology->id],'style'=>'display:inline']) !!}
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
{!! $chronologies->render() !!}

@endsection