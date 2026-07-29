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
            <div class="footer-content">
                <div>
                    <span class="terminal-path" style="margin-bottom: 8px; display: inline-block;">&lt;KONOK.IO/&gt;</span>
                    <p class="footer-copyright">© {{ date('Y') }} KONOK.IO. All rights reserved.</p>
                    <p style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--terminal-text-muted); margin-top: 4px;">
                        Professional Web Development & IT Solutions
                    </p>
                </div>
                
                <div>
                    <h4 class="footer-title">// Navigation</h4>
                    <ul class="footer-links">
                        <li><a href="/" class="footer-link">home()</a></li>
                        <li><a href="/about" class="footer-link">about()</a></li>
                        <li><a href="/services" class="footer-link">services()</a></li>
                        <li><a href="/portfolio" class="footer-link">portfolio()</a></li>
                        <li><a href="/contact" class="footer-link">contact()</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="footer-title">// Contact</h4>
                    <ul class="footer-links">
                        <li><span class="footer-link">hello@konok.io</span></li>
                        <li><span class="footer-link">+880 1700 000000</span></li>
                        <li><span class="footer-link">Dhaka, Bangladesh</span></li>
                    </ul>
                </div>
                
                <div class="d-flex gap-2">
                    <a href="#" class="btn-icon" title="LinkedIn">IN</a>
                    <a href="#" class="btn-icon" title="Facebook">FB</a>
                    <a href="#" class="btn-icon" title="GitHub">GH</a>
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
