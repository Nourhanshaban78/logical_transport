<!DOCTYPE html>
<html lang="en">
  <head>
    <base herf="/public">
    @include('admin.head')
  </head>
  <body>
    
    @include('admin.sidebar')
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">

<div style="padding-top:100px;" align="center">

<table style="padding:25px;" bgcolor="gray">


   <tr >
      <th style="padding:10px;">Name</th>
      <th style="padding:10px;">Email</th>
      <th style="padding:10px;">type</th>
      <th style="padding:10px;">size</th>
      <th style="padding:10px;">City</th>
      <th style="padding:10px;">Delivery </th>
      <th style="padding:10px;">Messages</th>
      <th style="padding:10px;">Status</th>
      <th style="padding:10px;">Appoved</th>
      <th style="padding:10px;">Cancel</th>
    </tr>


   
 @foreach($data as $data)

  <tr >
      <th style="padding:10px;">{{$data->name}}</th>
      <th style="padding:10px;">{{$data->email}}</th>
      <th style="padding:10px;">{{$data->type}}</th>
      <th style="padding:10px;">{{$data->size}}</th>
      <th style="padding:10px;">{{$data->city}}</th>
      <th style="padding:10px;">{{$data->delivery}}</th>
      <th style="padding:10px;">{{$data->message}}</th>
      <th style="padding:10px;">{{$data->status}}</th>
  <th><a class="btn btn-info" href="{{url('approved',$data->id)}}">Appoved</a></th>
  <th><a class="btn btn-danger" href="{{url('canceled',$data->id)}}">Cancel</a></th>
 </tr>
@endforeach





</table>
</div>
</div>
 
    @include('admin.script')
    
  </body>
</html>