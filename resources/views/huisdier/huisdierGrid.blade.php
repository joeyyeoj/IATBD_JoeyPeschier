@extends('default')

@section('scripts')
<script src="/js/filter.js" defer></script>
@endsection

@section('content')
<x-header></x-header>

@include('huisdier.components.huisdierfilter')
<ul class="grid">
    @foreach($huisdieren as $huisdier)
        @include('huisdier.components.huisdiergridcard')
    @endforeach
</ul>
@endsection