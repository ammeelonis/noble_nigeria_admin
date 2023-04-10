<?php 

$page_id = 'category';
include_once('admin/pages/includes/connection.php');
include('includes/queries.php');

if (isset($_GET['id'])){
  //display articles
  $category = $_GET['id'];

  $c_query = "SELECT * FROM noble_articles WHERE category='$category' ORDER BY id DESC";

  $c_result = mysqli_query($conn, $c_query);
  $c_rows = $c_result->fetch_all(MYSQLI_ASSOC);
  $c_chunks = array_chunk($c_rows, 4);

  $c_chunks1 = $c_chunks[0];
  $c_chunks2 = $c_chunks[1];
  $c_chunks3 = $c_chunks[2];
  $c_chunks4 = $c_chunks[3];
  $c_chunks5 = $c_chunks[4];

  if(!$c_rows){
    echo('Failed to fetch data!') . mysqli_error($conn);
  } else {
    echo "";
  }
}
/*include('includes/article.php');

$article = new Article;

if (isset($_GET['id'])){
  //display articles
  $id = $_GET['id'];
  $data = $article->fetch_data($id);

  print_r($data);
} else {
  //header('location:index.php');
  exit();
}*/

include ('includes/header.php');

?>


<body onload="hideBrokenImages()">
    <?php include('includes/navbar.php'); ?>


    <!-- News With Sidebar Start -->
    <div class="container-fluid mt-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Category: <?php echo $category; ?></h4>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <?php 
                            if(isset($c_chunks1)){
                            foreach ($c_chunks1 as $c_chunk1){

                                echo '<div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="admin/images/' .  $c_chunk1["image_1"]  . '" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">' .  $c_chunk1["category"]  . '</a>
                                        <a class="text-body" href=""><small>' .  $c_chunk1["created_at"]  . '</small></a>
                                    </div>
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="single.php?id=' .  $c_chunk1["id"]  . '">' .  $c_chunk1["title"]  . '</a>
                                    <p class="m-0">' .  substr(strval($c_chunk1["section_1"]), 0, 150)  . '</p>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
                                        <small>' .  $c_chunk1["author"]  . '</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>' .  $c_chunk1["num_views"]  . '</small>
                                        
                                    </div>
                                </div>
                            </div>';

                                }
                            }
                            
                            ?>                            
                        </div>

                        <div class="col-lg-6">

                        <?php 
                            if(isset($c_chunks2)){
                            foreach ($c_chunks2 as $c_chunk2){

                                echo '<div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="admin/images/' .  $c_chunk2["image_1"]  . '" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">' .  $c_chunk2["category"]  . '</a>
                                        <a class="text-body" href=""><small>' .  $c_chunk2["created_at"]  . '</small></a>
                                    </div>
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="single.php?id=' .  $c_chunk2["id"]  . '">' .  $c_chunk2["title"]  . '</a>
                                    <p class="m-0">' .  substr(strval($c_chunk2["section_1"]), 0, 150)  . '</p>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
                                        <small>' .  $c_chunk2["author"]  . '</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>' .  $c_chunk2["num_views"]  . '</small>
                                        
                                    </div>
                                </div>
                            </div>';

                                }
                            }
                            
                            ?>   
                           <!-- <div class="position-relative mb-3">
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

                            if (isset($c_chunks3)) {

                            $line1 = $c_chunks3[0];
                            $line2 = $c_chunks3[1];

                            echo '<div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                            <div class="col-md-4 px-0">
                                <img class="img-fluid w-100" src="admin/images/' .  $line1["image_1"]  . '" alt="" style="object-fit:cover; height:100%; overflow:hidden;">
                            </div>
                            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                <div class="mb-2">  
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">' .  $line1["category"]  . '</a>
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
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">' .  $line2["category"]  . '</a>
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

                            if (isset($c_chunks3)) {
                                $line3 = $c_chunks3[2];
                                $line4 = $c_chunks3[3];

                            echo '<div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <div class="col-md-4 px-0">
                                    <img class="img-fluid w-100" src="admin/images/' .  $line3["image_1"]  . '" alt="" style="object-fit:cover; height:100%; overflow:hidden;">
                                </div>
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">  
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">' .  $line3["category"]  . '</a>
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
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">' .  $line4["category"]  . '</a>
                                    <a class="text-body" href=""><small>' .  $line4["created_at"]  . '</small></a>
                                </div>
                                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="single.php?id=' .  $line4["id"]  . '">' .  $line4["title"]  . '</a>
                                </div>
                            </div>'; }

                            ?>
                            <!--<div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
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
                        <div class="col-lg-12 mb-3">
                            <a href=""><img class="img-fluid w-100" src="img/ads-728x90.png" alt=""></a>
                        </div>
                        <div class="col-lg-12">

                        <?php 
                        
                        if (isset($c_chunks4)) {
                            foreach ($c_chunks4 as $c_chunk4){
                                    echo '<div class="row news-lg mx-0 mb-3">
                                    <div class="col-md-6 h-100 px-0">
                                        <img class="img-fluid h-100" src="admin/images/' .  $c_chunk4["image_1"]  . '" style="object-fit: cover;">
                                    </div>
                                    <div class="col-md-6 d-flex flex-column border bg-white h-100 px-0">
                                        <div class="mt-auto p-4">
                                            <div class="mb-2">
                                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                    href="">' .  $c_chunk4["category"]  . '</a>
                                                <a class="text-body" href=""><small>' .  $c_chunk4["created_at"]  . '</small></a>
                                            </div>
                                            <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="single.php?id=' .  $c_chunk4["id"]  . '">' .  $c_chunk4["title"]  . '</a>
                                            <p class="m-0">' .  substr(strval($c_chunk4["section_1"]), 0, 150)  . '</p>
                                        </div>
                                        <div class="d-flex justify-content-between bg-white border-top mt-auto p-4">
                                            <div class="d-flex align-items-center">
                                                <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
                                                <small>' .  $c_chunk4["author"]  . '</small>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <small class="ml-3"><i class="far fa-eye mr-2"></i>' .  $c_chunk4["num_views"]  . '</small>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            } 
                        }
                        
                        ?>
                            
                        </div>
                        <div class="col-lg-6">

                        <?php 

                            if (isset($c_chunks5)) {

                            $line1 = $c_chunks5[0];
                            $line2 = $c_chunks5[1];

                            echo '<div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                            <div class="col-md-4 px-0">
                                <img class="img-fluid w-100" src="admin/images/' .  $line1["image_1"]  . '" alt="" style="object-fit:cover; height:100%; overflow:hidden;">
                            </div>
                            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                <div class="mb-2">  
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">' .  $line1["category"]  . '</a>
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
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">' .  $line2["category"]  . '</a>
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

                            if (isset($c_chunks5)) {
                                $line3 = $c_chunks5[2];
                                $line4 = $c_chunks5[3];

                            echo '<div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <div class="col-md-4 px-0">
                                    <img class="img-fluid w-100" src="admin/images/' .  $line3["image_1"]  . '" alt="" style="object-fit:cover; height:100%; overflow:hidden;">
                                </div>
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">  
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">' .  $line3["category"]  . '</a>
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
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">' .  $line4["category"]  . '</a>
                                    <a class="text-body" href=""><small>' .  $line4["created_at"]  . '</small></a>
                                </div>
                                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="single.php?id=' .  $line4["id"]  . '">' .  $line4["title"]  . '</a>
                                </div>
                            </div>'; }

                            ?>

                            <!--<div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
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