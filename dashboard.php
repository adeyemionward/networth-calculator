<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Document</title>
</head>
<div class="main__wrapper">
    <div class="navbar">
        <div class="container">
            <div class="navbar__contents">
                <div class="navbar__logo">
                    <h2>Selena Networth Calculator Dashboard</h2>
                </div>
                <ul class="navbar__items">
                    <li><a href="/">Home</a></li>
                    <li><a href="/">About Us</a></li>
                    <li><a href="/">Team</a></li>
                    <!-- <li><a href="/">Sign Up</a></li> -->
                    <!-- <li><a href="logout.php">Log out</a></li> -->
                </ul>
            </div>
        </div>
    </div>
    <!--End of Navbar
    ==========================-->
    <!--Dashboard starts here
    =============================-->
    <div class="dashboard__wrapper">
        <div class="dashboard__left">
            <img src="./assets/profile1.png" class="profile-img" alt="">
           <ul>
               <li><a href="#" onclick="showDashboard()">Dashboard</a></li>
               <li><a href="#" onclick="showAssets()">Assets</a></li>
               <li><a href="#" onclick="showLiabilities()">Liabilities</a></li>
               <li><a href="#" onclick="showWorth()">Networth Calculator</a></li>
               <li><a href="#">Bank Exchange Rate</a></li>
               <li><a href="#">Newsfeed</a></li>
               <li><a href="#">Support</a></li>
           </ul>
        
        </div>
        <div class="dashboard__right">
            <div class="top__wrapper">
                <form class="serach__form">
                    <i class="fa fa-search"></i>
                    <input type="text" placeholder="Search ..." name="search">
                </form>
               <div class="top__right">
                    <!-- <p>achillesusuoyibo@gmail.con</p> -->
                    <a href="logout.php">Sign Out</a>
               </div>
            </div>
            <!--Dashboard
            ===================-->
            <div class="dashboard__right__contents">
                <h3>Welcome Back</h3>
                <small>Take control of your assets and liabilities and get a sense of your financial worth!</small>
                <div class="financial__info">
                    <div class="financial__card assets">
                        <h4>Total Assets</h4>
                        <p>&#8358; 00.00</p>
                    </div>
                    <div class="financial__card liabilities">
                            <h4>Total Liabilities</h4>
                            <p>&#8358; 00.00</p>
                        </div>
                        <div class="financial__card assets">
                                <h4>Total Assets</h4>
                                <p>&#8358; 00.00</p>
                            </div>
                </div>
            </div>
            <!--End of Dashboard
            =========================-->
            <!--Assets tab begins here
            =========================-->
            <div class="assets__wrapper">
                <h3>Assets</h3>
                <small>Having assets is what creates wealth. Your wealth is determined by how many assets you have.</small>
                <div class="assets__card">
                    <div class="assets__contents">
                        <h5>Cash</h5>
                <input type="text" id="cash">
            </div>
    <div class="assets__contents">
            <h5>Businesses</h5>
            <input type="text" id="business">
        </div>
        <div class="assets__contents">
                <h5>Real Estate</h5>
                <input type="text" id="estate">
            </div>
            <div class="assets__contents">
                    <h5>Other Investments</h5>
                    <input type="text" id="investment">
                </div>
                <div class="assets__contents">
                        <h5>Retirement Savings</h5>
                        <input type="text" id="savings">
                    </div>
                    <div class="assets__contents">
                            <h5>Life Insurance</h5>
                            <input type="text" id="insurance">
                        </div>
                        <div class="assets__contents">
                                <h5>Property</h5>
                                <input type="text" id="property">
                            </div><br />
                            <div class="assets__contents">
                                    <button class="calculate__btn">Calculate Total</button>
                                    <input type="text" id="total">
                                </div>
                </div>
            </div>
            <!--End of Assets
            ======================-->
            <!--Laiability section begins here
            ==============================-->
            <div class="liabilities__wrapper">
                    <h3>Liabilities</h3>
                    <small>These are the things that takes money away from you. Try to limit them.</small>
                    <div class="liabilities__card">
                            <div class="liability__contents">
                                    <h5>Debts</h5>
                                    <input type="text" id="property">
                                </div>
                                <div class="liability__contents">
                                        <h5>Bills Due</h5>
                                        <input type="text" id="property">
                                    </div><br />
                                <div class="liability__contents">
                                        <button class="liabilities__btn">Calculate Total</button>
                                        <input type="text" id="total">
                                    </div>
                    </div>
            </div>
            <!--End of Lability section
            =============================-->
            <!--Networth Calculator section
            ===============================-->
            <div class="networth__wrapper">
                <h3>Networth Calculator</h3>
                <small>Please enter the money value of your assets and liabilities to find your networth</small>
                <div class="networth__content">
                    <form class="assets__form">
                        <div class="cash">
                            <label for="cash">Cash</label><br />
                            <input type="text" placeholder="&#8358; 00.00" name="cash">
                        </div>
                    <div class="business">
                            <label for="cash">Business</label><br />
                            <input type="text" placeholder="&#8358; 00.00" name="business">
                        </div>
                        <div class="extate">
                                <label for="cash">Real Estate</label><br />
                                <input type="text" placeholder="&#8358; 00.00" name="real_estate">
                            </div>
                            <div class="investments">
                                    <label for="cash">Other Investments</label><br />
                                    <input type="text" placeholder="&#8358; 00.00" name="investments">
                                </div>
                                <div class="savings">
                                        <label for="cash">Retirement Savings</label><br />
                                        <input type="text" placeholder="&#8358; 00.00" name="savings">
                                    </div>
                                    <div class="insurance">
                                            <label for="cash">Life Insurance</label><br />
                                            <input type="text" placeholder="&#8358; 00.00" name="insurance">
                                        </div>
                                        <div class="property">
                                                <label for="cash">Property</label><br />
                                                <input type="text" placeholder="&#8358; 00.00" name="property">
                                            </div>
                                            <div class="total">
                                                    <label for="cash">Total</label><br />
                                                    <input type="text" placeholder="&#8358; 00.00" name="asset__total" class="total__input">
                                                </div>
                    </form>
                    <form class="liability__form">
                        <div class="debt">
                            <label for="debt">Debt</label>
                            <input type="text" placeholder="&#8358; 00.00" name="debt">
                        </div>
                        <div class="bills">
                                <label for="debt">Bills</label>
                                <input type="text" placeholder="&#8358; 00.00" name="debt">
                            </div>
                            <div class="total">
                                    <label for="debt">Total</label>
                                    <input type="text" placeholder="&#8358; 00.00" name="liability__total" class="total__input">
                                </div>
                                <button class="calculate__btn">Calculate</button>
                                <div class="result">
                                <h4>Your Networth is</h4>
                                <p>&#8358; 00.00</p>
                                </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./dashboard.js"></script>
</body>
</html>