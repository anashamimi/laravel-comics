<header>
    <nav class="container">
        <div class="ah-height py-4 d-flex align-items-center justify-content-between">
            <img src="/public/img/dc-logo.png" alt="logo-dc">
            <ul class="d-flex align-items-center gap-4">
                @foreach ( $links as $link )
                    <li class="{{$link['current'] == true ? 'active' : ''}}">
                        <div class="text-uppercase">{{ $link['text'] }}</div>
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>
</header>
