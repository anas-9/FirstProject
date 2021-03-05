<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Personal Website - Code With Dary
    </title>

    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&display=swap"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="//use.fontawesome.com/releases/v5.0.7/css/all.css"
    />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>

        #hero-container {
            background: url({{asset('storage/hero-banner.jpg')}}) no-repeat center center fixed;
            background-size: cover;
            height: 90%;
        }

    </style>
</head>

<body>
<header>
    <!-- Navigation -->
    <nav class="top-menu-container">
        <div class="logo-header">
            <a href="">
                <img
                    src="https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png"
                    alt="Logo personal portfolio"
                    title="Logo personal portfolio"
                />
            </a>
        </div>

        <ul>
            <li>
                <a href="{{Route('home')}}" class="{{request()->is('/') ? 'active' : ''  }}">Home
                </a>
            </li>
            <li>
                <a href="{{Route('about')}}" {{request()->is('about') ? 'active' : ''  }}>About</a>
            </li>
            <li>
                <a href="portfolio" {{request()->is('portfolio') ? 'active' : ''  }}>Portfolio</a>
            </li>
            <li>
                <a href="contact" {{request()->is('contact') ? 'active' : ''  }}>Contact</a>
            </li>

        </ul>
    </nav>
</header>
