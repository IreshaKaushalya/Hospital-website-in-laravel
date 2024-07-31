
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



      		<form action="{{url('editnews',$Ndata->id)}}" method="POST" enctype="multipart/form-data">

      			@csrf

      			<div style="padding:15px">
      				<label>News Category</label>
      				<input type="text" style="color:black;"  name="category" value="{{$Ndata->category}}">
      			</div>

      			<div style="padding:15px">
      				<label>Title</label>
      				<input type="text" style="color:black;" name="title" value="{{$Ndata->title}}">
      			</div>

      			<div style="padding:15px">
      				<label>Adder</label>
      				<input type="text" style="color:black;" name="adder" value="{{$Ndata->adder}}">
      			</div>

      			<div style="padding:15px">
      				<label>Date</label>
      				<input type="date" style="color:black;" name="date" value="{{$Ndata->date}}">
      			</div>

      			<div style="padding:15px">
      				<label>Old Hospital Image</label>
      				<img heightt="200" width="200" src="newsimage/{{$Ndata->Himage}}">
      			</div>
           <div style="padding:15px">
              <label>Change Hospital Image</label>
              <input type="file" name="Hfile">
            </div>


				  <div style="padding:15px">
      				<label>Old Adder Image</label>
      				<img heightt="200" width="200" src="Anewsimage/{{$Ndata->Aimage}}">
      			</div>      		

       			<div style="padding:15px">
      				<label>Change Adder Image</label>
      				<input type="file" name="file">
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