

<?php $__env->startSection('title', 'Sign Up'); ?>

<?php $__env->startSection('head-extra'); ?>
    <!-- meta tag stores the CSRF token that Laravel generates -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<style>
    input::placeholder {
        font-size: 16px;
        font-family: "Times New Roman", Times, serif;
    }
</style>
<div class="page">

    <form class="form-up"  id="signUpForm" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <h1 style="text-align: center;margin-top: 0;"> <?php echo e(__('registration_form.WELCOME')); ?> </h1>
        <h1 style="text-align: center;margin-top: 0;"> <?php echo e(__('registration_form.SIGNUP')); ?> </h1>


        <div>
            <label for="FullName" > <?php echo e(__('registration_form.FULLNAME')); ?> </label>
            <input type="text" id="FullName" name="FullName" class="input" required onkeyup="Valid()" placeholder="<?php echo e(__('registration_form.NAME_PLACEHOLDER')); ?>">
            <div id="full_nameAlert" class="alert alert-danger w-100 mt-2 d-none">
                <?php echo e(__('registration_form.NAME_ERR')); ?>

            </div>
        </div>

        <div>
            <label for="signUpName"> <?php echo e(__('registration_form.USERNAME')); ?> </label>
            <input type="text" id="signUpName" name="signUpName" class="input" required onkeyup="Valid()" placeholder="<?php echo e(__('registration_form.USERNAME_PLACEHOLDER')); ?>">
            <div id="user_nameAlert" class="alert alert-danger w-100 mt-2 d-none">
                <?php echo e(__('registration_form.USERNAME_ERR')); ?>

            </div>

            <div>
                <label for="phone"> <?php echo e(__('registration_form.PHONE')); ?> </label>
                <input type="tel" id="phone" name="phone" class="input" required onkeyup="Valid()" placeholder="<?php echo e(__('registration_form.PHONE_PLACEHOLDER')); ?>">
                <div id="phoneAlert" class="alert alert-danger w-100 mt-2 d-none">
                    <?php echo e(__('registration_form.PHONE_ERR')); ?>

                </div>
            </div>

            <div>
                <label for="countryCode"></label>
                <label for="whatsapp"> <?php echo e(__('registration_form.WHATSAPP_NUMBER')); ?> </label>
                <div>
                    <select id="countryCode" name="whatsappCountryCode" class="input" required>
                        <option value="+20" selected>🇪🇬 +20 (<?php echo e(__('registration_form.EGYPT')); ?>)</option>
                        <option value="+1">🇺🇸 +1 (<?php echo e(__('registration_form.USA')); ?>)</option>
                        <option value="+44">🇬🇧 +44 (<?php echo e(__('registration_form.UK')); ?>)</option>
                        <option value="+971">🇦🇪 +971 (<?php echo e(__('registration_form.UAE')); ?>)</option>
                        <option value="+91">🇮🇳 +91 (<?php echo e(__('registration_form.INDIA')); ?>)</option>
                    </select>

                    <input type="tel" id="whatsapp" name="whatsapp" class="input" required onkeyup="Valid()" placeholder="<?php echo e(__('registration_form.WHATSAPP_PLACEHOLDER')); ?>">
                </div>
                <small id="whatsappPreview" class="text-muted"></small>
                <div id="whatsup_numberAlert" class="alert alert-danger w-100 mt-2 d-none">
                    <?php echo e(__('registration_form.WHATSAPP_ERR')); ?>

                </div>

            </div>
            <button type ="button" id="checkWhatsApp" ><?php echo e(__('registration_form.CHECK_WHATSAPP')); ?></button>
            
        </div>

        <div>
            <label for="address"> <?php echo e(__('registration_form.ADDRESS')); ?> </label>
            <input type="text" id="address" name="address" class="input" onkeyup="Valid()" placeholder="<?php echo e(__('registration_form.ADDRESS_PLACEHOLDER')); ?>">
        </div>

        <div>
            <label for="signUpEmail"> <?php echo e(__('registration_form.EMAIL')); ?> </label>
            <input type="email" id="signUpEmail" name="signUpEmail" class="input" required onkeyup="Valid()" placeholder="<?php echo e(__('registration_form.EMAIL_PLACEHOLDER')); ?>">
        </div>

        <div id="emailAlert" class="alert alert-danger w-100 mt-2 d-none">
            <?php echo e(__('registration_form.EMAIL_ERR')); ?>

       
        </div>

        <label for="signUpPassword"> <?php echo e(__('registration_form.PASSWORD')); ?> </label>
        <input type="password" id="signUpPassword" name="signUpPassword" class="input" required onkeyup="Valid()" placeholder="<?php echo e(__('registration_form.PASSWORD_PLACEHOLDER')); ?>">
        <div id="passwordAlert" class="alert alert-danger w-100 mt-2 d-none">
            <?php echo e(__('registration_form.PASSWORD_ERR')); ?>

        </div>

        <label for="signUpRePassword"> <?php echo e(__('registration_form.CONFIRM_PASSWORD')); ?> </label>
        <input type="password" id="signUpRePassword" name="signUpRePassword" class="input" required onkeyup="Valid()" placeholder="<?php echo e(__('registration_form.CONFIRM_PASSWORD_PLACEHOLDER')); ?>">
        <div id="confirm_passwordAlert" class="alert alert-danger w-100 mt-2 d-none">
            <?php echo e(__('registration_form.CONFIRM_PASSWORD_ERR')); ?>

        </div>

        <div>
            <label for="userImage"> <?php echo e(__('registration_form.UPLOAD_IMG')); ?> </label>
            <input type="file" id="userImage" name="userImage" class="input" required accept="image/*" onchange="Valid()">
            <div id="student_imgAlert" class="alert alert-danger w-100 mt-2 d-none">
                <?php echo e(__('registration_form.UPLOAD_ERR')); ?>

            </div>
        </div>
        <button id="signUpButton" type="submit"> <?php echo e(__('registration_form.REGISTER')); ?> </button>

        <div class="register-link">
            <p style="margin-bottom: 0;"><?php echo e(__('registration_form.HAVE_ACCOUNT')); ?> <a href=""><?php echo e(__('registration_form.LOGIN')); ?></a></p>
            <div id="alert"></div>
        </div>
    </form>
</div>

<script src="<?php echo e(asset ('js/validations.js')); ?>"></script>
<script src="<?php echo e(asset ('js/api_ops.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user\Downloads\Web-Laravel\IS333_Web-based-laravel_User-Registration-webpage\resources\views/users/register.blade.php ENDPATH**/ ?>