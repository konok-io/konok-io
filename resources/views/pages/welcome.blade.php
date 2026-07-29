@extends('layouts.app')

@section('title', 'KONOK.IO - Key Of Next Online Knowledge')

@section('content')

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <span class="section-eyebrow">$ whoami</span>
                <h1 class="hero-title">
                    KONOK.IO
                </h1>
                <p class="hero-subtitle">
                    <span style="color: var(--terminal-syntax-purple);">&lt;</span>
                    Key Of Next Online Knowledge
                    <span style="color: var(--terminal-syntax-purple);">/&gt;</span>
                </p>
                <p style="color: var(--terminal-text-secondary); margin-bottom: 24px; font-size: 1.125rem; line-height: 1.8;">
                    Transforming your ideas into powerful digital experiences. We help businesses grow with custom web applications, IT infrastructure, and comprehensive digital solutions.
                </p>
                <div class="hero-actions">
                    <a href="{{ route('services') }}" class="btn btn-primary">
                        <span>$</span> explore_services
                    </a>
                    <a href="{{ route('contact') }}" class="btn btn-command">
                        &gt; get_free_quote
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
                        <span class="terminal-path">~/konok.io/company.blade.php</span>
                    </div>
                    <div class="terminal-content">
                        <pre style="font-family: var(--font-mono); font-size: 0.875rem; line-height: 1.8; margin: 0;"><code><span style="color: var(--terminal-syntax-purple);">const</span> <span style="color: var(--terminal-accent);">konok</span> = {
  <span style="color: var(--terminal-syntax-amber);">name</span>: <span style="color: var(--terminal-syntax-green);">"KONOK.IO"</span>,
  <span style="color: var(--terminal-syntax-amber);">services</span>: [<span style="color: var(--terminal-syntax-green);">"Web Dev"</span>, <span style="color: var(--terminal-syntax-green);">"IT Support"</span>],
  <span style="color: var(--terminal-syntax-amber);">focus</span>: <span style="color: var(--terminal-syntax-green);">"Business Solutions"</span>,
  <span style="color: var(--terminal-syntax-amber);">mission</span>: <span style="color: var(--terminal-syntax-green);">"Key Of Next Online Knowledge"</span>
};

