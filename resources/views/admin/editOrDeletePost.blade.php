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

    foreach($cars as $car){
        $id = $car->id;
        if(Address::where('mark' , $id)->first()){
            $path = Address::where('mark' , $id)->first();
            $conte = Storage::get($path->address);
            $brand = $car->brand;
            $name = $car->name;
            $model = $car->model;
    ?>
    <div>
        <img src="data:image/jpeg;base64,{{ base64_encode($conte)}}" style="width: 160px;height:100px;" alt="{{$car->name}}">
        <br>
        <h3>{{$brand.' '.$name.' '.$model}}</h3>
        <form action="{{url('dashbordadmin/editordeletepost/editPost/'.$id)}}" method="get">
        {!!csrf_field()!!}
            <input type="submit" value="edit" name="editBtn" id="editBtn">
        </form>
        <form action="{{url('dashbordadmin/editordeletepost/delete/'.$id)}}" method="get">
            <input type="submit" value="delete" name="deleteBtn" id="deleteBtn">
        </form>
    </div>


    <?php
        }
      }
    ?>
</body>
</html>