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
    <h1>Welcome to PokePlace</h1>
    <?php if(auth()->guard()->guest()): ?>
        <a href="/register"> Register! </a>
        <a href="/login"> Login! </a>
    <?php else: ?>
        <p>Welcome back <?php echo e(auth()->user()->username); ?>!</p>
        <div>
            <a href="<?php echo e(route('create.index')); ?>"> Add your pokemon! </a>
        </div>
        <?php if(auth()->user()->valid == 1): ?>
        <div>
            <a href="<?php echo e(route('pokemon.index')); ?>"> View pokemon! </a>
        </div>
        <?php endif; ?>
        <div>
            <a href="<?php echo e(route('profile.index')); ?>"> Profile </a>
        </div>
        <form method="POST" action="<?php echo e(route('logout.index')); ?>">
            <?php echo csrf_field(); ?>
            <button>Logout</button>
        </form>


    <?php endif; ?>
</body>
</html>
<?php /**PATH C:\Users\rikwi\PokePlace\resources\views/welcome.blade.php ENDPATH**/ ?>