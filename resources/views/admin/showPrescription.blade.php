
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

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
      		<div align="center" style="padding-top:100px ;">

      			<table>

	   			<tr style="background-color:black ;">
	   				<th style="padding:18px;">ID</th>
	   				<th style="padding:18px;">Date</th>
	   				<th style="padding:18px;">Patient NIC</th>
	   				<th style="padding:18px;">Patient Name</th>
	   				<th style="padding:18px;">Patient Age</th>
	   				<th style="padding:18px;">Disease</th>
	   				<th style="padding:18px;">Medicine</th>
	   				
	   				<th style="padding:18px;">Update</th>  				
	   			</tr>




	@foreach($data as $prescription)

	   			<tr align="center"style="background-color:skyblue ;">

	   			<td style="padding:10px;">{{$prescription->id}}</td>
   				<td style="padding:10px;">{{$prescription->date}}</td>
   				<td style="padding:10px;">{{$prescription->nic}}</td>
   				<td style="padding:10px;">{{$prescription->name}}</td>
   				<td style="padding:10px;">{{$prescription->Age}}</td>
   				<td style="padding:10px;">{{$prescription->disease}}</td>
   				<td style="padding:10px;">{{$prescription->medicine}}</td>
   				

   				
   				<td>
   					<a class="btn btn-primary" href="{{url('updatePrescription',$prescription->id)}}">Update</a>
   				</td>


   				</tr>


		@endforeach

      		</div>

      </div>
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>