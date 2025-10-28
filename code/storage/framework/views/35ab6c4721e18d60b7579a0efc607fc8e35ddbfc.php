<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo e(url('assets/images/logo/favicon.png')); ?>" type="image/x-icon">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(url('assets/css/main/app.css')); ?>">
    <link rel="stylesheet" href=" <?php echo e(url('assets/css/pages/auth.css')); ?>">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div id="auth" class="login_bg">

        <div class="row justify-content-end login-box">
            <div class="col-lg-4 col-12 card">
                <div id="auth-center">

                    <div class="auth-logo mb-5">

                        <a href="<?php echo e(url('')); ?>"><img src="<?php echo e(url('assets/images/logo/logo.png')); ?>"
                                alt="Logo"></a>
                    </div>
                    <div class="center mtop-120">
                        <div class='login_heading'>
                            <h3>
                                Hi, Welcome Back!
                            </h3>
                            <p>
                                Enter your details sign in to your account.
                            </p>
                        </div>

                        <div class="pt-4">
                            <form method="POST" action="<?php echo e(route('login')); ?>">
                                
                                <?php echo csrf_field(); ?>

                                <div class="form-group position-relative form-floating mb-4">
                                    <input id="floatingInput" type="email" placeholder="Email"
                                        class="form-control form-input <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email"
                                        autofocus>
                                    <label for="floatingInput">Email address</label>

                                </div>

                                <div class="form-group position-relative form-floating has-icon-right mb-4"
                                    id="pwd">
                                    <input id="floatingInput" type="password" placeholder="Password"
                                        class="form-control form-input <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="password" required autocomplete="current-password">
                                    <label for="floatingInput">Password</label>

                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                    <div class="form-control-icon icon-right">
                                        <i class="bi bi-eye" id='toggle_pass'></i>
                                    </div>
                                </div>

                                <button class="btn btn-primary btn-block btn-sm shadow-lg mt-3 login_btn">Log
                                    in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <script>
        // Set the CSS custom property using JavaScript
        var primarycolor = "<?php echo e(env('PRIMARY_COLOR')); ?>";

        document.documentElement.style.setProperty('--bs-primary', primarycolor);

        var rgbaprimarycolor = "<?php echo e(env('PRIMARY_RGBA_COLOR')); ?>";

        document.documentElement.style.setProperty('--primary-rgba', rgbaprimarycolor);
    </script>
    <script>
        $('#pwd').click(function() {
            console.log('click');
            $('#password').focus();
        });
        $("#toggle_pass").click(function() {

            $(this).toggleClass("bi bi-eye bi-eye-slash");
            var input = $('[name="password"]');
            if (input.attr("type") == "password") {
                input.attr("type", "text");

            } else {
                input.attr("type", "password");
            }
        });
    </script>
</body>

</html>
<?php /**PATH /home/wrteam-dev/ebroker/resources/views/auth/login.blade.php ENDPATH**/ ?>