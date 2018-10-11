@extends('layouts.default')
{{--@section('title','主页')--}}
@section('content')
    <div class="jumbotron">
        <h1>Hello Laravel</h1>
        <p class="lead">
            你现在所看到的的是 <a href="https://laravel-china.org/courses/laravel-essential-training-5.1">laravel 入门教程</a> 的示例项目。
        </p>
        <p>
            将从这里开始
        </p>
        <p>
            <a href="{{ route('signup') }}" class="btn btn-lg btn-success" role="button">现在去注册</a>
        </p>
    </div>
@stop