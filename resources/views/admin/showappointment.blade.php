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


   <div class="container-fluid page-body-wrapper">

   	<div align="center" style="padding-top:100px ;">

   		<table>

   			<tr style="background-color:black ;">

   				<th style="padding:18px;">Customer Name</th>
   				<th style="padding:18px;">Emai</th>
   				<th style="padding:18px;">Phone</th>
   				<th style="padding:18px;">Doctor Name</th>
   				<th style="padding:18px;">Data</th>
   				<th style="padding:18px;">Message</th>
   				<th style="padding:18px;">Status</th>
   				<th style="padding:18px;">Approved</th>
   				<th style="padding:18px;">Canceled</th>
          <th style="padding:18px;">Send Mail</th>
   				
   			</tr>

   			@foreach($data as $appoint)

   			<tr align="center"style="background-color:skyblue ;">
   				<td style="padding:10px;">{{$appoint->name}}</td>
   				<td style="padding:10px;">{{$appoint->email}}</td>
   				<td style="padding:10px;">{{$appoint->phone}}</td>
   				<td style="padding:10px;">{{$appoint->doctor}}</td>
   				<td style="padding:10px;">{{$appoint->date}}</td>
   				<td style="padding:10px;">{{$appoint->message}}</td>
   				<td style="padding:10px;">{{$appoint->status}}</td>

   				<td>
   					<a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a>

   				</td>

   				<td>
   					<a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Canceled</a>

   				</td>

          <td>
            <a class="btn btn-primary" href="{{url('emailview',$appoint->id)}}">Send Mail</a>

          </td>



   			</tr>

   			@endforeach


   		</table>



   	</div>


   </div>

   <!-----plugins:js--------->
        
    @include('admin.script')
    <!-- End custom js for this page -->
</div>
  </body>
</html>