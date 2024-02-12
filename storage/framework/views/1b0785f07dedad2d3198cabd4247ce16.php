<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>




<h1> Tanuloi adatok lista </h1>
<h1>  <a href=<?php echo e(url('/tanulok/create')); ?>>Új tanulok felvétele </a></h1>
<ul>
<?php $__currentLoopData = $adatok; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $egyadat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li>
    <?php echo e($egyadat->omazonosito); ?>

    <?php echo e($egyadat->nev); ?>

    <a href=<?php echo e(url('/tanulok/'.$egyadat->id)); ?>> Részletek </a>
    <a href=<?php echo e(url('/tanulok/'.$egyadat->id.'/edit')); ?>> Szerkesztés</a>
    <form method="POST" action="<?php echo e(url('tanulok/'.$egyadat->id)); ?>">
        <?php echo e(method_field('DELETE')); ?>

        <?php echo e(csrf_field()); ?>

        <button type="submit"> Tőrlés</button>
    </form>
</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</ul>




</body>
</html><?php /**PATH C:\Users\gresu\Tanulo\resources\views/tanuloiadatok.blade.php ENDPATH**/ ?>