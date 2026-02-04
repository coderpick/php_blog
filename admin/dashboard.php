<?php include 'layouts/head.php' ?>

<body>
    <?php include 'layouts/sidebar.php' ?>

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <!-- Header -->
        <?php include 'layouts/header.php' ?>

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

  <?php  include $real_path . '/layouts/script.php' ?>    
</body>

</html>