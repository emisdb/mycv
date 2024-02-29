<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Log ') }}
            {{ $logtitle  }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- log/show.blade.php -->
                    @foreach ($logEntries as $logEntry)
                        @if(strpos($logEntry, $myip) !== false)
                            <p style="background-color: #7a8793">{{ $logEntry }}</p>
                        @else
                            <p>{{ $logEntry }}</p>
                        @endif
                    @endforeach
                    {{ $logEntries->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

