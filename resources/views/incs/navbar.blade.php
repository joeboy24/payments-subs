

<div class="navbar-container">
    <div class="navbar-top">
        <div class="navbar-left">
            <p class="maca1">{{auth()->user()->company}}</p>
        </div>
        <div class="navbar-right">
            {{-- <a href="#">Bell</a> --}}
            {{-- {{auth()->user()->name}} --}}
            @if (auth()->user())
                <a href="/logout">Sign Out</a>
            @else
                <a href="/login">Sign in</a>
            @endif
        </div>
    </div>

    <div class="navbar-middle">
        <h2 class="renew">Hosting Renewal</h2>
        <p class="cust-loc">Customer Location &nbsp;|&nbsp; <img class="country-flag" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVus3hFIu037dMTIFx7qpQ_ytZg8uEgFJl31MCnERHACepNAscYfjfu0KZukyzC8MDE9s&usqp=CAU" alt="Japan Flag">&nbsp; Japan </p>
        <p>&nbsp;</p>
    </div>
</div>
