
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>dashbord</title>
</head>
<body>
    <div>
        this is dashbord <br>
       <form action="{{ route('loginadmin') }}" method="get">   <!-- leave button -->
            <input type="submit" name="leavebtn" value="leave">
        </form>
        <hr>
    </div>
    <div><!--show user-->
        <form action="{{route('showUsers')}}" method="POST">
        {!!csrf_field()!!}
            <button type="submit" name="showUsersBtn">show Users</button>
        </form>
        <hr>
    </div><!-- Div show user-->

        <?php 
        //show user

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
                    echo("<td style = 'border : 2px solid black;'>". "<a href=". url('dashbordadmin/delete' . $u->id) .">delete</a>" ."</td>");
                    echo("<td style = 'border : 2px solid black;'>". "<a href=". url('dashbordadmin/edit' . $u->id) .">edit</a>" ."</td>");
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
        <form  method="GET" action="{{route('dashbordAdmin')}}">
        
        <input type="submit" name="newPostBtn" value="newPost">
        </form>
    </div>
    <?php
        $req = new Request();
        if(isset($_GET['newPostBtn'])){
            echo("ho ho ho");
        }
        
    ?>

</body>
</html>

