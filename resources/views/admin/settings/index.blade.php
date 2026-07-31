@extends('admin.layout-minimal')

@section('page-title', 'settings')

@section('admin-content')
<!-- Section Header -->
<div class="section-header">
    <div class="section-label">// Configuration</div>
    <h1 class="section-title">Settings & Configuration</h1>
    <p style="color: #6b6b6b; font-size: 13px; margin-top: 8px;">Manage all website settings from one place</p>
</div>

@if(session('success'))
<div class="alert alert-success">
    <span>✓</span> {{ session('success') }}
</div>
@endif

<!-- Settings Tabs -->
<div class="settings-tabs">
    <button class="settings-tab active" data-tab="general">📋 General</button>
    <button class="settings-tab" data-tab="header">🎨 Header</button>
    <button class="settings-tab" data-tab="footer">📄 Footer</button>
    <button class="settings-tab" data-tab="contact">📍 Contact</button>
    <button class="settings-tab" data-tab="social">🔗 Social Media</button>
    <button class="settings-tab" data-tab="menu">📑 Menu</button>
    <button class="settings-tab" data-tab="content">✏️ Content</button>
    <button class="settings-tab" data-tab="pages">📦 Pages</button>
</div>

<form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" id="settingsForm">
    @csrf
    <input type="hidden" name="current_tab" id="currentTab" value="general">

    <!-- General Settings -->
    <div class="settings-panel active" id="general">
        <div class="window-card">
            <div class="window-header">
                <div class="window-dots">
                    <span class="window-dot"></span>
                </div>
                <span class="window-title">general-config.json</span>
            </div>
            <div class="window-body">
                <div class="form-group">
                    <label class="form-label">// site_name</label>
                    <input type="text" name="site_name" class="form-input"
                           value="{{ $settings['site_name'] ?? 'KONOK.IO' }}"
                           placeholder="Enter site name">
                </div>
                <div class="form-group">
                    <label class="form-label">// site_tagline</label>
                    <input type="text" name="site_tagline" class="form-input"
                           value="{{ $settings['site_tagline'] ?? 'Key Of Next Online Knowledge' }}"
                           placeholder="Enter site tagline">
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">// email</label>
                        <input type="email" name="email" class="form-input"
                               value="{{ $settings['email'] ?? '' }}"
                               placeholder="contact@example.com">
                    </div>
                    <div class="form-group">
                        <label class="form-label">// phone</label>
                        <input type="text" name="phone" class="form-input"
                               value="{{ $settings['phone'] ?? '' }}"
                               placeholder="+880 1XXX XXXXXX">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Settings -->
    <div class="settings-panel" id="header">
        <div class="window-card">
            <div class="window-header">
                <div class="window-dots">
                    <span class="window-dot"></span>
                </div>
                <span class="window-title">header-config.json</span>
            </div>
            <div class="window-body">
                <div class="form-group">
                    <label class="form-label">// logo_image (PNG, JPG, SVG)</label>
                    <input type="file" name="logo_image" class="form-input" accept="image/*">
                    @if(isset($settings['logo_image']) && $settings['logo_image'])
                        <div style="margin-top: 12px; padding: 12px; background: #f5f5f5; border-radius: 6px; display: flex; align-items: center; gap: 12px;">
                            <img src="/storage/{{ $settings['logo_image'] }}" alt="Current Logo" style="max-height: 50px; max-width: 150px; object-fit: contain;">
                            <small style="color: #6b6b6b; font-size: 11px;">Current logo uploaded</small>
                        </div>
                    @endif
                    <small style="color: #a3a3a3; font-size: 11px; margin-top: 4px; display: block;">Upload your logo image (PNG, JPG, SVG - Max 2MB)</small>
                </div>
                <div class="form-group">
                    <label class="form-label">// site_logo (Fallback Text)</label>
                    <input type="text" name="site_logo" class="form-input"
                           value="{{ $settings['site_logo'] ?? 'KONOK' }}"
                           placeholder="Enter site logo text">
                    <small style="color: #a3a3a3; font-size: 11px; margin-top: 4px; display: block;">This will appear if no logo is uploaded</small>
                </div>
                <div class="form-group">
                    <label class="form-label">// header_title</label>
                    <input type="text" name="header_title" class="form-input"
                           value="{{ $settings['header_title'] ?? 'KONOK.IO' }}"
                           placeholder="Enter header title">
                </div>
                <div class="form-group">
                    <label class="form-label">// header_subtitle</label>
                    <input type="text" name="header_subtitle" class="form-input"
                           value="{{ $settings['header_subtitle'] ?? 'Key Of Next Online Knowledge' }}"
                           placeholder="Enter header subtitle">
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Settings -->
    <div class="settings-panel" id="footer">
        <div class="window-card">
            <div class="window-header">
                <div class="window-dots">
                    <span class="window-dot"></span>
                </div>
                <span class="window-title">footer-config.json</span>
            </div>
            <div class="window-body">
                <div class="form-group">
                    <label class="form-label">// footer_description</label>
                    <textarea name="footer_description" class="form-input" rows="3"
                              placeholder="Enter footer description">{{ $settings['footer_description'] ?? '' }}</textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">// footer_copyright</label>
                    <input type="text" name="footer_copyright" class="form-input"
                           value="{{ $settings['footer_copyright'] ?? '© 2024 KONOK.IO. All rights reserved.' }}"
                           placeholder="Enter copyright text">
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Settings -->
    <div class="settings-panel" id="contact">
        <div class="window-card">
            <div class="window-header">
                <div class="window-dots">
                    <span class="window-dot"></span>
                </div>
                <span class="window-title">contact-config.json</span>
            </div>
            <div class="window-body">
                <div class="form-group">
                    <label class="form-label">// address</label>
                    <input type="text" name="address" class="form-input"
                           value="{{ $settings['address'] ?? '' }}"
                           placeholder="Enter your full address">
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">// city</label>
                        <input type="text" name="city" class="form-input"
                               value="{{ $settings['city'] ?? '' }}"
                               placeholder="Dhaka">
                    </div>
                    <div class="form-group">
                        <label class="form-label">// country</label>
                        <input type="text" name="country" class="form-input"
                               value="{{ $settings['country'] ?? 'Bangladesh' }}"
                               placeholder="Bangladesh">
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">// google_map_embed</label>
                    <textarea name="google_map_embed" class="form-input" rows="3"
                              placeholder="Paste Google Maps embed iframe code">{{ $settings['google_map_embed'] ?? '' }}</textarea>
                    <small style="color: #a3a3a3; font-size: 11px; margin-top: 4px; display: block;">Paste the embed code from Google Maps</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Social Media Settings -->
    <div class="settings-panel" id="social">
        <div class="window-card">
            <div class="window-header">
                <div class="window-dots">
                    <span class="window-dot"></span>
                </div>
                <span class="window-title">social-links.json</span>
            </div>
            <div class="window-body">
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">// facebook</label>
                        <input type="url" name="facebook" class="form-input"
                               value="{{ $settings['facebook'] ?? '' }}"
                               placeholder="https://facebook.com/yourpage">
                    </div>
                    <div class="form-group">
                        <label class="form-label">// twitter</label>
                        <input type="url" name="twitter" class="form-input"
                               value="{{ $settings['twitter'] ?? '' }}"
                               placeholder="https://twitter.com/yourpage">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">// linkedin</label>
                        <input type="url" name="linkedin" class="form-input"
                               value="{{ $settings['linkedin'] ?? '' }}"
                               placeholder="https://linkedin.com/in/yourprofile">
                    </div>
                    <div class="form-group">
                        <label class="form-label">// github</label>
                        <input type="url" name="github" class="form-input"
                               value="{{ $settings['github'] ?? '' }}"
                               placeholder="https://github.com/yourusername">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">// instagram</label>
                        <input type="url" name="instagram" class="form-input"
                               value="{{ $settings['instagram'] ?? '' }}"
                               placeholder="https://instagram.com/yourpage">
                    </div>
                    <div class="form-group">
                        <label class="form-label">// youtube</label>
                        <input type="url" name="youtube" class="form-input"
                               value="{{ $settings['youtube'] ?? '' }}"
                               placeholder="https://youtube.com/@yourchannel">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">// whatsapp</label>
                        <input type="text" name="whatsapp" class="form-input"
                               value="{{ $settings['whatsapp'] ?? '' }}"
                               placeholder="+880 1XXX XXXXXX">
                    </div>
                    <div class="form-group">
                        <label class="form-label">// whatsapp_message</label>
                        <input type="text" name="whatsapp_message" class="form-input"
                               value="{{ $settings['whatsapp_message'] ?? 'Hello! I would like to inquire about your services.' }}"
                               placeholder="Default WhatsApp message">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu Builder -->
    <div class="settings-panel" id="menu">
        <div class="window-card">
            <div class="window-header">
                <div class="window-dots">
                    <span class="window-dot"></span>
                </div>
                <span class="window-title">menu-items.json</span>
            </div>
            <div class="window-body">
                <div class="form-group">
                    <label class="form-label">// menu_item_1 (Home)</label>
                    <input type="text" name="menu_item_1" class="form-input"
                           value="{{ $settings['menu_item_1'] ?? 'Home()' }}">
                </div>
                <div class="form-group">
                    <label class="form-label">// menu_item_2 (About)</label>
                    <input type="text" name="menu_item_2" class="form-input"
                           value="{{ $settings['menu_item_2'] ?? 'About()' }}">
                </div>
                <div class="form-group">
                    <label class="form-label">// menu_item_3 (Services)</label>
                    <input type="text" name="menu_item_3" class="form-input"
                           value="{{ $settings['menu_item_3'] ?? 'Services()' }}">
                </div>
                <div class="form-group">
                    <label class="form-label">// menu_item_4 (Projects)</label>
                    <input type="text" name="menu_item_4" class="form-input"
                           value="{{ $settings['menu_item_4'] ?? 'Projects()' }}">
                </div>
                <div class="form-group">
                    <label class="form-label">// menu_item_5 (Contact)</label>
                    <input type="text" name="menu_item_5" class="form-input"
                           value="{{ $settings['menu_item_5'] ?? 'Contact()' }}">
                </div>
            </div>
        </div>
    </div>

    <!-- Content Settings -->
    <div class="settings-panel" id="content">
        <div class="window-card">
            <div class="window-header">
                <div class="window-dots">
                    <span class="window-dot"></span>
                </div>
                <span class="window-title">content-text.json</span>
            </div>
            <div class="window-body">
                <h4 style="font-size: 13px; color: #a3a3a3; margin-bottom: 16px;">Hero Section</h4>
                <div class="form-group">
                    <label class="form-label">// hero_title</label>
                    <input type="text" name="hero_title" class="form-input"
                           value="{{ $settings['hero_title'] ?? 'Welcome to KONOK.IO' }}"
                           placeholder="Hero title">
                </div>
                <div class="form-group">
                    <label class="form-label">// hero_subtitle</label>
                    <input type="text" name="hero_subtitle" class="form-input"
                           value="{{ $settings['hero_subtitle'] ?? 'Building digital experiences that matter' }}"
                           placeholder="Hero subtitle">
                </div>
                <div class="form-group">
                    <label class="form-label">// hero_button_text</label>
                    <input type="text" name="hero_button_text" class="form-input"
                           value="{{ $settings['hero_button_text'] ?? 'Get Started' }}"
                           placeholder="Button text">
                </div>
                
                <h4 style="font-size: 13px; color: #a3a3a3; margin: 24px 0 16px;">About Section</h4>
                <div class="form-group">
                    <label class="form-label">// about_title</label>
                    <input type="text" name="about_title" class="form-input"
                           value="{{ $settings['about_title'] ?? 'About Us' }}"
                           placeholder="About section title">
                </div>
                <div class="form-group">
                    <label class="form-label">// about_description</label>
                    <textarea name="about_description" class="form-input" rows="4"
                              placeholder="About description">{{ $settings['about_description'] ?? '' }}</textarea>
                </div>
                
                <h4 style="font-size: 13px; color: #a3a3a3; margin: 24px 0 16px;">Services Section</h4>
                <div class="form-group">
                    <label class="form-label">// services_title</label>
                    <input type="text" name="services_title" class="form-input"
                           value="{{ $settings['services_title'] ?? 'Our Services' }}"
                           placeholder="Services section title">
                </div>
                <div class="form-group">
                    <label class="form-label">// services_subtitle</label>
                    <input type="text" name="services_subtitle" class="form-input"
                           value="{{ $settings['services_subtitle'] ?? 'What we offer' }}"
                           placeholder="Services section subtitle">
                </div>
                
                <h4 style="font-size: 13px; color: #a3a3a3; margin: 24px 0 16px;">Contact Section</h4>
                <div class="form-group">
                    <label class="form-label">// contact_title</label>
                    <input type="text" name="contact_title" class="form-input"
                           value="{{ $settings['contact_title'] ?? 'Contact Us' }}"
                           placeholder="Contact section title">
                </div>
                <div class="form-group">
                    <label class="form-label">// contact_subtitle</label>
                    <input type="text" name="contact_subtitle" class="form-input"
                           value="{{ $settings['contact_subtitle'] ?? 'Get in touch with us' }}"
                           placeholder="Contact section subtitle">
                </div>
            </div>
        </div>
    </div>

    <!-- Pages Settings -->
    <div class="settings-panel" id="pages">
        <div class="window-card">
            <div class="window-header">
                <div class="window-dots">
                    <span class="window-dot"></span>
                </div>
                <span class="window-title">pages-list.json</span>
            </div>
            <div class="window-body">
                <div class="pages-grid">
                    <a href="{{ route('admin.projects.index') }}" class="page-card">
                        <span class="page-icon">📁</span>
                        <span class="page-name">Projects</span>
                        <span class="page-count">{{ App\Models\Portfolio::count() }} items</span>
                    </a>
                    <a href="{{ route('admin.services.index') }}" class="page-card">
                        <span class="page-icon">⚙</span>
                        <span class="page-name">Services</span>
                        <span class="page-count">{{ App\Models\Service::count() }} items</span>
                    </a>
                    <a href="{{ route('admin.skills.index') }}" class="page-card">
                        <span class="page-icon">💡</span>
                        <span class="page-name">Skills</span>
                        <span class="page-count">{{ App\Models\Skill::count() }} items</span>
                    </a>
                    <a href="{{ route('admin.contacts.index') }}" class="page-card">
                        <span class="page-icon">💬</span>
                        <span class="page-name">Contacts</span>
                        <span class="page-count">{{ App\Models\Contact::count() }} messages</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Save Button -->
    <div class="form-actions">
        <button type="submit" class="btn btn-primary">
            <span>✓</span> Save All Settings
        </button>
    </div>
