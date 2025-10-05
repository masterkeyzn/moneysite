<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Pembayaran {{ $dataQR['data']['custom_meta']['transaction_id'] }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
            text-align: center;
        }

        .timer {
            font-size: 20px;
            margin-bottom: 12px;
        }

        .qr-image {
            max-width: 240px;
            width: 100%;
            background: #fff;
            padding: 6px;
            border-radius: 6px;
            margin-bottom: 12px;
        }

        .status {
            font-size: 16px;
            margin-bottom: 16px;
            color: lime;
        }

        .btn-back {
            padding: 10px 20px;
            font-size: 14px;
            background: #333;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="timer" id="countdown">06:00</div>

    <img src="{{ $dataQR['data']['qris_image'] }}" id="qrImage" alt="QRIS" class="qr-image">

    <div class="status" id="statusText">Menunggu pembayaran...</div>

    <button class="btn-back" onclick="window.location.href='{{ route('index') }}'">Kembali</button>

    <script>
        let timeLeft = 360;
        const countdownEl = document.getElementById('countdown');
        const statusText = document.getElementById('statusText');
        const qrImage = document.getElementById('qrImage');

        function formatTime(s) {
            const m = Math.floor(s / 60).toString().padStart(2, '0');
            const s_ = (s % 60).toString().padStart(2, '0');
            return `${m}:${s_}`;
        }

        const timer = setInterval(() => {
            timeLeft--;
            countdownEl.innerText = formatTime(timeLeft);
            if (timeLeft <= 0) {
                clearInterval(timer);
                statusText.innerText = "❌ Waktu habis.";
            }
        }, 1000);

        const checkStatus = setInterval(() => {
            fetch('/payment/status/{{ $dataQR['data']['custom_meta']['transaction_id'] }}')
                .then(res => res.json())
                .then(data => {
                    if (data.status === 'paid') {
                        clearInterval(checkStatus);
                        clearInterval(timer);

                        qrImage.src =
                            "https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Yes_Check_Circle.svg/1024px-Yes_Check_Circle.svg.png";
                        qrImage.style.background = "none";

                        statusText.innerText = "✅ Pembayaran Berhasil!";
                        setTimeout(() => {
                            window.location.href = "{{ route('index') }}";
                        }, 2000);
                    }
                })
                .catch(err => {
                    console.error("Gagal cek status:", err);
                });
        }, 5000);
    </script>

</body>

</html>
