
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

	   				<th style="padding:18px;">Doctor Name</th>
	   				<th style="padding:18px;">Phone</th>
	   				<th style="padding:18px;">Speciality</th>
	   				<th style="padding:18px;">Room</th>
	   				<th style="padding:18px;">Image</th>
	   				<th style="padding:18px;">Delete</th>
	   				<th style="padding:18px;">Update</th>  				
	   			</tr>

			@foreach($data as $doctor)

	   			<tr align="center"style="background-color:skyblue ;">

   				<td style="padding:10px;">{{$doctor->name}}</td>
   				<td style="padding:10px;">{{$doctor->number}}</td>
   				<td style="padding:10px;">{{$doctor->speciality}}</td>
   				<td style="padding:10px;">{{$doctor->room}}</td>
   				<td style="padding:10px;"><img height="110" width="110" src="doctorimage/{{$doctor->image}}"></td>

   				<td>
   					<a  onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Delete</a>
   				</td>

   				<td>
   					<a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</a>
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