<?php $__env->startComponent('mail::message'); ?>
# Hello <?php echo e($user->name); ?>


Thank you for create an account. Please verify your email using this button:

<?php $__env->startComponent('mail::button', ['url' => route('verify', $user->verification_token)]); ?>
Verify Account
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?><?php /**PATH C:\xampp\htdocs\zimarket\resources\views/emails/welcome.blade.php ENDPATH**/ ?>