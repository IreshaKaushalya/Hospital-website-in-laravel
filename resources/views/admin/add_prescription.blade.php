
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
      .msg{

        position: relative;
        top: -200px;
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


      @if(session()->has('error'))

            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert">X
              </button>

              {{session()->get('error')}}
            </div>
        @endif


          <form action="{{url('upload_prescription')}}" method="post" enctype="multipart/form-data">

            @csrf

            <div style="padding:15px;">
              <label>Date :</label>
              <input type="date" style="color:black;" name="date" placeholder="write the Date" required>
            </div>

            <div style="padding:15px;">
              <label>Patient NIC :</label>
              <input type="text" style="color:black;" name="nic" placeholder="write the Patient NIC" required>
            </div>

            <div style="padding:15px;">
              <label>Patient Name :</label>
              <input type="text"style="color:black;" name="name" placeholder="write the Patient Name" required>
            </div>

             <div style="padding:15px;">
              <label>Patient Age :</label>
              <input type="number"style="color:black;" name="Age" placeholder="write the Patient Age" required>
            </div>

            

           <div style="padding:15px;">
              <label class="msg">Disease :</label>
             <textarea id="message" style="color:black;" rows="8" name="disease" placeholder="Enter Disease.." required></textarea>
            </div>

           
          <div style="padding:15px;">
            <label class="msg" id="message">Medicine :</label>
            <textarea id="message" style="color:black;" rows="8" name="medicine" placeholder="Enter Medicine.." required></textarea>
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