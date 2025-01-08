<ul class="nested treeview">
    @foreach ($topics as $topic)
        <li><span @if($topic->descend_counts->isNotEmpty()) class="caret" @endif>
                               {{$topic->id}}.{{ $topic->name }}  : {{$topic->ideas_count}}
                    </span>
            @if ($topic->descend_counts->isNotEmpty())
                @include('dashboard.partials', ['topics' => $topic->descend_counts])
            @endif
        </li>
    @endforeach
</ul>


