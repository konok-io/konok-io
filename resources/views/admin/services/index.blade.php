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
                            <div class="table-actions">
                                <a href="{{ route('admin.services.edit', ['service' => $service->id]) }}" class="btn btn-secondary btn-sm">Edit</a>
                                <form action="{{ route('admin.services.destroy', ['service' => $service->id]) }}" method="POST" onsubmit="return confirm('Delete this service?')">
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
