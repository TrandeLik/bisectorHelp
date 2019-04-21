@extends('layouts/mathHelp')

@section('name')
    Длина биссектрисы через стороны
@endsection

@section('about')
    Данная формула позволяет рассчитать длину биссектрисы через две три стороны треугольника, где c - сторона, к которой проведена биссектриса
@endsection

@section('answer', $answer)

@section('formula')
    <form method="post">
        @csrf
        <div class="form-group">
            <input class="form-control" placeholder="a" type="text" name="a" value="{{$a}}"><br><br>
            <input class="form-control" placeholder="b" type="text" name="b" value='{{$b}}'><br><br>
            <input class="form-control" placeholder="c" type="text" name="c" value='{{$c}}'><br><br>
            <input class="btn btn-primary" type="submit" value="Посчитать">
        </div>
    </form>
@endsection