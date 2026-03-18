<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Reservasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #F5F0E8;
            --fg: #1E3A5F;
            --muted: #8B9AAF;
            --accent: #2B5A8B;
            --accent-light: #4A7CB0;
            --card: #FFFCF7;
            --border: #D4C9B8;
            --cream: #F5F0E8;
            --cream-dark: #E8E0D0;
            --blue-deep: #1E3A5F;
            --blue-navy: #2B5A8B;
            --blue-medium: #4A7CB0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg);
            min-height: 100vh;
            overflow-x: hidden;
        }

        .font-display {
            font-family: 'DM Serif Display', serif;
        }

        /* Background Pattern */
        .bg-pattern {
            position: fixed;
            inset: 0;
            z-index: 0;
            background: 
                radial-gradient(ellipse at 20% 20%, rgba(43, 90, 139, 0.08) 0%, transparent 50%),
                radial-gradient(ellipse at 80% 80%, rgba(30, 58, 95, 0.06) 0%, transparent 50%),
                linear-gradient(180deg, var(--cream) 0%, var(--cream-dark) 100%);
        }

        .bg-pattern::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%231E3A5F' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            opacity: 0.5;
        }

        /* Floating Elements */
        .floating-shape {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            animation: float 20s ease-in-out infinite;
        }

        .shape-1 {
            width: 400px;
            height: 400px;
            background: rgba(43, 90, 139, 0.12);
            top: -100px;
            right: -100px;
            animation-delay: 0s;
        }

        .shape-2 {
            width: 300px;
            height: 300px;
            background: rgba(74, 124, 176, 0.1);
            bottom: -50px;
            left: -50px;
            animation-delay: -7s;
        }

        .shape-3 {
            width: 200px;
            height: 200px;
            background: rgba(30, 58, 95, 0.08);
            top: 50%;
            left: 30%;
            animation-delay: -14s;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            33% { transform: translate(30px, -30px) scale(1.05); }
            66% { transform: translate(-20px, 20px) scale(0.95); }
        }

        /* Main Container */
        .login-container {
            position: relative;
            z-index: 10;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        /* Login Card */
        .login-card {
            width: 100%;
            max-width: 440px;
            background: var(--card);
            border-radius: 24px;
            box-shadow: 
                0 4px 6px -1px rgba(30, 58, 95, 0.05),
                0 10px 15px -3px rgba(30, 58, 95, 0.08),
                0 20px 25px -5px rgba(30, 58, 95, 0.06);
            overflow: hidden;
            animation: cardEntrance 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
            opacity: 0;
            transform: translateY(40px);
        }

        @keyframes cardEntrance {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Header Section */
        .card-header {
            background: linear-gradient(135deg, var(--blue-deep) 0%, var(--blue-navy) 100%);
            padding: 2.5rem 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .card-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M50 0C50 27.6142 27.6142 50 0 50C27.6142 50 50 72.3858 50 100C50 72.3858 72.3858 50 100 50C72.3858 50 50 27.6142 50 0Z' fill='%23ffffff' fill-opacity='0.03'/%3E%3C/svg%3E");
            opacity: 0.6;
        }

        .header-content {
            position: relative;
            z-index: 1;
        }

        .logo-icon {
            width: 56px;
            height: 56px;
            margin: 0 auto 1rem;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            animation: iconPulse 3s ease-in-out infinite;
        }

        @keyframes iconPulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .logo-icon svg {
            width: 28px;
            height: 28px;
            color: white;
        }

        .card-title {
            color: white;
            font-size: 1.75rem;
            font-weight: 400;
            letter-spacing: -0.02em;
            margin-bottom: 0.5rem;
        }

        .card-subtitle {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }

        /* Card Body */
        .card-body {
            padding: 2rem;
        }

        /* Role Toggle */
        .role-toggle {
            display: flex;
            background: var(--cream);
            border-radius: 12px;
            padding: 4px;
            margin-bottom: 2rem;
            position: relative;
        }

        .role-toggle::before {
            content: '';
            position: absolute;
            top: 4px;
            left: 4px;
            width: calc(50% - 4px);
            height: calc(100% - 8px);
            background: var(--card);
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(30, 58, 95, 0.1);
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .role-toggle.tamu-active::before {
            transform: translateX(100%);
        }

        .role-btn {
            flex: 1;
            padding: 0.875rem 1rem;
            background: transparent;
            border: none;
            font-family: inherit;
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--muted);
            cursor: pointer;
            position: relative;
            z-index: 1;
            transition: color 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .role-btn.active {
            color: var(--fg);
        }

        .role-btn svg {
            width: 18px;
            height: 18px;
            transition: transform 0.3s ease;
        }

        .role-btn:hover svg {
            transform: scale(1.1);
        }

        .role-btn:focus-visible {
            outline: 2px solid var(--accent);
            outline-offset: 2px;
            border-radius: 8px;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 1.25rem;
        }

        .form-label {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--fg);
            margin-bottom: 0.5rem;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            color: var(--muted);
            pointer-events: none;
            transition: color 0.3s ease;
        }

        .form-input {
            width: 100%;
            padding: 0.875rem 1rem 0.875rem 3rem;
            background: var(--cream);
            border: 2px solid transparent;
            border-radius: 12px;
            font-family: inherit;
            font-size: 0.95rem;
            color: var(--fg);
            transition: all 0.3s ease;
        }

        .form-input::placeholder {
            color: var(--muted);
        }

        .form-input:hover {
            background: var(--cream-dark);
        }

        .form-input:focus {
            outline: none;
            background: var(--card);
            border-color: var(--accent);
            box-shadow: 0 0 0 4px rgba(43, 90, 139, 0.1);
        }

        .form-input:focus + .input-icon,
        .input-wrapper:focus-within .input-icon {
            color: var(--accent);
        }

        /* Password Toggle */
        .password-toggle {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--muted);
            cursor: pointer;
            padding: 0.25rem;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: color 0.3s ease;
        }

        .password-toggle:hover {
            color: var(--accent);
        }

        .password-toggle:focus-visible {
            outline: 2px solid var(--accent);
            outline-offset: 2px;
            border-radius: 4px;
        }

        .password-toggle svg {
            width: 20px;
            height: 20px;
        }

        /* Remember & Forgot */
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
        }

        .custom-checkbox {
            width: 20px;
            height: 20px;
            border: 2px solid var(--border);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
            background: var(--cream);
        }

        .remember-me input {
            display: none;
        }

        .remember-me input:checked + .custom-checkbox {
            background: var(--accent);
            border-color: var(--accent);
        }

        .remember-me input:checked + .custom-checkbox svg {
            opacity: 1;
            transform: scale(1);
        }

        .custom-checkbox svg {
            width: 12px;
            height: 12px;
            color: white;
            opacity: 0;
            transform: scale(0.5);
            transition: all 0.2s ease;
        }

        .remember-text {
            font-size: 0.875rem;
            color: var(--fg);
        }

        .forgot-link {
            font-size: 0.875rem;
            color: var(--accent);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s ease;
        }

        .forgot-link:hover {
            color: var(--blue-deep);
            text-decoration: underline;
        }

        .forgot-link:focus-visible {
            outline: 2px solid var(--accent);
            outline-offset: 2px;
            border-radius: 2px;
        }

        /* Submit Button */
        .submit-btn {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(135deg, var(--blue-navy) 0%, var(--blue-deep) 100%);
            border: none;
            border-radius: 12px;
            font-family: inherit;
            font-size: 1rem;
            font-weight: 600;
            color: white;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(30, 58, 95, 0.3);
        }

        .submit-btn:hover::before {
            left: 100%;
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .submit-btn:focus-visible {
            outline: 2px solid var(--accent-light);
            outline-offset: 2px;
        }

        .btn-content {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            position: relative;
            z-index: 1;
        }

        .btn-content svg {
            width: 20px;
            height: 20px;
            transition: transform 0.3s ease;
        }

        .submit-btn:hover .btn-content svg {
            transform: translateX(4px);
        }

        /* Divider */
        .divider {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin: 1.5rem 0;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: var(--border);
        }

        .divider-text {
            font-size: 0.8rem;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        /* Register Link */
        .register-text {
            text-align: center;
            font-size: 0.9rem;
            color: var(--muted);
        }

        .register-link {
            color: var(--accent);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.2s ease;
        }

        .register-link:hover {
            color: var(--blue-deep);
            text-decoration: underline;
        }

        .register-link:focus-visible {
            outline: 2px solid var(--accent);
            outline-offset: 2px;
            border-radius: 2px;
        }

        /* Footer */
        .card-footer {
            text-align: center;
            padding: 1.5rem 2rem;
            background: var(--cream);
            border-top: 1px solid var(--border);
        }

        .footer-text {
            font-size: 0.8rem;
            color: var(--muted);
        }

        /* Animations */
        .fade-in-up {
            animation: fadeInUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
            opacity: 0;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
        .delay-4 { animation-delay: 0.4s; }
        .delay-5 { animation-delay: 0.5s; }

        /* Reduced Motion */
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }

        /* Responsive */
        @media (max-width: 480px) {
            .login-container {
                padding: 1rem;
            }

            .card-header {
                padding: 2rem 1.5rem;
            }

            .card-body {
                padding: 1.5rem;
            }

            .card-title {
                font-size: 1.5rem;
            }

            .form-options {
                flex-direction: column;
                gap: 0.75rem;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>
    <!-- Background -->
    <div class="bg-pattern">
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>
        <div class="floating-shape shape-3"></div>
    </div>

    <!-- Login Container -->
    <main class="login-container">
        <div class="login-card">
            <!-- Header -->
            <header class="card-header">
                <div class="header-content">
                    <div class="logo-icon">
                    <img src="{{ asset('logo.jpeg') }}" alt="Logo PBL" style="width:40px; height:40px;">
                    </div>
                    <h2 class="card-title font-display">Selamat Datang di Pulas</h2>
                    <p class="card-subtitle">Silakan masuk ke akun Anda</p>
                </div>
            </header>

            <!-- Body -->
            <div class="card-body">
                <!-- Role Toggle -->
                <div class="role-toggle" id="roleToggle" role="tablist" aria-label="Pilih tipe login">
                    <button 
                        class="role-btn active" 
                        id="adminTab" 
                        role="tab" 
                        aria-selected="true"
                        aria-controls="loginForm"
                        type="button"
                    >
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                        Admin
                    </button>
                    <button 
                        class="role-btn" 
                        id="tamuTab" 
                        role="tab" 
                        aria-selected="false"
                        aria-controls="loginForm"
                        type="button"
                    >
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                        Tamu
                    </button>
                </div>

                <!-- Login Form -->
                <form id="loginForm" class="fade-in-up delay-1">
                    <div class="form-group fade-in-up delay-2">
                        <label for="username" class="form-label" id="usernameLabel">Username</label>
                        <div class="input-wrapper">
                            <input 
                                type="text" 
                                id="username" 
                                name="username" 
                                class="form-input" 
                                placeholder="Masukkan username"
                                autocomplete="username"
                                required
                                aria-labelledby="usernameLabel"
                            >
                            <svg class="input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                <circle cx="12" cy="7" r="4"/>
                            </svg>
                        </div>
                    </div>

                    <div class="form-group fade-in-up delay-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-wrapper">
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                class="form-input" 
                                placeholder="Masukkan password"
                                autocomplete="current-password"
                                required
                                style="padding-right: 3rem;"
                            >
                            <svg class="input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                            <button type="button" class="password-toggle" id="passwordToggle" aria-label="Tampilkan password">
                                <svg class="eye-open" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                                <svg class="eye-closed" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;">
                                    <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/>
                                    <line x1="1" y1="1" x2="23" y2="23"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="form-options fade-in-up delay-4">
                        <label class="remember-me">
                            <input type="checkbox" id="remember" name="remember">
                            <span class="custom-checkbox">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                            </span>
                            <span class="remember-text">Ingat saya</span>
                        </label>
                        <a href="#" class="forgot-link">Lupa password?</a>
                    </div>

                    <button type="submit" class="submit-btn fade-in-up delay-5">
                        <span class="btn-content">
                            Masuk
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"/>
                                <path d="m12 5 7 7-7 7"/>
                            </svg>
                        </span>
                    </button>
                </form>

                <div class="divider fade-in-up delay-5">
                    <span class="divider-text">atau</span>
                </div>

                <p class="register-text fade-in-up delay-5">
                    Belum punya akun? 
                    <a href="#" class="register-link">Daftar sekarang</a>
                </p>
            </div>

            <!-- Footer -->
            <footer class="card-footer">
                <p class="footer-text">Teknik Informatika-Politeknik Negeri Batam</p>
            </footer>
        </div>
    </main>

    <script>
        // Initialize elements
        const roleToggle = document.getElementById('roleToggle');
        const adminTab = document.getElementById('adminTab');
        const tamuTab = document.getElementById('tamuTab');
        const usernameInput = document.getElementById('username');
        const usernameLabel = document.getElementById('usernameLabel');
        const passwordInput = document.getElementById('password');
        const passwordToggle = document.getElementById('passwordToggle');
        const loginForm = document.getElementById('loginForm');

        // Current role state
        let currentRole = 'admin';

        // Role Toggle Handler
        function setActiveRole(role) {
            currentRole = role;
            
            if (role === 'admin') {
                roleToggle.classList.remove('tamu-active');
                adminTab.classList.add('active');
                adminTab.setAttribute('aria-selected', 'true');
                tamuTab.classList.remove('active');
                tamuTab.setAttribute('aria-selected', 'false');
                usernameLabel.textContent = 'Username';
                usernameInput.setAttribute('placeholder', 'Masukkan username');
                usernameInput.setAttribute('autocomplete', 'username');
            } else {
                roleToggle.classList.add('tamu-active');
                tamuTab.classList.add('active');
                tamuTab.setAttribute('aria-selected', 'true');
                adminTab.classList.remove('active');
                adminTab.setAttribute('aria-selected', 'false');
                usernameLabel.textContent = 'Email';
                usernameInput.setAttribute('placeholder', 'Masukkan email');
                usernameInput.setAttribute('autocomplete', 'email');
            }

            // Clear input on role switch
            usernameInput.value = '';
            passwordInput.value = '';
        }

        adminTab.addEventListener('click', () => setActiveRole('admin'));
        tamuTab.addEventListener('click', () => setActiveRole('tamu'));

        // Keyboard navigation for role toggle
        [adminTab, tamuTab].forEach(tab => {
            tab.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft' || e.key === 'ArrowRight') {
                    e.preventDefault();
                    const newRole = currentRole === 'admin' ? 'tamu' : 'admin';
                    setActiveRole(newRole);
                    (newRole === 'admin' ? adminTab : tamuTab).focus();
                }
            });
        });

        // Password Toggle Handler
        passwordToggle.addEventListener('click', () => {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            const eyeOpen = passwordToggle.querySelector('.eye-open');
            const eyeClosed = passwordToggle.querySelector('.eye-closed');
            
            if (type === 'text') {
                eyeOpen.style.display = 'none';
                eyeClosed.style.display = 'block';
                passwordToggle.setAttribute('aria-label', 'Sembunyikan password');
            } else {
                eyeOpen.style.display = 'block';
                eyeClosed.style.display = 'none';
                passwordToggle.setAttribute('aria-label', 'Tampilkan password');
            }
        });

        // Form Submit Handler
        loginForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            const formData = {
                role: currentRole,
                username: usernameInput.value,
                password: passwordInput.value,
                remember: document.getElementById('remember').checked
            };
            
            // Log the login attempt (replace with actual authentication logic)
            console.log('Login attempt:', formData);
            
            // Show success feedback (you can customize this)
            const submitBtn = loginForm.querySelector('.submit-btn');
            const originalContent = submitBtn.innerHTML;
            
            submitBtn.innerHTML = `
                <span class="btn-content">
                    Memproses...
                </span>
            `;
            submitBtn.disabled = true;
            
            // Simulate authentication delay
            setTimeout(() => {
                submitBtn.innerHTML = `
                    <span class="btn-content">
                        Berhasil!
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                    </span>
                `;
                
                setTimeout(() => {
                    submitBtn.innerHTML = originalContent;
                    submitBtn.disabled = false;
                    alert(`Login ${currentRole === 'admin' ? 'Admin' : 'Tamu'} berhasil!\nUsername/Email: ${formData.username}`);
                }, 1000);
            }, 1500);
        });

        // Add focus animation to inputs
        document.querySelectorAll('.form-input').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('focused');
            });
        });
    </script>
</body>
</html>