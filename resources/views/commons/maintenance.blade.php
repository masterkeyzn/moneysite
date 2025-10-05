<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ url('') }} | Page Under Maintenance</title>
    <meta charset="utf-8">
    <meta name="author" content="pixelhint.com">
    <meta name="description" content=" Page Under Maintenance v.1" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <script src="https://cdn.sitestatic.net/assets/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdn.sitestatic.net/assets/bootstrap/bootstrap.min.js"></script>

    <link rel="stylesheet" href="/css/{{ $siteConfig->themes }}/app-desktop.css?v=1713748598">

    <script type="text/javascript" src="/js/timecircles.js"></script>
    <link rel="stylesheet" href="/css/timecircles.css" />
    <meta name="robots" content="NOINDEX, NOFOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, user-scalable=no">
    <style>
        @media only screen and (min-width : 991px) {}

        @media only screen and (min-width : 992px) {
            #DateCountdown {
                width: 70%;
                margin: 0 auto;
            }

            .p-title {}

            .content {}

        }
    </style>
</head>


<body class="">
    <div class="container maintenance">
        <div class="text-center"> <img class="img-fluid" src="{{ $siteConfig->site_logo }}" /></div>


        <div>
            <h2>Temporary Maintenance</h2>
            <p>
                We apologize for the inconvenience, but our website is currently undergoing temporary maintenance to
                enhance your experience. We are committed to making our website better and more reliable for you.
            </p>
            <p>
                We greatly appreciate your patience and hope you'll return later to enjoy our enhanced website. If you
                have any urgent questions or issues, please feel free to contact our support team.
            </p>
            <p>
                Thank you for your understanding and support as we make these improvements. We look forward to serving
                you again very soon.
            </p>
        </div>

        <div style=" margin: 15px 0 ;" class="dotted_line"></div>
        <div>


            <h2>Perbaikan Sementara</h2>
            <p>
                Maaf atas ketidaknyamanan ini, namun situs web kami sedang dalam perbaikan sementara untuk meningkatkan
                pengalaman Anda. Kami bertekad untuk membuat situs web kami lebih baik dan lebih andal bagi Anda.
            </p>
            <p>
                Kami sangat menghargai kesabaran Anda dan berharap Anda dapat kembali lagi nanti untuk menikmati situs
                web kami yang ditingkatkan. Jika Anda memiliki pertanyaan atau masalah mendesak, jangan ragu untuk
                menghubungi tim dukungan kami.
            </p>
            <p>
                Terima kasih atas pengertian Anda dan dukungan Anda selama kami melakukan perbaikan ini. Kami sangat
                berharap dapat melayani Anda kembali dalam waktu yang sangat singkat.
            </p>


            <h2>临时维护</h2>
            <p>
                对于给您带来的不便，我们深感抱歉，但我们的网站目前正在进行临时维护，以提升您的体验。我们致力于使我们的网站变得更好、更可靠。
            </p>
            <p>
                我们非常感谢您的耐心等待，并希望您稍后再来享受我们改进后的网站。如果您有任何紧急问题或困难，请随时联系我们的支持团队。
            </p>
            <p>
                感谢您的理解和支持，我们正在进行这些改进。我们期待着尽快再次为您服务。
            </p>
        </div>
    </div>
    <script>
        $(document).ready(function() {

            $("#DateCountdown").TimeCircles({
                "animation": "smooth",
                "bg_width": 0.3,
                "fg_width": 0.04666666666666667,
                "circle_bg_color": "#bfc2c4",
                "time": {
                    "Days": {
                        "text": "Days",
                        "color": "#8b775b",
                        "show": true
                    },
                    "Hours": {
                        "text": "Hours",
                        "color": "#4226e3",
                        "show": true
                    },
                    "Minutes": {
                        "text": "Minutes",
                        "color": "#0c5526",
                        "show": true
                    },
                    "Seconds": {
                        "text": "Seconds",
                        "color": "#9c1c1c",
                        "show": true
                    }
                }
            });

        });
    </script>
    {!! $siteConfig->sc_livechat !!}
</body>

</html>
