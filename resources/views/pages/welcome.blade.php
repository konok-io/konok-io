@extends('layouts.app')

@section('title', 'Home | KONOK.IO - Professional Web Development & IT Solutions')

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
                    Professional Web Development
                    <span style="color: var(--terminal-text-muted);"> | </span>
                    IT Solutions
                    <span style="color: var(--terminal-text-muted);"> | </span>
                    Digital Excellence
                    <span style="color: var(--terminal-syntax-purple);">/&gt;</span>
                </p>
                <p style="color: var(--terminal-text-secondary); margin-bottom: 24px; font-size: 1.125rem;">
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
                        <span class="terminal-path">~/konok.io/company.js</span>
                    </div>
                    <div class="terminal-content">
                        <pre style="font-family: var(--font-mono); font-size: 0.875rem; line-height: 1.8; margin: 0;"><code><span style="color: var(--terminal-syntax-purple);">const</span> <span style="color: var(--terminal-accent);">konok</span> = {
  <span style="color: var(--terminal-syntax-amber);">name</span>: <span style="color: var(--terminal-syntax-green);">"KONOK.IO"</span>,
  <span style="color: var(--terminal-syntax-amber);">services</span>: [<span style="color: var(--terminal-syntax-green);">"Web Dev"</span>, <span style="color: var(--terminal-syntax-green);">"IT Support"</span>],
  <span style="color: var(--terminal-syntax-amber);">focus</span>: <span style="color: var(--terminal-syntax-green);">"Business Solutions"</span>,
  <span style="color: var(--terminal-syntax-amber);">mission</span>: <span style="color: var(--terminal-syntax-green);">"Digital Excellence"</span>
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
                <span class="terminal-path">~/stats.json</span>
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
                <span class="terminal-path" style="background: rgba(255,255,255,0.2); color: white; border-color: rgba(255,255,255,0.3);">~/start.sh</span>
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
                    <a href="{{ route('portfolio') }}" class="btn btn-command">
                        &gt; view_portfolio
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
