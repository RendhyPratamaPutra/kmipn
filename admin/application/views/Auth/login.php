<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("templates/auth_header") ?>
</head>

<body class="fix-menu">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body mr-auto ml-auto">

                        <div class="text-center">
                            <img width="270px" src="<?php echo base_url(''); ?>vendor/assets/images/bersihnesia.png" alt="logo.png">
                        </div>
                        <div class="auth-box">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center txt-primary">Sign In</h3>
                                </div>
                            </div>

                            <?= $this->session->flashdata('message'); ?>
                            <hr />
                            <?= form_open_multipart('Auth'); ?>
                            <div class="input-group">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Your email">
                                <span class="md-line"></span>
                            </div>
                            <div class="input-group">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                <span class="md-line"></span>
                            </div>
                            <div class="row m-t-25 text-left">
                                <!-- <div class="col-sm-7 col-xs-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div>
                                    </div> -->
                                <div class="col-sm-5 col-xs-12 forgot-phone text-right">
                                    <a href="auth-reset-password.html" class="text-right f-w-600 text-inverse"> Forgot Your Password?</a>
                                </div>
                            </div>
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in</button>
                                </div>
                            </div>
                            <?= form_close(); ?>
                            <hr />
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="text-inverse text-left m-b-0">Jadi keren yang berguna.</p>
                                    <p class="text-inverse text-left"><b>BERSIHNESIA untuk Pesisir Indonesia</b></p>
                                </div>
                                <div class="col-md-2">
                                    <img src="<?php echo base_url(''); ?>vendor/assets/images/auth/Logo-small-bottom.png" alt="small-logo.png">
                                </div>
                            </div>
                        </div>

                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->

    <?php $this->load->view("templates/auth_footer") ?>