@extends('admin.layout')

@section('page-title', 'Dashboard')

@section('admin-content')
<div class="dashboard">
    <!-- Stats Grid -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon">💼</div>
            <div class="stat-info">
                <span class="stat-value">{{ $stats['total_portfolios'] }}</span>
                <span class="stat-label">Total Portfolios</span>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-icon">✅</div>
            <div class="stat-info">
                <span class="stat-value">{{ $stats['published_portfolios'] }}</span>
                <span class="stat-label">Published</span>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-icon">🛠️</div>
            <div class="stat-info">
                <span class="stat-value">{{ $stats['total_services'] }}</span>
                <span class="stat-label">Services</span>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-icon">📧</div>
            <div class="stat-info">
                <span class="stat-value">{{ $stats['total_contacts'] }}</span>
                <span class="stat-label">Total Contacts</span>
            </div>
        </div>
        
        <div class="stat-card stat-highlight">
            <div class="stat-icon">🔔</div>
            <div class="stat-info">
                <span class="stat-value">{{ $stats['unread_contacts'] }}</span>
                <span class="stat-label">Unread Messages</span>
            </div>
        </div>
    </div>
    
    <!-- Content Grid -->
    <div class="content-grid">
        <!-- Recent Contacts -->
        <div class="content-card">
            <div class="card-header">
                <h3>Recent Contacts</h3>
                <a href="{{ route('admin.contacts.index') }}" class="card-link">View All →</a>
            </div>
            <div class="card-body">
                @if($recentContacts->isEmpty())
                    <p class="empty-state">No contacts yet</p>
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
                                        <span class="status-badge new">New</span>
                                    @else
                                        <span class="status-badge read">Read</span>
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
                <h3>Recent Portfolios</h3>
                <a href="{{ route('admin.portfolios.index') }}" class="card-link">View All →</a>
            </div>
            <div class="card-body">
                @if($recentPortfolios->isEmpty())
                    <p class="empty-state">No portfolios yet</p>
                @else
                    <ul class="portfolio-list">
                        @foreach($recentPortfolios as $portfolio)
                            <li class="portfolio-item">
                                <div class="portfolio-info">
                                    <span class="portfolio-title">{{ $portfolio->title }}</span>
                                    <span class="portfolio-category">{{ $portfolio->category ?? 'Uncategorized' }}</span>
                                </div>
                                <div class="portfolio-meta">
                                    @if($portfolio->status === 'published')
                                        <span class="status-badge published">Published</span>
                                    @else
                                        <span class="status-badge draft">Draft</span>
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
    
    /* Stats Grid */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: var(--space-lg);
        margin-bottom: var(--space-xl);
    }
    
    .stat-card {
        background: var(--terminal-bg-secondary);
        border: 1px solid var(--terminal-border);
        border-radius: 8px;
        padding: var(--space-lg);
        display: flex;
        align-items: center;
        gap: var(--space-md);
    }
    
    .stat-card.stat-highlight {
        border-color: var(--terminal-accent);
        background: rgba(245, 158, 11, 0.05);
    }
    
    .stat-icon {
        font-size: 2rem;
    }
    
    .stat-info {
        display: flex;
        flex-direction: column;
    }
    
    .stat-value {
        font-family: var(--font-mono);
        font-size: 1.75rem;
        font-weight: 700;
        color: var(--terminal-text);
    }
    
    .stat-label {
        font-size: 0.85rem;
        color: var(--terminal-text-muted);
    }
    
    /* Content Grid */
    .content-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
        gap: var(--space-lg);
    }
    
    .content-card {
        background: var(--terminal-bg-secondary);
        border: 1px solid var(--terminal-border);
        border-radius: 8px;
        overflow: hidden;
    }
    
    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: var(--space-md) var(--space-lg);
        border-bottom: 1px solid var(--terminal-border);
        background: rgba(0, 0, 0, 0.2);
    }
    
    .card-header h3 {
        font-family: var(--font-mono);
        font-size: 1rem;
        font-weight: 600;
        color: var(--terminal-text);
        margin: 0;
    }
    
    .card-link {
        font-family: var(--font-mono);
        font-size: 0.8rem;
        color: var(--terminal-accent);
        text-decoration: none;
    }
    
    .card-link:hover {
        color: var(--terminal-syntax-green);
    }
    
    .card-body {
        padding: var(--space-md);
    }
    
    .empty-state {
        text-align: center;
        padding: var(--space-xl);
        color: var(--terminal-text-muted);
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
        border-bottom: 1px solid var(--terminal-border);
        transition: background 0.2s ease;
    }
    
    .contact-item:last-child, .portfolio-item:last-child {
        border-bottom: none;
    }
    
    .contact-item:hover, .portfolio-item:hover {
        background: rgba(245, 158, 11, 0.05);
    }
    
    .contact-info, .portfolio-info {
        display: flex;
        flex-direction: column;
        gap: 2px;
    }
    
    .contact-name, .portfolio-title {
        font-family: var(--font-mono);
        font-size: 0.9rem;
        color: var(--terminal-text);
    }
    
    .contact-email, .portfolio-category {
        font-size: 0.75rem;
        color: var(--terminal-text-muted);
    }
    
    .contact-meta {
        display: flex;
        align-items: center;
        gap: var(--space-sm);
    }
    
    .status-badge {
        font-family: var(--font-mono);
        font-size: 0.7rem;
        padding: 2px 8px;
        border-radius: 4px;
    }
    
    .status-badge.new {
        background: rgba(239, 68, 68, 0.2);
        color: #ef4444;
    }
    
    .status-badge.read, .status-badge.published {
        background: rgba(34, 197, 94, 0.2);
        color: #22c55e;
    }
    
    .status-badge.draft {
        background: rgba(245, 158, 11, 0.2);
        color: var(--terminal-accent);
    }
    
    .contact-date {
        font-size: 0.75rem;
        color: var(--terminal-text-muted);
    }
</style>
@endpush
