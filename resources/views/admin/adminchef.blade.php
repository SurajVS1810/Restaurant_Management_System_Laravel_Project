<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
   
  <div class="container-scroller">

  @include("admin.navbar")



  <div style="position: relative;top:30px; right: -20px">

<form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div>
      <label>Name</label>
      <input style="color:blue;" type="text" name="name" placeholder="Enter name" required>
</div>

<div>
      <label>Speciality</label>
      <input style="color:blue;" type="text" name="speciality" placeholder="Enter the speciality" required>
</div>

<div>
      <label>Image</label>
      <input  type="file" name="image"  required>
</div>



<div>
 
      <input style="color:white"  type="submit" value="Save">
</div>

</form>

</div>


<div style="position: relative;top:30px;">

<div>

<table bgcolor="black">

<tr>

<th style="padding: 30px">Chef Name</th>
<th style="padding: 30px">Speciality</th>
<th style="padding: 30px">Image</th>
<th style="padding: 30px">Action</th>
<th style="padding: 30px">Action</th>
</tr>

@foreach($data as $data)
<tr align="center">

<td>{{$data->name}}</td>
<td>{{$data->speciality}}</td>
<td><img height="100" width="100" src="/chefimage/{{$data->image}}"></td>
<td><a href="{{url('/deletechef',$data->id)}}">Delete Chef</a></td>

<td><a href="{{url('/updatechef',$data->id)}}">Update Chef</a></td>

</tr>

@endforeach
</table>

</div>

</div>


</div>

</div>

  @include("admin.adminscript") 
  </body>
</html>