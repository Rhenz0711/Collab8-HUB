<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>COLLABORATE HUB</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<!-- Font Google -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
session_start();

// Display the message only once
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    $msgType = $_SESSION['msg_type'];

    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            const errorPopup = document.getElementById('errorPopup');
            document.getElementById('errorMessage').textContent = '$message';
            errorPopup.style.display = 'block';

            setTimeout(() => {
                errorPopup.style.display = 'none';
            }, 5000);
        });
    </script>";

    // Clear the message so it doesn't appear again on refresh
    unset($_SESSION['message']);
    unset($_SESSION['msg_type']);
}
?>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container"> 
    <a class="navbar-brand navbar-logo" href="#"> 
      <img src="images/logo-final.png" alt="logo" class="logo-1" style="width: 200px;"> 
    </a>
    <div class="icons">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
        <span class="fas fa-bars bars"></span> 
      </button>
      <button class="navbar-toggler openModalBtn">
        <span class="fas fa-user user"></span>
      </button>
    </div>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"> <a class="nav-link join-now openRegisterBtn" href="#">Join Now</a> </li>
        <li class="nav-item"> <a class="nav-link" href="" data-scroll-nav="0">Home</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="1">About</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="2">Features</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="4">Team</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="5">Faq</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="6">Contact</a> </li>
      </ul>
      <div class="auth-buttons auth-widescreen">
        <button class="openRegisterBtn">Join Now</button>
      </div>
    </div>
  </div>
</nav>
<!-- End Navbar --> 

<!-- Floating Error Message Container -->
<div id="errorPopup" class="error-popup">
    <p id="errorMessage"></p>
    <span class="close-btn" onclick="closeErrorPopup()">&times;</span>
</div>

<!--Modal Overlay Start-->

<div id="registerForm" class="modal">
  <!-- Modal Content -->
  <div class="modal-content">
      <span class="close">&times;</span>
      <img src="images/logo-blacktext.png">
      <form action="includes/formhandler.inc.php" method="POST"> 
          <label for="email">Username:</label>
          <input type="text" id="username" name="username" required>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="pwd" required autocomplete="new-password"> 
          
          <button type="submit" class="openRegisterBtn" >Sign Up</button>
          <p style="margin-top: 10px;">Already Have an Account? <a href="#" id="showLogin">Login Here</a></p>
      </form>
  </div>
</div>

<div id="loginForm" class="modal">
  <!-- Modal Content -->
  <div class="modal-content">
      <span class="close">&times;</span>
      <img src="images/logo-blacktext.png">
      <form action="includes/signin.php" method="POST"> 
          <label for="email">Username or Email:</label>
          <input type="text" id="username" name="username_or_email" required>
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="pwd" autocomplete="new-password"> 
          
          <button type="submit" class="openLoginBtn" >Sign In</button>
          <p style="margin-top: 10px;">Dont Have an Account? <a href="#" id="showRegister">Register Here</a></p>
      </form>
  </div>
</div>


<!--Modal Overlay End-->

<!-------Banner Start------->
<section class="banner" data-scroll-index='0'>
  <div class="banner-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-12">
          <div class="banner-text">
            <h2>BEST OPEN RESOURCE SHARING PLATFORM</h2>
            <!-- <h6 class="white">This awesome template designed by <a href="http://w3Template.com" target="_blank" rel="dofollow" class="weblink">W3 Template</a>.</h6> -->
            <h6 class="white">"Connecting Students, Empowering Minds." </h6>
            
            <div class="banner-description ">
              <h3>What We Offer:</h3>
              <div class="banner-row">
                <div class="class"><span class="fa fa-check-circle" aria-hidden="true"></span>
                  <p>Upload</p>
                </div>
                <div class="class"><span class="fa fa-check-circle" aria-hidden="true"></span>
                  <p>Share</p>
                </div>
                <div class="class"><span class="fa fa-check-circle" aria-hidden="true"></span>
                  <p>Download</p>
                </div>
                <div class="class"><span class="fa fa-check-circle" aria-hidden="true"></span>
                  <p>and Learn</p>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-md-4 col-sm-12"> <img src="images/phone-screen.png" class="img-fluid wow fadeInUp"/> </div>
      </div>
    </div>
  </div>
  <span class="svg-wave"> <img class="svg-hero" src="images/wave.svg"> </span> 
