<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Log ') }}
            {{ $logTitle  }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                @php $prevSubstring = ''; @endphp
                @foreach ($logEntries as $logEntry)
                        @include('dashboard.log_line',  ['prevSubstring' => $prevSubstring])
                        @php $prevSubstring = substr($logEntry, 0, 10); @endphp <!-- Update previous substring -->
                    @endforeach
                    {{ $logEntries->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

