<?php require_once './connect.php' ?>

<?php

    $getUser = '';

    session_start();

    $getUser = $_SESSION['username'];

    if($getUser == ''){
        header('Location:../html/login.html');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Local Trust Bank ePass Book</title>
  <link rel="shortcut icon" href="../images/logo/blue-logo-02.jpg">
  <link rel="stylesheet" href="../css/ePassBook.css">
  <link rel="stylesheet" href="../css/common-style.css">
  <!-- fontawesome link for add icons in web page  -->
  <script src="https://kit.fontawesome.com/4e05476d91.js" crossorigin="anonymous"></script>
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
        <li class="t-nav-item"><a href="../php/profile.php" class="t-nav-link"><i class="fa-solid fa-circle-user"></i><span>Account</span></a></li>
      </ul>
      </nav>
    </header>
    <!-- end of header -->

    <!-- main section -->
    <section class="main-section">
        <h1 class="eTitle"><span>e-</span>Pass Book</h1>
        <div class="titles">
            <h2>Last update:<span class="current-date"></span></h2> 
            <h2>Last ten transactions</h3>
        </div>
       

      

      <table>
        <tr>
          <th style="width:20%">Date</th>
          <th>Description</th>
          <th>Value(LKR)</th>
        </tr>
        <tr>
          <td>2022/04/10</td>
          <td>Bill payment</td>
          <td>2000.00</td>
        </tr>
        <tr>
          <td>2022/04/14</td>
          <td>Money Transfer (534447143)</td>
          <td>300000.00</td>
        </tr>
        <tr>
          <td>2022/04/20</td>
          <td>Bill payment</td>
          <td>1500.00</td>
        </tr>
        <tr>
          <td>2022/04/28</td>
          <td>Money Transfer (534447143)</td>
          <td>400000.00</td>
        </tr>
        <tr>
          <td>2022/04/30</td>
          <td>Bill payment</td>
          <td>1000.00</td>
        </tr>
        <tr>
          <td>2022/05/01</td>
          <td>Money Transfer (534447143)</td>
          <td>300000.00</td>
        </tr>
        <tr>
          <td>2022/05/05</td>
          <td>Bill payment</td>
          <td>11000.00</td>
        </tr>
        <tr>
          <td>2022/05/10</td>
          <td>Money Transfer (534447143)</td>
          <td>750000.00</td>
        </tr>
        <tr>
          <td>2022/05/15</td>
          <td>Bill payment</td>
          <td>8000.00</td>
        </tr>
        <tr>
          <td>2022/05/23</td>
          <td>Money Transfer (534447143)</td>
          <td>600000.00</td>
        </tr>
      </table>
  
      
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

    <a href="#m-cont" class="scroll-link top-link"><i class="fa-solid fa-circle-chevron-up"></i></a>
  </main>
  <script src="../JS/script.js"></script>
  <script>
      const currentDate = document.querySelector(".current-date");
      currentDate.innerHTML = new Date().toLocaleDateString();
  </script>
</body>
</html>

<?php $connection->close() ?>