@extends('admin.layout-minimal')

@section('page-title', 'contacts')

@section('admin-content')
<!-- Section Header -->
<div class="section-header">
    <div class="section-label">// Contact Messages</div>
    <h1 class="section-title">All Contacts</h1>
</div>

<div class="window-card">
    <div class="window-header">
        <div class="window-dots">
            <span class="window-dot"></span>
        </div>
        <span class="window-title">contacts.json</span>
    </div>
    <div class="window-body" style="padding: 0;">
        @if($contacts->isEmpty())
            <p style="text-align: center; padding: 40px; color: #a3a3a3;">No contacts found.</p>
        @else
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                    <tr>
                        <td class="name">{{ $contact->name }}</td>
                        <td class="email">{{ $contact->email }}</td>
                        <td>{{ $contact->subject ?? '-' }}</td>
                        <td>
                            @if($contact->status === 'new')
                                <span class="badge new">New</span>
                            @elseif($contact->status === 'read')
                                <span class="badge done">Read</span>
                            @else
                                <span class="badge pending">Pending</span>
                            @endif
                        </td>
                        <td>{{ $contact->created_at->format('M d, Y') }}</td>
                        <td>
                            <div style="display: flex; gap: 8px;">
                                <a href="{{ route('admin.contacts.show', $contact->id) }}" class="btn btn-secondary btn-sm">View</a>
                                <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Delete this contact?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-secondary btn-sm" style="color: #ef4444;">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
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
