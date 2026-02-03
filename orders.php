<!DOCTYPE html>
<html lang="eng">

<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-AU-Compatible" content ="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>19111 Threads</title>

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    <link rel="stylesheet" href="style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">


</head>

<body style="
    background-image: url('images/bookingpo.avif');
    background-attachment: fixed;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;">


<div id="successModal" class="modal-overlay" style="display: none;">
    <div class="modal-content">
        <div class="success-icon">✔</div>
        <h2>Booking Successful!</h2>
        <p>We'll be in touch soon.</p>
    </div>
</div>

<script>
    window.onload = function() {
        const urlParams = new URLSearchParams(window.location.search);
        
        if (urlParams.get('status') === 'success') {
            const modal = document.getElementById('successModal');
            
            // 1. Show it immediately
            modal.style.display = 'flex';

            // 2. Clear the URL so it DOES NOT pop up again if the user refreshes manually
            window.history.replaceState({}, document.title, window.location.pathname);

            // 3. Keep it for 3 seconds, then vanish
            setTimeout(() => {
                modal.classList.add('fade-out');
                setTimeout(() => {
                    modal.style.display = 'none';
                }, 1000); 
            }, 3000);
        }
    }
</script>
</body>

<section class="header">    
 
<a href="index.php" class="logo">
    <img src="images/test.jpeg" alt="1911 Threads">
</a>

<nav class="navbar">
    <a href="index.php">Home</a>
     <a href="about.php">About</a>
      <a href="services.php">Services</a>
  <a href="termsprivacy.php">Terms & Privacy</a>
    <a href="index.php#contact-area">Contact Us</a>
    <a href="orders.php">Booking</a> 

</nav>

<div id="menu-btn" class="fas fa-bars" ></div>

</section>


<section class="booking-section">
    
    <div class="booking-glass-card">
        <h2 class="booking-title">Book A Consultation</h2>
        <div class="diamond-separator">♦ ♦ ♦</div>
        <p class="booking-subtitle">Fill Out The Form Below To Schedule Your Visit Or Consultation.</p>

        <form action="process_booking.php" method="POST" class="booking-form">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="tel" name="phone" placeholder="Phone Number" required>
            <input type="email" name="email" placeholder="Email Address" required>
            
            <select name="service" required>
                <option value="" disabled selected>What Service Do You Need?</option>
                <option value="Protective Clothing">Protective Clothing</option>
                <option value="Corporate Wear">Corporate Wear</option>
                <option value="Uniforms">Uniforms</option>
                 <option value="Altering">Altering</option>
            </select>

            <input type="date" name="date" required>
            <textarea name="details" placeholder="Extra Details "></textarea>

            <input type="submit" value="Submit" class="btn" name= "send"></input>
        </form>
    </div>
</section>






<!--footer section-->

<section class="footer">

   <footer class="modern-footer">
    <div class="footer-container">
        
        <ul class="footer-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="services.php">Services</a></li>
             <li><a href="termsprivacy.php">Terms of Use</a></li>
             <li><a href="termsprivacy.php">Privacy</a></li>
               <li><a href="index.php#contact-area">Contact Us</a></li>
                <li><a href="orders.php">Booking </a></li>

        </ul>

    </div>

    <div class="credit"> 
     <span>1911 Threads</span> | &copy; <?php echo date("Y"); ?> all rights reserved 
</div> 
</footer>

</section>
<!--footer section ends-->