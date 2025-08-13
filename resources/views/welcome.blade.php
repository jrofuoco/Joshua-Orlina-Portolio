<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dua Portfolio</title>
<style>
    html {
        scroll-behavior: smooth;
    }
    
    body {
        margin: 0;
        font-family: 'Helvetica Neue', Arial, sans-serif;
        background: #fff;
        color: #111;
    }
    
    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 40px;
        font-size: 14px;
        position: relative;
        z-index: 10;
    }
    
    header nav a {
        margin: 0 15px;
        text-decoration: none;
        color: #111;
        transition: opacity 0.3s;
    }
    
    header nav a:hover {
        opacity: 0.7;
    }
    
    header a.book-call {
        text-decoration: none;
        color: #111;
        font-weight: bold;
        display: flex;
        align-items: center;
        gap: 5px;
    }
    
    .vertical-text {
        position: fixed;
        left: 40px;
        top: 50%;
        transform: translateY(-50%);
        writing-mode: vertical-rl;
        text-orientation: mixed;
        font-size: 12px;
        color: #666;
        z-index: 5;
    }
    
    .vertical-text .designer {
        margin-bottom: 20px;
    }
    
    .vertical-text .year {
        writing-mode: vertical-lr;
    }
    
    .vertical-line {
        position: fixed;
        left: 80px;
        top: 0;
        width: 1px;
        height: 100vh;
        background: #ddd;
        z-index: 1;
    }
    
    .hero {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 0 0 120px;
        min-height: 100vh;
        position: relative;
    }
    
    .hero-left {
        flex: 1;
        max-width: 50%;
        position: relative;
        padding-left: 100px;
    }
    
    .stats {
        display: flex;
        gap: 40px;
        margin-bottom: 50px;
        margin-left: 20px;
    }
    
    .stat {
        font-size: 14px;
        color: #666;
    }
    
    .stat strong {
        display: block;
        font-size: 32px;
        font-weight: 700;
        color: #111;
        margin-bottom: 5px;
    }

    .Info {
        display: flex;
        flex-direction: column;
        gap: 2px; /* small, controlled gap */
    }
    .Info p {
        margin: 0;
        line-height: 1.4;
    }

    
    .hero-left h1 {
        font-size: 120px;
        margin: 0;
        font-weight: 300;
        line-height: 0.9;
        color: #111;
        text-transform: uppercase;
        letter-spacing: -2px;
    }
    
    .hero-left p {
        font-size: 18px;
        margin-top: 6px;
        color: #666;
        font-weight: 300;
    }
    /* Minimal, readable body copy in hero */
    .hero-left .Info {
        margin-top: 12px;
    }
    .hero-left .Info p {
        margin: 0;                  /* no extra spacing between lines */
        max-width: 58ch;            /* optimal line length for readability */
        font-size: 15px;            /* slightly smaller for a minimalist feel */
        line-height: 1.6;           /* airy line-height */
        color: #555;                /* softer text color */
        font-weight: 300;
    }
    
    .hero-right {
        flex: 1;
        display: flex;
        justify-content: flex-end;
        align-items: flex-end;
        margin-right: 0;
        padding-right: 0;
        height: 100vh;
    }
    
    .hero-right img {
        max-width: 2000px;
        width: 110%;
        height: 100vh;
        object-fit: cover;
        object-position: center top;
    }
    

    
    @media(max-width: 1200px) {
        .vertical-text, .vertical-line {
            display: none;
        }
        
        .hero {
            padding: 0 40px;
        }
    }
    
    @media(max-width: 900px) {
        .hero {
            flex-direction: column;
            text-align: center;
            padding: 20px;
        }
        
        .hero-left, .hero-right {
            max-width: 100%;
        }
        
        .hero-left h1 {
            font-size: 80px;
        }
        
        .stats {
            justify-content: center;
            margin-left: 0;
        }
    }
</style>
</head>
<body>

<header>
    <div class="logo">★</div>
    <nav>
        <a href="#about">About Me</a>
        <a href="#">Portfolio</a>
        <a href="#">Services</a>
        <a href="#">Blog</a>
    </nav>
    <a href="#" class="book-call">Book A Call →</a>
</header>

{{-- <div class="vertical-text">
    <div class="designer">Product designer</div>
    <div class="year">2024</div>
</div> --}}

{{-- <div class="vertical-line"></div> --}}

<section class="hero">
    <div class="hero-left">
        <div class="stats">
            {{-- <div class="stat">
                <strong>+200</strong>
                Project completed
            </div> --}}
            {{-- <div class="stat">
                <strong>+50</strong>
                Startup raised
            </div> --}}
        </div>
        <h1>Hello</h1>
        <div class="Info"> 
        <p>I'm Joshua Orlina — a BSIT Software Development graduate and full-stack developer who builds scalable, user-focused web and mobile applications. From corporate portals to educational games, I bring ideas to life using Laravel, Java, JavaScript, Supabase, and Roboflow.</p>
        </div>
    </div>
    <div class="hero-right">
        <img src="{{ asset('image/profile-5.png') }}" alt="Profile">
    </div>
</section>

@include('about-me')

</body>
</html>
