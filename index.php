
<?php 

$page_id = 'home';
include ('includes/header.php');

include_once('admin/pages/includes/connection.php');

  include('includes/queries.php');
  
  ?>

<body onload="hideBrokenImages()">
    <?php include('includes/navbar.php'); ?>

    <!-- Main News Slider Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 px-0">
                <div class="owl-carousel main-carousel position-relative">

                    
              <?php 
           foreach ($header_datas as $header_data) {
                
                echo '<div class="position-relative overflow-hidden" style="height: 500px;">
                <img class="img-fluid h-100" src="admin/images/' .  $header_data["image_1"]  . '" style="object-fit: cover;">
                <div class="overlay">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                            href="category.php?id=' .  $header_data["category"]  . '">' .  $header_data["category"]  . '</a>
                        <a class="text-white" href="">' .  $header_data["created_at"]  . '</a>
                    </div>
                    <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="single.php?id=' .  $header_data["id"]  . '">' .  $header_data["title"]  . '</a>
                </div>
            </div>';
           }  
            
       ?>
                
                    <!--<div class="position-relative overflow-hidden" style="height: 500px;">
                        <img class="img-fluid h-100" src="img/news-800x500-1.jpg" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="">Business</a>
                                <a class="text-white" href="">Jan 01, 2045</a>
                            </div>
                            <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit. Proin vitae porta diam...</a>
                        </div>
                    </div>
                    <div class="position-relative overflow-hidden" style="height: 500px;">
                        <img class="img-fluid h-100" src="img/news-800x500-2.jpg" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="">Business</a>
                                <a class="text-white" href="">Jan 01, 2045</a>
                            </div>
                            <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit. Proin vitae porta diam...</a>
                        </div>
                    </div>
                    <div class="position-relative overflow-hidden" style="height: 500px;">
                        <img class="img-fluid h-100" src="img/news-800x500-3.jpg" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="">Business</a>
                                <a class="text-white" href="">Jan 01, 2045</a>
                            </div>
                            <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit. Proin vitae porta diam...</a>
                        </div>
                    </div>-->
                </div>
            </div>
            <div class="col-lg-5 px-0">
                <div class="row mx-0">

                <?php 
                    foreach ($header_datas2 as $header_data2){
                        echo '<div class="col-md-6 px-0">
                        <div class="position-relative overflow-hidden" style="height: 250px;">
                            <img class="img-fluid w-100 h-100" src="admin/images/' .  $header_data2["image_1"]  . '" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="category.php?id=' .  $header_data2["category"]  . '">' .  $header_data2["category"]  . '</a>
                                    <a class="text-white" href="single.php?id=' .  $header_data2["id"]  . '"><small>' .  $header_data2["created_at"]  . '</small></a>
                                </div>
                                <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="single.php?id="' .  $header_data2["id"]  . '">' .  $header_data2["title"]  . '</a>
                            </div>
                        </div>
                    </div>';
                    }

                ?>
                    <!--<div class="col-md-6 px-0">
                        <div class="position-relative overflow-hidden" style="height: 250px;">
                            <img class="img-fluid w-100 h-100" src="img/news-700x435-1.jpg" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="">Business</a>
                                    <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                                </div>
                                <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 px-0">
                        <div class="position-relative overflow-hidden" style="height: 250px;">
                            <img class="img-fluid w-100 h-100" src="img/news-700x435-2.jpg" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="">Business</a>
                                    <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                                </div>
                                <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 px-0">
                        <div class="position-relative overflow-hidden" style="height: 250px;">
                            <img class="img-fluid w-100 h-100" src="img/news-700x435-3.jpg" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="">Business</a>
                                    <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                                </div>
                                <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 px-0">
                        <div class="position-relative overflow-hidden" style="height: 250px;">
                            <img class="img-fluid w-100 h-100" src="img/news-700x435-4.jpg" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="">Business</a>
                                    <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                                </div>
                                <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->


    <!-- Breaking News Start -->
    <div class="container-fluid bg-dark py-3 mb-3">
        <div class="container">
            <div class="row align-items-center bg-dark">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">Breaking News</div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                            style="width: calc(100% - 170px); padding-right: 90px;">

                            <?php 

                                if (isset($breaking_chunk)) {

                                    foreach($breaking_chunk as $breaking_row){
                                        echo '<div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="single.php?=' .  $breaking_row["id"]  . '">' .  $breaking_row["title"]  . '</a></div>';
                                    }
                                    
                                }
                            ?>

                            
                            <!--<div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt, sed faucibus nisl sodales</a></div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breaking News End -->


    <!-- Featured News Slider Start -->
    <div class="container-fluid pt-5 mb-3">
        <div class="container">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">Featured News</h4>
            </div>
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">

                    <?php 

                        if (isset($featured_rows)) {

                            foreach($featured_rows as $featured_row) {
                           
                                echo '<div class="position-relative overflow-hidden" style="height: 300px;">
                                <img class="img-fluid h-100" src="admin/images/' .  $featured_row["image_1"]  . '" style="object-fit: cover;">
                                <div class="overlay">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="category.php?id=' .  $featured_row["category"]  . '">' .  $featured_row["category"]  . '</a>
                                        <a class="text-white" href="single.php?id=' .  $featured_row["id"]  . '"><small>' .  $featured_row["created_at"]  . '</small></a>
                                    </div>
                                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="single.php?id=' .  $featured_row["id"]  . '">' .  $featured_row["title"]  . '</a>
                                </div>
                            </div>';
                            }
                            
                        }
                        
                    ?>

                <!--<div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="img/news-700x435-1.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="">Business</a>
                            <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="img/news-700x435-2.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="">Business</a>
                            <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="img/news-700x435-3.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="">Business</a>
                            <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="img/news-700x435-4.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="">Business</a>
                            <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="img/news-700x435-5.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="">Business</a>
                            <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
    <!-- Featured News Slider End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <?php 
                            
                            if (isset($latests1)) {

                                foreach ($latests1 as $latest1){

                                    echo '<div class="position-relative mb-3">
                                    <img class="img-fluid w-100" src="admin/images/' .  $latest1["image_1"]  . '" style="object-fit: cover;">
                                    <div class="bg-white border border-top-0 p-4">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                href="category.php?id=' .  $latest1["category"]  . '">' .  $latest1["category"]  . '</a>
                                            <a class="text-body" href=""><small>' .  $latest1["created_at"]  . '</small></a>
                                        </div>
                                        <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="single.php?id=' .  $latest1["id"]  . '">' .  $latest1["title"]  . '</a>
                                        <p class="m-0">' .  substr(strval($latest1["section_1"]), 0, 150)  . '</p>
                                    </div>
                                    <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
                                            <small>' .  $latest1["author"]  . '</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <small class="ml-3"><i class="far fa-eye mr-2"></i>' .  $latest1["num_views"]  . '</small>
                                            
                                        </div>
                                    </div>
                                </div>';
    
                                }
                                
                            }
                            
                            
                            ?>

                            <!--<div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="img/news-700x435-1.jpg" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                    <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                        rebum clita rebum dolor stet amet justo</p>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
                                        <small>John Doe</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        
                                    </div>
                                </div>
                            </div>-->
                        </div>
                        <div class="col-lg-6">

                        <?php 
                        
                        if (isset($latests2)) {

                            foreach ($latests2 as $latest2){

                                echo '<div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="admin/images/' .  $latest2["image_1"]  . '" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="category.php?id=' .  $latest2["category"]  . '">' .  $latest2["category"]  . '</a>
                                        <a class="text-body" href=""><small>' .  $latest2["created_at"]  . '</small></a>
                                    </div>
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="single.php?id=' .  $latest2["id"]  . '">' .  $latest2["title"]  . '</a>
                                    <p class="m-0">' .  substr(strval($latest2["section_1"]), 0, 150) . '</p>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
                                        <small>' .  $latest2["author"]  . '</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>' .  $latest2["num_views"]  . '</small>
                                        
                                    </div>
                                </div>
                                </div>';
    
                                }
                            
                        }
                        
                        ?>

                            <!--<div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="img/news-700x435-2.jpg" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                    <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                        rebum clita rebum dolor stet amet justo</p>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
                                        <small>John Doe</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        
                                    </div>
                                </div>
                            </div>-->
                        </div>
                        <div class="col-lg-12 mb-3">
                            <a href=""><img class="img-fluid w-100" src="img/ads-728x90.png" alt=""></a>
                        </div>
                        <!--<div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="img/news-700x435-3.jpg" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
                                        <small>John Doe</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="img/news-700x435-4.jpg" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
                                        <small>John Doe</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <div class="col-lg-6">                           

                            <?php 

                                if (isset($latests2)) {

                                $line1 = $latests3[0];
                                $line2 = $latests3[1];

                                echo '<div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <div class="col-md-4 px-0">
                                    <img class="img-fluid w-100" src="admin/images/' .  $line1["image_1"]  . '" alt="" style="object-fit:cover; height:100%; overflow:hidden;">
                                </div>
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">  
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="category.php?id=' .  $line1["category"]  . '">' .  $line1["category"]  . '</a>
                                        <a class="text-body" href=""><small>' .  $line1["created_at"]  . '</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="single.php?id=' .  $line1["id"]  . '">' .  $line1["title"]  . '</a>
                                    </div>
                                </div>';

                                echo '<div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <div class="col-md-4 px-0">
                                    <img class="img-fluid w-100" src="admin/images/' .  $line2["image_1"]  . '" alt="" style="object-fit:cover; height:100%; overflow:hidden;">
                                </div>
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">  
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="category.php?id=' .  $line2["category"]  . '">' .  $line2["category"]  . '</a>
                                        <a class="text-body" href=""><small>' .  $line2["created_at"]  . '</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="single.php?id=' .  $line2["id"]  . '">' .  $line2["title"]  . '</a>
                                    </div>
                                </div>';
                                    
                                }

                                

                             ?>
                            <!--<div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">  
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="img/news-110x110-2.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>-->
                        </div>
                        <div class="col-lg-6">

                        <?php 

                            if (isset($latests3)) {
                                $line3 = $latests3[2];
                                $line4 = $latests3[3];

                           echo '<div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <div class="col-md-4 px-0">
                                    <img class="img-fluid w-100" src="admin/images/' .  $line3["image_1"]  . '" alt="" style="object-fit:cover; height:100%; overflow:hidden;">
                                </div>
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">  
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="category.php?id=' .  $line3["category"]  . '">' .  $line3["category"]  . '</a>
                                        <a class="text-body" href=""><small>' .  $line3["created_at"]  . '</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="single.php?id=' .  $line3["id"]  . '">' .  $line3["title"]  . '</a>
                                    </div>
                                </div>';

                            echo '<div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                            <div class="col-md-4 px-0">
                                <img class="img-fluid w-100" src="admin/images/' .  $line4["image_1"]  . '" alt="" style="object-fit:cover; height:100%; overflow:hidden;">
                            </div>
                            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                <div class="mb-2">  
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="category.php?id=' .  $line4["category"]  . '">' .  $line4["category"]  . '</a>
                                    <a class="text-body" href=""><small>' .  $line4["created_at"]  . '</small></a>
                                </div>
                                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="single.php?id=' .  $line4["id"]  . '">' .  $line4["title"]  . '</a>
                                </div>
                            </div>'; }

                            ?>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <a href=""><img class="img-fluid w-100" src="img/ads-728x90.png" alt=""></a>
                        </div>
                        <div class="col-lg-12">
                            <?php 
                             if (isset($latests4)) {
                            
                            foreach($latests4 as $latest4) {
                                echo '<div class="row news-lg mx-0 mb-3">
                                <div class="col-md-6 h-100 px-0">
                                    <img class="img-fluid h-100" src="admin/images/' .  $latest4["image_1"]  . '" style="object-fit: cover;">
                                </div>
                                <div class="col-md-6 d-flex flex-column border bg-white h-100 px-0">
                                    <div class="mt-auto p-4">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                href="category.php?id=' .  $latest4["category"]  . '">' .  $latest4["category"]  . '</a>
                                            <a class="text-body" href=""><small>' .  $latest4["created_at"]  . '</small></a>
                                        </div>
                                        <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="single.php?id=' .  $latest4["id"]  . '">' .  $latest4["title"]  . '</a>
                                        <p class="m-0">' .  substr(strval($latest4["section_1"]), 0, 150)  . '</p>
                                    </div>
                                    <div class="d-flex justify-content-between bg-white border-top mt-auto p-4">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
                                            <small>' .  $latest4["author"]  . '</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <small class="ml-3"><i class="far fa-eye mr-2"></i>' .  $latest4["num_views"]  . '</small>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>';}

                             }
                            
                            ?>

                            <!--<div class="row news-lg mx-0 mb-3">                                
                                <div class="col-md-6 h-100 px-0">
                                    <img class="img-fluid h-100" src="img/news-700x435-5.jpg" style="object-fit: cover;">
                                </div>
                                <div class="col-md-6 d-flex flex-column border bg-white h-100 px-0">
                                    <div class="mt-auto p-4">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                href="">Business</a>
                                            <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                        </div>
                                        <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                        <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                            rebum clita rebum dolor stet amet justo</p>
                                    </div>
                                    <div class="d-flex justify-content-between bg-white border-top mt-auto p-4">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
                                            <small>John Doe</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                        <div class="col-lg-6">
                        <?php 

                            if (isset($latests5)) {

                            $line1 = $latests5[0];
                            $line2 = $latests5[1];

                            echo '<div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                            <div class="col-md-4 px-0">
                                <img class="img-fluid w-100" src="admin/images/' .  $line1["image_1"]  . '" alt="" style="object-fit:cover; height:100%; overflow:hidden;">
                            </div>
                            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                <div class="mb-2">  
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="category.php?id=' .  $line1["category"]  . '">' .  $line1["category"]  . '</a>
                                    <a class="text-body" href=""><small>' .  $line1["created_at"]  . '</small></a>
                                </div>
                                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="single.php?id=' .  $line1["id"]  . '">' .  $line1["title"]  . '</a>
                                </div>
                            </div>';

                            echo '<div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                            <div class="col-md-4 px-0">
                                <img class="img-fluid w-100" src="admin/images/' .  $line2["image_1"]  . '" alt="" style="object-fit:cover; height:100%; overflow:hidden;">
                            </div>
                            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                <div class="mb-2">  
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="category.php?id=' .  $line2["category"]  . '">' .  $line2["category"]  . '</a>
                                    <a class="text-body" href=""><small>' .  $line2["created_at"]  . '</small></a>
                                </div>
                                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="single.php?id=' .  $line2["id"]  . '">' .  $line2["title"]  . '</a>
                                </div>
                            </div>';
                                
                            }



                            ?>
                            <!--<div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="img/news-110x110-2.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>-->
                        </div>
                        <div class="col-lg-6">

                        <?php 

                            if (isset($latests5)) {
                                $line3 = $latests5[2];
                                $line4 = $latests5[3];

                            echo '<div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <div class="col-md-4 px-0">
                                    <img class="img-fluid w-100" src="admin/images/' .  $line3["image_1"]  . '" alt="" style="object-fit:cover; height:100%; overflow:hidden;">
                                </div>
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">  
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="category.php?id=' .  $line3["category"]  . '">' .  $line3["category"]  . '</a>
                                        <a class="text-body" href=""><small>' .  $line3["created_at"]  . '</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="single.php?id=' .  $line3["id"]  . '">' .  $line3["title"]  . '</a>
                                    </div>
                                </div>';

                            echo '<div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                            <div class="col-md-4 px-0">
                                <img class="img-fluid w-100" src="admin/images/' .  $line4["image_1"]  . '" alt="" style="object-fit:cover; height:100%; overflow:hidden;">
                            </div>
                            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                <div class="mb-2">  
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="category.php?id=' .  $line4["category"]  . '">' .  $line4["category"]  . '</a>
                                    <a class="text-body" href=""><small>' .  $line4["created_at"]  . '</small></a>
                                </div>
                                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="single.php?id=' .  $line4["id"]  . '">' .  $line4["title"]  . '</a>
                                </div>
                            </div>'; }

                            ?>
                            
                            <!---<div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="img/news-110x110-3.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="img/news-110x110-4.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
	
				<?php include('includes/sidebar_follow_us.php');?>
				<?php include('includes/side_bar_advertise.php');?>
				<?php include('includes/sidebar_trending.php');?>
				<?php include('includes/newsletter.php');?>
				<?php include('includes/sidebar_tags.php');?>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- News With Sidebar End -->


   <?php include('includes/footer.php');?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
