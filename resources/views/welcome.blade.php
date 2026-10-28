<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Utility Billing Dashboard</title>
    <style>
        :root { color-scheme: light; font-family: Inter, ui-sans-serif, system-ui, sans-serif; }
        * { box-sizing: border-box; }
        body { margin: 0; min-height: 100vh; color: #172033; background: #f4f7fb; }
        main { width: min(960px, calc(100% - 40px)); margin: 0 auto; padding: 28px 0 64px; }
        nav { display: flex; justify-content: space-between; align-items: center; }
        .brand { font-weight: 800; letter-spacing: -.03em; color: #1769aa; }
        .status { color: #18794e; font-size: .9rem; font-weight: 700; }
        .hero { margin-top: 88px; max-width: 680px; }
        h1 { margin: 0; font-size: clamp(2.6rem, 7vw, 5.2rem); line-height: .98; letter-spacing: -.06em; }
        .lead { margin: 28px 0 0; color: #526078; font-size: 1.2rem; line-height: 1.6; }
        .cards { display: grid; grid-template-columns: repeat(4, 1fr); gap: 14px; margin-top: 48px; }
        .card { padding: 20px; background: #fff; border: 1px solid #e1e8f0; border-radius: 14px; box-shadow: 0 8px 24px #183b5d0d; }
        .icon { font-size: 1.6rem; }
        .card strong { display: block; margin-top: 12px; }
        footer { margin-top: 64px; color: #718096; font-size: .9rem; }
        @media (max-width: 640px) { .hero { margin-top: 56px; } .cards { grid-template-columns: repeat(2, 1fr); } }
    </style>
</head>
<body>
    <main>
        <nav>
            <div class="brand">Utility Billing</div>
            <div class="status">● System online</div>
        </nav>

        <section class="hero">
            <h1>Simple, transparent utility billing.</h1>
            <p class="lead">A tenant utility billing dashboard for properties, RUBS calculations, invoices, and resident communication.</p>
        </section>

        <section class="cards" aria-label="Services">
            <div class="card"><span class="icon">💧</span><strong>Water</strong></div>
            <div class="card"><span class="icon">🚿</span><strong>Sewer</strong></div>
            <div class="card"><span class="icon">♻️</span><strong>Trash</strong></div>
            <div class="card"><span class="icon">🏠</span><strong>Extra services</strong></div>
        </section>

        <footer>Tenant billing platform · Built with Laravel</footer>
    </main>
</body>
</html>
