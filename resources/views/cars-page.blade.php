@extends('layouts.main')

@section("title","Cars")

@section('content')

<div style="margin-top: 50px">

<form action="{{ route('cars.create') }}" method="POST">
    @csrf
    <button class="btn btn-primary" style="margin-left: 10px">Create</button>
    <div class="car-create-form">
        <div class="car-form-group">
            <label for="name">Enter Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        </div>
        <div class="car-form-group">
            <label for="name">Enter Make:</label>
            <input type="text" class="form-control" id="make" name="make" placeholder="Enter make">
        </div>
        <div class="car-form-group">
            <label for="name">Enter Model:</label>
            <input type="text" class="form-control" id="model" name="model" placeholder="Enter model">
        </div>
        <div class="car-form-group">
            <label for="name">Enter License Number:</label>
            <input type="text" class="form-control" id="license_number" name="license_number" placeholder="Enter License Number">
        </div>
        <div class="car-form-group">
            <label for="name">Enter  Weight:</label>
            <input type="number" step="50" min=0 class="form-control" id="model" name="weight" placeholder="Enter Weight">
        </div>
        <div class="car-form-group">
            <label for="name">Enter Registration Year:</label>
            <input type="text" class="form-control" id="license_number" name="registration_year" placeholder="Enter License Number">
        </div>
    </div>
</form>

<table class="cars-table">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Make</th>
        <th>Model</th>
        <th>License Number</th>
        <th>Weight</th>
        <th>Registration Year</th>
        <th>Car Age</th>
        <th>Created at</th>
        <th>Updated at</th>
        <th>Actions</th>
    </thead>

    <tbody>
        <?php foreach($cars as $car): ?>
            <tr>
                <td>{{ $car->id }}</td>
                <td>{{ $car->name }}</td>
                <td>{{ $car->make }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->license_number }}</td>
                <td>{{ $car->weight }}</td>
                <td>{{ $car->registration_year }}</td>
                <td>{{ date("Y") - $car->registration_year }}</td>
                <td>{{ $car->created_at }}</td>
                <td>{{ $car->updated_at }}</td>
                <td>                
                    <a href="{{ route('cars.edit',['id' => $car->id]) }}"><img class="edit-icon" src="https://icons-for-free.com/iconfiles/png/512/edit+document+edit+file+edited+editing+icon-1320191040211803620.png"></a>
                </td>
                
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>

</div>

@endsection