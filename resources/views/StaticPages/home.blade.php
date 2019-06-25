@extends('layouts.default')
@section('title','主页')
@section('content')
    @if(Auth::check())
        <div class="row">
            <div class="col-md-8">
                <section class="status_form">
                    @include('shared._status_form')
                </section>
            </div>
            <aside class="col-md-4">
                <section class="user_info">
                    @include('shared._user_info',['user'=>Auth::user()])
                </section>
            </aside>
        </div>
    @else
        <div class="jumbotron">
            <h1>撸第一个代码</h1>
            <p class="lead">
                撸第一个代码
            </p>
            <p>从这里开始</p>
            <a href="{{route('signup')}}" class="btn btn-success btn-lg">现在注册</a>
        </div>
    @endif
@stop