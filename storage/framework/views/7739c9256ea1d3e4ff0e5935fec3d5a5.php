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
    <h1>Pokepedia</h1>
    <?php if($pokemon != null): ?>
        <?php $__currentLoopData = $pokemon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pokemons): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <?php if($pokemon->img != null): ?>
                    <img src="<?php echo e($pokemon->img); ?>" alt="img">
                <?php endif; ?>
                <h2> <?php echo e($pokemon->name); ?></h2>
                <?php if($pokemon->type2 != null): ?>
                    <p> <?php echo e($pokemon->type1); ?>/<?php echo e($pokemon->type2); ?></p>
                <?php endif; ?>
                <?php if($pokemon->type2 == null): ?>
                    <p> <?php echo e($pokemon->type1); ?></p>
                <?php endif; ?>
                <p> <?php echo e($pokemon->rgn); ?></p>
                <p> <?php echo e($pokemon->des); ?></p>
                <?php if($pokemon->owner == auth()->user()->username || auth()->user()->adminkey == 1): ?>
                    <button>Edit</button>
                    <form action="/view" method="post">
                        <?php echo csrf_field(); ?>
                        <button>Delete</button>
                    </form>
                <?php endif; ?>
                <hr>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <p>It's very empty here</p>
    <?php endif; ?>
</body>
</html>
<?php /**PATH C:\Users\rikwi\PokePlace\resources\views/index.blade.php ENDPATH**/ ?>
