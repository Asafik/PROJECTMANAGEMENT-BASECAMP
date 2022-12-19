<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Project Management</title>
    <!-- Favicon-->
    <link rel="icon" type="image/logo" href="img/logo.svg" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    @include('layout.components.navbar')
    <div class="main-content">
        @yield('content')

        <style>
        body {

            background-color: #D0D9EE;

        }
        </style>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <!-- alert delete -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="js/scripts.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript">
        $(function() {
            $(document).on('click', '#reset', function(e) {
                e.preventDefault();
                var link = $(this).attr("href");

                //alert
                Swal.fire({
                    title: "Are you sure riset time ?",
                    type: "info",
                    showCancelButton: true,
                    confirmButtonText: "Reset it",
                    confirmButtonColor: "#ff704d",
                    cancelButtonColor: "#999999",
                    reverseButtons: true,
                    focusConfirm: false,
                    focusCancel: true
                });
                //end alert
            });
        });

        $(function() {
            $(document).on('click', '#delete', function(e) {
                e.preventDefault();
                var link = $(this).attr("href");

                //alert
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })

                swalWithBootstrapButtons.fire({
                    title: 'Apakah anda yakin ?',
                    text: "Data yang terhapus tidak dapat dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'No, Batal!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = link
                        swalWithBootstrapButtons.fire(
                            'Terhapus!',
                            'Data berhasil dihapus.',
                            'success'
                        )
                    } else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                            'Dibatalkan!',
                            'Batal hapus data :)',
                            'error'
                        )
                    }
                })
                //end alert
            });
        });
        </script>
    </div>
</body>

</html>