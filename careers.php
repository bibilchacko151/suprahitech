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
        <title><?php echo $TITLE_OF_PAGE; ?>::Careers</title>
    </head>
    <body>
        <!-- Old  Careers will be hidden from the  -->
        <?php include("navigation.php"); ?>


        <?php
        $careers = json_decode(file_get_contents("js/careers.json"), true);
        ?>

        <div class="container">
            <div class="col-12">
            <div class="row">
                


                <!-- Button trigger modal -->
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                  Launch demo modal
                </button> -->

                <!--  Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form>
                                    <div class="form-group">
                                        <label for="nameOfEmployee">Full Name <span style="color:red;"><small>*</small></span>:</label>
                                        <input type="text" class="form-control" required id="nameOfEmployee" placeholder="eg. Mathew Parakaveetil">
                                    </div>

                                    <div class="form-group">
                                        <label for="ageOfEmployee">Gender: <span style="color:red;"><small>*</small></span>:</label>
                                        <select class="custom-select" >
                                            <option>MALE</option>
                                            <option>FEMALE</option>
                                            <option>OTHERS</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="ageOfEmployee">Age: <span style="color:red;"><small>*</small></span>:</label>
                                        <input type="number" min="18" max="100" class="form-control" required id="ageOfEmployee" placeholder="eg. 28">
                                    </div>

                                    <div class="form-group">
                                        <label for="mobileOfEmployee">Mobile: <span style="color:red;"><small>*</small></span>:</label>
                                        <input type="text" maxlength="10" class="form-control" required id="mobileOfEmployee" placeholder="eg. 9349828556">
                                    </div>

                                    <div class="form-group">
                                        <label for="landLineOfEmployee">Landline Number: <span style="color:red;"><small></small></span>:</label>
                                        <input type="text" maxlength="14" class="form-control"  id="landLineOfEmployee" placeholder="eg. 04842237646">
                                    </div>

                                    <div class="form-group">
                                        <label for="emailOfEmployee">Email: <span style="color:red;"><small>*</small></span>:</label>
                                        <input type="email" class="form-control" required id="emailOfEmployee" placeholder="eg. br@abc.com"/>
                                    </div>

                                    <div class="form-group">
                                        <label for="ageOfEmployee">Country: <span style="color:red;"><small>*</small></span>:</label>
                                        <select class="custom-select" >
                                            <option>India</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="ageOfEmployee">Address: <span style="color:red;"><small>*</small></span>:</label>
                                        <textarea class="form-control" required >
            
                                        </textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="ageOfEmployee">Pincode: <span style="color:red;"><small>*</small></span>:</label>
                                        <input type="text" class="form-control" required id="emailOfEmployee" maxlength="12" placeholder="eg. 682500"/>
                                    </div>

                                </form>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success">Apply</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion" id="careers">

<?php
foreach ($careers as $key => $value) {
    ?>

                        <div class="card">
                            <div class="card-header" id="heading<?php echo $key ?>">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $key ?>" aria-expanded="true" aria-controls="collapse<?php echo $key ?>">
    <?php
    $variable = $value["job_title"];
    echo $value["job_title"];
    ?>

                                    </button>
                                </h2>
                            </div>

                            <div id="collapse<?php echo $key ?>" class="collapse show" aria-labelledby="heading<?php echo $key ?>" data-parent="#careers">
                                <div class="card-body">
                                    <p ><?php echo $value["job_desc"]; ?></p>
                                    <p class="text-left">
                                        <small>
                                            <b>Last Date:</b> <?php echo $value["last_date_to_recieve_application"]; ?>
                                        </small>
                                    </p>
                                    <div class="text-lg-right text-xl-right text-sm-center text-center">
                                        <button onclick="document.getElementById('modalTitle').innerText = '<?php echo $variable; ?>'" class=" btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                            APPLY
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
    <?php
}
?>
                </div>

            </div>
        </div>
        </div>

<?php include("footer.php") ?>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
         <script src="https://kit.fontawesome.com/234fe77a81.js" crossorigin="anonymous"></script>
    </body>
</html>