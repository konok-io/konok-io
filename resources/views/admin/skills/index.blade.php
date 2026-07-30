@extends('admin.layout-minimal')

@section('page-title', 'skills')

@section('admin-content')
<!-- Section Header -->
<div class="section-header">
    <div class="section-label">// Skills Management</div>
    <h1 class="section-title">All Skills</h1>
</div>

<!-- Actions -->
<div class="window-card">
    <div class="window-header">
        <div class="window-dots">
            <span class="window-dot"></span>
        </div>
        <span class="window-title">skills.json</span>
        <a href="{{ route('admin.skills.create') }}" class="btn btn-primary btn-sm" style="margin-left: auto;">
            + Add Skill
        </a>
    </div>
    <div class="window-body" style="padding: 0;">
        @if($skills->isEmpty())
            <p style="text-align: center; padding: 40px; color: #a3a3a3;">No skills found. Create your first skill!</p>
        @else
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Percentage</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($skills as $skill)
                    <tr>
                        <td class="name">{{ $skill->name }}</td>
                        <td>{{ $skill->percentage }}%</td>
                        <td>
                            <div style="display: flex; gap: 8px;">
                                <a href="{{ route('admin.skills.edit', $skill->id) }}" class="btn btn-secondary btn-sm">Edit</a>
                                <form action="{{ route('admin.skills.destroy', $skill->id) }}" method="POST" onsubmit="return confirm('Delete this skill?')">
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
