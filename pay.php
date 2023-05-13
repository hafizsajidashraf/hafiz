<?php include ("partials/header.php"); ?>

<?php include ("partials/navbar.php"); ?>

        <!-- Header Section -->
        <div class="Pay">
          <div class="container">
            <div class="row">
              <div class="col-12 text-center">
                <h2 style="margin-top: 205px; color: white">Pay Online</h2>
                <a class="headLink" href="index.php">Home</a>
                <span class="headLink" style="color: lightgrey;"> / Pay Online</span>
              </div>
            </div>
          </div>
        </div>

            <!-- Main Pay Section -->
        <div class="mainPay">
            <div class="container payment px-5 mb-5 py-5">
                <div class="col-md-6 mx-auto">
                    <form class="paymentform py-5 px-3" action="" method="">
                        <h3 class="text-center fw-bold mb-4" style="color: darkcyan;">Confirm Your Payment</h3>
                        <hr style="color: white;">
                        <div class="first-row mb-4">
                            <div class="owner">
                                <h5>Owner</h5>
                                <div class="input-feild">
                                    <input type="text" placeholder="Hafiz Sajid Ashraf">
                                </div>
                            </div>
                            <div class="CVV">
                                <h5>CVV</h5>
                                <div class="input-feild">
                                    <input type="password" placeholder="XXXX">
                                </div>
                            </div>
                        </div>
                        <div class="second-row mb-4">
                            <div class="card-number">
                                <h5>Card Number</h5>
                                <div class="input-feild">
                                    <input type="text" placeholder="XXXX-XXXX-XXXX-XXXX">
                                </div>
                            </div>
                        </div>
                        <div class="third-row mb-4">
                                <h5>Expiry Date</h5>
                                <div class="selection">
                                    <div class="date">
                                        <select name="months" id="months">
                                            <option value="Jan">Jan</option>
                                            <option value="Feb">Feb</option>
                                            <option value="Mar">Mar</option>
                                            <option value="Apr">Apr</option>
                                            <option value="May">May</option>
                                            <option value="Jun">Jun</option>
                                            <option value="Jul">Jul</option>
                                            <option value="Aug">Aug</option>
                                            <option value="Sep">Sep</option>
                                            <option value="Oct">Oct</option>
                                            <option value="Nov">Nov</option>
                                            <option value="Dec">Dec</option>
                                        </select>
                                        <select name="years" id="years">
                                            <option value="2030">2030</option>
                                            <option value="2029">2029</option>
                                            <option value="2028">2028</option>
                                            <option value="2027">2027</option>
                                            <option value="2026">2026</option>
                                            <option value="2025">2025</option>
                                            <option value="2024">2024</option>
                                            <option value="2023">2023</option>
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                        </select>
                                    </div>
                                    <div class="cards">
                                        <img src="images/creditcard1.jpg" alt="">
                                        <img src="images/creditcard2.png" alt="">
                                        <img src="images/creditcard3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        <div class="btn confirmbutton"><a class="confirm" href="">Confirm Payment</a></div>
                    </form>
                </div>
            </div>
        </div>

<?php include ("partials/footer.php"); ?>