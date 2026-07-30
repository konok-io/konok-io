@extends('admin.layout-minimal')

@section('page-title', 'dashboard')

@section('admin-content')
<!-- Section Header -->
<div class="section-header">
    <div class="section-label">// Overview</div>
    <h1 class="section-title">Dashboard</h1>
</div>

<!-- Stats Row -->
<div class="stats-row">
    <div class="stat-card">
        <div class="stat-card-header">
            <div class="stat-card-dots">
                <span class="stat-card-dot"></span>
                <span class="stat-card-dot"></span>
                <span class="stat-card-dot"></span>
            </div>
            <span class="stat-card-title">Projects</span>
        </div>
        <div class="stat-card-body">
            <div class="stat-card-value">{{ $stats['total_portfolios'] }}</div>
            <div class="stat-card-label">Total Projects</div>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-card-header">
            <div class="stat-card-dots">
                <span class="stat-card-dot"></span>
                <span class="stat-card-dot"></span>
                <span class="stat-card-dot"></span>
            </div>
            <span class="stat-card-title">Published</span>
        </div>
        <div class="stat-card-body">
            <div class="stat-card-value">{{ $stats['published_portfolios'] }}</div>
            <div class="stat-card-label">Live Sites</div>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-card-header">
            <div class="stat-card-dots">
                <span class="stat-card-dot"></span>
                <span class="stat-card-dot"></span>
                <span class="stat-card-dot"></span>
            </div>
            <span class="stat-card-title">Services</span>
        </div>
        <div class="stat-card-body">
            <div class="stat-card-value">{{ $stats['total_services'] }}</div>
            <div class="stat-card-label">Active Services</div>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-card-header">
            <div class="stat-card-dots">
                <span class="stat-card-dot"></span>
                <span class="stat-card-dot"></span>
                <span class="stat-card-dot"></span>
            </div>
            <span class="stat-card-title">Contacts</span>
        </div>
        <div class="stat-card-body">
            <div class="stat-card-value">{{ $stats['total_contacts'] }}</div>
            <div class="stat-card-label">Messages</div>
        </div>
    </div>
</div>

<!-- Duck Mode Cards -->
<div class="stats-row">
    <div class="duck-card">
        <div class="duck-card-window">
            <div class="duck-card-dots">
                <span class="duck-card-dot"></span>
                <span class="duck-card-dot"></span>
                <span class="duck-card-dot"></span>
            </div>
            <span class="duck-card-title">system-info.json</span>
        </div>
        <div class="duck-card-body">
            <div class="duck-card-prompt">
                <span class="duck-card-symbol">❯</span>
                <span class="duck-card-path">konok@admin:~$</span>
                <span class="duck-card-cursor"></span>
            </div>
            <div class="duck-card-status">
                <span class="duck-card-indicator"></span>
                <span class="duck-card-status-text">System Online</span>
            </div>
            <div class="duck-card-info">
                <span>❯ v1.0.4</span>
                <span>❯ © {{ date('Y') }} KONOK.IO</span>
            </div>
        </div>
    </div>

    <div class="duck-card">
        <div class="duck-card-window">
            <div class="duck-card-dots">
                <span class="duck-card-dot"></span>
                <span class="duck-card-dot"></span>
                <span class="duck-card-dot"></span>
            </div>
            <span class="duck-card-title">quick-stats.json</span>
        </div>
        <div class="duck-card-body">
            <div class="duck-card-prompt">
                <span class="duck-card-symbol">❯</span>
                <span class="duck-card-path">konok@admin:~$</span>
                <span class="duck-card-cursor"></span>
            </div>
            <div class="duck-card-status">
                <span class="duck-card-indicator"></span>
                <span class="duck-card-status-text">All Systems Operational</span>
            </div>
            <div class="duck-card-info">
                <span>❯ {{ $stats['total_portfolios'] }} Projects</span>
                <span>❯ {{ $stats['total_services'] }} Services</span>
            </div>
        </div>
    </div>
</div>

<!-- Two Column -->
<div class="two-col">
    <!-- Recent Contacts -->
    <div class="window-card">
        <div class="window-header dark-header">
            <div class="window-dots">
                <span class="window-dot"></span>
                <span class="window-dot"></span>
                <span class="window-dot"></span>
            </div>
            <span class="window-title">recent-contacts.json</span>
            <a href="{{ route('admin.contacts.index') }}" class="window-action">View All</a>
        </div>
        <div class="window-body">
            @if($recentContacts->isEmpty())
                <p style="color: #a3a3a3; font-size: 12px; text-align: center; padding: 20px;">No contacts found</p>
            @else
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recentContacts as $contact)
                        <tr>
                            <td class="name">{{ $contact->name }}</td>
                            <td class="email">{{ $contact->email }}</td>
                            <td>
                                @if($contact->status === 'new')
                                    <span class="badge new">New</span>
                                @elseif($contact->status === 'read')
                                    <span class="badge done">Replied</span>
                                @else
                                    <span class="badge pending">Pending</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="window-card">
        <div class="window-header dark-header">
            <div class="window-dots">
                <span class="window-dot"></span>
                <span class="window-dot"></span>
                <span class="window-dot"></span>
            </div>
            <span class="window-title">activity.log</span>
        </div>
        <div class="window-body">
            <ul class="simple-list">
                <li>
                    <span class="indicator"></span>
                    <span class="title">E-commerce project deployed</span>
                    <span class="meta">2h</span>
                </li>
                <li>
                    <span class="indicator"></span>
                    <span class="title">New contact: {{ $recentContacts->first()->name ?? 'Guest' }}</span>
                    <span class="meta">2h</span>
                </li>
                <li>
                    <span class="indicator dim"></span>
                    <span class="title">Portfolio V2 updated</span>
                    <span class="meta">5h</span>
                </li>
                <li>
                    <span class="indicator dim"></span>
                    <span class="title">Service section modified</span>
                    <span class="meta">1d</span>
                </li>
                <li>
                    <span class="indicator dim"></span>
                    <span class="title">Contact reply sent</span>
                    <span class="meta">1d</span>
                </li>
            </ul>
        </div>
    </div>
</div>

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
            <span>v1.0.4</span>
            <span class="separator">•</span>
            <span class="footer-brand"><span>©</span> {{ date('Y') }} KONOK.IO</span>
        </div>
    </div>
</div>
@endsection
