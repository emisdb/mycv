<x-lw-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @livewire('project')
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul class="treeview">
                        @foreach ($projs as $proj)
                            <li>
                               <div class="h-10 px-6 font-semibold rounded-md bg-fuchsia text-black">{{ $proj->name }}</div>
                                @if(count($proj->ideas) > 0)
                                    <table class="border-t mr-0 border-b border-l">
                                        @foreach($proj->ideas as $item)
                                            <tr class="border-t mr-0 border-b border-l">
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->description }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-lw-layout>

