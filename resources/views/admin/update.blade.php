<!DOCTYPE html>
<html lang="en">
  <head>
  <base href="/public">
    @include('admin.head')
    
  </head>

  <body>
    @include('admin.sidebar')
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">
     
     <div  class="container"  style="padding-top:100px;">
 
         <form action="{{url('/edit_trans',$data->id)}}" method="post" enctype="multipart/form-data">
         
           @csrf
             
             <div  > <label> Transport Name </label>
                 <input type="text" name="name"style="color:black;" value="{{$data->name}}" require ></div>
 
                 <div > <label> Speciality </label>
                 <input type="text" name="speciality"style="color:black;"  value="{{$data->Speciality}}" require></div>
 
                 
                 <div > <label>Old Image </label>
                 <img hight=150px; width=150px; src="Transimage/{{$data->image}}" > </div>
 
                 <div > <label>New Image </label>
                 <input type="file" name="image" style="width:200px;" ></div>
 
                 <div style="padding:15px;"> 
                 <input type="submit" value="ADD Transports" class="btn btn-info" ></div>
                 
 
         </form>
 
         
     </div>
 
 
 
 
 
 
 
 
 
           
     </div>

    @include('admin.script')
    
  </body>
</html>