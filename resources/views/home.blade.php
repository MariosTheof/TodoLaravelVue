@extends('layouts.app')

@section('content')
    <div id="app">
        <img class="animate__animated animate__swing" alt="Team.blue logo" src="{{ asset('img/logo.png')}}">
        <p class="title">Team.blue Todo List</p>
        <todo-list></todo-list>
    </div>
@endsection

<style>
    * {
        box-sizing: border-box;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }
    body {
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        color: #2c3e50 !important;
        font-family: Karla, sans-serif !important;
        font-size: 16px !important;
        margin: 0;
    }

    ::-webkit-scrollbar {
        height: 10px;
        width: 10px;
    }

    ::-webkit-scrollbar-thumb {
        background-clip: padding-box;
        background-color: #b4c7d0;
        border: 3px solid transparent;
        border-radius: 5px;
    }

    ::-webkit-scrollbar-track-piece {
        background: 0 0;
    }

    #app {
        max-width: 510px;
        margin: 50px auto;
        padding: 0 10px;
    }

    img {
        display: block;
        width: 140px;
        height: 140px;
        margin: 0 auto 15px auto;
    }

    p.title {
        font-size: 20px;
        font-weight: bold;
        text-align: center;
    }
</style>
