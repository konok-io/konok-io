@extends('layouts.blank')

@section('content')
<div class="admin-wrapper">
    <!-- Admin Sidebar -->
    <aside class="admin-sidebar" id="adminSidebar">
        <div class="sidebar-header">
            <div class="sidebar-brand">
                <div class="terminal-window" style="box-shadow: none; border: none; background: transparent;">
                    <div class="terminal-titlebar" style="padding: 4px 6px; background: transparent; border: none;">
                        <div class="terminal-dots">
                            <span class="terminal-dot red"></span>
                            <span class="terminal-dot yellow"></span>
                            <span class="terminal-dot green"></span>
                        </div>
                    </div>
                </div>
                <span class="brand-text">&lt;KONOK.IO/&gt;</span>
            </div>
            <button class="sidebar-collapse-btn" onclick="toggleSidebar()" aria-label="Toggle sidebar">
                <span id="collapseIcon">‹</span>
                <span id="expandIcon" style="display: none;">›</span>
            </button>
        </div>
        
        <nav class="sidebar-nav">
            <div class="nav-section-title"><span>// Main</span></div>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <span class="nav-icon">📊</span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.portfolios.index') }}" class="nav-link {{ request()->routeIs('admin.portfolios.*') ? 'active' : '' }}">
                        <span class="nav-icon">💼</span>
                        <span>Portfolios</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.services.index') }}" class="nav-link {{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
                        <span class="nav-icon">🛠️</span>
                        <span>Services</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.skills.index') }}" class="nav-link {{ request()->routeIs('admin.skills.*') ? 'active' : '' }}">
                        <span class="nav-icon">⚡</span>
                        <span>Skills</span>
                    </a>
                </li>
            </ul>
            
            <div class="nav-section-title"><span>// Communications</span></div>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('admin.contacts.index') }}" class="nav-link {{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}">
                        <span class="nav-icon">📧</span>
                        <span>Contacts</span>
                        @if(isset($unreadCount) && $unreadCount > 0)
                            <span class="badge">{{ $unreadCount }}</span>
                        @endif
                    </a>
                </li>
            </ul>
        </nav>
        
        <div class="sidebar-footer">
            <a href="{{ url('/') }}" target="_blank" class="sidebar-link">
                <span class="nav-icon">🌐</span>
                <span>View Site</span>
            </a>
            <form method="POST" action="{{ route('admin.logout') }}" class="logout-form">
                @csrf
                <button type="submit" class="sidebar-link">
                    <span class="nav-icon">🚪</span>
                    <span>Logout</span>
                </button>
            </form>
        </div>
    </aside>
    
    <!-- Admin Main Content -->
    <div class="admin-content">
        <!-- Topbar -->
        <header class="admin-topbar">
            <button class="sidebar-toggle-btn" onclick="toggleSidebar()" aria-label="Toggle sidebar">
                <span class="toggle-icon">☰</span>
            </button>
            
            <div class="topbar-breadcrumb">
                <span class="breadcrumb-path">$</span>
                <span class="breadcrumb-text">admin</span>
                <span class="breadcrumb-sep">/</span>
                <span class="breadcrumb-current">@yield('page-title', 'dashboard')</span>
            </div>
            
            <div class="topbar-actions">
                <a href="{{ url('/') }}" target="_blank" class="topbar-btn" title="View Website">
                    <span class="terminal-syntax-purple">&lt;</span>
                    <span>exit_to_app</span>
                    <span class="terminal-syntax-purple">/&gt;</span>
                </a>
            </div>
        </header>
        
        <!-- Page Content -->
        <main class="admin-main">
            @yield('admin-content')
        </main>
    </div>
</div>
@endsection

