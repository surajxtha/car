@extends('layouts.layout')
@section('content')
<div class="container">
    @if ($message = Session::get('success'))

    <div class="alert alert-success alert-block">

        <button type="button" class="close" data-dismiss="alert">×</button>

        <strong>{{ $message }}</strong>

    </div>

    @endif
<form method="POST" action="{{ route('vehicle.update',$vehicles->id) }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="name" class="form-label">Vehicle Name:</label>
      <input type="text" class="form-control" id="name" name="name" autocomplete="off" value="{{ $vehicles->name }}" >
      <span style="color:red;">@error('name'){{$message}}@enderror</span>
    </div>
    <div class="mb-3">
        <label for="model" class="form-label">Model:</label>
        <input type="text" class="form-control" id="model" name="model" autocomplete="off" value="{{ $vehicles->model }}">
        <span style="color: red;">@error('model'){{ $message }}@enderror</span>
    </div>
      <div class="mb-3">
        <label for="vehicle_type_id" class="form-label">Vehicle Type:</label>
        <select class="form-control"  name="vehicle_type_id" >
            @foreach ($types as $type)
            <option value="{{ $type->id }}" {{ $type->id==$vehicles->vehicle_type_id ? 'selected' : '' }}>{{ $type->vehicle_type }}</option>
            @endforeach
        </select>
      </div>
   <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
