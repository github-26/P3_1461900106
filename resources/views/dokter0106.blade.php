<head>
<meta name="viewport" content="width=device-width,
initial-scale=1">
<title>Data Rumah Sakit</title>
<style>
table {
border-collapse: collapse;
border-spacing: 0;
width: 100%;
border: 1px solid #ddd;
}
thead {
background-color: #f2f2f2;
}
th, td {
text-align: left;
padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}
.tambah{
padding: 8px 16px ;
text-decoration: none;
}
</style>
</head>
<body>
    <div style="overflow-x:auto;">
    <a class="tambah" href="{{route( 'dokter.create')}}">
    Tambah Data </a>
    <table>
        <thead>
        <tr>
        <th>No</th>
        <th>id</th>
        <th>nama</th>
        <th>jabatan</th>
        <th>Aksi</th>
        </tr>
        </thead>
            <tbody>
            <?php $no=1; ?>
            @foreach ($dokter as $dokter)
            <tr>
            <td>{{$no++}}</td>
            <td>{{$dokter->id}}</td>
            <td>{{$dokter->nama}}</td>
            <td>{{$dokter->jabatan}}</td>
            <td>
                <a href="{{ url('dokter/' . $dokter->id . "/edit") }}">Edit </a>
                |
                <form action="{{ url('dokter/' . $dokter->id) }}" method="post">
                @csrf
                <input type="hidden" name="_method" value "delete">
                <button type="submit">Delete</button>
                </form>
            </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>