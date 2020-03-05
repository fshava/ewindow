<?php $__env->startComponent('mail::message'); ?>
# Hello <?php echo e($user->name); ?>


You changed your email, so we need to verify this new address. Please use the button below: 

<?php $__env->startComponent('mail::button', ['url' => route('verify', $user->verification_token)]); ?>
Verify Account
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?><?php /**PATH C:\xampp\htdocs\zimarket\resources\views/emails/confirm.blade.php ENDPATH**/ ?>