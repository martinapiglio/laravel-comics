<header>

    <div id="header-top">
        <div class="container container-top">
            <a href="#">dc power visa&#8480;</a>
            <a href="#">additional dc sites&reg;</a>
        </div>
    </div>

    <div class="container container-btm">

        <div id="header-left">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>

        <div id="header-center">

            <ul class="mb-0">
                @foreach ($links as $link)
                <li>
                    <span>{{ $link }}</span>    
                </li>        
                @endforeach
            </ul>

        </div>

        <div id="header-right">
            <input type="text" placeholder="Search">
        </div> 

    </div>
</header>