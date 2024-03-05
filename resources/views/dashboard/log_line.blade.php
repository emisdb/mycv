<!-- log_entry.blade.php -->
@php
    $currentSubstring = substr($logEntry, 0, 10); // Get the first 10 characters
@endphp

@if ($currentSubstring !== $prevSubstring)
    <p><strong>{{ $currentSubstring }}</strong></p> <!-- Display the new substring -->
@endif

@if(strpos($logEntry, $myIp) !== false)
    <p style="background-color: #7a8793; margin-left:5px;">{{ $logEntry }}</p>
@else
    <p style="margin-left:5px;">{{ $logEntry }}</p>
@endif






