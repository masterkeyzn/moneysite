<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QRIS Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #26384d;
            color: #ffffff;
            padding: 30px 0;
        }

        .img-size {
            width: 160px;
        }

        @media screen and (min-width: 768px) {
            .img-size {
                width: 350px;
            }
        }

        @media (min-width: 400px) and (max-width: 767px) {
            .img-size {
                width: 250px;
            }
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <h1>QRIS</h1>
        <p id="countdown"></p>
        <div class="d-inline-block p-3 bg-white rounded">
            <img class="img-size" src="{{ $responseData['data']['target'] }}" alt="QR Code">
            <div class="mt-3 text-dark">
                <div><strong>Order ID:</strong> {{ $responseData['data']['id_reference'] }}</div>
                <div><strong>Amount:</strong> IDR {{ $responseData['data']['nominal'] }}</div>
            </div>
        </div>
        <div class="mt-4">
            <a href="{{ url('account/lastDirectTransfer') }}" class="btn btn-light">Back to Merchant</a>
        </div>
    </div>

    <script>
        let countDownDate = new Date("{{ \Carbon\Carbon::now()->addMinutes(70)->format('m/d/Y H:i:s') }}").getTime();
        let x = setInterval(function() {
            let now = new Date().getTime();
            let distance = countDownDate - now;
            let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((distance % (1000 * 60)) / 1000);
            document.getElementById("countdown").innerHTML = `Kedaluwarsa dalam ${minutes}m ${seconds}s`;
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = "Kedaluwarsa";
            }
        }, 1000);
    </script>
</body>

</html>
