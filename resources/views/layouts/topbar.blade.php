<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>老年人平衡能力评估</title>
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel="stylesheet" href="/css/style.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <link rel="stylesheet" href="{{ asset("src/assets/stylesheets/styles.css") }}" />

</head>
<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <img width="40px" src="{{ url('/images/logo.png') }}" href="/" style="margin: 5px">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <a class="navbar-brand" style="margin-right: 30px" href="/">老年人平衡能力评估</a>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle {{ (Request::is('/') ? 'active' : '') }}" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">模型管理<span class="caret"></span></a>
                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                        <li> <a href="#">模型构建</a></li>
                        <li><a href="#">模型展示</a></li>
                        <li><a href="#">模型输出</a></li>
                        {{--<li role="separator" class="divider"></li>--}}
                        {{--<li><a href="/user/logout">退出登录</a></li>--}}
                    </ul>
                </li>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle {{ (Request::is('/') ? 'active' : '') }}" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">人员信息管理<span class="caret"></span></a>
                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                        <li> <a href="#">个人基础信息</a></li>
                        <li><a href="#">个人采样信息管理</a></li>
                        <li><a href="#">个人平衡能力分析</a></li>
                        {{--<li role="separator" class="divider"></li>--}}
                        {{--<li><a href="/user/logout">退出登录</a></li>--}}
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle {{ (Request::is('/') ? 'active' : '') }}" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">分类统计<span class="caret"></span></a>
                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                        <li> <a href="#"><i class="fa fa-user"></i>数据统计</a></li>
                        <li><a href="#">数据分析</a></li>
                        {{--<li><a href="#">Something else here</a></li>--}}
                        {{--<li role="separator" class="divider"></li>--}}
                        {{--<li><a href="/user/logout">退出登录</a></li>--}}
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle {{ (Request::is('/') ? 'active' : '') }}" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">系统管理<span class="caret"></span></a>
                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                        <li> <a href="#">系统配置</a></li>
                        <li><a href="#">数据字典</a></li>
                        <li><a href="#">人员管理</a></li>
                        {{--<li role="separator" class="divider"></li>--}}
                        {{--<li><a href="/user/logout">退出登录</a></li>--}}
                    </ul>
                </li>
            </ul>


            <ul class="nav navbar-nav navbar-right">
                @if(\Illuminate\Support\Facades\Auth::check())
                    <li><a href="#">{{\Illuminate\Support\Facades\Auth::user()->name}}</a> </li>
                    <li><a href="/user/logout">logout</a></li>


                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}<span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                            {{--<li> <a href="#"><i class="fa fa-user"></i>Action</a></li>--}}
                            {{--<li><a href="#">Another action</a></li>--}}
                            {{--<li><a href="#">Something else here</a></li>--}}
                            {{--<li role="separator" class="divider"></li>--}}
                            <li><a href="/user/logout">退出登录</a></li>
                        </ul>
                    </li>




                    <li><img class="media-object img-circle" width="50" alt="图标" src="{{\Illuminate\Support\Facades\Auth::user()->avatar}}"></li>

                @else
                    <li><a href="/user/login">登录</a></li>
                    {{--<li><a href="/user/register">注册</a></li>--}}
                @endif
                {{--<li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>--}}
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

@yield('content')

</body>
</html>

<?php
