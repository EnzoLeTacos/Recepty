<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="templatemo_style.css">
</head>
<body>
    <h1>Kontaktujte nás</h1>
    <nav>
        <ul>
            <li><a href="index.html">Homepage</a></li>
            <li><a href="speciality.html">Speciality Recipes</a></li>
            <li><a href="desserts.html">Cookies & Desserts</a></li>
            <li><a href="vegetarian.html">Vegetarian Food</a></li>
            <li><a href="tips.html">Cooking Tips</a></li>
            <li><a href="contact.html">Contact Us</a></li>
        </ul>
    </nav>
    <p>Máte otázky? Neváhajte nás kontaktovať.</p>
    <form action="contact.html" method="POST">
        <label for="name">Meno:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="message">Správa:</label><br>
        <textarea id="message" name="message" rows="5" required></textarea><br>

        <button type="submit">Odoslať</button>
    </form>
</body>
</html>
