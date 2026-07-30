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
                <span class="terminal-path">~/services/index.blade.php</span>
            </div>
            <div class="terminal-content">
                <span class="section-eyebrow">// services</span>
                <h1 class="hero-title" style="font-size: 2rem;">
                    <span style="color: var(--terminal-syntax-purple);">const</span> <span style="color: var(--terminal-accent);">services</span> = [
                </h1>
                <p class="hero-subtitle" style="font-size: 1rem;">
                    <span style="color: var(--terminal-syntax-green);">"Comprehensive solutions for your digital needs"</span>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Main Services -->
<section class="section section-light">
    <div class="container">
        @if($services->isNotEmpty())
        <div class="grid grid-3">
            @foreach($services as $service)
            <div class="card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="terminal-path">~/services/{{ $service->slug }}.blade.php</span>
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
                            <h3 class="feature-title" style="margin-bottom: 0;">{{ $service->title }}</h3>
                            <span style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--terminal-text-muted);">// {{ $service->slug }}</span>
                        </div>
                    </div>
                    
                    <p class="feature-description">
                        {{ $service->description }}
                    </p>
                    
                    @if($service->features)
                    <div class="mt-3">
                        <span style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--terminal-text-muted); display: block; margin-bottom: var(--space-sm);">
                            <span style="color: var(--terminal-syntax-amber);">// features</span>
                        </span>
                        <ul style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--terminal-text-secondary); padding-left: var(--space-lg); margin: 0;">
                            @foreach($service->features as $feature)
                            <li style="margin-bottom: var(--space-xs);">{{ $feature }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    
                    @if($service->technologies)
                    <div class="d-flex gap-1 mt-3" style="flex-wrap: wrap;">
                        @foreach($service->technologies as $tech)
                            <span class="tag">{{ $tech }}</span>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="terminal-window" style="max-width: 600px; margin: 0 auto; text-align: center; padding: 48px;">
            <p style="font-family: var(--font-mono); color: var(--terminal-text-muted);">
                <span style="color: var(--terminal-syntax-green);">$</span> ls -la ./services/
            </p>
            <p style="font-family: var(--font-mono); color: var(--terminal-text-muted); margin-top: 16px;">
                No services found. Add services from admin dashboard.
            </p>
        </div>
        @endif
        
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
        <div class="terminal-window">
            <div class="terminal-titlebar">
                <div class="terminal-dots">
                    <span class="terminal-dot red"></span>
                    <span class="terminal-dot yellow"></span>
                    <span class="terminal-dot green"></span>
                </div>
                <span class="terminal-path">~/contact/index.blade.php</span>
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
