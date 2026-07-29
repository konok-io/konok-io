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
            <!-- Footer Header (Copyright) -->
            <div class="footer-header">
                <div class="terminal-dots">
                    <span class="terminal-dot red"></span>
                    <span class="terminal-dot yellow"></span>
                    <span class="terminal-dot green"></span>
                </div>
                <p class="footer-copyright">/* © {{ date('Y') }} KONOK.IO. All rights reserved. */</p>
                <span class="footer-creator">Created_by <span style="color: var(--terminal-accent);">KONOK</span></span>
                <span class="terminal-path">~/copyright.blade.php</span>
            </div>
            
            <!-- Footer Columns -->
            <div class="footer-columns">
                <div class="footer-column">
                    <div class="terminal-window footer-window-full">
                        <div class="terminal-titlebar">
                            <span class="terminal-path">~/konok.io/about.blade.php</span>
                        </div>
                        <div class="terminal-content">
                            <pre style="font-family: var(--font-mono); font-size: 0.75rem; line-height: 1.6; margin: 0;"><code><span style="color: var(--terminal-syntax-purple);">const</span> <span style="color: var(--terminal-accent);">konok</span> = {
  <span style="color: var(--terminal-syntax-amber);">name</span>: <span style="color: var(--terminal-syntax-green);">"KONOK.IO"</span>,
  <span style="color: var(--terminal-syntax-amber);">desc</span>: <span style="color: var(--terminal-syntax-green);">"Key Of Next Online Knowledge"</span>
};</code></pre>
                        </div>
                    </div>
                </div>
                
                <div class="footer-column">
                    <div class="terminal-window footer-window-full">
                        <div class="terminal-titlebar">
                            <div class="terminal-dots">
                                <span class="terminal-dot red"></span>
                                <span class="terminal-dot yellow"></span>
                                <span class="terminal-dot green"></span>
                            </div>
                            <span class="terminal-path">~/routes.blade.php</span>
                        </div>
                        <div class="terminal-content">
                            <ul class="footer-links">
                                <li><a href="/" class="footer-link">&gt; home()</a></li>
                                <li><a href="/about" class="footer-link">&gt; about()</a></li>
                                <li><a href="/services" class="footer-link">&gt; services()</a></li>
                                <li><a href="/portfolio" class="footer-link">&gt; portfolio()</a></li>
                                <li><a href="/contact" class="footer-link">&gt; contact()</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="footer-column">
                    <div class="terminal-window footer-window-full">
                        <div class="terminal-titlebar">
                            <div class="terminal-dots">
                                <span class="terminal-dot red"></span>
                                <span class="terminal-dot yellow"></span>
                                <span class="terminal-dot green"></span>
                            </div>
                            <span class="terminal-path">~/services.blade.php</span>
                        </div>
                        <div class="terminal-content">
                            <ul class="footer-links">
                                <li><a href="{{ route('services') }}" class="footer-link">&gt; Web Development</a></li>
                                <li><a href="{{ route('services') }}" class="footer-link">&gt; IT Support</a></li>
                                <li><a href="{{ route('services') }}" class="footer-link">&gt; Network Solutions</a></li>
                                <li><a href="{{ route('services') }}" class="footer-link">&gt; Cloud Services</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="footer-column">
                    <div class="terminal-window footer-window-full">
                        <div class="terminal-titlebar">
                            <div class="terminal-dots">
                                <span class="terminal-dot red"></span>
                                <span class="terminal-dot yellow"></span>
                                <span class="terminal-dot green"></span>
                            </div>
                            <span class="terminal-path">~/subscribe.blade.php</span>
                        </div>
                        <div class="terminal-content">
                            <p style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--terminal-text-secondary); margin-bottom: 12px;">
                                // Stay updated
                            </p>
                            <form class="newsletter-form">
                                <div class="input-group">
                                    <input type="email" placeholder="$ email" class="newsletter-input">
                                    <button type="submit" class="newsletter-btn">&gt;</button>
                                </div>
                            </form>
                            <div class="social-icons mt-3">
                                <a href="#" class="social-link" title="LinkedIn">IN</a>
                                <a href="#" class="social-link" title="Facebook">FB</a>
                                <a href="#" class="social-link" title="GitHub">GH</a>
                                <a href="#" class="social-link" title="Twitter">TW</a>
                            </div>
                        </div>
                    </div>
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
