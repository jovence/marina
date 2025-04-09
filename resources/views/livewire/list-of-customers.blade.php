<div>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Joined Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->created_at->format('d M Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $customers->links() }}
</div>