</section>

<!-------Banner End-------> 

<!-------About Start------->
<section class="about section-padding prelative" data-scroll-index='1'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center">
          <h3>About</h3>
          <span class="line"></span>
          <p>
            "Collabor8 Hub is an online platform designed to help students share and access academic resources effortlessly. Whether you need study guides, notes, past exam papers, or reference materials, our platform connects learners to valuable educational content shared by fellow students."
          </p>
        </div>
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-4">
              <div class="icon-box wow fadeInUp" data-wow-delay="0.2s"> <i class="fa fa-flag" aria-hidden="true"></i>
                <h5>Purpose</h5>
                <p>We believe that learning is more effective when students collaborate. Collabor8 Hub was created to make studying easier by allowing students to contribute and benefit from a shared pool of academic resources.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon-box wow fadeInUp" data-wow-delay="0.4s"> <i class="fa fa-tags" aria-hidden="true"></i>
                <h5>Mission</h5>
                <p>To create a collaborative and supportive learning environment where students can access and contribute quality academic resources, helping each other succeed.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon-box wow fadeInUp" data-wow-delay="0.6s"> <i class="fa fa-users" aria-hidden="true"></i>
                <h5>Who We Serve</h5>
                <p>
                  Collabor8 Hub is a platform for students to make learning more efficient and collaborative. Share notes, find resources, and connect with others to enhance your learning journey.
                </p>
              </div>
            </div>
          </div>
          <a href="#" class="about-btn openModalBtn">Join Our Community</a> 
        </div>
      </div>
    </div>
  </div>
</section>
<!-------About End-------> 


<!-------Features Start------->
<section class="feature section-padding" data-scroll-index='2'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center">
          <h3>Features</h3>
          <span class="line"></span>
          <p>
            Collabor8 Hub is designed to make studying easier by allowing students to share and access valuable academic resources in one place. Discover a smarter way to connect, contribute, and grow with a community of students just like you!
          </p>
        </div>
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-4 col-sm-12">
              <div class="media single-feature wow fadeInUp" data-wow-delay="0.2s">
                <div class="media-body text-right media-right-margin">
                  <h5>Share</h5>
                  <p>
                    Easily upload and share study materials, class notes, reference documents, and other helpful resources. Whether it’s a <span>PDF, an image, or a well-organized set of notes,</span> your contributions can help fellow students succeed.
                  </p>
                </div>
                <div class="media-right icon-border"> <span class="fa fa-plus" aria-hidden="true"></span> </div>
              </div>
              <div class="media single-feature wow fadeInUp" data-wow-delay="0.4s">
                <div class="media-body text-right media-right-margin">
                  <h5>Discover</h5>
                  <p>
                    Search for study materials based on subjects, topics, or keywords. <span>Instead of spending hours looking for reliable information, </span>access a wide collection of user-contributed resources tailored to your academic needs.
                  </p>
                </div>
                <div class="media-right icon-border"> <span class="fa fa-eye" aria-hidden="true"></span> </div>
              </div>
            </div>
            <div class="col-md-4 d-none d-md-block d-lg-block">
              <div class="feature-mobile"> <img src="images/phone-screen.png" class="img-fluid wow fadeInUp"/> </div>
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="media single-feature wow fadeInUp" data-wow-delay="0.2s">
                <div class="media-left icon-border media-right-margin"> <span class="fa fa-comments" aria-hidden="true"></span> </div>
                <div class="media-body text-left">
                  <h5>Engage</h5>
                  <p>
                    Learning is more effective when it’s interactive! <span>Leave comments, insights, or suggestions</span> on shared resources to help others understand concepts better or refine their study materials.
                  </p>
                </div>
              </div>
              <div class="media single-feature wow fadeInUp" data-wow-delay="0.4s">
                <div class="media-left icon-border media-right-margin"> <span class="fa fa-filter" aria-hidden="true"></span> </div>
                <div class="media-body text-left">
                  <h5>Filter</h5>
                  <p>
                    <span>Quickly find the most relevant study materials</span> by sorting resources based on popularity, subject category, or recent uploads. This feature ensures that you always have access to the best and most up-to-date content.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-------Features End-------> 


