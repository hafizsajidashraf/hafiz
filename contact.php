<?php include ("partials/header.php"); ?>

<?php include ("partials/navbar.php"); ?>

        <!-- Header Section -->
        <div class="Contact">
          <div class="container">
            <div class="row">
              <div class="col-12 text-center">
                <h2 style="margin-top: 205px">Contact Us</h2>
                <a class="headLink" href="index.php">Home</a>
                <span class="headLink" style="color: lightgrey;"> / Contact</span>
              </div>
            </div>
          </div>
        </div>

            <!-- Main Contact Section -->
        <div class="mainContact py-5 mx-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-10 mx-auto">
                        <form class="py-5" id="admissionForm" action="" method="POST">
                            <?php 

                                if (isset($_POST['contact'])) {
                                    $contact_name = $_POST['contact_name'];
                                    $contact_phone = $_POST['contact_phone'];
                                    $contact_message = $_POST['contact_message'];

                                    $sql = "INSERT INTO contacts(contact_name, contact_phone, contact_message) VALUES ('$contact_name', '$contact_phone', '$contact_message')";
                                    $query = mysqli_query($connection, $sql);

                                    header("Location:index.php");
                                }
                            ?>
                            <h3 class="text-center mb-4 fw-bold" style="color: darkcyan;">Feel Free <br>to Contact Us</h3>
                            <div class="divider mb-4">
                                <hr>
                            </div>
                          <div class="mb-3">
                            <input type="text" class="form-control mb-4" id="name" name="contact_name" placeholder="Your Name*" aria-describedby="emailHelp" required>
                          </div>
                          <div class="mb-3">
                            <input type="text" class="form-control mb-4" id="phone" name="contact_phone" placeholder="Phone Number*" required>
                          </div>
                          <textarea class="mb-4" placeholder="Type your message here..." rows="4" name="contact_message" id="message"></textarea>
                          <button type="submit" class="btn" name="contact">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php include ("partials/footer.php"); ?>