<!doctype html>
<html lang="sv" class="theme-d has-gradient has-pattern">
<head>
    @include('includes.head')
</head>
<body>
<div id="root">

    <header id="top" class="heading-a row">
        @include('includes.header')
    </header>

    <div id="main" class="row">

        @yield('content')

    </div>

    <footer id="footer" class="row">
        @include('includes.footer')
    </footer>
</div>

<script>
    head.load('/javascript/scripts.js','/javascript/mobile.js')
</script>
<script type="text/javascript">
    //<![CDATA[
    var owa_baseUrl = 'https://a.beubo.com/';
    var owa_cmds = owa_cmds || [];
    owa_cmds.push(['setSiteId', '430c6b10ed11b2995697490ce158400d']);
    owa_cmds.push(['trackPageView']);
    owa_cmds.push(['trackClicks']);

    (function() {
        var _owa = document.createElement('script'); _owa.type = 'text/javascript'; _owa.async = true;
        owa_baseUrl = ('https:' == document.location.protocol ? window.owa_baseSecUrl || owa_baseUrl.replace(/http:/, 'https:') : owa_baseUrl );
        _owa.src = owa_baseUrl + 'modules/base/js/owa.tracker-combined-min.js';
        var _owa_s = document.getElementsByTagName('script')[0]; _owa_s.parentNode.insertBefore(_owa, _owa_s);
    }());
    //]]>
</script>

</body>
</html>