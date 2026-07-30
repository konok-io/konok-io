@extends('layouts.blank')

@section('content')
<div class="minimal-wrapper">
    <!-- Top Bar -->
    <div class="minimal-topbar">
        <div class="topbar-brand">
            <div class="topbar-dots">
                <span class="topbar-dot"></span>
                <span class="topbar-dot"></span>
                <span class="topbar-dot"></span>
            </div>
            <span class="topbar-name">KONOK</span>
        </div>

        <div class="topbar-tabs">
            <div class="topbar-tab {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <span class="prefix">01.</span>
                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            </div>
            <div class="topbar-tab {{ request()->routeIs('admin.portfolios.*') ? 'active' : '' }}">
                <span class="prefix">02.</span>
                <a href="{{ route('admin.portfolios.index') }}">Projects</a>
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
            <a href="{{ url('/') }}" target="_blank" class="topbar-search" title="View Website">
                <span>⌘K</span>
                <span>View Site</span>
            </a>
            <div class="topbar-user">
                <div class="topbar-avatar">KO</div>
                <span class="topbar-username">Admin</span>
            </div>
            <form method="POST" action="{{ route('admin.logout') }}" class="logout-form">
                @csrf
                <button type="submit" class="topbar-logout">
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
        background: #fafafa;
        color: #171717;
        min-height: 100vh;
    }

    /* Top Bar - Match site navbar height */
    .minimal-topbar {
        background: #ffffff;
        border-bottom: 1px solid #e5e5e5;
        padding: 0 24px;
        display: flex;
        align-items: center;
        height: 64px;
        position: sticky;
        top: 0;
        z-index: 100;
    }

    .topbar-brand {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-right: 32px;
    }

    .topbar-dots {
        display: flex;
        gap: 5px;
    }

    .topbar-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #232323;
    }

    .topbar-name {
        font-size: 13px;
        font-weight: 600;
        letter-spacing: -0.5px;
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
        gap: 8px;
        font-size: 12px;
        color: #6b6b6b;
        border-bottom: 2px solid transparent;
        transition: all 0.2s;
        text-decoration: none;
    }

    .topbar-tab a {
        color: inherit;
        text-decoration: none;
    }

    .topbar-tab:hover {
        color: #171717;
        background: #f5f5f5;
    }

    .topbar-tab.active {
        color: #2563eb;
        background: #eff6ff;
        border-bottom-color: #2563eb;
    }

    .topbar-tab .prefix {
        color: #a3a3a3;
    }

    .tab-badge {
        background: #171717;
        color: white;
        padding: 2px 6px;
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

    .topbar-search {
        display: flex;
        align-items: center;
        gap: 8px;
        background: #f5f5f5;
        border: 1px solid #e5e5e5;
        padding: 6px 12px;
        font-size: 11px;
        color: #a3a3a3;
        border-radius: 4px;
        text-decoration: none;
        transition: all 0.2s;
    }

    .topbar-search:hover {
        background: #e5e5e5;
        color: #171717;
    }

    .topbar-user {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .topbar-avatar {
        width: 28px;
        height: 28px;
        border-radius: 4px;
        background: #171717;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 10px;
        font-weight: 600;
    }

    .topbar-username {
        font-size: 11px;
        color: #6b6b6b;
    }

    .logout-form {
        margin: 0;
    }

    .topbar-logout {
        display: flex;
        align-items: center;
        gap: 6px;
        background: #f5f5f5;
        border: 1px solid #e5e5e5;
        padding: 6px 12px;
        font-size: 11px;
        color: #6b6b6b;
        border-radius: 4px;
        cursor: pointer;
        font-family: 'IBM Plex Mono', 'JetBrains Mono', monospace;
        transition: all 0.2s;
    }

    .topbar-logout:hover {
        background: #fee2e2;
        border-color: #ef4444;
        color: #ef4444;
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
        margin-top: 32px;
        padding: 16px 20px;
        background: #f5f5f5;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-size: 11px;
        color: #a3a3a3;
    }

    .footer-status {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .footer-status .dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #22c55e;
    }

    .footer-center {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .footer-center .separator {
        color: #d1d5db;
    }

    /* Buttons */
    .btn {
        display: inline-block;
        padding: 8px 16px;
        font-family: 'JetBrains Mono', monospace;
        font-size: 12px;
        border-radius: 6px;
        text-decoration: none;
        transition: all 0.2s;
    }

    .btn-primary {
        background: #171717;
        color: white;
    }

    .btn-primary:hover {
        background: #404040;
    }

    .btn-secondary {
        background: #f5f5f5;
        color: #171717;
        border: 1px solid #e5e5e5;
    }

    .btn-secondary:hover {
        background: #e5e5e5;
    }

    .btn-sm {
        padding: 6px 12px;
        font-size: 11px;
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
