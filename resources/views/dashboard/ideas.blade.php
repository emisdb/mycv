<table style="background-color: #0c84ff">
    @foreach ($ideas as $idea)
        <tr>
            <td>
                {{ $idea->name }}
            </td>
            <td>
                {{ $idea->description }}
            </td>
        </tr>
    @endforeach
</table>


