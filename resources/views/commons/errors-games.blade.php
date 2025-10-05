<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: black;
        }

        .container {
            width: 100%;
        }

        .center {
            text-align: center;
            margin: 300px auto;
            font-size: 1.5em;
        }

        .key {
            text-transform: capitalize;

        }
    </style>
</head>

<body>
    <div class="container">
        <div class="center">


        </div>
    </div>
    <script src="https://cdn.sitestatic.net/assets/jquery/sweet_alert2.min.js"></script>
    <script src="https://cdn.sitestatic.net/assets/jquery/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            function onClose() {

                if (window.opener) {
                    var openerName = window.opener.name;
                    var goBack = window.open('', openerName);
                    goBack.focus();
                    window.close();
                } else {
                    location.href = window.uriPrefix + "/";
                }
            }

            Swal.fire({
                text: '{{ $errorMessage }}',
                icon: "warning",
                title: "Warning",
                // buttons: false,
                onClose: onClose,
                timer: 5000,
                showConfirmButton: true,
            }).then(function() {
                onClose();
            });
        });
    </script>
</body>

</html>
