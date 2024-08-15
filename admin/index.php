<?php

include_once "../includes/functions.php";

if (!isset($_SESSION['user'])) {
    redirect("login.php");
}

if (isset($_POST['save'])) {
    unset($_POST['save']);

    $saved = insert("feedbacks", $_POST);
}

if (isset($_POST['edit'])) {
    unset($_POST['edit']);

    $updated = update("feedbacks", $_POST, "id", $_POST['id']);
}

if (isset($_POST['delete'])) {
    $deleted = destroy("feedbacks", "id", $_POST['delete']);
}

$profile = findById("users", $_SESSION['user']->id);
$user = $_SESSION['user'];

$feedbacks = findAll("feedbacks");

?>

<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
    data-assets-path="./assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>CPB - ADMIN</title>

    <meta name="description" content />


    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

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


                    <li class="menu-item active">
                        <a href="index.php" class="menu-link ">
                            <i class="menu-icon tf-icons bx bx-copy"></i>
                            <div>Feedbacks</div>
                        </a>
                    </li>
                    <li class="menu-item  ">
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
                        <h4 class="pt-3 pb-2">Add Feeback</h4>
                        <div class="card">
                            <h5 class="card-header mb-0 pb-2 text-primary mb-3">Feedback</h5>
                            <div class="card-body">
                                <?php if (isset($saved)): ?>
                                    <p class="text-success">Feedback saved successfully</p>
                                <?php endif; ?>
                                <form method="post">
                                    <div class="row">
                                        <div class="col-lg-12 mb-3">
                                            <label for="text">Feedback Text</label><br>
                                            <textarea name="feedback" id="text" class="form-control"></textarea>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" class="form-control" id="name" />
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="location">Location</label>
                                            <input type="text" name="location" class="form-control" id="location" />
                                        </div>
                                    </div>

                                    <div class="add-more-make">

                                    </div>
                                    <div class="d-flex align-items-center justify-content-end mt-4">
                                        <!-- <button type="button" class="btn btn-outline-primary me-2 add-more-make-btn"
                                            style="font-weight: 500;">Add
                                            More</button> -->
                                        <button type="submit" name="save" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- <hr class="my-5" /> -->
                        <div class="card px-4 pb-4 mt-5">
                            <div
                                class="d-flex justify-content-between align-items-md-center align-items-start flex-md-row flex-column ">
                                <h5 class="card-header px-0 pb-3">Feedback
                                    List</h5>
                            </div>
                            <?php if (isset($updated)): ?>
                                <p class="text-success">Feedback updated successfully</p>
                            <?php endif; ?>
                            <?php if (isset($deleted)): ?>
                                <p class="text-success">Feedback deleted successfully</p>
                            <?php endif; ?>
                            <div class=" datatable-responsive">
                                <table id="example" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Feeback Text</th>
                                            <th>Name</th>
                                            <th>Location</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($feedbacks as $count => $feedback): ?>
                                            <tr>
                                                <td><?php echo ++$count; ?></td>
                                                <td class="feedback-text"><?php echo $feedback->feedback; ?>
                                                <td class="feedback-name"><?php echo $feedback->name; ?></td>
                                                <td class="feedback-location"><?php echo $feedback->location ?></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="edit-data" data-id="<?php echo $feedback->id ?>">Edit</button>
                                                        <button class="delete-data" data-bs-toggle="modal" data-bs-target="#delete" type="button" data-id="<?php echo $feedback->id ?>">Delete</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <!--/ Striped Rows -->

                        <div class="content-backdrop fade"></div>
                    </div>
                </div>
            </div>

            <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        <!-- make template -->
        <script type="text/template" id="form_template">
            <div class="mt-3 make-div">
        <div class="d-flex justify-content-between">
            <h5 class="card-header mb-0 pb-2 text-primary mb-3 ps-0 ms-0">Feedback</h5>
            <button class=" p-0 border-0 delete-make" style="margin-top: -7px; background-color: transparent;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                  </svg>
            </button>
           </div>
        <div class="row">
            <div class="col-lg-12 mb-3">
                <label for="text">Feedback Text</label><br>
                <textarea name="" id="text" class="form-control"></textarea>
            </div>
            <div class="col-lg-6">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" />
            </div>
            <div class="col-lg-6">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" />
            </div>
          
            
        </div>
       </div>
</script>

        <!-- Edit -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Image</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="post" id="edit-form">
                        <div class="modal-body ">
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <label for="text">Feedback Text</label><br>
                                    <textarea name="feedback" id="text" class="form-control" value=""></textarea>
                                    <input type="hidden" name="id" required />
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" />
                                </div>
                                <div class="col-lg-12">
                                    <label for="location">Location</label>
                                    <input type="text" name="location" class="form-control" id="location" />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button name="edit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Delete Modal -->
        <div class="modal fade" id="delete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header p-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="post" id="delete-form">
                        <div class="modal-body">
                            <div class="mb-3">
                                <h2 class="modal-title text-center" style="font-size: 26px; font-weight: 600; color:red;">
                                    Are You Sure?</h2>
                                <div class="d-flex justify-content-center mt-4">
                                    <img src="./assets/img/undraw_Throw_away_re_x60k.png" alt class="img-fluid mx-auto" width="200">
                                </div>
                                <p class="text-center mb-0 pb-0 mt-3" style="font-size: 16px; font-weight: 500; color:gray;">You
                                    want to delete?</p>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center ">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                            <button name="delete" id="id" value="" class="btn btn-primary">Yes</button>
                        </div>
                    </form>
                </div>
            </div>
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
        <script>
            // new DataTable('#example');
            $(document).ready(function() {
                $('#example').DataTable({
                    "paging": false,
                    "info": false
                });

            });
        </script>
        <script>
            // jQuery document ready function
            $(document).ready(function() {
                // Add click event handler to delete-make button
                $('.delete-make').on('click', function() {
                    // Find the closest make-div and remove it
                    $(this).closest('.make-div').remove();
                });
            });
        </script>

        <script>
            // jQuery document ready function
            $(document).ready(function() {
                // Add click event handler to add-more-make-btn button
                $('.add-more-make-btn').on('click', function() {
                    // Clone the template and append it to the add-more-make div
                    var templateClone = $('#form_template').html();
                    $('.add-more-make').append(templateClone);
                });

                // Add click event handler to delete-make button inside the add-more-make div
                $(document).on('click', '.delete-make', function() {
                    // Remove the closest make-div
                    $(this).closest('.make-div').remove();
                });


            });
        </script>
        <script>
            $(".edit-data").click(function() {
                $("#edit-form").find("input[name='id']").val($(this).data("id"));
                $("#edit-form").find("textarea[name='feedback']").val($(this).closest("tr").find(".feedback-text").text());
                $("#edit-form").find("input[name='name']").val($(this).closest("tr").find(".feedback-name").text());
                $("#edit-form").find("input[name='location']").val($(this).closest("tr").find(".feedback-location").text());
            })

            $(".delete-data").click(function() {
                $("#delete-form").find("#id").val($(this).data("id"));
            })
        </script>
</body>

</html>