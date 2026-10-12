
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kusina ng Ima Ku | Kapampangan Cuisine</title>

    <style>
        :root {
            --red: #B8321F;
            --green: #3E6B3A;
            --gold: #E5A823;
            --cream: #FFF8EC;
            --brown: #2B1A12;
            --white: #FFFFFF;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: var(--cream);
            color: var(--brown);
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .navbar {
            min-height: 82px;
            padding: 16px 7%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            background: var(--cream);
            border-bottom: 1px solid #eadfce;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-icon {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: var(--red);
            color: var(--gold);
            display: grid;
            place-items: center;
            font-size: 26px;
        }

        .brand-name {
            font-family: Georgia, serif;
            font-size: 21px;
            font-weight: bold;
            line-height: 1.2;
        }

        .brand-tagline {
            color: var(--green);
            font-size: 10px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 28px;
            font-size: 14px;
            font-weight: bold;
        }

        .nav-links a:hover {
            color: var(--red);
        }

        .nav-button {
            background: var(--red);
            color: var(--white) !important;
            padding: 11px 20px;
            border-radius: 5px;
        }

        .hero {
            min-height: 520px;
            padding: 75px 7%;
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            align-items: center;
            gap: 50px;
            background:
                radial-gradient(ellipse at 85% 15%, #f1dfb9 0%, transparent 42%),
                var(--cream);
        }

        .eyebrow {
            color: var(--green);
            text-transform: uppercase;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 3px;
            margin-bottom: 18px;
        }

        .hero h1 {
            font-family: Georgia, serif;
            font-size: clamp(40px, 5vw, 65px);
            line-height: 1.1;
            margin-bottom: 22px;
        }

        .hero h1 span {
            color: var(--red);
        }

        .hero p {
            max-width: 510px;
            color: #6e5b4b;
            margin-bottom: 30px;
            font-size: 16px;
        }

        .button {
            display: inline-block;
            padding: 13px 23px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            transition: 0.2s;
        }

        .button-primary {
            background: var(--red);
            color: var(--white);
        }

        .button-primary:hover {
            background: #922719;
            transform: translateY(-2px);
        }

        .button-outline {
            border: 1px solid var(--green);
            color: var(--green);
            margin-left: 10px;
        }

        .hero-art {
            min-height: 350px;
            border-radius: 48% 48% 18px 18px;
            background: var(--green);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .hero-art::before {
            content: "";
            width: 280px;
            height: 280px;
            border: 2px solid rgba(255, 248, 236, 0.3);
            border-radius: 50%;
            position: absolute;
        }

        .hero-dish {
            width: 240px;
            height: 240px;
            border-radius: 50%;
            background: var(--cream);
            border: 12px solid #e7d7bb;
            box-shadow: 0 18px 35px #18351c55;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 105px;
            z-index: 1;
        }

        .hero-label {
            position: absolute;
            bottom: 20px;
            right: 20px;
            background: var(--gold);
            padding: 12px 18px;
            border-radius: 5px;
            font-size: 12px;
            font-weight: bold;
            z-index: 2;
        }

        .welcome-strip {
            background: var(--red);
            color: var(--cream);
            text-align: center;
            padding: 17px 20px;
            font-family: Georgia, serif;
            font-size: 18px;
        }

        .section {
            padding: 75px 7%;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 38px;
        }

        .section-heading .eyebrow {
            margin-bottom: 8px;
        }

        .section-heading h2 {
            font-family: Georgia, serif;
            font-size: clamp(30px, 4vw, 42px);
            margin-bottom: 10px;
        }

        .section-heading p {
            color: #786858;
            font-size: 14px;
        }

        .dish-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 25px;
        }

        .dish-card {
            background: var(--white);
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid #eee3d4;
            transition: 0.25s;
        }

        .dish-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 28px #2b1a1214;
        }

        .dish-picture {
            min-height: 175px;
            background: #f0e2c9;
            display: grid;
            place-items: center;
            font-size: 75px;
        }

        .dish-info {
            padding: 22px;
        }

        .dish-info h3 {
            font-family: Georgia, serif;
            font-size: 22px;
            margin-bottom: 8px;
        }

        .dish-info p {
            font-size: 13px;
            color: #786858;
            margin-bottom: 16px;
        }

        .dish-tag {
            display: inline-block;
            color: var(--green);
            background: #edf3e9;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: bold;
        }

        .about {
            background: #f1e6d3;
            display: grid;
            grid-template-columns: 0.8fr 1.2fr;
            align-items: center;
            gap: 45px;
        }

        .about-mark {
            min-height: 250px;
            border-radius: 12px;
            background: var(--green);
            color: var(--gold);
            display: grid;
            place-items: center;
            text-align: center;
            padding: 30px;
            font-family: Georgia, serif;
            font-size: 34px;
        }

        .about-mark span {
            display: block;
            font-family: Arial, sans-serif;
            font-size: 11px;
            letter-spacing: 3px;
            color: var(--cream);
        }

        .about h2 {
            font-family: Georgia, serif;
            font-size: 38px;
            line-height: 1.2;
            margin-bottom: 18px;
        }

        .about p {
            color: #6e5b4b;
            margin-bottom: 20px;
        }

        .order-banner {
            padding: 60px 7%;
            text-align: center;
            background: var(--green);
            color: var(--cream);
        }

        .order-banner h2 {
            font-family: Georgia, serif;
            font-size: 36px;
            margin-bottom: 12px;
        }

        .order-banner p {
            margin-bottom: 25px;
            color: #e8eadf;
        }

        .order-banner .button {
            background: var(--gold);
            color: var(--brown);
        }

        footer {
            padding: 25px 7%;
            background: var(--brown);
            color: #f7ead7;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            font-size: 12px;
        }

        footer a {
            color: var(--gold);
        }

        @media (max-width: 800px) {
            .navbar {
                flex-direction: column;
            }

            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
                gap: 15px;
            }

            .hero {
                grid-template-columns: 1fr;
                padding-top: 55px;
            }

            .hero-art {
                min-height: 300px;
            }

            .dish-grid {
                grid-template-columns: 1fr;
            }

            .about {
                grid-template-columns: 1fr;
            }

            footer {
                flex-direction: column;
                text-align: center;
            }
        }

        @media (max-width: 430px) {
            .nav-links {
                gap: 12px;
                font-size: 12px;
            }

            .button-outline {
                margin: 12px 0 0;
            }

            .hero {
                padding-left: 6%;
                padding-right: 6%;
            }
        }
    </style>
