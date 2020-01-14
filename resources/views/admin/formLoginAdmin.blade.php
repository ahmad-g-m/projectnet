


<form action="loginedadmin" method="post">
    {!!csrf_field()!!}
    email : <input type="text" name="email">
    password : <input type="text" name="password">
    <br>
    <input type="submit" name="btnlog" value="login">
</form>