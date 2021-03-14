@extends('layouts.layout')
@section('content')
    <div class="container">
        <table class="table">

            @foreach ($vehicleTypes as $vehicleType)
            <thead>
                <tr>
                    <th scope="col" colspan="3">{{ Str::ucfirst($vehicleType->vehicle_type) }}</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($vehicleType->vehicles as $vehicle)
                <tr>
                    <td>{{ $vehicle->id }}</td>
                    <td>{{ $vehicle->name }}</td>
                    <td>{{ $vehicle->model }}</td>
                </tr>
                @endforeach

            </tbody>
            @endforeach

        </table>
    </div>
@endsection
