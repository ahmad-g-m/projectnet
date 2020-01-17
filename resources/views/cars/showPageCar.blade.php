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
    
    $addresses = Address::where('mark' , $id)->get();
    // dd($addresses->address);
    foreach($addresses as $addr){
        // $car = Cars::find($id);
        $path = $addr->address;
        $conte = Storage::get($path);
    
?>
    <img src="data:image/jpeg;base64,{{ base64_encode($conte)}}" style="width: 160px;height:100px;"
                         alt="{{$showcar->name}}"><br>
<?php 
    }
    $view_before = $showcar->view;
    $view_before = $view_before + 1;
    $view_before2 = Cars::find($id);
    $view_before2->view = $view_before;
    $view_before2->save();
    $brand = $showcar->brand;
    $name = $showcar->name;
    $model = $showcar->model;
    $price = $showcar->price;
    $year = $showcar->year;
    $time0to100 = $showcar->time0to100;
    $transmission = $showcar->transmission;
    $fueltype = $showcar->fueltype;
    $enginepowers = $showcar->enginepowers;
    $numbercylinder = $showcar->numbercylinder;
    $moredetail = $showcar->moredetail;
    $mark = $showcar->mark;
    $post_at = $showcar->post_at;
?>
<table border="2px solid black">
    <tr>
        <th> brand </th>
        <td> {{$brand}} </td>
    </tr>
    <tr>
        <th> name </th>
        <td>{{$name}}</td>
    </tr>
    <tr>
        <th> model </th>
        <td>{{$model}}</td>
    </tr>
    <tr>
        <th> price </th>
        <td> {{$price}} </td>
    </tr>
    <tr>
        <th> year </th>
        <td> {{$year}} </td>
    </tr>
    <tr>
        <th> time 0 to 100 </th>
        <td> {{$time0to100}} </td>
    </tr>
    <tr>
        <th> transmission </th>
        <td> {{$transmission}} </td>
    </tr>
    <tr>
        <th> fuel type </th>
        <td> {{$fueltype}} </td>
    </tr>
    <tr>
        <th> engine powers </th>
        <td> {{$enginepowers}} </td>
    </tr>
    <tr>
        <th> number cylinders </th>
        <td> {{$numbercylinder}} </td>
    </tr>
    <tr>
        <th> more detail </th>
        <td> {{$moredetail}} </td>
    </tr>
    <tr>
        <th> mark </th>
        <td> {{$mark}} </td>
    </tr>
    <?php   $post_at = explode(' ', $post_at);  ?>
    <tr><td>this post at : </td><td> {{$post_at[0]}} </td></tr>
</table>
</body>
</html>
