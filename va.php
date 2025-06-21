<?php include 'header.php'; ?>

<body>

    <?php include 'navbar.php'; ?>
    <!-- Main Content -->
    <div class="container">
        <h1>☕️ Coffee & Drinks Menu</h1>

        <h2 id="coffee">☕️ Coffee</h2>
        <ul>
            <li>Espresso <span class="price">5,000៛</span></li>
            <li>Americano (Hot / Iced) <span class="price">6,000៛</span></li>
            <li>Cappuccino <span class="price">7,000៛</span></li>
            <li>Latte (Hot / Iced) <span class="price">7,000៛</span></li>
            <li>Mocha <span class="price">8,000៛</span></li>
            <li>Caramel Macchiato <span class="price">8,000៛</span></li>
            <li>Flat White <span class="price">7,000៛</span></li>
            <li>Cold Brew <span class="price">8,000៛</span></li>
        </ul>

        <h2 id="noncoffee">🥛 Non-Coffee</h2>
        <ul>
            <li>Chocolate (Hot / Iced) <span class="price">7,000៛</span></li>
            <li>Matcha Latte <span class="price">8,000៛</span></li>
            <li>Milk Tea <span class="price">6,000៛</span></li>
            <li>Thai Milk Tea <span class="price">6,500៛</span></li>
            <li>Taro Milk <span class="price">6,500៛</span></li>
        </ul>

        <h2 id="special">🍹 Special Drinks</h2>
        <ul>
            <li>Sparkling Lemonade <span class="price">7,000៛</span></li>
            <li>Passion Fruit Soda <span class="price">7,000៛</span></li>
            <li>Blueberry Soda <span class="price">7,000៛</span></li>
            <li>Butterfly Pea Tea <span class="price">7,000៛</span></li>
        </ul>

        <h2 id="addons">🍰 Add-ons</h2>
        <ul>
            <li>Extra Shot <span class="price">+2,000៛</span></li>
            <li>Oat Milk / Soy Milk <span class="price">+2,000៛</span></li>
        </ul>

        <footer>
            📍 Location: [Your Address Here] <br />
            📞 Contact: [Your Phone Number] <br />
            🌐 <a href="https://www.facebook.com/YourPageLinkHere" target="_blank">Visit our Facebook Page</a>
        </footer>
    </div>

    <script>
        function toggleMenu() {
            var menu = document.getElementById('menu');
            menu.classList.toggle('active');
        }
    </script>

</body>

</html>