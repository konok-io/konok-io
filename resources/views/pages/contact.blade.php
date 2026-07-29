@extends('layouts.app')

@section('title', 'Contact | Muhammad Rashed Hossain')

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
                <span class="terminal-path">~/contact.js</span>
            </div>
            <div class="terminal-content">
                <span class="section-eyebrow">// contact_me</span>
                <h1 class="hero-title" style="font-size: 2rem;">
                    <span style="color: var(--terminal-syntax-purple);">function</span> <span style="color: var(--terminal-accent);">getInTouch</span>() {
                </h1>
                <p class="hero-subtitle" style="font-size: 1rem;">
                    <span style="color: var(--terminal-syntax-green);">"Let's build something amazing together"</span>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Content -->
<section class="section section-light">
    <div class="container">
        <div class="grid grid-2" style="align-items: start;">
            <!-- Contact Form -->
            <div class="card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="terminal-path">send-message.php</span>
                </div>
                <div class="card-body">
                    <form action="#" method="POST" id="contactForm">
                        @csrf
                        
                        <div class="form-group">
                            <label for="name" class="form-label">name</label>
                            <input type="text" id="name" name="name" class="form-input" 
                                   placeholder="John Doe" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="form-label">email</label>
                            <input type="email" id="email" name="email" class="form-input" 
                                   placeholder="john@example.com" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject" class="form-label">subject</label>
                            <input type="text" id="subject" name="subject" class="form-input" 
                                   placeholder="Project Inquiry">
                        </div>
                        
                        <div class="form-group">
                            <label for="message" class="form-label">message</label>
                            <textarea id="message" name="message" class="form-textarea" 
                                      placeholder="Tell me about your project..." rows="5" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary w-100">
                            <span style="color: #fff;">$</span> send_message
                        </button>
                    </form>
                    
                    <!-- Success Message (Hidden by default) -->
                    <div id="successMessage" class="alert alert-success mt-3" style="display: none;">
                        Message sent successfully! I'll get back to you soon.
                    </div>
                </div>
            </div>
            
            <!-- Contact Info -->
            <div>
                <!-- Direct Contact -->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="terminal-dots">
                            <span class="terminal-dot red"></span>
                            <span class="terminal-dot yellow"></span>
                            <span class="terminal-dot green"></span>
                        </div>
                        <span class="terminal-path">direct-contact.json</span>
                    </div>
                    <div class="card-body">
                        <h3 style="font-family: var(--font-mono); font-size: 1rem; margin-bottom: var(--space-lg);">
                            <span style="color: var(--terminal-syntax-amber);">// contact_info</span>
                        </h3>
                        
                        <div class="d-flex gap-3 mb-3" style="align-items: flex-start;">
                            <div style="color: var(--terminal-accent);">
                                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                            </div>
                            <div>
                                <p style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--terminal-text-muted); margin-bottom: var(--space-xs);">email</p>
                                <a href="mailto:konok.io.bd@gmail.com" class="text-mono" style="font-size: 0.9rem;">
                                    konok.io.bd@gmail.com
                                </a>
                            </div>
                        </div>
                        
                        <div class="d-flex gap-3 mb-3" style="align-items: flex-start;">
                            <div style="color: var(--terminal-accent);">
                                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <div>
                                <p style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--terminal-text-muted); margin-bottom: var(--space-xs);">location</p>
                                <p style="font-size: 0.9rem; margin-bottom: 0;">Saudi Arabia</p>
                            </div>
                        </div>
                        
                        <div class="d-flex gap-3" style="align-items: flex-start;">
                            <div style="color: var(--terminal-accent);">
                                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                            </div>
                            <div>
                                <p style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--terminal-text-muted); margin-bottom: var(--space-xs);">availability</p>
                                <p style="font-size: 0.9rem; margin-bottom: 0;">Mon - Fri: 9:00 AM - 6:00 PM (AST)</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Social Links -->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="terminal-dots">
                            <span class="terminal-dot red"></span>
                            <span class="terminal-dot yellow"></span>
                            <span class="terminal-dot green"></span>
                        </div>
                        <span class="terminal-path">social-links.sh</span>
                    </div>
                    <div class="card-body">
                        <h3 style="font-family: var(--font-mono); font-size: 1rem; margin-bottom: var(--space-lg);">
                            <span style="color: var(--terminal-syntax-amber);">// connect_with_me</span>
                        </h3>
                        
                        <div class="d-flex gap-2" style="flex-wrap: wrap;">
                            <a href="https://linkedin.com/in/mrh-it" target="_blank" class="btn btn-outline" style="flex: 1; justify-content: center; min-width: 140px;">
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                                LinkedIn
                            </a>
                            <a href="https://github.com/konok-io" target="_blank" class="btn btn-outline" style="flex: 1; justify-content: center; min-width: 140px;">
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
                                </svg>
                                GitHub
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Response -->
                <div class="card">
                    <div class="card-header">
                        <div class="terminal-dots">
                            <span class="terminal-dot red"></span>
                            <span class="terminal-dot yellow"></span>
                            <span class="terminal-dot green"></span>
                        </div>
                        <span class="terminal-path">response-time.md</span>
                    </div>
                    <div class="card-body">
                        <h3 style="font-family: var(--font-mono); font-size: 1rem; margin-bottom: var(--space-md);">
                            <span style="color: var(--terminal-syntax-amber);">// typical_response_time</span>
                        </h3>
                        
                        <div class="terminal-window" style="box-shadow: none; border: 1px dashed var(--terminal-border);">
                            <div class="terminal-content" style="padding: var(--space-md);">
                                <p style="font-family: var(--font-mono); font-size: 0.85rem; margin-bottom: var(--space-sm);">
                                    <span style="color: var(--terminal-syntax-green);">$</span> echo $response_time
                                </p>
                                <p style="font-family: var(--font-mono); font-size: 0.85rem; margin-bottom: var(--space-md);">
                                    <span style="color: var(--terminal-accent);">Within 24 hours</span> for emails
                                </p>
                                <p style="font-family: var(--font-mono); font-size: 0.85rem; margin-bottom: var(--space-sm);">
                                    <span style="color: var(--terminal-syntax-green);">$</span> echo $urgency_priority
                                </p>
                                <p style="font-family: var(--font-mono); font-size: 0.85rem; margin-bottom: 0;">
                                    <span style="color: var(--terminal-syntax-purple);">High</span> priority for new projects
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <h3 style="font-family: var(--font-mono); font-size: 1rem; margin-top: var(--space-2xl); text-align: center;">
            <span style="color: var(--terminal-syntax-purple);">} // end getInTouch</span>
        </h3>
    </div>
</section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const successMessage = document.getElementById('successMessage');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Simulate form submission
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<span style="color: #fff;">$</span> sending...';
        submitBtn.disabled = true;
        
        // Simulate API call
        setTimeout(function() {
            successMessage.style.display = 'block';
            form.reset();
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
            
            // Hide success message after 5 seconds
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 5000);
        }, 1500);
    });
});
</script>
@endpush
