@extends('app')

@section('content')
<div class="container">
    <div class="Menu__container">
        Navbar
    </div>
    <div class="Menu__container">
        @include('coursework.week_three.tabs')
    </div>
    <div class="Menu__container">
        Sidebar
    </div>
</div>
@endsection
