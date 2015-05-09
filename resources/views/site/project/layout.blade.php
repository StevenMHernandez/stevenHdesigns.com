<!DOCTYPE html>
<html>
<head>
@include('layout._header')
</head>

<body>
    <header id="header">
        <div><a href="/">Steven<wbr/><span class="accent">Hernandez</span></a></div>
    </header>
    <nav id="sticky_navigation">
        <ul>
            <li><a href="/#about">About.</a></li>
            <li><a href="/#portfolio">Portfolio.</a></li>
            <li><a href="/#contact">Contact.</a></li>
        </ul>
    </nav>
    <article>

        @yield('content')

        @include('layout._contact_form')

    </article>

<footer>
    Steven<span class="accent">Hernandez</span> 2014<br/>
    Graphic Design, Web Design and Web Development. <span class="accent">- Richmond and Midlothian, VA</span><br/><br/>
    <a href="/#contact">Contact</a>.
</footer>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="/assets/js/scroll.js"></script>
@include('layout._analytics')
</body>
</html>
