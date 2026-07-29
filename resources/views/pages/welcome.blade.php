@extends('layouts.app')

@section('title', 'Home | Muhammad Rashed Hossain')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <span class="section-eyebrow">$ whoami</span>
                <h1 class="hero-title">
                    Muhammad Rashed<br>Hossain
                </h1>
                <p class="hero-subtitle">
                    <span style="color: var(--terminal-syntax-purple);">&lt;</span>
                    IT Support Specialist <span style="color: var(--terminal-text-muted);">|</span> 
                    Laravel Developer <span style="color: var(--terminal-text-muted);">|</span> 
                    Problem Solver
                    <span style="color: var(--terminal-syntax-purple);">/&gt;</span>
                </p>
                <div class="hero-actions">
                    <a href="/about" class="btn btn-primary">
                        <span style="color: #fff;">$</span> learn_more
                    </a>
                    <a href="/contact" class="btn btn-command">
                        > download_resume.pdf
                    </a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="terminal-window hero-window">
                    <div class="terminal-titlebar">
                        <div class="terminal-dots">
                            <span class="terminal-dot red"></span>
                            <span class="terminal-dot yellow"></span>
                            <span class="terminal-dot green"></span>
                        </div>
                        <span class="terminal-path">~/home/profile.js</span>
                    </div>
                    <div class="terminal-content">
                        <pre style="font-family: var(--font-mono); font-size: 0.875rem; line-height: 1.8; margin: 0;"><code><span style="color: var(--terminal-syntax-purple);">const</span> <span style="color: var(--terminal-accent);">developer</span> = {
  <span style="color: var(--terminal-syntax-amber);">name</span>: <span style="color: var(--terminal-syntax-green);">"Muhammad Rashed Hossain"</span>,
  <span style="color: var(--terminal-syntax-amber);">title</span>: <span style="color: var(--terminal-syntax-green);">"IT Specialist & Developer"</span>,
  <span style="color: var(--terminal-syntax-amber);">location</span>: <span style="color: var(--terminal-syntax-green);">"Saudi Arabia"</span>,
  <span style="color: var(--terminal-syntax-amber);">skills</span>: [<span style="color: var(--terminal-syntax-green);">"Laravel"</span>, <span style="color: var(--terminal-syntax-green);">"PHP"</span>, <span style="color: var(--terminal-syntax-green);">"MySQL"</span>, <span style="color: var(--terminal-syntax-green);">"IT Support"</span>],
  <span style="color: var(--terminal-syntax-amber);">status</span>: <span style="color: var(--terminal-syntax-green);">"Open to opportunities"</span>
};

