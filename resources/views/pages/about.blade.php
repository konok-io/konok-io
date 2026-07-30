@extends('layouts.app')

@section('title', 'About | KONOK.IO - Key Of Next Online Knowledge')

@section('content')
<!-- Page Header -->
<section class="hero" style="padding: 80px 0;">
    <div class="container">
        <div class="terminal-window" style="max-width: 800px; margin: 0 auto;">
            <div class="terminal-titlebar">
                <div class="terminal-dots">
                    <span class="terminal-dot red"></span>
                    <span class="terminal-dot yellow"></span>
                    <span class="terminal-dot green"></span>
                </div>
                <span class="terminal-path">~/about.blade.php</span>
            </div>
            <div class="terminal-content" style="text-align: center;">
                <span class="section-eyebrow">// about_us</span>
                <h1 class="hero-title" style="font-size: 2.5rem; margin-bottom: 16px;">KONOK.IO</h1>
                <p class="hero-subtitle" style="font-size: 1.1rem; max-width: 600px; margin: 0 auto;">
                    <span style="color: var(--terminal-syntax-purple);">const</span> <span style="color: var(--terminal-accent);">mission</span> = 
                    <span style="color: var(--terminal-syntax-green);">"Key Of Next Online Knowledge"</span>;
                </p>
            </div>
        </div>
    </div>
</section>

