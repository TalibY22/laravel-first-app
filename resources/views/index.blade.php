@extends('layouts.base')

@section('content')        
      

      
      
      
      
  <div class="card  bg-light mb-3">
  <div class="card-header text-center">All students</div>
  <button>Add<i class="fa-solid fa-plus"></i></button>
  <div class="card-body">

  

  <table class="table table-bordered table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">First name</th>
      <th scope="col">Last name </th>
      <th scope="col">Guardian phone number</th>
      <th scope="col">Age</th>
      <th scope="col">Address</th>
      <th scope="col">Date joined</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($students as $student)
      <td>{{$student->fname}}</td>
      <td>{{$student->lname}}</td>
      <td>{{$student->phone_number}}</td>
      <td>{{$student->age}}</td>
      <td>{{$student->address}}</td>
      <td>{{$student->created_at}}</td>
      <td>
      <a href="{{route( 'delete',$student->id)}}"><i class="fa-solid fa-trash bg-danger"><a href="{{route( 'delete',$student->id)}}"></i></a>

      <a href="{{route( 'edit',$student->id)}}"><i class="fa-solid fa-pen-to-square"></i><a href="{{route( 'edit',$student->id)}}"></i></a>
      
      <i class="fa-regular fa-eye"></i> 



      </td>
     
    </tr>
     @endforeach
  </tbody>
</table>






  </div>
</div>
@endsection





  
    