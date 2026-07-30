@extends('layouts.blank')

@section('content')
<div class="minimal-wrapper">
    <!-- Top Bar -->
    <div class="minimal-topbar">
        <!-- Window Header -->
        <div class="topbar-window">
            <div class="topbar-dots">
                <span class="topbar-dot close"></span>
                <span class="topbar-dot minimize"></span>
                <span class="topbar-dot maximize"></span>
            </div>
            <span class="topbar-title">KONOK.IO ADMIN</span>
        </div>

        <!-- Navigation Tabs -->
        <div class="topbar-tabs">
            <div class="topbar-tab {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <span class="prefix">01.</span>
                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            </div>
            <div class="topbar-tab {{ request()->routeIs('admin.projects.*') ? 'active' : '' }}">
                <span class="prefix">02.</span>
                <a href="{{ route('admin.projects.index') }}">Projects</a>
            </div>
            <div class="topbar-tab {{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
                <span class="prefix">03.</span>
                <a href="{{ route('admin.services.index') }}">Services</a>
            </div>
            <div class="topbar-tab {{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}">
                <span class="prefix">04.</span>
                <a href="{{ route('admin.contacts.index') }}">
                    Contacts
                    @if(isset($unreadCount) && $unreadCount > 0)
                        <span class="tab-badge">{{ $unreadCount }}</span>
                    @endif
                </a>
            </div>
            <div class="topbar-tab {{ request()->routeIs('admin.settings*') ? 'active' : '' }}">
                <span class="prefix">05.</span>
                <a href="{{ route('admin.settings') }}">Settings</a>
            </div>
        </div>

        <div class="topbar-actions">
            <a href="{{ url('/') }}" target="_blank" class="topbar-btn" title="View Website">
                <span>⌘K</span>
                <span>View Site</span>
            </a>
            <div class="topbar-user">
                <div class="topbar-avatar">KO</div>
                <span class="topbar-username">Admin</span>
            </div>
            <form method="POST" action="{{ route('admin.logout') }}" class="logout-form">
                @csrf
                <button type="submit" class="topbar-btn topbar-logout">
                    <span>→</span>
                    <span>logout</span>
                </button>
            </form>
        </div>
    </div>

    <!-- Main Content -->
    <div class="minimal-main">
        @yield('admin-content')
    </div>
</div>
@endsection

