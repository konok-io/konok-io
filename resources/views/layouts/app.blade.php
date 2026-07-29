<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="KONOK.IO - Professional Web Development and IT Solutions. Building powerful digital experiences.">
    <title>@yield('title', 'KONOK.IO | Professional Web Development & IT Solutions')</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Terminal Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/terminal-theme.css') }}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>💻</text></svg>">
    
    @stack('styles')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="navbar-container">
            <!-- Logo with macOS dots and path badge -->
            <a href="/" class="navbar-brand">
                <div class="terminal-window" style="box-shadow: none; border: none;">
                    <div class="terminal-titlebar" style="padding: 6px 8px; background: transparent; border: none;">
                        <div class="terminal-dots">
                            <span class="terminal-dot red"></span>
                            <span class="terminal-dot yellow"></span>
                            <span class="terminal-dot green"></span>
                        </div>
                    </div>
                </div>
                <span class="terminal-path">&lt;KONOK.IO/&gt;</span>
            </a>
            
            <!-- Navigation Links -->
            <ul class="navbar-nav" id="navbarNav">
                <li class="nav-item">
                    <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                        <span class="nav-index">01.</span> home()
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/about" class="nav-link {{ request()->is('about') ? 'active' : '' }}">
                        <span class="nav-index">02.</span> about()
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/services" class="nav-link {{ request()->is('services') ? 'active' : '' }}">
                        <span class="nav-index">03.</span> services()
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/portfolio" class="nav-link {{ request()->is('portfolio') ? 'active' : '' }}">
                        <span class="nav-index">04.</span> portfolio()
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/contact" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">
                        <span class="nav-index">05.</span> contact()
                    </a>
                </li>
            </ul>
            
            <!-- CTA Button -->
            <a href="/contact" class="btn btn-primary">
                <span>$</span> get_quote
            </a>
            
            <!-- Mobile Toggler -->
            <button class="navbar-toggler" type="button" id="navbarToggler" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <!-- Footer Top -->
            <div class="footer-top">
                <div class="footer-brand">
                    <div class="terminal-window" style="max-width: 300px; margin-bottom: 16px;">
                        <div class="terminal-titlebar">
                            <div class="terminal-dots">
                                <span class="terminal-dot red"></span>
                                <span class="terminal-dot yellow"></span>
                                <span class="terminal-dot green"></span>
                            </div>
                            <span class="terminal-path">~/konok.io/about.js</span>
                        </div>
                        <div class="terminal-content" style="padding: 12px;">
                            <pre style="font-family: var(--font-mono); font-size: 0.75rem; line-height: 1.6; margin: 0; white-space: pre-wrap; word-break: break-all;"><code><span style="color: var(--terminal-syntax-purple);">const</span> <span style="color: var(--terminal-accent);">konok</span> = {
  <span style="color: var(--terminal-syntax-amber);">name</span>: <span style="color: var(--terminal-syntax-green);">"KONOK.IO"</span>,
  <span style="color: var(--terminal-syntax-amber);">desc</span>: <span style="color: var(--terminal-syntax-green);">"Key Of Next</span>
  <span style="color: var(--terminal-syntax-green);">           Online Knowledge"</span>
};</code></pre>
                        </div>
                    </div>
                </div>
                
                <div class="footer-links-group">
                    <div class="terminal-window">
                        <div class="terminal-titlebar">
                            <div class="terminal-dots">
                                <span class="terminal-dot red"></span>
                                <span class="terminal-dot yellow"></span>
                                <span class="terminal-dot green"></span>
                            </div>
                            <span class="terminal-path">~/routes.js</span>
                        </div>
                        <div class="terminal-content" style="padding: 12px;">
                            <ul class="footer-links" style="gap: 8px;">
                                <li><a href="/" class="footer-link">&gt; home()</a></li>
                                <li><a href="/about" class="footer-link">&gt; about()</a></li>
                                <li><a href="/services" class="footer-link">&gt; services()</a></li>
                                <li><a href="/portfolio" class="footer-link">&gt; portfolio()</a></li>
                                <li><a href="/contact" class="footer-link">&gt; contact()</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="footer-links-group">
                    <div class="terminal-window">
                        <div class="terminal-titlebar">
                            <div class="terminal-dots">
                                <span class="terminal-dot red"></span>
                                <span class="terminal-dot yellow"></span>
                                <span class="terminal-dot green"></span>
                            </div>
                            <span class="terminal-path">~/services.json</span>
                        </div>
                        <div class="terminal-content" style="padding: 12px;">
                            <ul class="footer-links" style="gap: 8px;">
                                <li><a href="{{ route('services') }}" class="footer-link">&gt; Web Development</a></li>
                                <li><a href="{{ route('services') }}" class="footer-link">&gt; IT Support</a></li>
                                <li><a href="{{ route('services') }}" class="footer-link">&gt; Network Solutions</a></li>
                                <li><a href="{{ route('services') }}" class="footer-link">&gt; Cloud Services</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="footer-links-group">
                    <div class="terminal-window">
                        <div class="terminal-titlebar">
                            <div class="terminal-dots">
                                <span class="terminal-dot red"></span>
                                <span class="terminal-dot yellow"></span>
                                <span class="terminal-dot green"></span>
                            </div>
                            <span class="terminal-path">~/subscribe.sh</span>
                        </div>
                        <div class="terminal-content" style="padding: 12px;">
                            <p style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--terminal-text-secondary); margin-bottom: 12px;">
                                // Stay updated with our newsletter
                            </p>
                            <form class="newsletter-form">
                                <div class="input-group">
                                    <input type="email" placeholder="$ email_address" class="newsletter-input">
                                    <button type="submit" class="newsletter-btn">&gt;</button>
                                </div>
                            </form>
                            <div class="social-icons mt-3">
                                <a href="#" class="social-link" title="LinkedIn">
                                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                </a>
                                <a href="#" class="social-link" title="Facebook">
                                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                </a>
                                <a href="#" class="social-link" title="GitHub">
                                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>
                                </a>
                                <a href="#" class="social-link" title="Twitter">
                                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="terminal-window footer-bottom-window">
                    <div class="terminal-titlebar">
                        <div class="terminal-dots">
                            <span class="terminal-dot red"></span>
                            <span class="terminal-dot yellow"></span>
                            <span class="terminal-dot green"></span>
                        </div>
                        <span class="terminal-path">~/copyright.js</span>
                    </div>
                </div>
                <div class="footer-bottom-content">
                    <p class="footer-copyright">/* © {{ date('Y') }} KONOK.IO. All rights reserved. */</p>
                    <p class="footer-creator">// Created_by <span style="color: var(--terminal-accent);">KONOK</span></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggler = document.getElementById('navbarToggler');
            const nav = document.getElementById('navbarNav');
            
            toggler.addEventListener('click', function() {
                nav.classList.toggle('active');
            });
            
            nav.querySelectorAll('.nav-link').forEach(function(link) {
                link.addEventListener('click', function() {
                    nav.classList.remove('active');
                });
            });
        });
    </script>
    
    @stack('scripts')
</body>
</html>
