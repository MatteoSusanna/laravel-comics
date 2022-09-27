@extends('layout.app')

@section('nome_titolo', 'Comics')

@section('content')
    <div class="container">
        <div class="button_wrap_pos">
            <button class="btn btn-mod">CURRENT SERIES</button>
        </div>

        <div class="comics">
            <div class="comic">
                <div class="comics-img">
                    <img src="#" alt="">
                </div>
                <h4>fumetti</h4>
            </div> 
        </div>

        <div class="button_wrap">
            <button class="btn">LOAD MORE</button>
        </div>
    </div>
@endsection