
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#subbtn').click(function(){
                $("#show").html("<font color = blue> waite for...</font>");
                var i1 = $("#txt1").val();
                var okk = "ok";
                $.get("http://127.0.0.1:8000/dashbordadmin",{p1:i1 , ok1:okk} , function(data){
                    $("#show").html(data);
                });
                return false;
            });
        });
    </script> -->
    <!-- <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
    
    <title>dashbord</title>
</head>
<body>
    <div>
        this is admin dashbord <br>
        <?php 
        // dd($idadmin);
        $rr = Request();
            if(isset($rr->input()->ok1)){
               echo($rr->input()->p1);
            }
        ?>
      
        <!-- <form action="http://127.0.0.1:8000/dashbordadmin" method="GET" name="form1" id="form1"> -->
            <!-- <div style="color:red" id="show" name="show"></div>
            <input type="text" name="txt1" id="txt1">
            <input type="submit" name="subbtn" id="subbtn" value="send"> -->
        <!-- </form> -->
        <br>
       <form action="http://127.0.0.1:8000/dashbordadmin/profile/<?php echo e($idadmin); ?>" method="get">   <!-- leave button -->
            <input type="submit" name="profileBtn" value="profile">
        </form>
        <hr>
        <br>
       <form action="<?php echo e(route('loginadmin')); ?>" method="get">   <!-- leave button -->
            <input type="submit" name="leavebtn" value="leave">
        </form>
        <hr>
    </div>
    <div><!--show user-->
        <form action="<?php echo e(route('showUsers')); ?>" method="get">
            <button type="submit" name="showUsersBtn">show Users</button>
        </form>
        <hr>
    </div><!-- Div show user-->
   
        <?php 
        //show user
        use Illuminate\Support\Facades\Storage;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;

use Illuminate\Http\Request;

if(isset($showuser)){
                unset($showOtherUsers);
                unset($showuser);
        ?>
        <div><!--Div action for show user -->
        <table style="border: 2px solid black ;">
        <tr style="border-bottom: 2px solid black ;">
            <th>row</th>
            <th>name</th>
            <th>age</th>
            <th>email</th>
            <th>password</th>
            <th>create-at</th>
            <th>edit-at</th>
            <th style="color: red">delete</th>
            <th style="color: green">edit</th>
        </tr>
        <?php
                echo('hi show : ' . "<br>");
                echo("All numbers user : ". $count . "<br><br>");
                $i = 1;
                foreach($users as $u){
            echo("<tr style= 'border : 2px solid black'>");
                    echo("<td style = 'border : 2px solid black;' >" . $i . "</td>");
                    echo("<td style = 'border : 2px solid black;'>" . $u->name . "</td>");
                    echo("<td style = 'border : 2px solid black;'>" . $u->age . "</td>");
                    echo("<td style = 'border : 2px solid black;'>" . $u->email . "</td>");
                    echo("<td style = 'border : 2px solid black;'>" . $u->password . "</td>");
                    echo("<td style = 'border : 2px solid black;'>" . $u->created_at . "</td>");
                    echo("<td style = 'border : 2px solid black;'>" . $u->updated_at . "</td>");
                    echo("<td style = 'border : 2px solid black;'>". "<a href=". url('dashbordadmin/delete/' . $u->id) .">delete</a>" ."</td>");
                    echo("<td style = 'border : 2px solid black;'>". "<a href=". url('dashbordadmin/edit/' . $u->id) .">edit</a>" ."</td>");
            echo("</tr>");
            $i++;
        ?>
        
        <?php
                }
                // dd($users->where('id' , '>=' , 0)->first()->name);
            }
        ?>
    </table>
    </div><!--Div action for show user -->
    <hr>
            
    <div><!--Div new post -->
        <form  method="post" action="<?php echo e(route('newpost')); ?>">
        <?php echo csrf_field(); ?>

            <input type="submit" name="newPostBtn" id="newPostBtn" value="newPost">
        </form>
    </div>
    <hr>
    <div><!--Div edit post -->
    <h3> edit or delete </h3>
        <form  method="get" action="<?php echo e(route('editdeletepost')); ?>">
            <input type="submit" name="editOrDeletePostCarsBtn" id="editOrDeletePostBtn" value="cars">
            <input type="submit" name="editOrDeletePostTruckBtn" id="editOrDeletePostBtn" value="trucks">
            <input type="submit" name="editOrDeletePostMotorBtn" id="editOrDeletePostBtn" value="motorcycles">
        </form>
    </div>
    <?php
        
        // if(isset($_GET['newPostBtn'])){
        //    $rr = Request();
        //     // dd($rr->file('upFileFromAdmin')->store('photos'));
        //     $path = Storage::putFile('photos', $rr->file('upFileFromAdmin'));
        // }

        
    ?>

</body>
</html>

<?php /**PATH E:\wamp64\www\projectnet\projectnet\resources\views/admin/admindashbord.blade.php ENDPATH**/ ?>