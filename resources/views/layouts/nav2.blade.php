<style>
    /* resources/css/app.css */

    .navigation {
        background-color: #000;
        padding: 10px 0;
        margin-bottom: 50px;
        position: fixed; /* Position fixed to keep it above everything */
        top: 0;
        width: 100%;
        z-index: 10;
    }

    /* Rest of the styles */

    .btn-izlogoties:hover {
        background-color: #000;
        color: #FFD700;
    }

    /* Rest of the styles */
</style>

<nav class="navigation">
    <ul>
        <li>
            <form action="{{ route('lang', ['lang' => 'en']) }}" method="GET" style="display: inline;">
                @csrf
                <button type="submit" name="lang" value="en" style="background-color: yellow; border: none; cursor: pointer;">
                    English
                </button>
            </form>
            <form action="{{ route('lang', ['lang' => 'lv']) }}" method="GET" style="display: inline;">
                @csrf
                <button type="submit" name="lang" value="lv" style="background-color: yellow; border: none; cursor: pointer;">
                    Latvian
                </button>
            </form>
        </li>
    </ul>
</nav>