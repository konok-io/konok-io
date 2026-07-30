@extends('admin.layout-minimal')

@section('page-title', 'projects')

@section('admin-content')
<!-- Section Header -->
<div class="section-header" style="display: flex; justify-content: space-between; align-items: center;">
    <div>
        <div class="section-label">// Edit Project</div>
        <h1 class="section-title">Edit Project</h1>
    </div>
    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">&lt; Back</a>
</div>

<div class="window-card">
    <div class="window-header">
        <div class="window-dots">
            <span class="window-dot"></span>
        </div>
        <span class="window-title">edit-project.json</span>
    </div>
    <div class="window-body">
        <form action="{{ route('admin.projects.update', ['project' => $portfolio->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="form-label">// title</label>
                <input type="text" name="title" class="form-input" value="{{ $portfolio->title }}" required>
            </div>
            <div class="form-group">
                <label class="form-label">// slug</label>
                <input type="text" name="slug" class="form-input" value="{{ $portfolio->slug }}">
            </div>
            <div class="form-group">
                <label class="form-label">// category</label>
                <input type="text" name="category" class="form-input" value="{{ $portfolio->category }}">
            </div>
            <div class="form-group">
                <label class="form-label">// description</label>
                <textarea name="description" class="form-input" rows="4">{{ $portfolio->description }}</textarea>
            </div>
            <div class="form-group">
                <label class="form-label">// image_url</label>
                <input type="text" name="image_url" class="form-input" value="{{ $portfolio->image_url }}">
            </div>
            <div class="form-group">
                <label class="form-label">// project_url</label>
                <input type="text" name="project_url" class="form-input" value="{{ $portfolio->project_url }}">
            </div>
            <div class="form-group">
                <label class="form-label">// status</label>
                <select name="status" class="form-input">
                    <option value="draft" {{ $portfolio->status === 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ $portfolio->status === 'published' ? 'selected' : '' }}>Published</option>
                </select>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Update Project</button>
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
        <span class="footer-title">konok-admin ~ 80×24</span>
    </div>
    <div class="footer-body">
        <div class="footer-prompt">
            <span class="prompt-symbol">$</span>
            <span class="prompt-text">konok@admin:~$</span>
            <span class="prompt-status">System Online</span>
        </div>
        <div class="footer-info">
            <span>v1.0.4</span>
            <span class="separator">|</span>
            <span class="footer-brand">© {{ date('Y') }} KONOK.IO</span>
        </div>
    </div>
</div>
@endsection
