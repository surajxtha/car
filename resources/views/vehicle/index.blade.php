@extends('layouts.layout')
@section('content')
<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">S.N</th>
        <th scope="col">Vehicle Name</th>
        <th scope="col">Model</th>
        <th scope="col">Vehicle Type</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
     @if($vehicles)
    <tbody>
        @foreach ($vehicles as $vehicle)
      <tr>
        <th scope="row">{{$vehicle->id }}</th>
        <td>{{ $vehicle->name }}</td>
        <td>{{ $vehicle->model }}</td>
        <td >
            @foreach ($types as $type)
            @if ($type->id==$vehicle->vehicle_type_id)
              {{ $type->vehicletype }}
            @endif
            @endforeach
        </td>
            <td>
            <a href="{{ route('vehicle.edit',$vehicle->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('vehicle.delete',$vehicle->id) }}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
    @endif
  </table>

@endsection
