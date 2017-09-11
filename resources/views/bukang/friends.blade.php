@extends('layouts.master')
@section('content')
<div data-role="main" class="ui-content">
    <div class="ui-grid-b ui-responsive">
        <h2>My Friends</h2>
        <form class="ui-filterable">
            <input id="myFilter" data-type="search">
        </form>
        <ul data-role="listview" data-filter="true" data-input="#myFilter" data-autodividers="true" data-inset="true">
            <li>
                <a href="{{route('friends.profile')}}">
                    <img src="{{asset('img/Mock%20Up_3.png')}}">
                    <h2>Full Name</h2>
                    <p>Prodi</p>
                </a>
            </li>
            <li>
                <a href="{{route('friends.profile')}}">
                    <img src="{{asset('img/new.png')}}">
                    <h2>Name Name</h2>
                    <p>Prodi</p>
                </a>
            </li>
            <li>
                <a href="{{route('friends.profile')}}">
                    <img src="{{asset('img/new.png')}}">
                    <h2>Contoh Satu</h2>
                    <p>Prodi</p>
                </a>
            </li>
            <li>
                <a href="{{route('friends.profile')}}">
                    <img src="{{asset('img/new.png')}}">
                    <h2>Hayabusa Biasa</h2>
                    <p>Prodi</p>
                </a>
            </li>
            <li>
                <a href="{{route('friends.profile')}}">
                    <img src="{{asset('img/new.png')}}">
                    <h2>Mobile Legend</h2>
                    <p>Prodi</p>
                </a>
            </li>
        </ul>
    </div>
</div>
@endsection
