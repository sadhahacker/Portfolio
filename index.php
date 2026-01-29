<?php
/**
 * Portfolio Website - Main Index
 * Uses PHP array for dynamic content generation
 */

// Load dynamic content from config
$content = require __DIR__ . '/config/content.php';

// Helper function to safely output HTML
function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo e($content['site']['title']); ?></title>
    <link rel="icon" href="<?php echo e($content['site']['favicon']); ?>" />

    <link rel="stylesheet" href="styles.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      class="stylesheet"
    />
  </head>

  <body>
    <!-------------------------- Header Area -------------------------->
    <header class="header-area">
      <div class="container">
        <div class="header">
          <a href="" class="logo">
            <img src="<?php echo e($content['personal']['signature_image']); ?>" alt="" class="signature" />
            <i class="fa fa-bolt"></i>
          </a>

          <ul class="navbar">
            <?php foreach ($content['navigation'] as $nav): ?>
            <li><a href="<?php echo e($nav['href']); ?>"><?php echo e($nav['label']); ?></a></li>
            <?php endforeach; ?>
          </ul>

          <div class="menu_icon">
            <i class="fa fa-bars"></i>
          </div>
        </div>
      </div>
    </header>

    <!-------------------------- Home Page -------------------------->
    <div class="FirstElement" id="home">
      <div class="profile-photo">
        <img src="<?php echo e($content['personal']['profile_image']); ?>" alt="profile picture" />
      </div>
      <div class="profile-text">
        <h5><?php echo e($content['personal']['greeting']); ?></h5>
        <br />
        <h1><?php echo e($content['personal']['name']); ?></h1>
        <br />
        <p><?php echo e($content['personal']['tagline']); ?></p>

        <div class="btn-group">
          <a
            href="<?php echo e($content['personal']['resume_file']); ?>"
            class="btn active"
            target="_blank"
            >Download CV</a
          >
          <a href="mailto:<?php echo e($content['personal']['email']); ?>" class="btn">Contact</a>
        </div>

        <div class="social">
          <?php foreach ($content['social_links'] as $social): ?>
          <a href="<?php echo e($social['url']); ?>" target="_blank" title="<?php echo e($social['title']); ?>">
            <i class="<?php echo e($social['icon']); ?>"></i>
          </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <!-------------------------- About Section -------------------------->
    <section class="about-area" id="about">
      <div class="container">
        <div class="about">
          <div class="about-content">
            <h4><?php echo e($content['about']['title']); ?></h4>
            <ul>
              <?php foreach ($content['about']['description'] as $paragraph): ?>
              <li><?php echo e($paragraph); ?></li>
              <?php endforeach; ?>
            </ul>
          </div>

          <div class="about-skills">
            <ul>
              <?php foreach ($content['about']['details'] as $label => $value): ?>
              <li><?php echo e($label); ?>: <?php echo e($value); ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-------------- Education & Experience -------------->
    <section class="education-content" id="experience">
      <div class="container">
        <div class="row">
          <div class="education">
            <h3 class="title">Experience</h3>
            <div class="row">
              <div class="timeline-box">
                <div class="timeline">
                  <?php foreach ($content['experience'] as $exp): ?>
                  <!-- Timeline-item -->
                  <div class="timeline-item">
                    <div class="circle-dot"></div>
                    <h3 class="timeline-title"><?php echo e($exp['title']); ?></h3>
                    <h4 class="timeline-title"><?php echo e($exp['company']); ?></h4>
                    <h4 class="timeline-title">
                      <i class="fa fa-calendar"></i> <?php echo e($exp['period']); ?>
                    </h4>
                    <p style="text-align: justify;"><?php echo e($exp['description']); ?></p>
                  </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="internship" id="education">
            <h3 class="title">Education</h3>
            <div class="row">
              <div class="timeline-box">
                <div class="timeline">
                  <?php foreach ($content['education'] as $edu): ?>
                  <!-- Timeline-item -->
                  <div class="timeline-item">
                    <div class="circle-dot"></div>
                    <h3 class="timeline-title"><?php echo e($edu['title']); ?></h3>
                    <h4 class="timeline-title"><?php echo e($edu['institution']); ?></h4>
                    <h4 class="timeline-title">
                      <i class="fa fa-calendar"></i> <?php echo e($edu['period']); ?>
                    </h4>
                  </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-------------------------- Projects -------------------------->
    <section class="project-content" id="projects">
      <div class="container">
        <div class="project-title">
          <h4>My Projects</h4>
          <p>Discover my projects, where creativity meets innovation</p>
        </div>
        <div class="projects">
          <?php foreach ($content['projects'] as $project): ?>
          <!-- Project -->
          <div class="project">
            <i class="<?php echo e($project['icon']); ?>"></i>
            <h4><?php echo e($project['title']); ?></h4>
            <p><?php echo e($project['description']); ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-------------------------- Skills -------------------------->
    <section class="project-content" id="skills">
      <div class="container">
        <div class="project-title">
          <h4>Skills</h4>
          <p>Languages I Speak</p>
        </div>
        <div class="skills-marquee">
          <div class="skills-track">
            <?php foreach (array_merge($content['skills'], $content['skills']) as $skill): ?>
              <div class="project tech">
                <i class="<?php echo e($skill['icon']); ?>"></i>
                <h4><?php echo e($skill['name']); ?></h4>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>

    <!-------------------------- Contact Me -------------------------->
    <section class="contact-content" id="contact">
      <div class="container">
        <div class="contact-title">
          <h4><?php echo e($content['contact']['title']); ?></h4>
          <p><?php echo e($content['contact']['subtitle']); ?></p>
        </div>
        <div class="contact">
          <form name="submitToGoogleSheet" id="contactForm" method="POST" action="contact_handler.php">
            <input type="text" name="NAME" placeholder="Name" required />
            <input type="email" name="EMAIL" placeholder="Email" required />
            <input type="text" name="SUBJECT" placeholder="Subject" />
            <textarea name="MESSAGE" placeholder="Message"></textarea>
            <input type="submit" value="Send Message" class="submit" />
          </form>
          <span id="msg"></span>
        </div>
      </div>
    </section>

    <!-------------------------- JS -------------------------->
    <script
      src="https://code.jquery.com/jquery-3.7.0.min.js"
      integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="script.js"></script>

    <!-------------------------- Footer section -------------------------->
    <footer class="footer">
      <small class="message"><?php echo e($content['footer']['message']); ?></small>
      <small class="copyright"><?php echo $content['footer']['copyright']; ?></small>
    </footer>
  </body>
</html>