@push('styles')
<style>
    /* Admin Layout - macOS Dark Mode */
    .admin-wrapper {
        display: flex;
        min-height: 100vh;
        background: var(--admin-bg);
        color: var(--admin-text);
    }
    
    /* Sidebar */
    .admin-sidebar {
        width: var(--sidebar-width);
        background: var(--admin-sidebar-bg);
        border-right: 1px solid var(--admin-border);
        display: flex;
        flex-direction: column;
        position: fixed;
        height: 100vh;
        transition: width 0.3s ease;
        z-index: 100;
    }
    
    .admin-sidebar.collapsed {
        width: var(--sidebar-collapsed);
    }
    
    .sidebar-header {
        padding: var(--space-md);
        border-bottom: 1px solid var(--admin-border);
        display: flex;
        align-items: center;
        justify-content: space-between;
        min-height: 56px;
    }
    
    .sidebar-brand {
        display: flex;
        align-items: center;
        gap: var(--space-sm);
        overflow: hidden;
    }
    
    .brand-text {
        font-family: var(--font-mono);
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--admin-text);
        white-space: nowrap;
    }
    
    .sidebar-collapse-btn {
        width: 24px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--admin-border);
        border: none;
        border-radius: 4px;
        color: var(--admin-text-muted);
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.2s ease;
        flex-shrink: 0;
    }
    
    .sidebar-collapse-btn:hover {
        background: var(--admin-hover);
        color: var(--admin-text);
    }
    
    .admin-sidebar.collapsed .sidebar-brand span,
    .admin-sidebar.collapsed .nav-section-title > span,
    .admin-sidebar.collapsed .nav-link > span,
    .admin-sidebar.collapsed .badge,
    .admin-sidebar.collapsed .brand-text,
    .admin-sidebar.collapsed .nav-section-title {
        display: none;
    }
    
    .admin-sidebar.collapsed .sidebar-header {
        justify-content: center;
        padding: var(--space-md) var(--space-sm);
    }
    
    .admin-sidebar.collapsed .sidebar-nav {
        padding: var(--space-sm) 0;
    }
    
    .admin-sidebar.collapsed .nav-link {
        justify-content: center;
        padding: var(--space-sm);
    }
    
    .admin-sidebar.collapsed .sidebar-footer {
        padding: var(--space-sm);
    }
    
    .admin-sidebar.collapsed .sidebar-link {
        justify-content: center;
        padding: var(--space-sm);
    }
    
    /* Navigation */
    .sidebar-nav {
        flex: 1;
        padding: var(--space-sm) 0;
        overflow-y: auto;
    }
    
    .nav-section-title {
        padding: var(--space-sm) var(--space-md);
        font-family: var(--font-mono);
        font-size: 0.7rem;
        color: var(--admin-text-muted);
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .nav-list {
        list-style: none;
        padding: 0;
        margin: 0 0 var(--space-md) 0;
    }
    
    .nav-item {
        margin: 2px var(--space-sm);
    }
    
    .nav-link {
        display: flex;
        align-items: center;
        gap: var(--space-sm);
        padding: var(--space-sm) var(--space-md);
        color: var(--admin-text-secondary);
        text-decoration: none;
        font-family: var(--font-mono);
        font-size: 0.85rem;
        border-radius: 6px;
        transition: all 0.2s ease;
    }
    
    .nav-link:hover {
        background: var(--admin-hover);
        color: var(--admin-text);
    }
    
    .nav-link.active {
        background: var(--admin-active-bg);
        color: var(--terminal-accent);
        border-left: 3px solid var(--terminal-accent);
        margin-left: -3px;
    }
    
    .nav-icon {
        font-size: 1rem;
        width: 20px;
        text-align: center;
        flex-shrink: 0;
    }
    
    .badge {
        background: var(--terminal-syntax-red);
        color: white;
        font-size: 0.65rem;
        padding: 2px 6px;
        border-radius: 10px;
        margin-left: auto;
        font-family: var(--font-mono);
    }
    
    /* Sidebar Footer */
    .sidebar-footer {
        padding: var(--space-sm) var(--space-md);
        border-top: 1px solid var(--admin-border);
    }
    
    .sidebar-link {
        display: flex;
        align-items: center;
        gap: var(--space-sm);
        padding: var(--space-sm);
        color: var(--admin-text-secondary);
        text-decoration: none;
        font-family: var(--font-mono);
        font-size: 0.8rem;
        transition: all 0.2s ease;
        background: none;
        border: none;
        width: 100%;
        cursor: pointer;
        border-radius: 4px;
    }
    
    .sidebar-link:hover {
        background: var(--admin-hover);
        color: var(--admin-text);
    }
    
    .logout-form {
        margin-top: var(--space-xs);
    }
    
    /* Main Content */
    .admin-content {
        flex: 1;
        margin-left: var(--sidebar-width);
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        transition: margin-left 0.3s ease;
    }
    
    .admin-sidebar.collapsed + .admin-content {
        margin-left: var(--sidebar-collapsed);
    }
    
    /* Topbar */
    .admin-topbar {
        background: var(--admin-sidebar-bg);
        border-bottom: 1px solid var(--admin-border);
        padding: var(--space-sm) var(--space-lg);
        display: flex;
        align-items: center;
        gap: var(--space-md);
        position: sticky;
        top: 0;
        z-index: 50;
        min-height: 48px;
    }
    
    .sidebar-toggle-btn {
        display: none;
        background: none;
        border: none;
        color: var(--admin-text);
        font-size: 1.25rem;
        cursor: pointer;
        padding: var(--space-xs);
    }
    
    .topbar-breadcrumb {
        display: flex;
        align-items: center;
        gap: var(--space-xs);
        font-family: var(--font-mono);
        font-size: 0.85rem;
    }
    
    .breadcrumb-path {
        color: var(--terminal-syntax-purple);
    }
    
    .breadcrumb-text {
        color: var(--admin-text-secondary);
    }
    
    .breadcrumb-sep {
        color: var(--admin-text-muted);
    }
    
    .breadcrumb-current {
        color: var(--admin-text);
    }
    
    .topbar-actions {
        margin-left: auto;
        display: flex;
        align-items: center;
        gap: var(--space-sm);
    }
    
    .topbar-btn {
        display: flex;
        align-items: center;
        gap: var(--space-xs);
        padding: var(--space-xs) var(--space-sm);
        font-family: var(--font-mono);
        font-size: 0.8rem;
        color: var(--admin-text-secondary);
        text-decoration: none;
        border-radius: 4px;
        transition: all 0.2s ease;
    }
    
    .topbar-btn:hover {
        background: var(--admin-hover);
        color: var(--admin-text);
    }
    
    /* Admin Main */
    .admin-main {
        flex: 1;
        padding: var(--space-lg);
    }
    
    /* CSS Variables for Admin - macOS Dark Mode */
    :root {
        /* Dark Sidebar & Topbar */
        --admin-sidebar-bg: #121218;
        --admin-border: #2a2a35;
        --admin-hover: rgba(255, 255, 255, 0.05);
        --admin-active-bg: rgba(37, 99, 235, 0.15);
        --admin-text: #e4e4e7;
        --admin-text-secondary: #a1a1aa;
        --admin-text-muted: #71717a;
        
        /* Light Content Area */
        --admin-bg: #f8f9fc;
        --admin-content-bg: #ffffff;
        --admin-content-border: #e2e8f0;
        --admin-content-text: #0f172a;
        --admin-content-text-secondary: #64748b;
        
        --sidebar-width: 240px;
        --sidebar-collapsed: 60px;
    }
    
    /* Content Area - Light Mode */
    .admin-content {
        background: var(--admin-bg);
    }
    
    .admin-main {
        background: var(--admin-content-bg);
        border-radius: 8px;
        margin: var(--space-md);
        padding: var(--space-lg);
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }
    
    /* Topbar stays dark */
    .admin-topbar {
        background: var(--admin-sidebar-bg);
    }
    
    /* Sidebar stays dark */
    .admin-sidebar {
        background: var(--admin-sidebar-bg);
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .admin-sidebar {
            transform: translateX(-100%);
        }
        
        .admin-sidebar.mobile-open {
            transform: translateX(0);
        }
        
        .admin-content {
            margin-left: 0;
        }
        
        .sidebar-toggle-btn {
            display: flex;
        }
        
        .admin-sidebar.collapsed + .admin-content {
            margin-left: 0;
        }
        
        .admin-main {
            margin: var(--space-sm);
            padding: var(--space-md);
        }
    }
</style>
@endpush

@push('scripts')
<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('adminSidebar');
        const collapseIcon = document.getElementById('collapseIcon');
        const expandIcon = document.getElementById('expandIcon');
        
        if (window.innerWidth <= 768) {
            sidebar.classList.toggle('mobile-open');
        } else {
            sidebar.classList.toggle('collapsed');
            
            if (sidebar.classList.contains('collapsed')) {
                collapseIcon.style.display = 'none';
                expandIcon.style.display = 'inline';
                localStorage.setItem('sidebar-collapsed', 'true');
            } else {
                collapseIcon.style.display = 'inline';
                expandIcon.style.display = 'none';
                localStorage.setItem('sidebar-collapsed', 'false');
            }
        }
    }
    
    // Restore sidebar state
    document.addEventListener('DOMContentLoaded', function() {
        const sidebar = document.getElementById('adminSidebar');
        const collapseIcon = document.getElementById('collapseIcon');
        const expandIcon = document.getElementById('expandIcon');
        
        if (localStorage.getItem('sidebar-collapsed') === 'true' && window.innerWidth > 768) {
            sidebar.classList.add('collapsed');
            collapseIcon.style.display = 'none';
            expandIcon.style.display = 'inline';
        }
    });
</script>
@endpush
