<?php 


include_once('admin/pages/includes/connection.php');
include('includes/queries.php');

if (isset($_POST['term'])){
  //display articles

  $search_term = $_POST['term'];
  //echo $search_term;
  //$variable = $mysqli->real_escape_string($_POST['term']);

  
    $search_query = "SELECT * FROM noble_articles WHERE title LIKE '%$search_term%' OR section_1 LIKE '%$search_term%'";

  $search_result = mysqli_query($conn, $search_query);
  $search_rows = $search_result->fetch_all(MYSQLI_ASSOC);
  //echo $rows[2];

  
  if(!$rows){
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
                                <h4 class="m-0 text-uppercase font-weight-bold">Search Results</h4>
                               
                            </div>
                        </div>
                       <!-- <div class="col-lg-6">
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>
                                                  
                        </div>-->
                                                
                            
                        <?php 
                            if(isset($search_rows)){
                            foreach ($search_row as $search_rows){

                                printf($search_row);

                                echo '<div class="col-lg-6">
                                <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                    <img class="img-fluid" src="admin/images/' .  $search_row["image_1"]  . '" alt="" style="object-fit:cover; height:100%; overflow:hidden;">
                                    <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="category.php?id=' .  $search_row["category"]  . '">' .  $search_row["category"]  . '</a>
                                            <a class="text-body" href=""><small>' .  $search_row["created_at"]  . '</small></a>
                                        </div>
                                        <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="single.php?id=' .  $search_row["id"]  . '">' .  $search_row["title"]  . '</a>
                                    </div>
                                </div>
                                                      
                            </div>';

                                }
                            }
                            
                            ?>      
                        
                        

                        
                        <div class="col-lg-12 mb-3">
                            <a href=""><img class="img-fluid w-100" src="img/ads-728x90.png" alt=""></a>
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