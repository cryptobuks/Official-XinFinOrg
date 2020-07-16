<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Welcome to XDC official Wallet.Secure and easiest way to Store XDC.">
    <link rel="icon" href="assets/images/favicon.ico">

    <title>XDC Official Wallet | Blockchain Technology Company- XinFin</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fontawesome CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
   

    <!-- CSS styles -->
    <link rel="stylesheet" type="text/css" href="assets/css/ewallet-style.css">

  </head>
  <body>
    <nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="ewallet"><img src="assets/images/logo.png" class="img-responsive" width="60"></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="ewallet"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
      <li><a href="sign-in"><i class="fa fa-lock" aria-hidden="true"></i> Sign In</a></li>
      <li><a href="contact-us"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
    </ul>
  </div>
</nav>
    <section id="ewallet">
       <h3>Welcome to XDC official Wallet.</h3>
       <p>Secure and easiest way to Store XDC.</p>
       <div class="home-form">
           <form action="" id="ewalletform" class="ewalletform" name="ewalletform">
                <h4>GET A FREE EWALLET</h4>
                <input type="text" name="email" id="email" class="form-control email" placeholder="Email" required>
                <input type="number" name="mobile" id="mobile" class="form-control mobile" placeholder="Mobile Number" required>
                <input type="password" name="password" id="password" class="form-control password" placeholder="Password" required>
                <span id="mainCaptcha">v G  v C j f e</span>
                <input type="text" name="captcha" id="captcha" class="form-control captcha" placeholder="Enter text written above" required>
                <input type="submit" name="submit" id="home-btn" class="home-btn" value="Sign Up">
           </form>
           <p class="signup">To open a free ewallet account, enter your email,<br /> choose a password and then click 'Sign Up'.</p>
        </div>

        <div class="ewallet-footer">
            <p><a href="https://ewallet.xinfin.org/user-logged" target="_blank">Home</a> | 
                <a href="https://ewallet.xinfin.org/buy-xdc" target="_blank">Buy XDC</a> | 
                <a href="https://ewallet.xinfin.org/send-xdc" target="_blank">Send XDC</a> | 
                <a href="https://ewallet.xinfin.org/setting" target="_blank">Setting</a> | 
                <a href="https://ewallet.xinfin.org/kyc" target="_blank">KYC</a> | 
                <a href="https://ewallet.xinfin.org/support" target="_blank">Support</a>
            </p>
            <div class="footer-copyrights">
                <p>WARNING: This wallet is only compatible with the latest version of Safari and Chrome. © 2017 xinfin.org Foundation. All rights reserved.</p>
            </div>
        </div>    
    </section>



<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script>
    //console.log(target);
    var activeUrl = localStorage.getItem("currentUrl");
    $('.nav.navbar-nav li:nth-child(1)').addClass('active');
</script>


</body>
</html>