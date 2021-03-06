
@extends('layouts.app')

@section('title')

Trips App
    
@endsection

@section('content')

<div class="container border my-4" >
    <div class="card">
        <h3 class="text-center my-5">Trip Search results</h3>
    </div>
    <h4 class="text-center">Search Trips</h4>
    <div class="row justify-content-center">
        <div class="col-md-8">

            {{$searchItem}}

      @foreach ($decoded_data->trips as $key => $value) 
      {{-- @if(strpos( $value->pickup_location, $searchItem)) --}}
      @if( $value->pickup_location OR $value->dropoff_location == $searchItem  )
      
      {{-- {{$value->pickup_location}}
      {{$value->dropoff_location}}
      {{$value->driver_name}}
      {{$value->car_make}}
      {{$value->car_model}}
      {{$value->car_number}} --}}

         <div class="container border">
             <div class="row">
                <div class="col-md-6">
                 {{$value->request_date}}
                </div>
                <div class="col-md-6">
                  <div class="float-right">
                  <strong> {{$value->cost}} KES</strong>
                  </div>
                 </div>
            </div>
            <div class="float-right">
              Ratings : {{  $value->driver_rating}}
            </div>
            <br>
            <div class="float-left">
                <i class="fa fa-circle" aria-hidden="true" style="color:#02FC06";></i>
                {{$value->pickup_location}}
            </div>
            <br>
            <br>
         <div class="location">
            <i class="fa fa-circle" aria-hidden="true"  style="color:#FA3106;"></i>
            {{$value->dropoff_location}}
         </div>
         <br>
         <div class="col-md-10">
         <div class="float-right">
            @if($value->status =='COMPLETED')
                {{$value->status}}
                <i class="fa fa-check" aria-hidden="true"  style="color:#02FC06;"></i>
            @else 
              <div class="text-danger">
                {{$value->status}}
                <i class="fa fa-ban" aria-hidden="true" style="color:#FA3106;"></i>      
              </div>         
            @endif
         </div>
         <br>
         </div>
         <br>
         </div>
         @else
        {{-- {{dd(' No matching results')}} --}}
         @endif
     
         @endforeach
        </div>
    </div>
</div>

@endsection   

       