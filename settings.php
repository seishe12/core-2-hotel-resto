<?php
    require('inc/essentials.php');
    adminLogin();
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8" data-bs-theme="dark">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link rel="apple-touch-icon" sizes="180x180" href="image/ph-logo.webp">
    <link rel="icon" type="image/webp" sizes="32x32" href="image/ph-logo.webp">
    <link rel="icon" type="image/webp" sizes="16x16" href="image/ph-logo.webp">
    <style>
    .dashboard-heading {
        text-align: left;
        margin: 10px;
        background-color: white;
        padding: 10px;
        border-radius: 8px;
    }

    .dashboard-heading h3 {
        display: inline-block;
        margin: 0;
        font-size: 20px;
        font-weight: bold;
        position: relative;
        padding-left: 20px;
    }

    .dashboard-heading h3::before {
        content: "";
        position: absolute;
        left: 0;
        top: 50%;
        width: 5px;
        height: 30px;
        background-image: linear-gradient(to top, #0ba360 0%, #3cba92 100%);
        transform: translateY(-50%);
    }
</style>
<!-- LINK.PHP -->
    <?php require('inc/links.php'); ?>

</head>
<body>
    
    <div class="wrapper ">
        <?php require('inc/header.php') ?>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="image/profile.jpg" class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Profile</a>
                                <a href="#" class="dropdown-item">Setting</a>
                                <a href="logout.php" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <div class="container-fluid" id="main-content">
                <div class="row">
                    <div class="ms-auto p-4 overflow-hidden">     
                        <div class="p-4 card dashboard-heading">
                            <h3>SETTINGS</h3>  
                        </div>
                        <!-- General settings section  -->

                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h5 class="card-title m-0">General Settings</h5>
                                    <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </button>
                                </div>
                                <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                                <p class="card-text" id="site_title"></p>
                                <h6 class="card-subtitle mb-1 fw-bold">About us</h6>
                                <p class="card-text" id="site_about"></p>
                            </div>
                        </div>
                        <!-- General Settings Modal -->

                        <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <form id="general_s_form">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">General Settings</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Site Title</label>
                                                <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">About us</label>
                                                <textarea name="site_about" id="site_about_inp" class="form-control shadow-none" rows="6"></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" class="btn btn-outline-dark text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                            <button type="submit" class="btn custom-bg text-dark shadow-none">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Shurdown section -->

                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h5 class="card-title m-0">Shutdown Website</h5>
                                    <div class="form-check form-switch">
                                        <form>
                                            <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" id="shutdown-toggle">
                                        </form>
                                    </div>
                                </div>
                                <p class="card-text">
                                    No customers will be allowed to book hotel room, when shutdown mode is turned on.
                                </p>
                            </div>
                        </div>
                        <!-- Contact details section  -->

                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h5 class="card-title m-0">Contacts Settings</h5>
                                    <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contacts-s">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </button>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                                            <p class="card-text" id="address"></p>
                                        </div>
                                        <div class="mb-4">
                                            <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                                            <p class="card-text" id="gmap"></p>
                                        </div>
                                        <div class="mb-4">
                                            <h6 class="card-subtitle mb-1 fw-bold">Phone Number</h6>
                                            <p class="card-text mb-1">
                                                <i class="bi bi-telephone"></i>
                                                <span id="pn1"></span>
                                            </p>
                                            <p class="card-text">
                                                <i class="bi bi-telephone"></i>
                                                <span id="pn2"></span>
                                            </p>
                                        </div>
                                        <div class="mb-4">
                                            <h6 class="card-subtitle mb-1 fw-bold">E-mail</h6>
                                            <p class="card-text" id="email"></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <h6 class="card-subtitle mb-1 fw-bold">Social links</h6>
                                            <p class="card-text mb-1">
                                                <i class="bi bi-facebook me-1"></i> 
                                                <span id="fb"></span>
                                            </p>
                                            <p class="card-text mb-1">
                                                <i class="bi bi-twitter-x me-1"></i>
                                                <span id="tw"></span>
                                            </p>
                                            <p class="card-text mb-1">
                                                <i class="bi bi-youtube me-1"></i>
                                                <span id="yt"></span>
                                            </p>
                                            <p class="card-text">
                                                <i class="bi bi-instagram me-1"></i>
                                                <span id="ig"></span>
                                            </p>
                                        </div>
                                        <div class="mb-4">
                                            <h6 class="card-subtitle mb-1 fw-bold">iFrame</h6>
                                            <iframe id="iframe" class="border p-2 w-100" loading="lazy"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Contacts details Modal -->

                        <div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <form id="contacts_s_form">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Contacts Settings</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid p-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label fw-bold">Address</label>
                                                        <input type="text" name="address" id="address_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label fw-bold">Google Map Link</label>
                                                        <input type="text" name="gmap" id="gmap_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label fw-bold">Phone Numbers (with country code)</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                                            <input type="number" name="pn1" id="pn1_inp" class="form-control shadow-none">
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                                            <input type="number" name="pn2" id="pn2_inp" class="form-control shadow-none">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label fw-bold">Email</label>
                                                        <input type="text" name="email" id="email_inp" class="form-control shadow-none" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label fw-bold">Social Links</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text"><i class="bi bi-facebook"></i></span>
                                                            <input type="text" name="fb" id="fb_inp" class="form-control shadow-none">
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text"><i class="bi bi-twitter-x"></i></span>
                                                            <input type="text" name="tw" id="tw_inp" class="form-control shadow-none">
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text"><i class="bi bi-youtube"></i></span>
                                                            <input type="text" name="yt" id="yt_inp" class="form-control shadow-none">
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text"><i class="bi bi-instagram"></i></span>
                                                            <input type="text" name="ig" id="ig_inp" class="form-control shadow-none">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label fw-bold">iFrame Src</label>
                                                        <input type="text" name="iframe" id="iframe_inp" class="form-control shadow-none" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" onclick="contacts_inp(contacts_data)" class="btn btn-outline-dark text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                        <button type="submit" class="btn custom-bg text-dark shadow-none">Submit</button>
                                    </div>
                                </div>
                            </form>
                          </div>
                        </div>
                        <!-- Frontdesk Team section -->     

                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h5 class="card-title m-0">Frontdesk Team</h5>
                                    <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#team-s">
                                        <i class="bi bi-plus-square"></i> Add
                                    </button>
                                </div>
                        
                                <div class="row" id="team-data">        
                                </div>

                            </div>
                        </div>

                        <!-- Frontdesk Team Modal -->
                        <div class="modal fade" id="team-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <form id="team_s_form">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add Team member</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Name</label>
                                            <input type="text" name="member_name" id="member_name_inp" class="form-control shadow-none" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Picture</label>
                                            <input type="file" name="member_picture" id="member_picture_inp" accept="[.jpg, .png, .webp, .jpeg]" class="form-control shadow-none" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" onclick="member_name.value='', member_picture.value=''" class="btn btn-outline-dark text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                        <button type="submit" class="btn custom-bg text-dark shadow-none">Submit</button>
                                    </div>
                                </div>
                            </form>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <a href="#" class="theme-toggle">
                <i class="bi bi-moon"></i>
                <i class="bi bi-sun"></i>
            </a>
    </div>


<!-- SCRIPT.PHP -->
    <?php require('inc/scripts.php');?>
    
<!-- SCRIPT.JS -->
    <script src="scripts/settings.js"></script>

    <script src="scripts/script.js"></script>

</body>
</html>