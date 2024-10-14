<table>
    <thead>
    <tr>
        <th>#</th>
        <th>status</th>
        <th>error</th>
        <th>name</th>
        <th>email</th>
        <th>phone</th>
        <th>message</th>
        <th>created_at</th>
    </tr>
    </thead>
    <tbody>
    @foreach($forms as $forms)
        <tr>
            <td>{{ $forms->id }}</td>
            <td>-</td>
            <td>-</td>
            <td>{{ $forms->name }}</td>
            <td>{{ $forms->email }}</td>
            <td>{{ $forms->phone }}</td>
            <td>{{ $forms->message }}</td>
            <td>{{ $forms->created_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>