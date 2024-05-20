@extends('layouts.base')

@section('content')


      
      
      
      
       <div class="card  bg-light mb-3" class="row justify-content-center">
  <div class="card-header text-center">All students</div>
  <div class="card-body">

  

  <!-- resources/views/students/create.blade.php -->
  <form action="{{ route('add') }}" method="post" class="needs-validation" novalidate>
            @csrf
            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" value="{{$student -> fname}}" name="fname" required>
                <div class="invalid-feedback">
                    Please provide a first name.
                </div>
            </div>
            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" name="lname" value="{{$student -> lname}}"  required>
                <div class="invalid-feedback">
                    Please provide a last name.
                </div>
            </div>
            <div class="form-group">
                <label for="number">Parent Phone Number:</label>
                <input type="number" class="form-control" id="number" name="number" value="{{$student -> phone_number}}"  required>
                <div class="invalid-feedback">
                    Please provide a phone number.
                </div>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" id="age" name="age" value="{{$student -> age}}" required>
                <div class="invalid-feedback">
                    Please provide an age.
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="adress" name="adress" value="{{$student -> address}}"  required>
                <div class="invalid-feedback">
                    Please provide an address.
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>



  </div>
</div>






@endsection