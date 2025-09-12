  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Cyber Express Limited</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Indeco house 5th floor, cairo road</p>
            <p>Lusaka, Lusaka Province, 10101</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+260 973 899 909</span></p>
            <p><strong>Email:</strong> <span>info@cel.co.zm</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div> 
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="{{ route('/') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About us</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('cel2.portfolio') }}">portifolio</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="{{ route('services') }}">Business management systems</a></li>
            <li><a href="{{ route('services') }}">Web and mobile apps development</a></li>
            <li><a href="{{ route('services') }}">Business automation</a></li>
            <li><a href="{{ route('services') }}">IT consultancy </a></li>
            <li><a href="{{ route('services') }}">ITC supplies</a></li>
             <li><a href="{{ route('services') }}">Software development</a></li>
              <li><a href="{{ route('services') }}">AI integration</a> </li>
            <li><a href="{{ route('services') }}">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Cyber Express Limited</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="#">CEL</a>
      </div>
    </div>

  </footer>