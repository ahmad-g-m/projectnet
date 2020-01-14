

<form action="saveregadmin" method="post">
    {!!csrf_field()!!}
    name : <input type="text" name="name">
    age : <input type="text" name="age">
    email : <input type="text" name="email">
    password : <input type="text" name="password">

    <input type="submit" value="save" name="btn">
</form>
