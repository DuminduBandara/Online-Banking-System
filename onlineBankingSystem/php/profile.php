<?php require_once './connect.php' ?>

<?php

    $getUser = '';

    session_start();  

    $getUser = $_SESSION['username'];

    if($getUser == ''){
      header("location:../html/login.html");
    }

    $sql = "SELECT *FROM useraccount where Username = '$getUser'";

    $result = mysqli_query($connection,$sql);

    if($result){

        while($row = mysqli_fetch_assoc($result)){
          $fname = $row['FirstName'];
          $lname = $row['LastName'];
          $fullName =  $row['FULLName'];
          $DOB = $row['DateOFBirth'];
          $NIC =  $row['NIC'];
          $passport = $row['PassportNO'];
          $gender = $row['Gender'];
          $TP =  $row['Telephone'];
          $email = $row['Email'];
          $mariStatus = $row['MaritalStatus'];
          $home =  $row['Home'];
          $city = $row['City'];
          $province = $row['Province'];
          $accountType =  $row['AccountType'];
          $username =  $row['Username'];
          $accountNo =  $row['AccountNo'];
          $accBalance = $row['AccountBalance'];
          $cardType =  $row['cardType'];
          if($cardType == ''){
            $cardBalance =  "You don't have any Credit card";
          }
          else{
            $cardBalance = "LKR.".$row['cardBalance'];
          }
        }
    }

    $_SESSION['getAccount'] = $accountNo;

    $sql1 = ($connection->query("SELECT * FROM loan where AccountNo = '$accountNo'"));

    if(mysqli_num_rows($sql1) > 0){
      if($sql1){
        while($r = mysqli_fetch_assoc($sql1)){
          $loanType = $r['loanType'];
          $loanAmount = $r['loanAmount'];
          $interRate = $r['loanInterestRate'];
          $loanInter = $r['loanInterest'];
          $finalLoan = $r['loanFinalAmount'];
          $appDate = $r['loanApplyDate'];
          $exDate = $r['loanExpiresDate'];
        }
      }
    }else{
      echo"
        <style>
          .loan-info{
            display:none;
          }
        </style>
      ";
    }

    if(isset($_POST['del'])){
      $sql = ($connection->query("SELECT FROM useraccount WHERE Username = '$getUser'"));
    }



?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <link rel="shortcut icon" href="../images/logo/blue-logo-02.jpg">
  <link rel="stylesheet" href="../css/common-style.css">
  <link rel="stylesheet" href="../css/profile.css">

  <!-- fontawesome link for add icons in web page  -->
  <script src="https://kit.fontawesome.com/4e05476d91.js" crossorigin="anonymous"></script>
  <style>
    .loan-info{
    box-shadow:var(--pri-box-shadow);
    font-family: var(--pri-ft-family);
    margin-bottom:2rem;
    }

    .loan-info h2{
      text-align: center;
      line-height:3;
    }

    .loan-data{
        width: 100%;
        border-collapse: collapse;
    }

    .loan-data td{
      padding:1.5rem 5rem;
      font-size:1.25rem;
    }

    .loan-data tr:nth-child(odd){
      background-color: #EDEDED;
    }

    .del-btn{
      margin-left:62%;
    }

  </style>
</head>

