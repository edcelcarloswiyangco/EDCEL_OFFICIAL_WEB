<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edcel's Portfolio</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    @vite(['resources/css/app.css', 'resources/css/home.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <!-- Header & Navigation -->
    <header class="navbar" id="navbar">
        <div class="container">
            <a href="#home" class="nav-logo">EDCEL</a>
            <nav class="nav-links">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#services">Services.</a>
                <a href="#resume">Resume</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>
            </nav>
            <button class="nav-toggle" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section class="hero" id="home">
            <div class="container hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">Hi, I'm Edcel Carlos Wiyangco</h1>
                    <!-- Typing Effect Element -->
                    <p class="hero-subtitle">
                        I'm a <span class="typing-effect" data-words='["Laravel Developer", "PHP Specialist", "Full-Stack Engineer", "Problem Solver"]'></span>
                    </p>
                    <p class="hero-description">I build modern, responsive, and robust web applications from the ground up. Welcome to my personal portfolio.</p>
                    <a href="#projects" class="cta-button">View My Work</a>
                </div>
                <div class="hero-image-container">
                    <img src="{{ asset('images/edcel-hero.jpg') }}" alt="A placeholder photo of Edcel Carlos Wiyangco" class="hero-image">
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="about" id="about">
            <div class="container">
                <h2 class="section-title">About Me</h2>
                <div class="about-content">
                    <div class="about-image-container">
                         <img src="{{ asset('images/edcel2-hero.jpg') }}" alt="A professional photo of Edcel" class="about-image">
                    </div>
                    <div class="about-text">
                        <h3>Hello there!</h3>
                        <p>I'm Edcel, a passionate web developer currently based in Angeles City, Pampanga. My goal is to broaden my knowledge and develop my skills to enhance my potential and abilities, contributing to my growth as an individual in this field.</p>
                        <p>My journey into code started with a deep curiosity for how things work, and it's evolved into a full-blown passion for building beautiful, functional websites and applications, especially with the **Laravel framework**.</p>
                        <p>I'm fluent in Filipino, Bicol, and English, and I'm currently learning Korean. When I'm not coding, you can find me exploring new technologies or competing in MLBB tournaments.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Services Section -->
        <section class="services" id="services">
            <div class="container">
                <h2 class="section-title">What I Do</h2>
                <div class="services-grid">
                    <!-- Service Card 1 -->
                    <div class="service-card">
                        <div class="service-icon">[API]</div>
                        <h3 class="service-title">Backend & API Development</h3>
                        <p class="service-description">Building secure, scalable, and efficient server-side logic and RESTful APIs using Laravel.</p>
                    </div>
                    <!-- Service Card 2 -->
                    <div class="service-card">
                        <div class="service-icon">[Web]</div>
                        <h3 class="service-title">Full-Stack Web Apps</h3>
                        <p class="service-description">Creating complete web applications from database to UI, using stacks like Laravel (TALL/L-inertia).</p>
                    </div>
                    <!-- Service Card 3 -->
                    <div class="service-card">
                        <div class="service-icon">[DB]</div>
                        <h3 class="service-title">Database Management</h3>
                        <p class="service-description">Designing and optimizing database schemas (MySQL, PostgreSQL) for performance and reliability.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Resume Section -->
        <section class="resume" id="resume">
            <div class="container">
                <h2 class="section-title">My Resume</h2>
                
                <div class="resume-content-wrapper">
                    <!-- Main Resume Column -->
                    <div class="resume-main">
                        
                        <div class="resume-category">
                            <h3 class="resume-category-title">Summary</h3>
                            <p class="resume-summary">
                                To broaden my knowledge and develop my skills that would enhance my potentials and abilities that could advance in this institution and contribute to my growth as an individual in this field.
                            </p>
                            <div class="resume-download">
                                <!-- Make sure to replace '/path/to/your-cv.pdf' with the actual link to your CV file -->
                                <a href="{{ asset('cv/Edcel-Wiyangco-Resume.pdf') }}" class="cta-button" download="Edcel-Wiyangco-Resume.pdf">Download CV</a>
                            </div>
                        </div>

                        <div class="resume-category">
                            <h3 class="resume-category-title">Education</h3>
                            <div class="resume-item">
                                <h4 class="resume-item-title">Bachelor of Science in Computer Science</h4>
                                <span class="resume-item-date">Aug 2023 - Current</span>
                                <p class="resume-item-location">City College of Angeles / Angeles, Pampanga</p>
                            </div>
                            <div class="resume-item">
                                <h4 class="resume-item-title">Humanities and Social Sciences</h4>
                                <span class="resume-item-date">June 2016 - March 2022</span>
                                <p class="resume-item-location">Rafael L Lazatin Memorial High/Senior / Angeles, Pampanga</p>
                            </div>
                        </div>

                        <div class="resume-category">
                            <h3 class="resume-category-title">Certifications</h3>
                            
                            <!-- Certificate 1 -->
                            <div class="resume-item-interactive">
                                <div>
                                    <h4 class="resume-item-title">CCNAv7: Introduction to Networks</h4>
                                    <span class="resume-item-date">2024</span>
                                </div>
                                <button class="cta-button cert-button" 
                                        data-title="CCNAv7: Introduction to Networks"
                                        data-img="{{ asset('images/certs/ccna.png') }}"
                                        data-desc="Certificate awarded for successfully completing the CCNAv7: Introduction to Networks course from Cisco Networking Academy (2024), CCA.">
                                    View
                                </button>
                            </div>

                            <!-- Certificate 2 -->
                            <div class="resume-item-interactive">
                                <div>
                                    <h4 class="resume-item-title">Certificate of Leadership (NSTP & CWTS)</h4>
                                    <span class="resume-item-date">2023-2024</span>
                                </div>
                                <button class="cta-button cert-button" 
                                        data-title="Certificate of Leadership (NSTP & CWTS)"
                                        data-img="{{ asset('images/certs/nstp.png') }}"
                                        data-desc="Awarded for outstanding abilities and leadership skills during NSTP and CWTS (2023-2024), CCA.">
                                    View
                                </button>
                            </div>

                            <!-- Certificate 3 -->
                            <div class="resume-item-interactive">
                                <div>
                                    <h4 class="resume-item-title">13th LCUAA National Games - Participation</h4>
                                    <span class="resume-item-date">2024</span>
                                </div>
                                <button class="cta-button cert-button" 
                                        data-title="13th LCUAA National Games - Participation"
                                        data-img="{{ asset('images/certs/lcuaa_games.png') }}"
                                        data-desc="Certification of Participation - 13th LCUAA National Games (2024), MUNTILUPA. Theme: 'Moving Stronger Together, Reaching Farther and Higher'">
                                    View
                                </button>
                            </div>

                            <!-- Certificate 4 -->
                            <div class="resume-item-interactive">
                                <div>
                                    <h4 class="resume-item-title">IT Essentials</h4>
                                    <span class="resume-item-date">2023</span>
                                </div>
                                <button class="cta-button cert-button" 
                                        data-title="IT Essentials"
                                        data-img="{{ asset('images/certs/it essentials.png') }}"
                                        data-desc="IT Essentials - Cisco Networking Academy (2023), CCA. Topics: PC hardware, operating systems, networking basics, security, troubleshooting.">
                                    View
                                </button>
                            </div>
                        </div>

                        <div class="resume-category">
                            <h3 class="resume-category-title">Personal Achievements</h3>
                             <div class="resume-item">
                                <h4 class="resume-item-title">3rd Runner-Up - MLBB Tournament</h4>
                                <span class="resume-item-date">April 2025</span>
                                <p class="resume-item-location">College Days, CCA</p>
                            </div>
                            <div class="resume-item">
                                <h4 class="resume-item-title">Champion - MLBB Tournament</h4>
                                <span class="resume-item-date">Oct 2024</span>
                                <p class="resume-item-location">Software Foundation Day (SFD), ICLIS</p>
                            </div>
                            <div class="resume-item">
                                <h4 class="resume-item-title">2nd Runner-Up - National Competition</h4>
                                <span class="resume-item-date">Sep 2024</span>
                                <p class="resume-item-location">LCUAA</p>
                            </div>
                            <div class="resume-item">
                                <h4 class="resume-item-title">Graduated with Honors</h4>
                                <span class="resume-item-date">2023</span>
                                <p class="resume-item-location">Senior High School</p>
                            </div>
                            <div class="resume-item">
                                <h4 class="resume-item-title">Completed On-the-Job Training</h4>
                                <span class="resume-item-date">March 2023</span>
                                <p class="resume-item-location">RLLMSHS</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Sidebar Column -->
                    <aside class="resume-aside">
                        <div class="resume-category">
                            <h3 class="resume-category-title">Contact Info</h3>
                            <ul class="resume-contact-list">
                                <li><strong>Phone:</strong> +63-961-569-1997</li>
                                <li><strong>Email:</strong> edcelcarloswiyangco@gmail.com</li>
                                <li><strong>Location:</strong> Angeles City, Pampanga</li>
                                <li><strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/Vanity URL name" target="_blank">linkedin.com/in/...</a></li>
                            </ul>
                        </div>

                        <div class="resume-category">
                            <h3 class="resume-category-title">Technical Skills</h3>
                            <div class="skills-grid">
                                <div class="skill-card"><span>Programming</span></div>
                                <div class="skill-card"><span>Laravel</span></div>
                                <div class="skill-card"><span>PHP</span></div>
                                <div class="skill-card"><span>JavaScript</span></div>
                                <div class="skill-card"><span>Hardware & Networking</span></div>
                                <div class="skill-card"><span>Photoshop</span></div>
                                <div class="skill-card"><span>Visual Design</span></div>
                                <div class="skill-card"><span>Responsive Design</span></div>
                                <div class="skill-card"><span>Video Creation</span></div>
                                <div class="skill-card"><span>MS Office</span></div>
                                <div class="skill-card"><span>Git & GitHub</span></div>
                                <div class="skill-card"><span>Accessibility</span></div>
                            </div>
                        </div>
                        
                        <div class="resume-category">
                            <h3 class="resume-category-title">Languages</h3>
                            <ul class="resume-language-list">
                                <li><strong>Filipino</strong> (Native)</li>
                                <li><strong>Bicol</strong> (Native)</li>
                                <li><strong>English</strong> (Proficient)</li>
                                <li><strong>Korean</strong> (Learning)</li>
                            </ul>
                        </div>
                    </aside>
                </div>

            </div>
        </section>

        <!-- Projects Section -->
        <section class="projects" id="projects">
            <div class="container">
                <h2 class="section-title">My Projects</h2>
                <div class="projects-grid">
                    <!-- Project Card 1 -->
                    <div class="project-card">
                        <div class="project-image">
                            <img src="{{ asset('images/projects/ecommerce-platform.png') }}" alt="Screenshot of E-Commerce Platform">
                        </div>
                        <div class="project-info">
                            <h3 class="project-title">E-Commerce Platform</h3>
                            <p class="project-description">A full-featured e-commerce platform with product management, shopping cart, and payment integration.</p>
                            <div class="project-stack">
                                <h4>Tech Stack:</h4>
                                <ul class="stack-list">
                                    <li>Laravel</li>
                                    <li>Vue.js</li>
                                    <li>MySQL</li>
                                    <li>Stripe API</li>
                                </ul>
                            </div>
                            <div class="project-links">
                                <a href="#" class="project-link" target="_blank" rel="noopener noreferrer">Live Demo</a>
                                <a href="#" class="project-link" target="_blank" rel="noopener noreferrer">GitHub</a>
                            </div>
                        </div>
                    </div>
                    <!-- Project Card 2 -->
                    <div class="project-card">
                        <div class="project-image">
                            <img src="{{ asset('images/projects/blog.jpg') }}" alt="Screenshot of Blog & CMS">
                        </div>
                        <div class="project-info">
                            <h3 class="project-title">Blog & CMS</h3>
                            <p class="project-description">A custom-built blog and content management system with user roles, permissions, and a Markdown editor.</p>
                            <div class="project-stack">
                                <h4>Tech Stack:</h4>
                                <ul class="stack-list">
                                    <li>Laravel</li>
                                    <li>Livewire</li>
                                    <li>Tailwind CSS</li>
                                </ul>
                            </div>
                            <div class="project-links">
                                <a href="#" class="project-link" target="_blank" rel="noopener noreferrer">Live Demo</a>
                                <a href="#" class="project-link" target="_blank" rel="noopener noreferrer">GitHub</a>
                            </div>
                        </div>
                    </div>
                    <!-- Project Card 3 -->
                    <div class="project-card">
                        <div class="project-image">
                            <img src="{{ asset('images/projects/Task Management API.jpg') }}" alt="Screenshot of Task Management API">
                        </div>
                        <div class="project-info">
                            <h3 class="project-title">Task Management API</h3>
                            <p class="project-description">A RESTful API for a to-do application, featuring JWT authentication, resource controllers, and API documentation.</p>
                            <div class="project-stack">
                                <h4>Tech Stack:</h4>
                                <ul class="stack-list">
                                    <li>Laravel</li>
                                    <li>Sanctum</li>
                                    <li>Postman</li>
                                </ul>
                            </div>
                            <div class="project-links">
                                <a href="#" class="project-link" target="_blank" rel="noopener noreferrer">View Docs</a>
                                <a href="#" class="project-link" target="_blank" rel="noopener noreferrer">GitHub</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact" id="contact">
            <div class="container">
                <h2 class="section-title">Get In Touch</h2>
                <p class="contact-subtitle">I'm currently available for new opportunities and collaborations. Whether you have a project in mind or just want to say hi, feel free to reach out!</p>
                
                


                <div class="contact-socials">
                    <a href="https://github.com/edcelcarloswiyangco" class="social-link" target="_blank" rel="noopener noreferrer">
                        <span class="social-icon">
                            <i class="fa-brands fa-github"></i>
                        </span>
                        <span class="social-text">GitHub</span>
                    </a>
                    
                    <a href="https://www.linkedin.com/in/edcelcw/" class="social-link" target="_blank" rel="noopener noreferrer">
                        <span class="social-icon">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </span>
                        <span class="social-text">LinkedIn</span>
                    </a>
                    
                    <a href="https://twitter.com/EdcelWiyangco" class="social-link" target="_blank" rel="noopener noreferrer">
                        <span class="social-icon">
                            <i class="fa-brands fa-twitter"></i>
                        </span>
                        <span class="social-text">Twitter</span>
                    </a>

                    <a href="https://www.facebook.com/EdcelCW" class="social-link" target="_blank" rel="noopener noreferrer">
                        <span class="social-icon">
                            <i class="fa-brands fa-facebook-f"></i>
                        </span>
                        <span class="social-text">Facebook</span>
                    </a>
                    
                    <a href="https://www.instagram.com/edcelcw/" class="social-link" target="_blank" rel="noopener noreferrer">
                        <span class="social-icon">
                            <i class="fa-brands fa-instagram"></i>
                        </span>
                        <span class="social-text">Instagram.</span>
                    </a>
                </div>

            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Edcel Carlos Wiyangco. All rights reserved. Built with Laravel & ❤️</p>
        </div>
    </footer>

    <!-- Certificate Modal -->
    <div id="modal-overlay" class="modal-overlay hidden">
        <div id="modal-content" class="modal-content">
            <button id="modal-close" class="modal-close-button">&times;</button>
            <h3 id="modal-title" class="modal-title">Certificate Title</h3>
            <div class="modal-image-container">
                <img id="modal-img" src="" alt="Certificate Image" onerror="this.src='https://placehold.co/800x600/111111/c0c0c0?text=Certificate+Image+Not+Found'">
            </div>
            <p id="modal-desc" class="modal-description">Certificate description...</p>
        </div>
    </div>

    <!-- Mobile Nav & Typing Effect Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // --- Mobile Nav Toggle ---
            const navToggle = document.querySelector('.nav-toggle');
            const navLinks = document.querySelector('.nav-links');
            const navbar = document.getElementById('navbar');

            if (navToggle) {
                navToggle.addEventListener('click', () => {
                    navLinks.classList.toggle('active');
                    navToggle.classList.toggle('active');
                });
            }
            
            document.querySelectorAll('.nav-links a').forEach(link => {
                link.addEventListener('click', () => {
                    navLinks.classList.remove('active');
                    navToggle.classList.remove('active');
                });
            });

            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });

            // --- Typing Effect ---
            const typingEffectEl = document.querySelector('.typing-effect');
            if (typingEffectEl) {
                const words = JSON.parse(typingEffectEl.dataset.words);
                let wordIndex = 0;
                let charIndex = 0;
                let isDeleting = false;

                function type() {
                    const currentWord = words[wordIndex];
                    const speed = isDeleting ? 50 : 150;

                    // Update text
                    typingEffectEl.textContent = currentWord.substring(0, charIndex);
                    typingEffectEl.classList.add('typing-cursor'); // Add cursor effect

                    if (!isDeleting && charIndex < currentWord.length) {
                        // Typing forward
                        charIndex++;
                        setTimeout(type, speed);
                    } else if (isDeleting && charIndex > 0) {
                        // Deleting
                        charIndex--;
                        setTimeout(type, speed);
                    } else {
                        // Word is finished, pause or switch
                        isDeleting = !isDeleting;
                        if (!isDeleting) {
                            // Moved to next word
                            wordIndex = (wordIndex + 1) % words.length;
                        }
                        setTimeout(type, isDeleting ? 1000 : 500);
                    }
                }
                type();
            }

            // --- Fade-in on Scroll ---
            const sections = document.querySelectorAll('section');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });

            sections.forEach(section => {
                section.classList.add('fade-in');
                observer.observe(section);
            });

            // --- Certificate Modal Logic ---
            const modalOverlay = document.getElementById('modal-overlay');
            const modalContent = document.getElementById('modal-content');
            const modalClose = document.getElementById('modal-close');
            const modalTitle = document.getElementById('modal-title');
            const modalImg = document.getElementById('modal-img');
            const modalDesc = document.getElementById('modal-desc');
            const certButtons = document.querySelectorAll('.cert-button');

            certButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const title = button.dataset.title;
                    const imgPath = button.dataset.img;
                    const desc = button.dataset.desc;

                    // Set modal content
                    modalTitle.textContent = title;
                    modalImg.src = imgPath; // The 'onerror' in the HTML will handle broken links
                    modalDesc.textContent = desc;

                    // Show the modal
                    modalOverlay.classList.remove('hidden');
                });
            });

            // Function to close the modal
            const closeModal = () => {
                modalOverlay.classList.add('hidden');
                modalImg.src = ""; // Clear src to stop loading if it was a broken link
            };

            // Close modal events
            modalClose.addEventListener('click', closeModal);
            modalOverlay.addEventListener('click', (e) => {
                // Only close if the user clicked the overlay itself, not the content
                if (e.target === modalOverlay) {
                    closeModal();
                }
            });
        });
    </script>
</body>
</html>