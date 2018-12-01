<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document Feedback</title>
  <style>
    #header{
      width: 80%;
      height: 150px;
      background-color:lightslategrey;
      margin-left: 10%;
      margin-right: 10%;
      padding-top: 15px;
    }
    h2{
      text-align: center;
    }
    #tanggal{
      text-align: center;
      font-family:fantasy;
    }
    #jam{
      text-align: center;
      font-family:fantasy;
    }
    #body{
      width: 80%;
      height: auto;
      margin-left: 10%;
      margin-right: 10%;
      margin-top: 10px;
      padding-bottom: 15px;
    }
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
  </style>
</head>
<body>
  <div id="header">
    <h2>Praktikum {{$praktikum->matkul->nama}}</h2>
    
    <p id="tanggal">{{date('j-n-Y', strtotime($jadwal->tanggal))}}</p>
      <p id="jam">
          {{date('H : i', strtotime($jadwal->mulai))}} -
          {{date('H : i', strtotime($jadwal->selesai))}}
      </p>
  </div>
  <div id="body">
  <table>
      <tr>
        <th width="10px">#</th>
        <th>Feedback</th>
      </tr>
      @php
            $i = 1;
      @endphp
      @forelse ($presensis as $presensi)
        <tr>
          <td>{{$i++}}</td>
          <td>{{$presensi->feedback}}</td>
        </tr>
      @empty
          <h5>Belum ada data</h5>
      @endforelse
      
    </table>
  </div>
</body>
</html>