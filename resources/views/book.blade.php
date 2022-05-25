@extends('layout')
@section('content')
<link rel="stylesheet" href="/css/contact.css">
<div class="container">
    <div class="content">
    
      <div class="right-side">
        <div class="topic-text">Make An Appointment</div>
      <form action="#">
        <div class="input-box">
          
          <input type="text" placeholder="Enter The Patient name">
         
        </div>
        <div class="input-box">
          
          <input type="text" placeholder="Enter An email">
         
        </div>
        <div class="input-box">
         
          <input type="date" placeholder="Enter date do you want">
          
        </div>
        <div class="input-box">
          
          <input type="time" placeholder="Enter time do you want">
          
        </div>
        
        <div class="input-box message-box">
         
          <textarea placeholder="Enter your message"></textarea>
        </div>
        <div class="button">
          <input type="button" value="Send Now" >
        </div>
      </form>
    </div>
    </div>
  </div>
@endsection