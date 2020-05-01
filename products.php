


<?php include("common.php"); ?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/footer.css"/>
        <link rel="stylesheet" href="css/products.css"/>
        <title><?php echo $TITLE_OF_PAGE; ?>::Contact</title>
    </head>
    <body>
        <?php include 'navigation.php'; ?>

        <div class="container ">
            <div class="row">
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Digital Series</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6 col-lg-6 ">
                                            <img class="img-fluid" src="assets/images/Model- Digital Series.jpg"  alt="...">
                                        </div>
                                        <div class="col-xs-12 col-md-6 col-lg-6">
                                            <h6><u><b>Features</b></u></h6>
                                     
                                            <div>Digital Technology 1GBT</div>
                                            <div>Generator Compatibipty</div>
                                            <div>RS232 communication</div>
                                            <div>Pure sine wave</div>
                                            <div>High Repabipty</div>
                                            <div>Low Maintanance</div>
                                            <div>Isolation transformer at output side</div>
                                        
                                            <h6 ><b><u>Technical Specification</u></b></h6>
                                        <div>
                                            <b>Capacity:</b>
                                           
                                                <div>Single phase in & out 1KVA to 10kVA</div>
                                                <div> 3Phase to single out 5KVA to 30KVA</div>
                                                <div>  3 Phase in & out 5KVA to 120 KVA</div>
                                            


                                        </div>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <div class="wt-100 text-center">
                                    <div><h5>Product Details</h5></div>
                                    <div>
                                        <span>Category Name</span>:   <span>Online Sine Wave UPS</span>
                                    </div>
                                    <div>
                                        <span>Product Name</span>:   <span>Digital Series</span>
                                    </div>
                                    <div>
                                        <span>Product Code</span>:   <span>Digital Series</span>
                                    </div>
                                    <div>
                                        <span>Capacity</span>:   <span>1 KVA To 1000 KVA</span>
                                    </div>
                                     <div>
                                        <span>Online/Offline</span>:   <span>OnLine</span>
                                    </div>
                                    <div>
                                        <span>Phase</span>:   <span>Single</span>
                                    </div>
                                    <div>
                                 
                                        <span>
                                            <a href="http://www.suprahitech.com/prod_brochure/Supra%20UPS%20Final.pdf" >Download Brouchure</a>
                                        </span>
                                    </div>
                                    
                                    
                                    
                                    
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Enquiry</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-xs-12">
                    <div style="border-radius: 0;" class="text-center w-100 btn btn-primary">Filters</div>
                    <hr/>
                    <div>
                        <form >
                            <div class="form-group">
                                <select  class="form-control">
                                    <option  selected disabled="true">-- Select Category --</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nameOfEmployee">Capacity(in KVA's) :</label>
                                <div class="form-row">
                                    <div class="col">
                                        <input type="number" min="1"   class="form-control" placeholder="100">
                                    </div>
                                    <div class="col">
                                        <input type="number" min="1"  class="form-control" placeholder="200">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <select  class="form-control">
                                    <option  selected disabled="true">-- Select Phase --</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select  class="form-control">
                                    <option  selected disabled="true">-- Select On/Off Line --</option>
                                </select>
                            </div>


                            <div class="text-center">
                                <button type="submit" class="btn btn-success w-100">Search</button>
                            </div>
                        </form>
                    </div>


                </div>

                <div class="col-lg-9 col-xs-9">
                    <div class="container">
                        <div class="row">

                            <?php
                            ?>
                            <?php for ($i = 0; $i < 9; $i++) { ?>
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

                    <div class="text-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>

        </div>

        <br/>
        <br/>


        <?php include 'footer.php'; ?>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/234fe77a81.js" crossorigin="anonymous"></script>
    </body>
</html>
