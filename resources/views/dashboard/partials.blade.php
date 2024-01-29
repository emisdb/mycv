<ul class="treeview">
    @foreach ($topics as $topic)
        <li>
            {{ $topic->name }}
            @if ($topic->descendants->isNotEmpty())
                @include('dashboard.partials', ['topics' => $topic->descendants])
            @endif
        </li>
    @endforeach
</ul>


