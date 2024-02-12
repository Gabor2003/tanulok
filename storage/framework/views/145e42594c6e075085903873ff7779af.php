<!DOCTYPE html>
<html>
<body>

<h2>Adatok szerkesztes</h2>

<form action="<?php echo e(url('tanulok/'.$adatok->id)); ?>" method="POST">
  <?php echo csrf_field(); ?>

  <?php echo method_field("PATCH"); ?>
  <label for="omazonosito">OM azonosító:</label><br>
  <input type="number" id="omazonosito" name="omazonosito" value="<?php echo e($adatok->omazonosito); ?>" ><br>

  <label for="nev">Név</label><br>
  <input type="text" id="nev" name="nev" value="<?php echo e($adatok->nev); ?>" ><br><br>

  <label for="lahely">Lakhely:</label><br>
  <input type="text" id="lahely" name="lahely"value="<?php echo e($adatok->lahely); ?>" ><br><br>

  <label for="szulido">Születési idő</label><br>
  <input type="date" id="szulido" name="szulido" value="<?php echo e($adatok->szulido); ?>"><br><br>

  <input type="submit" value="Rögzit">
</form> 

</body>
</html><?php /**PATH C:\Users\gresu\Tanulo\resources\views/edit.blade.php ENDPATH**/ ?>