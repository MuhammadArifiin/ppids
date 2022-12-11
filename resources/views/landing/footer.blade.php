<footer>
    <div class="footer-top text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h4 class="navbar-brand">PPIDS<span class="dot">.</span></h4>
                    <div class="col-auto social-icons">
                        @foreach ($socmed as $item)
                        @if ($item->active == 1)
                        <a href="{{ $item->url }}"><i class='{{ $item->name }}'></i></a>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>