<span style="color: var(--terminal-text-muted);">// Ready to transform?</span>
<span class="cursor-blink"></span></code></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Preview -->
<section class="section section-light">
    <div class="container">
        <div class="section-header">
            <span class="section-eyebrow">// services</span>
            <h2 class="section-title">What We Offer</h2>
            <p class="section-subtitle">
                Comprehensive web development and IT solutions tailored to your business needs.
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
                    <span class="badge">// web_dev</span>
                </div>
                <div class="card-body">
                    <div class="feature-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <polyline points="16 18 22 12 16 6"></polyline>
                            <polyline points="8 6 2 12 8 18"></polyline>
                        </svg>
                    </div>
                    <h3 class="feature-title">Web Development</h3>
                    <p class="feature-description">
                        Custom websites, web applications, and e-commerce solutions built with modern technologies.
                    </p>
                    <div class="d-flex gap-1 mt-3" style="flex-wrap: wrap;">
                        <span class="tag">Laravel</span>
                        <span class="tag">PHP</span>
                        <span class="tag">MySQL</span>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('services') }}" class="btn btn-command btn-sm">
                        &gt; learn_more
                    </a>
                </div>
            </div>
            
            <div class="card feature-card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="badge badge-primary">// it_support</span>
                </div>
                <div class="card-body">
                    <div class="feature-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                        </svg>
                    </div>
                    <h3 class="feature-title">IT Support</h3>
                    <p class="feature-description">
                        Network setup, hardware troubleshooting, server administration, and 24/7 technical support.
                    </p>
                    <div class="d-flex gap-1 mt-3" style="flex-wrap: wrap;">
                        <span class="tag">Networking</span>
                        <span class="tag">Security</span>
                        <span class="tag">Cloud</span>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('services') }}" class="btn btn-command btn-sm">
                        &gt; learn_more
                    </a>
                </div>
            </div>
            
            <div class="card feature-card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="badge badge-success">// design</span>
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
                    <h3 class="feature-title">Creative Design</h3>
                    <p class="feature-description">
                        Professional UI/UX design, brand identity, and graphic design for digital products.
                    </p>
                    <div class="d-flex gap-1 mt-3" style="flex-wrap: wrap;">
                        <span class="tag">Figma</span>
                        <span class="tag">UI/UX</span>
                        <span class="tag">Branding</span>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('services') }}" class="btn btn-command btn-sm">
                        &gt; learn_more
                    </a>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="{{ route('services') }}" class="btn btn-primary">
                <span>$</span> view_all_services
            </a>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-eyebrow">// why_konok</span>
            <h2 class="section-title">Why Choose KONOK.IO?</h2>
            <p class="section-subtitle">
                We combine technical expertise with innovative solutions to deliver exceptional results.
            </p>
        </div>
        
        <div class="grid grid-2" style="gap: var(--space-xl);">
            <div class="terminal-window">
                <div class="terminal-titlebar">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="terminal-path">~/advantages.json</span>
                </div>
                <div class="terminal-content">
                    <div style="padding: var(--space-md);">
                        <div style="display: flex; align-items: flex-start; gap: var(--space-md); margin-bottom: var(--space-lg);">
                            <span style="color: var(--terminal-syntax-green); font-size: 1.5rem;">✓</span>
                            <div>
                                <h4 style="font-family: var(--font-mono); font-size: 0.95rem; color: var(--terminal-accent); margin-bottom: var(--space-xs);">AI-Powered Development</h4>
                                <p style="font-size: 0.9rem; color: var(--terminal-text-secondary); line-height: 1.6;">Leveraging cutting-edge AI tools to accelerate development while maintaining code quality.</p>
                            </div>
                        </div>
                        <div style="display: flex; align-items: flex-start; gap: var(--space-md); margin-bottom: var(--space-lg);">
                            <span style="color: var(--terminal-syntax-green); font-size: 1.5rem;">✓</span>
                            <div>
                                <h4 style="font-family: var(--font-mono); font-size: 0.95rem; color: var(--terminal-accent); margin-bottom: var(--space-xs);">24/7 Support</h4>
                                <p style="font-size: 0.9rem; color: var(--terminal-text-secondary); line-height: 1.6;">Round-the-clock technical support to keep your systems running smoothly.</p>
                            </div>
                        </div>
                        <div style="display: flex; align-items: flex-start; gap: var(--space-md);">
                            <span style="color: var(--terminal-syntax-green); font-size: 1.5rem;">✓</span>
                            <div>
                                <h4 style="font-family: var(--font-mono); font-size: 0.95rem; color: var(--terminal-accent); margin-bottom: var(--space-xs);">Scalable Solutions</h4>
                                <p style="font-size: 0.9rem; color: var(--terminal-text-secondary); line-height: 1.6;">Built to grow with your business - from startup to enterprise level.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="terminal-window">
                <div class="terminal-titlebar">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="terminal-path">~/tech_stack.json</span>
                </div>
                <div class="terminal-content">
                    <div style="padding: var(--space-md);">
                        <div style="display: flex; align-items: flex-start; gap: var(--space-md); margin-bottom: var(--space-lg);">
                            <span style="color: var(--terminal-syntax-amber); font-size: 1.5rem;">⚡</span>
                            <div>
                                <h4 style="font-family: var(--font-mono); font-size: 0.95rem; color: var(--terminal-accent); margin-bottom: var(--space-xs);">Fast Delivery</h4>
                                <p style="font-size: 0.9rem; color: var(--terminal-text-secondary); line-height: 1.6;">Agile methodology ensures rapid deployment without compromising quality.</p>
                            </div>
                        </div>
                        <div style="display: flex; align-items: flex-start; gap: var(--space-md); margin-bottom: var(--space-lg);">
                            <span style="color: var(--terminal-syntax-purple); font-size: 1.5rem;">🔒</span>
                            <div>
                                <h4 style="font-family: var(--font-mono); font-size: 0.95rem; color: var(--terminal-accent); margin-bottom: var(--space-xs);">Secure & Reliable</h4>
                                <p style="font-size: 0.9rem; color: var(--terminal-text-secondary); line-height: 1.6;">Enterprise-grade security with SSL, backups, and disaster recovery.</p>
                            </div>
                        </div>
                        <div style="display: flex; align-items: flex-start; gap: var(--space-md);">
                            <span style="color: var(--terminal-syntax-green); font-size: 1.5rem;">💰</span>
                            <div>
                                <h4 style="font-family: var(--font-mono); font-size: 0.95rem; color: var(--terminal-accent); margin-bottom: var(--space-xs);">Cost Effective</h4>
                                <p style="font-size: 0.9rem; color: var(--terminal-text-secondary); line-height: 1.6;">Competitive pricing with transparent billing and no hidden costs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Projects Section -->
