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
    <img src="data:image/jpeg;base64,<?php echo e(base64_encode($conte)); ?>" style="width: 160px;height:100px;"
                         alt="<?php echo e($showcar->name); ?>"><br>
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
        <td> <?php echo e($brand); ?> </td>
    </tr>
    <tr>
        <th> name </th>
        <td><?php echo e($name); ?></td>
    </tr>
    <tr>
        <th> model </th>
        <td><?php echo e($model); ?></td>
    </tr>
    <tr>
        <th> price </th>
        <td> <?php echo e($price); ?> </td>
    </tr>
    <tr>
        <th> year </th>
        <td> <?php echo e($year); ?> </td>
    </tr>
    <tr>
        <th> time 0 to 100 </th>
        <td> <?php echo e($time0to100); ?> </td>
    </tr>
    <tr>
        <th> transmission </th>
        <td> <?php echo e($transmission); ?> </td>
    </tr>
    <tr>
        <th> fuel type </th>
        <td> <?php echo e($fueltype); ?> </td>
    </tr>
    <tr>
        <th> engine powers </th>
        <td> <?php echo e($enginepowers); ?> </td>
    </tr>
    <tr>
        <th> number cylinders </th>
        <td> <?php echo e($numbercylinder); ?> </td>
    </tr>
    <tr>
        <th> more detail </th>
        <td> <?php echo e($moredetail); ?> </td>
    </tr>
    <tr>
        <th> mark </th>
        <td> <?php echo e($mark); ?> </td>
    </tr>
    <?php   $post_at = explode(' ', $post_at);  ?>
    <tr><td>this post at : </td><td> <?php echo e($post_at[0]); ?> </td></tr>
</table>
</body>
</html>
<?php /**PATH E:\wamp64\www\projectnet\projectnet\resources\views/cars/showPageCar.blade.php ENDPATH**/ ?>