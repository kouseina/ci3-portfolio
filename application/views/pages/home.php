    <section id="hero" class="hero">
        <div class="container">
            <div class="hero-content">
                <h1><?php echo $name; ?></h1>
                <p class="hero-title"><?php echo $title; ?></p>
                <p class="hero-tagline"><?php echo $bio; ?></p>
                <div class="hero-cta">
                    <a href="#contact" class="btn btn-primary">Get in Touch</a>
                    <a href="https://github.com/kouseina" target="_blank" class="btn btn-secondary">View GitHub</a>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="section">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <div class="about-content">
                <p><?php echo $bio; ?></p>
                <p>I'm passionate about building software that makes a difference. I continuously learn and improve my skills to deliver high-quality solutions.</p>
            </div>
        </div>
    </section>

    <section id="skills" class="section">
        <div class="container">
            <h2 class="section-title">Skills & Technologies</h2>
            <div class="skills-grid">
                <?php foreach($skills as $skill): ?>
                    <div class="skill-card">
                        <div class="skill-name"><?php echo $skill; ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="projects" class="section">
        <div class="container">
            <h2 class="section-title">Projects</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <h3>Coming Soon</h3>
                    <p>I'm currently working on some exciting projects. Stay tuned for updates!</p>
                    <div class="project-status">In Progress</div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="section">
        <div class="container">
            <h2 class="section-title">Get in Touch</h2>
            <div class="contact-content">
                <p>I'm always open to discussing new projects, creative ideas, or opportunities to be part of your visions.</p>
                <div class="contact-links">
                    <a href="mailto:<?php echo $email; ?>" class="contact-link">
                        <span class="contact-icon">✉️</span>
                        <span><?php echo $email; ?></span>
                    </a>
                    <a href="https://github.com/kouseina" target="_blank" class="contact-link">
                        <span class="contact-icon">💻</span>
                        <span>GitHub Profile</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