<section class="section section-light">
    <div class="container">
        <div class="section-header">
            <span class="section-eyebrow">// projects</span>
            <h2 class="section-title">Featured Projects</h2>
            <p class="section-subtitle">
                Showcasing our recent work and successful client collaborations.
            </p>
        </div>
        
        <div class="grid grid-3">
            <div class="card">
                <div style="background: linear-gradient(135deg, #1e3a5f 0%, #0f2744 100%); height: 160px; display: flex; align-items: center; justify-content: center;">
                    <span style="font-family: var(--font-mono); font-size: 3rem; color: var(--terminal-accent);">01</span>
                </div>
                <div class="card-body">
                    <span class="badge badge-primary">// ecommerce</span>
                    <h3 class="feature-title" style="margin-top: var(--space-sm);">E-Commerce Platform</h3>
                    <p class="feature-description">
                        Full-featured online store with payment integration, inventory management, and analytics dashboard.
                    </p>
                    <div class="d-flex gap-1 mt-3" style="flex-wrap: wrap;">
                        <span class="tag">Laravel</span>
                        <span class="tag">Stripe</span>
                        <span class="tag">Vue.js</span>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('projects') }}" class="btn btn-command btn-sm">
                        &gt; view_details
                    </a>
                </div>
            </div>
            
            <div class="card">
                <div style="background: linear-gradient(135deg, #2d1b4e 0%, #1a1030 100%); height: 160px; display: flex; align-items: center; justify-content: center;">
                    <span style="font-family: var(--font-mono); font-size: 3rem; color: var(--terminal-syntax-purple);">02</span>
                </div>
                <div class="card-body">
                    <span class="badge badge-success">// web_app</span>
                    <h3 class="feature-title" style="margin-top: var(--space-sm);">SaaS Dashboard</h3>
                    <p class="feature-description">
                        Multi-tenant SaaS application with real-time analytics, user management, and API integrations.
                    </p>
                    <div class="d-flex gap-1 mt-3" style="flex-wrap: wrap;">
                        <span class="tag">React</span>
                        <span class="tag">Node.js</span>
                        <span class="tag">PostgreSQL</span>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('projects') }}" class="btn btn-command btn-sm">
                        &gt; view_details
                    </a>
                </div>
            </div>
            
            <div class="card">
                <div style="background: linear-gradient(135deg, #1b4d3e 0%, #0d2a22 100%); height: 160px; display: flex; align-items: center; justify-content: center;">
                    <span style="font-family: var(--font-mono); font-size: 3rem; color: var(--terminal-syntax-green);">03</span>
                </div>
                <div class="card-body">
                    <span class="badge">// corporate</span>
                    <h3 class="feature-title" style="margin-top: var(--space-sm);">Corporate Portal</h3>
                    <p class="feature-description">
                        Internal company portal with document management, HR modules, and workflow automation.
                    </p>
                    <div class="d-flex gap-1 mt-3" style="flex-wrap: wrap;">
                        <span class="tag">Laravel</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">Livewire</span>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('projects') }}" class="btn btn-command btn-sm">
                        &gt; view_details
                    </a>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="{{ route('projects') }}" class="btn btn-primary">
                <span>$</span> view_all_projects
            </a>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="section">
    <div class="container">
        <div class="terminal-window">
            <div class="terminal-titlebar">
                <div class="terminal-dots">
                    <span class="terminal-dot red"></span>
                    <span class="terminal-dot yellow"></span>
                    <span class="terminal-dot green"></span>
                </div>
                <span class="terminal-path">~/stats.blade.php</span>
            </div>
            <div class="terminal-content">
                <div class="grid grid-4">
                    <div class="text-center">
                        <div style="font-family: var(--font-mono); font-size: 2.5rem; font-weight: 700; color: var(--terminal-accent);">100+</div>
                        <p style="font-family: var(--font-mono); font-size: 0.875rem; color: var(--terminal-text-muted);">// projects_completed</p>
                    </div>
                    <div class="text-center">
                        <div style="font-family: var(--font-mono); font-size: 2.5rem; font-weight: 700; color: var(--terminal-accent);">50+</div>
                        <p style="font-family: var(--font-mono); font-size: 0.875rem; color: var(--terminal-text-muted);">// happy_clients</p>
                    </div>
                    <div class="text-center">
                        <div style="font-family: var(--font-mono); font-size: 2.5rem; font-weight: 700; color: var(--terminal-accent);">5+</div>
                        <p style="font-family: var(--font-mono); font-size: 0.875rem; color: var(--terminal-text-muted);">// years_experience</p>
                    </div>
                    <div class="text-center">
                        <div style="font-family: var(--font-mono); font-size: 2.5rem; font-weight: 700; color: var(--terminal-accent);">99%</div>
                        <p style="font-family: var(--font-mono); font-size: 0.875rem; color: var(--terminal-text-muted);">// satisfaction_rate</p>
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
                <span class="terminal-path" style="background: rgba(255,255,255,0.2); color: white; border-color: rgba(255,255,255,0.3);">~/start.blade.php</span>
            </div>
            <div class="terminal-content">
                <span class="section-eyebrow" style="color: white;">// start_project</span>
                <h2 class="cta-title">Ready to Transform Your Business?</h2>
                <p class="cta-subtitle">
                    Let's collaborate and build something amazing together. Get started with a free consultation today.
                </p>
                <div class="cta-actions">
                    <a href="{{ route('contact') }}" class="btn btn-primary">
                        <span style="color: var(--terminal-accent);">$</span> get_in_touch
                    </a>
                    <a href="{{ route('projects') }}" class="btn btn-command">
                        &gt; view_projects
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section section-light">
    <div class="container">
        <div class="section-header">
            <span class="section-eyebrow">// testimonials</span>
            <h2 class="section-title">What Our Clients Say</h2>
            <p class="section-subtitle">
                Don't just take our word for it - hear from our satisfied clients.
            </p>
        </div>
        
        <div class="grid grid-3">
            <div class="terminal-window">
                <div class="terminal-titlebar">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="terminal-path">~/review_01.json</span>
                </div>
                <div class="terminal-content">
                    <div style="padding: var(--space-md);">
                        <p style="font-size: 0.95rem; color: var(--terminal-text-secondary); line-height: 1.7; margin-bottom: var(--space-md);">
                            "KONOK.IO delivered our e-commerce platform on time and exceeded our expectations. Their use of AI tools accelerated development while maintaining excellent code quality."
                        </p>
                        <div style="border-top: 1px solid var(--terminal-border); padding-top: var(--space-md);">
                            <p style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--terminal-accent); margin-bottom: 0;">@ahmed_business</p>
                            <p style="font-size: 0.8rem; color: var(--terminal-text-muted); margin-bottom: 0;">CEO, TechStart Arabia</p>
                        </div>
                        <div style="margin-top: var(--space-sm);">
                            <span style="color: #fbbf24;">★★★★★</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="terminal-window">
                <div class="terminal-titlebar">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="terminal-path">~/review_02.json</span>
                </div>
                <div class="terminal-content">
                    <div style="padding: var(--space-md);">
                        <p style="font-size: 0.95rem; color: var(--terminal-text-secondary); line-height: 1.7; margin-bottom: var(--space-md);">
                            "Outstanding IT support! They resolved our network issues within hours and have been providing reliable support ever since. Highly recommended for businesses."
                        </p>
                        <div style="border-top: 1px solid var(--terminal-border); padding-top: var(--space-md);">
                            <p style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--terminal-accent); margin-bottom: 0;">@sara_manager</p>
                            <p style="font-size: 0.8rem; color: var(--terminal-text-muted); margin-bottom: 0;">Operations Director, Gulf Logistics</p>
                        </div>
                        <div style="margin-top: var(--space-sm);">
                            <span style="color: #fbbf24;">★★★★★</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="terminal-window">
                <div class="terminal-titlebar">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="terminal-path">~/review_03.json</span>
                </div>
                <div class="terminal-content">
                    <div style="padding: var(--space-md);">
                        <p style="font-size: 0.95rem; color: var(--terminal-text-secondary); line-height: 1.7; margin-bottom: var(--space-md);">
                            "Professional, responsive, and technically excellent. KONOK.IO transformed our old website into a modern, fast, and user-friendly platform."
                        </p>
                        <div style="border-top: 1px solid var(--terminal-border); padding-top: var(--space-md);">
                            <p style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--terminal-accent); margin-bottom: 0;">@khalid_startup</p>
                            <p style="font-size: 0.8rem; color: var(--terminal-text-muted); margin-bottom: 0;">Founder, DigitalFirst KSA</p>
                        </div>
                        <div style="margin-top: var(--space-sm);">
                            <span style="color: #fbbf24;">★★★★★</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Client Logos Section -->
