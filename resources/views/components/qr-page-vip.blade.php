<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Pembayaran {{ $dataQR['trx_id'] }}</title>
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

        .amount {
            font-size: 18px;
            margin-bottom: 18px;
            color: greenyellow;
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

    <div class="timer" id="countdown">20:00</div>

    <div id="qrisContainer" class="qr-image"></div>

    <div class="amount" id="amount">{{ number_format($amount) }}</div>
    <div class="status" id="statusText">Menunggu pembayaran...</div>

    <button class="btn-back" onclick="window.location.href='{{ route('index') }}'">Kembali</button>

    <!-- QRCode library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <script>
        let timeLeft = 1200;
        const countdownEl = document.getElementById('countdown');
        const statusText = document.getElementById('statusText');
        const qrContainer = document.getElementById('qrisContainer');

        function formatTime(seconds) {
            const minutes = Math.floor(seconds / 60).toString().padStart(2, '0');
            const secondsPart = (seconds % 60).toString().padStart(2, '0');
            return `${minutes}:${secondsPart}`;
        }

        const timer = setInterval(() => {
            timeLeft--;
            countdownEl.innerText = formatTime(timeLeft);
            if (timeLeft <= 0) {
                clearInterval(timer);
                statusText.innerText = "❌ Waktu habis.";
            }
        }, 1000);

        const qrisData = `{!! $dataQR['data'] ?? '' !!}`;
        new QRCode(qrContainer, {
            text: qrisData,
            width: 240,
            height: 240
        });

        const checkStatus = setInterval(() => {
            fetch('/payment/status/{{ $dataQR['trx_id'] }}')
                .then(res => res.json())
                .then(data => {
                    if (data.status === 'paid') {
                        clearInterval(checkStatus);
                        clearInterval(timer);

                        qrContainer.innerHTML = `
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Yes_Check_Circle.svg/1024px-Yes_Check_Circle.svg.png"
                                 alt="Success" style="width: 240px;" />
                        `;

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
