<?php
$current_page = basename($_SERVER['PHP_SELF'], ".php");
?>
    <nav>
      <div class="container nav-content">
        <div class="logo">TAPAN.R</div>
        <div class="nav-links-wrap">
          <ul class="nav-links">
            <li>
              <a
                href="index.php"
                class="contact-pill magnetic <?php echo ($current_page == 'index') ? 'active' : ''; ?> text-light"
                >Home</a
              >
            </li>
            <li>
              <a href="about.php" class="contact-pill magnetic <?php echo ($current_page == 'about') ? 'active' : ''; ?> text-light"
                >About</a
              >
            </li>
            <li>
              <a href="experience.php" class="contact-pill magnetic <?php echo ($current_page == 'experience') ? 'active' : ''; ?> text-light"
                >Experience</a
              >
            </li>
            <li>
              <a href="contact.php" class="contact-pill magnetic <?php echo ($current_page == 'contact') ? 'active' : ''; ?> text-light"
                >Contact</a
              >
            </li>
          </ul>

          <button class="menu-toggle" id="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
    </nav>
