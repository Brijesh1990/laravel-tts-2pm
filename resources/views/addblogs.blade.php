<x-app-layout>
    <x-slot name="header">
     
           <nav class="navbar">
          <a href="#" class="navbar-brand">  {{ __('Flipkart') }}
           </a>
            <ul class="navbar-link">
            <li><a href="/addgallery">Add Gallery</a></li>
                <li><a href="/managegallery">Manage Gallery</a></li>
                <li><a href="/addblogs">Add Blogs</a></li>
                <li><a href="/manageblogs">Manage Blogs</a></li>
                <li><a href="/contactus">Contactus</a></li>
            </ul>
            </nav>
      </x-slot>

    <div class="col-12">
        <!-- dashboard content -->
        <div class="row">
        <div class="col-md-3 bg-dark text-white m-5 p-3 mt-5">
            <ul class="sidebar-link">
            <li><a href="/addgallery">Add Gallery</a></li>
                <li><a href="/managegallery">Manage Gallery</a></li>
                <li><a href="/addblogs">Add Blogs</a></li>
                <li><a href="/manageblogs">Manage Blogs</a></li>
                <li><a href="/contactus">Contactus</a></li>
            </ul>
        </div>
        <div class="col-md-6 mt-5 p-3 shadow m-5">
            <h1 class="text-center gallery">Add Blogs</h1>
            <hr class="border border-2 border-dark  w-25 mx-auto">
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
<div class="alert alert-success">
    <span class="text-dark">{{ session('success') }}</span>
</div>
@endif
          
           <form method="post">
            @csrf
            <div class="form-group mt-2">
                <input type="text" name="title" placeholder="Title"  class="form-control">
            </div>

            <div class="form-group mt-3">
                <textarea name="descriptions" placeholder="Descriptions"  class="form-control"></textarea>
            </div>
            
            <div class="form-group mt-3">
                <input type="date" name="addeddate" placeholder="Added date"  class="form-control">
            </div>
           

            <div class="form-group mt-3">
            <input type="submit" name="addblog" value="Add Blogs" class="btn btn-lg bg-dark btn-outline-dark text-white">
            
            <input type="reset" name="reset" value="reset" class="btn btn-lg btn-outline-danger text-dark">
            </div>
</form>
        </div>
        </div>
    </div>
</x-app-layout>
