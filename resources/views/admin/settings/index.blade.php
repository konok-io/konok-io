@extends('admin.layout-minimal')

@section('page-title', 'settings')

@section('admin-content')
<!-- Section Header -->
<div class="section-header">
    <div class="section-label">// Configuration</div>
    <h1 class="section-title">Settings & Configuration</h1>
</div>

@if(session('success'))
<div class="alert alert-success">
    <span>✓</span> {{ session('success') }}
</div>
@endif

<!-- Settings Tabs -->
<div class="settings-tabs">
    <button class="settings-tab active" data-tab="header">Header</button>
    <button class="settings-tab" data-tab="footer">Footer</button>
    <button class="settings-tab" data-tab="menu">Menu Builder</button>
    <button class="settings-tab" data-tab="pages">Pages</button>
</div>

<form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <!-- Header Settings -->
    <div class="settings-panel active" id="header">
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
                            <img src="{{ Storage::url($settings['logo_image']) }}" alt="Current Logo" style="max-height: 50px; max-width: 150px; object-fit: contain;">
                            <small style="color: #6b6b6b; font-size: 11px;">Current logo uploaded</small>
                        </div>
                    @else
                        <small style="color: #a3a3a3; font-size: 11px; margin-top: 4px; display: block;">Upload your logo image (PNG, JPG, SVG - Max 2MB)</small>
                    @endif
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
                    <label class="form-label">// footer_copyright</label>
                    <input type="text" name="footer_copyright" class="form-input" 
                           value="{{ $settings['footer_copyright'] ?? '© 2024 KONOK.IO. All rights reserved.' }}" 
                           placeholder="Enter copyright text">
                </div>
                <div class="form-group">
                    <label class="form-label">// footer_description</label>
                    <textarea name="footer_description" class="form-input" rows="3" 
                              placeholder="Enter footer description">{{ $settings['footer_description'] ?? '' }}</textarea>
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
            <span>✓</span> Save Settings
        </button>
    </div>
</form>

<!-- Footer -->
<div class="footer">
    <div class="footer-status">
        <span class="dot"></span>
        <span>System Online</span>
    </div>
    <span>Version 1.0.4</span>
    <span>© {{ date('Y') }} KONOK.IO</span>
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
    }

    .settings-tab {
        padding: 8px 20px;
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

        .settings-tabs {
            overflow-x: auto;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    document.querySelectorAll('.settings-tab').forEach(tab => {
        tab.addEventListener('click', function() {
            // Remove active from all tabs
            document.querySelectorAll('.settings-tab').forEach(t => t.classList.remove('active'));
            // Add active to clicked tab
            this.classList.add('active');
            
            // Hide all panels
            document.querySelectorAll('.settings-panel').forEach(panel => panel.classList.remove('active'));
            // Show selected panel
            const targetId = this.getAttribute('data-tab');
            document.getElementById(targetId).classList.add('active');
        });
    });
</script>
@endpush