<section class="section">
    <div class="container">
        <div class="text-center" style="margin-bottom: var(--space-xl);">
            <span class="section-eyebrow">// trusted_by</span>
            <h2 class="section-title" style="font-size: 1.5rem;">Trusted by Leading Companies</h2>
        </div>
        
        <div class="terminal-window" style="max-width: 900px; margin: 0 auto;">
            <div class="terminal-titlebar">
                <div class="terminal-dots">
                    <span class="terminal-dot red"></span>
                    <span class="terminal-dot yellow"></span>
                    <span class="terminal-dot green"></span>
                </div>
                <span class="terminal-path">~/partners.log</span>
            </div>
            <div class="terminal-content">
                <div style="display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap; padding: var(--space-xl); gap: var(--space-lg);">
                    <div style="text-align: center; padding: var(--space-md);">
                        <span style="font-family: var(--font-mono); font-size: 1.25rem; color: var(--terminal-text-muted); font-weight: 700;">TechStart</span>
                        <p style="font-size: 0.75rem; color: var(--terminal-text-muted); margin-top: var(--space-xs);">// startup</p>
                    </div>
                    <div style="text-align: center; padding: var(--space-md);">
                        <span style="font-family: var(--font-mono); font-size: 1.25rem; color: var(--terminal-text-muted); font-weight: 700;">GulfLogistics</span>
                        <p style="font-size: 0.75rem; color: var(--terminal-text-muted); margin-top: var(--space-xs);">// logistics</p>
                    </div>
                    <div style="text-align: center; padding: var(--space-md);">
                        <span style="font-family: var(--font-mono); font-size: 1.25rem; color: var(--terminal-text-muted); font-weight: 700;">DigitalFirst</span>
                        <p style="font-size: 0.75rem; color: var(--terminal-text-muted); margin-top: var(--space-xs);">// tech</p>
                    </div>
                    <div style="text-align: center; padding: var(--space-md);">
                        <span style="font-family: var(--font-mono); font-size: 1.25rem; color: var(--terminal-text-muted); font-weight: 700;">MediCare+</span>
                        <p style="font-size: 0.75rem; color: var(--terminal-text-muted); margin-top: var(--space-xs);">// healthcare</p>
                    </div>
                    <div style="text-align: center; padding: var(--space-md);">
                        <span style="font-family: var(--font-mono); font-size: 1.25rem; color: var(--terminal-text-muted); font-weight: 700;">EduVision</span>
                        <p style="font-size: 0.75rem; color: var(--terminal-text-muted); margin-top: var(--space-xs);">// education</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
