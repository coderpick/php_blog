    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Elements
        const toggleBtn = document.getElementById('toggleBtn');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');
        const sidebarOverlay = document.getElementById('sidebarOverlay');

        // Toggle Sidebar
        // Toggle Sidebar - using event delegation for robustness
        document.addEventListener('click', function(e) {
            const toggleWrapper = e.target.closest('#toggleBtn');
            if (toggleWrapper) {
                if (window.innerWidth <= 768) {
                    // Mobile: Show/hide sidebar with overlay
                    if (sidebar) sidebar.classList.toggle('mobile-show');
                    if (sidebarOverlay) sidebarOverlay.classList.toggle('show');
                } else {
                    // Desktop: Collapse/expand sidebar
                    if (sidebar) sidebar.classList.toggle('collapsed');
                    if (mainContent) mainContent.classList.toggle('expanded');
                }
            }
        });

        // Close sidebar when clicking overlay (mobile)
        if (sidebarOverlay && sidebar) {
            sidebarOverlay.addEventListener('click', function() {
                sidebar.classList.remove('mobile-show');
                sidebarOverlay.classList.remove('show');
            });
        }

        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                if (sidebar) sidebar.classList.remove('mobile-show');
                if (sidebarOverlay) sidebarOverlay.classList.remove('show');
            }
        });

        // Active menu item
        const menuItems = document.querySelectorAll('.sidebar-menu a');
        menuItems.forEach(item => {
            item.addEventListener('click', function(e) {
                // Modified: Only prevent default if href="#"
                if (this.getAttribute('href') === '#') {
                     e.preventDefault();
                }
                
                menuItems.forEach(i => i.classList.remove('active'));
                this.classList.add('active');

                // Close mobile sidebar after clicking
                if (window.innerWidth <= 768) {
                    if (sidebar) sidebar.classList.remove('mobile-show');
                    if (sidebarOverlay) sidebarOverlay.classList.remove('show');
                }
            });
        });

        // Animate stats on page load
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