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
            <h1 class="text-center gallery">Manage Gallery</h1>
            <hr class="border border-2 border-dark  w-25 mx-auto">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>#id</th>
                    <th>Name</th>
                    <th>Photo</th>
                    <th>AddedDate</th>
                    <th>Descriptions</th>
                    <th>Action</th>
                </tr>

                <tr>
                    <td></td>
                </tr>
            </table>
            
        

        
        </div>
        </div>
    </div>
</x-app-layout>
