
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



          <form action="{{url('upload_doctor')}}" method="post" enctype="multipart/form-data">

            @csrf

            <div style="padding:15px;">
              <label>Doctor Name</label>
              <input type="text" style="color:black;" name="name" placeholder="write the name" required>
            </div>

            <div style="padding:15px;">
              <label>Phone</label>
              <input type="number"style="color:black;" name="number" placeholder="write the number" required>
            </div>

            <div style="padding:15px; width:700px;">
              <label>Speciality</label>
                <select name="speciality"style="color:black; width: 30%;">
                <option >-----Select-----</option>
                <option value="Skin">Skin</option>
                <option value="Heart">Heart</option>
                 <option value="Eye">eye</option>
                <option value="Nose">nose</option>
                 <option value="cholesterol">Cholesterol</option>
                <option value="High Blood Pressure">High Blood Pressure</option>               
               <option value="Congestive Heart Failure">Congestive Heart Failure</option>
               

                </select>
            </div>

           <div style="padding:15px;">
              <label>Room No</label>
              <input type="text" style="color:black;" name="room" placeholder="write the room no" required>
            </div>

           <div style="padding:15px;">
              <label>Doctor Image</label>
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