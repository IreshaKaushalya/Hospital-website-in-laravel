
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    <style type="text/css">
      label
      {
        display: inline-block;
        width: 200px;
        text-align: left;
      }
      
    </style>

     @include('admin.css')

   
  </head>
  <body>
   <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->

        @include('admin.sidebar')
      <!-- partial -->


      @include('admin.navbar')

  <!-- plugins:js -->
       <div class="container-fluid page-body-wrapper">

        <div class="container" align="center" style="padding-top: 100px;">


      @if(session()->has('message'))

        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">X
          </button>

          {{session()->get('message')}}
        </div>
        @endif



          <form action="{{url('upload_pharmacy')}}" method="post" enctype="multipart/form-data">

            @csrf

            <div style="padding:15px;">
              <label>Pharmacy Name</label>
              <input type="text" style="color:black;" name="name" placeholder="write the name" required>
            </div>

            <div style="padding:15px;">
              <label>Phone</label>
              <input type="number"style="color:black;" name="phone" placeholder="write the number" required>
            </div>

         
           <div style="padding:15px;">
              <label>Address</label>
              <input type="text" style="color:black;" name="address" placeholder="write the Address" required>
            </div>

           <div style="padding:15px;">
              <label>Pharmacy Image</label>
            <input type="file" name="file" required>
            </div>


           <div style="padding:15px;">
            <input type="submit" name="sent"class="btn btn-success">
            </div>

            
          </form>
      
        </div>
      </div>
    </div>


  
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>