<span style="color: var(--terminal-text-muted);">// Type a command below</span>
<span style="color: var(--terminal-text-muted);">// </span><span class="cursor-blink"></span></code></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Preview Section -->
<section class="section section-light">
    <div class="container">
        <div class="section-header">
            <span class="section-eyebrow">// about_me</span>
            <h2 class="section-title">Building Digital Solutions</h2>
            <p class="section-subtitle">
                With years of experience in IT support and web development, I help businesses 
                transform their digital presence through robust applications and reliable technical support.
            </p>
        </div>
        
        <div class="grid grid-3">
            <div class="card feature-card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="badge">// experience</span>
                </div>
                <div class="card-body">
                    <div class="feature-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                    <h3 class="feature-title">IT Support Specialist</h3>
                    <p class="feature-description">
                        Expert in network configuration, hardware troubleshooting, and system administration 
                        with a track record of maintaining 99.9% uptime.
                    </p>
                </div>
            </div>
            
            <div class="card feature-card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="badge badge-primary">// development</span>
                </div>
                <div class="card-body">
                    <div class="feature-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <polyline points="16 18 22 12 16 6"></polyline>
                            <polyline points="8 6 2 12 8 18"></polyline>
                        </svg>
                    </div>
                    <h3 class="feature-title">Laravel Developer</h3>
                    <p class="feature-description">
                        Building modern, scalable web applications with Laravel, PHP, MySQL, 
                        and the latest web technologies.
                    </p>
                </div>
            </div>
            
            <div class="card feature-card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="badge badge-success">// creative</span>
                </div>
                <div class="card-body">
                    <div class="feature-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                            <line x1="9" y1="9" x2="9.01" y2="9"></line>
                            <line x1="15" y1="9" x2="15.01" y2="9"></line>
                        </svg>
                    </div>
                    <h3 class="feature-title">Creative Problem Solver</h3>
                    <p class="feature-description">
                        Leveraging AI tools and creative thinking to accelerate development 
                        and optimize complex workflows.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="/about" class="btn btn-outline">
                <span style="color: var(--terminal-syntax-green);">$</span> read_more --about
            </a>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="section section-dark">
    <div class="container">
        <div class="section-header">
            <span class="section-eyebrow">// services</span>
            <h2 class="section-title">What I Offer</h2>
            <p class="section-subtitle">
                Comprehensive solutions tailored to your business needs, from technical support 
                to custom web development.
            </p>
        </div>
        
        <div class="grid grid-2">
            <!-- Service 1 -->
            <div class="card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="terminal-path">web-dev.php</span>
                </div>
                <div class="card-body">
                    <h3 class="feature-title">Web Development</h3>
                    <p class="feature-description">
                        Custom Laravel applications, e-commerce solutions, CMS development, 
                        API integrations, and responsive frontend design.
                    </p>
                    <div class="d-flex gap-1 mt-3" style="flex-wrap: wrap;">
                        <span class="tag">Laravel</span>
                        <span class="tag">PHP</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">HTML/CSS</span>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="/services" class="btn btn-command btn-sm">
                        > learn_more
                    </a>
                </div>
            </div>
            
            <!-- Service 2 -->
            <div class="card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="terminal-path">it-support.sh</span>
                </div>
                <div class="card-body">
                    <h3 class="feature-title">IT Support & Administration</h3>
                    <p class="feature-description">
                        Network setup, hardware troubleshooting, server administration, 
                        security audits, and 24/7 technical support.
                    </p>
                    <div class="d-flex gap-1 mt-3" style="flex-wrap: wrap;">
                        <span class="tag">Networking</span>
                        <span class="tag">Windows</span>
                        <span class="tag">Linux</span>
                        <span class="tag">Security</span>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="/services" class="btn btn-command btn-sm">
                        > learn_more
                    </a>
                </div>
            </div>
            
            <!-- Service 3 -->
            <div class="card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="terminal-path">database.sql</span>
                </div>
                <div class="card-body">
                    <h3 class="feature-title">Database Management</h3>
                    <p class="feature-description">
                        Database design, optimization, migration, backup solutions, 
                        and data analytics with modern DBMS.
                    </p>
                    <div class="d-flex gap-1 mt-3" style="flex-wrap: wrap;">
                        <span class="tag">MySQL</span>
                        <span class="tag">PostgreSQL</span>
                        <span class="tag">MongoDB</span>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="/services" class="btn btn-command btn-sm">
                        > learn_more
                    </a>
                </div>
            </div>
            
            <!-- Service 4 -->
            <div class="card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="terminal-path">design.ai</span>
                </div>
                <div class="card-body">
                    <h3 class="feature-title">Creative Design</h3>
                    <p class="feature-description">
                        Professional logo design, brand identity, graphic design, 
                        and UI/UX consultation for digital products.
                    </p>
                    <div class="d-flex gap-1 mt-3" style="flex-wrap: wrap;">
                        <span class="tag">Photoshop</span>
                        <span class="tag">Illustrator</span>
                        <span class="tag">Figma</span>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="/services" class="btn btn-command btn-sm">
                        > learn_more
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="section section-light">
    <div class="container">
        <div class="terminal-window">
            <div class="terminal-titlebar">
                <div class="terminal-dots">
                    <span class="terminal-dot red"></span>
                    <span class="terminal-dot yellow"></span>
                    <span class="terminal-dot green"></span>
                </div>
                <span class="terminal-path">~/stats.json</span>
            </div>
            <div class="terminal-content">
                <div class="grid grid-4">
                    <div class="text-center">
                        <div style="font-family: var(--font-mono); font-size: 2.5rem; font-weight: 700; color: var(--terminal-accent);">5+</div>
                        <p style="font-family: var(--font-mono); font-size: 0.875rem; color: var(--terminal-text-muted);">years_experience</p>
                    </div>
                    <div class="text-center">
                        <div style="font-family: var(--font-mono); font-size: 2.5rem; font-weight: 700; color: var(--terminal-accent);">50+</div>
                        <p style="font-family: var(--font-mono); font-size: 0.875rem; color: var(--terminal-text-muted);">projects_completed</p>
                    </div>
                    <div class="text-center">
                        <div style="font-family: var(--font-mono); font-size: 2.5rem; font-weight: 700; color: var(--terminal-accent);">30+</div>
                        <p style="font-family: var(--font-mono); font-size: 0.875rem; color: var(--terminal-text-muted);">happy_clients</p>
                    </div>
                    <div class="text-center">
                        <div style="font-family: var(--font-mono); font-size: 2.5rem; font-weight: 700; color: var(--terminal-accent);">99%</div>
                        <p style="font-family: var(--font-mono); font-size: 0.875rem; color: var(--terminal-text-muted);">uptime_maintained</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="terminal-window" style="max-width: 700px; margin: 0 auto;">
            <div class="terminal-titlebar">
                <div class="terminal-dots">
                    <span class="terminal-dot red"></span>
                    <span class="terminal-dot yellow"></span>
                    <span class="terminal-dot green"></span>
                </div>
                <span class="terminal-path">~/contact.sh</span>
            </div>
            <div class="terminal-content">
                <span class="section-eyebrow">// start_project</span>
                <h2 class="cta-title">Ready to Start Your Project?</h2>
                <p class="cta-subtitle">
                    Let's collaborate and build something amazing together. 
                    I'm always open to discussing new projects and opportunities.
                </p>
                <div class="cta-actions">
                    <a href="/contact" class="btn btn-primary">
                        <span style="color: #fff;">$</span> get_in_touch
                    </a>
                    <a href="/portfolio" class="btn btn-command">
                        > view_portfolio
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
