<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    th{
        background: lightskyblue;
    }
    td,th {
        border: 1px solid black;
    }
</style>
<body>
    <table style="font-family: sans-serif;width:100%; text-align: center;">
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        @foreach ($barangs as $barang)
        <tr>
        <td>{{$barang->id}}</td>
        <td>{{$barang->nama_barang}}</td>
        <td>{{$barang->harga}}</td>
        <td>{{$barang->stok}}</td>
        </tr>
        @endforeach        
    </table>
</body>
</html>