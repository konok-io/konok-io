@extends('layouts.app')

@section('title', 'Admin Login - KONOK.IO')

@section('content')

<div class="login-page">
    <div class="login-container">
        <!-- Terminal Window -->
        <div class="terminal-window login-terminal">
            <div class="terminal-titlebar">
                <div class="terminal-dots">
                    <span class="terminal-dot red"></span>
                    <span class="terminal-dot yellow"></span>
                    <span class="terminal-dot green"></span>
                </div>
                <span class="terminal-path">auth/login.blade.php</span>
            </div>
            <div class="terminal-content">
                <!-- Login Form -->
                <form method="POST" action="{{ route('admin.login') }}" class="login-form">
                    @csrf
                    
                    <!-- Email Field -->
                    <div class="form-group">
                        <label class="terminal-label">
                            <span style="color: var(--terminal-syntax-purple);">&gt;</span> 
                            <span style="color: var(--terminal-accent);">email:</span>
                        </label>
                        <div class="input-wrapper">
                            <span class="input-prefix" style="color: var(--terminal-text-muted);">›</span>
                            <input 
                                type="email" 
                                name="email" 
                                class="terminal-input @error('email') input-error @enderror" 
                                value="{{ old('email') }}"
                                placeholder="admin@konok.io"
                                required 
                                autofocus
                            >
                        </div>
                        @error('email')
                            <p class="terminal-error">
                                <span style="color: var(--terminal-syntax-red);">✗</span> 
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div class="form-group">
                        <label class="terminal-label">
                            <span style="color: var(--terminal-syntax-purple);">&gt;</span> 
                            <span style="color: var(--terminal-accent);">password:</span>
                        </label>
                        <div class="input-wrapper">
                            <span class="input-prefix" style="color: var(--terminal-text-muted);">›</span>
                            <input 
                                type="password" 
                                name="password" 
                                class="terminal-input @error('password') input-error @enderror" 
                                placeholder="••••••••"
                                required
                            >
                        </div>
                        @error('password')
                            <p class="terminal-error">
                                <span style="color: var(--terminal-syntax-red);">✗</span> 
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Remember Me & Submit -->
                    <div class="form-row">
                        <label class="checkbox-wrapper">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span class="checkbox-custom"></span>
                            <span style="color: var(--terminal-text-secondary); font-family: var(--font-mono); font-size: 0.8rem;">remember</span>
                        </label>
                        
                        <button type="submit" class="btn btn-login">
                            <span style="color: var(--terminal-syntax-purple);">$</span> 
                            <span style="color: var(--terminal-syntax-green);">login</span>
                        </button>
                    </div>
                </form>

                <!-- Footer -->
                <div class="login-footer">
                    <a href="{{ url('/') }}" class="terminal-link">
                        <span style="color: var(--terminal-text-muted);">// </span>
                        <span style="color: var(--terminal-syntax-purple);">&lt;</span> 
                        <span style="color: var(--terminal-accent);">back_to_home</span>
                        <span style="color: var(--terminal-syntax-purple);">/&gt;</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('styles')
<style>
    .login-page {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, var(--terminal-bg) 0%, var(--terminal-bg-secondary) 100%);
        padding: var(--space-lg);
    }

    .login-container {
        width: 100%;
        max-width: 480px;
    }

    .login-terminal {
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
    }

    .login-form {
        padding: var(--space-md) 0;
    }

    .form-group {
        margin-bottom: var(--space-md);
    }

    .terminal-label {
        display: block;
        font-family: var(--font-mono);
        font-size: 0.85rem;
        margin-bottom: var(--space-xs);
        color: var(--terminal-text);
    }

    .input-wrapper {
        display: flex;
        align-items: center;
        background: var(--terminal-bg);
        border: 1px solid var(--terminal-border);
        border-radius: 4px;
        padding: 0 var(--space-sm);
        transition: all 0.3s ease;
    }

    .input-wrapper:focus-within {
        border-color: var(--terminal-accent);
        box-shadow: 0 0 0 2px rgba(245, 158, 11, 0.1);
    }

    .input-prefix {
        font-family: var(--font-mono);
        margin-right: var(--space-sm);
    }

    .terminal-input {
        flex: 1;
        background: transparent;
        border: none;
        padding: var(--space-sm) 0;
        font-family: var(--font-mono);
        font-size: 0.85rem;
        color: var(--terminal-text);
        outline: none;
    }

    .terminal-input::placeholder {
        color: var(--terminal-text-muted);
    }

    .terminal-input.input-error {
        color: var(--terminal-syntax-red);
    }

    .terminal-error {
        font-family: var(--font-mono);
        font-size: 0.75rem;
        color: var(--terminal-syntax-red);
        margin-top: 4px;
    }

    .form-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: var(--space-md);
        padding-top: var(--space-md);
        border-top: 1px solid var(--terminal-border);
    }

    .checkbox-wrapper {
        display: flex;
        align-items: center;
        gap: var(--space-sm);
        cursor: pointer;
    }

    .checkbox-wrapper input[type="checkbox"] {
        display: none;
    }

    .checkbox-custom {
        width: 16px;
        height: 16px;
        border: 2px solid var(--terminal-border);
        border-radius: 4px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s ease;
    }

    .checkbox-wrapper input[type="checkbox"]:checked + .checkbox-custom {
        background: var(--terminal-accent);
        border-color: var(--terminal-accent);
    }

    .checkbox-wrapper input[type="checkbox"]:checked + .checkbox-custom::after {
        content: '✓';
        color: var(--terminal-bg);
        font-size: 0.65rem;
        font-weight: bold;
    }

    .btn-login {
        padding: var(--space-sm) var(--space-lg);
        background: var(--terminal-bg-secondary);
        color: var(--terminal-syntax-green);
        border: 1px solid var(--terminal-syntax-green);
        border-radius: 4px;
        font-family: var(--font-mono);
        font-size: 0.85rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: var(--space-xs);
    }

    .btn-login:hover {
        background: var(--terminal-syntax-green);
        color: var(--terminal-bg);
    }

    .login-footer {
        margin-top: var(--space-md);
        padding-top: var(--space-md);
        border-top: 1px solid var(--terminal-border);
    }

    .terminal-link {
        color: var(--terminal-accent);
        text-decoration: none;
        font-family: var(--font-mono);
        font-size: 0.8rem;
        transition: all 0.2s ease;
    }

    .terminal-link:hover {
        color: var(--terminal-syntax-green);
    }
</style>
@endpush
