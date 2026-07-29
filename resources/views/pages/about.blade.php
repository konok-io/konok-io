@extends('layouts.app')

@section('title', 'About | Muhammad Rashed Hossain')

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
                <span class="terminal-path">~/about.blade.php</span>
            </div>
            <div class="terminal-content">
                <span class="section-eyebrow">// about_me</span>
                <h1 class="hero-title" style="font-size: 2rem;">The Story Behind KONOK</h1>
                <p class="hero-subtitle" style="font-size: 1rem;">
                    <span style="color: var(--terminal-syntax-purple);">const</span> <span style="color: var(--terminal-accent);">mission</span> = 
                    <span style="color: var(--terminal-syntax-green);">"Key Of Next Online Knowledge"</span>;
                </p>
            </div>
        </div>
    </div>
</section>

<!-- About Content -->
<section class="section section-light">
    <div class="container">
        <div class="grid grid-2" style="align-items: start;">
            <!-- Bio Section -->
            <div class="card">
                <div class="card-header">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="terminal-path">bio.txt</span>
                </div>
                <div class="card-body">
                    <h2 style="font-family: var(--font-mono); font-size: 1.25rem; margin-bottom: var(--space-lg);">
                        <span style="color: var(--terminal-syntax-purple);">function</span> <span style="color: var(--terminal-accent);">aboutMe</span>() {
                    </h2>
                    
                    <p style="margin-bottom: var(--space-md);">
                        Hello! I'm <strong>Muhammad Rashed Hossain</strong>, an experienced 
                        <span class="badge badge-primary">IT Support Specialist</span>, 
                        <span class="badge">Computer Operator</span>, and 
                        <span class="badge badge-success">AI-Assisted Laravel Web Developer</span> 
                        currently based in <strong>Saudi Arabia</strong>.
                    </p>
                    
                    <p style="margin-bottom: var(--space-md);">
                        With a passion for technology and problem-solving, I've built a career 
                        bridging the gap between IT infrastructure and modern web development. 
                        My journey began in IT support, where I mastered the art of troubleshooting 
                        and maintaining complex systems.
                    </p>
                    
                    <p style="margin-bottom: var(--space-md);">
                        Today, as the founder of <strong>KONOK (Key Of Next Online Knowledge)</strong>, 
                        I leverage advanced AI tools to accelerate code development and optimize 
                        system workflows, delivering high-quality solutions to clients worldwide.
                    </p>
                    
                    <h3 style="font-family: var(--font-mono); font-size: 1rem; margin-top: var(--space-xl); margin-bottom: var(--space-md);">
                        <span style="color: var(--terminal-syntax-amber);">// Education & Certifications</span>
                    </h3>
                    
                    <ul style="font-family: var(--font-mono); font-size: 0.9rem; color: var(--terminal-text-secondary); padding-left: var(--space-lg);">
                        <li style="margin-bottom: var(--space-sm);">
                            <span style="color: var(--terminal-syntax-green);">✓</span> BSc in Computer Science / Engineering
                        </li>
                        <li style="margin-bottom: var(--space-sm);">
                            <span style="color: var(--terminal-syntax-green);">✓</span> CompTIA A+ Certified
                        </li>
                        <li style="margin-bottom: var(--space-sm);">
                            <span style="color: var(--terminal-syntax-green);">✓</span> Cisco CCNA Level Training
                        </li>
                        <li style="margin-bottom: var(--space-sm);">
                            <span style="color: var(--terminal-syntax-green);">✓</span> Laravel Development Certification
                        </li>
                    </ul>
                    
                    <h3 style="font-family: var(--font-mono); font-size: 1rem; margin-top: var(--space-xl); margin-bottom: var(--space-md);">
                        <span style="color: var(--terminal-syntax-amber);">// Languages</span>
                    </h3>
                    
                    <div class="d-flex gap-2" style="flex-wrap: wrap;">
                        <span class="badge badge-primary">Bengali (Native)</span>
                        <span class="badge">English (Professional)</span>
                        <span class="badge badge-success">Arabic (Conversational)</span>
                    </div>
                    
                    <h3 style="font-family: var(--font-mono); font-size: 1rem; margin-top: var(--space-xl);">
                        <span style="color: var(--terminal-syntax-purple);">}</span>
                    </h3>
                </div>
            </div>
            
            <!-- Skills Section -->
            <div>
                <!-- Technical Skills -->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="terminal-dots">
                            <span class="terminal-dot red"></span>
                            <span class="terminal-dot yellow"></span>
                            <span class="terminal-dot green"></span>
                        </div>
                        <span class="terminal-path">skills.json</span>
                    </div>
                    <div class="card-body">
                        <h3 style="font-family: var(--font-mono); font-size: 1rem; margin-bottom: var(--space-lg);">
                            <span style="color: var(--terminal-syntax-purple);">const</span> <span style="color: var(--terminal-accent);">technicalSkills</span> = {
                        </h3>
                        
                        <!-- Web Development -->
                        <div class="mb-3">
                            <div class="d-flex justify-between mb-1">
                                <span style="font-family: var(--font-mono); font-size: 0.875rem; color: var(--terminal-text-secondary);">
                                    <span style="color: var(--terminal-syntax-amber);">"web"</span>:
                                </span>
                            </div>
                            <div class="d-flex gap-1" style="flex-wrap: wrap;">
                                <span class="tag">Laravel</span>
                                <span class="tag">PHP</span>
                                <span class="tag">MySQL</span>
                                <span class="tag">HTML/CSS</span>
                                <span class="tag">JavaScript</span>
                            </div>
                        </div>
                        
                        <!-- IT & Systems -->
                        <div class="mb-3">
                            <div class="d-flex justify-between mb-1">
                                <span style="font-family: var(--font-mono); font-size: 0.875rem; color: var(--terminal-text-secondary);">
                                    <span style="color: var(--terminal-syntax-amber);">"systems"</span>:
                                </span>
                            </div>
                            <div class="d-flex gap-1" style="flex-wrap: wrap;">
                                <span class="tag">Windows Server</span>
                                <span class="tag">Linux</span>
                                <span class="tag">Networking</span>
                                <span class="tag">Security</span>
                            </div>
                        </div>
                        
                        <!-- Tools -->
                        <div class="mb-3">
                            <div class="d-flex justify-between mb-1">
                                <span style="font-family: var(--font-mono); font-size: 0.875rem; color: var(--terminal-text-secondary);">
                                    <span style="color: var(--terminal-syntax-amber);">"tools"</span>:
                                </span>
                            </div>
                            <div class="d-flex gap-1" style="flex-wrap: wrap;">
                                <span class="tag">Git</span>
                                <span class="tag">Docker</span>
                                <span class="tag">VS Code</span>
                                <span class="tag">XAMPP</span>
                            </div>
                        </div>
                        
                        <!-- Design -->
                        <div>
                            <div class="d-flex justify-between mb-1">
                                <span style="font-family: var(--font-mono); font-size: 0.875rem; color: var(--terminal-text-secondary);">
                                    <span style="color: var(--terminal-syntax-amber);">"design"</span>:
                                </span>
                            </div>
                            <div class="d-flex gap-1" style="flex-wrap: wrap;">
                                <span class="tag">Photoshop</span>
                                <span class="tag">Illustrator</span>
                                <span class="tag">Figma</span>
                            </div>
                        </div>
                        
                        <h3 style="font-family: var(--font-mono); font-size: 1rem; margin-top: var(--space-lg);">
                            <span style="color: var(--terminal-syntax-purple);">};</span>
                        </h3>
                    </div>
                </div>
                
                <!-- Timeline -->
                <div class="card">
                    <div class="card-header">
                        <div class="terminal-dots">
                            <span class="terminal-dot red"></span>
                            <span class="terminal-dot yellow"></span>
                            <span class="terminal-dot green"></span>
                        </div>
                        <span class="terminal-path">experience.log</span>
                    </div>
                    <div class="card-body">
                        <h3 style="font-family: var(--font-mono); font-size: 1rem; margin-bottom: var(--space-lg);">
                            <span style="color: var(--terminal-syntax-amber);">// Career Timeline</span>
                        </h3>
                        
                        <div style="border-left: 2px solid var(--terminal-border); padding-left: var(--space-lg); margin-left: var(--space-sm);">
                            <!-- Timeline Item 1 -->
                            <div style="position: relative; margin-bottom: var(--space-xl);">
                                <div style="position: absolute; left: calc(-1 * var(--space-lg) - 5px); top: 5px; width: 10px; height: 10px; background: var(--terminal-accent); border-radius: 50%;"></div>
                                <div style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--terminal-accent); margin-bottom: var(--space-xs);">2023 - Present</div>
                                <h4 style="font-size: 1rem; margin-bottom: var(--space-xs);">Founder & Developer</h4>
                                <p style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--terminal-text-muted); margin-bottom: var(--space-sm);">KONOK - Key Of Next Online Knowledge</p>
                                <p style="font-size: 0.875rem; color: var(--terminal-text-secondary); margin-bottom: 0;">
                                    Building innovative web solutions and providing IT consulting services to clients worldwide.
                                </p>
                            </div>
                            
                            <!-- Timeline Item 2 -->
                            <div style="position: relative; margin-bottom: var(--space-xl);">
                                <div style="position: absolute; left: calc(-1 * var(--space-lg) - 5px); top: 5px; width: 10px; height: 10px; background: var(--terminal-syntax-purple); border-radius: 50%;"></div>
                                <div style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--terminal-syntax-purple); margin-bottom: var(--space-xs);">2020 - 2023</div>
                                <h4 style="font-size: 1rem; margin-bottom: var(--space-xs);">Senior IT Support Specialist</h4>
                                <p style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--terminal-text-muted); margin-bottom: var(--space-sm);">Various Organizations</p>
                                <p style="font-size: 0.875rem; color: var(--terminal-text-secondary); margin-bottom: 0;">
                                    Managed IT infrastructure, provided technical support, and implemented security solutions.
                                </p>
                            </div>
                            
                            <!-- Timeline Item 3 -->
                            <div style="position: relative;">
                                <div style="position: absolute; left: calc(-1 * var(--space-lg) - 5px); top: 5px; width: 10px; height: 10px; background: var(--terminal-syntax-green); border-radius: 50%;"></div>
                                <div style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--terminal-syntax-green); margin-bottom: var(--space-xs);">2018 - 2020</div>
                                <h4 style="font-size: 1rem; margin-bottom: var(--space-xs);">Computer Operator & IT Assistant</h4>
                                <p style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--terminal-text-muted); margin-bottom: var(--space-sm);">Entry Level Positions</p>
                                <p style="font-size: 0.875rem; color: var(--terminal-text-secondary); margin-bottom: 0;">
                                    Gained foundational experience in IT operations and system administration.
                                </p>
                            </div>
                        </div>
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
                <span class="terminal-path">~/next-step.blade.php</span>
            </div>
            <div class="terminal-content text-center">
                <span class="section-eyebrow">// next_steps</span>
                <h2 class="cta-title">Let's Work Together</h2>
                <p class="cta-subtitle">
                    Have a project in mind? I'm always excited to collaborate on new challenges.
                </p>
                <div class="cta-actions">
                    <a href="/contact" class="btn btn-primary">
                        <span style="color: #fff;">$</span> start_conversation
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
