@extends('layouts.base')

@section('content') 
      
      
      
       <div class="card  bg-light mb-3"  style="max-width: 18rem; justify-content:center;">
  <div class="card-header text-center">Add students</div>
  <div class="card-body">

  

  <!-- resources/views/students/create.blade.php -->
<form action="{{route ('add')}}" method="post">
    @csrf
    <label for="name">First Name:</label>
    <input type="text" id="fname" name="lname" required>
    <label for="lname">Last Name:</label>
    <input type="text" id="lname" name="fname" required>
    <label for="number">parent Phone number:</label>
    <input type="number" id="number" name="number" required>
    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required>
    <label for="adress">Adress:</label>
    <input type="text" id="adress" name="adress" required>
    
    <button type="submit" class="mt-3">Add Student</button>
</form>





  </div>
</div>




@endsection