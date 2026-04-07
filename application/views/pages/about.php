    <section id="about" class="section">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <div class="about-content">
                <p><?php echo $bio; ?></p>
                <p>I'm passionate about building software that makes a difference. I continuously learn and improve my skills to deliver high-quality solutions.</p>
            </div>
            
            <h3 class="section-subtitle">Skills & Technologies</h3>
            <div class="skills-grid">
                <?php foreach($skills as $skill): ?>
                    <div class="skill-card">
                        <div class="skill-name"><?php echo $skill; ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <div class="cta-center">
                <a href="<?php echo base_url(); ?>contact" class="btn btn-primary">Get in Touch</a>
            </div>
        </div>
    </section>