<body>
  
  <main class="container" id="m-cont">
    <nav class="details-nav">
      <ul class="d-nav details-list">
        <li><a href="#"><i class="fa-solid fa-location-dot"></i><span>Royal JP, MS, Kandy</span></a></li>
        <li><a href="#"><i class="fa-solid fa-phone"></i><span>+94 112356234</span></a></li>
        <li><a href="#"><i class="fa-solid fa-envelope"></i><span>localTrust@info.lk</span></a></li>
      </ul>
      <ul class="d-nav apps-list">
        <li><a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
        <li><a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
        <li><a href="https://www.youtube.com/" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
        <li><a href="https://lk.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
      </ul>
    </nav>
    <!-- header -->
    <header class="top-header" id="header-top">
      <div class="t-h-st">
        <div class="logo-content">
          <a href="../html/home.html" class="logo-link"><img src="../images/logo/blue-logo-02.jpg" style="color:#fff;" alt="#" class="logo-img"></a>
        </div>
        <div class="search-content">
          <div class="s-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
          <div class="s-bar">
            <input type="search" name="search" id="search-input" placeholder="Search here">
            <button type="button"  id="close-btn" onclick="clearContent()"><i class="fa-solid fa-xmark"></i></button>
          </div>
        </div>
      </div>
      <ul class="t-nav-list">
        <li class="t-nav-item"><a href="../html/home.html" class="t-nav-link">Home</a></li>

        <!-- dropdown list -->
        <li class="t-nav-item">
          <a href="#" class="t-nav-link prod" id="pro"><span>Products</span><i class="fa-solid fa-chevron-down"></i></a>
          <ul class="dropdown-list product" id="product">
            <li><a href="#credit-select" class="drop-link">Credit Cards</a></li>
            <li><a href="../html/account.html" class="drop-link">Bank Accounts</a></li>
            <li><a href="../html/loan.html" class="drop-link">Bank Loans</a></li>
          </ul>
        </li>
        <li class="t-nav-item">
          <a href="#" class="t-nav-link ser" id="ser"><span>Services</span><i class="fa-solid fa-chevron-down"></i></a>
          <ul class="dropdown-list service" id="service">
            <li><a href="../php/loanApplication.php" class="drop-link">Apply Loan</a></li>
            <li><a href="../php/cardApplication.php" class="drop-link">Apply Credit Cards</a></li>
            <li><a href="../html/support.html" class="drop-link">FAQ</a></li>
          </ul>
        </li>
        <!-- end of dropdown list -->

        <li class="t-nav-item"><a href="../html/contact.html" class="t-nav-link">Contact</a></li>
        <li class="t-nav-item"><a href="../php/profile.php" class="t-nav-link active-page"><i class="fa-solid fa-circle-user"></i><span>Account</span></a></li>
      </ul>
      </nav>
    </header>
    <!-- end of header -->

    <!-- main section -->
    <section class="main-section">
      <a href="./logout.php" class="logout-btn"><span>Logout</span><i class="fa-solid fa-right-from-bracket"></i></a>
      <a href="./del.php" class="logout-btn del-btn" name="del-btn"><span>Delete An Account</span><i class="fa-solid fa-right-from-bracket"></i></a>
      <div class="profile-content">
        <nav class="profile-nav">
          <div class="about-profile">
            <div class="profile-image">
              <img src="../images/avater.jpg" alt="#" class="profile-img">
            </div>
            <h1 class="profile-name">Hi <?php echo $fname ?></h1>
            <h3 class="account-no"><span style="font-size:1rem; margin-right:0.5rem;"><?php echo $accountType ?></span><span style="font-size:1.4rem;"><?php echo $accountNo ?></span></h3>
          </div>
          <div class="page-toggle">
            <button class="t-btn-01" id="t-btn"> 
              <span><i class="fa-solid fa-chart-bar"></i><span>Summery</span></span><i class="fa-solid fa-chevron-right"></i>
            </button>
            <button class="t-btn-02" id="t-btn">
              <span><i class="fa-solid fa-user"></i><span>User Profile</span></span><i class="fa-solid fa-chevron-right"></i>
            </button>
          </div>
        </nav>
        <aside class="details-container">
          <div class="details-page-01">
            <div class="details-item">
              <div class="account-info">
                <h3 class="details-title"><?php echo $accountType ?></h3>
                <ul class="balance-list">
                  <li>
                    <h2 style="color:var(--sec-bg-clr);"><?php echo "LKR." . $accBalance ?></h2>
                    <span>Available Balance</span>
                  </li>
                  <li>
                    <h2 style="color: #fb1c16;">LKR 1000.90</h2>
                    <span>Recent Payment</span>
                  </li>
                </ul>
              </div>
              <div class="card-info">
                <h3 class="details-title">Credit Card Balance <?php echo '('. $cardType . ')' ?></h3>
                <h2><?php echo $cardBalance ?></h2>
                <img src="../images/6072743.jpg" alt="#" class="card-img">
              </div>
            </div>
            <div class="loan-info">
                <h2>Loan Details</h2>
                <table class="loan-data">
                  <tr>
                    <td>Loan Amount</td>
                    <td><?php echo "LKR." . $loanAmount ?></td>
                  </tr>
                  <tr>
                    <td>Full Loan Amount</td>
                    <td><?php echo "LKR." . $finalLoan ?></td>
                  </tr>
                  <tr>
                    <td>Loan Type</td>
                    <td><?php echo $loanType ?></td>
                  </tr>
                  <tr>
                    <td>Loan Interest per month</td>
                    <td><?php echo "LKR." . $loanInter ?></td>
                  </tr>
                  <tr>
                    <td>Loan Interest Rate</td>
                    <td><?php echo $interRate. "%" ?></td>
                  </tr>
                  <tr>
                    <td>Loan Applied Date</td>
                    <td><?php echo $appDate ?></td>
                  </tr>
                  <tr>
                    <td>Loan Expired Date</td>
                    <td><?php echo $exDate ?></td>
                  </tr>
                </table>
              </div>
            <div class="trans-content">
              <div class="trans-link">
                <a href="./ePassBook.php" target="_blank">View All Transactions</a>
              </div>
              <ul class="trans-list">
                <li>
                  <div class="trans-info">
                    <h1>Saving Account</h1>
                    <p>Daraz Online Shopping</p>
                    <p>22/04/2022</p>
                  </div>
                  <div class="trans-amount">
                    <h2>+200.00</h2>
                  </div>
                </li>
                <li>
                  <div class="trans-info">
                    <h1>Saving Account</h1>
                    <p>Daraz Online Shopping</p>
                    <p>22/04/2022</p>
                  </div>
                  <div class="trans-amount">
                    <h2>+200.00</h2>
                  </div>
                </li>
                <li>
                  <div class="trans-info">
                    <h1>Saving Account</h1>
                    <p>Daraz Online Shopping</p>
                    <p>22/04/2022</p>
                  </div>
                  <div class="trans-amount">
                    <h2>+200.00</h2>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="details-page-02" style="display:none;">
            <h1 class="table-title">Account Details</h1>
            <table class="acc-table">
              <tr>
                <td>Account type</td>
                <td><?php echo $accountType ?></td>
              </tr>
              <tr>
                <td>Username</td>
                <td><?php echo $username ?></td>
              </tr>
              <tr>
                <td>Full Name</td>
                <td><?php echo $fullName ?></td>
              </tr>
              <tr>
                <td>Date of Birth</td>
                <td><?php echo $DOB ?></td>
              </tr>
              <tr>
                <td>NIC</td>
                <td><?php echo $NIC ?></td>
              </tr>
              <tr>
                <td>Passport Number</td>
                <td><?php echo $passport ?></td>
              </tr>
              <tr>
                <td>Gender</td>
                <td><?php echo $gender ?></td>
              </tr>
              <tr>
                <td>Telephone Number</td>
                <td><?php echo "(+94)" . $TP ?></td>
              </tr>
              <tr>
                <td>Email</td>
                <td><?php echo $email ?></td>
              </tr>
              <tr>
                <td>Marital Status</td>
                <td><?php echo $mariStatus ?></td>
              </tr>
              <tr>
                <td>Address</td>
                <td><?php echo $home ?></td>
              </tr>
              <tr>
                <td>City</td>
                <td><?php echo $city ?></td>
              </tr>
              <tr>
                <td>Province</td>
                <td><?php echo $province ?></td>
              </tr>
            </table>
          </div>
        </aside>
      </div>  
    </section>
    <!-- end of main section -->

    <!-- footer -->
    <footer>
      <div class="footer-content">
        <div class="f-c-item">
          <div class="f-c-logo">
            <img src="../images/logo/blue-logo-02.jpg" alt="logo" class="f-logo" style="width:150px;">
          </div>
          <p id="f-para">We are a reliable and fast-growing outsourcing call center company  that works with clients from all over the world.</p>
        </div>
        <div class="f-c-item">
          <ul class="f-l-list">
            <li><a href="./#m-cont">Home</a></li>
            <li><a href="./#credit-select">Credit Cards</a></li>
            <li><a href="./account.html">Bank Accounts</a></li>
            <li><a href="./loan.html">Bank Loans</a></li>
            <li><a href="./support.html">FAQ</a></li>
            <li><a href="./contact.html">Contact</a></li>
          </ul>
        </div>
        <div class="f-c-item">
          <h2>Contact Us</h2>
          <ul class="f-list">
            <li><i class="fa-solid fa-location-dot"></i><span>Royal Junction Park, Kandy</span></li>
            <li><i class="fa-solid fa-phone"></i><span>+94 112356234</span></li>
            <li><i class="fa-solid fa-envelope"></i><span>localTrust@info.lk</span></li>
          </ul>
        </div>
        <div class="f-c-item">
          <h2>Get least updates</h2>
          <div class="f-sub">
            <input type="email" name="email" id="f-input" placeholder="Enter your email">
            <button type="submit" id="f-btn">Subscribe</button>
          </div>
        </div>
      </div>
      <ul class="f-apps-list">
        <li><a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
        <li><a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
        <li><a href="https://www.youtube.com/" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
        <li><a href="https://lk.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
      </ul>
      <p class="copy-right" style="color:#fff;">&copy;copyright &copy;Local Trust Bank(PVT).LTD <span id="cpy-date"></span> .All rights reserved</p>
    </footer>
    <!-- end of footer -->
    <!-- feedback  form -->
    <div class="popup-feed">
      <button href="#" class="btn feed-link">
        <span>Feedback</span>
        <i class="fas fa-comments"></i>
      </button>
    </div>

    <section class="feedback-sec">
      <aside class="feedback-content">
        <button class="btn close-btn f-c-btn"><i class="fa-solid fa-xmark"></i></button>
        <h1>Local Trust Bank</h1>
        <div class="f-f-content">
          <form action="#" class="f-f-form">
            <div class="f-f-item">
              <label for="email">Email</label>
              <input type="email" name="email" id="f-f-email" placeholder="example123@info.com">
            </div>           
            <div class="f-f-item">
              <label for="message">What do you have to say about our services?</label>
              <textarea name="message" id="f-f-message" placeholder="Enter your suggestions"></textarea>
            </div>
            <button type="submit" class="btn f-s-btn"><span>Send feedback</span><i class="fa-solid fa-paper-plane"></i></button>
          </form>
        </div>
      </aside>
    </section>
    <!-- end of feedback  form -->

    <a href="#m-cont" class="top-link"><i class="fa-solid fa-circle-chevron-up"></i></a>
  </main>
  <script src="../JS/script.js"></script>
  <script src="../JS/profile.js"></script>
</body>
</html>


<?php $connection->close()?>
