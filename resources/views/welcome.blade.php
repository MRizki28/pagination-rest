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

            </tbody>
        </table>
        <div id="pagination" class="d-flex justify-content-center">
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.2/jquery.twbsPagination.min.js"></script>

    <script>
        $(document).ready(function() {
            function loadMahasiswaData(page) {
                $.ajax({
                    url: 'mahasiswa?page=' + page,
                    method: 'GET',
                    success: function(response) {
                        console.log(response);
                        $('#mahasiswa-data tbody').empty();

                        for (let i = 0; i < response.data.data.length; i++) {
                            let rowData = '<tr><td>' + response.data.data[i].nama_mahasiswa +
                                '</td></tr>';
                            $('#mahasiswa-data tbody').append(rowData);
                        }
                        $('#pagination').twbsPagination({
                            totalPages: response.data.last_page,
                            visiblePages: 5,
                            startPage: response.data.current_page,
                            onPageClick: function(event, page) {
                                loadMahasiswaData(page);
                            }
                        });
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            }

            loadMahasiswaData(1);
        });
    </script>
</body>

</html>
