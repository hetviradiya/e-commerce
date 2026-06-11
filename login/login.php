<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NØIR Login</title>

<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@300;400;500&family=Playfair+Display:ital@1&display=swap" rel="stylesheet">

<style>
:root{
    --bg:#080808;
    --text:#F0EDE6;
    --accent:#C8FF00;
    --muted:#3A3A3A;
    --card:#111111;
    --danger:#FF2D2D;
}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    background:#080808;
    color:#F0EDE6;
    font-family:'Inter',sans-serif;
    min-height:100vh;
    overflow-x:hidden;
}
body::before{
    content:'';
    position:fixed;
    inset:0;
    background:
    linear-gradient(rgba(200,255,0,.03) 1px, transparent 1px),
    linear-gradient(90deg, rgba(200,255,0,.03) 1px, transparent 1px);
    background-size:40px 40px;
}

.login-container{
    width:420px;
    background:rgba(17,17,17,.95);
    padding:50px;
    border:1px solid rgba(200,255,0,.15);
    position:relative;
}

.login-container::after{
    content:'';
    position:absolute;
    inset:0;
    background:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.8'/%3E%3C/filter%3E%3Crect width='100' height='100' filter='url(%23n)' opacity='.03'/%3E%3C/svg%3E");
    pointer-events:none;
}

.small{
    color:var(--accent);
    font-size:12px;
    letter-spacing:3px;
    text-transform:uppercase;
}

.title{
    font-family:'Bebas Neue',sans-serif;
    font-size:72px;
    letter-spacing:3px;
    line-height:1;
    margin-top:10px;
}

.title span{
    font-family:'Playfair Display',serif;
    font-style:italic;
    -webkit-text-stroke:1px var(--text);
    color:transparent;
}

.line{
    height:2px;
    width:100px;
    background:var(--accent);
    margin:20px 0 40px;
}

.input-group{
    margin-bottom:20px;
}

input{
    width:100%;
    background:transparent;
    border:none;
    border-bottom:1px solid var(--muted);
    padding:15px 0;
    color:var(--text);
    font-size:15px;
}

input:focus{
    outline:none;
    border-color:var(--accent);
}

button{
    width:20%;
    background:var(--accent);
    color:#000;
    border:none;
    padding:15px;
    margin-top:10px;
    font-weight:700;
    cursor:pointer;
    transition:.3s;
}

button:hover{
    transform:translateY(-2px);
}

.register-link{
    margin-top:25px;
    text-align:center;
}

.register-link a{
    color:var(--accent);
    text-decoration:none;
}

.featured{
    position:absolute;
    top:20px;
    right:20px;
    background:#000;
    padding:10px 15px;
    border:1px solid rgba(200,255,0,.2);
}

.featured small{
    color:var(--accent);
    display:block;
}
.navbar{
    position:fixed;
    top:0;
    width:100%;
    padding:25px 60px;
    background:#080808;
    display:flex;
    justify-content:space-between;
    z-index:999;
}

.navbar a{
    color:#F0EDE6;
    margin-left:25px;
    text-decoration:none;
}

.hero{
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:space-around;
    padding:120px 80px;
}

.hero-content{
    width:50%;
}

.features{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:30px;
    padding:100px;
}

.feature{
    background:#111;
    padding:40px;
}

.products{
    padding:100px;
}

.product-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:30px;
}

.product-card{
    background:#111;
    padding:20px;
}

.product-card img{
    width:100%;
    height:300px;
    object-fit:cover;
}

.newsletter{
    text-align:center;
    padding:120px 40px;
}

footer{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    padding:80px;
    background:#111;
}
</style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar">
    <div class="logo">NØIR</div>


</nav>

<!-- Hero Section -->
<section class="hero">

    <div class="hero-content">

        <div class="small">
            NEW COLLECTION SS 2026
        </div>

        <h1 class="title">
            <span>Wear</span> THE VOID
        </h1>

        <p class="hero-text">
            Luxury fashion crafted for modern minimalism.
            Discover premium clothing, footwear and accessories.
        </p>

        <a href="#products" class="hero-btn">
            SHOP NOW
        </a>

    </div>

    <!-- Login Card -->
    <div class="login-container">

        <div class="featured">
            <small>FEATURED</small>
            NØIR MEMBER
        </div>

        <h2>LOGIN</h2>

        <form method="POST">

            <div class="input-group">
                <input type="email"
                       name="email"
                       placeholder="Email Address"
                       required>
            </div>

            <div class="input-group">
                <input type="password"
                       name="password"
                       placeholder="Password"
                       required>
            </div>

            <button type="submit"
                    name="submit">
                LOGIN
            </button>

        </form>

        <div class="register-link">
            New here?
            <a href="register.php">
                Create Account
            </a>
        </div>

    </div>

</section>

<!-- Features -->
<section class="features">

    <div class="feature-card">
        <h3>Premium Quality</h3>
        <p>Luxury materials and craftsmanship.</p>
    </div>

    <div class="feature-card">
        <h3>Fast Delivery</h3>
        <p>Worldwide shipping available.</p>
    </div>

    <div class="feature-card">
        <h3>Secure Payment</h3>
        <p>Protected payment gateway.</p>
    </div>

</section>

<!-- Products -->
<section class="products" id="products">

    <h2>Trending Products</h2>

    <div class="product-grid">

        <div class="product-card">
            <img src="images/product1.jpg">
            <h3>Black Coat</h3>
            <span>₹4,999</span>
        </div>

        <div class="product-card">
            <img src="images/product2.jpg">
            <h3>Luxury Sneakers</h3>
            <span>₹2,999</span>
        </div>

        <div class="product-card">
            <img src="images/product3.jpg">
            <h3>Premium Hoodie</h3>
            <span>₹1,999</span>
        </div>

        <div class="product-card">
            <img src="images/product4.jpg">
            <h3>Leather Bag</h3>
            <span>₹5,999</span>
        </div>

    </div>

</section>

<!-- Newsletter -->
<section class="newsletter">

    <h2>Join The NØIR Community</h2>

    <p>
        Get updates about new collections and offers.
    </p>

    <form>
        <input type="email"
               placeholder="Enter your email">

        <button>
            Subscribe
        </button>
    </form>

</section>

<!-- Footer -->
<footer>

    <div>
        <h3>NØIR</h3>
        <p>Luxury Fashion Store</p>
    </div>

    <div>
        <h4>Shop</h4>
        <p>Men</p>
        <p>Women</p>
        <p>Accessories</p>
    </div>

    <div>
        <h4>Support</h4>
        <p>Contact Us</p>
        <p>Returns</p>
        <p>Privacy Policy</p>
    </div>

</footer>

</body>
</html>