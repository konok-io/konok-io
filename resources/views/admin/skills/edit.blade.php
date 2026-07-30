@extends('admin.layout-minimal')

@section('page-title', 'skills')

@section('admin-content')
<!-- Section Header -->
<div class="section-header">
    <div class="section-label">// Edit Skill</div>
    <h1 class="section-title">Edit Skill</h1>
</div>

<div class="window-card">
    <div class="window-header">
        <div class="window-dots">
            <span class="window-dot"></span>
        </div>
        <span class="window-title">edit-skill.json</span>
    </div>
    <div class="window-body">
        <form action="{{ route('admin.skills.update', $skill->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="form-label">// name</label>
                <input type="text" name="name" class="form-input" value="{{ $skill->name }}" required>
            </div>
            <div class="form-group">
                <label class="form-label">// percentage (0-100)</label>
                <input type="number" name="percentage" class="form-input" min="0" max="100" value="{{ $skill->percentage }}" required>
            </div>
            <div class="form-actions">
                <a href="{{ route('admin.skills.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Update Skill</button>
            </div>
        </form>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    <div class="footer-status">
        <span class="dot"></span>
        <span>System Online</span>
    </div>
    <span>Version 1.0.4</span>
    <span>© {{ date('Y') }} KONOK.IO</span>
</div>
@endsection
