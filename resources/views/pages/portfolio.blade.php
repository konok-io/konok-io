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
        <div class="grid grid-3">
            <!-- Project 1 -->
            <div class="card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="terminal-path">ecommerce-app/</span>
                </div>
                <div class="card-body">
                    <div style="background: var(--terminal-bg-tertiary); height: 150px; border-radius: var(--radius-md); margin-bottom: var(--space-md); display: flex; align-items: center; justify-content: center;">
                        <svg width="48" height="48" fill="none" stroke="var(--terminal-accent)" stroke-width="1.5" viewBox="0 0 24 24">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                    </div>
                    <span class="badge badge-primary mb-2">// laravel</span>
                    <h3 class="feature-title">E-Commerce Platform</h3>
                    <p class="feature-description">
                        Full-featured online store with product management, cart functionality, 
                        checkout process, and order tracking.
                    </p>
                    <div class="d-flex gap-1 mt-3" style="flex-wrap: wrap;">
                        <span class="tag">Laravel</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">Stripe</span>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-command btn-sm">
                        > view_project
                    </a>
                </div>
            </div>
            
            <!-- Project 2 -->
            <div class="card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="terminal-path">inventory-system/</span>
                </div>
                <div class="card-body">
                    <div style="background: var(--terminal-bg-tertiary); height: 150px; border-radius: var(--radius-md); margin-bottom: var(--space-md); display: flex; align-items: center; justify-content: center;">
                        <svg width="48" height="48" fill="none" stroke="var(--terminal-accent)" stroke-width="1.5" viewBox="0 0 24 24">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>
                    <span class="badge badge-success mb-2">// inventory</span>
                    <h3 class="feature-title">Inventory Management System</h3>
                    <p class="feature-description">
                        Real-time inventory tracking with barcode scanning, stock alerts, 
                        reporting dashboard, and multi-user support.
                    </p>
                    <div class="d-flex gap-1 mt-3" style="flex-wrap: wrap;">
                        <span class="tag">Laravel</span>
                        <span class="tag">Vue.js</span>
                        <span class="tag">PostgreSQL</span>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-command btn-sm">
                        > view_project
                    </a>
                </div>
            </div>
            
            <!-- Project 3 -->
            <div class="card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="terminal-path">crm-dashboard/</span>
                </div>
                <div class="card-body">
                    <div style="background: var(--terminal-bg-tertiary); height: 150px; border-radius: var(--radius-md); margin-bottom: var(--space-md); display: flex; align-items: center; justify-content: center;">
                        <svg width="48" height="48" fill="none" stroke="var(--terminal-accent)" stroke-width="1.5" viewBox="0 0 24 24">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <span class="badge badge-warning mb-2">// crm</span>
                    <h3 class="feature-title">Customer Relationship Manager</h3>
                    <p class="feature-description">
                        CRM system for managing leads, contacts, deals, and customer 
                        communications with analytics and automation.
                    </p>
                    <div class="d-flex gap-1 mt-3" style="flex-wrap: wrap;">
                        <span class="tag">Laravel</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">jQuery</span>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-command btn-sm">
                        > view_project
                    </a>
                </div>
            </div>
            
            <!-- Project 4 -->
            <div class="card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="terminal-path">task-tracker/</span>
                </div>
                <div class="card-body">
                    <div style="background: var(--terminal-bg-tertiary); height: 150px; border-radius: var(--radius-md); margin-bottom: var(--space-md); display: flex; align-items: center; justify-content: center;">
                        <svg width="48" height="48" fill="none" stroke="var(--terminal-accent)" stroke-width="1.5" viewBox="0 0 24 24">
                            <path d="M9 11l3 3L22 4"></path>
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                        </svg>
                    </div>
                    <span class="badge badge-purple mb-2">// productivity</span>
                    <h3 class="feature-title">Task Management System</h3>
                    <p class="feature-description">
                        Kanban-style task board with drag-and-drop, due dates, priorities, 
                        comments, file attachments, and team collaboration.
                    </p>
                    <div class="d-flex gap-1 mt-3" style="flex-wrap: wrap;">
                        <span class="tag">Laravel</span>
                        <span class="tag">React</span>
                        <span class="tag">Docker</span>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-command btn-sm">
                        > view_project
                    </a>
                </div>
            </div>
            
            <!-- Project 5 -->
            <div class="card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="terminal-path">blog-platform/</span>
                </div>
                <div class="card-body">
                    <div style="background: var(--terminal-bg-tertiary); height: 150px; border-radius: var(--radius-md); margin-bottom: var(--space-md); display: flex; align-items: center; justify-content: center;">
                        <svg width="48" height="48" fill="none" stroke="var(--terminal-accent)" stroke-width="1.5" viewBox="0 0 24 24">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                        </svg>
                    </div>
                    <span class="badge mb-2">// content</span>
                    <h3 class="feature-title">Blog Platform</h3>
                    <p class="feature-description">
                        SEO-optimized blog with rich text editor, categories, tags, 
                        comments, newsletter subscription, and social sharing.
                    </p>
                    <div class="d-flex gap-1 mt-3" style="flex-wrap: wrap;">
                        <span class="tag">Laravel</span>
                        <span class="tag">Tailwind</span>
                        <span class="tag">Redis</span>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-command btn-sm">
                        > view_project
                    </a>
                </div>
            </div>
            
            <!-- Project 6 -->
            <div class="card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="terminal-path">api-gateway/</span>
                </div>
                <div class="card-body">
                    <div style="background: var(--terminal-bg-tertiary); height: 150px; border-radius: var(--radius-md); margin-bottom: var(--space-md); display: flex; align-items: center; justify-content: center;">
                        <svg width="48" height="48" fill="none" stroke="var(--terminal-accent)" stroke-width="1.5" viewBox="0 0 24 24">
                            <polyline points="16 18 22 12 16 6"></polyline>
                            <polyline points="8 6 2 12 8 18"></polyline>
                        </svg>
                    </div>
                    <span class="badge badge-primary mb-2">// api</span>
                    <h3 class="feature-title">RESTful API Gateway</h3>
                    <p class="feature-description">
                        Scalable API gateway with authentication, rate limiting, 
                        caching, documentation, and multiple service integration.
                    </p>
                    <div class="d-flex gap-1 mt-3" style="flex-wrap: wrap;">
                        <span class="tag">Laravel</span>
                        <span class="tag">API</span>
                        <span class="tag">OAuth2</span>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-command btn-sm">
                        > view_project
                    </a>
                </div>
            </div>
        </div>
        
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
        
        <div class="terminal-window" style="max-width: 800px; margin: 0 auto;">
            <div class="terminal-titlebar">
                <div class="terminal-dots">
                    <span class="terminal-dot red"></span>
                    <span class="terminal-dot yellow"></span>
                    <span class="terminal-dot green"></span>
                </div>
                <span class="terminal-path">~/technologies.blade.php</span>
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
        <div class="terminal-window" style="max-width: 600px; margin: 0 auto;">
            <div class="terminal-titlebar">
                <div class="terminal-dots">
                    <span class="terminal-dot red"></span>
                    <span class="terminal-dot yellow"></span>
                    <span class="terminal-dot green"></span>
                </div>
                <span class="terminal-path">~/hire-developer.blade.php</span>
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
