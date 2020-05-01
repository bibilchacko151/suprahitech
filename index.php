<?php include("common.php"); ?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
        <link rel="stylesheet" href="css/footer.css"/>
        <link rel="stylesheet" href="css/chatbox.css"/>
        <title><?php echo $TITLE_OF_PAGE; ?></title>
    </head>
    <body>

        <?php include("navigation.php"); ?>


        <div class="container-fluid">

            <?php include("slider.php"); ?>

        </div>
        
        <br/>
        <div class="container">
            <h3 class="text-center">Latest Products</h3>
                        <div class="row">
                            <div></div>
                            <?php
                            ?>
                            <?php for ($i = 0; $i < 3; $i++) { ?>
                                <div class="col-lg-4 col-xs-12  px-4 py-4">
                                    <div class="card" >
                                        <div class="card-img-top text-center">
                                            <img  width="120" height="120" src="assets/images/Model- Digital Series.jpg"/>
                                        </div>

                                        <div class="card-body text-center">
                                            <h5 class="card-title">Digital Series</h5>
                                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-primary">Details</a>
                                        </div>
                                    </div>

                                </div>
                            <?php } ?>





                        </div>
                    </div>
        
        <br/>
        
        <?php include 'chatbox.php'; ?>
        <br/>

        <?php include("footer.php") ?>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/234fe77a81.js" crossorigin="anonymous"></script>
        <script src="js/init.js"></script>
        <script src="js/chatbox.js"></script>
        
    </body>
</html>