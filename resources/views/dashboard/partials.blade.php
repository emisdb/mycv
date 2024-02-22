<ul class="nested treeview">
    @foreach ($topics as $topic)
        <li><span @if($topic->descendants->isNotEmpty()) class="caret" @endif>
                        {{ $topic->name }} : {{$topic->id}}
                    </span>
            @if ($topic->descendants->isNotEmpty())
                @include('dashboard.partials', ['topics' => $topic->descendants])
            @endif
        </li>
    @endforeach
</ul>


