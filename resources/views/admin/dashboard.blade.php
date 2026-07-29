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
                <pre style="font-family: var(--font-mono); font-size: 0.85rem; line-height: 1.6; margin: 0;"><code><span style="color: var(--terminal-syntax-purple);">$</span> <span style="color: var(--admin-text);">./dashboard.sh</span>
<span style="color: var(--terminal-syntax-green);">✓</span> <span style="color: var(--admin-text-secondary);">Loading dashboard data...</span>
<span style="color: var(--terminal-syntax-green);">✓</span> <span style="color: var(--admin-text-secondary);">System ready</span></code></pre>
            </div>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon">💼</div>
            <div class="stat-info">
                <span class="stat-value">{{ $stats['total_portfolios'] }}</span>
                <span class="stat-label">// total_portfolios</span>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-icon">✅</div>
            <div class="stat-info">
                <span class="stat-value">{{ $stats['published_portfolios'] }}</span>
                <span class="stat-label">// published</span>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-icon">🛠️</div>
            <div class="stat-info">
                <span class="stat-value">{{ $stats['total_services'] }}</span>
                <span class="stat-label">// services</span>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-icon">📧</div>
            <div class="stat-info">
                <span class="stat-value">{{ $stats['total_contacts'] }}</span>
                <span class="stat-label">// total_contacts</span>
            </div>
        </div>
        
        <div class="stat-card stat-highlight">
            <div class="stat-icon">🔔</div>
            <div class="stat-info">
                <span class="stat-value">{{ $stats['unread_contacts'] }}</span>
                <span class="stat-label">// unread_messages</span>
            </div>
        </div>
    </div>
    
    <!-- Content Grid -->
    <div class="content-grid">
        <!-- Recent Contacts -->
        <div class="content-card">
            <div class="card-header">
                <h3><span style="color: var(--terminal-syntax-purple);">$</span> recent_contacts</h3>
                <a href="{{ route('admin.contacts.index') }}" class="card-link">&gt; view_all</a>
            </div>
            <div class="card-body">
                @if($recentContacts->isEmpty())
                    <div class="empty-terminal">
                        <span style="color: var(--admin-text-muted);">// No contacts yet</span>
                    </div>
                @else
                    <ul class="contact-list">
                        @foreach($recentContacts as $contact)
                            <li class="contact-item">
                                <div class="contact-info">
                                    <span class="contact-name">{{ $contact->name }}</span>
                                    <span class="contact-email">{{ $contact->email }}</span>
                                </div>
                                <div class="contact-meta">
                                    @if($contact->status === 'new')
                                        <span class="status-badge new">NEW</span>
                                    @else
                                        <span class="status-badge read">READ</span>
                                    @endif
                                    <span class="contact-date">{{ $contact->created_at->diffForHumans() }}</span>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
        
        <!-- Recent Portfolios -->
        <div class="content-card">
            <div class="card-header">
                <h3><span style="color: var(--terminal-syntax-purple);">$</span> recent_portfolios</h3>
                <a href="{{ route('admin.portfolios.index') }}" class="card-link">&gt; view_all</a>
            </div>
            <div class="card-body">
                @if($recentPortfolios->isEmpty())
                    <div class="empty-terminal">
                        <span style="color: var(--admin-text-muted);">// No portfolios yet</span>
                    </div>
                @else
                    <ul class="portfolio-list">
                        @foreach($recentPortfolios as $portfolio)
                            <li class="portfolio-item">
                                <div class="portfolio-info">
                                    <span class="portfolio-title">{{ $portfolio->title }}</span>
                                    <span class="portfolio-category">{{ $portfolio->category ?? 'uncategorized' }}</span>
                                </div>
                                <div class="portfolio-meta">
                                    @if($portfolio->status === 'published')
                                        <span class="status-badge published">PUBLISHED</span>
                                    @else
                                        <span class="status-badge draft">DRAFT</span>
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
@endsection

@push('styles')
<style>
    .dashboard {
        max-width: 1400px;
    }
    
    /* Dashboard Header */
    .dashboard-header {
        margin-bottom: var(--space-lg);
    }
    
    /* Stats Grid */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: var(--space-md);
        margin-bottom: var(--space-xl);
    }
    
    .stat-card {
        background: #ffffff;
        border: 1px solid var(--admin-content-border);
        border-radius: 8px;
        padding: var(--space-md);
        display: flex;
        align-items: center;
        gap: var(--space-md);
        transition: all 0.2s ease;
    }
    
    .stat-card:hover {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
    
    .stat-card.stat-highlight {
        border-color: var(--terminal-accent);
        background: rgba(37, 99, 235, 0.05);
    }
    
    .stat-icon {
        font-size: 1.5rem;
    }
    
    .stat-info {
        display: flex;
        flex-direction: column;
    }
    
    .stat-value {
        font-family: var(--font-mono);
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--admin-content-text);
    }
    
    .stat-label {
        font-family: var(--font-mono);
        font-size: 0.7rem;
        color: var(--admin-content-text-secondary);
    }
    
    /* Content Grid */
    .content-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: var(--space-lg);
    }
    
    .content-card {
        background: #ffffff;
        border: 1px solid var(--admin-content-border);
        border-radius: 8px;
        overflow: hidden;
    }
    
    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: var(--space-sm) var(--space-md);
        border-bottom: 1px solid var(--admin-content-border);
        background: #f8f9fc;
    }
    
    .card-header h3 {
        font-family: var(--font-mono);
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--admin-content-text);
        margin: 0;
    }
    
    .card-link {
        font-family: var(--font-mono);
        font-size: 0.75rem;
        color: var(--terminal-accent);
        text-decoration: none;
        transition: color 0.2s ease;
    }
    
    .card-link:hover {
        color: var(--terminal-syntax-green);
    }
    
    .card-body {
        padding: var(--space-sm);
    }
    
    .empty-terminal {
        text-align: center;
        padding: var(--space-xl);
        font-family: var(--font-mono);
    }
    
    /* Contact List */
    .contact-list, .portfolio-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .contact-item, .portfolio-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: var(--space-sm) var(--space-md);
        border-bottom: 1px solid var(--admin-content-border);
        transition: background 0.2s ease;
    }
    
    .contact-item:last-child, .portfolio-item:last-child {
        border-bottom: none;
    }
    
    .contact-item:hover, .portfolio-item:hover {
        background: #f8f9fc;
    }
    
    .contact-info, .portfolio-info {
        display: flex;
        flex-direction: column;
        gap: 2px;
    }
    
    .contact-name, .portfolio-title {
        font-family: var(--font-mono);
        font-size: 0.85rem;
        color: var(--admin-content-text);
    }
    
    .contact-email, .portfolio-category {
        font-family: var(--font-mono);
        font-size: 0.7rem;
        color: var(--admin-content-text-secondary);
    }
    
    .contact-meta {
        display: flex;
        align-items: center;
        gap: var(--space-sm);
    }
    
    .status-badge {
        font-family: var(--font-mono);
        font-size: 0.6rem;
        padding: 2px 6px;
        border-radius: 3px;
        font-weight: 600;
    }
    
    .status-badge.new {
        background: rgba(239, 68, 68, 0.1);
        color: #ef4444;
    }
    
    .status-badge.read, .status-badge.published {
        background: rgba(34, 197, 94, 0.1);
        color: #22c55e;
    }
    
    .status-badge.draft {
        background: rgba(245, 158, 11, 0.1);
        color: var(--terminal-accent);
    }
    
    .contact-date {
        font-family: var(--font-mono);
        font-size: 0.7rem;
        color: var(--admin-content-text-secondary);
    }
</style>
@endpush
