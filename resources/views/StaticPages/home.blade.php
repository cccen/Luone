@extends('layouts.default')
@section('title','主页')
@section('content')
    <div class="jumbotron">
        <h1>撸第一个代码</h1>
        <p class="lead">
            撸第一个代码
        </p>
        <p>从这里开始</p>
        <a href="{{route('signup')}}" class="btn btn-success btn-lg">现在注册</a>
    </div>
@stop