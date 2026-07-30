@extends('layouts.app')

@section('title', 'Contact | KONOK.IO - Key Of Next Online Knowledge')

@section('content')
<!-- Page Header - Terminal Style -->
<section class="hero" style="padding: var(--space-2xl) 0;">
    <div class="container">
        <div class="terminal-window">
            <div class="terminal-titlebar">
                <div class="terminal-dots">
                    <span class="terminal-dot red"></span>
                    <span class="terminal-dot yellow"></span>
                    <span class="terminal-dot green"></span>
                </div>
                <span class="terminal-path">~/contact/index.blade.php</span>
                <span style="margin-left: auto; font-size: 0.7rem; opacity: 0.5;">KONOK.IO Terminal v1.0</span>
            </div>
            <div class="terminal-content">
                <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 12px;">
                    <span style="color: var(--terminal-syntax-purple);">➜</span>
                    <span style="color: var(--terminal-accent);">~/contact</span>
                    <span style="color: var(--terminal-text-muted);">git:(main)</span>
                </div>
                <p style="font-family: var(--font-mono); font-size: 0.9rem; color: var(--terminal-text-muted); margin-bottom: 8px;">
                    <span style="color: var(--terminal-syntax-green);">$</span> <span style="color: var(--terminal-syntax-amber);">cat</span> contact-info.txt
                </p>
                <p style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--terminal-text-secondary); margin-bottom: 16px;">
                    <span style="color: var(--terminal-syntax-purple);">//</span> Let's build something amazing together
                </p>
                <p style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--terminal-text-secondary);">
                    <span style="color: var(--terminal-syntax-green);">$</span> <span style="color: var(--terminal-accent);">./init-contact.sh</span>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Content -->
