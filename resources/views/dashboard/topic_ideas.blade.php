<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ideas By Topics') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul class="treeview">
                        @foreach ($topics as $topic)
                            <li>
                                <hr/>
                                {{ $topic->name }}
                                @if ($topic->descendants->isNotEmpty())
                                    @include('dashboard.partials', ['topics' => $topic->descendants])
                                @endif
                                @if ($topic->ideas->isNotEmpty())
                                    @include('dashboard.ideas', ['ideas' => $topic->ideas])
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

