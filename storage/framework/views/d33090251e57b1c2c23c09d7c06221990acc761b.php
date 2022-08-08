<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo e(route('posts.store')); ?>" method="POST">
    <input type="text" name="id" id="">
    <input type="text" name="title" id="">
    <input type="text" name="body" id="">
    <input type="text" name="user_id" id="">

        <button type="submit">Save</button>
    </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravelProjects\project_two\resources\views/posts/create.blade.php ENDPATH**/ ?>