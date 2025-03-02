<nav class="mobile-navbar">
        <div class="mobile-logo">
            <img src="/images/logo_cameleon.png" alt="Cameleon Safaris Logo">
        </div>
        <div class="mobile-menu-icon" onclick="toggleMobileMenu()">
            ☰
        </div>
    </nav>
    <div class="mobile-menu" id="mobile-menu">
        <span class="mobile-close-btn" onclick="toggleMobileMenu()">&times;</span>
        <a href="/">Home</a>
        <a href="/tours">Tours</a>
        <a href="/about-us">About Us</a>
        <a href="/contact-us">Contact Us</a>
    </div>
    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById("mobile-menu");
            menu.classList.toggle("show");
        }
    </script>