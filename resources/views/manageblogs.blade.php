<x-app-layout>
    <x-slot name="header">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script>
$(document).ready(function () {
    $('#example').DataTable();
});
    </script>
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
        <div class="col-md-7 mt-5 p-3 shadow m-5">
           
          <!-- delete message -->
          @if(Session('del'))
           <div class="alert alert-danger">
            <span class="text-dark">{{session('del')}}</span>
           </div>
           @endif
         

           @if(Session('upd'))
           <div class="alert alert-success">
            <span class="text-dark">{{session('upd')}}</span>
           </div>
           @endif
           
            <h1 class="text-center gallery">Manage Blogs</h1>
            <hr class="border border-2 border-dark  w-25 mx-auto">
            
            <table id="example" class="table table-bordered table-hover">
            <thead>    
            <tr>
                    <th>#id</th>
                    <th>Title</th>
                    <th>Descriptions</th>
                    <th>AddedDate</th>
                    <th>Action</th>
                </tr>
</thead>

             <tbody>
                 @foreach($data as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->title}}</td>
                    <td>{{$row->descriptions}}</td>
                    <td>{{$row->addeddate}}</td>
                    <td><a href='{{URL("/manageblogs/".$row->id)}}' onclick="return confirm('Are you sure to delete?')"><i class="bi bi-trash text-danger"></i></a> | <a href='{{URL("/editblogs/".$row->id)}}' onclick="return confirm('Are you sure to Edit blogs?')"><i class="bi bi-pencil text-info"></i></a></td>
                </tr>
                @endforeach
</tbody>
            </table>
            

        

        
        </div>
        </div>
    </div>
</x-app-layout>
