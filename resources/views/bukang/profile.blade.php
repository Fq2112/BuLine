@extends('layouts.master')
@section('content')
    <div data-role="main" class="ui-content">
        <div class="ui-grid-b ui-responsive">


            <!--khusus gambar-->
            <div class="center-wrapper img-circle">
                <img class="image-home" src="{{asset('img/Mock%20Up_3.png')}}">
            </div>

            <button class="ui-mini"><i class="fa fa-edit"></i> Edit Profile</button>

            <!--Isi Profile-->

            <h3>Basic Information</h3>
            <div class="cardss">

                <table>
                    <tr>
                        <td><h4 class="superss">Nama</h4></td>
                        <td><h4 class="superss">:</h4></td>
                        <td><h4 class="superss">Contoh Satu</h4></td>
                    </tr>
                    <tr>
                        <td><h4 class="superss">TTL</h4></td>
                        <td><h4 class="superss">:</h4></td>
                        <td><h4 class="superss">Surabaya, 12 Januari 1996</h4></td>
                    </tr>
                    <tr>
                        <td><h4 class="superss">Alamat</h4></td>
                        <td><h4 class="superss">:</h4></td>
                        <td><h4 class="superss">Jl. Raya</h4></td>
                    </tr>
                </table>
            </div>

            <h3>Contact Information</h3>
            <div class="cardss">

                <table>
                    <tr>
                        <td><h4 class="superss">Phone</h4></td>
                        <td><h4 class="superss">:</h4></td>
                        <td><h4 class="superss">082230830233 <a href="#"><i class="fa fa-phone"></i></a></td>
                    </tr>
                    <tr>
                        <td><h4 class="superss">Email</h4></td>
                        <td><h4 class="superss">:</h4></td>
                        <td><h4 class="superss">blabla@mail.com <a href="#"><i class="fa fa-envelope"></i></a></td></h4></td>
                    </tr>
                    <tr>
                        <td><h4 class="superss">fb</h4></td>
                        <td><h4 class="superss">:</h4></td>
                        <td><h4 class="superss">facebook</h4></td>
                    </tr>
                </table>
            </div>
                <a class="ui-btn ui-btn-b ui-corner-all" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i> Sign Out
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
        </div>
    </div>
@endsection
