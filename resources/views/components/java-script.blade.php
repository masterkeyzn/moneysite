<script src="https://cdn.sitestatic.net/assets/jquery/jquery.min.js"></script>
<script src="https://cdn.sitestatic.net/assets/bootstrap/bootstrap.min.js"></script>
<script src="https://cdn.sitestatic.net/assets/jquery/sweet_alert2_v11.min.js"></script>

<script type="text/javascript" src="https://cdn.sitestatic.net/assets/jquery/jquery.price_format.min.js?v=2" defer>
</script>
<script type="text/javascript" src="https://cdn.sitestatic.net/assets/jquery-validation/jquery.validate.min.js">
</script>
<script type="text/javascript" src="https://cdn.sitestatic.net/assets/jquery-validation/additional-methods.min.js">
</script>
<link rel="stylesheet" href="https://cdn.sitestatic.net/assets/fancybox/jquery.fancybox.min.css">
<script type="text/javascript" src="https://cdn.sitestatic.net/assets/fancybox/jquery.fancybox.min.js" async></script>

<script>
    window.scriptsLoadState = {
        jqueryUI: false,
        jqueryUITouch: false,
    };
    window.isAuth = '{{ auth()->check() ? '' : '1' }}' ? false : true;;
    window.currencyCode = 'IDR';
    window.uriPrefix = '';
    window.lang = "id";
    window.webTitle = '{{ $siteConfig->site_name }}';
    window.accLength = parseInt("8");
    window.agentCode = 'BACBEAF';
    window.sweetAlert = function(msg, type, title, showCancelBtn, refreshPage) {
        var dateNow = "2024-09-08 13:43:48";

        if (msg.indexOf("cloudflare") >= 0) {
            console.log('cff err', msg);
            msg = transMsgs.cfTimeout + ' (error time: ' + dateNow + ')';
            title = " ";


        }
        if (msg.indexOf('challenge') >= 0) {
            msg = transMsgs.cfChallenge + ' (error time: ' + dateNow + ')';
            title = " ";
        }

        return Swal.fire({
            title: !title ? "Warning" : title,
            text: msg,
            icon: !type ? "error" : type,
            buttons: {
                confirm: {
                    text: "OK",
                    value: true,
                    visible: true,
                    className: "",
                    closeModal: true
                },
                cancel: {
                    text: "Cancel",
                    value: false,
                    visible: showCancelBtn ? true : false,
                    className: "",
                    closeModal: true,
                }
            }
        }).then((result) => {
            if (refreshPage) {
                location.reload();
            }
        });
    }

    console.log('window.name ' + window.name);
    window.name = !window.name ? "parent" + Date.now() + Math.floor(Math.random() * 100000000) : window.name;
    console.log('window.name ' + window.name);

    window.formatNumber = function(n) {
        return n.replace(/[^0-9\-]/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    }

    window.convertToNumber = function(value) {
        if (!value) {
            return 0;
        }
        if (value.indexOf(".") >= 0) {
            var decimal_pos = value.indexOf(".");
            value = value.substring(0, decimal_pos);

        }
        var number = value.replace(/[^0-9.-]+/g, "");
        if (isNaN(number)) {
            number = 0;
        }
        return number;
    }

    window.formatCurrency = function(value) {
        const symbol = "";
        var input_val = value;

        if (typeof value !== 'string') {
            var input_val = value.toString();
        }
        if (input_val === "") {
            return;
        }

        var original_len = input_val.length;


        if (input_val.indexOf(".") >= 0) {

            var decimal_pos = input_val.indexOf(".");
            var left_side = input_val.substring(0, decimal_pos);
            var right_side = input_val.substring(decimal_pos + 1);

            left_side = formatNumber(left_side);

            right_side += "00";

            right_side = right_side.substring(0, 2);

            input_val = symbol + left_side + "." + right_side;

        } else {
            input_val = formatNumber(input_val);
            input_val = symbol + input_val + ".00";;

        }

        return input_val;
    }

    window.prize = 0;
    window.ajax_jackpot = function() {
        $.ajax({
            url: "{{ url('poker-jackpot') }}",
            type: 'get',
            data: {
                _token: $('meta[name=csrf-token]').attr('content')
            },
            success: function(data) {
                prize = (data / 2000.000) * 2000.000;
                $('.jackpot_numbers_home').html(
                    `IDR <span id="jackpot_amount">${ commaSeparateNumber(prize) }</span>`)
            }
        });
    }

    var newI = 0;
    window.popitup = function(url, gameid) {
        newwindow = window.open(url, window.webTitle + '_gameWindow' + gameid + newI,
            'toolbar=0,width=1200,height=750');
        newI++;
        if (window.focus) {
            newwindow.focus()
        }
        return false;
    }

    window.popup = function(mylink, windowname) {
        if (!window.focus) return true;
        var href;
        if (typeof(mylink) == 'string')
            href = mylink;
        else
            href = mylink.href;
        window.open(href, windowname, 'width=600,height=800,scrollbars=yes');
        return false;
    }
    window.commaSeparateNumber = function(val, isJP) {
        while (/(\d+)(\d{3})/.test(val.toString())) {

            if ((window.currencyCode == 'VND' || window.currencyCode == 'THB') && isJP) {
                val = val.toFixed(0);
            } else {
                val = Number(val).toFixed(2);
            }
            val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
        }
        return val;
    }

    window.getRandomIntInclusive = function(min, max) {
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    function onSelCtry(ctryCode) {
        document.cookie = 'req_ctry=' + ctryCode + ';  max-age=' + (10 * 365 * 24 * 60 * 60).toString + '; path=/';

    }

    @if (session('status') && session('message'))
        window.onload = function() {
            sweetAlert("{{ session('message') }}", "{{ session('status') }}");
        };
    @endif

    $(document).ready(function() {
        //suspend-alert
        // login-alert
        // promo-disabled-alert
        // "maintenance-alert";
        // "comingsoon-alert";
        window.alertLogin = function(e) {
            e.preventDefault();
            sweetAlert(transMsgs.plsLogin);
            return false;
        }

        $(".suspend-alert").click(function(e) {
            e.preventDefault();
            sweetAlert(transMsgs.blockedFrGame);
            return false;
        });

        $(".login-alert").click(function(e) {
            if ($("#login-modal--layout").length) {
                $("#login-modal--layout").nifty("show")
            } else {
                alertLogin(e);
            }

            return false;
        });

        $(".maintenance-alert").click(function(e) {
            e.preventDefault();
            sweetAlert(transMsgs.gameMaintenance);
            return false;
        });

        $(".comingsoon-alert").click(function(e) {
            e.preventDefault();
            sweetAlert(transMsgs.gameComingSoon);
            return false;
        });

        $(".promo-disabled-alert").click(function(e) {
            e.preventDefault();
            sweetAlert(transMsgs.gamePromoBlock);
            return false;
        });



        if (document.referrer.indexOf(location.protocol + "//" + location.host) === 0) {
            sessionStorage.setItem('isClosedPopUp', 'true');
        }
        var isClosedPopUp = sessionStorage.getItem('isClosedPopUp');

        @if ($siteConfig->popup != null)
            if (window.location.pathname === '/') {
                if (sessionStorage.getItem('isClosedPopUp') !== "true") {
                    var popUpInst = $.fancybox.open({
                        src: `<img src="{{ $siteConfig->popup }}" class="img-fluid">`,
                        type: 'html',
                        opts: {
                            afterShow: function(instance, current) {
                                console.log(document.referrer.indexOf(location.protocol + "//" +
                                    location.host));
                                console.log(location.protocol + "//" + location.host);
                                console.log(document.referrer);
                                if (document.referrer.indexOf(location.protocol + "//" +
                                        location.host) === 0) {
                                    sessionStorage.setItem('isClosedPopUp', 'true');
                                }
                            }
                        }
                    });
                }
            }
        @endif

        @isset($js2)
            {{ $js2 }}
        @endisset

    });


    $("input").focus(function() {
        $("body").addClass("input-focused");
    });
    $("input").focusout(function() {
        $("body").removeClass("input-focused");
    });
</script>

<script>
    var host = window.location.host;

    function convertToLocalDate() {
        console.log('convertToLocalDate');
        $('.js-date').each(function(i) {
            var dt = $(this).text().trim();
            var isutc = $(this).hasClass('isutc');

            if (isutc) {

                if (dt && dt != '-') {

                    if (dt[dt.length - 1] != 'Z') {
                        dt = dt + 'Z';
                    }
                    $(this).text(moment.utc(dt).local().format("YYYY-MM-DD | HH:mm:ss"));
                    $(this).removeClass('isutc');
                }
            }
        });
    }
</script>
