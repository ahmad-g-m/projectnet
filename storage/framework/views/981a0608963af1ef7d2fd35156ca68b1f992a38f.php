<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    use App\Cars;
    use App\Address;
    use Illuminate\Support\Facades\Storage;

    if($moclass == 9){
        foreach($all_cars as $car){
            echo($car->name);
            echo("<br>");
        }
    }
    // if($moclass == 1){
        // foreach($all_cars as $car){
            if($all_cars->where('mark',$moclass)){
                $getcar = $all_cars->where('mark',$moclass);
                foreach($getcar as $car){
                    $id = $car->id;
                    if(Address::where('mark' , $id)->first()){
                        $path = Address::where('mark' , $id)->first();
                        $conte = Storage::get($path->address);
                        $brand = $car->brand;
                        $name = $car->name;
                        $model = $car->model;
    ?>
                        <img src="data:image/jpeg;base64,<?php echo e(base64_encode($conte)); ?>" style="width: 160px;height:100px;"
                         alt="<?php echo e($car->name); ?>"><br>
                         <a href="<?php echo e(url('machines/sedanscars/carpage/'.$id)); ?>" name ="carpage" id="carpage"><?php echo e($brand .' '. $name . ' ' . $model); ?></a>
                         <br><br>
    <?php                   
                    }
                }
            }
        // }
    // }
    ?>
    <?php
    // if($moclass == 2){
    //     foreach($all_cars as $car){
    //         if($car->mark == 2){
    //             echo($car->name);
    //         echo("<br>");
    //         }
    //     }
    // }
    // if($moclass == 3){
    //     foreach($all_cars as $car){
    //         if($car->mark == 3){
    //             echo($car->name);
    //         echo("<br>");
    //         }
    //     }
    // }


?>
</body>
</html><?php /**PATH E:\wamp64\www\projectnet\projectnet\resources\views/cars/showclassCars.blade.php ENDPATH**/ ?>