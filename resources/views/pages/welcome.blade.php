@extends('layouts.app')

@section('title', 'Home | KONOK.IO - Professional Web Development & IT Solutions')

@section('content')

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <div class="hero-text">
            <span class="section-eyebrow">$ whoami</span>
            <h1 class="hero-title">KONOK.IO</h1>
            <p class="hero-subtitle">
                <span style="color: var(--syntax-purple);">&lt;</span>
                Professional Web Development
                <span style="color: var(--text-muted);"> | </span>
                IT Solutions
                <span style="color: var(--text-muted);"> | </span>
                Digital Excellence
                <span style="color: var(--syntax-purple);">/&gt;</span>
            </p>
            <p style="color: var(--text-secondary); margin-bottom: 24px; font-size: 1.125rem;">
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
            <div class="terminal-window">
                <div class="terminal-titlebar">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="terminal-path">~/konok.io/company.js</span>
                </div>
                <div class="terminal-content">
                    <pre style="font-family: var(--font-mono); font-size: 0.875rem; line-height: 1.8; margin: 0;"><code><span style="color: var(--syntax-purple);">const</span> <span style="color: var(--syntax-blue);">konok</span> = {
  <span style="color: var(--syntax-amber);">name</span>: <span style="color: var(--syntax-green);">"KONOK.IO"</span>,
  <span style="color: var(--syntax-amber);">services</span>: [<span style="color: var(--syntax-green);">"Web Dev"</span>, <span style="color: var(--syntax-green);">"IT Support"</span>],
  <span style="color: var(--syntax-amber);">focus</span>: <span style="color: var(--syntax-green);">"Business Solutions"</span>,
  <span style="color: var(--syntax-amber);">mission</span>: <span style="color: var(--syntax-green);">"Digital Excellence"</span>
};

<span style="color: var(--text-muted);">// Ready to transform?</span>
<span class="cursor-blink"></span></code></pre>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Preview -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-eyebrow">// services</span>
            <h2 class="section-title">What We Offer</h2>
            <p class="section-subtitle">
                Comprehensive web development and IT solutions tailored to your business needs.
            </p>
        </div>
        
        <div class="cards-grid">
            <div class="card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="card-title">~/services/web-dev.json</span>
                </div>
                <div class="card-body">
                    <div class="card-icon">&#127760;</div>
                    <h3 class="card-name">Custom Web Development</h3>
                    <p class="card-description">Build powerful custom websites tailored to your business needs with modern technologies.</p>
                    <div class="card-tags">
                        <span class="tag blue">Laravel</span>
                        <span class="tag blue">PHP</span>
                        <span class="tag green">MySQL</span>
                    </div>
                    <a href="{{ route('services') }}" class="btn btn-outline">
                        &gt; learn_more
                    </a>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="card-title">~/services/it-support.json</span>
                </div>
                <div class="card-body">
                    <div class="card-icon">&#128736;</div>
                    <h3 class="card-name">IT Support & Maintenance</h3>
                    <p class="card-description">24/7 IT support to keep your business running smoothly with fast response times.</p>
                    <div class="card-tags">
                        <span class="tag purple">Network</span>
                        <span class="tag amber">Security</span>
                        <span class="tag green">Cloud</span>
                    </div>
                    <a href="{{ route('services') }}" class="btn btn-outline">
                        &gt; learn_more
                    </a>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="card-title">~/services/ecommerce.json</span>
                </div>
                <div class="card-body">
                    <div class="card-icon">&#128722;</div>
                    <h3 class="card-name">E-commerce Solutions</h3>
                    <p class="card-description">Launch and grow your online store with complete e-commerce solutions.</p>
                    <div class="card-tags">
                        <span class="tag blue">Stripe</span>
                        <span class="tag green">Payment</span>
                        <span class="tag purple">Inventory</span>
                    </div>
                    <a href="{{ route('services') }}" class="btn btn-outline">
                        &gt; learn_more
                    </a>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="{{ route('services') }}" class="btn btn-primary">
                <span>$</span> view_all_services
            </a>
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
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-number">100+</div>
                        <p class="stat-label">// projects_completed</p>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">50+</div>
                        <p class="stat-label">// happy_clients</p>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">5+</div>
                        <p class="stat-label">// years_experience</p>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">99%</div>
                        <p class="stat-label">// satisfaction_rate</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-eyebrow">// why_us</span>
            <h2 class="section-title">Why Choose KONOK.IO</h2>
        </div>
        
        <div class="cards-grid">
            <div class="card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="card-title">// expertise</span>
                </div>
                <div class="card-body">
                    <div class="card-icon">&#9889;</div>
                    <h3 class="card-name">Expert Team</h3>
                    <p class="card-description">Skilled professionals with years of experience in web development and IT solutions.</p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="card-title">// reliability</span>
                </div>
                <div class="card-body">
                    <div class="card-icon">&#128274;</div>
                    <h3 class="card-name">Reliable Solutions</h3>
                    <p class="card-description">Secure, scalable, and maintainable code that stands the test of time.</p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="card-title">// support</span>
                </div>
                <div class="card-body">
                    <div class="card-icon">&#127919;</div>
                    <h3 class="card-name">24/7 Support</h3>
                    <p class="card-description">Round-the-clock support to ensure your business never stops.</p>
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
                <div class="cta-buttons">
                    <a href="{{ route('contact') }}" class="btn btn-white">
                        <span>$</span> get_in_touch
                    </a>
                    <a href="{{ route('portfolio') }}" class="btn btn-outline-white">
                        &gt; view_portfolio
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
