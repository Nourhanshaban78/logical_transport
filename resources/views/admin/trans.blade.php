<!DOCTYPE html>
<html lang="en">
  <head>
    
    @include('admin.head')
  </head>
  <body>
    
    @include('admin.sidebar')
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">
        <div style="padding-top:100px;">
      <form action="{{url('add_transport')}}" method="post" enctype="multipart/form-data">
        
        @csrf
        <div  > <label> Trans Name </label>
            <input type="text" name="name"style="color:black;" require placeholder="Trans name"></div>

            <div > <label> Speciality </label>
            <input type="text" name="speciality"style="color:black;" require placeholder="Speciality"></div>

          
            <div > <label>Trans Image </label>
            <input type="file" name="image" style="width:200px;" require></div>

            

            <div style="padding:15px;"> 
            <input type="submit" value="ADD TRANSPORT" class="btn btn-info" ></div>
            

    </form>

    
</div>
      
</div>
     


















    @include('admin.script')
    
  </body>
</html>