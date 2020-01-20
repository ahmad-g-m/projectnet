<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    use App\Cars;
    use App\Address;
    use Illuminate\Support\Facades\Storage;
?>
    <form action="{{url('dashbordadmin/editordeletepost/editPost/'.$id)}}" method="post">
    {!!csrf_field()!!}
        <label for="brand">brand : </label>
        <input type="text" name="brand" id="brand" value="{{$cars->brand}}">
        <label for="name">name : </label>
        <input type="text" name="name" id="name" value="{{$cars->name}}">
        <label for="model">model : </label>
        <input type="text" name="model" id="model" value="{{$cars->model}}">
        <label for="price">price : </label>
        <input type="text" name="price" id="price" value="{{$cars->price}}">
        <label for="year">year : </label>
        <input type="text" name="year" id="year" value="{{$cars->year}}">
        <label for="time0to100">time0to100 : </label>
        <input type="text" name="time0to100" id="time0to100" value="{{$cars->time0to100}}">
        <label for="transmission">transmission : </label>
        <input type="text" name="transmission" id="transmission" value="{{$cars->transmission}}">
        <label for="fueltype">fuel type : </label>
        <input type="text" name="fueltype" id="fueltype" value="{{$cars->fueltype}}">
        <label for="enginepowers">engine power : </label>
        <input type="text" name="enginepowers" id="enginepowers" value="{{$cars->enginepowers}}">
        <label for="numbercylinder">cylinder number : </label>
        <input type="text" name="numbercylinder" id="numbercylinder" value="{{$cars->numbercylinder}}">
        <label for="moreDetail">moreDetail : </label>
        <textarea name="moreDetail" id="moreDetail" style="width: 250px;height: 160px">{{$cars->moreDetail}}</textarea>
        <input type="submit" value="edit" name="editPostBtn" id="editPostBtn">
    </form>
    <?php 
    foreach($path as $pat){
        // $conte = Storage::get($pat->Address);
        // dd($conte);
        $conte = Storage::get($pat->address);
    ?>
    <img src="data:image/jpeg;base64,{{ base64_encode($conte)}}" style="width: 160px;height:100px;" alt="what is wrong!">
    <?php 
    }
    ?>
    <br>
    <form action="{{url('dashbordadmin/editordeletepost/editPost/'.$id.'/delete/'.$id)}}" method="get">
        <input type="submit" value="delete" name="delBtn" id = "delBtn">
    </form>
    <br><br><br>
    <form action="{{route('dashbordadmin')}}" method="get">
        <input type="submit" value="leave to dashbord" name="leavePostBtn" id="leavePostBtn">
    </form>
    <?php
    if(isset($success)){
    ?>
    <h1>successfully edited...</h1>
    <?php
    }
    ?>
</body>
</html>