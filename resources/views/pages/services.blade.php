@extends('layouts.app')

@section('title', 'Services | KONOK.IO - Key Of Next Online Knowledge')

@section('content')
<!-- Page Header -->
<section class="hero" style="padding: var(--space-2xl) 0;">
    <div class="container">
        <div class="terminal-window">
            <div class="terminal-titlebar">
                <div class="terminal-dots">
                    <span class="terminal-dot red"></span>
                    <span class="terminal-dot yellow"></span>
                    <span class="terminal-dot green"></span>
                </div>
                <span class="terminal-path">~/services.blade.php</span>
            </div>
            <div class="terminal-content" style="text-align: center;">
                <span class="section-eyebrow">// services</span>
                <h1 class="hero-title" style="font-size: 2rem; text-align: center;">
                    <span style="color: var(--terminal-syntax-purple);">const</span> <span style="color: var(--terminal-accent);">services</span> = [
                </h1>
                <p class="hero-subtitle" style="font-size: 1rem; text-align: center;">
                    <span style="color: var(--terminal-syntax-green);">"Comprehensive solutions for your digital needs"</span>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Main Services -->
<section class="section section-light">
    <div class="container">
        <div class="grid grid-2">
            <!-- Web Development -->
            <div class="card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="badge">01</span>
                </div>
                <div class="card-body">
                    <div class="d-flex align-center gap-3 mb-3">
                        <div class="feature-icon">
                            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <polyline points="16 18 22 12 16 6"></polyline>
                                <polyline points="8 6 2 12 8 18"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h3 class="feature-title" style="margin-bottom: 0;">Web Development</h3>
                            <span style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--terminal-text-muted);">// laravel applications</span>
                        </div>
                    </div>
                    
                    <p class="feature-description">
                        Building modern, scalable web applications using Laravel and PHP. 
                        From simple websites to complex enterprise solutions.
                    </p>
                    
                    <div class="mt-3">
                        <span style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--terminal-text-muted); display: block; margin-bottom: var(--space-sm);">
                            <span style="color: var(--terminal-syntax-amber);">// features</span>
                        </span>
                        <ul style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--terminal-text-secondary); padding-left: var(--space-lg); margin: 0;">
                            <li style="margin-bottom: var(--space-xs);">Custom Laravel Applications</li>
                            <li style="margin-bottom: var(--space-xs);">E-commerce Solutions</li>
                            <li style="margin-bottom: var(--space-xs);">CMS Development</li>
                            <li style="margin-bottom: var(--space-xs);">RESTful API Integration</li>
                            <li style="margin-bottom: var(--space-xs);">Responsive Frontend Design</li>
                            <li>Database Design & Optimization</li>
                        </ul>
                    </div>
                    
                    <div class="d-flex gap-1 mt-3" style="flex-wrap: wrap;">
                        <span class="tag">Laravel</span>
                        <span class="tag">PHP</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">HTML/CSS</span>
                        <span class="tag">JavaScript</span>
                    </div>
                </div>
            </div>
            
            <!-- IT Support -->
            <div class="card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="badge">02</span>
                </div>
                <div class="card-body">
                    <div class="d-flex align-center gap-3 mb-3">
                        <div class="feature-icon">
                            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                                <line x1="8" y1="21" x2="16" y2="21"></line>
                                <line x1="12" y1="17" x2="12" y2="21"></line>
                            </svg>
                        </div>
                        <div>
                            <h3 class="feature-title" style="margin-bottom: 0;">IT Support</h3>
                            <span style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--terminal-text-muted);">// system administration</span>
                        </div>
                    </div>
                    
                    <p class="feature-description">
                        Comprehensive IT support and system administration services to keep 
                        your business running smoothly and securely.
                    </p>
                    
                    <div class="mt-3">
                        <span style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--terminal-text-muted); display: block; margin-bottom: var(--space-sm);">
                            <span style="color: var(--terminal-syntax-amber);">// capabilities</span>
                        </span>
                        <ul style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--terminal-text-secondary); padding-left: var(--space-lg); margin: 0;">
                            <li style="margin-bottom: var(--space-xs);">Network Setup & Configuration</li>
                            <li style="margin-bottom: var(--space-xs);">Hardware Troubleshooting</li>
                            <li style="margin-bottom: var(--space-xs);">Server Administration</li>
                            <li style="margin-bottom: var(--space-xs);">Security Audits</li>
                            <li style="margin-bottom: var(--space-xs);">24/7 Technical Support</li>
                            <li>Remote Desktop Support</li>
                        </ul>
                    </div>
                    
                    <div class="d-flex gap-1 mt-3" style="flex-wrap: wrap;">
                        <span class="tag">Windows</span>
                        <span class="tag">Linux</span>
                        <span class="tag">Networking</span>
                        <span class="tag">Security</span>
                    </div>
                </div>
            </div>
            
            <!-- Database Management -->
            <div class="card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="badge">03</span>
                </div>
                <div class="card-body">
                    <div class="d-flex align-center gap-3 mb-3">
                        <div class="feature-icon">
                            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="feature-title" style="margin-bottom: 0;">Database Management</h3>
                            <span style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--terminal-text-muted);">// data solutions</span>
                        </div>
                    </div>
                    
                    <p class="feature-description">
                        Professional database design, development, and optimization services 
                        to ensure your data is organized, secure, and performant.
                    </p>
                    
                    <div class="mt-3">
                        <span style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--terminal-text-muted); display: block; margin-bottom: var(--space-sm);">
                            <span style="color: var(--terminal-syntax-amber);">// offerings</span>
                        </span>
                        <ul style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--terminal-text-secondary); padding-left: var(--space-lg); margin: 0;">
                            <li style="margin-bottom: var(--space-xs);">Database Design & Architecture</li>
                            <li style="margin-bottom: var(--space-xs);">Performance Optimization</li>
                            <li style="margin-bottom: var(--space-xs);">Data Migration</li>
                            <li style="margin-bottom: var(--space-xs);">Backup Solutions</li>
                            <li style="margin-bottom: var(--space-xs);">Data Analytics</li>
                            <li>Backup & Recovery Plans</li>
                        </ul>
                    </div>
                    
                    <div class="d-flex gap-1 mt-3" style="flex-wrap: wrap;">
                        <span class="tag">MySQL</span>
                        <span class="tag">PostgreSQL</span>
                        <span class="tag">MongoDB</span>
                    </div>
                </div>
            </div>
            
            <!-- Creative Design -->
            <div class="card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="badge">04</span>
                </div>
                <div class="card-body">
                    <div class="d-flex align-center gap-3 mb-3">
                        <div class="feature-icon">
                            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M12 19l7-7 3 3-7 7-3-3z"></path>
                                <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
                                <path d="M2 2l7.586 7.586"></path>
                                <circle cx="11" cy="11" r="2"></circle>
                            </svg>
                        </div>
                        <div>
                            <h3 class="feature-title" style="margin-bottom: 0;">Creative Design</h3>
                            <span style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--terminal-text-muted);">// visual identity</span>
                        </div>
                    </div>
                    
                    <p class="feature-description">
                        Professional design services to establish and enhance your brand's 
                        visual identity across all digital platforms.
                    </p>
                    
                    <div class="mt-3">
                        <span style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--terminal-text-muted); display: block; margin-bottom: var(--space-sm);">
                            <span style="color: var(--terminal-syntax-amber);">// specialties</span>
                        </span>
                        <ul style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--terminal-text-secondary); padding-left: var(--space-lg); margin: 0;">
                            <li style="margin-bottom: var(--space-xs);">Logo Design</li>
                            <li style="margin-bottom: var(--space-xs);">Brand Identity</li>
                            <li style="margin-bottom: var(--space-xs);">Graphic Design</li>
                            <li style="margin-bottom: var(--space-xs);">UI/UX Consultation</li>
                            <li style="margin-bottom: var(--space-xs);">Social Media Graphics</li>
                            <li>Print Materials</li>
                        </ul>
                    </div>
                    
                    <div class="d-flex gap-1 mt-3" style="flex-wrap: wrap;">
                        <span class="tag">Photoshop</span>
                        <span class="tag">Illustrator</span>
                        <span class="tag">Figma</span>
                    </div>
                </div>
            </div>
        </div>
        
        <h2 style="font-family: var(--font-mono); font-size: 1rem; margin-top: var(--space-2xl); margin-bottom: var(--space-lg); text-align: center;">
            <span style="color: var(--terminal-syntax-purple);">]; // end of services</span>
        </h2>
    </div>
