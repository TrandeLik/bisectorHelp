@extends('layouts/mathHelp')

@section('name')
    Длина биссектрисы через две стороны и угол
@endsection

@section('about')
    Данная формула позволяет рассчитать длину биссектрисы через две прилежащие стороны и угол между ними
@endsection

@section('answer', $answer)

@section('formula')
    <form method="post">
        @csrf
        <div class="form-group">
            <input class="form-control" placeholder="a" type="text" name="a" value="{{$a}}"><br><br>
            <input class="form-control" placeholder="b" type="text" name="b" value='{{$b}}'><br><br>
            <input class="form-control" placeholder="y" type="text" name="y" value='{{$y}}'><br><br>
            <input class="btn btn-primary" type="submit" value="Посчитать">
        </div>
    </form>
@endsection
