

<!DOCTYPE html>
<html lang="en">
  <head>
@include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">

            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

@include('admin.sidebar')
 
@include('admin.navbar')
     
     <div class="container-fluid page-body-wrapper" >

 <div align="center" style="padding-top:100px;">
<table>

<tr style="background-color:black;">
<th style="padding:10px; font-size : 20px ; color:white;">Doctor name</th>

<th style="padding:10px; font-size : 20px ; color:white;">Phone</th>
<th style="padding:10px; font-size : 20px ; color:white;">Speciality</th>
<th style="padding:10px; font-size : 20px ; color:white;">Image</th>
<th style="padding:10px; font-size : 20px ; color:white;">Delete</th>


</tr>

@foreach ($data as $doctor)
<tr align="center" style="background-color:blue;">
<td>{{$doctor->name}}</td>
<td>{{$doctor->phone}}</td>
<td>{{$doctor->spec}}</td>
<td><img height="100" width="100" src="doctorimage/{{$doctor->image}}"></td>
<td><a onclick="return confirm('are you sure ?')" class="bt btn-danger" href="{{url('delete',$doctor->id)}}">delete</a></td>

</tr>
@endforeach
</table>



</div>

@include('admin.script')
  </body>
</html>