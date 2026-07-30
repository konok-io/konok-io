@extends('layouts.app')

@section('title', 'Projects | KONOK.IO - Key Of Next Online Knowledge')

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
                <span class="terminal-path">~/projects/index.blade.php</span>
            </div>
            <div class="terminal-content">
                <span class="section-eyebrow">// projects</span>
                <h1 class="hero-title" style="font-size: 2rem;">
                    <span style="color: var(--terminal-syntax-purple);">const</span> <span style="color: var(--terminal-accent);">projects</span> = [
                </h1>
                <p class="hero-subtitle" style="font-size: 1rem;">
                    <span style="color: var(--terminal-syntax-green);">"Showcasing my recent work and projects"</span>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Grid -->
<section class="section section-light">
    <div class="container">
        @php
            // Flatten grouped collections for display
            $flatPortfolios = $portfolios instanceof \Illuminate\Support\Collection 
                ? ($portfolios->first() instanceof \Illuminate\Support\Collection 
                    ? $portfolios->flatten() 
                    : $portfolios)
                : collect();
        @endphp
        
        @if($flatPortfolios->isNotEmpty())
        <div class="grid grid-3">
            @foreach($flatPortfolios as $portfolio)
            <div class="card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="terminal-path">{{ $portfolio->slug }}/</span>
                </div>
                <div class="card-body">
                    <div style="background: var(--terminal-bg-tertiary); height: 150px; border-radius: var(--radius-md); margin-bottom: var(--space-md); display: flex; align-items: center; justify-content: center;">
                        <svg width="48" height="48" fill="none" stroke="var(--terminal-accent)" stroke-width="1.5" viewBox="0 0 24 24">
                            <polyline points="16 18 22 12 16 6"></polyline>
                            <polyline points="8 6 2 12 8 18"></polyline>
                        </svg>
                    </div>
                    <span class="badge mb-2">// {{ $portfolio->category }}</span>
                    <h3 class="feature-title">{{ $portfolio->title }}</h3>
                    <p class="feature-description">
                        {{ $portfolio->description }}
                    </p>
                    @if($portfolio->technologies)
                    <div class="d-flex gap-1 mt-3" style="flex-wrap: wrap;">
                        @foreach($portfolio->technologies as $tech)
                            <span class="tag">{{ $tech }}</span>
                        @endforeach
                    </div>
                    @endif
                </div>
                <div class="card-footer">
                    <a href="{{ route('projects.show', $portfolio->slug) }}" class="btn btn-card btn-sm">
                        > view_project
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="terminal-window" style="max-width: 600px; margin: 0 auto; text-align: center; padding: 48px;">
            <p style="font-family: var(--font-mono); color: var(--terminal-text-muted);">
                <span style="color: var(--terminal-syntax-green);">$</span> ls -la ./projects/
            </p>
            <p style="font-family: var(--font-mono); color: var(--terminal-text-muted); margin-top: 16px;">
                No projects found. Add projects from admin dashboard.
            </p>
        </div>
        @endif
        
        <h3 style="font-family: var(--font-mono); font-size: 1rem; margin-top: var(--space-2xl); text-align: center;">
            <span style="color: var(--terminal-syntax-purple);">]; // end of projects</span>
        </h3>
    </div>
</section>

<!-- Tech Stack Section -->
<section class="section section-dark">
    <div class="container">
        <div class="section-header">
            <span class="section-eyebrow">// tech-stack</span>
            <h2 class="section-title">Technologies I Work With</h2>
        </div>
        
        <div class="terminal-window">
            <div class="terminal-titlebar">
                <div class="terminal-dots">
                    <span class="terminal-dot red"></span>
                    <span class="terminal-dot yellow"></span>
                    <span class="terminal-dot green"></span>
                </div>
                <span class="terminal-path">~/technologies/index.blade.php</span>
            </div>
            <div class="terminal-content">
                <div class="grid grid-4">
                    <div class="text-center">
                        <div style="font-family: var(--font-mono); font-size: 2rem; color: var(--terminal-syntax-red); margin-bottom: var(--space-sm);">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                            </svg>
                        </div>
                        <p style="font-family: var(--font-mono); font-size: 0.85rem; margin-bottom: 0;">Backend</p>
                        <p style="font-size: 0.75rem; color: var(--terminal-text-muted);">Laravel, PHP</p>
                    </div>
                    <div class="text-center">
                        <div style="font-family: var(--font-mono); font-size: 2rem; color: var(--terminal-syntax-blue); margin-bottom: var(--space-sm);">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M4 5h16v14H4V5zm2 2v10h12V7H6z"/>
                            </svg>
                        </div>
                        <p style="font-family: var(--font-mono); font-size: 0.85rem; margin-bottom: 0;">Database</p>
                        <p style="font-size: 0.75rem; color: var(--terminal-text-muted);">MySQL, PostgreSQL</p>
                    </div>
                    <div class="text-center">
                        <div style="font-family: var(--font-mono); font-size: 2rem; color: var(--terminal-syntax-amber); margin-bottom: var(--space-sm);">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
                                <polygon points="12 2 2 22 22 22"/>
                            </svg>
                        </div>
                        <p style="font-family: var(--font-mono); font-size: 0.85rem; margin-bottom: 0;">Frontend</p>
                        <p style="font-size: 0.75rem; color: var(--terminal-text-muted);">HTML, CSS, JS</p>
                    </div>
                    <div class="text-center">
                        <div style="font-family: var(--font-mono); font-size: 2rem; color: var(--terminal-syntax-purple); margin-bottom: var(--space-sm);">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
                                <circle cx="12" cy="12" r="10"/>
                            </svg>
                        </div>
                        <p style="font-family: var(--font-mono); font-size: 0.85rem; margin-bottom: 0;">DevOps</p>
                        <p style="font-size: 0.75rem; color: var(--terminal-text-muted);">Git, Docker</p>
                    </div>
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
                <span class="section-eyebrow">// collaborate</span>
                <h2 class="cta-title">Have a Project in Mind?</h2>
                <p class="cta-subtitle">
                    I'm always open to new opportunities and interesting projects.
                </p>
                <div class="cta-actions">
                    <a href="/contact" class="btn btn-primary">
                        <span style="color: #fff;">$</span> start_project
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
