@extends('layouts.master')
@section('content')
    <div data-role="main" class="ui-content">
        <div class="ui-grid-b ui-responsive">

            <form method="post" action="demoform.asp">
                <label for="status">Your thoughts?</label>
                <textarea type="text" name="status" id="status"></textarea>
            </form>
            <a href="home.html" class="ui-btn ui-btn-b ui-corner-all">Share</a>
            <div class="ui-block-a">
                <div class="card">
                    <div class="card-image">
                        <img class="image-home" alt="home" src="{{asset('img/Screen%20Shot%202017-09-11%20at%2011.19.54.png')}}" />
                    </div>
                    <p>By : $Nama terus enek waktune</p>
                </div>
            </div>

            <div class="ui-block-b">
                <div class="card">
                    <div class="card-image">
                        <img class="image-home" alt="home" src="{{asset('img/Screen%20Shot%202017-09-11%20at%2011.19.54.png')}}" />
                    </div>
                    <p>By : $Nama</p>
                </div>
            </div>
            <div class="ui-block-c">
                <div class="card">
                    <div class="card-image">
                        <img class="image-home" alt="home" src="{{asset('img/Screen%20Shot%202017-09-11%20at%2011.19.54.png')}}" />
                    </div>
                    <p>By : $Nama</p>
                </div>
            </div>
        </div>
    </div>
@endsection