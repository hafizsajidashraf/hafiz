<?php include ("partials/header.php"); ?>

<?php include ("partials/navbar.php"); ?>

            <!-- Header Section -->
        <div class="Contact">
          <div class="container">
            <div class="row">
              <div class="col-12 text-center">
                <h2 style="margin-top: 205px">Get Admission</h2>
                <a class="headLink" href="index.php">Home</a>
                <span class="headLink" style="color: lightgrey;"> / Get Admission</span>
              </div>
            </div>
          </div>
        </div> 

            <!-- Main Admission Section -->
        <div class="mainAdmission px-5">
            <div class="contaiiner my-5">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-10 mx-auto">
                        <form class="py-5" id="admissionForm" action="" method="POST">
                            <?php 

                                if (isset($_POST['register'])) {
                                    $std_name = $_POST['std_name'];
                                    $std_phone = $_POST['std_phone'];
                                    $std_course = $_POST['std_course'];
                                    $std_country = $_POST['std_country'];

                                    $phonequery = "SELECT * FROM students WHERE std_phone = '$std_phone'";
                                    $query = mysqli_query($connection, $phonequery);

                                    $phonecount = mysqli_num_rows($query);
                                    if ($phonecount > 0) {
                                        echo "<script type='text/javascript'>alert('Sorry! This phone number is already registered')</script";
                                    }
                                    else{

                                        echo "<script type='text/javascript'>alert('Congratulations! You have registered sucessfully')</script";
                                        
                                        $insertquery = "INSERT INTO students(std_name, std_phone, std_course, std_country) VALUES('$std_name', '$std_phone', '$std_course', '$std_country')";
                                        $iquery = mysqli_query($connection, $insertquery);
                                        
                                    header("Location: index.php");
                                    }
                                }
                            ?>
                            <h3 class="text-center mb-4 fw-bold" style="color: darkcyan;">Get Admission</h3>
                            <div class="divider mb-4">
                                <hr>
                            </div>
                          <div class="mb-3">
                            <input type="text" class="form-control mb-4" id="name" name="std_name" placeholder="Your Name*" aria-describedby="emailHelp" required>
                          </div>
                          <div class="mb-3">
                            <input type="text" class="form-control mb-4" id="phone" name="std_phone" placeholder="Phone Number*" required>
                          </div>
                          <select name="std_course" id="formSelect" class="mb-3">
                              <option value="" selected>--Select Course--</option>
                              <option value="Norani Qaida">Norani Qaida</option>
                              <option value="Quran Reading">Quran Reading</option>
                              <option value="Quran Tajweed">Quran Tajweed</option>
                              <option value="Quran Memorization">Quran Memorization</option>
                              <option value="Tafseer Ul Quran">Tafseer Ul Quran</option>
                              <option value="Ijazah Course">Ijazah Course</option>
                          </select>
                          <div class="mb-3">
                            <input type="text" class="form-control mb-4" id="country" name="std_country" placeholder="Country*" aria-describedby="emailHelp" required>
                          </div>
                          <button type="submit" class="btn" name="register">Register Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
<?php include ("partials/footer.php"); ?>