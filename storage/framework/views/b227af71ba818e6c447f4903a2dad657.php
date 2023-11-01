<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="<?php echo e(route('pokemon.index')); ?>">return</a>
    <h1>Editing <?php echo e($pokemon->name); ?></h1>
    <form action="<?php echo e(route('updated.index', $pokemon->id)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div>
            <label for="name"> Name </label>
            <input class="" type="text" name="name" id="name" value="<?php echo e($pokemon->name); ?>" required>
        </div>

        <div>
            <label for="type1"> Type - 1 </label>
            <input class="" type="text" name="type1" id="type1" value="<?php echo e($pokemon->type1); ?>" required>
        </div>

        <div>
            <label for="type2"> Type - 2 </label>
            <input class="" type="text" name="type2" id="type2" value="<?php echo e($pokemon->type2); ?>">
        </div>

        <div>
            <label for="img"> Image </label>
            <input class="" type="file" name="img" id="img" value="<?php echo e($pokemon->img); ?>">
        </div>

        <div>
            <label for="rgn"> Region </label>
            <input class="" type="text" name="rgn" id="rgn" value="<?php echo e($pokemon->rgn); ?>">
        </div>

        <div>
            <label for="des"> Description </label>
            <input class="" type="text" name="des" id="des" value="<?php echo e($pokemon->des); ?>">
        </div>

        <button type="submit">Update</button>

    </form>
</body>
</html>
<?php /**PATH C:\Users\rikwi\PokePlace\resources\views/update.blade.php ENDPATH**/ ?>