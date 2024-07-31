
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <style type="text/css">
      label
      {
        display: inline-block;
        width: 200px;
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

        <!-- partial -->
        
      <div class="container-fluid page-body-wrapper">

         <div class="container" align="center" style="padding-top: 100px;">



     @if(session()->has('message'))

        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">X
          </button>

          {{session()->get('message')}}
        </div>
      @endif




           <form action="{{url('upload_news')}}" method="post" enctype="multipart/form-data">
             @csrf

              <div style="padding:15px;">
                <label>Post Category </label>
                <input type="text"style="color:black;" name="category" placeholder="Write the Category" required>
              </div>

              <div style="padding:15px;">
                <label>Post Title </label>
                <input type="text"style="color:black;" name="title" placeholder="Write the Post Title"required>
              </div>

              <div style="padding:15px;">
                <label>Adder</label>
                <input type="text"style="color:black;" name="adder" placeholder="Write the Post Title"required>
              </div>

              <div style="padding:15px;">
                <label>Date</label>
                <input type="date"style="color:black;" name="date" placeholder="Write the Date" required>
              </div>

             <div style="padding:15px;">
                <label>Home Image</label>
                <input type="file" name="Hfile"required >
              </div>

               <div style="padding:15px;">
                <label>Avatar Image</label>
                <input type="file" name="file"required >
              </div>

              <div style="padding:15px;">
                <input type="submit" name="sent"class="btn btn-success">
              </div>

          </form>

         </div>

      </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>