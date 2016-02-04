@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Carousel</h1>            
        </div>
        <div class="row">
            <div class="col-sm-4">
                @include('coursework.week_two.carousel')    
            </div>
            <div class="col-sm-8">
                Test
            </div>
        </div>
        
        <div class="row">
            <h1>Javascript Calculator</h1>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                @include('coursework.week_two.calculator')
            </div>
            <div class="col-sm-6 col-md-8">
                @include('coursework.week_two.calculator_explanation')
            </div>
        </div>        
    </div>
@endsection
