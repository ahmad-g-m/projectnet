<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <form action="<?php echo e(url('dashbordadmin/edit/'.$id)); ?>" method="post">
            <?php echo csrf_field(); ?>

            <input type="text" name="name" id="name" value="<?php echo e($user->name); ?>">
            <input type="text" name="age" id="name" value="<?php echo e($user->age); ?>">
            <input type="text" name="email" id="name" value="<?php echo e($user->email); ?>">
            <input type="text" name="password" id="name" value="<?php echo e($user->password); ?>">
            <input type="submit" value="edit" name="editBtn" id="editBtn">
        </form>
        <form action="<?php echo e(route('dashbordadmin')); ?>" method="get">
            <input type="submit" value="back to dashbord" name="backToDashbord" id="backToDashbord">
        </form>
        <?php
        if(isset($success)){
            ?>
        <h1 style="color:green">success...</h1>
            <?php
        }
        ?>
   
</body>
</html><?php /**PATH E:\wamp64\www\projectnet\projectnet\resources\views/admin/adminEditUser.blade.php ENDPATH**/ ?>