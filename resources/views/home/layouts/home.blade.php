<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <!-- 百度JS接口说明 -->
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

    <meta name="keywords" content="@yield('keywords','海南企众实业(海南企众),建立网站,建站,PP开发,商城开发,小程序开发,微信开发,海南网站团队。')">
    <meta name="description" content="@yield('description','海南企众帮助企业快速开发互联网技术,网站,APP,大型服务器架构,维护及企业工商财务等业务。')" />

    <meta name="baidu-site-verification" content="vd74ZfH6Me" />
    <title>{{$web_title}}---海南企众互联网科技开发网站等技术团队13337550507</title>
    <!-- Bootstrap -->
    <link href="{{url('css/bootstrap_index.css') }}" rel="stylesheet">
    <link href="{{url('css/style.css') }}" rel="stylesheet">
    <link rel="Shortcut Icon" href="{{url('image/logo_icon.png')}}" type="image/x-icon">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    @include('home.layouts.nav')
        @yield('content')
    @include('home.layouts.footer')
    @include('home.layouts.qq-kefu')

<script src="{{url('js/jquery-3.2.1.slim.min.js') }}"></script>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="{{url('js/lazyload.js') }}"></script>
<script src="{{url('js/Headroom.js') }}"></script>
<script src="{{url('js/jQuery.headroom.js') }}"></script>
<script src="{{url('js/bootstrap.min.js') }}"></script>
<script src="{{url('js/common.js') }}"></script>
<script src="{{url('js/scrollreveal.js') }}"></script>
<script src="{{url('js/setreveal.js') }}"></script>
</body>
</html>