@extends('admin.layout-minimal')

@section('page-title', 'contacts')

@section('admin-content')
<!-- Section Header -->
<div class="section-header">
    <div class="section-label">// Contact Details</div>
    <h1 class="section-title">View Contact</h1>
</div>

<div class="window-card">
    <div class="window-header">
        <div class="window-dots">
            <span class="window-dot"></span>
        </div>
        <span class="window-title">contact-{{ $contact->id }}.json</span>
        <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary btn-sm" style="margin-left: auto;">← Back</a>
    </div>
    <div class="window-body">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
            <div class="form-group">
                <label class="form-label">// name</label>
                <div style="padding: 10px 0; font-size: 14px;">{{ $contact->name }}</div>
            </div>
            <div class="form-group">
                <label class="form-label">// email</label>
                <div style="padding: 10px 0; font-size: 14px;">{{ $contact->email }}</div>
            </div>
            <div class="form-group">
                <label class="form-label">// subject</label>
                <div style="padding: 10px 0; font-size: 14px;">{{ $contact->subject ?? '-' }}</div>
            </div>
            <div class="form-group">
                <label class="form-label">// status</label>
                <div style="padding: 10px 0; font-size: 14px;">
                    @if($contact->status === 'new')
                        <span class="badge new">New</span>
                    @elseif($contact->status === 'read')
                        <span class="badge done">Read</span>
                    @else
                        <span class="badge pending">Pending</span>
                    @endif
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="form-label">// message</label>
            <div style="padding: 12px; background: #f5f5f5; border-radius: 6px; font-size: 13px; line-height: 1.6; white-space: pre-wrap;">{{ $contact->message }}</div>
        </div>
        <div class="form-group">
            <label class="form-label">// received_at</label>
            <div style="padding: 10px 0; font-size: 14px; color: #a3a3a3;">{{ $contact->created_at->format('M d, Y - H:i') }}</div>
        </div>
        
        @if($contact->status === 'new')
        <form action="{{ route('admin.contacts.read', $contact->id) }}" method="POST" style="margin-top: 20px;">
            @csrf
            <button type="submit" class="btn btn-primary">Mark as Read</button>
        </form>
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
