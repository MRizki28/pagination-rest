<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div id="mahasiswa-data">
        <table class="table">
            <thead>
                <tr>
                    <th>Nama mahasiswa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $d->nama_mahasiswa }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        Halaman : {{ $data->currentPage() }} <br/>
        Jumlah Data : {{ $data->total() }} <br/>
        Data Per Halaman : {{ $data->perPage() }} <br/>
     
        <nav aria-label="Page navigation example">
            <ul class="pagination" id="pagination">
                <li class="page-item"><a class="page-link" href="#">  {{ $data->links() }}</a></li>
              
            </ul>
        </nav>
       
    </div>

   

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>


</body>

</html>
