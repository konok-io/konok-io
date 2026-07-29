@extends('admin.layout')

@section('page-title', 'dashboard')

@section('admin-content')
<div class="dashboard">
    <!-- Terminal Header -->
    <div class="dashboard-header">
        <div class="terminal-window">
            <div class="terminal-titlebar">
                <div class="terminal-dots">
                    <span class="terminal-dot red"></span>
                    <span class="terminal-dot yellow"></span>
                    <span class="terminal-dot green"></span>
                </div>
                <span class="terminal-path">dashboard.blade.php</span>
            </div>
            <div class="terminal-content">
                <pre style="font-family: var(--font-mono); font-size: 0.8rem; line-height: 1.6; margin: 0; padding: var(--space-md);"><code><span style="color: var(--admin-accent);">$</span> <span style="color: var(--admin-content-text);">./dashboard.blade.php</span>
<span style="color: #22c55e;">✓</span> <span style="color: var(--admin-content-text-secondary);">Loading system metrics...</span>
<span style="color: #22c55e;">✓</span> <span style="color: var(--admin-content-text-secondary);">Connected to database</span>
<span style="color: #22c55e;">✓</span> <span style="color: var(--admin-content-text-secondary);">Ready</span> <span style="color: var(--admin-content-text-muted);">_</span></code></pre>
            </div>
        </div>
    </div>

    <!-- Stats Grid - Terminal Style -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-card-header">
                <div class="terminal-dots-mini">
                    <span class="dot red"></span>
                    <span class="dot yellow"></span>
                    <span class="dot green"></span>
                </div>
                <span class="stat-file">stats/portfolios.blade.php</span>
            </div>
            <div class="stat-card-body">
                <div class="stat-icon-wrapper">
                    <span class="stat-icon">{...}</span>
                </div>
                <div class="stat-info">
                    <span class="stat-value">{{ $stats['total_portfolios'] }}</span>
                    <span class="stat-label">// total_projects</span>
                </div>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-card-header">
                <div class="terminal-dots-mini">
                    <span class="dot red"></span>
                    <span class="dot yellow"></span>
                    <span class="dot green"></span>
                </div>
                <span class="stat-file">stats/published.blade.php</span>
            </div>
            <div class="stat-card-body">
                <div class="stat-icon-wrapper success">
                    <span class="stat-icon">✓</span>
                </div>
                <div class="stat-info">
                    <span class="stat-value">{{ $stats['published_portfolios'] }}</span>
                    <span class="stat-label">// published</span>
                </div>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-card-header">
                <div class="terminal-dots-mini">
                    <span class="dot red"></span>
                    <span class="dot yellow"></span>
                    <span class="dot green"></span>
                </div>
                <span class="stat-file">stats/services.blade.php</span>
            </div>
            <div class="stat-card-body">
                <div class="stat-icon-wrapper warning">
                    <span class="stat-icon">⚙</span>
                </div>
                <div class="stat-info">
                    <span class="stat-value">{{ $stats['total_services'] }}</span>
                    <span class="stat-label">// services</span>
                </div>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-card-header">
                <div class="terminal-dots-mini">
                    <span class="dot red"></span>
                    <span class="dot yellow"></span>
                    <span class="dot green"></span>
                </div>
                <span class="stat-file">stats/contacts.blade.php</span>
            </div>
            <div class="stat-card-body">
                <div class="stat-icon-wrapper">
                    <span class="stat-icon">@</span>
                </div>
                <div class="stat-info">
                    <span class="stat-value">{{ $stats['total_contacts'] }}</span>
                    <span class="stat-label">// total_contacts</span>
                </div>
            </div>
        </div>
        
        <div class="stat-card stat-alert">
            <div class="stat-card-header">
                <div class="terminal-dots-mini">
                    <span class="dot red"></span>
                    <span class="dot yellow"></span>
                    <span class="dot green"></span>
                </div>
                <span class="stat-file">stats/unread.blade.php</span>
            </div>
            <div class="stat-card-body">
                <div class="stat-icon-wrapper danger">
                    <span class="stat-icon">!</span>
                </div>
                <div class="stat-info">
                    <span class="stat-value">{{ $stats['unread_contacts'] }}</span>
                    <span class="stat-label">// unread_messages</span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Content Grid -->
    <div class="content-grid">
        <!-- Recent Contacts -->
        <div class="content-card">
            <div class="terminal-window" style="margin: 0;">
                <div class="terminal-titlebar">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="terminal-path">partials/recent-contacts.blade.php</span>
                    <a href="{{ route('admin.contacts.index') }}" class="terminal-action">&gt; view_all</a>
                </div>
                <div class="terminal-content" style="max-height: 180px; overflow-y: auto;">
                    @if($recentContacts->isEmpty())
                        <div class="terminal-empty">
                            <span style="color: var(--admin-content-text-muted);"># No contacts found</span>
                        </div>
                    @else
                        <ul class="data-list compact">
                            @foreach($recentContacts as $contact)
                                <li class="data-item compact">
                                    <div class="data-row">
                                        <span class="data-name">{{ $contact->name }}</span>
                                        <span class="data-email">{{ $contact->email }}</span>
                                        @if($contact->status === 'new')
                                            <span class="data-badge new">NEW</span>
                                        @endif
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
        
        <!-- Recent Portfolios -->
        <div class="content-card">
            <div class="terminal-window" style="margin: 0;">
                <div class="terminal-titlebar">
                    <div class="terminal-dots">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                    </div>
                    <span class="terminal-path">partials/recent-portfolios.blade.php</span>
                    <a href="{{ route('admin.portfolios.index') }}" class="terminal-action">&gt; view_all</a>
                </div>
                <div class="terminal-content" style="max-height: 180px; overflow-y: auto;">
                    @if($recentPortfolios->isEmpty())
                        <div class="terminal-empty">
                            <span style="color: var(--admin-content-text-muted);"># No portfolios found</span>
                        </div>
                    @else
                        <ul class="data-list compact">
                            @foreach($recentPortfolios as $portfolio)
                                <li class="data-item compact">
                                    <div class="data-row">
                                        <span class="data-name">{{ $portfolio->title }}</span>
                                        @if($portfolio->status === 'published')
                                            <span class="data-badge published">PUBLISHED</span>
                                        @else
                                            <span class="data-badge draft">DRAFT</span>
                                        @endif
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .dashboard {
        max-width: 1400px;
    }
    
    /* Dashboard Header - Main Terminal */
    .dashboard-header {
        margin-bottom: var(--space-lg);
    }
    
    .terminal-window {
        background: #fefefe;
        border: 1px solid var(--admin-content-border);
        border-radius: 8px;
        overflow: hidden;
    }
    
    .terminal-titlebar {
        background: linear-gradient(to bottom, #f8f9fa, #e9ecef);
        padding: 8px 12px;
        display: flex;
        align-items: center;
        gap: 8px;
        border-bottom: 1px solid #dee2e6;
    }
    
    .terminal-dots {
        display: flex;
        gap: 6px;
    }
    
    .terminal-dots .terminal-dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
    }
    
    .terminal-dot.red { background: #ff5f57; }
    .terminal-dot.yellow { background: #ffbd2e; }
    .terminal-dot.green { background: #28c840; }
    .terminal-dot.blue { background: #3b82f6; }
    
    .terminal-path {
        font-family: var(--font-mono);
        font-size: 0.75rem;
        color: #666;
        margin-left: auto;
    }
    
    .terminal-content {
        padding: 0;
    }
    
    .terminal-content pre {
        margin: 0;
        padding: var(--space-md);
    }
    
    /* Stats Grid - Card Style */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: var(--space-md);
        margin-bottom: var(--space-xl);
    }
    
    .stat-card {
        background: #fefefe;
        border: 1px solid var(--admin-content-border);
        border-radius: 8px;
        overflow: hidden;
        transition: all 0.2s ease;
    }
    
    .stat-card:hover {
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
        transform: translateY(-2px);
    }
    
    .stat-card-header {
        background: linear-gradient(to bottom, #f8f9fa, #e9ecef);
        padding: 6px 10px;
        display: flex;
        align-items: center;
        gap: 6px;
        border-bottom: 1px solid #dee2e6;
    }
    
    .terminal-dots-mini {
        display: flex;
        gap: 4px;
    }
    
    .terminal-dots-mini .dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
    }
    
    .terminal-dots-mini .dot.red { background: #ff5f57; }
    .terminal-dots-mini .dot.yellow { background: #ffbd2e; }
    .terminal-dots-mini .dot.green { background: #28c840; }
    .terminal-dots-mini .dot.blue { background: #3b82f6; }
    
    .stat-file {
        font-family: var(--font-mono);
        font-size: 0.65rem;
        color: #888;
    }
    
    .stat-card-body {
        padding: var(--space-md);
        display: flex;
        align-items: center;
        gap: var(--space-md);
    }
    
    .stat-icon-wrapper {
        width: 48px;
        height: 48px;
        border-radius: 8px;
        background: #f5f5f5;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #e5e5e5;
    }
    
    .stat-icon-wrapper.success {
        background: rgba(34, 197, 94, 0.1);
        border-color: rgba(34, 197, 94, 0.3);
    }
    
    .stat-icon-wrapper.warning {
        background: rgba(245, 158, 11, 0.1);
        border-color: rgba(245, 158, 11, 0.3);
    }
    
    .stat-icon-wrapper.warning .stat-icon { color: #f59e0b; }
    
    .stat-icon-wrapper.danger {
        background: rgba(239, 68, 68, 0.1);
        border-color: rgba(239, 68, 68, 0.3);
    }
    
    .stat-icon {
        font-family: var(--font-mono);
        font-size: 1rem;
        font-weight: 700;
        color: #333;
    }
    
    .stat-icon-wrapper.success .stat-icon { color: #22c55e; }
    .stat-icon-wrapper.warning .stat-icon { color: var(--admin-accent); }
    .stat-icon-wrapper.danger .stat-icon { color: #ef4444; }
    
    .stat-info {
        display: flex;
        flex-direction: column;
    }
    
    .stat-value {
        font-family: var(--font-mono);
        font-size: 1.75rem;
        font-weight: 700;
        color: var(--admin-content-text);
        line-height: 1;
    }
    
    .stat-label {
        font-family: var(--font-mono);
        font-size: 0.65rem;
        color: var(--admin-content-text-secondary);
        margin-top: 4px;
    }
    
    .stat-card.stat-alert {
        border-color: rgba(239, 68, 68, 0.3);
    }
    
    .stat-card.stat-alert .stat-card-header {
        background: linear-gradient(to bottom, #fff5f5, #ffe5e5);
    }
    
    /* Content Grid - Terminal Style Lists */
    .content-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: var(--space-lg);
    }
    
    .content-card {
        background: transparent;
        border: 1px solid var(--admin-content-border);
        border-radius: 8px;
        overflow: hidden;
    }
    
    .content-card .terminal-content::-webkit-scrollbar {
        width: 4px;
    }
    
    .content-card .terminal-content::-webkit-scrollbar-track {
        background: transparent;
    }
    
    .content-card .terminal-content::-webkit-scrollbar-thumb {
        background: var(--admin-content-border);
        border-radius: 2px;
    }
    
    .terminal-action {
        font-family: var(--font-mono);
        font-size: 0.7rem;
        color: #3b82f6;
        text-decoration: none;
        margin-left: auto;
        transition: color 0.2s;
    }
    
    .terminal-action:hover {
        color: var(--admin-accent);
    }
    
    .terminal-content {
        padding: 0;
    }
    
    .terminal-empty {
        padding: var(--space-xl);
        text-align: center;
        font-family: var(--font-mono);
        font-size: 0.8rem;
    }
    
    /* Data List - JSON Style */
    .data-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .data-item {
        padding: var(--space-sm) var(--space-md);
        border-bottom: 1px dashed #e5e5e5;
        transition: background 0.2s;
    }
    
    .data-item:last-child {
        border-bottom: none;
    }
    
    .data-item:hover {
        background: #fafafa;
    }
    
    /* Compact List Items */
    .data-item.compact {
        padding: 6px var(--space-md);
    }
    
    .data-list.compact .data-item {
        padding: 6px var(--space-md);
    }
    
    .data-row {
        display: flex;
        align-items: center;
        gap: var(--space-sm);
        font-family: var(--font-mono);
        font-size: 0.75rem;
    }
    
    .data-name {
        color: var(--admin-content-text);
        flex: 1;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    
    .data-email {
        color: var(--admin-content-text-secondary);
        font-size: 0.7rem;
        max-width: 150px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    
    .data-badge {
        font-family: var(--font-mono);
        font-size: 0.6rem;
        padding: 2px 6px;
        border-radius: 3px;
        font-weight: 600;
        flex-shrink: 0;
    }
    
    .data-badge.new {
        background: rgba(239, 68, 68, 0.1);
        color: #ef4444;
    }
    
    .data-badge.published {
        background: rgba(34, 197, 94, 0.1);
        color: #22c55e;
    }
    
    .data-badge.draft {
        background: rgba(245, 158, 11, 0.1);
        color: var(--admin-accent);
    }
    
    .data-info {
        display: flex;
        gap: 6px;
        font-family: var(--font-mono);
        font-size: 0.75rem;
        margin-bottom: 2px;
    }
    
    .data-key {
        color: #888;
    }
    
    .data-value {
        color: var(--admin-content-text);
    }
    
    .data-meta {
        display: flex;
        align-items: center;
        gap: var(--space-sm);
        margin-top: 4px;
    }
    
    .data-status {
        font-family: var(--font-mono);
        font-size: 0.65rem;
        font-weight: 600;
    }
    
    .data-time {
        font-family: var(--font-mono);
        font-size: 0.65rem;
        color: #888;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .content-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endpush
