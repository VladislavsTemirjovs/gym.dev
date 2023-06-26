<style>
    .navigation {
        background-color: #000;
        padding: 10px 0;
        position: sticky;
        top: 0;
        z-index: 100;
    }

    .navigation-list {
        list-style: none;
        display: flex;
        justify-content: flex-start; /* Align items to the left */
        margin: 0;
    }

    .navigation-list li {
        margin: 0 10px;
        position: relative; /* Add relative positioning */
        padding-left: 20px;
    }

    .navigation-list li a {
        color: #FFD700;
        text-decoration: none;
        font-weight: bold;
        position: relative;
    }

    .navigation-list li a:hover {
        color: white;
    }

    .navigation-list li a::before {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: #FFD700;
        transform: scaleX(0);
        transition: transform 0.3s ease-in-out;
    }

    .navigation-list li a:hover::before {
        transform: scaleX(1);
    }

    .submenu {
        display: none;
        position: absolute; /* Position submenu absolutely */
        top: 100%; /* Position submenu below the parent item */
        left: 0;
        background-color: black;
        padding: 10px;
        border-radius: 2px;
    }

    .navigation-list li:hover .submenu {
        display: block;
    }

    .submenu li {
        margin-bottom: 5px;
    }

    .submenu li a {
        color: #FFD700;
        text-decoration: none;
        font-weight: bold;
    }
</style>

<nav class="navigation">
    <ul class="navigation-list">
        <li><a href="#">Sākums</a></li>
        <li>
            <a href="{{ route('competitions.all') }}">Kalendārs</a>
            <ul class="submenu">
                <li><a href="{{ route('competitions.create') }}">Izveidot Jaunas sacensības</a></li>
            </ul>
        </li>
        <li><a href="#">Reitings</a></li>
        <li><a href="#">Profils</a></li>
    </ul>
</nav>






