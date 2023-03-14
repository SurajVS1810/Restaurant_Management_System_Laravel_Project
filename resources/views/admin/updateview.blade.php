<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

  <base href="/public">
    @include("admin.admincss")
  </head>
  <body>
   
  <div class="container-scroller">

  @include("admin.navbar")

  <div style="position: relative;top:60px; right: -150px">

  <form action="{{('/uploadfood')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label>Title</label>
        <input style="color:blue;" type="text" name="title" placeholder="write a title" required>
</div>

<div>
        <label>Price</label>
        <input style="color:blue;" type="num" name="price" placeholder="price" required>
</div>

<div>
        <label>Image</label>
        <input  type="file" name="image"  required>
</div>

<div>
        <label>Description</label>
        <input style="color:blue;" type="text" name="description" placeholder="Description"  required>
</div>

<div>
   
        <input style="color:white"  type="submit" value="Save">
</div>

</form>

</div>
  @include("admin.adminscript") 
  </body>
</html>