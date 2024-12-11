

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Konser</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #141e30, #243b55);
            color: #fff;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background-color: rgba(0, 0, 0, 0.8);
        }

        header h1 {
            font-size: 1.8rem;
        }

        header nav a {
            text-decoration: none;
            color: #fff;
            margin: 0 15px;
            font-weight: bold;
        }

        .hero {
            text-align: center;
            padding: 100px 20px;
        }

        .hero h2 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .hero button {
            padding: 15px 30px;
            font-size: 1rem;
            color: #141e30;
            background-color: #f4d03f;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-weight: bold;
        }

        .hero button:hover {
            background-color: #f1c40f;
        }

        .events {
            padding: 50px 20px;
            text-align: center;
        }

        .events h3 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .events .event {
            display: inline-block;
            width: 300px;
            margin: 20px;
            background-color: #fff;
            color: #141e30;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .events .event img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .events .event .info {
            padding: 15px;
        }

        .events .event .info h4 {
            margin: 0 0 10px;
            font-size: 1.2rem;
        }

        .events .event .info p {
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .events .event .info button {
            padding: 10px 20px;
            font-size: 0.9rem;
            color: #fff;
            background-color: #141e30;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .events .event .info button:hover {
            background-color: #243b55;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.8);
        }

        footer p {
            margin: 0;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Tiket Konser</h1>
        <nav>
            <a href="#">Home</a>
            <a href="#">Events</a>
            <a href="#">Contact</a>
            @if (Route::has('login'))
                            
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Dashboard</a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            
                        @endif
        </nav>
    </header>

    <div class="hero">
        <h2>Rasakan Sensasi Konser Live</h2>
        <p>Beli tiket konser terbaik untuk menikmati pengalaman tak terlupakan bersama artis favoritmu!</p>
        <button>Pesan Sekarang</button>
    </div>

    <section class="events">
        <h3>Konser Terpopuler</h3>
        <div class="event">
            <img src="https://via.placeholder.com/300x200" alt="Konser 1">
            <div class="info">
                <h4>Live Music Festival</h4>
                <p>Bandung, 20 Desember 2024</p>
                <button>Detail</button>
            </div>
        </div>

        <div class="event">
            <img src="https://via.placeholder.com/300x200" alt="Konser 2">
            <div class="info">
                <h4>Jazz Night</h4>
                <p>Jakarta, 15 Januari 2025</p>
                <button>Detail</button>
            </div>
        </div>

        <div class="event">
            <img src="https://via.placeholder.com/300x200" alt="Konser 3">
            <div class="info">
                <h4>Rock Legends</h4>
                <p>Surabaya, 10 Februari 2025</p>
                <button>Detail</button>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Tiket Konser. All rights reserved.</p>
    </footer>
</body>
</html>
