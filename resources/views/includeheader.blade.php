<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Navbar</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>


body {
    margin: 0;
    font-family: Arial, sans-serif;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #46d1d3;
    padding: 1rem;
    color: white;
}

.navbar .logo a {
    text-decoration: none;
    color: white;
    font-size: 1.5rem;
}

.nav-links {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
}

.nav-links li {
    margin-left: 1rem;
}

.nav-links a {
    text-decoration: none;
    color: white;
    font-size: 1rem;
}

.nav-links a:hover {
    text-decoration: underline;
}

.hamburger {
    display: none;
    font-size: 1.5rem;
    cursor: pointer;
}

@media (max-width: 768px) {
    .nav-links {
        display: none;
        flex-direction: column;
        width: 100%;
    }

    .nav-links.active {
        display: flex;
    }

    .nav-links li {
        margin: 0.5rem 0;
    }

    .hamburger {
        display: block;
    }
}
</style>
<body>
    <nav class="navbar">
        <div class="logo">
            <a href="#">MyLogo</a>
        </div>
        <ul class="nav-links">
            <li><a href="/">Home</a></li>
            <li><a href="/aboutus">About</a></li>
            <li><a href="/contactus">Contact</a></li>
        </ul>
        <div class="hamburger" id="hamburger">
            &#9776;
        </div>
    </nav>
</body>
</html>
