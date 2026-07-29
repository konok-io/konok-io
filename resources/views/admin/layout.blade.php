@extends('layouts.blank')

@section('content')
<div class="admin-wrapper">
    <!-- Admin Sidebar -->
    <aside class="admin-sidebar" id="adminSidebar">
        <div class="sidebar-header">
            <div class="sidebar-brand">
                <div class="terminal-dots-inline">
                    <span class="dot red"></span>
                    <span class="dot yellow"></span>
                    <span class="dot green"></span>
                </div>
                <span class="brand-text">&lt;KONOK.IO/&gt;</span>
            </div>
        </div>
        
        <nav class="sidebar-nav">
            <div class="nav-section-title"><span>// main</span></div>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <span class="nav-icon">$</span>
                        <span>dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.portfolios.index') }}" class="nav-link {{ request()->routeIs('admin.portfolios.*') ? 'active' : '' }}">
                        <span class="nav-icon">$</span>
                        <span>portfolios</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.services.index') }}" class="nav-link {{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
                        <span class="nav-icon">$</span>
                        <span>services</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.skills.index') }}" class="nav-link {{ request()->routeIs('admin.skills.*') ? 'active' : '' }}">
                        <span class="nav-icon">$</span>
                        <span>skills</span>
                    </a>
                </li>
            </ul>
            
            <div class="nav-section-title"><span>// communications</span></div>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('admin.contacts.index') }}" class="nav-link {{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}">
                        <span class="nav-icon">$</span>
                        <span>contacts</span>
                        @if(isset($unreadCount) && $unreadCount > 0)
                            <span class="badge">{{ $unreadCount }}</span>
                        @endif
                    </a>
                </li>
            </ul>
        </nav>
        
        <div class="sidebar-footer">
            <form method="POST" action="{{ route('admin.logout') }}" class="logout-form">
                @csrf
                <button type="submit" class="sidebar-link">
                    <span class="nav-icon">×</span>
                    <span>logout</span>
                </button>
            </form>
        </div>
        
        <!-- Collapse Button at bottom of sidebar -->
        <button class="sidebar-collapse-btn" onclick="toggleSidebar()" aria-label="Toggle sidebar">
            <span id="collapseIcon">&lt;</span>
            <span id="expandIcon" style="display: none;">&gt;</span>
        </button>
    </aside>
    
    <!-- Admin Main Content -->
    <div class="admin-content">
        <!-- Topbar -->
        <header class="admin-topbar">
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
    /* Admin Layout */
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
    
    /* Sidebar Header - Same as topbar height */
    .sidebar-header {
        padding: 0 var(--space-md);
        border-bottom: 1px solid var(--admin-border);
        display: flex;
        align-items: center;
        min-height: 56px;
    }
    
    .sidebar-brand {
        display: flex;
        align-items: center;
        gap: var(--space-sm);
        overflow: hidden;
    }
    
    /* macOS dots inline */
    .terminal-dots-inline {
        display: flex;
        gap: 5px;
        align-items: center;
    }
    
    .terminal-dots-inline .dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #1e293b;
    }
    
    .brand-text {
        font-family: var(--font-mono);
        font-size: 0.8rem;
        font-weight: 600;
        color: var(--admin-text);
        white-space: nowrap;
    }
    
    /* Navigation - Scrollable */
    .sidebar-nav {
        flex: 1;
        overflow-y: auto;
        padding: var(--space-sm) 0;
    }
    
    .sidebar-nav::-webkit-scrollbar {
        width: 4px;
    }
    
    .sidebar-nav::-webkit-scrollbar-track {
        background: transparent;
    }
    
    .sidebar-nav::-webkit-scrollbar-thumb {
        background: var(--admin-border);
        border-radius: 2px;
    }
    
    .nav-section-title {
        padding: var(--space-sm) var(--space-md);
        font-family: var(--font-mono);
        font-size: 0.65rem;
        color: var(--admin-text-muted);
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .nav-list {
        list-style: none;
        padding: 0;
        margin: 0 0 var(--space-sm) 0;
    }
    
    .nav-item {
        margin: 1px var(--space-sm);
    }
    
    .nav-link {
        display: flex;
        align-items: center;
        gap: var(--space-sm);
        padding: var(--space-sm) var(--space-md);
        color: var(--admin-text-secondary);
        text-decoration: none;
        font-family: var(--font-mono);
        font-size: 0.8rem;
        border-radius: 4px;
        transition: all 0.2s ease;
    }
    
    .nav-link:hover {
        background: var(--admin-hover);
        color: var(--admin-text);
    }
    
    .nav-link.active {
        background: var(--admin-active-bg);
        color: #2563eb;
    }
    
    .nav-link.active .nav-icon {
        color: #2563eb;
    }
    
    .nav-icon {
        font-family: var(--font-mono);
        font-size: 0.8rem;
        width: 16px;
        text-align: center;
        flex-shrink: 0;
        color: var(--admin-text-muted);
    }
    
    .badge {
        background: var(--admin-accent);
        color: var(--admin-sidebar-bg);
        font-size: 0.6rem;
        padding: 2px 5px;
        border-radius: 8px;
        margin-left: auto;
        font-family: var(--font-mono);
        font-weight: 600;
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
        padding: var(--space-xs) var(--space-sm);
        color: var(--admin-text-secondary);
        text-decoration: none;
        font-family: var(--font-mono);
        font-size: 0.75rem;
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
    
    /* Collapse Button at sidebar bottom */
    .sidebar-collapse-btn {
        position: absolute;
        bottom: 12px;
        right: 12px;
        width: 28px;
        height: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--admin-hover);
        border: 1px solid var(--admin-border);
        border-radius: 4px;
        color: var(--admin-text-muted);
        font-family: var(--font-mono);
        font-size: 0.9rem;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    
    .sidebar-collapse-btn:hover {
        background: var(--admin-accent);
        border-color: var(--admin-accent);
        color: var(--admin-sidebar-bg);
    }
    
    .admin-sidebar.collapsed .sidebar-brand .brand-text,
    .admin-sidebar.collapsed .nav-section-title > span,
    .admin-sidebar.collapsed .nav-link > span,
    .admin-sidebar.collapsed .badge,
    .admin-sidebar.collapsed .sidebar-link > span:not(.nav-icon) {
        display: none;
    }
    
    .admin-sidebar.collapsed .nav-link {
        justify-content: center;
        padding: var(--space-sm);
    }
    
    .admin-sidebar.collapsed .sidebar-link {
        justify-content: center;
        padding: var(--space-xs);
    }
    
    .admin-sidebar.collapsed .sidebar-collapse-btn {
        right: 50%;
        transform: translateX(50%);
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
    
    /* Topbar - Same height as sidebar header */
    .admin-topbar {
        background: var(--admin-sidebar-bg);
        border-bottom: 1px solid var(--admin-border);
        padding: 0 var(--space-lg);
        display: flex;
        align-items: center;
        justify-content: space-between;
        min-height: 56px;
        position: sticky;
        top: 0;
        z-index: 50;
    }
    
    .topbar-breadcrumb {
        display: flex;
        align-items: center;
        gap: var(--space-xs);
        font-family: var(--font-mono);
        font-size: 0.85rem;
    }
    
    .breadcrumb-path {
        color: var(--admin-accent);
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
        font-size: 0.75rem;
        color: var(--admin-text-secondary);
        text-decoration: none;
        border-radius: 4px;
        transition: all 0.2s ease;
    }
    
    .topbar-btn:hover {
        background: var(--admin-hover);
        color: var(--admin-text);
    }
    
    .topbar-btn:hover .terminal-syntax-purple {
        color: var(--admin-accent);
    }
    
    .topbar-btn .terminal-syntax-purple {
        color: var(--admin-text-muted);
    }
    
    /* Admin Main */
    .admin-main {
        flex: 1;
        background: var(--admin-content-bg);
        padding: var(--space-lg);
    }
    
    /* CSS Variables */
    :root {
        /* Sidebar & Topbar - Light Gray */
        --admin-sidebar-bg: #e8e8f0;
        --admin-border: #d1d5db;
        --admin-hover: #dcdce4;
        --admin-active-bg: rgba(37, 99, 235, 0.12);
        --admin-accent: #2563eb;
        --admin-text: #0f172a;
        --admin-text-secondary: #475569;
        --admin-text-muted: #94a3b8;
        
        /* Content Area - White */
        --admin-bg: #e8e8f0;
        --admin-content-bg: #ffffff;
        --admin-content-border: #d1d5db;
        --admin-content-text: #0f172a;
        --admin-content-text-secondary: #475569;
        --admin-content-text-muted: #94a3b8;
        
        --sidebar-width: 220px;
        --sidebar-collapsed: 56px;
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
        
        .admin-sidebar.collapsed + .admin-content {
            margin-left: 0;
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
