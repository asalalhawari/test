<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>
    <link rel="stylesheet" href="footer-styles.css">
</head>
<style>
    body {
    margin: 0;
    font-family: Arial, sans-serif;
    display: flex;
    flex-direction: column;
  /* align-items: flex-end */
    
}

.footer {
    background-color: #43b8cd;
    color: white;
    padding: 2rem 1rem;
    text-align: center;
}

.footer-content {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.footer-logo a {
    text-decoration: none;
    color: white;
    font-size: 1.5rem;
    margin-bottom: 1rem;
}

.footer-links {
    list-style: none;
    padding: 0;
    margin: 0 0 1rem 0;
    display: flex;
    gap: 1rem;
}

.footer-links li {
    display: inline;
}

.footer-links a {
    text-decoration: none;
    color: white;
    font-size: 1rem;
}

.footer-links a:hover {
    text-decoration: underline;
}

.footer-social {
    margin-bottom: 1rem;
}

.social-icon {
    text-decoration: none;
    color: white;
    font-size: 1.5rem;
    margin: 0 0.5rem;
}

.social-icon:hover {
    color: #ddd;
}

.footer-bottom {
    border-top: 1px solid #444;
    padding-top: 1rem;
}

.footer-bottom p {
    margin: 0;
}

</style>
<body>
    <!-- Other content of your page -->

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-logo">
                <a href="#">MyLogo</a>
            </div>
            <ul class="footer-links">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="/contactus">Contact Us</a></li>
            </ul>
          
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 MyWebsite. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
