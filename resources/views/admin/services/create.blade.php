@extends('admin.layout-minimal')

@section('page-title', 'services')

@section('admin-content')
<!-- Section Header -->
<div class="section-header">
    <div class="section-label">// New Service</div>
    <h1 class="section-title">Create Service</h1>
</div>

<div class="window-card">
    <div class="window-header">
        <div class="window-dots">
            <span class="window-dot"></span>
        </div>
        <span class="window-title">new-service.json</span>
    </div>
    <div class="window-body">
        @if ($errors->any())
            <div style="background: #fee2e2; border: 1px solid #ef4444; border-radius: 6px; padding: 12px; margin-bottom: 16px;">
                <ul style="margin: 0; padding-left: 20px; color: #dc2626; font-size: 12px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('admin.services.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="form-label">// title</label>
                <input type="text" name="title" class="form-input" placeholder="Service title" value="{{ old('title') }}" required>
            </div>
            <div class="form-group">
                <label class="form-label">// icon</label>
                <input type="text" name="icon" class="form-input" placeholder="Icon class or emoji" value="{{ old('icon') }}">
            </div>
            <div class="form-group">
                <label class="form-label">// description</label>
                <textarea name="description" class="form-input" rows="4" placeholder="Service description" required>{{ old('description') }}</textarea>
            </div>
            <div class="form-group">
                <label class="form-label">// status</label>
                <select name="status" class="form-input" required>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
            <div class="form-actions">
                <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Save Service</button>
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
