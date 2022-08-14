@extends('layouts.site');

@section('stylesheet')
<link rel="stylesheet" href="{{asset('assets/frontend/css/custom.css')}}">
@endsection

@section('content')
{{-- banner --}}
<div class="practice-area-banner">
    <div class="practice-text-container">
        <h2>Contact with us</h2>
    </div>
</div>
<div class="container">
  
<div class="form-container  row  mx-auto">
        
  <div class="contact col-md-3 col-sm-12 ">
    
      <div class="">
        <h2 class="text-center">Contact us</h2>
      <p>Every case is very important to us and we always take care of them seriously.</p>
                
    <p><i class="fa-solid fa-address-card px-3"></i>Address: Dhaka, Bangladesh</p>

    <p><i class="fa-solid fa-phone px-3"></i> Phone: + 1235 2355 98</p>

    <p><i class="fa-solid fa-envelope px-3"></i>Email: info@yoursite.com</p>
    <p><i class="fa-solid fa-earth-asia px-3"></i>Web: info@yoursite.com</p>
      </div>
      
  </div>
  <div class="form-section my-auto -3 col-md-6 col-sm-12">
      <form>
        <h2 class="text-center">Get in Touch</h2>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" placeholder="Enter Your ID" id="" aria-describedby="emailHelp">
            
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input type="email" placeholder="Enter Your Email" class="form-control" id="">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone</label>
            <input type="text" placeholder="Enter Your Phone" class="form-control" id="">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Message</label>
            <textarea name="message" id="" cols="30" rows="3"></textarea>
          </div>
          
          <button type="submit" class="btn btn-form">Submit</button>
        </form>
  </div>
 
</div>
</div>
@endsection