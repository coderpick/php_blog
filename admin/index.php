<!-- admin dashboard -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Admin Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --sidebar-width: 260px;
            --sidebar-collapsed-width: 70px;
            --sidebar-bg: #1a1c23;
            --sidebar-hover: #2d303a;
            --header-height: 65px;
            --primary-color: #6366f1;
            --success-color: #10b981;
            --warning-color: #f59e0b;
            --danger-color: #ef4444;
            --info-color: #3b82f6;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            background-color: #f0f2f5;
        }

        /* Sidebar Styles */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: var(--sidebar-width);
            background: var(--sidebar-bg);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 1000;
            overflow: hidden;
            box-shadow: 4px 0 15px rgba(0, 0, 0, 0.1);
        }

        .sidebar.collapsed {
            width: var(--sidebar-collapsed-width);
        }

        /* Hover to expand when collapsed */
        .sidebar.collapsed:hover {
            width: var(--sidebar-width);
            box-shadow: 4px 0 25px rgba(0, 0, 0, 0.3);
        }

        .sidebar.collapsed:hover .logo-text,
        .sidebar.collapsed:hover .sidebar-menu a span,
        .sidebar.collapsed:hover .menu-label,
        .sidebar.collapsed:hover .user-info {
            display: block !important;
            opacity: 1 !important;
        }

        .sidebar.collapsed:hover .sidebar-menu a {
            justify-content: flex-start !important;
            padding: 12px 15px !important;
        }

        .sidebar.collapsed:hover .sidebar-menu a i {
            min-width: 35px !important;
        }

        .sidebar-header {
            height: var(--header-height);
            display: flex;
            align-items: center;
            padding: 0 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar-header .logo {
            color: #fff;
            font-size: 1.4rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            white-space: nowrap;
        }

        .sidebar-header .logo i {
            font-size: 1.8rem;
            color: var(--primary-color);
        }

        .sidebar.collapsed .logo-text {
            display: none;
            opacity: 0;
        }

        .sidebar-content {
            height: calc(100vh - var(--header-height));
            overflow-y: auto;
            overflow-x: hidden;
            padding: 15px 0;
        }

        .sidebar-content::-webkit-scrollbar {
            width: 5px;
        }

        .sidebar-content::-webkit-scrollbar-track {
            background: transparent;
        }

        .sidebar-content::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
        }

        .menu-label {
            color: #6b7280;
            font-size: 0.7rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 15px 20px 10px;
            white-space: nowrap;
        }

        .sidebar.collapsed .menu-label {
            display: none;
            opacity: 0;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-menu li {
            margin: 4px 10px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            color: #9ca3af;
            text-decoration: none;
            border-radius: 10px;
            transition: all 0.3s ease;
            white-space: nowrap;
            position: relative;
        }

        .sidebar-menu a:hover {
            background: var(--sidebar-hover);
            color: #fff;
        }

        .sidebar-menu a.active {
            background: var(--primary-color);
            color: #fff;
        }

        .sidebar-menu a i {
            font-size: 1.2rem;
            min-width: 35px;
        }

        .sidebar-menu a .badge {
            margin-left: auto;
            font-size: 0.7rem;
            padding: 4px 8px;
        }

        .sidebar.collapsed .sidebar-menu a span,
        .sidebar.collapsed .sidebar-menu a .badge {
            display: none;
            opacity: 0;
        }

        .sidebar.collapsed .sidebar-menu a {
            justify-content: center;
            padding: 12px;
        }

        .sidebar.collapsed .sidebar-menu a i {
            min-width: auto;
        }

        /* Sidebar User Section */
        .sidebar-user {
            padding: 15px;
            margin: 10px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            display: flex;
            align-items: center;
        }

        .sidebar-user img {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            object-fit: cover;
        }

        .sidebar.collapsed .user-info {
            display: none;
            opacity: 0;
        }

        .user-info {
            margin-left: 12px;
            white-space: nowrap;
        }

        .user-info h6 {
            color: #fff;
            margin: 0;
            font-size: 0.9rem;
        }

        .user-info small {
            color: #6b7280;
            font-size: 0.75rem;
        }

        /* Main Content Styles */
        .main-content {
            margin-left: var(--sidebar-width);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            min-height: 100vh;
        }

        .main-content.expanded {
            margin-left: var(--sidebar-collapsed-width);
        }

        /* Header Styles */
        .header {
            height: var(--header-height);
            background: #fff;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            padding: 0 25px;
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .toggle-btn {
            background: #f3f4f6;
            border: none;
            font-size: 1.3rem;
            cursor: pointer;
            color: #374151;
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .toggle-btn:hover {
            background: #e5e7eb;
        }

        .header-search {
            position: relative;
            margin-left: 20px;
        }

        .header-search input {
            width: 280px;
            padding: 10px 15px 10px 40px;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .header-search input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }

        .header-search i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .header-action-btn {
            width: 42px;
            height: 42px;
            border-radius: 10px;
            border: none;
            background: #f3f4f6;
            color: #374151;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
        }

        .header-action-btn:hover {
            background: #e5e7eb;
        }

        .header-action-btn .notification-dot {
            position: absolute;
            top: 8px;
            right: 8px;
            width: 8px;
            height: 8px;
            background: var(--danger-color);
            border-radius: 50%;
        }

        .quick-action-btn {
            padding: 10px 20px;
            border-radius: 10px;
            border: none;
            background: var(--primary-color);
            color: #fff;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .quick-action-btn:hover {
            background: #5558e3;
            transform: translateY(-2px);
        }

        /* Dashboard Content */
        .page-header {
            margin-bottom: 25px;
        }

        .page-header h1 {
            font-size: 1.75rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 5px;
        }

        .page-header p {
            color: #6b7280;
            margin: 0;
        }

        /* Stat Cards */
        .stat-card {
            background: #fff;
            border-radius: 16px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border: 1px solid #f3f4f6;
            height: 100%;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .stat-card .stat-icon {
            width: 55px;
            height: 55px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .stat-card .stat-icon.primary {
            background: rgba(99, 102, 241, 0.1);
            color: var(--primary-color);
        }

        .stat-card .stat-icon.success {
            background: rgba(16, 185, 129, 0.1);
            color: var(--success-color);
        }

        .stat-card .stat-icon.warning {
            background: rgba(245, 158, 11, 0.1);
            color: var(--warning-color);
        }

        .stat-card .stat-icon.info {
            background: rgba(59, 130, 246, 0.1);
            color: var(--info-color);
        }

        .stat-card h3 {
            font-size: 1.9rem;
            font-weight: 700;
            color: #1f2937;
            margin: 15px 0 5px;
        }

        .stat-card p {
            color: #6b7280;
            margin: 0;
            font-size: 0.9rem;
        }

        .stat-card .stat-change {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            font-size: 0.85rem;
            font-weight: 500;
            padding: 4px 10px;
            border-radius: 20px;
            margin-top: 10px;
        }

        .stat-card .stat-change.positive {
            background: rgba(16, 185, 129, 0.1);
            color: var(--success-color);
        }

        .stat-card .stat-change.negative {
            background: rgba(239, 68, 68, 0.1);
            color: var(--danger-color);
        }

        /* Content Cards */
        .content-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            border: 1px solid #f3f4f6;
            overflow: hidden;
        }

        .content-card-header {
            padding: 20px 25px;
            border-bottom: 1px solid #f3f4f6;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .content-card-header h5 {
            margin: 0;
            font-weight: 600;
            color: #1f2937;
        }

        .content-card-body {
            padding: 20px 25px;
        }

        /* Traffic Chart Placeholder */
        .chart-container {
            height: 280px;
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            padding: 20px 0;
            gap: 8px;
        }

        .chart-bar {
            flex: 1;
            background: linear-gradient(180deg, var(--primary-color) 0%, rgba(99, 102, 241, 0.3) 100%);
            border-radius: 8px 8px 0 0;
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
        }

        .chart-bar:hover {
            background: linear-gradient(180deg, #5558e3 0%, rgba(99, 102, 241, 0.5) 100%);
        }

        .chart-bar::after {
            content: attr(data-value);
            position: absolute;
            top: -25px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 0.75rem;
            font-weight: 600;
            color: #6b7280;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .chart-bar:hover::after {
            opacity: 1;
        }

        .chart-labels {
            display: flex;
            justify-content: space-between;
            padding-top: 10px;
            border-top: 1px solid #f3f4f6;
        }

        .chart-labels span {
            flex: 1;
            text-align: center;
            font-size: 0.75rem;
            color: #9ca3af;
        }

        /* Recent Posts Table */
        .posts-table {
            width: 100%;
        }

        .posts-table th {
            padding: 12px 15px;
            text-align: left;
            font-weight: 600;
            color: #6b7280;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 1px solid #f3f4f6;
        }

        .posts-table td {
            padding: 15px;
            border-bottom: 1px solid #f3f4f6;
            vertical-align: middle;
        }

        .posts-table tr:last-child td {
            border-bottom: none;
        }

        .posts-table tr:hover {
            background: #f9fafb;
        }

        .post-title-cell {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .post-thumbnail {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            object-fit: cover;
        }

        .post-info h6 {
            margin: 0 0 3px;
            font-weight: 600;
            color: #1f2937;
            font-size: 0.95rem;
        }

        .post-info small {
            color: #9ca3af;
            font-size: 0.8rem;
        }

        .status-badge {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .status-badge.published {
            background: rgba(16, 185, 129, 0.1);
            color: var(--success-color);
        }

        .status-badge.draft {
            background: rgba(245, 158, 11, 0.1);
            color: var(--warning-color);
        }

        .status-badge.scheduled {
            background: rgba(59, 130, 246, 0.1);
            color: var(--info-color);
        }

        .action-btn {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            border: none;
            background: #f3f4f6;
            color: #6b7280;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .action-btn:hover {
            background: #e5e7eb;
            color: #374151;
        }

        /* Popular Posts */
        .popular-post-item {
            display: flex;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #f3f4f6;
        }

        .popular-post-item:last-child {
            border-bottom: none;
        }

        .popular-post-rank {
            width: 30px;
            height: 30px;
            border-radius: 8px;
            background: #f3f4f6;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: #6b7280;
            font-size: 0.85rem;
            margin-right: 15px;
        }

        .popular-post-rank.top-1 {
            background: linear-gradient(135deg, #fbbf24, #f59e0b);
            color: #fff;
        }

        .popular-post-rank.top-2 {
            background: linear-gradient(135deg, #9ca3af, #6b7280);
            color: #fff;
        }

        .popular-post-rank.top-3 {
            background: linear-gradient(135deg, #d97706, #b45309);
            color: #fff;
        }

        .popular-post-info {
            flex: 1;
        }

        .popular-post-info h6 {
            margin: 0 0 3px;
            font-weight: 600;
            font-size: 0.9rem;
            color: #1f2937;
        }

        .popular-post-info small {
            color: #9ca3af;
        }

        .popular-post-views {
            text-align: right;
        }

        .popular-post-views strong {
            display: block;
            color: #1f2937;
            font-size: 1rem;
        }

        .popular-post-views small {
            color: #9ca3af;
        }

        /* Recent Comments */
        .comment-item {
            display: flex;
            gap: 12px;
            padding: 15px 0;
            border-bottom: 1px solid #f3f4f6;
        }

        .comment-item:last-child {
            border-bottom: none;
        }

        .comment-avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            object-fit: cover;
        }

        .comment-content {
            flex: 1;
        }

        .comment-header {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 5px;
        }

        .comment-header strong {
            color: #1f2937;
            font-size: 0.9rem;
        }

        .comment-header small {
            color: #9ca3af;
        }

        .comment-text {
            color: #6b7280;
            font-size: 0.9rem;
            line-height: 1.5;
            margin-bottom: 8px;
        }

        .comment-post {
            font-size: 0.8rem;
            color: var(--primary-color);
            text-decoration: none;
        }

        .comment-post:hover {
            text-decoration: underline;
        }

        .comment-actions {
            display: flex;
            gap: 5px;
        }

        .comment-action-btn {
            padding: 4px 10px;
            border-radius: 6px;
            border: none;
            font-size: 0.75rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .comment-action-btn.approve {
            background: rgba(16, 185, 129, 0.1);
            color: var(--success-color);
        }

        .comment-action-btn.reject {
            background: rgba(239, 68, 68, 0.1);
            color: var(--danger-color);
        }

        .comment-action-btn:hover {
            filter: brightness(0.95);
        }

        /* Categories Widget */
        .category-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #f3f4f6;
        }

        .category-item:last-child {
            border-bottom: none;
        }

        .category-name {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .category-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }

        .category-count {
            background: #f3f4f6;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            color: #6b7280;
        }

        /* Quick Draft */
        .quick-draft textarea {
            width: 100%;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 15px;
            resize: none;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }

        .quick-draft textarea:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }

        .quick-draft input {
            width: 100%;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 12px 15px;
            font-size: 0.95rem;
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }

        .quick-draft input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }

        /* Responsive */
        @media (max-width: 992px) {
            .header-search {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                left: calc(-1 * var(--sidebar-width));
            }

            .sidebar.mobile-show {
                left: 0;
            }

            .sidebar.collapsed:hover {
                width: var(--sidebar-width);
            }

            .main-content {
                margin-left: 0;
            }

            .main-content.expanded {
                margin-left: 0;
            }

            .header {
                padding: 0 15px;
            }

            .quick-action-btn span {
                display: none;
            }

            .quick-action-btn {
                padding: 10px 12px;
            }
        }

        /* Overlay for mobile */
        .sidebar-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .sidebar-overlay.show {
            display: block;
        }
    </style>
</head>

<body>
    <!-- Sidebar Overlay for Mobile -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Sidebar -->
    <nav class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <div class="logo">
                <i class="bi bi-pencil-square"></i>
                <span class="logo-text ms-2">BlogAdmin</span>
            </div>
        </div>

        <div class="sidebar-content">
            <!-- User Section -->
            <div class="sidebar-user">
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop&crop=face" alt="Admin">
                <div class="user-info">
                    <h6>John Doe</h6>
                    <small>Administrator</small>
                </div>
            </div>

            <div class="menu-label">Main Menu</div>
            <ul class="sidebar-menu">
                <li>
                    <a href="#" class="active">
                        <i class="bi bi-grid-1x2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-file-earmark-text"></i>
                        <span>All Posts</span>
                        <span class="badge bg-primary">124</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-plus-circle"></i>
                        <span>Add New Post</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-folder"></i>
                        <span>Categories</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-tags"></i>
                        <span>Tags</span>
                    </a>
                </li>
            </ul>

            <div class="menu-label">Content</div>
            <ul class="sidebar-menu">
                <li>
                    <a href="#">
                        <i class="bi bi-images"></i>
                        <span>Media Library</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-chat-left-text"></i>
                        <span>Comments</span>
                        <span class="badge bg-danger">12</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-file-earmark-richtext"></i>
                        <span>Pages</span>
                    </a>
                </li>
            </ul>

            <div class="menu-label">Analytics</div>
            <ul class="sidebar-menu">
                <li>
                    <a href="#">
                        <i class="bi bi-graph-up-arrow"></i>
                        <span>Statistics</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-people"></i>
                        <span>Audience</span>
                    </a>
                </li>
            </ul>

            <div class="menu-label">Settings</div>
            <ul class="sidebar-menu">
                <li>
                    <a href="#">
                        <i class="bi bi-person"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-gear"></i>
                        <span>Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-box-arrow-left"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <!-- Header -->
        <header class="header">
            <button class="toggle-btn" id="toggleBtn">
                <i class="bi bi-list"></i>
            </button>

            <div class="header-search">
                <i class="bi bi-search"></i>
                <input type="text" placeholder="Search posts, pages, users...">
            </div>

            <div class="ms-auto header-actions">
                <button class="header-action-btn" title="View Site">
                    <i class="bi bi-globe"></i>
                </button>
                <button class="header-action-btn" title="Notifications">
                    <i class="bi bi-bell"></i>
                    <span class="notification-dot"></span>
                </button>
                <button class="header-action-btn" title="Messages">
                    <i class="bi bi-envelope"></i>
                </button>
                <button class="quick-action-btn">
                    <i class="bi bi-plus-lg"></i>
                    <span>New Post</span>
                </button>
            </div>
        </header>

        <!-- Page Content -->
        <div class="p-4">
            <!-- Page Header -->
            <div class="page-header">
                <h1>Dashboard</h1>
                <p>Welcome back, John! Here's what's happening with your blog today.</p>
            </div>

            <!-- Stats Cards -->
            <div class="row g-4 mb-4">
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="stat-icon primary">
                                <i class="bi bi-file-earmark-text"></i>
                            </div>
                        </div>
                        <h3>124</h3>
                        <p>Total Posts</p>
                        <span class="stat-change positive">
                            <i class="bi bi-arrow-up"></i> 12 this month
                        </span>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="stat-icon success">
                                <i class="bi bi-eye"></i>
                            </div>
                        </div>
                        <h3>45.2K</h3>
                        <p>Page Views</p>
                        <span class="stat-change positive">
                            <i class="bi bi-arrow-up"></i> 18.2% vs last month
                        </span>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="stat-icon warning">
                                <i class="bi bi-chat-dots"></i>
                            </div>
                        </div>
                        <h3>892</h3>
                        <p>Comments</p>
                        <span class="stat-change positive">
                            <i class="bi bi-arrow-up"></i> 24 new
                        </span>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="stat-icon info">
                                <i class="bi bi-person-heart"></i>
                            </div>
                        </div>
                        <h3>3,456</h3>
                        <p>Subscribers</p>
                        <span class="stat-change positive">
                            <i class="bi bi-arrow-up"></i> 156 new
                        </span>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- Traffic Overview Chart -->
                <div class="col-12 col-xl-8">
                    <div class="content-card">
                        <div class="content-card-header">
                            <h5><i class="bi bi-graph-up me-2"></i>Traffic Overview</h5>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown">
                                    Last 7 Days
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#">Last 7 Days</a></li>
                                    <li><a class="dropdown-item" href="#">Last 30 Days</a></li>
                                    <li><a class="dropdown-item" href="#">Last 3 Months</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content-card-body">
                            <div class="chart-container">
                                <div class="chart-bar" style="height: 65%;" data-value="3.2K"></div>
                                <div class="chart-bar" style="height: 85%;" data-value="4.1K"></div>
                                <div class="chart-bar" style="height: 55%;" data-value="2.8K"></div>
                                <div class="chart-bar" style="height: 95%;" data-value="4.8K"></div>
                                <div class="chart-bar" style="height: 75%;" data-value="3.6K"></div>
                                <div class="chart-bar" style="height: 100%;" data-value="5.2K"></div>
                                <div class="chart-bar" style="height: 80%;" data-value="3.9K"></div>
                            </div>
                            <div class="chart-labels">
                                <span>Mon</span>
                                <span>Tue</span>
                                <span>Wed</span>
                                <span>Thu</span>
                                <span>Fri</span>
                                <span>Sat</span>
                                <span>Sun</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Popular Posts -->
                <div class="col-12 col-xl-4">
                    <div class="content-card h-100">
                        <div class="content-card-header">
                            <h5><i class="bi bi-fire me-2"></i>Popular Posts</h5>
                            <a href="#" class="text-primary text-decoration-none small">View All</a>
                        </div>
                        <div class="content-card-body">
                            <div class="popular-post-item">
                                <div class="popular-post-rank top-1">1</div>
                                <div class="popular-post-info">
                                    <h6>10 Tips for Better Writing</h6>
                                    <small>Published 5 days ago</small>
                                </div>
                                <div class="popular-post-views">
                                    <strong>12.5K</strong>
                                    <small>views</small>
                                </div>
                            </div>
                            <div class="popular-post-item">
                                <div class="popular-post-rank top-2">2</div>
                                <div class="popular-post-info">
                                    <h6>Getting Started with SEO</h6>
                                    <small>Published 1 week ago</small>
                                </div>
                                <div class="popular-post-views">
                                    <strong>8.3K</strong>
                                    <small>views</small>
                                </div>
                            </div>
                            <div class="popular-post-item">
                                <div class="popular-post-rank top-3">3</div>
                                <div class="popular-post-info">
                                    <h6>Design Trends 2024</h6>
                                    <small>Published 2 weeks ago</small>
                                </div>
                                <div class="popular-post-views">
                                    <strong>6.7K</strong>
                                    <small>views</small>
                                </div>
                            </div>
                            <div class="popular-post-item">
                                <div class="popular-post-rank">4</div>
                                <div class="popular-post-info">
                                    <h6>JavaScript Best Practices</h6>
                                    <small>Published 3 weeks ago</small>
                                </div>
                                <div class="popular-post-views">
                                    <strong>5.2K</strong>
                                    <small>views</small>
                                </div>
                            </div>
                            <div class="popular-post-item">
                                <div class="popular-post-rank">5</div>
                                <div class="popular-post-info">
                                    <h6>Remote Work Productivity</h6>
                                    <small>Published 1 month ago</small>
                                </div>
                                <div class="popular-post-views">
                                    <strong>4.1K</strong>
                                    <small>views</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Posts Table -->
            <div class="row g-4 mt-1">
                <div class="col-12 col-xl-8">
                    <div class="content-card">
                        <div class="content-card-header">
                            <h5><i class="bi bi-clock-history me-2"></i>Recent Posts</h5>
                            <button class="btn btn-primary btn-sm">
                                <i class="bi bi-plus me-1"></i> Add New
                            </button>
                        </div>
                        <div class="content-card-body p-0">
                            <div class="table-responsive">
                                <table class="posts-table">
                                    <thead>
                                        <tr>
                                            <th>Post</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Views</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="post-title-cell">
                                                    <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=100&h=100&fit=crop" class="post-thumbnail" alt="">
                                                    <div class="post-info">
                                                        <h6>The Ultimate Guide to Content Marketing</h6>
                                                        <small>By John Doe</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Marketing</td>
                                            <td><span class="status-badge published">Published</span></td>
                                            <td>2,345</td>
                                            <td>Dec 15, 2024</td>
                                            <td>
                                                <button class="action-btn me-1"><i class="bi bi-pencil"></i></button>
                                                <button class="action-btn"><i class="bi bi-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="post-title-cell">
                                                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=100&h=100&fit=crop" class="post-thumbnail" alt="">
                                                    <div class="post-info">
                                                        <h6>Understanding Web Analytics</h6>
                                                        <small>By Jane Smith</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Analytics</td>
                                            <td><span class="status-badge draft">Draft</span></td>
                                            <td>--</td>
                                            <td>Dec 14, 2024</td>
                                            <td>
                                                <button class="action-btn me-1"><i class="bi bi-pencil"></i></button>
                                                <button class="action-btn"><i class="bi bi-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="post-title-cell">
                                                    <img src="https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?w=100&h=100&fit=crop" class="post-thumbnail" alt="">
                                                    <div class="post-info">
                                                        <h6>Top 5 Programming Languages in 2024</h6>
                                                        <small>By Mike Johnson</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Technology</td>
                                            <td><span class="status-badge scheduled">Scheduled</span></td>
                                            <td>--</td>
                                            <td>Dec 20, 2024</td>
                                            <td>
                                                <button class="action-btn me-1"><i class="bi bi-pencil"></i></button>
                                                <button class="action-btn"><i class="bi bi-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="post-title-cell">
                                                    <img src="https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?w=100&h=100&fit=crop" class="post-thumbnail" alt="">
                                                    <div class="post-info">
                                                        <h6>How to Build a Personal Brand</h6>
                                                        <small>By Sarah Wilson</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Business</td>
                                            <td><span class="status-badge published">Published</span></td>
                                            <td>1,876</td>
                                            <td>Dec 12, 2024</td>
                                            <td>
                                                <button class="action-btn me-1"><i class="bi bi-pencil"></i></button>
                                                <button class="action-btn"><i class="bi bi-trash"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Comments -->
                <div class="col-12 col-xl-4">
                    <div class="content-card">
                        <div class="content-card-header">
                            <h5><i class="bi bi-chat-left-dots me-2"></i>Recent Comments</h5>
                            <span class="badge bg-danger">12 Pending</span>
                        </div>
                        <div class="content-card-body">
                            <div class="comment-item">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&crop=face" class="comment-avatar" alt="">
                                <div class="comment-content">
                                    <div class="comment-header">
                                        <strong>Alex Morgan</strong>
                                        <small>2 min ago</small>
                                    </div>
                                    <p class="comment-text">This is an amazing article! Really helped me understand the basics of content marketing.</p>
                                    <a href="#" class="comment-post">On: The Ultimate Guide to Content Marketing</a>
                                    <div class="comment-actions mt-2">
                                        <button class="comment-action-btn approve">
                                            <i class="bi bi-check2"></i> Approve
                                        </button>
                                        <button class="comment-action-btn reject">
                                            <i class="bi bi-x"></i> Reject
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-item">
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop&crop=face" class="comment-avatar" alt="">
                                <div class="comment-content">
                                    <div class="comment-header">
                                        <strong>Emma Wilson</strong>
                                        <small>15 min ago</small>
                                    </div>
                                    <p class="comment-text">Great tips! I've implemented some of these and already seeing results.</p>
                                    <a href="#" class="comment-post">On: 10 Tips for Better Writing</a>
                                    <div class="comment-actions mt-2">
                                        <button class="comment-action-btn approve">
                                            <i class="bi bi-check2"></i> Approve
                                        </button>
                                        <button class="comment-action-btn reject">
                                            <i class="bi bi-x"></i> Reject
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-item">
                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&h=100&fit=crop&crop=face" class="comment-avatar" alt="">
                                <div class="comment-content">
                                    <div class="comment-header">
                                        <strong>James Brown</strong>
                                        <small>1 hour ago</small>
                                    </div>
                                    <p class="comment-text">Could you write more about SEO strategies? Would love to learn more!</p>
                                    <a href="#" class="comment-post">On: Getting Started with SEO</a>
                                    <div class="comment-actions mt-2">
                                        <button class="comment-action-btn approve">
                                            <i class="bi bi-check2"></i> Approve
                                        </button>
                                        <button class="comment-action-btn reject">
                                            <i class="bi bi-x"></i> Reject
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Draft & Categories -->
            <div class="row g-4 mt-1">
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="content-card">
                        <div class="content-card-header">
                            <h5><i class="bi bi-lightning me-2"></i>Quick Draft</h5>
                        </div>
                        <div class="content-card-body">
                            <div class="quick-draft">
                                <input type="text" placeholder="Post Title">
                                <textarea rows="4" placeholder="Write your ideas here..."></textarea>
                                <button class="btn btn-primary w-100 mt-3">
                                    <i class="bi bi-save me-2"></i>Save Draft
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4">
                    <div class="content-card">
                        <div class="content-card-header">
                            <h5><i class="bi bi-folder me-2"></i>Categories</h5>
                            <a href="#" class="text-primary text-decoration-none small">Manage</a>
                        </div>
                        <div class="content-card-body">
                            <div class="category-item">
                                <div class="category-name">
                                    <span class="category-dot" style="background: #6366f1;"></span>
                                    <span>Technology</span>
                                </div>
                                <span class="category-count">42</span>
                            </div>
                            <div class="category-item">
                                <div class="category-name">
                                    <span class="category-dot" style="background: #10b981;"></span>
                                    <span>Marketing</span>
                                </div>
                                <span class="category-count">28</span>
                            </div>
                            <div class="category-item">
                                <div class="category-name">
                                    <span class="category-dot" style="background: #f59e0b;"></span>
                                    <span>Business</span>
                                </div>
                                <span class="category-count">21</span>
                            </div>
                            <div class="category-item">
                                <div class="category-name">
                                    <span class="category-dot" style="background: #ef4444;"></span>
                                    <span>Design</span>
                                </div>
                                <span class="category-count">18</span>
                            </div>
                            <div class="category-item">
                                <div class="category-name">
                                    <span class="category-dot" style="background: #3b82f6;"></span>
                                    <span>Lifestyle</span>
                                </div>
                                <span class="category-count">15</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xl-4">
                    <div class="content-card">
                        <div class="content-card-header">
                            <h5><i class="bi bi-globe me-2"></i>Traffic Sources</h5>
                        </div>
                        <div class="content-card-body">
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="small text-muted">Google Search</span>
                                    <span class="small fw-bold">45%</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar" style="width: 45%; background: #4285f4;"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="small text-muted">Direct</span>
                                    <span class="small fw-bold">25%</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar" style="width: 25%; background: #10b981;"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="small text-muted">Social Media</span>
                                    <span class="small fw-bold">20%</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar" style="width: 20%; background: #6366f1;"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="small text-muted">Referral</span>
                                    <span class="small fw-bold">7%</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar" style="width: 7%; background: #f59e0b;"></div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="small text-muted">Others</span>
                                    <span class="small fw-bold">3%</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar" style="width: 3%; background: #9ca3af;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Elements
        const toggleBtn = document.getElementById('toggleBtn');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');
        const sidebarOverlay = document.getElementById('sidebarOverlay');

        // Toggle Sidebar
        toggleBtn.addEventListener('click', function() {
            if (window.innerWidth <= 768) {
                // Mobile: Show/hide sidebar with overlay
                sidebar.classList.toggle('mobile-show');
                sidebarOverlay.classList.toggle('show');
            } else {
                // Desktop: Collapse/expand sidebar
                sidebar.classList.toggle('collapsed');
                mainContent.classList.toggle('expanded');
            }
        });

        // Close sidebar when clicking overlay (mobile)
        sidebarOverlay.addEventListener('click', function() {
            sidebar.classList.remove('mobile-show');
            sidebarOverlay.classList.remove('show');
        });

        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                sidebar.classList.remove('mobile-show');
                sidebarOverlay.classList.remove('show');
            }
        });

        // Active menu item
        const menuItems = document.querySelectorAll('.sidebar-menu a');
        menuItems.forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                menuItems.forEach(i => i.classList.remove('active'));
                this.classList.add('active');

                // Close mobile sidebar after clicking
                if (window.innerWidth <= 768) {
                    sidebar.classList.remove('mobile-show');
                    sidebarOverlay.classList.remove('show');
                }
            });
        });

        // Animate stats on page load
        document.addEventListener('DOMContentLoaded', function() {
            const statCards = document.querySelectorAll('.stat-card h3');
            statCards.forEach(stat => {
                const finalValue = stat.textContent;
                stat.style.opacity = '0';
                stat.style.transform = 'translateY(20px)';

                setTimeout(() => {
                    stat.style.transition = 'all 0.5s ease';
                    stat.style.opacity = '1';
                    stat.style.transform = 'translateY(0)';
                }, 100);
            });
        });
    </script>
</body>

</html>