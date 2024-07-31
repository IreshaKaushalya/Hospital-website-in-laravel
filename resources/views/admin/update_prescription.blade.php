
<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->

    <base href="/public">

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


      	<div class="container" align="center" style="padding:100px">



      	@if(session()->has('message'))

        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">X
          </button>

          {{session()->get('message')}}
        </div>
        @endif



      		<form action="{{url('editprescription',$data->id)}}" method="POST" enctype="multipart/form-data">

      			@csrf

      			<div style="padding:15px">
      				<label>Date :</label>
      				<input type="date" style="color:black;" name="date"  value="{{$data->date}}">
      			</div>

      			<div style="padding:15px">
      				 <label>Patient NIC :</label>
      				 <input type="text" style="color:black;" name="nic" value="{{$data->nic}}">
      			</div>

      			<div style="padding:15px">
      				<label>Patient Name :</label>
      				<input type="text"style="color:black;" name="name" value="{{$data->name}}">
      			</div>

      			<div style="padding:15px">
      				<label>Patient Age :</label>
              		<input type="number"style="color:black;" name="Age" value="{{$data->Age}}">
      			</div>

      			
				<div style="padding:15px">
					<label class="msg">Disease :</label>
             		<textarea id="message" style="color:black;" rows="8" name="disease" value="{{$data->disease}}"></textarea>
				</div>

				<div style="padding:15px">
					<label class="msg">Medicine :</label>
             		<textarea id="message" style="color:black;" rows="8" name="medicine" value="{{$data->medicine}}"></textarea>
				</div>		

      			


       			<div style="padding:15px">
      				<input type="submit" class="btn btn-primary">
       			</div> 


      		</form>

      	</div>

      </div>

      </div>
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>