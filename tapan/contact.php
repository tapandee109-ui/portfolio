<?php
$pageTitle = "Contact | Tapan Rajyaguru";
$preloaderText = "ESTABLISHING CONNECTION...";
include 'includes/header.php';
include 'includes/navbar.php';
?>

    <main class="container">
      <div class="contact-page-wrap">
        <div class="contact-info-side">
          <h1 class="split-text">
            LET'S BUILD<br /><span class="accent-text">SOMETHING</span
            ><br />LEGENDARY.
          </h1>
          <p class="hero-subtitle">
            Have a project in mind or just want to say hi? Reach out and let's
            start a conversation.
          </p>

          <div class="contact-details">
            <div class="contact-item">
              <span>SOCIAL</span>
              <p>
                <a href="#" class="social-link">LinkedIn</a> /
                <a href="#" class="social-link">GitHub</a> /
                <a href="#" class="social-link">Instagram</a>
              </p>
            </div>
            <div class="contact-item">
              <span>EMAIL</span>
              <p>tapanrajyaguru007@gmail.com</p>
            </div>
            <div class="contact-item">
              <span>LOCATION</span>
              <p>Ahmedabad, Gujarat, India</p>
            </div>
          </div>
        </div>

        <div class="contact-form-side bento-item">
          <form id="contact-form">
            <div class="form-group">
              <label>What's your name?</label>
              <input type="text" placeholder="John Doe" required />
            </div>
            <div class="form-group">
              <label>Your Email Address</label>
              <input type="email" placeholder="john@example.com" required />
            </div>
            <div class="form-group">
              <label>How can I help you?</label>
              <textarea
                rows="5"
                placeholder="Tell me about your project..."
              ></textarea>
            </div>
            <button type="submit" class="submit-btn magnetic">
              Send Message
            </button>
          </form>
        </div>
      </div>
    </main>

    <div class="marquee" style="margin-top: 5rem">
      <div class="marquee-content">
        <h2>CONNECT • COLLABORATE • CREATE • CONQUER •</h2>
        <h2>CONNECT • COLLABORATE • CREATE • CONQUER •</h2>
      </div>
    </div>

<?php include 'includes/footer.php'; ?>
