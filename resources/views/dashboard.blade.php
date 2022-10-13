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
            <h1 class="text-center gallery">Dashboard</h1>
            <hr class="border border-2 border-dark  w-25 mx-auto">
             <p class="mt-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci pariatur ducimus eaque tempora harum sed in error deleniti reiciendis obcaecati, architecto, commodi consequatur quos, aliquid nihil doloribus quaerat? Hic, quibusdam!</p>


        </div>
        </div>
    </div>
</x-app-layout>
