<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>
</head>
<body  >
    <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <form style='margin:auto' action=" <?php echo e(route('users.store')); ?>" method='POST'>
    <?php echo csrf_field(); ?>
   
<div class="container">
    
    <div class="title"><p>Name</p></div>
    <div id="input"><input type="text" id="name" name='name' ></div>
        <br>
    <div class="title"><p>ID</p></div>
    <div id="input"><input type="text" id="id" name='id'  ></div>
        <br>
    <div class="title"><p>Email</p></div>
    <div id="input"><input type="text" name='email' ></div>
 
        <br>
   
    <br>
    <div class="btncontainer">
    <button type='submit' style="background-color: #563d7c;color:white;border:none;border-radius:25px;width:100px">Confirm   </button></div>
    </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravelProjects\project_two\resources\views/users/create.blade.php ENDPATH**/ ?>