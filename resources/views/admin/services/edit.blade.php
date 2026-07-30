@extends('admin.layout-minimal')

@section('page-title', 'services')

@section('admin-content')
<!-- Section Header -->
<div class="section-header">
    <div class="section-label">// Edit Service</div>
    <h1 class="section-title">Edit Service</h1>
</div>

<div class="window-card">
    <div class="window-header">
        <div class="window-dots">
            <span class="window-dot"></span>
        </div>
        <span class="window-title">edit-service.json</span>
    </div>
    <div class="window-body">
        <form action="{{ route('admin.services.update', ['service' => $service->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="form-label">// title</label>
                <input type="text" name="title" class="form-input" value="{{ $service->title }}" required>
            </div>
            <div class="form-group">
                <label class="form-label">// slug</label>
                <input type="text" name="slug" class="form-input" value="{{ $service->slug }}">
            </div>
            <div class="form-group">
                <label class="form-label">// icon</label>
                <input type="text" name="icon" class="form-input" value="{{ $service->icon }}">
            </div>
            <div class="form-group">
                <label class="form-label">// description</label>
                <textarea name="description" class="form-input" rows="4">{{ $service->description }}</textarea>
            </div>
            <div class="form-actions">
                <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Update Service</button>
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
