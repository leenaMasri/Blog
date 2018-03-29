<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
        @if( Auth::check())
        <a class="p-2 text-muted ml-auto" href="#">{{ Auth::user()->name }}</a>
        @endif

    </nav>
</div>