</form>

<!-- Footer -->
<div class="footer">
    <div class="footer-window">
        <div class="footer-dots">
            <span class="footer-dot close"></span>
            <span class="footer-dot minimize"></span>
            <span class="footer-dot maximize"></span>
        </div>
        <span class="footer-title">KONOK.IO ADMIN TERMINAL</span>
    </div>
    <div class="footer-body">
        <div class="footer-prompt">
            <span class="prompt-symbol">❯</span>
            <span class="prompt-text">konok@admin:~$</span>
            <span class="prompt-cursor"></span>
            <div class="footer-status">
                <span class="status-indicator"></span>
                <span class="status-text">ONLINE</span>
            </div>
        </div>
        <div class="footer-info">
            <span>v1.0.5</span>
            <span class="separator">•</span>
            <span class="footer-brand"><span>©</span> {{ date('Y') }} KONOK.IO</span>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .alert {
        padding: 12px 16px;
        border-radius: 6px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 8px;
        font-family: 'JetBrains Mono', monospace;
        font-size: 12px;
    }

    .alert-success {
        background: #e8f5e9;
        color: #2e7d32;
        border: 1px solid #c8e6c9;
    }

    /* Settings Tabs */
    .settings-tabs {
        display: flex;
        gap: 8px;
        margin-bottom: 24px;
        border-bottom: 1px solid #e5e5e5;
        padding-bottom: 12px;
        flex-wrap: wrap;
    }

    .settings-tab {
        padding: 8px 16px;
        background: #f5f5f5;
        border: 1px solid #e5e5e5;
        border-radius: 6px;
        font-family: 'JetBrains Mono', monospace;
        font-size: 12px;
        color: #6b6b6b;
        cursor: pointer;
        transition: all 0.2s;
    }

    .settings-tab:hover {
        background: #e5e5e5;
        color: #171717;
    }

    .settings-tab.active {
        background: #171717;
        color: white;
        border-color: #171717;
    }

    /* Settings Panels */
    .settings-panel {
        display: none;
    }

    .settings-panel.active {
        display: block;
    }

    /* Form Row */
    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
    }

    @media (max-width: 768px) {
        .form-row {
            grid-template-columns: 1fr;
        }
        .settings-tabs {
            overflow-x: auto;
            flex-wrap: nowrap;
        }
    }

    /* Pages Grid */
    .pages-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 16px;
    }

    .page-card {
        background: #f5f5f5;
        border: 1px solid #e5e5e5;
        border-radius: 8px;
        padding: 20px;
        text-align: center;
        text-decoration: none;
        transition: all 0.2s;
    }

    .page-card:hover {
        background: #e5e5e5;
        transform: translateY(-2px);
    }

    .page-icon {
        font-size: 24px;
        display: block;
        margin-bottom: 8px;
    }

    .page-name {
        font-family: 'JetBrains Mono', monospace;
        font-size: 12px;
        color: #171717;
        font-weight: 600;
        display: block;
        margin-bottom: 4px;
    }

    .page-count {
        font-size: 11px;
        color: #a3a3a3;
    }

    /* Form Actions */
    .form-actions {
        margin-top: 24px;
        display: flex;
        justify-content: flex-end;
    }

    .form-actions .btn {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    @media (max-width: 768px) {
        .pages-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Function to switch tab
        function switchTab(tabId) {
            document.querySelectorAll('.settings-tab').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.settings-panel').forEach(panel => panel.classList.remove('active'));
            
            const tab = document.querySelector(`.settings-tab[data-tab="${tabId}"]`);
            const panel = document.getElementById(tabId);
            
            if (tab) tab.classList.add('active');
            if (panel) panel.classList.add('active');
            
            document.getElementById('currentTab').value = tabId;
        }
        
        // Handle tab click
        document.querySelectorAll('.settings-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                const tabId = this.getAttribute('data-tab');
                switchTab(tabId);
            });
        });
        
        // Check URL hash OR session flash data on page load and switch to that tab
        const hash = window.location.hash.substring(1);
        const activeTab = "{{ session('active_tab', 'general') }}";
        
        if (hash) {
            switchTab(hash);
        } else if (activeTab && activeTab !== '') {
            switchTab(activeTab);
        }
    });
</script>
@endpush