<section class="section section-light">
    <div class="container">
        <div class="grid grid-2" style="align-items: start; gap: 40px;">
            
            <!-- Contact Form - Terminal Window -->
            <div class="terminal-window">
                <div class="terminal-titlebar">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="terminal-path">~/contact/send-message.sh</span>
                </div>
                <div class="terminal-content" style="padding: 32px;">
                    <p style="font-family: var(--font-mono); font-size: 0.85rem; margin-bottom: 24px;">
                        <span style="color: var(--terminal-syntax-purple);">//</span> Fill out the form below to send me a message
                    </p>
                    
                    <form action="#" method="POST" id="contactForm">
                        @csrf
                        
                        <div class="form-group" style="margin-bottom: 20px;">
                            <label for="name" style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px;">
                                <span style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--terminal-accent);">$</span>
                                <span style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--terminal-text-secondary);">name:</span>
                            </label>
                            <input type="text" id="name" name="name" class="form-input" 
                                   placeholder="John Doe" required
                                   style="font-family: var(--font-mono);">
                        </div>
                        
                        <div class="form-group" style="margin-bottom: 20px;">
                            <label for="email" style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px;">
                                <span style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--terminal-accent);">$</span>
                                <span style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--terminal-text-secondary);">email:</span>
                            </label>
                            <input type="email" id="email" name="email" class="form-input" 
                                   placeholder="john@example.com" required
                                   style="font-family: var(--font-mono);">
                        </div>
                        
                        <div class="form-group" style="margin-bottom: 20px;">
                            <label for="subject" style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px;">
                                <span style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--terminal-accent);">$</span>
                                <span style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--terminal-text-secondary);">subject:</span>
                            </label>
                            <input type="text" id="subject" name="subject" class="form-input" 
                                   placeholder="Project Inquiry"
                                   style="font-family: var(--font-mono);">
                        </div>
                        
                        <div class="form-group" style="margin-bottom: 24px;">
                            <label for="message" style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px;">
                                <span style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--terminal-accent);">$</span>
                                <span style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--terminal-text-secondary);">message:</span>
                            </label>
                            <textarea id="message" name="message" class="form-textarea" 
                                      placeholder="Tell me about your project..." rows="5" required
                                      style="font-family: var(--font-mono);"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary w-100" style="justify-content: center;">
                            <span style="color: #fff;">▶</span> <span style="color: #fff; margin-left: 4px;">send_message()</span>
                        </button>
                    </form>
                    
                    <!-- Success Message -->
                    <div id="successMessage" class="alert alert-success mt-3" style="display: none; border-left: 3px solid var(--terminal-syntax-green);">
                        <p style="font-family: var(--font-mono); font-size: 0.85rem; margin-bottom: 8px;">
                            <span style="color: var(--terminal-syntax-green);">✓</span> Message sent successfully!
                        </p>
                        <p style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--terminal-text-muted); margin-bottom: 0;">
                            I'll get back to you within 24 hours.
                        </p>
                    </div>
                    
                    <!-- Quick Info -->
                    <div style="margin-top: 24px; padding-top: 20px; border-top: 1px dashed var(--terminal-border);">
                        <p style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--terminal-text-muted); margin-bottom: 16px;">
                            <span style="color: var(--terminal-syntax-purple);">//</span> What happens next?
                        </p>
                        <div style="display: flex; flex-direction: column; gap: 12px;">
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <span style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--terminal-accent); background: rgba(255,255,255,0.05); padding: 4px 10px; border-radius: 4px;">01</span>
                                <span style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--terminal-text-secondary);">I'll review your message</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <span style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--terminal-accent); background: rgba(255,255,255,0.05); padding: 4px 10px; border-radius: 4px;">02</span>
                                <span style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--terminal-text-secondary);">Get back to you within 24h</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <span style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--terminal-accent); background: rgba(255,255,255,0.05); padding: 4px 10px; border-radius: 4px;">03</span>
                                <span style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--terminal-text-secondary);">Discuss your project details</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contact Info Sidebar -->
            <div>
                <!-- Direct Contact - Terminal Window -->
                <div class="terminal-window" style="margin-bottom: 24px;">
                    <div class="terminal-titlebar">
                        <div class="terminal-dots">
                            <span class="terminal-dot red"></span>
                            <span class="terminal-dot yellow"></span>
                            <span class="terminal-dot green"></span>
                        </div>
                        <span class="terminal-path">~/contact/config.json</span>
                    </div>
                    <div class="terminal-content" style="padding: 24px;">
                        <p style="font-family: var(--font-mono); font-size: 0.85rem; margin-bottom: 20px;">
                            <span style="color: var(--terminal-syntax-purple);">//</span> <span style="color: var(--terminal-text-muted);">contact_configuration</span>
                        </p>
                        
                        <!-- Email -->
                        <div style="display: flex; align-items: flex-start; gap: 16px; margin-bottom: 20px;">
                            <div style="color: var(--terminal-accent); min-width: 24px;">
                                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                            </div>
                            <div>
                                <p style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--terminal-text-muted); margin-bottom: 4px;">
                                    <span style="color: var(--terminal-syntax-amber);">"email"</span>
                                </p>
                                <a href="mailto:konok.io.bd@gmail.com" style="font-family: var(--font-mono); font-size: 0.9rem; color: var(--terminal-accent); text-decoration: none;">
                                    konok.io.bd@gmail.com
                                </a>
                            </div>
                        </div>
                        
                        <!-- Location -->
                        <div style="display: flex; align-items: flex-start; gap: 16px; margin-bottom: 20px;">
                            <div style="color: var(--terminal-accent); min-width: 24px;">
                                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <div>
                                <p style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--terminal-text-muted); margin-bottom: 4px;">
                                    <span style="color: var(--terminal-syntax-amber);">"location"</span>
                                </p>
                                <p style="font-family: var(--font-mono); font-size: 0.9rem; color: var(--terminal-text-secondary); margin-bottom: 0;">
                                    Saudi Arabia
                                </p>
                            </div>
                        </div>
                        
                        <!-- Availability -->
                        <div style="display: flex; align-items: flex-start; gap: 16px;">
                            <div style="color: var(--terminal-accent); min-width: 24px;">
                                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                            </div>
                            <div>
                                <p style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--terminal-text-muted); margin-bottom: 4px;">
                                    <span style="color: var(--terminal-syntax-amber);">"availability"</span>
                                </p>
                                <p style="font-family: var(--font-mono); font-size: 0.9rem; color: var(--terminal-syntax-green); margin-bottom: 0;">
                                    Mon - Fri: 9:00 AM - 6:00 PM (AST)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Social Links - Terminal Window -->
                <div class="terminal-window" style="margin-bottom: 24px;">
                    <div class="terminal-titlebar">
                        <div class="terminal-dots">
                            <span class="terminal-dot red"></span>
                            <span class="terminal-dot yellow"></span>
                            <span class="terminal-dot green"></span>
                        </div>
                        <span class="terminal-path">~/contact/socials.sh</span>
                    </div>
                    <div class="terminal-content" style="padding: 24px;">
                        <p style="font-family: var(--font-mono); font-size: 0.85rem; margin-bottom: 20px;">
                            <span style="color: var(--terminal-syntax-purple);">//</span> <span style="color: var(--terminal-text-muted);">connect_with_me</span>
                        </p>
                        
                        <div style="display: flex; flex-direction: column; gap: 12px;">
                            <a href="https://linkedin.com/in/mrh-it" target="_blank" class="btn btn-outline" style="justify-content: flex-start; gap: 12px;">
                                <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                                <span style="font-family: var(--font-mono); font-size: 0.9rem;">linkedin.com/in/mrh-it</span>
                            </a>
                            <a href="https://github.com/konok-io" target="_blank" class="btn btn-outline" style="justify-content: flex-start; gap: 12px;">
                                <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
                                </svg>
                                <span style="font-family: var(--font-mono); font-size: 0.9rem;">github.com/konok-io</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Response Time - Terminal Window -->
                <div class="terminal-window">
                    <div class="terminal-titlebar">
                        <div class="terminal-dots">
                            <span class="terminal-dot red"></span>
                            <span class="terminal-dot yellow"></span>
                            <span class="terminal-dot green"></span>
                        </div>
                        <span class="terminal-path">~/contact/status.sh</span>
                    </div>
                    <div class="terminal-content" style="padding: 24px;">
                        <p style="font-family: var(--font-mono); font-size: 0.85rem; margin-bottom: 16px;">
                            <span style="color: var(--terminal-syntax-purple);">//</span> <span style="color: var(--terminal-text-muted);">response_time</span>
                        </p>
                        
                        <div style="background: rgba(0,0,0,0.2); border-radius: 8px; padding: 16px; font-family: var(--font-mono);">
                            <p style="font-size: 0.85rem; margin-bottom: 12px;">
                                <span style="color: var(--terminal-syntax-green);">$</span> <span style="color: var(--terminal-text-muted);">grep</span> <span style="color: var(--terminal-accent);">"response_time"</span> config.txt
                            </p>
                            <p style="font-size: 0.85rem; margin-bottom: 16px;">
                                <span style="color: var(--terminal-syntax-amber);">→</span> <span style="color: var(--terminal-text-secondary);">Within</span> <span style="color: var(--terminal-accent);">24 hours</span> <span style="color: var(--terminal-text-muted);">for general inquiries</span>
                            </p>
                            <p style="font-size: 0.85rem; margin-bottom: 12px;">
                                <span style="color: var(--terminal-syntax-green);">$</span> <span style="color: var(--terminal-text-muted);">grep</span> <span style="color: var(--terminal-accent);">"project_priority"</span> config.txt
                            </p>
                            <p style="font-size: 0.85rem; margin-bottom: 0;">
                                <span style="color: var(--terminal-syntax-amber);">→</span> <span style="color: var(--terminal-syntax-purple);">High priority</span> <span style="color: var(--terminal-text-muted);">for new project inquiries</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer Command -->
        <div style="text-align: center; margin-top: 48px; padding-top: 24px; border-top: 1px dashed var(--terminal-border);">
            <p style="font-family: var(--font-mono); font-size: 0.9rem; color: var(--terminal-text-muted);">
                <span style="color: var(--terminal-syntax-green);">$</span> <span style="color: var(--terminal-accent);">echo</span> <span style="color: var(--terminal-syntax-green);">"Thanks for visiting!"</span>
            </p>
            <p style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--terminal-text-muted); margin-top: 8px;">
                <span style="color: var(--terminal-syntax-purple);">//</span> Looking forward to hearing from you ✨
            </p>
        </div>
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
        
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<span style="color: #fff;">◌</span> <span style="color: #fff; margin-left: 4px;">sending...</span>';
        submitBtn.disabled = true;
        
        setTimeout(function() {
            successMessage.style.display = 'block';
            form.reset();
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
            
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 5000);
        }, 1500);
    });
});
</script>
@endpush
