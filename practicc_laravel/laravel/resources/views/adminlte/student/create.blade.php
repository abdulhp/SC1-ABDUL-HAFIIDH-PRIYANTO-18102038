@extends('adminlte.admin_layout.app')
@section('header')
    @include('adminlte.admin_layout.header')
@endsection
@section('leftbar')
    @include('adminlte.admin_layout.leftbar')
@endsection
@section('rightbar')
    @include('adminlte.admin_layout.rightbar')
@endsection
@section('content')
<div class="content-wrapper">
    <!--ContentHeader(Pageheader)-->
    <section class="content-header">
        <h1>{{$data['module']['name']}}</h1>
    </section>
    <!--Maincontent-->
    <section class="content">
        
    </section>
    <!--/.content-->
</div>
@endsection
