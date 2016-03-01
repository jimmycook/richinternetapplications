@extends('app')

@section('content')
<div class="container">
    <div class="Menu__container">
        @include('coursework.week_three.navbar')
    </div>
    <div class="Menu__container">
        @include('coursework.week_three.tabs')
    </div>
    <div class="Menu__container">
        @include('coursework.week_three.sidebar')
    </div>
</div>
@endsection
