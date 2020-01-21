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
    $contents = explode(' ' , $content);
    foreach($contents as $cont){
        if(Cars::where('brand' , $cont)){
            $finded = Cars::where('brand' , $cont)->get();
            foreach($finded as $find){
                $id = $find->id;
                if(Address::where('mark' , $id)->first()){
                    $path = Address::where('mark' , $id)->first();
                    $conte = Storage::get($path->address);
?>                  <br><br>
                    <img src="data:image/jpeg;base64,{{ base64_encode($conte)}}" style="width: 160px;height:100px;"
                         alt="{{$find->brand}}"><br>
                    <?php
                        if($find->mark == 1){
                    ?>
                            <a href="{{url('machines/sedanscars/carpage/'.$id)}}">{{$find->brand . ' '. $find->name . ' ' . $find->model}}</a>
                    <?php
                        }

                    ?>
                    <?php
                        if($find->mark == 2){
                    ?>
                            <a href="{{url('machines/classicscar/carpage/'.$id)}}">{{$find->brand . ' '. $find->name . ' ' . $find->model}}</a>
                    <?php
                        }

                    ?>
                    <?php
                        if($find->mark == 3){
                    ?>
                            <a href="{{url('machines/sportscars/carpage/'.$id)}}">{{$find->brand . ' '. $find->name . ' ' . $find->model}}</a>
                    <?php
                        }

                    ?>
<?php
                }
            }
        } 
        if(Cars::where('name' , $cont)){
            $finded = Cars::where('name' , $cont)->get();
            foreach($finded as $find){
                $id = $find->id;
                if(Address::where('mark' , $id)->first()){
                    $path = Address::where('mark' , $id)->first();
                    $conte = Storage::get($path->address);
?>
                    <br><br>
                    <img src="data:image/jpeg;base64,{{ base64_encode($conte)}}" style="width: 160px;height:100px;"
                         alt="{{$find->brand}}"><br>
                    <?php
                        if($find->mark == 1){
                    ?>
                            <a href="{{url('machines/sedanscars/carpage/'.$id)}}">{{$find->brand . ' '. $find->name . ' ' . $find->model}}</a>
                    <?php
                        }

                    ?>
                    <?php
                        if($find->mark == 2){
                    ?>
                            <a href="{{url('machines/classicscar/carpage/'.$id)}}">{{$find->brand . ' '. $find->name . ' ' . $find->model}}</a>
                    <?php
                        }

                    ?>
                    <?php
                        if($find->mark == 3){
                    ?>
                            <a href="{{url('machines/sportscars/carpage/'.$id)}}">{{$find->brand . ' '. $find->name . ' ' . $find->model}}</a>
                    <?php
                        }

                    ?>
<?php
                }
            }
        } 
        if(Cars::where('model' , $cont)){
            $finded = Cars::where('model' , $cont)->get();
            foreach($finded as $find){
                $id = $find->id;
                if(Address::where('mark' , $id)->first()){
                    $path = Address::where('mark' , $id)->first();
                    $conte = Storage::get($path->address);
?>
                    <br><br>
                    <img src="data:image/jpeg;base64,{{ base64_encode($conte)}}" style="width: 160px;height:100px;"
                         alt="{{$find->brand}}"><br>
                    <?php
                        if($find->mark == 1){
                    ?>
                            <a href="{{url('machines/sedanscars/carpage/'.$id)}}">{{$find->brand . ' '. $find->name . ' ' . $find->model}}</a>
                    <?php
                        }

                    ?>
                    <?php
                        if($find->mark == 2){
                    ?>
                            <a href="{{url('machines/classicscar/carpage/'.$id)}}">{{$find->brand . ' '. $find->name . ' ' . $find->model}}</a>
                    <?php
                        }

                    ?>
                    <?php
                        if($find->mark == 3){
                    ?>
                            <a href="{{url('machines/sportscars/carpage/'.$id)}}">{{$find->brand . ' '. $find->name . ' ' . $find->model}}</a>
                    <?php
                        }

                    ?>
<?php
                }
            }  
        } 
        if(Cars::where('mark' , $cont)){
            $finded = Cars::where('mark' , $cont)->get();
            foreach($finded as $find){
                $id = $find->id;
                if(Address::where('mark' , $id)->first()){
                    $path = Address::where('mark' , $id)->first();
                    $conte = Storage::get($path->address);
?>
                    <br><br>
                    <img src="data:image/jpeg;base64,{{ base64_encode($conte)}}" style="width: 160px;height:100px;"
                         alt="{{$find->brand}}"><br>
                    <?php
                        if($find->mark == 1){
                    ?>
                            <a href="{{url('machines/sedanscars/carpage/'.$id)}}">{{$find->brand . ' '. $find->name . ' ' . $find->model}}</a>
                    <?php
                        }

                    ?>
                    <?php
                        if($find->mark == 2){
                    ?>
                            <a href="{{url('machines/classicscar/carpage/'.$id)}}">{{$find->brand . ' '. $find->name . ' ' . $find->model}}</a>
                    <?php
                        }

                    ?>
                    <?php
                        if($find->mark == 3){
                    ?>
                            <a href="{{url('machines/sportscars/carpage/'.$id)}}">{{$find->brand . ' '. $find->name . ' ' . $find->model}}</a>
                    <?php
                        }

                    ?>
<?php
                }
            }
        } 
        if(Cars::where('moredetail' , $cont)){
            $finded = Cars::where('moredetail' , $cont)->get();
            foreach($finded as $find){
                $id = $find->id;
                if(Address::where('mark' , $id)->first()){
                    $path = Address::where('mark' , $id)->first();
                    $conte = Storage::get($path->address);
?>
                    <br><br>
                    <img src="data:image/jpeg;base64,{{ base64_encode($conte)}}" style="width: 160px;height:100px;"
                         alt="{{$find->brand}}"><br>
                    <?php
                        if($find->mark == 1){
                    ?>
                            <a href="{{url('machines/sedanscars/carpage/'.$id)}}">{{$find->brand . ' '. $find->name . ' ' . $find->model}}</a>
                    <?php
                        }

                    ?>
                    <?php
                        if($find->mark == 2){
                    ?>
                            <a href="{{url('machines/classicscar/carpage/'.$id)}}">{{$find->brand . ' '. $find->name . ' ' . $find->model}}</a>
                    <?php
                        }

                    ?>
                    <?php
                        if($find->mark == 3){
                    ?>
                            <a href="{{url('machines/sportscars/carpage/'.$id)}}">{{$find->brand . ' '. $find->name . ' ' . $find->model}}</a>
                    <?php
                        }

                    ?>
<?php
                }
            }
        }
    }
?>
</body>
</html>