<!-- About Content -->
<section class="section">
    <div class="container">
        <!-- About Info -->
        <div class="card" style="margin-bottom: 48px;">
            <div class="card-header">
                <div class="terminal-dots">
                    <span class="terminal-dot red"></span>
                    <span class="terminal-dot yellow"></span>
                    <span class="terminal-dot green"></span>
                </div>
                <span class="terminal-path">company-overview.json</span>
            </div>
            <div class="card-body" style="padding: 40px;">
                <h2 style="font-family: var(--font-mono); font-size: 1.5rem; margin-bottom: 24px; text-align: center;">
                    <span style="color: var(--terminal-syntax-purple);">About</span> <span style="color: var(--terminal-accent);">KONOK.IO</span>
                </h2>
                
                <div style="max-width: 800px; margin: 0 auto;">
                    <p style="margin-bottom: 20px; font-size: 1.1rem; line-height: 1.9; color: var(--terminal-text-secondary); text-align: center;">
                        <strong>KONOK (Key Of Next Online Knowledge)</strong> is a professional IT services and web development company 
                        dedicated to delivering cutting-edge digital solutions to businesses worldwide.
                    </p>
                    <p style="margin-bottom: 20px; font-size: 1.1rem; line-height: 1.9; color: var(--terminal-text-secondary); text-align: center;">
                        Founded by <strong>Muhammad Rashed Hossain</strong>, we combine deep technical expertise with innovative 
                        AI-assisted development to create robust, scalable, and secure web applications.
                    </p>
                    <p style="font-size: 1.1rem; line-height: 1.9; color: var(--terminal-text-secondary); text-align: center;">
                        Our mission is to empower businesses with technology that drives growth, efficiency, and digital transformation.
                    </p>
                </div>
            </div>
        </div>

        <!-- Mission & Vision -->
        <div class="grid grid-2" style="gap: 32px; margin-bottom: 48px;">
            <div class="card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="terminal-path">mission.json</span>
                </div>
                <div class="card-body" style="padding: 32px;">
                    <h3 style="font-family: var(--font-mono); font-size: 1.25rem; margin-bottom: 16px; color: var(--terminal-accent);">
                        <span style="color: var(--terminal-syntax-amber);">// Our Mission</span>
                    </h3>
                    <p style="font-size: 1rem; line-height: 1.8; color: var(--terminal-text-secondary);">
                        To provide innovative, reliable, and cost-effective IT solutions that help businesses 
                        establish their online presence and achieve their digital goals.
                    </p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="terminal-path">vision.json</span>
                </div>
                <div class="card-body" style="padding: 32px;">
                    <h3 style="font-family: var(--font-mono); font-size: 1.25rem; margin-bottom: 16px; color: var(--terminal-accent);">
                        <span style="color: var(--terminal-syntax-amber);">// Our Vision</span>
                    </h3>
                    <p style="font-size: 1rem; line-height: 1.8; color: var(--terminal-text-secondary);">
                        To become a globally recognized IT partner, known for excellence in web development, 
                        AI integration, and delivering measurable business outcomes.
                    </p>
                </div>
            </div>
        </div>

        <!-- Why Choose Us -->
        <div class="card" style="margin-bottom: 48px;">
            <div class="card-header">
                <div class="terminal-dots">
                    <span class="terminal-dot red"></span>
                    <span class="terminal-dot yellow"></span>
                    <span class="terminal-dot green"></span>
                </div>
                <span class="terminal-path">why-choose-us.json</span>
            </div>
            <div class="card-body" style="padding: 40px;">
                <h3 style="font-family: var(--font-mono); font-size: 1.25rem; margin-bottom: 32px; text-align: center;">
                    <span style="color: var(--terminal-syntax-amber);">// Why Choose KONOK.IO</span>
                </h3>
                
                <div class="grid grid-3" style="gap: 24px;">
                    <div style="text-align: center; padding: 24px;">
                        <div style="font-size: 2.5rem; margin-bottom: 16px;">🚀</div>
                        <h4 style="font-size: 1.1rem; margin-bottom: 12px; color: var(--terminal-accent);">Fast Delivery</h4>
                        <p style="font-size: 0.9rem; color: var(--terminal-text-secondary); line-height: 1.6;">
                            AI-assisted development ensures rapid prototyping and faster project completion without compromising quality.
                        </p>
                    </div>
                    
                    <div style="text-align: center; padding: 24px;">
                        <div style="font-size: 2.5rem; margin-bottom: 16px;">💼</div>
                        <h4 style="font-size: 1.1rem; margin-bottom: 12px; color: var(--terminal-accent);">Professional Quality</h4>
                        <p style="font-size: 0.9rem; color: var(--terminal-text-secondary); line-height: 1.6;">
                            Enterprise-grade solutions with clean code, security best practices, and scalable architecture.
                        </p>
                    </div>
                    
                    <div style="text-align: center; padding: 24px;">
                        <div style="font-size: 2.5rem; margin-bottom: 16px;">🤝</div>
                        <h4 style="font-size: 1.1rem; margin-bottom: 12px; color: var(--terminal-accent);">Dedicated Support</h4>
                        <p style="font-size: 0.9rem; color: var(--terminal-text-secondary); line-height: 1.6;">
                            Ongoing maintenance, updates, and 24/7 support to keep your systems running smoothly.
                        </p>
                    </div>
                    
                    <div style="text-align: center; padding: 24px;">
                        <div style="font-size: 2.5rem; margin-bottom: 16px;">💰</div>
                        <h4 style="font-size: 1.1rem; margin-bottom: 12px; color: var(--terminal-accent);">Cost Effective</h4>
                        <p style="font-size: 0.9rem; color: var(--terminal-text-secondary); line-height: 1.6;">
                            Competitive pricing with transparent billing. No hidden costs or surprise charges.
                        </p>
                    </div>
                    
                    <div style="text-align: center; padding: 24px;">
                        <div style="font-size: 2.5rem; margin-bottom: 16px;">🔒</div>
                        <h4 style="font-size: 1.1rem; margin-bottom: 12px; color: var(--terminal-accent);">Secure Solutions</h4>
                        <p style="font-size: 0.9rem; color: var(--terminal-text-secondary); line-height: 1.6;">
                            Security-first approach with SSL, encryption, and compliance with industry standards.
                        </p>
                    </div>
                    
                    <div style="text-align: center; padding: 24px;">
                        <div style="font-size: 2.5rem; margin-bottom: 16px;">🌍</div>
                        <h4 style="font-size: 1.1rem; margin-bottom: 12px; color: var(--terminal-accent);">Global Reach</h4>
                        <p style="font-size: 0.9rem; color: var(--terminal-text-secondary); line-height: 1.6;">
                            Serving clients worldwide with remote collaboration and multilingual support.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistics -->
        <div class="grid grid-4" style="gap: 24px; margin-bottom: 48px;">
            <div class="card" style="text-align: center;">
                <div class="card-body" style="padding: 32px;">
                    <div style="font-size: 2.5rem; font-weight: 700; color: var(--terminal-accent); margin-bottom: 8px;">50+</div>
                    <div style="font-family: var(--font-mono); font-size: 0.875rem; color: var(--terminal-text-muted);">Projects Completed</div>
                </div>
            </div>
            
            <div class="card" style="text-align: center;">
                <div class="card-body" style="padding: 32px;">
                    <div style="font-size: 2.5rem; font-weight: 700; color: var(--terminal-accent); margin-bottom: 8px;">30+</div>
                    <div style="font-family: var(--font-mono); font-size: 0.875rem; color: var(--terminal-text-muted);">Happy Clients</div>
                </div>
            </div>
            
            <div class="card" style="text-align: center;">
                <div class="card-body" style="padding: 32px;">
                    <div style="font-size: 2.5rem; font-weight: 700; color: var(--terminal-accent); margin-bottom: 8px;">5+</div>
                    <div style="font-family: var(--font-mono); font-size: 0.875rem; color: var(--terminal-text-muted);">Years Experience</div>
                </div>
            </div>
            
            <div class="card" style="text-align: center;">
                <div class="card-body" style="padding: 32px;">
                    <div style="font-size: 2.5rem; font-weight: 700; color: var(--terminal-accent); margin-bottom: 8px;">24/7</div>
                    <div style="font-family: var(--font-mono); font-size: 0.875rem; color: var(--terminal-text-muted);">Support Available</div>
                </div>
            </div>
        </div>

        <!-- Certifications -->
        <div class="card">
            <div class="card-header">
                <div class="terminal-dots">
                    <span class="terminal-dot red"></span>
                    <span class="terminal-dot yellow"></span>
                    <span class="terminal-dot green"></span>
                </div>
                <span class="terminal-path">certifications.json</span>
            </div>
            <div class="card-body" style="padding: 40px;">
                <h3 style="font-family: var(--font-mono); font-size: 1.25rem; margin-bottom: 24px; text-align: center;">
                    <span style="color: var(--terminal-syntax-amber);">// Certifications & Expertise</span>
                </h3>
                
                <div class="grid grid-2" style="gap: 24px;">
                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                        <span style="color: var(--terminal-syntax-green); font-size: 1.25rem;">✓</span>
                        <div>
                            <h4 style="font-size: 1rem; margin-bottom: 4px;">BSc in Computer Science</h4>
                            <p style="font-size: 0.875rem; color: var(--terminal-text-muted);">Strong academic foundation in computing</p>
                        </div>
                    </div>
                    
                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                        <span style="color: var(--terminal-syntax-green); font-size: 1.25rem;">✓</span>
                        <div>
                            <h4 style="font-size: 1rem; margin-bottom: 4px;">CompTIA A+ Certified</h4>
                            <p style="font-size: 0.875rem; color: var(--terminal-text-muted);">Industry-standard IT support certification</p>
                        </div>
                    </div>
                    
                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                        <span style="color: var(--terminal-syntax-green); font-size: 1.25rem;">✓</span>
                        <div>
                            <h4 style="font-size: 1rem; margin-bottom: 4px;">Laravel Development</h4>
                            <p style="font-size: 0.875rem; color: var(--terminal-text-muted);">Professional PHP framework expertise</p>
                        </div>
                    </div>
                    
                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                        <span style="color: var(--terminal-syntax-green); font-size: 1.25rem;">✓</span>
                        <div>
                            <h4 style="font-size: 1rem; margin-bottom: 4px;">AI-Assisted Development</h4>
                            <p style="font-size: 0.875rem; color: var(--terminal-text-muted);">Modern AI tool integration</p>
                        </div>
                    </div>
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
                <span class="terminal-path">~/contact.blade.php</span>
            </div>
            <div class="terminal-content text-center">
                <span class="section-eyebrow">// lets_connect</span>
                <h2 class="cta-title">Ready to Start Your Project?</h2>
                <p class="cta-subtitle">
                    Let's discuss how we can help transform your business with our IT and web development services.
                </p>
                <div class="cta-actions">
                    <a href="/contact" class="btn btn-primary">
                        <span style="color: #fff;">$</span> get_in_touch()
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
