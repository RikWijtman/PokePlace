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
    <a href="/">return</a>
    <h1><?php echo e(auth()->user()->username); ?></h1>
    <p><?php echo e(auth()->user()->name); ?></p>
    <p><?php echo e(auth()->user()->email); ?></p>

    <h2>Your pokemon:</h2>
    <?php if($pokemons != null): ?>
        <?php $__currentLoopData = $pokemons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pokemon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <hr>
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
                    <form action="<?php echo e(route('update.index', $pokemon->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <button>Edit</button>
                    </form>
                    <form action="<?php echo e(route('delete.index', $pokemon->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <button>Delete</button>
                    </form>
                    <?php if($pokemon->published == 0): ?>
                        <form action="<?php echo e(route('publish.index', $pokemon->id,)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <button>Publish</button>
                        </form>
                    <?php else: ?>
                        <form action="<?php echo e(route('unpublish.index', $pokemon->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <button>Unpublish</button>
                        </form>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <p>It's very empty here</p>
    <?php endif; ?>
</body>
</html>
<?php /**PATH C:\Users\rikwi\PokePlace\resources\views/profile.blade.php ENDPATH**/ ?>