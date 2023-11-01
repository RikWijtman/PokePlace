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
    <h1>Pokepedia</h1>

    <form action="<?php echo e(route('search.index')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div>
            <label for="search">Search: </label>
            <input type="text" id="search" name="search">
        </div>
        <div>
            <label for="option">Option: </label>
            <select name="option" id="option">
                <option value="name">Name</option>
                <option value="type1">Type1</option>
                <option value="type2">Type2</option>
                <option value="rgn">Region</option>
            </select>
        </div>
    </form>

    <?php if($pokemons != null): ?>
        <?php $__currentLoopData = $pokemons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pokemon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($pokemon->published == 1): ?>
            <hr>
            <div>
                <?php if($pokemon->img != null): ?>
                    <img src="<?php echo e(asset($pokemon->img)); ?>" alt="img">
                <?php endif; ?>
                <?php if( $pokemon->name  != null): ?>
                <h2> <?php echo e($pokemon->name); ?></h2>
                    <?php endif; ?>
                <?php if($pokemon->type2 != null): ?>
                    <p>Type: <?php echo e($pokemon->type1); ?>/<?php echo e($pokemon->type2); ?></p>
                <?php endif; ?>
                <?php if($pokemon->type2 == null): ?>
                    <p>Type: <?php echo e($pokemon->type1); ?></p>
                <?php endif; ?>
                <?php if( $pokemon->rgn  != null): ?>
                <p>Region: <?php echo e($pokemon->rgn); ?></p>
                <?php endif; ?>
                    <?php if( $pokemon->des  != null): ?>
                <p>Description: <?php echo e($pokemon->des); ?></p>
                    <?php endif; ?>
                    <p>Owner: <?php echo e($pokemon->owner); ?></p>
                <?php if($pokemon->owner == auth()->user()->username || auth()->user()->adminkey == 1): ?>
                    <form action="<?php echo e(route('update.index', $pokemon->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <button>Edit</button>
                    </form>
                    <form action="<?php echo e(route('delete.index', $pokemon->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <button>Delete</button>
                    </form>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <p>It's very empty here</p>
    <?php endif; ?>
</body>
</html>
<?php /**PATH C:\Users\rikwi\PokePlace\resources\views/pokemon/index.blade.php ENDPATH**/ ?>