<!-------Team Start------->
<section class="testimonial section-padding" data-scroll-index='4'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center white">
          <h3>Team</h3>
          <span class="line"></span>
          <p class="white" style="font-size: 17px;">
            Behind Collabor8 Hub is a dedicated team of students passionate about making learning more accessible and collaborative. Meet the minds behind the project and see how we’re working to build a better learning experience for all!
          </p>
        </div>

        <div class="section-content">
          <div class="row">
            <div class="offset-md-2 col-md-8 col-sm-12">

              <div class="slider">
                <div class="slider-item">
                  <div class="test-img"><img src="images/profile-rhenz.jpg" alt="Placeholder" width="157" height="157"></div>
                  <div class="test-text"><span class="title"><span>Rhenz Daryl</span> FrontEnd Developer</span> Designing for Collabor8 Hub was all about creating a seamless and welcoming experience for students. It’s been inspiring to see how our work fosters collaboration and growth.</div>
                </div>
                <div class="slider-item">
                  <div class="test-img"><img src="images/profile.png" alt="Placeholder" width="157" height="157"></div>
                  <div class="test-text"><span class="title"><span>Matt de Lira</span> BackEnd Developer</span> Building this platform taught me the power of collaboration. It’s amazing to see how technology can bring students together to make learning more accessible and efficient.</div>
                </div>
                <div class="slider-item">
                  <div class="test-img"><img src="images/profile.png" alt="Placeholder" width="157" height="157"></div>
                  <div class="test-text"><span class="title"><span>Unknown</span> Unknown</span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio consectetur dolor laudantium, facilis cum eius unde reprehenderit. Maiores maxime est quisquam iste sed iure! Animi perspiciatis reprehenderit illum! In, beatae?</div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-------Team End-------> 

<!-------FAQ Start------->
<section class="faq section-padding prelative" data-scroll-index='5'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center">
          <h3>Frequently Asked Questions</h3>
          <span class="line"></span>
          <p>
            Welcome to the Collabor8 Hub FAQ section! Here, you’ll find answers to common questions about how to use our platform, share resources, and connect with other students. If you don’t see what you’re looking for, feel free to reach out—we’re here to help
          </p>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.2s">
              <h4>What is Collabor8 Hub?</h4>
              <p>Collabor8 Hub is a community-driven platform designed for students to share, discover, and collaborate on study resources like notes, reviewers, and lecture materials. Our goal is to make learning more efficient and collaborative.</p>
            </div>
            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.2s">
              <h4>Who can use Collabor8 Hub</h4>
              <p>Collabor8 Hub is for students of all levels—high school, college, and beyond. Whether you’re looking for resources or want to share your own, everyone is welcome!</p>
            </div>
            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.4s">
              <h4>How do I share resources on Collabor8 Hub?</h4>
              <p>Simply create an account, upload your files (notes, reviewers, etc.), and categorize them by subject or topic. Your resources will then be available for others to discover and use.</p>
            </div>
            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.4s">
              <h4>Can I download resources without an account?</h4>
              <p>To download resources, you’ll need to create a free account. This helps us maintain a secure and organized community.</p>
            </div>
            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.6s">
              <h4> Are there guidelines for sharing resources?</h4>
              <p>Yes! We encourage high-quality, accurate, and respectful contributions. Avoid sharing copyrighted materials or irrelevant content. Check out our Community Guidelines for more details.</p>
            </div>
            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.6s">
              <h4>How can I connect with other students on the platform?</h4>
              <p>You can join discussion threads, comment on resources, or message users directly to collaborate and exchange ideas.</p>
            </div>
            <!-- Add more FAQ questions here -->
            <div id="hiddenFAQs" class="hidden-faqs">
              <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.2s">
                <h4>Can I request specific resources?</h4>
                <p>Absolutely! Use the “Request Resource” feature to let the community know what you’re looking for. Other users can then upload or share what you need.</p>
              </div>
              <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.3s">
                <h4>What file formats are supported for uploads?</h4>
                <p>We support common formats like PDF, DOCX, PPTX, and JPEG. If you have questions about a specific format, feel free to contact us.</p>
              </div>
              <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.4s">
                <h4>How can I suggest new features or improvements?</h4>
                <p>We’d love to hear from you! Share your ideas through our Feedback Form or email us at feedback@collabor8hub.com.</p>
              </div>
              <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.5s">
                <h4>Can I join the Collabor8 Hub team?</h4>
                <p>We’re always looking for passionate individuals to join our team. Check out our Careers Page for open opportunities.</p>
              </div>
              <!-- Add more FAQ questions here -->
            </div>
          </div>
          <button id="moreButton" class="btn btn-primary">More</button>
        </div>
      </div>
    </div>
  </div>
