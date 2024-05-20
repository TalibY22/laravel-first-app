@extends('layouts.base')

@section('content') 
      
      
      
       <div class="card  bg-light mb-3" class="row justify-content-center"  style="max-width: 25rem; justify-content:center;">
  <div class="card-header text-center">Add students</div>
  <div class="card-body">

  

  <!-- resources/views/students/create.blade.php -->
  <form action="{{ route('add') }}" method="post" class="needs-validation" novalidate>
            @csrf
            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" name="fname" required>
                <div class="invalid-feedback">
                    Please provide a first name.
                </div>
            </div>
            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" name="lname" required>
                <div class="invalid-feedback">
                    Please provide a last name.
                </div>
            </div>
            <div class="form-group">
                <label for="number">Parent Phone Number:</label>
                <input type="number" class="form-control" id="number" name="number" required>
                <div class="invalid-feedback">
                    Please provide a phone number.
                </div>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" id="age" name="age" required>
                <div class="invalid-feedback">
                    Please provide an age.
                </div>
            </div>
            <div class="form-group">
                <label for="adress">Address:</label>
                <input type="text" class="form-control" id="adress" name="adress" required>
                <div class="invalid-feedback">
                    Please provide an address.
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Add Student</button>
        </form>




  </div>
</div>




@endsection