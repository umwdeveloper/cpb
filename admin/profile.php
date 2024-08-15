<?php

include_once "../includes/functions.php";

if (!isset($_SESSION['user'])) {
    redirect("login.php");
}

$msg = "";

if (isset($_POST['submit'])) {
    unset($_POST['submit']);

    if (empty($_POST['password'])) {
        unset($_POST['password']);
    } else {
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT);
    }

    update("users", $_POST, "id", $_SESSION['user']->id);

    $user = $_SESSION['user'];
    $user->name = $_POST['name'];
    $user->email = $_POST['email'];
    $_SESSION['user'] = $user;

    $msg = json_decode(json_encode(["status" => "success", "msg" => "Profile updated successfully!"]));
}

$profile = findById("users", $_SESSION['user']->id);
$user = $_SESSION['user'];

?>

<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="./assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>SD Creative | Admin</title>

    <meta name="description" content />


    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="./assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="./assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="./assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="./assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <!-- Page CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Helpers -->
    <script src="./assets/vendor/js/helpers.js"></script>
    <script src="./assets/js/config.js"></script>
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="d-flex  justify-content-center mt-3 mb-3">
                    <a href="index.html" class=" px-2 py-2">
                        <img src="./assets/img/logo.png" alt class=" " height="100">
                    </a>
                </div>
                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <li class="menu-item ">
                        <a href="index.php" class="menu-link ">
                            <i class="menu-icon tf-icons bx bx-copy"></i>
                            <div>Feedbacks</div>
                        </a>
                    </li>
                    <li class="menu-item  active">
                        <a href="profile.php" class="menu-link ">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div>Profile</div>
                        </a>

                    </li>

                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <h4 class="pt-3 ">Consumer Protection Bureau</h4>
                        <ul class="navbar-nav flex-row align-items-center ms-auto">

                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="profile.php"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="./assets/img/user.png" alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="profile.php">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="./assets/img/user.png" alt class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-medium d-block"><?php echo $user->name ?></span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="profile.php">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="?a=logout">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log
                                                Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="pt-3 pb-2">Profile</h4>
                        <div class="card">
                            <h5 class="card-header mb-0 pb-2 text-primary mb-3">Edit Profile</h5>
                            <div class="card-body">

                                <?php if (!empty($msg) && $msg->status == "error") : ?>
                                    <small class="text-danger"><?php echo $msg->msg; ?></small>
                                <?php elseif (!empty($msg) && $msg->status == "success") : ?>
                                    <small class="text-success"><?php echo $msg->msg; ?></small>
                                <?php endif; ?>

                                <form method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="">Name</label>
                                                <input required type="text" name="name" value="<?php echo $profile->name; ?>" class="form-control" id="basic-default-fullname" />
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="">Email</label>
                                                <input required type="text" name="email" value="<?php echo $profile->email; ?>" class="form-control" id="basic-default-fullname" />
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="">Password <small>(Leave empty to not change password)</small></label>
                                                <input type="password" name="password" class="form-control" id="basic-default-fullname" />
                                            </div>
                                        </div>

                                    </div>

                                    <div class="add-more-make">

                                    </div>
                                    <div class="d-flex align-items-center justify-content-end mt-4">
                                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="content-backdrop fade"></div>
                    </div>
                </div>
            </div>

            <div class="layout-overlay layout-menu-toggle"></div>
        </div>


        <script src="./assets/vendor/libs/jquery/jquery.js"></script>
        <script src="./assets/vendor/libs/popper/popper.js"></script>
        <script src="./assets/vendor/js/bootstrap.js"></script>
        <script src="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="./assets/vendor/js/menu.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="./assets/js/main.js"></script>
        <script async defer src="https://buttons.github.io/buttons.js"></script>

        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
</body>

</html>