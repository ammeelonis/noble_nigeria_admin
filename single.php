<?php

$page_id = 'single';

include_once('admin/pages/includes/connection.php');
include('includes/queries.php');

if (isset($_GET['id'])){
  //display articles
  $id = $_GET['id'];

  $query = "SELECT * FROM noble_articles WHERE id = '$id'";

  $result = mysqli_query($conn, $query);
  $row = $result->fetch_assoc();

  if(!$row){
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
?>


<?php include ('includes/header.php');?>

<body onload="hideBrokenImages()">
  <?php include('includes/navbar.php'); ?>

    <!-- Breaking News Start -->
    <div class="container-fluid mt-5 mb-3 pt-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="section-title border-right-0 mb-0" style="width: 180px;">
                            <h4 class="m-0 text-uppercase font-weight-bold">Trending</h4>
                        </div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center bg-white border border-left-0"
                            style="width: calc(100% - 180px); padding-right: 100px;">

                            <?php 
                            
                            foreach($trending_chunk as $trending_row){
                                echo'<div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="single.php?id=' .  $trending_row["id"]  . '">' .  $trending_row["title"]  . '</a></div>';
                            }

                            ?>

                           <!-- <div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt, sed faucibus nisl sodales</a></div>
                            <div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt, sed faucibus nisl sodales</a></div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breaking News End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- News Detail Start -->
                    <div class="position-relative mb-3">
                        <img class="img-fluid w-100" src="admin/images/<?php echo $row['image_1'];?>" style="object-fit: cover;">
                        <div class="bg-white border border-top-0 p-4">
                            <div class="mb-3">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href=""><?php echo $row['category'];?></a>
                                <a class="text-body" href=""><?php echo $row['created_at'];?></a>
                            </div>
                            <h1 class="mb-3 text-secondary text-uppercase font-weight-bold"><?php echo $row['title'];?></h1>
                            <p><?php echo $row['section_1'];?></p>
                        

                                <?php 
                                
                               
                                    if (array_key_exists('sub_head1', $row) && array_key_exists('image_2', $row) && array_key_exists('section_2', $row)) {
                                        echo '<h3 class="text-uppercase font-weight-bold mb-3">' .  $row["sub_head1"]  . '</h3>
                                    <img id="section2_img" class="img-fluid w-50 float-left mr-4 mb-2" src="admin/images/' .  $row["image_2"]  . '">
                                    <p>' .  $row["section_2"]  . '</p>';
                                    } 

                                    if (array_key_exists('sub_head2', $row) && array_key_exists('image_3', $row) && array_key_exists('section_3', $row)) {
                                        echo '<h5 class="text-uppercase font-weight-bold mb-3">' .  $row["sub_head2"]  . '</h5>
                                    <img  id="section3_img" class="img-fluid w-50 float-right mr-4 mb-2" src="admin/images/' .  $row["image_3"]  . '">
                                    <p>' .  $row["section_3"]  . '</p>';
                                    }

                               /* if (array_key_exists($row['sub_head1']) && isset($row['image_2']) && isset($row['section_2'])){
                                    echo '<h3 class="text-uppercase font-weight-bold mb-3">' .  $row["sub_head1"]  . '</h3>
                                    <img class="img-fluid w-50 float-left mr-4 mb-2" src="admin/images/' .  $row["image_2"]  . '">
                                    <p>' .  $row["section_2"]  . '</p>';
                                } else {
                                    exit();
                                }

                                if (array_key_exists($row['sub_head2']) && isset($row['image_3']) && isset($row['section_3'])){
                                    echo '<h5 class="text-uppercase font-weight-bold mb-3">' .  $row["sub_head2"]  . '</h5>
                                    <img class="img-fluid w-50 float-right mr-4 mb-2" src="admin/images/' .  $row["image_3"]  . '">
                                    <p>' .  $row["section_3"]  . '</p>';
                                } 
                                else {
                                    exit ();
                                }*/
                            ?>
                            
                            
                        </div>
                        <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
                                <span><?php echo $row['author'];?></span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ml-3"><i class="far fa-eye mr-2"></i><?php echo $row['num_views'];?></span>
                                
                            </div>
                        </div>
                    </div>
                    <!-- News Detail End -->

                    <!-- Comment List Start -->
                    <!--<div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">3 Comments</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-4">
                            <div class="media mb-4">
                                <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                    <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                        accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                    <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                </div>
                            </div>
                            <div class="media">
                                <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                    <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                        accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                    <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                    <div class="media mt-4">
                                        <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1"
                                            style="width: 45px;">
                                        <div class="media-body">
                                            <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor
                                                labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed
                                                eirmod ipsum.</p>
                                            <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <!-- Comment List End -->

                    <!-- Comment Form Start -->
                    <!--<div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Leave a comment</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-4">
                            <form>
                                <div class="form-row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="url" class="form-control" id="website">
                                </div>

                                <div class="form-group">
                                    <label for="message">Message *</label>
                                    <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="submit" value="Leave a comment"
                                        class="btn btn-primary font-weight-semi-bold py-2 px-3">
                                </div>
                            </form>
                        </div>
                    </div>-->
                    <!-- Comment Form End -->
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