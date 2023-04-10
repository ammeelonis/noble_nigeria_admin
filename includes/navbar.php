<?php 

$today = date("Y/m/d");
$timestamp = strtotime($today);
$day = date('D', $timestamp);
$full_date = $day . ", " . $today;

?>
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center bg-dark px-lg-5">
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-n2">
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="#"><?php echo $full_date; ?></a>
                        </li>
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="#">Advertise</a>
                        </li>
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body small" href="#">Login</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 text-right d-none d-md-block">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-auto mr-n2">
                        <li class="nav-item">
                            <a class="nav-link text-body" href="https://twitter.com/noblenigerianetwork" target="_blank"><small class="fab fa-twitter"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="https://facebook.com/noblenigerianetwork" target="_blank"><small class="fab fa-facebook-f"></small></a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link text-body" href="https://instagram.com/noblenigerianetwork" target="_blank"><small class="fab fa-instagram"></small></a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link text-body" href="https://www.youtube.com/@noblenigeria" target="_blank"><small class="fab fa-youtube"></small></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row align-items-center bg-white py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="index.php" class="navbar-brand p-0 d-none d-lg-block">
					<img style="width:100px;" src="img/logo.png">
                   <!-- <h1 class="m-0 display-4 text-uppercase text-primary">Biz<span class="text-secondary font-weight-normal">News</span></h1> -->
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <a href="#"><img class="img-fluid" src="img/ads-728x90.png" alt=""></a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
            <a href="index.php" class="navbar-brand d-block d-lg-none">
				<img style="width:50px;" src="img/logo_white.png">
                <!--<h1 class="m-0 display-4 text-uppercase text-primary">Biz<span class="text-white font-weight-normal">News</span></h1> -->
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index.php" class="nav-item nav-link <?php if ($page_id == 'home' || 'single'){echo "active";}?>">Home</a>
                    <!--<a href="category.php" class="nav-item nav-link">Category</a>
                    <a href="single.php" class="nav-item nav-link">Single News</a>-->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?php if ($page_id == 'category'){echo "active";}?>" data-toggle="dropdown">Category</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="category.php?id=politics" class="dropdown-item">Politics</a>
                            <a href="category.php?id=business" class="dropdown-item">Business</a>
                            <a href="category.php?id=health" class="dropdown-item">Health</a>
                            <a href="category.php?id=science" class="dropdown-item">Science</a>
                            <a href="category.php?id=education" class="dropdown-item">Education</a>
                            <a href="category.php?id=food" class="dropdown-item">Food</a>
                            <a href="category.php?id=entertainment" class="dropdown-item">Entertainment</a>
                            <a href="category.php?id=travel" class="dropdown-item">Travel</a>
                            <a href="category.php?id=lifestyle" class="dropdown-item">Lifestyle</a>
                            <a href="category.php?id=sports" class="dropdown-item">Sports</a>
                            <a href="category.php?id=opinion" class="dropdown-item">Opinion</a>
                            
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link <?php if ($page_id == 'contact'){echo "active";}?>">Contact</a>
                </div>
                
                    
                    <form action="search_page.php" method="post" style="padding:0; margin:0;">
                        <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                            <input name="term" type="text" class="form-control border-0" placeholder="Keyword">
                            <div class="input-group-append">
                                <button type="submit" class="input-group-text bg-primary text-dark border-0 px-3"><i
                                        class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                    
                
            </div>
        </nav>
    </div>
    <!-- Navbar End -->