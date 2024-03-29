<?php

include_once('admin/pages/includes/connection.php');
include('includes/queries.php');


?>
 
 
 <!-- Footer Start -->
    <div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
        <div class="row py-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Get In Touch</h5>
                <p class="font-weight-medium"><i class="fa fa-map-marker-alt mr-2"></i>United Kingdom</p>
                <p class="font-weight-medium"><i class="fa fa-phone-alt mr-2"></i>+44-792-2589-200</p>
                <p class="font-weight-medium"><i class="fa fa-envelope mr-2"></i>info@noblenigeria.com</p>
                <h6 class="mt-4 mb-3 text-white text-uppercase font-weight-bold">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="https://twitter.com/noblenigerianetwork" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="https://facebook.com/noblenigerianetwork" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <!--<a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>-->
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="https://instagram.com/noblenigerianetwork" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square" href="https://www.youtube.com/@noblenigeria" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Popular News</h5>

                <?php
                if (isset($trending_rows)) {
                    foreach($trending_rows as $trending_row){
                        echo'<div class="mb-3">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">' .  $trending_row["category"]  . '</a>
                            <a class="text-body" href=""><small>' .  $trending_row["created_at"]  . '</small></a>
                        </div>
                        <a class="small text-body text-uppercase font-weight-medium" href="single.php?id=' .  $trending_row["id"]  . '">' .  $trending_row["title"]  . '</a>
                    </div>'; }
                    }
                ?>

                <!--<div class="mb-3">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                    </div>
                    <a class="small text-body text-uppercase font-weight-medium" href="">Lorem ipsum dolor sit amet elit. Proin vitae porta diam...</a>
                </div>
                <div class="mb-3">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                    </div>
                    <a class="small text-body text-uppercase font-weight-medium" href="">Lorem ipsum dolor sit amet elit. Proin vitae porta diam...</a>
                </div>
                <div class="">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                    </div>
                    <a class="small text-body text-uppercase font-weight-medium" href="">Lorem ipsum dolor sit amet elit. Proin vitae porta diam...</a>
                </div>-->
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Categories</h5>
                <div class="m-n1">
                    <a href="category.php?id=politics" class="btn btn-sm btn-secondary m-1">Politics</a>
                    <a href="category.php?id=business" class="btn btn-sm btn-secondary m-1">Business</a>
                    <a href="category.php?id=health" class="btn btn-sm btn-secondary m-1">Health</a>
                    <a href="category.php?id=education" class="btn btn-sm btn-secondary m-1">Education</a>
                    <a href="category.php?id=science" class="btn btn-sm btn-secondary m-1">Science</a>
                    <a href="category.php?id=food" class="btn btn-sm btn-secondary m-1">Foods</a>
                    <a href="category.php?id=entertainment" class="btn btn-sm btn-secondary m-1">Entertainment</a>
                    <a href="category.php?id=travel" class="btn btn-sm btn-secondary m-1">Travel</a>
                    <a href="category.php?id=lifestyle" class="btn btn-sm btn-secondary m-1">Lifestyle</a>
                    <a href="category.php?id=sports" class="btn btn-sm btn-secondary m-1">Sports</a>
                    <a href="category.php?id=opinion" class="btn btn-sm btn-secondary m-1">Opinion</a>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Post Photos</h5>
                <div class="row">

                    <?php 
                    if (isset($header_datas) || isset($header_datas2)) {
                    
                        foreach($header_datas as $header_data){
                            echo '<div class="col-4 mb-3">
                            <a href="single.php?id=' .  $header_data["id"]  . '"><img class="w-100" src="admin/images/' .  $header_data["image_1"]  . '" style="object-fit:cover; height:100%; overflow:hidden;" alt=""></a>
                        </div>';
                        
                        }
                        foreach($header_datas2 as $header_data2){
                            
                        echo '<div class="col-4 mb-3">
                            <a href="single.php?id=' .  $header_data2["id"]  . '"><img class="w-100" src="admin/images/' .  $header_data2["image_1"]  . '" style="object-fit:cover; height:100%; overflow:hidden;" alt=""></a>
                        </div>';
                        }
                    }
                    ?>


                    <!--<div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="img/news-110x110-1.jpg" alt=""></a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="img/news-110x110-2.jpg" alt=""></a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="img/news-110x110-3.jpg" alt=""></a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="img/news-110x110-4.jpg" alt=""></a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="img/news-110x110-5.jpg" alt=""></a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="img/news-110x110-1.jpg" alt=""></a>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
        <p class="m-0 text-center">&copy; <a href="#">Noble Nigeria</a>. All Rights Reserved.

		<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
		</p>
    </div>
    <!-- Footer End -->