</head>

<body>

    <header class="navbar">
        <a href="{{ url('/home') }}" class="brand">
            <div class="brand-icon">✦</div>
            <div>
                <div class="brand-name">Kusina ng Ima Ku</div>
                <div class="brand-tagline">A Taste of Pampanga</div>
            </div>
        </a>

        <nav class="nav-links">
            <a href="{{ url('/home') }}">Home</a>
            <a href="{{ url('/menu') }}">Our Menu</a>
            <a href="{{ url('/orders') }}">My Orders</a>
            <a href="{{ url('/account') }}">My Account</a>
            <a href="{{ url('/login') }}" class="nav-button">Login</a>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div>
                <div class="eyebrow">Authentic Kapampangan Cuisine</div>

                <h1>
                    Home-cooked goodness,
                    <span>made with love.</span>
                </h1>

                <p>
                    Discover the rich flavors of Pampanga at Kusina ng Ima Ku.
                    Enjoy comforting Filipino favorites inspired by Kapampangan
                    cooking and the warmth of home.
                </p>

                <a href="{{ url('/menu') }}" class="button button-primary">
                    Explore Our Menu →
                </a>

                <a href="{{ url('/register') }}" class="button button-outline">
                    Create Account
                </a>
            </div>

            <div class="hero-art">
                <div class="hero-dish">🍲</div>
                <div class="hero-label">Lutong may pagmamahal</div>
            </div>
        </section>

        <div class="welcome-strip">
            “Masarap na pagkain, parang yakap ni Ima Ku.”
        </div>

        <section class="section" id="menu">
            <div class="section-heading">
                <div class="eyebrow">From Our Kitchen</div>
                <h2>Discover Our Favorites</h2>
                <p>Classic Filipino comfort food, inspired by the flavors of Pampanga.</p>
            </div>

            <div class="dish-grid">
                <article class="dish-card">
                    <div class="dish-picture">🍖</div>
                    <div class="dish-info">
                        <h3>Kapampangan Sisig</h3>
                        <p>A beloved Pampanga specialty known for its savory, tangy flavor.</p>
                        <span class="dish-tag">Kapampangan Favorite</span>
                    </div>
                </article>

                <article class="dish-card">
                    <div class="dish-picture">🍗</div>
                    <div class="dish-info">
                        <h3>Chicken Adobo</h3>
                        <p>A Filipino classic cooked with a delicious blend of soy sauce, vinegar, and spices.</p>
                        <span class="dish-tag">Filipino Classic</span>
                    </div>
                </article>

                <article class="dish-card">
                    <div class="dish-picture">🍲</div>
                    <div class="dish-info">
                        <h3>Bringhe</h3>
                        <p>A festive Kapampangan rice dish inspired by the flavors of local celebrations.</p>
                        <span class="dish-tag">Local Specialty</span>
                    </div>
                </article>
            </div>
        </section>

        <section class="section about">
            <div class="about-mark">
                Kusina ng Ima Ku
                <span>TRADITION · FLAVOR · FAMILY</span>
            </div>

            <div>
                <div class="eyebrow">Our Story</div>
                <h2>More than a meal, it's a taste of home.</h2>
                <p>
                    Kusina ng Ima Ku celebrates Kapampangan food and the
                    tradition of sharing delicious meals with family. Every
                    dish represents the warmth, culture, and hospitality
                    that make Pampanga special.
                </p>
                <a href="{{ url('/menu') }}" class="button button-primary">
                    See Our Menu →
                </a>
            </div>
        </section>

        <section class="order-banner">
            <h2>Your next favorite meal awaits.</h2>
            <p>Explore our menu and discover the flavors of Kusina ng Ima Ku.</p>
            <a href="{{ url('/menu') }}" class="button">Browse the Menu</a>
        </section>
    </main>

    <footer>
        <div>
            <strong>Kusina ng Ima Ku</strong>
            <div>A Taste of Pampanga</div>
        </div>

        <div>© {{ date('Y') }} Kusina ng Ima Ku. All rights reserved.</div>

        <a href="{{ url('/admin/login') }}">Admin Login</a>
    </footer>

</body>
</html>
