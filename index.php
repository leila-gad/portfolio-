<?php
// Handle contact form submission
$message_sent = false;
$error_message = "";

if ($_POST && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    // Basic validation
    if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // In a real application, you would send an email or save to database
        // For this demo, we'll just show a success message
        $message_sent = true;
    } else {
        $error_message = "Please fill in all fields with valid information.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leila Gadal - ICT Engineering Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="nav-container">
            <div class="logo">Leila Gadal</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#volunteering">Volunteering</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <!-- Profile Image -->
            <img src="profile.jpg" alt="Leila Gadal" class="profile-pic">
            <h1>Leila Gadal</h1>
            <h2>ICT Engineering Student</h2>
            <p>I'm passionate about network systems, web development, and data-driven engineering. Currently studying at INPT Rabat with hands-on experience in academic and volunteer projects.</p>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <div class="about-content">
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <div class="contact-item">
                        <span class="contact-icon">📧</span>
                        <span>leila.gadal@email.com</span>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon">📱</span>
                        <span>+212 6XX XXX XXX</span>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon">💼</span>
                        <span>linkedin.com/in/leila-gadal</span>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon">📍</span>
                        <span>Alirfane, Rabat, Morocco</span>
                    </div>
                </div>
                
                <div class="education">
                    <h3>Education</h3>
                    <div class="education-item">
                        <h4>INPT-Rabat</h4>
                        <p><strong>Smart-ICT Engineering</strong></p>
                        <p>2024 – Present</p>
                    </div>
                    <div class="education-item">
                        <h4>CPGE Al Qalam</h4>
                        <p><strong>PSI Track</strong></p>
                        <p>2022 – 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="section">
        <div class="container">
            <h2 class="section-title">Projects</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <h3>Web App for Student Theses (2025)</h3>
                    <p>Developed a comprehensive multi-user system with role-based access control for managing student thesis projects. Features include user authentication, project management, and administrative oversight.</p>
                    <div class="project-tech">
                        <span class="tech-tag">HTML</span>
                        <span class="tech-tag">CSS</span>
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">MySQL</span>
                    </div>
                </div>
                
                <div class="project-card">
                    <h3>QoS vs QoE Study (2024)</h3>
                    <p>Conducted comprehensive network analysis using Cisco Packet Tracer to simulate and optimize VoIP and data traffic prioritization. Analyzed Quality of Service impact on user experience.</p>
                    <div class="project-tech">
                        <span class="tech-tag">Cisco Packet Tracer</span>
                        <span class="tech-tag">Network Analysis</span>
                        <span class="tech-tag">VoIP</span>
                    </div>
                </div>
                
                <div class="project-card">
                    <h3>Para-Tennis Simulation (2024)</h3>
                    <p>Developed dynamic modeling and analysis system for para-tennis gameplay using advanced simulation techniques. Implemented mathematical models for movement and ball trajectory analysis.</p>
                    <div class="project-tech">
                        <span class="tech-tag">Scilab</span>
                        <span class="tech-tag">C</span>
                        <span class="tech-tag">Simulation</span>
                        <span class="tech-tag">Mathematical Modeling</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Volunteering Section -->
    <section id="volunteering" class="volunteering">
        <div class="container">
            <h2 class="section-title">Volunteering & Leadership</h2>
            <div class="volunteering-grid">
                <div class="volunteering-card">
                    <h3>Chef, Cell Science</h3>
                    <p>MSC INPT</p>
                </div>
                <div class="volunteering-card">
                    <h3>Community Manager</h3>
                    <p>Enactus INPT</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
            <div class="contact-form">
                <?php if ($message_sent): ?>
                    <div class="success-message">
                        Thank you for your message! I'll get back to you soon.
                    </div>
                <?php endif; ?>
                
                <?php if ($error_message): ?>
                    <div class="error-message">
                        <?php echo $error_message; ?>
                    </div>
                <?php endif; ?>
                
                <form method="POST" action="#contact">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2025 Leila Gadal. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>