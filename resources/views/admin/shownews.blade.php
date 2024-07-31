
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

	   				<th style="padding:18px;">News Category</th>
	   				<th style="padding:18px;">Title</th>
	   				<th style="padding:18px;">Adder</th>           
	   				<th style="padding:18px;">Date</th>
            <th style="padding:18px;">Adder Image</th>
            <th style="padding:18px;">Hospital Image</th>

	   				<th style="padding:18px;">Delete</th>
	   				<th style="padding:18px;">Update</th>  				
	   			</tr>

			@foreach($Ndata as $news)

	   			<tr align="center"style="background-color:skyblue ;">

   				<td style="padding:10px;">{{$news->category}}</td>
   				<td style="padding:10px;">{{$news->title}}</td>
   				<td style="padding:10px;">{{$news->adder}}</td>
   				<td style="padding:10px;">{{$news->date}}</td>

   				<td style="padding:10px;"><img height="110" width="110" src="newsimage/{{$news->Himage}}"></td>

          <td style="padding:10px;"><img height="110" width="110" src="Anewsimage/{{$news->Aimage}}"></td>

   				<td>
   					<a  onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" href="{{url('deletenews',$news->id)}}">Delete</a>
   				</td>

   				<td>
   					<a class="btn btn-primary" href="{{url('updatenews',$news->id)}}">Update</a>
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