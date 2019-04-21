<!doctype html>
<html lang="ru">
<head>
    <title>mathHelp</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        html{
            margin: 0;
            padding: 0;
        }
    </style>
</head>

    <header class="jumbotron jumbotron-fluid">
        <h1 class="display-3">bisectorHelp</h1>
    </header>

    <main class="row">

        <nav class="card col-12 col-md-3">
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link" href="{{ url('/first')}}">Длина биссектрисы (через две стороны (a, b) и угол (y))</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/second')}}">Длина биссектрисы (через стороны (a, b, c))</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/third')}}">Длина бисектрисы (через две стороны (a, b) и отрезки (d, e))</a></li>
            </ul>
        </nav>

        <section class="card col-12 col-md-8 offset-1">
            <h2>@yield('name')</h2>
            <section>
                <p>@yield('about')</p>
                <img src="https://www-formula.ru/images/geometry/triangle%20bisector1.png" alt="Картинка с изображением"><br><br>
            </section>
            <section>
                <p class="alert alert-primary">Ответ: <span>@yield('answer')</span></p>
                @yield('formula')
            </section>
        </section>

    </main>

<script>
    onload = function ()
    {
        let lnk = document.links;
        for (let j = 0; j < lnk.length; j++)
            if (lnk [j].href === document.URL) lnk [j].style.cssText = `
                    font-weight: bold;
                    `;
    }
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>