<?php
$active_is = $_GET["active_is"];
$home = "";
$support = "";
$about = "";
$careers = "";
$contactus = "";
$products = "";
$news = "";


if ($active_is == "1") {
    $home = "active";
} else if ($active_is == "2") {
    $support = "active";
} else if ($active_is == "3") {
    $about = "active";
} else if ($active_is == "4") {
    $careers = "active";
} 
elseif ($active_is == "5") {
    $contactus = "active";
}
elseif ($active_is == "6") {
    $products = "active";
}
elseif ($active_is == "7") {
    $news = "active";
}
?>

<!-- NAVIGATION STARTS -->
<div class="container-fluid">
    <div class="container">
        <div class="text-center">
            <img src ="assets/images/logo.gif" ></img>
        </div>
    </div>
    <br/>
    <div class ="container-fluid">



        <nav class=" navbar navbar-expand-sm navbar-expand-xl navbar-expand-md  navbar-expand-lg navbar-light bg-light">


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-auto">

                    <li class="nav-item <?php echo $home; ?>">
                        <a  id="home" class="nav-link" href="index.php?active_is=1"><b>Home</b> </a>
                    </li>
                    <li class="nav-item <?php echo $about; ?>">

                        <a class="nav-link" href="aboutus.php?active_is=3">
                            <b>About Us</b>
                        </a>
                    </li>
                    <li class="nav-item <?php echo $support; ?>">
                        <a class="nav-link" href="support.php?active_is=2"><b>Support</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><b>GEM R/C</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><b>Dealership OEM Supply</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><b>Approvals</b></a>
                    </li>
                    <li class="nav-item <?php echo $products; ?>">
                        <a class="nav-link" href="products.php?active_is=6"><b>Products</b></a>
                    </li>
                    
                    <li class="nav-item <?php echo $news; ?>">
                        <a class="nav-link" href="news.php?active_is=7"><b>News</b></a>
                    </li>

                 

                    <li class="nav-item">
                        <a class="nav-link" href="careers.php?active_is=4"><b>
                                Careers
                            </b></a>

                    </li>

                    <li class="nav-item <?php echo $contactus; ?>">
                        <a class="nav-link" href="contactus.php?active_is=5"><b>Contact Us</b></a>
                    </li>

                </ul>
            </div>
        </nav>

    </div>
</div>
<!-- NAVIGATION END -->

<br/>