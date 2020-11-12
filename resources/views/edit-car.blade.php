@extends('layouts.main')

@section("title","Edit Car")

@section('content')

<div class="card">
    <div class="card-header edit-car-header-wrapper">
        <h3>Edit Car</h3>
    </div>

    <div class="card-body">
<form action="{{ route('cars.update') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $carToEdit->id }}">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ $carToEdit->name }}">
    </div>
    <div class="form-group">
        <label for="make">Make</label>
        <input type="text" class="form-control" id="make" placeholder="Enter make" name="make" value="{{ $carToEdit->make }}">
    </div>
    <div class="form-group">
        <label for="model">Model</label>
        <input type="text" class="form-control" id="model" placeholder="Enter model" name="model" value="{{ $carToEdit->model }}">
    </div>
    <div class="form-group">
        <label for="license_number">License Number</label>
        <input type="text" class="form-control" id="license_number" placeholder="Enter License Number" name="license_number" value="{{ $carToEdit->license_number }}">
    </div>
    <div class="form-group">
        <label for="model">Weight</label>
        <input type="number" step="50" min=0 class="form-control" id="model" placeholder="Enter Weight" name="weight" value="{{ $carToEdit->weight }}">
    </div>
    <div class="form-group">
        <label for="model">Registration Year</label>
        <input type="text" class="form-control" id="model" placeholder="Enter model" name="registration_year" value="{{ $carToEdit->registration_year }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
@endsection