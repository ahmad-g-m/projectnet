

<form action="savereguser" method="post">
    <?php echo csrf_field(); ?>

    name : <input type="text" name="name">
    age : <input type="text" name="age">
    email : <input type="text" name="email">
    password : <input type="text" name="password">
    

    <input type="submit" value="save" name="btn">
</form>
<?php /**PATH E:\wamp64\www\projectnet\projectnet\resources\views/user/formRegUser.blade.php ENDPATH**/ ?>