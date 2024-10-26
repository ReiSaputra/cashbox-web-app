@extends('layouts.master')

@section("title", "Cashbox - Dashboard")

@section('header')
    @component("components.default.header")@endcomponent
@endsection

@section('aside-one')
    @component("components.default.aside-one")@endcomponent
@endsection

@section('main')
    @component("components.default.main")@endcomponent
@endsection

@section('aside-two')
    @component("components.default.aside-two")@endcomponent
@endsection

@section('footer')
    @component("components.default.footer")@endcomponent
@endsection
