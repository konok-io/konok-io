@extends('admin.layout-minimal')

@section('page-title', 'services')

@section('admin-content')
<!-- Section Header -->
<div class="section-header">
    <div class="section-label">// Services Management</div>
    <h1 class="section-title">All Services</h1>
</div>

<!-- Actions -->
<div class="window-card">
    <div class="window-header">
        <div class="window-dots">
            <span class="window-dot"></span>
        </div>
        <span class="window-title">services.json</span>
        <a href="{{ route('admin.services.create') }}" class="btn btn-primary btn-sm" style="margin-left: auto;">
            + Add Service
        </a>
    </div>
    <div class="window-body" style="padding: 0;">
        @if($services->isEmpty())
            <p style="text-align: center; padding: 40px; color: #a3a3a3;">No services found. Create your first service!</p>
        @else
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                    <tr>
                        <td class="name">{{ $service->title }}</td>
                        <td>{{ $service->slug }}</td>
                        <td>
                            <div style="display: flex; gap: 8px;">
                                <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-secondary btn-sm">Edit</a>
                                <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" onsubmit="return confirm('Delete this service?')">
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
