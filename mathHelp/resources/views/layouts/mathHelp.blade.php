<!doctype html>
<html lang="ru">
<head>
    <title>mathHelp</title>
    <meta charset="utf-8">
</head>
    <header>
        <nav>
            <h1>mathHelp</h1>
        </nav>
    </header>
    <main>
        <nav>
            <ul>
                <li><a href="">Длина биссектрисы (через две стороны и угол)</a></li>
                <li><a href="">Длина биссектрисы (через стороны)</a></li>
                <li><a href="">Длина бисектрисы (через две стороны и отрезки)</a></li>
            </ul>
        </nav>
        <section>
            <h2>@yield('name')</h2>
            <p>@yield('about')</p>
            <p>Ответ: <span>@yield('answer')</span></p>
            @yield('formula')
        </section>
    </main>
</html>