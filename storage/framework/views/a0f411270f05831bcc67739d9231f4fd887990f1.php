
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<table style='margin-left:5px'>   
    <tr style='background-color:#563d7c;color:white'>  
        <td style='width:200px'>ID</td>
        <td style='width:200px'>Name</td>
        <td style='width:600px'>Email</td>
        <td style='width:200px'>Action</td>
       
</tr>
<?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr>
       <td> <?php echo e($user['id']); ?> </td>
       <td ><a style='color:#563d7c' href="<?php echo e(route('users.show',$user['id'])); ?> " > <?php echo e($user['name']); ?></a></td>
       <td><?php echo e($user['email']); ?></td>
       <td><table>
        <tr>
            <td style='width:80px'><form action=" <?php echo e(route('users.edit',$user['id'])); ?>" method='GET'>
         
            <?php echo csrf_field(); ?>
              
             <!-- <input hidden value= " <?php echo e($user['id']); ?> " name='myid'>    -->
            <button type='submit' style='border:none;background-color:#563d7c80;border-radius:5px'>Edit</button></form></td>
            <td><form action=" <?php echo e(route('users.destroy',$user['id'])); ?>" method='POST'>
                <?php echo method_field('Delete'); ?>
            <?php echo csrf_field(); ?>

                 <button type='submit' style='border:none;background-color:#563d7c;border-radius:5px;color:white'>Delete</button></form></td>
            
</tr>      
        </table>
       </td>
</tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravelProjects\project_two\resources\views/users/index.blade.php ENDPATH**/ ?>