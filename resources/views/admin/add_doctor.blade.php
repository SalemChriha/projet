

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


     <div class="container" align="center" style="padding-top:100px ">


              @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{session()->get('message')}}


        </div>
         @endif


    <form   action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div style="padding:15px";>
    <label> Doctor Name </label>
    <input style="color:black" type="text" name="name" placeholder="name" required="">

</div>


    <div  style="padding:15px";>
    <label > Phone </label>
    <input  style="color:black" type="number" name="number" placeholder="phone" required="">

</div>
    <div style="padding:15px";>
    <label> Speciality </label>
    <select style="color:black" name="spec" >
<option >-------------Select-------------</option>
    <option value="eyes">eyes</option>

    <option value="skin">skin</option>

    <option value="heart">heart</option>



</select>

    <div style="padding:15px";>
    <label > Image </label>
    <input  type="file" name="file" required="">

</div>
    <div style="padding:15px";>

    <input  type="submit" class "btn btn-success" >

</div>




</div>



    </div>
</div>



</form>


     </div>




    </div>



@include('admin.script')
  </body>
</html>