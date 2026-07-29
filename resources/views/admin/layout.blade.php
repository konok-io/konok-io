@extends('layouts.app')

@section('content')
<div class="admin-layout">
    <!-- Admin Sidebar -->
    <aside class="admin-sidebar">
        <div class="sidebar-header">
            <a href="{{ route('home') }}" class="sidebar-logo">
                <span class="logo-text">KONOK</span>
                <span class="logo-dot">.IO</span>
            </a>
        </div>
        
        <nav class="sidebar-nav">
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
            <a href="{{ url('/') }}" class="sidebar-link" target="_blank">
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
    <main class="admin-main">
        <header class="admin-header">
            <div class="header-title">
                <h1>@yield('page-title', 'Dashboard')</h1>
            </div>
            <div class="header-actions">
                @yield('header-actions')
            </div>
        </header>
        
        <div class="admin-content">
            @yield('admin-content')
        </div>
    </main>
</div>
@endsection

@push('styles')
<style>
    .admin-layout {
        display: flex;
        min-height: 100vh;
        background: var(--terminal-bg);
    }
    
    /* Sidebar */
    .admin-sidebar {
        width: 260px;
        background: var(--terminal-bg-secondary);
        border-right: 1px solid var(--terminal-border);
        display: flex;
        flex-direction: column;
        position: fixed;
        height: 100vh;
    }
    
    .sidebar-header {
        padding: var(--space-lg);
        border-bottom: 1px solid var(--terminal-border);
    }
    
    .sidebar-logo {
        font-family: var(--font-mono);
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--terminal-text);
        text-decoration: none;
    }
    
    .logo-dot {
        color: var(--terminal-accent);
    }
    
    .sidebar-nav {
        flex: 1;
        padding: var(--space-md) 0;
        overflow-y: auto;
    }
    
    .nav-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .nav-item {
        margin: 2px 0;
    }
    
    .nav-link {
        display: flex;
        align-items: center;
        gap: var(--space-sm);
        padding: var(--space-sm) var(--space-lg);
        color: var(--terminal-text-secondary);
        text-decoration: none;
        font-family: var(--font-mono);
        font-size: 0.9rem;
        transition: all 0.2s ease;
    }
    
    .nav-link:hover {
        background: rgba(245, 158, 11, 0.1);
        color: var(--terminal-text);
    }
    
    .nav-link.active {
        background: rgba(245, 158, 11, 0.15);
        color: var(--terminal-accent);
        border-left: 3px solid var(--terminal-accent);
    }
    
    .nav-icon {
        font-size: 1rem;
        width: 24px;
        text-align: center;
    }
    
    .badge {
        background: var(--terminal-syntax-red);
        color: white;
        font-size: 0.7rem;
        padding: 2px 6px;
        border-radius: 10px;
        margin-left: auto;
    }
    
    .sidebar-footer {
        padding: var(--space-md);
        border-top: 1px solid var(--terminal-border);
    }
    
    .sidebar-link {
        display: flex;
        align-items: center;
        gap: var(--space-sm);
        padding: var(--space-sm);
        color: var(--terminal-text-secondary);
        text-decoration: none;
        font-family: var(--font-mono);
        font-size: 0.85rem;
        transition: all 0.2s ease;
        background: none;
        border: none;
        width: 100%;
        cursor: pointer;
    }
    
    .sidebar-link:hover {
        color: var(--terminal-text);
    }
    
    .logout-form {
        margin-top: var(--space-xs);
    }
    
    /* Main Content */
    .admin-main {
        flex: 1;
        margin-left: 260px;
        min-height: 100vh;
    }
    
    .admin-header {
        background: var(--terminal-bg-secondary);
        border-bottom: 1px solid var(--terminal-border);
        padding: var(--space-lg) var(--space-xl);
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: sticky;
        top: 0;
        z-index: 10;
    }
    
    .header-title h1 {
        font-family: var(--font-mono);
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--terminal-text);
        margin: 0;
    }
    
    .admin-content {
        padding: var(--space-xl);
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .admin-sidebar {
            width: 70px;
        }
        
        .sidebar-logo, .nav-link span:not(.nav-icon), .sidebar-footer span:not(.nav-icon) {
            display: none;
        }
        
        .admin-main {
            margin-left: 70px;
        }
        
        .nav-link {
            justify-content: center;
            padding: var(--space-md);
        }
    }
</style>
@endpush
