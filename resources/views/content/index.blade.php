@extends('template.headerFooter')

@section('content')
<table class="table table-stripped">
    <thead>
        <tr>
            <th>Nomor</th>
            <th>id</th>
            <th>Nama Pemain</th>
            <th>Nomor Punggung</th>
            <th>Posisi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pemain_data as $pemain)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pemain->id }}</td>
                <td>{{ $pemain->nama_pemain }}</td>
                <td>{{ $pemain->no_punggung }}</td>
                <td>{{ $pemain->posisi }}</td>
        @endforeach
    </tbody>
</table>
@endsection