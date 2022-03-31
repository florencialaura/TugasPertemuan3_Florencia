<html>
    <head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>List Mata Kuliah</title>
        <style>
            table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            margin-left: 20px;
            margin-top: 20px;
            }

            th{
              text-align: center;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Florencia Laura</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/Mata Kuliah">List Mata Kuliah</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/Mata Kuliah/create">Tambah Mata Kuliah</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

        <table >
            <tr>
                <th style="width: 180px;">Nomor Mata Kuliah</th>
                <th style="width: 320px;">Nama Mata Kuliah</th>
                <th style="width: 100px;">Jumlah SKS</th>
            </tr>
           
            @foreach ($matakuliah as $detailMatakuliah)
            <tr>
              <td style="text-align: center">{{ $detailMatakuliah['nomor matakuliah'] }} </td> 
              <td>{{ $detailMatakuliah['nama matakuliah'] }} </td>
              <td style="text-align: center">  {{ $detailMatakuliah['sks'] }}</td>
            </tr>  
            @endforeach

        </table>
    </body>
</html>