<div class="card bg light p-4 m-2">
    <h5 class="text-secondary">{{ $itemTitle }}</h5>
    
    <table>
        @foreach ($collection as $item)
            <tr>
                <td>{{ $item['department'] }}</td>
                <td class="text-end"><strong>{{ $item['total'] }}</strong></td>
            </tr>
        @endforeach
    </table>

</div>