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
<h1>register</h1>
<form method="POST" action="<?php echo e(route('updatedProfile.index')); ?>">
    <?php echo csrf_field(); ?>
    <div>
        <label for="username"> Username </label>
        <input class="" type="text" name="username" id="username" value="<?php echo e(auth()->user()->username); ?>">
        <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div>
        <label for="email"> E-mail </label>
        <input class="" type="email" name="email" id="email" value="<?php echo e(auth()->user()->email); ?>">
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div>
        <button type="submit"> Submit </button>
    </div>
</form>

</body>
</html>
<?php /**PATH C:\Users\rikwi\PokePlace\resources\views/updateProfile.blade.php ENDPATH**/ ?>