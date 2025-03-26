<nav class="navbar">
        <div class="logo">
            <img src="/images/logo_cameleon.png" alt="Cameleon Safaris Logo">
        </div>
        <div class="menu-icon" onclick="toggleMenu()">
            ☰
        </div>
    </nav>
    <div class="menu" id="menu">
        <span class="close-btn" onclick="toggleMenu()">&times;</span>
        <a href="/welcome">Home</a>
        <a href="/national-parks">National Parks</a>
        <a href="/trips">Tours</a>
        <a href="/trekking">Trekking</a>
        <a href="/about-us">About Us</a>
        <a href="/contact-us">Contact Us</a>
    </div>
    <script>
        function toggleMenu() {
            const menu = document.getElementById("menu");
            menu.classList.toggle("show");
        }
    </script>
