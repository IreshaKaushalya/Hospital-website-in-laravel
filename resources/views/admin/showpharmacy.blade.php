
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

	   				<th style="padding:18px;">Pharmacy Name</th>
	   				<th style="padding:18px;">Phone</th>
	   				<th style="padding:18px;">Address</th>
	   				<th style="padding:18px;">Image</th>
	   				<th style="padding:18px;">Delete</th>
	   				<th style="padding:18px;">Update</th>  				
	   			</tr>

			@foreach($data as $Pharmacy)

	   			<tr align="center"style="background-color:skyblue ;">

   				<td style="padding:10px;">{{$Pharmacy->name}}</td>
   				<td style="padding:10px;">{{$Pharmacy->phone}}</td>
   				<td style="padding:10px;">{{$Pharmacy->address}}</td>
   				<td style="padding:10px;"><img height="110" width="110" src="pharmacyimage/{{$Pharmacy->image}}"></td>

   				<td>
   					<a  onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" href="{{url('deletePharmacy',$Pharmacy->id)}}">Delete</a>
   				</td>

   				<td>
   					<a class="btn btn-primary" href="{{url('updatePharmacy',$Pharmacy->id)}}">Update</a>
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