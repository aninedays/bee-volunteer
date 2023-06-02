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

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <form action="" class="login-form">
        <a href={{ url('/profile') }}><input type="profile" value="Manage Profile" class="btn"></a>
        <input type="HistoryCharity" value="History Charity" class="btn">
        <input type="SignOut" value="Sign Out" class="btn">
    </form>

</header>