@push('styles')
<style>
    /* Minimal Console Layout */
    .minimal-wrapper {
        font-family: 'IBM Plex Mono', 'JetBrains Mono', monospace;
        background: #f8fafc;
        color: #1e293b;
        min-height: 100vh;
    }

    /* Top Bar - Dark Theme */
    .minimal-topbar {
        background: linear-gradient(135deg, #0f0f23 0%, #1a1a2e 50%, #16213e 100%);
        border-bottom: 1px solid rgba(255,255,255,0.1);
        padding: 0 24px;
        display: flex;
        align-items: center;
        height: 64px;
        position: sticky;
        top: 0;
        z-index: 100;
        font-family: 'JetBrains Mono', 'Fira Code', 'SF Mono', monospace;
    }

    .topbar-window {
        background: rgba(0,0,0,0.3);
        padding: 8px 16px;
        border-radius: 8px;
        margin-right: 24px;
        display: flex;
        align-items: center;
        gap: 12px;
        border: 1px solid rgba(255,255,255,0.05);
    }

    .topbar-dots {
        display: flex;
        gap: 6px;
    }

    .topbar-dot {
        width: 11px;
        height: 11px;
        border-radius: 50%;
        background: #ffffff;
        box-shadow: 0 2px 4px rgba(0,0,0,0.3);
    }

    .topbar-dot.close,
    .topbar-dot.minimize,
    .topbar-dot.maximize {
        background: #ffffff;
    }

    .topbar-title {
        font-size: 11px;
        color: #ffffff;
        letter-spacing: 2px;
        font-weight: 600;
    }

    .topbar-tabs {
        display: flex;
        align-items: stretch;
        height: 100%;
        flex: 1;
        justify-content: center;
    }

    .topbar-tab {
        padding: 0 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        font-size: 13px;
        color: #94a3b8;
        transition: all 0.2s;
        text-decoration: none;
        margin: 0 4px;
        border-radius: 6px;
    }

    .topbar-tab a {
        color: inherit;
        text-decoration: none;
    }

    .topbar-tab:hover {
        color: #ffffff;
        background: rgba(255,255,255,0.1);
    }

    .topbar-tab.active {
        color: #4ade80;
        background: rgba(74, 222, 128, 0.1);
    }

    .topbar-tab .prefix {
        color: #64748b;
    }

    .tab-badge {
        background: #4ade80;
        color: #0a0a0a;
        padding: 2px 8px;
        border-radius: 10px;
        font-size: 10px;
        font-weight: 600;
        margin-left: 4px;
    }

    .topbar-actions {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-left: auto;
    }

    .topbar-btn {
        display: flex;
        align-items: center;
        gap: 8px;
        background: rgba(255,255,255,0.1);
        border: 1px solid rgba(255,255,255,0.1);
        padding: 8px 14px;
        font-size: 11px;
        color: #94a3b8;
        border-radius: 6px;
        text-decoration: none;
        transition: all 0.2s;
        cursor: pointer;
        font-family: 'JetBrains Mono', monospace;
    }

    .topbar-btn:hover {
        background: rgba(255,255,255,0.15);
        color: #ffffff;
        border-color: rgba(255,255,255,0.2);
    }

    .topbar-user {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .topbar-avatar {
        width: 32px;
        height: 32px;
        border-radius: 6px;
        background: linear-gradient(135deg, #4ade80, #22c55e);
        color: #0a0a0a;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 11px;
        font-weight: 700;
    }

    .topbar-username {
        font-size: 12px;
        color: #e2e8f0;
        font-weight: 500;
    }

    .logout-form {
        margin: 0;
    }

    .topbar-logout {
        background: rgba(239, 68, 68, 0.1);
        border: 1px solid rgba(239, 68, 68, 0.3);
        color: #fca5a5;
    }

    .topbar-logout:hover {
        background: rgba(239, 68, 68, 0.2);
        border-color: #ef4444;
        color: #ffffff;
    }

    /* Main Content */
    .minimal-main {
        padding: 32px;
        max-width: 1400px;
        margin: 0 auto;
    }

    /* Section Header */
    .section-header {
        margin-bottom: 24px;
    }

    .section-label {
        font-size: 11px;
        color: #a3a3a3;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 4px;
    }

    .section-title {
        font-size: 20px;
        font-weight: 600;
        color: #171717;
    }

    /* Stats Row */
    .stats-row {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 16px;
        margin-bottom: 32px;
    }

    .stat-card {
        background: #ffffff;
        border: 1px solid #e5e5e5;
        border-radius: 8px;
        overflow: hidden;
    }

    .stat-card-header {
        padding: 12px 16px;
        border-bottom: 1px solid #e5e5e5;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .stat-card-dots {
        display: flex;
        gap: 4px;
    }

    .stat-card-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #232323;
    }

    .stat-card-title {
        font-size: 10px;
        color: #a3a3a3;
        margin-left: auto;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .stat-card-body {
        padding: 20px 16px;
    }

    .stat-card-value {
        font-size: 36px;
        font-weight: 700;
        color: #171717;
        line-height: 1;
        margin-bottom: 4px;
    }

    .stat-card-label {
        font-size: 11px;
        color: #6b6b6b;
    }

    /* Window Card */
    .window-card {
        background: #ffffff;
        border: 1px solid #e5e5e5;
        border-radius: 8px;
        overflow: hidden;
        margin-bottom: 20px;
    }

    .window-header {
        padding: 12px 16px;
        border-bottom: 1px solid #e5e5e5;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .window-dots {
        display: flex;
        gap: 5px;
    }

    .window-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #232323;
    }

    .window-title {
        font-size: 11px;
        color: #a3a3a3;
    }

    .window-action {
        font-size: 10px;
        color: #6b6b6b;
        margin-left: auto;
        cursor: pointer;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        text-decoration: none;
    }

    .window-action:hover {
        color: #171717;
    }

    .window-body {
        padding: 16px;
    }

    /* Data Table */
    .data-table {
        width: 100%;
        border-collapse: collapse;
    }

    .data-table th {
        text-align: left;
        padding: 8px 12px;
        font-size: 10px;
        font-weight: 500;
        color: #a3a3a3;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        border-bottom: 1px solid #e5e5e5;
    }

    .data-table td {
        padding: 10px 12px;
        font-size: 12px;
        border-bottom: 1px solid #e5e5e5;
    }

    .data-table tr:last-child td {
        border-bottom: none;
    }

    .data-table tr:hover td {
        background: #f5f5f5;
    }

    .data-table .name {
        font-weight: 500;
        color: #171717;
    }

    .data-table .email {
        color: #6b6b6b;
        font-size: 11px;
    }

    .data-table .badge {
        display: inline-block;
        padding: 2px 8px;
        border-radius: 3px;
        font-size: 9px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .data-table .badge.new {
        background: #171717;
        color: white;
    }

    .data-table .badge.pending {
        background: #f5f5f5;
        color: #6b6b6b;
    }

    .data-table .badge.done {
        background: #e8f5e9;
        color: #2e7d32;
    }

    /* Two Column Grid */
    .two-col {
        display: grid;
        grid-template-columns: 1.5fr 1fr;
        gap: 20px;
    }

    /* Simple List */
    .simple-list {
        list-style: none;
    }

    .simple-list li {
        padding: 10px 0;
        border-bottom: 1px solid #e5e5e5;
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 12px;
    }

    .simple-list li:last-child {
        border-bottom: none;
    }

    .simple-list .indicator {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #171717;
    }

    .simple-list .indicator.dim {
        background: #a3a3a3;
    }

    .simple-list .title {
        flex: 1;
        color: #171717;
    }

    .simple-list .meta {
        color: #a3a3a3;
        font-size: 11px;
    }

    /* Footer */
    .footer {
        margin-top: 40px;
        background: linear-gradient(135deg, #0f0f23 0%, #1a1a2e 50%, #16213e 100%);
        border-radius: 12px;
        overflow: hidden;
        font-family: 'JetBrains Mono', 'Fira Code', 'SF Mono', monospace;
        border: 1px solid rgba(255,255,255,0.1);
        box-shadow: 0 10px 40px rgba(0,0,0,0.3), inset 0 1px 0 rgba(255,255,255,0.05);
        position: relative;
    }

    .footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(39,202,64,0.5), transparent);
    }

    .footer-window {
        background: rgba(0,0,0,0.3);
        padding: 12px 16px;
        display: flex;
        align-items: center;
        gap: 12px;
        border-bottom: 1px solid rgba(255,255,255,0.05);
    }

    .footer-dots {
        display: flex;
        gap: 6px;
    }

    .footer-dot {
        width: 11px;
        height: 11px;
        border-radius: 50%;
        background: #ffffff;
        box-shadow: 0 2px 4px rgba(0,0,0,0.3);
    }

    .footer-dot.close,
    .footer-dot.minimize,
    .footer-dot.maximize {
        background: #ffffff;
    }

    .footer-title {
        font-size: 11px;
        color: #ffffff;
        flex: 1;
        text-align: center;
        letter-spacing: 2px;
        font-weight: 600;
    }

    .footer-body {
        padding: 16px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .footer-prompt {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .footer-prompt .prompt-symbol {
        color: #4ade80;
        font-size: 16px;
        font-weight: 700;
        text-shadow: 0 0 10px rgba(74,222,128,0.5);
    }

    .footer-prompt .prompt-text {
        color: #ffffff;
        font-size: 13px;
        font-weight: 500;
    }

    .footer-prompt .prompt-cursor {
        display: inline-block;
        width: 8px;
        height: 16px;
        background: #4ade80;
        animation: cursor-blink 1s infinite;
        margin-left: 2px;
    }

    @keyframes cursor-blink {
        0%, 50% { opacity: 1; }
        51%, 100% { opacity: 0; }
    }

    .footer-status {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-left: 20px;
    }

    .footer-status .status-indicator {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #4ade80;
        box-shadow: 0 0 8px rgba(74,222,128,0.6);
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0%, 100% { box-shadow: 0 0 8px rgba(74,222,128,0.6); }
        50% { box-shadow: 0 0 16px rgba(74,222,128,0.9); }
    }

    .footer-status .status-text {
        color: #ffffff;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 1px;
    }

    .footer-info {
        display: flex;
        align-items: center;
        gap: 16px;
    }

    .footer-info span {
        font-size: 11px;
        color: #ffffff;
        font-weight: 500;
    }

    .footer-info .separator {
        color: rgba(255,255,255,0.3);
        font-size: 10px;
    }

    .footer-brand {
        color: #ffffff;
        font-size: 11px;
        font-weight: 500;
        letter-spacing: 0.5px;
    }

    .footer-brand span {
        color: #4ade80;
        font-weight: 700;
    }

    /* Buttons */
    .btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 20px;
        font-family: 'JetBrains Mono', monospace;
        font-size: 13px;
        font-weight: 600;
        border-radius: 6px;
        text-decoration: none;
        transition: all 0.2s;
        border: none;
        cursor: pointer;
    }

    .btn-primary {
        background: #0a0a0a;
        color: #ffffff;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .btn-primary:hover {
        background: #1a1a1a;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        transform: translateY(-1px);
    }

    .btn-secondary {
        background: #2a2a2a;
        color: #888;
        border: 1px solid #333;
    }

    .btn-secondary:hover {
        background: #333;
        color: #fff;
    }

    .btn-sm {
        padding: 6px 12px;
        font-size: 11px;
        cursor: pointer;
    }
    
    /* Table Actions */
    .table-actions {
        display: flex;
        gap: 8px;
        align-items: center;
    }
    
    .table-actions .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    /* Forms */
    .form-group {
        margin-bottom: 16px;
    }

    .form-label {
        display: block;
        font-size: 11px;
        color: #6b6b6b;
        margin-bottom: 6px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .form-input {
        width: 100%;
        padding: 10px 12px;
        font-family: 'JetBrains Mono', monospace;
        font-size: 12px;
        border: 1px solid #e5e5e5;
        border-radius: 6px;
        background: #ffffff;
        color: #171717;
        transition: all 0.2s;
    }

    .form-input:focus {
        outline: none;
        border-color: #171717;
    }

    .form-input::placeholder {
        color: #a3a3a3;
    }

    textarea.form-input {
        min-height: 100px;
        resize: vertical;
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .stats-row {
            grid-template-columns: repeat(2, 1fr);
        }
        .two-col {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .minimal-topbar {
            flex-wrap: wrap;
            height: auto;
            padding: 12px;
            gap: 12px;
        }
        
        .topbar-tabs {
            order: 3;
            width: 100%;
            overflow-x: auto;
        }
        
        .minimal-main {
            padding: 16px;
        }
    }
</style>
@endpush
