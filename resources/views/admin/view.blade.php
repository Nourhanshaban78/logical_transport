<!DOCTYPE html>
<html lang="en">
  <head>
    
    @include('admin.head')
  </head>
  <body>
    
    @include('admin.sidebar')
    
      @include('admin.navbar')

<div class="container-fluid page-body-wrapper">

<div style="padding-top:100px;" align="center">

<table  style="width:200 hight:200" bgcolor="lightblue">

<tr >
 <th  >Transport Name</th>
 <th >Speciality</th>
 <th >Image</th>
 <th> Update</th>
 <th> Delete </th>
</tr>


@foreach($data as $data)
<tr>
  <td>{{$data->name}}</td>
  <td>{{$data->Speciality}}</td>
  <td><img  style="width:200 hight:200"   src="transimage/{{$data->image}}" alt=""></td>
  <td><a class="btn btn-info" href="{{url('update',$data->id)}}">Update</a></td>
  <td><a class="btn btn-danger" href="{{url('deleted',$data->id)}}"
  onclick="return confirm('Are you sure to delete the message')">Delete</a></td>
 </tr>
 @endforeach











</div>

</div>
    @include('admin.script')
    
  </body>
</html>