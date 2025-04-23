<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf_token" content="<?php echo e(csrf_token()); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Generate Encryption Key - Expense Tracker</title>

    <!-- FavIcon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(URL('assets/img/logo.png')); ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(URL('assets/bootstrap/bootstrap.min.css')); ?>">
    <!-- Cutom CSS -->
    <link rel="stylesheet" href="<?php echo e(URL('assets/css/style.css')); ?>">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php echo e(URL('assets/fontawesome/all.min.css')); ?>">
    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="<?php echo e(URL('assets/sweet_alert/sweetalert2.min.css')); ?>">

    <!-- Template Assets Style CSS -->
    <link rel="stylesheet" href="<?php echo e(URL('assets/template_assets/css/style.css')); ?>">
</head>

<body class="account-page">

    <div class="main-wrapper">
        <div class="account-content">
            <div class="container-fluid">

                <div class="account-logo">
                    <a href="<?php echo e(URL('/')); ?>"><img src="<?php echo e(URL('assets/img/logo.png')); ?>" alt="Expense Tracker Logo" class="img-fluid"></a>
                </div>

                <div class="account-box">
                    <div class="account-wrapper">
                        <h3 class="account-title text-dark">Welcome,</h3>
                        <p class="account-subtitle">Please <?php echo e(Session::get('normalUserFsLgin') == 1 ? 'Generate' : 'Enter'); ?> Your Encryption Key To Continue.</p>

                        <form action="javascript:void(0);">
                            <div class="form-group">
                                <div class="position-relative">
                                    <input class="form-control" type="text" id="generatedKey" name="generatedKey" placeholder="Enter Your Encryption Key" autocomplete="off">
                                    <?php if(Session::get('normalUserFsLgin') == 1): ?>
                                    <button type="button" id="generate-key" data-bs-toggle="tooltip" data-bs-title="Click to generate encryption key"> <span class="fas fa-refresh"></span> </button>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div id="encryptionKey-loader" class="my-2 d-none loader-body">
                                <img src="<?php echo e(URL('assets/img/custom_loader.svg')); ?>" class="loader-img" alt="">
                            </div>
                            <div id="encryptionKey-success" class="mt-2 d-none alert alert-success"></div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary account-btn" id="saveEncryptionKeyBtn" name="saveEncryptionKeyBtn" type="submit"><?php echo e(Session::get('normalUserFsLgin') == 1 ? 'Set Encryption Key' : 'Submit'); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="<?php echo e(URL('/assets/bootstrap/bootstrap.bundle.min.js')); ?>"></script>
    <!-- Font Awesome JS -->
    <script src="<?php echo e(URL('/assets/fontawesome/all.min.js')); ?>"></script>
    <!-- jQuery File -->
    <script src="<?php echo e(URL('/assets/js/jquery_3.6.3.min.js')); ?>"></script>
    <!-- Custom JavaScript -->
    <script src="<?php echo e(URL('/assets/js/keyGenTool.js')); ?>"></script>
    <!-- Sweet Alert Js -->
    <script src="<?php echo e(URL('/assets/sweet_alert/sweetalert2.min.js')); ?>"></script>

    <!-- Template Assets App Js -->
    <script src="<?php echo e(URL('assets/template_assets/js/app.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\LENOVO\OneDrive\Desktop\laravel\new_app\Expense-Tracker-main\expt_lvl\resources\views/encryption_key.blade.php ENDPATH**/ ?>