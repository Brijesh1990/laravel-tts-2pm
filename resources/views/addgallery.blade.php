<x-app-layout>
    <x-slot name="header">
     
           <nav class="navbar">
          <a href="#" class="navbar-brand">  {{ __('Flipkart') }}
           </a>
            <ul class="navbar-link">
                <li><a href="">Add Gallery</a></li>
                <li><a href="">Manage Gallery</a></li>
                <li><a href="">Add Blogs</a></li>
                <li><a href="">Manage Blogs</a></li>
                <li><a href="">Contactus</a></li>
             
            </ul>
            </nav>
      </x-slot>

    <div class="col-12">
        <!-- dashboard content -->
        <div class="row">
        <div class="col-md-3 bg-dark text-white m-5 p-3 mt-5">
            <ul class="sidebar-link">
            <li><a href="/addgallery">Add Gallery</a></li>
            <li><a href="">Manage Gallery</a></li>
            <li><a href="">Add Blogs</a></li>
            <li><a href="">Manage Blogs</a></li>
            <li><a href="">Contactus</a></li>
            </ul>
        </div>
        <div class="col-md-6 mt-5 p-3 shadow m-5">
            <h1 class="text-center gallery">Add Gallery</h1>
            <hr class="border border-2 border-dark  w-25 mx-auto">
            <div class="form-group mt-2">
                <input type="text" name="galleryname" placeholder="Gallery name" required class="form-control">
            </div>

            <div class="form-group mt-3">
                <input type="file" name="photo" placeholder="Gallery name" required class="form-control">
            </div>
            
            <div class="form-group mt-3">
                <input type="date" name="addeddate" placeholder="Added date" required class="form-control">
            </div>
            <div class="form-group mt-3">
                <textarea name="descriptions" name="descriptions" placeholder="Descriptions" required class="form-control"></textarea>
            </div>

            <div class="form-group mt-3">
            <input type="submit" name="addgallery" value="Add Gallery" class="btn btn-lg bg-dark btn-outline-dark text-white">
            
            <input type="reset" name="reset" value="reset" class="btn btn-lg btn-outline-danger text-dark">
            </div>

        </div>
        </div>
    </div>
</x-app-layout>