</section>
<!-------FAQ End-------> 

<!-------Contact Start------->
<section class="contact section-padding" data-scroll-index='6'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center">
          <h3>Contact us</h3>
          <span class="line"></span>
          <p>
            Got questions, feedback, or need support? We’d love to hear from you! Reach out to us through the form below, and our team will get back to you as soon as possible. Your input helps us make Collabor8 Hub even better!
          </p>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8">
              <form id="contact_form" action="">
                <div class="row">
                  <div class="col">
                    <input type="text" id="your_name" class="form-input w-100" name="full-name" placeholder="Full Name" required>
                  </div>
                  <div class="col">
                    <input type="email" id="email" class="form-input w-100" name="email" placeholder="Email" required>
                  </div>
                </div>
                <input type="text" id="subject" class="form-input w-100" name="subject" placeholder="Subject">
                <textarea class="form-input w-100" id="message" placeholder="Message" name="message"></textarea>
                <button class="btn-grad w-100 text-uppercase" type="submit" name="button">submit</button>
              </form>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
              <div class="contact-info white">
                <div class="contact-item media"> <i class="fa fa-map-marker-alt media-left media-right-margin"></i>
                  <div class="media-body">
                    <p class="text-uppercase">Address</p>
                    <p class="text-uppercase">STI Academic Center, Ortigas Avenue Extension, Cainta, 1900 Rizal</p>
                  </div>
                </div>  
                <div class="contact-item media"> <i class="fa fa-mobile media-left media-right-margin"></i>
                  <div class="media-body">
                    <p class="text-uppercase">Phone</p>
                    <p class="text-uppercase"><a class="text-white" href="tel:+15173977100">09XXXXXXXXX</a> </p>
                  </div>
                </div>
                <div class="contact-item media"> <i class="fa fa-envelope media-left media-right-margin"></i>
                  <div class="media-body">
                    <p class="text-uppercase">E-mail</p>
                    <p class="text-uppercase"><a class="text-white" href="mailto:abcdefg@gmail.com">collabor8hub@gmail.com</a> </p>
                  </div>
                </div>
                <div class="contact-item media"> <i class="fa fa-clock media-left media-right-margin"></i>
                  <div class="media-body">
                    <p class="text-uppercase">Working Hours</p>
                    <p class="text-uppercase">Mon-Fri 9.00 AM to 5.00PM.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-------Contact End-------> 




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script> 
<!-- scrollIt js --> 
<script src="js/scrollIt.min.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="script.js"></script>

</body>
</html>
