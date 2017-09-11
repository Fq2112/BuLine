<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/jquery.mobile-1.4.5.css')}}">
    <script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
    <script src="{{asset('js/jquery.mobile-1.4.5.min.js')}}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?73c27e26f610eb3c9f3feb0c75b03925";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</head>
<body>

<div data-role="page" id="pageone">
    <div data-role="header">
        <h1>BuLine</h1>
        <div data-role="navbar">
            <ul>
                <li><a href="{{route('beranda')}}" data-icon="home">Home</a></li>
                <li><a href="{{route('friends')}}" data-icon="user">Friends</a></li>
                <li><a href="{{route('profile')}}" data-icon="edit">Profile</a></li>
            </ul>
        </div>
    </div>
    @yield('content')



</div>

</body>