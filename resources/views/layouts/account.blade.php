<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8"/>
    <title>حساب کاربری | ضیافت</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

    <style>
        :root {
            --bg: #fff8f7;
            --card: #ffffff;
            --text: #1f2937;
            --muted: #6b7280;

            --brand-50: #fff1f2;
            --brand-100: #ffe4e6;
            --brand-200: #fecdd3;
            --brand-300: #fda4af;
            --brand-400: #fb7185;
            --brand-500: #f43f5e;
            --brand-600: #e11d48;

            --accent-50: #f0fdf4;
            --accent-100: #dcfce7;
            --accent-500: #22c55e;
            --accent-600: #16a34a;

            --gold: #f59e0b;

            --radius-xl: 22px;
            --radius-lg: 16px;
            --radius-md: 14px;
            --radius-pill: 999px;

            --shadow-sm: 0 4px 14px rgba(0, 0, 0, .06);
            --shadow-md: 0 10px 25px rgba(0, 0, 0, .08);

            --maxw: 1200px;
        }

        * {
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            font-family: "Vazirmatn", system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial, "Noto Sans", "Apple Color Emoji", "Segoe UI Emoji";
            background: linear-gradient(180deg, var(--bg), #ffffff 300px);
            color: var(--text);
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .container {
            max-width: var(--maxw);
            margin: 0 auto;
            padding: 0 20px;
        }

        .muted {
            color: var(--muted);
            font-size: .9rem;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            border-radius: var(--radius-pill);
            padding: .75rem 1.05rem;
            font-weight: 600;
            font-size: .95rem;
            line-height: 1;
            transition: .2s ease;
            border: 1px solid transparent;
            height: 40px;
            cursor: pointer;
            font-family: inherit;
        }

        .btn-primary {
            background: var(--brand-500);
            color: #fff;
        }

        .btn-primary:hover {
            background: var(--brand-600);
            transform: translateY(-1px);
        }

        .btn-ghost {
            background: transparent;
            color: var(--brand-600);
            border-color: var(--brand-200);
        }

        .btn-ghost:hover {
            background: var(--brand-50);
        }

        .btn-sm {
            height: 34px;
            padding: .5rem .9rem;
            font-size: .85rem;
        }

        header.nav {
            position: sticky;
            top: 0;
            z-index: 50;
            backdrop-filter: saturate(150%) blur(8px);
            background: rgba(255, 255, 255, .75);
            border-bottom: 1px solid #f1f5f9;
            overflow: hidden;
        }

        .nav-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 72px;
            gap: 12px;
            flex-wrap: nowrap;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: .65rem;
            font-weight: 800;
        }

        .brand .logo {
            width: 40px;
            height: 40px;
            border-radius: 12px;
            background: radial-gradient(120% 120% at 10% 10%, var(--brand-300), var(--brand-500));
            box-shadow: var(--shadow-sm);
        }

        .nav-row {
            display: flex;
            align-items: center;
            gap: .6rem;
            flex: 1 1 auto;
            min-width: 0;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 1rem;
            font-weight: 600;
            color: #374151;
        }

        .nav-menu a {
            padding: .4rem .8rem;
            border-radius: 10px;
        }

        .nav-menu a:hover {
            background: #f9fafb;
        }

        .nav-actions {
            display: flex;
            align-items: center;
            white-space: nowrap;
            gap: .4rem;
        }

        .hamburger {
            display: none;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
            background: #fff;
        }

        footer {
            margin-top: 28px;
            background: #0f172a;
            color: #e2e8f0;
            padding: 26px 0 40px;
        }

        .f-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 18px;
        }

        .f-title {
            font-weight: 800;
            margin-bottom: 8px;
        }

        .copy {
            border-top: 1px solid rgba(255, 255, 255, .08);
            margin-top: 20px;
            padding-top: 12px;
            color: #94a3b8;
            font-size: .9rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* ================================
           Account Page
           ================================ */

        .account-page {
            padding: 26px 0 40px;
        }

        .account-layout {
            display: grid;
            grid-template-columns: 260px minmax(0, 1fr); /* RTL: ستون اول سمت راست */
            gap: 18px;
            align-items: flex-start;
        }

        /* Sidebar */
        .account-sidebar {
            background: var(--card);
            border-radius: var(--radius-xl);
            border: 1px solid #fee2e2;
            box-shadow: var(--shadow-sm);
            padding: 12px 14px 12px;
            position: relative;
            background-image: radial-gradient(circle at 0 0, rgba(251, 113, 133, .12), transparent 60%);
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        /* User summary INSIDE sidebar, same width */
        .user-summary {
            background: linear-gradient(120deg, #fff, var(--brand-50));
            border-radius: 16px;
            border: 1px solid #fee2e2;
            box-shadow: var(--shadow-sm);
            padding: 10px 12px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-main {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: radial-gradient(circle at 30% 0, #fed7aa, #fb7185);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 1.05rem;
            color: #fff;
            box-shadow: var(--shadow-sm);
        }

        .user-name {
            font-weight: 700;
            font-size: .95rem;
        }

        .user-secondary {
            font-size: .8rem;
            color: var(--muted);
        }

        .sidebar-title {
            margin: 4px 2px 4px;
            font-size: .9rem;
            font-weight: 700;
        }

        .sidebar-nav {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .sidebar-tab {
            width: 100%;
            text-align: right;
            border-radius: var(--radius-pill);
            border: 1px solid transparent;
            background: #fff;
            padding: .55rem .75rem;
            font-size: .9rem;
            font-weight: 600;
            color: #374151;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: .15s ease;
            font-family: inherit;
        }

        .sidebar-tab span.icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .sidebar-tab span.icon svg {
            width: 18px;
            height: 18px;
            color: #111827;
        }

        .sidebar-tab:hover {
            border-color: #fecaca;
            background: #fff1f2;
        }

        .sidebar-tab.active {
            background: var(--brand-500);
            border-color: var(--brand-500);
            color: #fff;
            box-shadow: 0 8px 18px rgba(248, 113, 113, .35);
        }

        .sidebar-tab.active span.icon svg {
            color: #ffffff;
        }

        .sidebar-tab.danger {
            margin-top: 8px;
            background: #fef2f2;
            border-color: #fee2e2;
            color: #b91c1c;
            font-weight: 700;
        }

        .sidebar-tab.danger span.icon svg {
            color: #b91c1c;
        }

        .sidebar-tab.danger:hover {
            background: #fee2e2;
            border-color: #fecaca;
        }

        .account-main {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .tab-panels {
            margin-top: 4px;
        }

        .tab-panel {
            display: none;
        }

        .tab-panel.active {
            display: block;
        }

        .panel-card {
            border-radius: var(--radius-xl);
            border: 1px solid #f1f5f9;
            background: #fff;
            box-shadow: var(--shadow-sm);
            padding: 16px 18px 18px;
        }

        .panel-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            margin-bottom: 10px;
        }

        .panel-header h2 {
            margin: 0;
            font-size: 1.2rem;
        }

        /* Courses */
        .account-courses {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
        }

        .account-course-card {
            border-radius: var(--radius-lg);
            border: 1px solid #e5e7eb;
            background: linear-gradient(130deg, #ffffff, #fef2f2);
            padding: 10px 12px;
            display: grid;
            grid-template-columns: 90px minmax(0, 1fr);
            gap: 10px;
            align-items: center;
        }

        .account-course-thumb {
            width: 90px;
            height: 70px;
            border-radius: 14px;
            background: linear-gradient(135deg, #fecdd3, #fee2e2);
            position: relative;
            overflow: hidden;
        }

        .account-course-thumb::after {
            content: "▶";
            position: absolute;
            inset: auto 8px 8px auto;
            width: 26px;
            height: 26px;
            border-radius: 999px;
            background: var(--brand-500);
            color: #fff;
            display: grid;
            place-items: center;
            font-size: .8rem;
            box-shadow: var(--shadow-sm);
        }

        .account-course-body h3 {
            margin: 0 0 4px;
            font-size: .95rem;
        }

        .account-course-body .meta-row {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: .8rem;
            color: var(--muted);
            flex-wrap: wrap;
        }

        .course-progress-bar {
            width: 100%;
            height: 6px;
            border-radius: 999px;
            background: #fee2e2;
            overflow: hidden;
            margin-top: 6px;
        }

        .course-progress-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--brand-500), #fb7185);
        }

        /* Transactions */
        .table-wrap {
            width: 100%;
            overflow-x: auto;
        }

        table.account-table {
            width: 100%;
            border-collapse: collapse;
            font-size: .9rem;
            min-width: 580px;
        }

        .account-table th,
        .account-table td {
            padding: 8px 10px;
            text-align: right;
            border-bottom: 1px solid #f3f4f6;
            white-space: nowrap;
        }

        .account-table thead th {
            font-weight: 600;
            font-size: .85rem;
            color: #6b7280;
            background: #f9fafb;
        }

        .account-table tbody tr:hover {
            background: #fff1f2;
        }

        .status-pill {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            padding: .2rem .6rem;
            border-radius: 999px;
            font-size: .8rem;
            font-weight: 600;
        }

        .status-success {
            background: var(--accent-100);
            color: #166534;
        }

        .status-failed {
            background: #fee2e2;
            color: #b91c1c;
        }

        /* Profile form */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px 16px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        label {
            font-size: .9rem;
            font-weight: 600;
            color: #374151;
        }

        .form-control {
            border-radius: var(--radius-pill);
            border: 1px solid #fecaca;
            padding: .6rem .9rem;
            font-family: inherit;
            font-size: .9rem;
            outline: none;
            transition: .15s ease;
            background: #fff;
        }

        .form-control:focus {
            border-color: var(--brand-500);
            box-shadow: 0 0 0 1px rgba(244, 63, 94, .18);
        }

        textarea.form-control {
            border-radius: var(--radius-md);
            min-height: 90px;
            resize: vertical;
        }

        .password-hint {
            font-size: .8rem;
            color: var(--muted);
        }

        .form-actions {
            margin-top: 14px;
            display: flex;
            gap: 8px;
            justify-content: flex-start;
            flex-wrap: wrap;
        }

        /* Requests */
        .requests-list {
            width: 100%;
            border-radius: var(--radius-lg);
            border: 1px dashed #fecaca;
            background: #fffdfd;
            padding: 10px 12px;
        }

        .request-item {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 10px;
            padding: 8px 0;
            border-bottom: 1px solid #fee2e2;
        }

        .request-item:last-child {
            border-bottom: none;
        }

        .request-main {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .request-title {
            font-size: .95rem;
            font-weight: 600;
        }

        .request-meta {
            display: flex;
            gap: 8px;
            font-size: .8rem;
            color: var(--muted);
            flex-wrap: wrap;
        }

        /* Discounts */
        .discounts-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 10px;
        }

        .discount-card {
            border-radius: 12px;
            border: 1px dashed #bbf7d0;
            background: linear-gradient(140deg, #f0fdf4, #ffffff);
            padding: 8px 10px;
            position: relative;
            overflow: hidden;
            font-size: .86rem;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .discount-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 8px;
        }

        .discount-code {
            font-family: monospace;
            font-weight: 700;
            font-size: .9rem;
            letter-spacing: .12em;
        }

        .copy-btn {
            border-radius: var(--radius-pill);
            border: 1px solid #e5e7eb;
            background: #f3f4f6;
            padding: .2rem .45rem;
            font-size: .75rem;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #374151;
        }

        .copy-btn:hover {
            background: #e5e7eb;
        }

        .copy-btn svg {
            width: 14px;
            height: 14px;
        }

        .discount-meta {
            font-size: .8rem;
            color: #166534;
        }

        .discount-footer {
            margin-top: 2px;
            font-size: .78rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #4b5563;
        }

        .discount-pill {
            padding: .1rem .5rem;
            border-radius: 999px;
            border: 1px solid #bbf7d0;
            background: #dcfce7;
            font-size: .75rem;
            color: #166534;
        }

        /* Modal */
        .modal-backdrop {
            position: fixed;
            inset: 0;
            background: rgba(15, 23, 42, .58);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 100;
        }

        .modal-backdrop.show {
            display: flex;
        }

        .modal-card {
            background: #fff;
            border-radius: var(--radius-xl);
            border: 1px solid #fee2e2;
            box-shadow: var(--shadow-md);
            max-width: 480px;
            width: 100%;
            padding: 16px 18px 18px;
        }

        .modal-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            margin-bottom: 10px;
        }

        .modal-header h3 {
            margin: 0;
            font-size: 1.1rem;
        }

        .modal-close {
            border: none;
            background: transparent;
            cursor: pointer;
            font-size: 1.2rem;
            line-height: 1;
            color: #6b7280;
        }

        .modal-body {
            font-size: .9rem;
        }

        .modal-footer {
            margin-top: 14px;
            display: flex;
            justify-content: flex-start;
            gap: 8px;
        }

        /* Responsive */
        @media (max-width: 960px) {
            .account-layout {
                grid-template-columns: 1fr;
            }

            .account-sidebar {
                order: 1;
            }

            .account-main {
                order: 2;
            }

            .account-courses {
                grid-template-columns: 1fr;
            }

            .discounts-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 720px) {
            .f-grid {
                grid-template-columns: 1fr 1fr;
            }

            .nav-menu {
                display: none;
            }

            .hamburger {
                display: inline-flex;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<header class="nav">
    <div class="container">
        <div class="nav-inner">
            <div class="brand">
                <div class="logo"></div>
                <div>
                    ضیافت
                    <div class="muted" style="font-size:.8rem;">آموزش و فروشگاه آشپزی</div>
                </div>
            </div>

            <div class="nav-row">
                <nav class="nav-menu">
                    <a href="#">خانه</a>
                    <a href="#">دوره‌ها</a>
                    <a href="#">فروشگاه</a>
                    <a href="#">مقالات</a>
                </nav>

                <div class="nav-actions">
                    <button class="btn btn-ghost btn-sm">حساب کاربری</button>
                    <button class="btn btn-primary btn-sm">خروج</button>
                    <button class="hamburger">
                        <span>☰</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>

<main class="account-page">
    <div class="container">

        <div class="account-layout">
            <!-- Sidebar with summary + tabs -->
            <aside class="account-sidebar">

                <!-- User summary (same width as sidebar) -->
                <div class="user-summary">
                    <div class="user-main">
                        {{--                        <div class="user-avatar">ز</div>--}}
                        {{--                        <div>--}}
                        {{--                            <div class="user-name">زهرا محمدی</div>--}}
                        {{--                            <div class="user-secondary">شماره همراه: ۰۹۱۲۳۴۵۶۷۸۹</div>--}}
                        {{--                        </div>--}}
                        <div class="user-avatar">{{ auth()->user()->name[0] ?? 'U' }}</div>
                        <div>
                            <div class="user-name">{{ auth()->user()->name ?? 'کاربر' }}</div>
                            <div class="user-secondary">شماره همراه: {{ auth()->user()->mobile ?? '---' }}</div>
                        </div>
                    </div>
                </div>

                <h2 class="sidebar-title">ناحیه کاربری</h2>

                <nav class="sidebar-nav">
                    <button class="sidebar-tab js-account-tab active" data-tab="courses">
            <span class="icon">
              <!-- Play/Courses icon -->
              <svg viewBox="0 0 24 24" fill="none">
                <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.8"/>
                <path d="M10 8.5L16 12L10 15.5V8.5Z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/>
              </svg>
            </span>
                        <span>دوره‌های من</span>
                    </button>

                    <button class="sidebar-tab js-account-tab {{ Route::is('user.tickets.*') ? 'active' : '' }}"
                            data-tab="requests">
    <span class="icon">
        <svg viewBox="0 0 24 24" fill="none">
            <rect x="3" y="6" width="18" height="12" rx="2" stroke="currentColor" stroke-width="1.8"/>
            <path d="M5 8L12 12L19 8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round"/>
        </svg>
    </span>
                        <span>درخواست‌های من</span>
                    </button>

                    <button class="sidebar-tab js-account-tab" data-tab="discounts">
        <span class="icon">
            <svg viewBox="0 0 24 24" fill="none">
                <path d="M5 7H19V10A2 2 0 0117 12A2 2 0 0119 14V17H5V14A2 2 0 017 12A2 2 0 015 10V7Z"
                      stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                <path d="M12 8V16" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"
                      stroke-dasharray="2 2"/>
            </svg>
        </span>
                        <span>تخفیف‌های من</span>
                    </button>

                    <button class="sidebar-tab js-account-tab" data-tab="profile">
            <span class="icon">
              <!-- User icon -->
              <svg viewBox="0 0 24 24" fill="none">
                <circle cx="12" cy="9" r="3" stroke="currentColor" stroke-width="1.8"/>
                <path d="M6.5 18C7.6 15.8 9.6 14.5 12 14.5C14.4 14.5 16.4 15.8 17.5 18" stroke="currentColor"
                      stroke-width="1.8" stroke-linecap="round"/>
              </svg>
            </span>
                        <span>اطلاعات کاربری</span>
                    </button>

                    <button class="sidebar-tab danger" type="button">
            <span class="icon">
              <!-- Logout icon -->
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M10 5H6.5C5.7 5 5 5.7 5 6.5V17.5C5 18.3 5.7 19 6.5 19H10" stroke="currentColor"
                      stroke-width="1.8" stroke-linecap="round"/>
                <path d="M14 8L18 12L14 16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                      stroke-linejoin="round"/>
                <path d="M18 12H10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
              </svg>
            </span>
                        <span>خروج از سامانه</span>
                    </button>
                </nav>
            </aside>

            <!-- Main content -->
            <div class="account-main">
                @if (session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 rounded-r"
                         role="alert">
                        <p class="font-bold">موفق!</p>
                        <p>{{ session('success') }}</p>
                    </div>
                @endif
                <!-- tab-panels -->
                <div class="tab-panels">
                    <!-- Courses -->
                    <section class="tab-panel active" id="tab-courses">
                        <div class="panel-card">
                            <div class="panel-header">
                                <h2>دوره‌های من</h2>
                                <span class="muted">۴ دوره ثبت‌نام‌شده</span>
                            </div>

                            <div class="account-courses">
                                <article class="account-course-card">
                                    <div class="account-course-thumb"></div>
                                    <div class="account-course-body">
                                        <h3>دوره جامع برنج ایرانی خوش‌عطر</h3>
                                        <div class="meta-row">
                                            <span>۸ درس مشاهده شده</span>
                                            <span>دسترسی دائمی</span>
                                        </div>
                                        <div class="course-progress-bar">
                                            <div class="course-progress-fill" style="width:40%;"></div>
                                        </div>
                                    </div>
                                </article>

                                <article class="account-course-card">
                                    <div class="account-course-thumb"></div>
                                    <div class="account-course-body">
                                        <h3>مرغ‌های مجلسی و مهمانی</h3>
                                        <div class="meta-row">
                                            <span>تمام جلسات مشاهده شده</span>
                                            <span>دسترسی دائمی</span>
                                        </div>
                                        <div class="course-progress-bar">
                                            <div class="course-progress-fill" style="width:100%;"></div>
                                        </div>
                                    </div>
                                </article>

                                <article class="account-course-card">
                                    <div class="account-course-thumb"></div>
                                    <div class="account-course-body">
                                        <h3>انواع خورشت‌های ایرانی</h3>
                                        <div class="meta-row">
                                            <span>۱۰ درس مشاهده شده</span>
                                            <span>در حال مشاهده</span>
                                        </div>
                                        <div class="course-progress-bar">
                                            <div class="course-progress-fill" style="width:65%;"></div>
                                        </div>
                                    </div>
                                </article>

                                <article class="account-course-card">
                                    <div class="account-course-thumb"></div>
                                    <div class="account-course-body">
                                        <h3>دسرهای سریع و خانگی</h3>
                                        <div class="meta-row">
                                            <span>۲ درس مشاهده شده</span>
                                            <span>در حال شروع</span>
                                        </div>
                                        <div class="course-progress-bar">
                                            <div class="course-progress-fill" style="width:10%;"></div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </section>

                    <!-- Transactions -->
                    <section class="tab-panel" id="tab-transactions">
                        <div class="panel-card">
                            <div class="panel-header">
                                <h2>تراکنش‌های من</h2>
                                <span class="muted">نمایش آخرین تراکنش‌ها</span>
                            </div>

                            <div class="table-wrap">
                                <table class="account-table">
                                    <thead>
                                    <tr>
                                        <th>تاریخ</th>
                                        <th>شرح</th>
                                        <th>مبلغ</th>
                                        <th>کد پیگیری</th>
                                        <th>وضعیت</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>۱۴۰۴/۰۹/۱۰</td>
                                        <td>خرید دوره «مرغ‌های مجلسی»</td>
                                        <td>۴۹۰,۰۰۰ تومان</td>
                                        <td>۸۷۳۲۵۶۹۰</td>
                                        <td><span class="status-pill status-success">موفق</span></td>
                                    </tr>
                                    <tr>
                                        <td>۱۴۰۴/۰۹/۰۵</td>
                                        <td>خرید دوره «برنج ایرانی خوش‌عطر»</td>
                                        <td>۳۲۰,۰۰۰ تومان</td>
                                        <td>۷۶۵۴۳۰۲۱</td>
                                        <td><span class="status-pill status-success">موفق</span></td>
                                    </tr>
                                    <tr>
                                        <td>۱۴۰۴/۰۸/۲۵</td>
                                        <td>پرداخت ناموفق - «دسرهای سریع»</td>
                                        <td>۱۹۰,۰۰۰ تومان</td>
                                        <td>۵۶۳۲۱۰۹۸</td>
                                        <td><span class="status-pill status-failed">ناموفق</span></td>
                                    </tr>
                                    <tr>
                                        <td>۱۴۰۴/۰۸/۱۲</td>
                                        <td>خرید دوره «خورشت‌های ایرانی»</td>
                                        <td>۲۵۰,۰۰۰ تومان</td>
                                        <td>۴۵۸۷۶۹۱۲</td>
                                        <td><span class="status-pill status-success">موفق</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>

                    <!-- Requests -->
                    <!-- Requests -->
                    <section class="tab-panel" id="tab-requests">
                        <div class="panel-card">
                            <div class="panel-header">
                                <h2>درخواست‌های من</h2>
                                <button type="button" class="btn btn-primary btn-sm" data-open-modal="request-modal">
                                    ثبت درخواست جدید
                                </button>
                            </div>

                            @if ($tickets->isEmpty())
                                <p class="text-center text-muted py-8">
                                    هنوز درخواستی ثبت نکرده‌اید.
                                </p>
                            @else
                                <div class="requests-list">
                                    @foreach ($tickets as $ticket)
                                        <div class="request-item">
                                            <div class="request-main">
                                                <div class="request-title">{{ $ticket->subject }}</div>
                                                <div class="request-meta">
                                                    <span>شماره: {{ $ticket->ticket_number }}</span>
                                                    <span>تاریخ: {{ $ticket->created_at->format('Y/m/d') }}</span>
                                                </div>
                                                <div class="request-meta">
                                                    <span>وضعیت: {{ $ticket->status->label() }}</span>
                                                </div>
                                            </div>
                                            <div>
                            <span class="status-pill {{ $ticket->status->color() }}">
                                {{ $ticket->status->label() }}
                            </span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </section>

                    <!-- Discounts -->
                    <section class="tab-panel" id="tab-discounts">
                        <div class="panel-card">
                            <div class="panel-header">
                                <h2>تخفیف‌های من</h2>
                                <span class="muted">کدهای تخفیف فعال و استفاده‌شده</span>
                            </div>

                            <div class="discounts-grid">
                                <div class="discount-card" data-code="ZIYAFAT20">
                                    <div class="discount-header">
                                        <div class="discount-code">ZIYAFAT20</div>
                                        <button type="button" class="copy-btn" title="کپی کد">
                                            <!-- copy icon -->
                                            <svg viewBox="0 0 24 24" fill="none">
                                                <rect x="9" y="9" width="10" height="10" rx="2" stroke="currentColor"
                                                      stroke-width="1.6"/>
                                                <rect x="5" y="5" width="10" height="10" rx="2" stroke="currentColor"
                                                      stroke-width="1.4" opacity="0.8"/>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="discount-meta">۲۰٪ تخفیف برای تمام دوره‌ها</div>
                                    <div class="discount-footer">
                                        <span>معتبر تا ۱۴۰۴/۱۰/۱۰</span>
                                        <span class="discount-pill">فعال</span>
                                    </div>
                                </div>

                                <div class="discount-card" data-code="RICE10"
                                     style="border-color:#fecaca; background:linear-gradient(140deg,#fff1f2,#ffffff);">
                                    <div class="discount-header">
                                        <div class="discount-code">RICE10</div>
                                        <button type="button" class="copy-btn" title="کپی کد">
                                            <svg viewBox="0 0 24 24" fill="none">
                                                <rect x="9" y="9" width="10" height="10" rx="2" stroke="currentColor"
                                                      stroke-width="1.6"/>
                                                <rect x="5" y="5" width="10" height="10" rx="2" stroke="currentColor"
                                                      stroke-width="1.4" opacity="0.8"/>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="discount-meta">۱۰٪ تخفیف مخصوص دوره‌های برنج</div>
                                    <div class="discount-footer">
                                        <span>معتبر تا ۱۴۰۴/۰۹/۳۰</span>
                                        <span class="discount-pill"
                                              style="background:#fee2e2; border-color:#fecaca; color:#b91c1c;">استفاده‌شده</span>
                                    </div>
                                </div>

                                <div class="discount-card" data-code="DESSERT15">
                                    <div class="discount-header">
                                        <div class="discount-code">DESSERT15</div>
                                        <button type="button" class="copy-btn" title="کپی کد">
                                            <svg viewBox="0 0 24 24" fill="none">
                                                <rect x="9" y="9" width="10" height="10" rx="2" stroke="currentColor"
                                                      stroke-width="1.6"/>
                                                <rect x="5" y="5" width="10" height="10" rx="2" stroke="currentColor"
                                                      stroke-width="1.4" opacity="0.8"/>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="discount-meta">۱۵٪ تخفیف دوره‌های دسر</div>
                                    <div class="discount-footer">
                                        <span>معتبر تا ۱۴۰۴/۱۱/۱۵</span>
                                        <span class="discount-pill">فعال</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Profile -->
                    <section class="tab-panel" id="tab-profile">
                        <div class="panel-card">
                            <div class="panel-header">
                                <h2>اطلاعات کاربری</h2>
                                <span class="muted">نام، نام خانوادگی، موبایل و تغییر رمز</span>
                            </div>

                            <form>
                                <div class="form-grid">
                                    <div class="form-group">
                                        <label for="first_name">نام</label>
                                        <input type="text" id="first_name" class="form-control"
                                               placeholder="مثلاً: زهرا">
                                    </div>

                                    <div class="form-group">
                                        <label for="last_name">نام خانوادگی</label>
                                        <input type="text" id="last_name" class="form-control"
                                               placeholder="مثلاً: محمدی">
                                    </div>

                                    <div class="form-group full">
                                        <label for="mobile">شماره موبایل</label>
                                        <input type="tel" id="mobile" class="form-control"
                                               placeholder="مثلاً: ۰۹۱۲۳۴۵۶۷۸۹">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">رمز عبور جدید</label>
                                        <input type="password" id="password" class="form-control"
                                               placeholder="در صورت تمایل به تغییر">
                                        <div class="password-hint">اگر نمی‌خواهید رمز را تغییر دهید، این فیلد را خالی
                                            بگذارید.
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password_confirmation">تکرار رمز عبور جدید</label>
                                        <input type="password" id="password_confirmation" class="form-control"
                                               placeholder="تکرار رمز جدید">
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">
                                        ذخیره تغییرات
                                    </button>
                                    <button type="button" class="btn btn-ghost">
                                        انصراف
                                    </button>
                                </div>
                            </form>
                        </div>
                    </section>

                </div>
            </div>
        </div>

    </div>
</main>

<footer>
    <div class="container">
        <div class="f-grid">
            <div>
                <div class="f-title">ضیافت</div>
                <p style="font-size:.92rem; line-height:1.7;">
                    ضیافت همراه شماست تا آشپزی در خانه به یک تجربه لذت‌بخش و مطمئن تبدیل شود؛ با دوره‌های ویدیویی،
                    دستورهای گام‌به‌گام و پشتیبانی دائمی.
                </p>
            </div>
            <div>
                <div class="f-title">دسترسی سریع</div>
                <div class="muted">
                    <div>دوره‌ها</div>
                    <div>فروشگاه</div>
                    <div>سوالات متداول</div>
                </div>
            </div>
            <div>
                <div class="f-title">پشتیبانی</div>
                <div class="muted">
                    <div>مرکز تیکت</div>
                    <div>قوانین و مقررات</div>
                    <div>حریم خصوصی</div>
                </div>
            </div>
            <div>
                <div class="f-title">در شبکه‌های اجتماعی</div>
                <div class="muted">
                    <div>اینستاگرام</div>
                    <div>تلگرام</div>
                </div>
            </div>
        </div>

        <div class="copy">
            <span>© تمامی حقوق برای ضیافت محفوظ است.</span>
            <span class="muted">ساخته شده با عشق به آشپزی خانگی ❤️</span>
        </div>
    </div>
</footer>

<!-- Modal: New Request -->
@yield('modals')

<div class="modal-backdrop" id="request-modal">
    <div class="modal-card" role="dialog" aria-modal="true">
        <div class="modal-header">
            <h3>ثبت درخواست جدید</h3>
            <button class="modal-close" type="button" data-close-modal>&times;</button>
        </div>
        <form action="{{ route('tickets.store') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="form-group full">
                    <label for="subject">عنوان درخواست</label>
                    <input type="text" name="subject" id="subject" class="form-control" required
                           placeholder="مثال: مشکل در ویدیو">
                    @error('subject')
                    <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group full" style="margin-top:8px;">
                    <label for="text">شرح درخواست</label>
                    <textarea name="text" id="text" class="form-control" rows="4" required
                              placeholder="توضیح مشکل..."></textarea>
                    @error('text')
                    <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">ثبت درخواست</button>
                <button type="button" class="btn btn-ghost" data-close-modal>انصراف</button>
            </div>
        </form>
    </div>
</div>

<script>
    // Tab switching
    document.querySelectorAll('.js-account-tab').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var tab = this.getAttribute('data-tab');
            if (!tab) return; // ignore logout

            document.querySelectorAll('.js-account-tab').forEach(function (b) {
                if (b.getAttribute('data-tab')) {
                    b.classList.toggle('active', b === btn);
                }
            });

            document.querySelectorAll('.tab-panel').forEach(function (panel) {
                panel.classList.toggle('active', panel.id === 'tab-' + tab);
            });
        });
    });

    // Modal open/close
    document.querySelectorAll('[data-open-modal]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var id = btn.getAttribute('data-open-modal');
            var modal = document.getElementById(id);
            if (modal) modal.classList.add('show');
        });
    });

    function closeModal(modal) {
        modal.classList.remove('show');
    }

    document.querySelectorAll('[data-close-modal]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var modal = this.closest('.modal-backdrop');
            if (modal) closeModal(modal);
        });
    });

    document.querySelectorAll('.modal-backdrop').forEach(function (backdrop) {
        backdrop.addEventListener('click', function (e) {
            if (e.target === backdrop) closeModal(backdrop);
        });
    });

    // Copy discount code
    document.querySelectorAll('.discount-card .copy-btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var card = this.closest('.discount-card');
            if (!card) return;
            var code = card.getAttribute('data-code') || (card.querySelector('.discount-code') && card.querySelector('.discount-code').textContent.trim());
            if (!code) return;

            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(code).then(function () {
                    btn.title = 'کپی شد';
                    setTimeout(function () {
                        btn.title = 'کپی کد';
                    }, 1500);
                }).catch(function () {
                    alert('کد تخفیف: ' + code);
                });
            } else {
                alert('کد تخفیف: ' + code);
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        const url = new URL(window.location);
        const tab = url.searchParams.get('tab');
        if (tab) {
            const btn = document.querySelector(`.js-account-tab[data-tab="${tab}"]`);
            const panel = document.getElementById(`tab-${tab}`);
            if (btn && panel) {
                document.querySelectorAll('.js-account-tab').forEach(b => b.classList.remove('active'));
                document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
                btn.classList.add('active');
                panel.classList.add('active');
            }
        }
    });


    @if (session('openTab'))
    document.addEventListener('DOMContentLoaded', function () {
        const tab = "{{ session('openTab') }}";
        const btn = document.querySelector(`.js-account-tab[data-tab="${tab}"]`);
        const panel = document.getElementById(`tab-${tab}`);
        if (btn && panel) {
            document.querySelectorAll('.js-account-tab').forEach(b => b.classList.remove('active'));
            document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
            btn.classList.add('active');
            panel.classList.add('active');
        }
    });
    @endif


    document.addEventListener('DOMContentLoaded', function () {
        @if (session('openTab'))
        const tabFromSession = "{{ session('openTab') }}";
        activateTab(tabFromSession);
        @endif

        const urlParams = new URLSearchParams(window.location.search);
        const tabFromUrl = urlParams.get('tab');
        if (tabFromUrl) {
            activateTab(tabFromUrl);
        }

        function activateTab(tabName) {
            const btn = document.querySelector(`.js-account-tab[data-tab="${tabName}"]`);
            const panel = document.getElementById(`tab-${tabName}`);
            if (btn && panel) {
                document.querySelectorAll('.js-account-tab').forEach(b => b.classList.remove('active'));
                document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
                btn.classList.add('active');
                panel.classList.add('active');
            }
        }

        document.querySelectorAll('.js-account-tab').forEach(btn => {
            btn.addEventListener('click', function () {
                const tab = this.getAttribute('data-tab');
                history.pushState({}, '', `?tab=${tab}`);
            });
        });
    });
</script>

</body>
</html>
