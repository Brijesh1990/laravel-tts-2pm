@extends('patel-restaurents.layout')
@section('title-name')
contact with us
@endsection
@section('content')
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact mt-5" style="margin-top:5% !important">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Login with us!</h2>
          <p>Login Form</p>
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
        
            <form  method="post" role="form" class="php-email-form">
                @csrf
                <div class="col-md-12 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="email" id="email" placeholder="Your Email">
                </div>
            
              <div class="form-group mt-3">
                <input type="password" class="form-control" name="password" id="subject" placeholder="Password">
              </div>
             
         
              <div><button type="submit">Login</button>
            
              <b class="text-white"><a href="">Forget Password</a></b>

              </div>
              <div class="form-group mt-3">
              <b class="text-white">Don't have an account ?<a href="/create-account">Create Account</a></b>
</div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
@endsection