
<div class="sidebar-module sidebar-module-inset">
    <h4>Latest 5 movies</h4>
    <ul>
        @foreach ($sidebar as $sidebarMovie)
            <li>
                <a href="/movies/{{ $sidebarMovie->id }}">{{ $sidebarMovie->title }}</a>
            </li>
        @endforeach
    </ul>
</div>
