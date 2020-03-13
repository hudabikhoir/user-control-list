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
                <div class="card-header">Status Management
                  <div class="float-sm-right">
                      <a class="btn btn-success btn-sm" href="{{ route('status.create') }}"> Create New Status</a>
                  </div>
                </div>
                <div class="card-body">
                  <table class="table table-bordered">
                    <tr>
                      <th>No</th>
                      <th>Date of Arrest</th>
                      <th>Place of Arrest</th>
                      <th>Status</th>
                      <th>Placement</th>
                      <th>Action</th>
                    </tr>
                    @foreach ($status as $key => $sts)
                      <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $sts->date_of_arrest }}</td>
                        <td>{{ $sts->place_of_arrest }}</td>
                        <td>{{ $sts->status }}</td>
                        <td>{{ $sts->placement }}</td>
                        <td>
                          <a class="btn btn-info btn-sm" href="{{ route('status.show',$sts->id) }}">Show</a>
                          <a class="btn btn-primary btn-sm" href="{{ route('status.edit',$sts->id) }}">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['status.destroy', $sts->id],'style'=>'display:inline']) !!}
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
{!! $status->render() !!}

@endsection