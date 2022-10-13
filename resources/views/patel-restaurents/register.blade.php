@extends('patel-restaurents.layout')
@section('title-name')
contact with us
@endsection
@section('content')
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Create Account with Us!</h2>
          <p>Register Us</p>
        </div>
      </div>


      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Saturday:<br>
                  11:00 AM - 2300 PM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif    
@if(Session('success'))
<div class='alert alert-success'>
  <span class="text-danger">{{ Session('success') }} </span>
 </div>
 @endif
            <form  method="post" role="form" class="php-email-form" enctype="mutipart/form-data">
             @csrf 
            <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                </div>
              </div>
              <div class="row">
              <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="password" class="form-control" name="password" id="email" placeholder="Your Password">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="password" class="form-control" name="confirm_password" id="email" placeholder="Your Password">
                </div>
</div>

              <div class="col-md-12 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="mobile" id="email" placeholder="Your Mobile">
                </div>

                <div class="col-md-12 form-group mt-3 mt-md-0">
                  <input type="file" class="form-control" name="photo" id="email" placeholder="Your Photo">
                </div>

                
                <div class="col-md-12 form-group mt-3 mt-md-0">
                  Reading <input type="checkbox"   name="chk[]" id="email" value="reading">
                  Playing <input type="checkbox"   name="chk[]" id="email" value="playing">
                </div>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                  Male <input type="radio"   name="gender" id="email" value="male">
                  Female <input type="radio"   name="gender" id="email" value="female">
                </div>

            
              <div class="form-group mt-3">
                <textarea class="form-control" name="address" rows="8" placeholder="Message"></textarea>
              </div>
            
              <div class="form-group mt-3">
                <select  class="form-control" name="country" id="subject" placeholder="Subject">
                <option value="">-select country-</option>
                  <option value="1">India</option>
                                    
                </select>
              </div>
              <div class="form-group mt-3">
                <select  class="form-control" name="state" id="subject" placeholder="Subject">
                  
                <option value="">-select state-</option>
                  <option value="1">Gujrat</option>
                                    
                </select>
              </div>
              <div class="form-group mt-3">
                <select  class="form-control" name="city" id="subject" placeholder="Subject">
                  
                <option value="">-select city-</option>
                  <option value="1">Rajkot</option>
                                    
                </select>
              </div>
              <div><button type="submit" name="reg">Register</button>
              <button type="reset">Reset</button>
            </div>

            <div class="form-group mt-3">
              <b class="text-white">Already have an account ?<a href="/authentication-login">Login</a></b>
</div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
@endsection