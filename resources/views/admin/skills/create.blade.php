@extends('admin.layout-minimal')

@section('page-title', 'skills')

@section('admin-content')
<!-- Section Header -->
<div class="section-header">
    <div class="section-label">// New Skill</div>
    <h1 class="section-title">Create Skill</h1>
</div>

<div class="window-card">
    <div class="window-header">
        <div class="window-dots">
            <span class="window-dot"></span>
        </div>
        <span class="window-title">new-skill.json</span>
    </div>
    <div class="window-body">
        <form action="{{ route('admin.skills.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="form-label">// name</label>
                <input type="text" name="name" class="form-input" placeholder="Skill name" required>
            </div>
            <div class="form-group">
                <label class="form-label">// percentage (0-100)</label>
                <input type="number" name="percentage" class="form-input" min="0" max="100" placeholder="85" required>
            </div>
            <div class="form-actions">
                <a href="{{ route('admin.skills.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Save Skill</button>
            </div>
        </form>
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
