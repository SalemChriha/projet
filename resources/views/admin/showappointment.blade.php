

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
<th style="padding:10px; font-size : 20px ; color:white;">Customer name</th>
<th style="padding:10px; font-size : 20px ; color:white;">Email</th>
<th style="padding:10px; font-size : 20px ; color:white;">Phone</th>
<th style="padding:10px; font-size : 20px ; color:white;">Doctor name</th>
<th style="padding:10px; font-size : 20px ; color:white;">Message</th>
<th style="padding:10px; font-size : 20px ; color:white;">Status</th>
<th style="padding:10px; font-size : 20px ; color:white;">Approved</th>
<th style="padding:10px; font-size : 20px ; color:white;">Denied</th>
</tr>

@foreach($data as $appoint)
<tr align="center">
<td>{{$appoint->name}}</td>
<td>{{$appoint->email}}</td>
<td>{{$appoint->phone}}</td>
<td>{{$appoint->name}}</td>
<td>{{$appoint->message}}</td>
<td>{{$appoint->status}}</td>
<td><a class="bt btn-success" href="{{url('approved',$appoint->id)}}">ok</a>   </td>
<td><a class="bt btn-danger" href="{{url('denied',$appoint->id)}}">deny</a>   </td>


</tr>
@endforeach








@include('admin.script')
  </body>
</html>