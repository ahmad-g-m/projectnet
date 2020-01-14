


<form action="logineduser" method="post">
    {!!csrf_field()!!}
    email : <input type="text" name="email">
    password : <input type="text" name="password">
    <br>
    <input type="submit" name="btn" value="login">
</form>