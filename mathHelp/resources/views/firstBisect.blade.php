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
        <input type="text" name="a" value="{{$a}}">
        <input type="text" name="b" value='{{$b}}'>
        <input type="text" name="y" value='{{$y}}'>
        <input type="submit" value="Посчитать">
    </form>
@endsection
