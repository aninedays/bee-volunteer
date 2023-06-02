<header class="header">

    <a href={{ url('/') }} class="logo"> BeeVolunteer </a>

    <nav class="navbar">
        <a href={{ url('/') }}>home</a>
        <a href={{ url('/charity') }}>charity</a>
        <a href={{ url('/organization') }}>organization</a>
        <a href={{ url('/about-us') }}>about us</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-bell" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="/charity/search" method="GET" class="search-form">
        <input type="text" name="search" placeholder="search here..."  value="{{ old('search') }}">
        {{-- <label type="submit" for="search-box" class="fas fa-search"></label> --}}
        <input type="submit" value="SEARCH">
    </form>

    <form action="" class="login-form">
        <h3>sign in now</h3>
        <input type="email" placeholder="your email" class="box">
        <input type="password" placeholder="your password" class="box">
        <p>sign in as organization? <a href={{ url('/signin') }}>click here</a></p>
        <p>don't have an account? <a href={{ url('/signup') }}>create now</a></p>
        <a href={{ url('/') }}><input type="button" value="sign in now" class="btn"></a>
    </form>


</header>
