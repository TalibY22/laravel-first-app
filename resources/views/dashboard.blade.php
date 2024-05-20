@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                
                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
  <div class="card-header">Total students </div>
  <div class="card-body">
    
    <p class="card-text">{{$students}}</p>
  </div>     
           
    
           



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
