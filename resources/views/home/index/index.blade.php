@extends('home.layouts.home')
@section('keywords')海南企众实业(海南企众),建立网站,建站,PP开发,商城开发,小程序开发,微信开发,海南网站团队。@stop
@section('description')海南企众帮助企业快速开发互联网技术,网站,APP,大型服务器架构,维护及企业工商财务等业务。@stop


@section('content')

<!-----------------------Banner----------------------->
@include('home.index.banner')

<!--------------------Look-Up-------------------->
@include('home.layouts.lookup')

<!----------------Our-Services--------------->
@include('home.index.our-serveices')

<!-----------------------Our-Advantage------------------>
@include('home.index.our-advantage')

<!----------------company-regist--------------->
@include('home.index.company-regist')

<!-----------------------jizhang------------------>
@include('home.index.jizhang')

<!-----------------------WebExample------------------>
@include('home.index.web_exp')

<!-----------------------OurTeam------------------>
{{--@include('home.index.us_team')--}}

<!-----------------------Price-List------------------>
{{--@include('home.index.price-list')--}}

<!----------------choose-us-div--------------->
@include('home.layouts.chooseup')

@endsection