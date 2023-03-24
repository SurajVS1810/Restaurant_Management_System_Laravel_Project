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


  <div style="position: relative;top:60px; right: -150px">
  <table bgcolor="black" border="3px"> 

<tr>
<th style="padding: 30px">Name</th>
<th style="padding: 30px">email</th>
<th style="padding: 30px">phone</th>
<th style="padding: 30px">date</th>
<th style="padding: 30px">time</th>
<th style="padding: 30px">Message</th>
<th style="padding: 30px">Action</th>


</tr>
@foreach($data as $data)
<tr align="center">
<td>{{$data->name}}</td>
<td>{{$data->email}}</td>
<td>{{$data->phone}}</td>
<td>{{$data->date}}</td>
<td>{{$data->time}}</td>
<td>{{$data->message}}</td>
<td><a href="{{url('/deletereservation',$data->id)}}">Delete</a></td>


</tr>

@endforeach
</table>



  </div>

</div>
  @include("admin.adminscript") 
  </body>
</html>