</section>

<!-- Process Section -->
<section class="section section-dark">
    <div class="container">
        <div class="section-header">
            <span class="section-eyebrow">// process</span>
            <h2 class="section-title">How I Work</h2>
            <p class="section-subtitle">
                A structured approach to delivering high-quality solutions on time.
            </p>
        </div>
        
        <div class="grid grid-4">
            <div class="terminal-window">
                <div class="terminal-titlebar">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="badge" style="font-size: 0.65rem;">step 01</span>
                </div>
                <div class="card-body" style="text-align: center;">
                    <div style="font-family: var(--font-mono); font-size: 2rem; color: var(--terminal-accent); margin-bottom: var(--space-sm);">
                        <svg width="40" height="40" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                    </div>
                    <h4 style="font-family: var(--font-mono); font-size: 0.9rem; margin-bottom: var(--space-sm);">// consultation</h4>
                    <p style="font-size: 0.9rem; color: var(--terminal-text-secondary); margin-bottom: 0; line-height: 1.6;">
                        Discuss your requirements, goals, and timeline to understand your needs.
                    </p>
                </div>
            </div>
            
            <div class="terminal-window">
                <div class="terminal-titlebar">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="badge" style="font-size: 0.65rem;">step 02</span>
                </div>
                <div class="card-body" style="text-align: center;">
                    <div style="font-family: var(--font-mono); font-size: 2rem; color: var(--terminal-accent); margin-bottom: var(--space-sm);">
                        <svg width="40" height="40" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                    </div>
                    <h4 style="font-family: var(--font-mono); font-size: 0.9rem; margin-bottom: var(--space-sm);">// planning</h4>
                    <p style="font-size: 0.9rem; color: var(--terminal-text-secondary); margin-bottom: 0; line-height: 1.6;">
                        Create detailed project specifications, wireframes, and development roadmap.
                    </p>
                </div>
            </div>
            
            <div class="terminal-window">
                <div class="terminal-titlebar">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="badge" style="font-size: 0.65rem;">step 03</span>
                </div>
                <div class="card-body" style="text-align: center;">
                    <div style="font-family: var(--font-mono); font-size: 2rem; color: var(--terminal-accent); margin-bottom: var(--space-sm);">
                        <svg width="40" height="40" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <polyline points="16 18 22 12 16 6"></polyline>
                            <polyline points="8 6 2 12 8 18"></polyline>
                        </svg>
                    </div>
                    <h4 style="font-family: var(--font-mono); font-size: 0.9rem; margin-bottom: var(--space-sm);">// development</h4>
                    <p style="font-size: 0.9rem; color: var(--terminal-text-secondary); margin-bottom: 0; line-height: 1.6;">
                        Build your solution with clean code, regular updates, and collaborative feedback.
                    </p>
                </div>
            </div>
            
            <div class="terminal-window">
                <div class="terminal-titlebar">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="badge" style="font-size: 0.65rem;">step 04</span>
                </div>
                <div class="card-body" style="text-align: center;">
                    <div style="font-family: var(--font-mono); font-size: 2rem; color: var(--terminal-accent); margin-bottom: var(--space-sm);">
                        <svg width="40" height="40" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <h4 style="font-family: var(--font-mono); font-size: 0.9rem; margin-bottom: var(--space-sm);">// delivery</h4>
                    <p style="font-size: 0.9rem; color: var(--terminal-text-secondary); margin-bottom: 0; line-height: 1.6;">
                        Launch your project with full documentation, training, and ongoing support.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="terminal-window" style="max-width: 600px; margin: 0 auto;">
            <div class="terminal-titlebar">
                <div class="terminal-dots">
                    <span class="terminal-dot red"></span>
                    <span class="terminal-dot yellow"></span>
                    <span class="terminal-dot green"></span>
                </div>
                <span class="terminal-path">~/hire-me.blade.php</span>
            </div>
            <div class="terminal-content text-center">
                <span class="section-eyebrow">// get_started</span>
                <h2 class="cta-title">Ready to Start Your Project?</h2>
                <p class="cta-subtitle">
                    Let's discuss how I can help bring your vision to life.
                </p>
                <div class="cta-actions">
                    <a href="/contact" class="btn btn-primary">
                        <span style="color: #fff;">$</span> request_quote
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
