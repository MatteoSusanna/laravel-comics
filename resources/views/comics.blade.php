@extends('layout.app')

@section('nome_titolo', 'Comics')

@section('content')
    <div class="container">
        <div class="button_wrap_pos">
            <button class="btn btn-mod">CURRENT SERIES</button>
        </div>

        
            <div class="comics">
            @foreach($fumetti as $fumetto)
                <div class="comic">
                    <div class="comics-img">
                        <img src="{{ $fumetto['thumb'] }}" alt="">
                    </div>
                    <h4>{{ $fumetto['series'] }}</h4>
                </div> 
            @endforeach
            </div>
        

        <div class="button_wrap">
            <button class="btn">LOAD MORE</button>
        </div>
    </div>
@endsection