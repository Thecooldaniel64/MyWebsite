<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John Doe - Professional Resume</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary-color: #2a2a2a;  /* Dark gray background */
            --accent-color: #ffffff;   /* White accent */
            --text-color: #ffffff;
        }

        body {
            background-color: var(--primary-color);
            color: var(--text-color);
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar {
            background-color: var(--primary-color) !important;
            border-bottom: 1px solid #404040;
        }

        .section {
            padding: 80px 0;
            border-bottom: 1px solid #404040;
        }

        .accent-text {
            color: var(--accent-color);
        }

        .skill-badge {
            background-color: #333333;
            color: var(--text-color);
            padding: 8px 20px;
            margin: 5px;
            border-radius: 20px;
            border: 1px solid #555555;
        }

        .timeline-item {
            border-left: 2px solid var(--accent-color);
            padding-left: 30px;
            margin-bottom: 40px;
        }

        .profile-img {
            width: 200px;
            border-radius: 50%;
            border: 3px solid var(--accent-color);
        }

        .social-link {
            color: var(--text-color);
            font-size: 24px;
            margin: 0 10px;
            transition: 0.3s;
        }

        .social-link:hover {
            color: var(--accent-color);
        }

        .btn-custom {
            background-color: var(--accent-color);
            color: var(--primary-color);
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: bold;
            border: none;
        }

        .btn-custom:hover {
            opacity: 0.9;
        }

        /* Updated form control styling */
        .form-control {
            background-color: #333333 !important;
            border: 1px solid #555555 !important;
            color: var(--text-color) !important;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.25);
        }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar">
    <!-- Navigation -->
    <nav id="navbar" class="navbar fixed-top navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand accent-text" href="#">JD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="about" class="section">
        <div class="container text-center">
            <img src=" {{ URL('images/me.jpg') }}" alt="Profile" class="profile-img mb-4">
            <h1 class="display-4 mb-3">John <span class="accent-text">Doe</span></h1>
            <p class="lead">Senior Software Engineer & Tech Lead</p>
            <div class="mt-4">
                <a href="#contact" class="btn btn-custom">Get in Touch</a>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="section">
        <div class="container">
            <h2 class="mb-5 accent-text">Technical Skills</h2>
            <div class="row">
                <div class="col-md-3"><div class="skill-badge">Python</div></div>
                <div class="col-md-3"><div class="skill-badge">JavaScript</div></div>
                <div class="col-md-3"><div class="skill-badge">React</div></div>
                <div class="col-md-3"><div class="skill-badge">AWS</div></div>
                <!-- Add more skills -->
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="section">
        <div class="container">
            <h2 class="mb-5 accent-text">Experience</h2>
            <div class="timeline-item">
                <h4>Senior Software Engineer</h4>
                <p class="text-muted">Tech Corp Inc. | 2020 - Present</p>
                <p>Led development team in creating enterprise-level applications...</p>
            </div>
            <!-- Add more timeline items -->
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="container text-center">
            <h2 class="mb-5 accent-text">Get in Touch</h2>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-custom">Send Message</button>
                    </form>
                    <div class="mt-5">
                        <a href="#" class="social-link"><i class="fab fa-github"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Navbar active state update
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');
            
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (pageYOffset >= sectionTop - 60) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });

        // Initialize Bootstrap tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>
</html>