<header>
    <div class="container">
        <div class="ah-height py-4 d-flex align-items-center justify-content-between">
            <img src="../img/dc-logo.png" alt="logo dc">
            <ul class="d-flex align-items-center gap-4">
                @foreach ( $links as $link )
                    <li v-for="(link, index) in links">
                        <div>{{ $link['text'] }}</div>
                    </li>
                @endforeach


            </ul>
        </div>
    </div>
</header>
