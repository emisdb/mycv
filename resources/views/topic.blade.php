<!-- resources/views/topic.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Topico') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div id="app">
                        <toptab-component>
                            <h2>Topics</h2>
                        </toptab-component>
                    </div>
                    <script src="{{ mix('js/app_vue.js') }}"></script>
                </div>
            </div>
        </div>
    </div>
    <div class="border">
        <ul>
            <li>{{ $topic->name }}</li>
            <li>{{ $topic->description }}</li>
            @empty($topic->topic)
                <li> #$#$#$ </li>
            @else
                {{$topic->topic->name}}
            @endempty
        </ul>

    </div>
</x-app-layout>
