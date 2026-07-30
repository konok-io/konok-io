@extends('admin.layout-minimal')

@section('page-title', 'projects')

@section('admin-content')
<!-- Section Header -->
<div class="section-header">
    <div class="section-label">// Projects Management</div>
    <h1 class="section-title">All Projects</h1>
</div>

<!-- Actions -->
<div class="window-card">
    <div class="window-header">
        <div class="window-dots">
            <span class="window-dot"></span>
        </div>
        <span class="window-title">projects.json</span>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary btn-sm" style="margin-left: auto;">
            + Add Project
        </a>
    </div>
    <div class="window-body" style="padding: 0;">
        @if($portfolios->isEmpty())
            <p style="text-align: center; padding: 40px; color: #a3a3a3;">No projects found. Create your first project!</p>
        @else
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($portfolios as $portfolio)
                    <tr>
                        <td class="name">{{ $portfolio->title }}</td>
                        <td>{{ $portfolio->category ?? '-' }}</td>
                        <td>
                            @if($portfolio->status === 'published')
                                <span class="badge done">Published</span>
                            @else
                                <span class="badge pending">Draft</span>
                            @endif
                        </td>
                        <td>
                            <div class="table-actions">
                                <a href="{{ route('admin.projects.edit', $portfolio->id) }}" class="btn btn-secondary btn-sm">Edit</a>
                                <form action="{{ route('admin.projects.destroy', $portfolio->id) }}" method="POST" onsubmit="return confirm('Delete this project?')">
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
    <div class="footer-status">
        <span class="dot"></span>
        <span>System Online</span>
    </div>
    <span>Version 1.0.4</span>
    <span>© {{ date('Y') }} KONOK.IO</span>
</div>
@endsection
