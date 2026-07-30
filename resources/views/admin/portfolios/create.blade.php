@extends('admin.layout-minimal')

@section('page-title', 'projects')

@section('admin-content')
<!-- Section Header -->
<div class="section-header">
    <div class="section-label">// New Project</div>
    <h1 class="section-title">Create Project</h1>
</div>

<div class="window-card">
    <div class="window-header">
        <div class="window-dots">
            <span class="window-dot"></span>
        </div>
        <span class="window-title">new-project.json</span>
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
        
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="form-label">// title</label>
                <input type="text" name="title" class="form-input" placeholder="Project title" value="{{ old('title') }}" required>
            </div>
            <div class="form-group">
                <label class="form-label">// category</label>
                <input type="text" name="category" class="form-input" placeholder="Category" value="{{ old('category') }}" required>
            </div>
            <div class="form-group">
                <label class="form-label">// description</label>
                <textarea name="description" class="form-input" rows="4" placeholder="Project description" required>{{ old('description') }}</textarea>
            </div>
            <div class="form-group">
                <label class="form-label">// image_url</label>
                <input type="text" name="image" class="form-input" placeholder="https://example.com/image.jpg" value="{{ old('image') }}">
            </div>
            <div class="form-group">
                <label class="form-label">// project_url</label>
                <input type="text" name="url" class="form-input" placeholder="https://example.com" value="{{ old('url') }}">
            </div>
            <div class="form-group">
                <label class="form-label">// status</label>
                <select name="status" class="form-input" required>
                    <option value="draft">Draft</option>
                    <option value="published">Published</option>
                </select>
            </div>
            <div class="form-actions">
                <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Save Project</button>
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
