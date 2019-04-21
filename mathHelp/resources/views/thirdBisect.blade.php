@extends('layouts/mathHelp')

@section('name')
    Длина бисектрисы через две стороны и отрезки
@endsection

@section('about')
    Данная формула позволяет рассчитать длину биссектрисы через через две стороны и отрезки, на которые биссектриса делит третью
@endsection

@section('answer', $answer)

@section('formula')
    <form method="post">
        @csrf
        <div class="form-group">
            <input class="form-control" placeholder="a" type="text" name="a" value="{{$a}}"><br><br>
            <input class="form-control" placeholder="b" type="text" name="b" value='{{$b}}'><br><br>
            <input class="form-control" placeholder="d" type="text" name="d" value='{{$d}}'><br><br>
            <input class="form-control" placeholder="e" type="text" name="e" value='{{$e}}'><br><br>
            <input class="btn btn-primary" type="submit" value="Посчитать">
        </div>
    </form>
@endsection