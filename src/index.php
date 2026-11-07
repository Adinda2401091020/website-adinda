<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f6f7fb">
    <title>RuangKita — Ruang untuk bertumbuh</title>
    <style>
        :root {
            color-scheme: light;
            --ink: #20233a;
            --muted: #777b91;
            --purple: #6d5ce8;
            --purple-dark: #5545ca;
            --line: #e8e9f1;
            --surface: #fff;
        }

        * { box-sizing: border-box; }

        body {
            min-width: 320px;
            min-height: 100vh;
            margin: 0;
            color: var(--ink);
            background: #f6f7fb;
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }

        button, input { font: inherit; }
        button { cursor: pointer; }

        .page {
            min-height: 100vh;
            padding: 28px clamp(20px, 5vw, 76px) 24px;
            display: flex;
            flex-direction: column;
        }

        .topbar {
            width: min(1200px, 100%);
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: var(--ink);
            text-decoration: none;
            font-size: 19px;
            font-weight: 800;
            letter-spacing: -0.7px;
        }

        .brand-mark {
            width: 35px;
            height: 35px;
            display: grid;
            place-items: center;
            border-radius: 12px;
            color: #fff;
            background: var(--purple);
            box-shadow: 0 7px 16px #6d5ce83d;
        }

        .topbar-note { color: var(--muted); font-size: 13px; }

        main {
            width: min(1080px, 100%);
            margin: auto;
            padding: 48px 0;
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(360px, 440px);
            align-items: center;
            gap: clamp(42px, 8vw, 110px);
        }

        .intro { padding: 18px 0; }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 12px;
            border: 1px solid #e8e5ff;
            border-radius: 999px;
            color: var(--purple-dark);
            background: #f0eeff;
            font-size: 12px;
            font-weight: 700;
        }

        .eyebrow-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #49bd94;
        }

        h1 {
            max-width: 560px;
            margin: 24px 0 16px;
            font-size: clamp(42px, 6vw, 68px);
            line-height: 1.06;
            letter-spacing: -3.8px;
        }

        h1 span { color: var(--purple); }

        .lead {
            max-width: 470px;
            margin: 0;
            color: var(--muted);
            font-size: 16px;
            line-height: 1.8;
        }

        .features {
            margin: 31px 0 0;
            padding: 0;
            display: grid;
            gap: 15px;
            list-style: none;
        }

        .features li {
            display: flex;
            align-items: center;
            gap: 11px;
            color: #51556c;
            font-size: 14px;
        }

        .check {
            width: 23px;
            height: 23px;
            display: grid;
            flex: 0 0 auto;
            place-items: center;
            border-radius: 8px;
            color: var(--purple);
            background: #eeecff;
            font-size: 13px;
            font-weight: 800;
        }

        .auth-card {
            padding: clamp(25px, 4vw, 38px);
            border: 1px solid #eeeef4;
            border-radius: 22px;
            background: var(--surface);
            box-shadow: 0 22px 65px #34365b12;
        }

        .card-heading { margin-bottom: 24px; }

        .card-heading h2 {
            margin: 0 0 7px;
            font-size: 25px;
            letter-spacing: -1px;
        }

        .card-heading p { margin: 0; color: var(--muted); font-size: 13px; }

        .tabs {
            margin-bottom: 24px;
            padding: 4px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            border-radius: 11px;
            background: #f4f4f8;
        }

        .tab {
            padding: 10px;
            border: 0;
            border-radius: 8px;
            color: var(--muted);
            background: transparent;
            font-size: 13px;
            font-weight: 700;
        }

        .tab[aria-selected="true"] {
            color: var(--ink);
            background: #fff;
            box-shadow: 0 2px 7px #20233a12;
        }

        .form-panel[hidden] { display: none; }
        .field { margin-bottom: 16px; }
        .field label {
            display: block;
            margin-bottom: 7px;
            color: #42465b;
            font-size: 12px;
            font-weight: 700;
        }

        .field input {
            width: 100%;
            height: 46px;
            padding: 0 13px;
            border: 1px solid var(--line);
            border-radius: 9px;
            outline: none;
            color: var(--ink);
            background: #fff;
            font-size: 13px;
            transition: border-color .2s, box-shadow .2s;
        }

        .field input::placeholder { color: #a4a6b5; }
        .field input:focus {
            border-color: var(--purple);
            box-shadow: 0 0 0 3px #6d5ce81a;
        }

        .form-meta {
            margin: 1px 0 19px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            color: var(--muted);
            font-size: 11px;
        }

        .remember {
            display: inline-flex;
            align-items: center;
            gap: 7px;
        }
        .remember input { accent-color: var(--purple); }

        .text-button {
            padding: 0;
            border: 0;
            color: var(--purple-dark);
            background: transparent;
            font-size: 11px;
            font-weight: 700;
        }

        .submit-button {
            width: 100%;
            min-height: 47px;
            border: 0;
            border-radius: 9px;
            color: #fff;
            background: var(--purple);
            box-shadow: 0 8px 18px #6d5ce833;
            font-size: 13px;
            font-weight: 750;
            transition: background .2s, transform .2s;
        }
        .submit-button:hover { background: var(--purple-dark); transform: translateY(-1px); }

        .demo-note {
            margin: 18px 0 0;
            padding: 11px 12px;
            border-radius: 9px;
            color: #656981;
            background: #f7f7fa;
            font-size: 11px;
            line-height: 1.6;
        }

        .toast {
            min-height: 18px;
            margin: 10px 0 0;
            color: var(--purple-dark);
            font-size: 12px;
            line-height: 1.5;
        }

        footer {
            width: min(1200px, 100%);
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            gap: 12px;
            color: #9698a8;
            font-size: 11px;
        }

        @media (max-width: 820px) {
            main {
                max-width: 510px;
                grid-template-columns: 1fr;
                gap: 28px;
            }
            .intro { padding: 0; }
            h1 { max-width: 500px; font-size: clamp(42px, 9vw, 58px); }
            .features { margin-top: 21px; }
        }

        @media (max-width: 480px) {
            .page { padding: 20px 17px; }
            .topbar-note { font-size: 11px; }
            main { padding: 39px 0; }
            h1 { letter-spacing: -2.6px; }
            .auth-card { padding: 24px 20px; border-radius: 17px; }
            footer { flex-direction: column; align-items: center; text-align: center; }
        }
    </style>
</head>
<body>
    <div class="page">
        <header class="topbar">
            <a class="brand" href="#" aria-label="RuangKita beranda">
                <span class="brand-mark" aria-hidden="true">R</span>
                <span>ruangkita</span>
            </a>
            <span class="topbar-note">Tempat ide baik dimulai</span>
        </header>

        <main>
            <section class="intro" aria-labelledby="page-title">
                <span class="eyebrow"><span class="eyebrow-dot"></span> Ruang baru untukmu</span>
                <h1 id="page-title">Mulai langkah<br>baikmu <span>di sini.</span></h1>
                <p class="lead">Satu ruang untuk belajar, berbagi ide, dan bertumbuh bersama komunitas yang mendukungmu.</p>
                <ul class="features">
                    <li><span class="check" aria-hidden="true">✓</span> Belajar hal baru dengan cara yang menyenangkan</li>
                    <li><span class="check" aria-hidden="true">✓</span> Terhubung dengan komunitas yang positif</li>
                    <li><span class="check" aria-hidden="true">✓</span> Bangun kebiasaan baik, mulai dari sekarang</li>
                </ul>
            </section>

            <section class="auth-card" aria-label="Formulir akun">
                <div class="card-heading">
                    <h2 id="form-title">Selamat datang!</h2>
                    <p id="form-subtitle">Masuk untuk melanjutkan perjalananmu.</p>
                </div>

                <div class="tabs" role="tablist" aria-label="Pilih formulir">
                    <button class="tab" id="login-tab" type="button" role="tab" aria-selected="true" aria-controls="login-panel">Masuk</button>
                    <button class="tab" id="register-tab" type="button" role="tab" aria-selected="false" aria-controls="register-panel">Daftar</button>
                </div>

                <form class="form-panel" id="login-panel" role="tabpanel" aria-labelledby="login-tab">
                    <div class="field">
                        <label for="login-email">Email</label>
                        <input id="login-email" name="email" type="email" placeholder="nama@email.com" autocomplete="email" required>
                    </div>
                    <div class="field">
                        <label for="login-password">Kata sandi</label>
                        <input id="login-password" name="password" type="password" placeholder="Masukkan kata sandi" autocomplete="current-password" required>
                    </div>
                    <div class="form-meta">
                        <label class="remember"><input type="checkbox" name="remember"> Ingat saya</label>
                        <span>Isi email dan kata sandi untuk mencoba</span>
                    </div>
                    <button class="submit-button" type="submit">Masuk ke RuangKita</button>
                </form>

                <form class="form-panel" id="register-panel" role="tabpanel" aria-labelledby="register-tab" hidden>
                    <div class="field">
                        <label for="register-name">Nama lengkap</label>
                        <input id="register-name" name="name" type="text" placeholder="Nama kamu" autocomplete="name" required>
                    </div>
                    <div class="field">
                        <label for="register-email">Email</label>
                        <input id="register-email" name="email" type="email" placeholder="nama@email.com" autocomplete="email" required>
                    </div>
                    <div class="field">
                        <label for="register-password">Buat kata sandi</label>
                        <input id="register-password" name="password" type="password" placeholder="Minimal 8 karakter" minlength="8" autocomplete="new-password" required>
                    </div>
                    <button class="submit-button" type="submit">Buat akun</button>
                </form>

                <p class="demo-note">Demo landing page: formulir ini hanya untuk tampilan dan belum menyimpan akun atau memverifikasi kata sandi.</p>
                <p class="toast" id="form-message" role="status" aria-live="polite"></p>
            </section>
        </main>

        <footer>
            <span>© 2026 RuangKita. Dibuat dengan semangat untuk bertumbuh.</span>
            <span>Landing page demo</span>
        </footer>
    </div>

    <script>
        const tabs = {
            login: document.getElementById('login-tab'),
            register: document.getElementById('register-tab')
        };
        const panels = {
            login: document.getElementById('login-panel'),
            register: document.getElementById('register-panel')
        };
        const message = document.getElementById('form-message');

        function showForm(name) {
            const isLogin = name === 'login';
            tabs.login.setAttribute('aria-selected', String(isLogin));
            tabs.register.setAttribute('aria-selected', String(!isLogin));
            panels.login.hidden = !isLogin;
            panels.register.hidden = isLogin;
            document.getElementById('form-title').textContent = isLogin ? 'Selamat datang!' : 'Mulai bergabung';
            document.getElementById('form-subtitle').textContent = isLogin
                ? 'Masuk untuk melanjutkan perjalananmu.'
                : 'Buat akun dan mulai langkah baikmu.';
            message.textContent = '';
        }

        tabs.login.addEventListener('click', () => showForm('login'));
        tabs.register.addEventListener('click', () => showForm('register'));

        Object.values(panels).forEach((form) => {
            form.addEventListener('submit', (event) => {
                event.preventDefault();
                message.textContent = 'Form berhasil dicoba. Fitur akun belum terhubung ke server.';
            });
        });
    </script>
</body>
</html>
