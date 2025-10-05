!function(e) {
    var t = {};
    function a(n) {
        if (t[n])
            return t[n].exports;
        var r = t[n] = {
            i: n,
            l: !1,
            exports: {}
        };
        return e[n].call(r.exports, r, r.exports, a),
        r.l = !0,
        r.exports
    }
    a.m = e,
    a.c = t,
    a.d = function(e, t, n) {
        a.o(e, t) || Object.defineProperty(e, t, {
            enumerable: !0,
            get: n
        })
    }
    ,
    a.r = function(e) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
            value: "Module"
        }),
        Object.defineProperty(e, "__esModule", {
            value: !0
        })
    }
    ,
    a.t = function(e, t) {
        if (1 & t && (e = a(e)),
        8 & t)
            return e;
        if (4 & t && "object" == typeof e && e && e.__esModule)
            return e;
        var n = Object.create(null);
        if (a.r(n),
        Object.defineProperty(n, "default", {
            enumerable: !0,
            value: e
        }),
        2 & t && "string" != typeof e)
            for (var r in e)
                a.d(n, r, function(t) {
                    return e[t]
                }
                .bind(null, r));
        return n
    }
    ,
    a.n = function(e) {
        var t = e && e.__esModule ? function() {
            return e.default
        }
        : function() {
            return e
        }
        ;
        return a.d(t, "a", t),
        t
    }
    ,
    a.o = function(e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }
    ,
    a.p = "/",
    a(a.s = 14)
}([function(e, t, a) {
    !function(t, a) {
        var n = function(e, t, a) {
            "use strict";
            var n, r;
            if (function() {
                var t, a = {
                    lazyClass: "lazyload",
                    loadedClass: "lazyloaded",
                    loadingClass: "lazyloading",
                    preloadClass: "lazypreload",
                    errorClass: "lazyerror",
                    autosizesClass: "lazyautosizes",
                    srcAttr: "data-src",
                    srcsetAttr: "data-srcset",
                    sizesAttr: "data-sizes",
                    minSize: 40,
                    customMedia: {},
                    init: !0,
                    expFactor: 1.5,
                    hFac: .8,
                    loadMode: 2,
                    loadHidden: !0,
                    ricTimeout: 0,
                    throttleDelay: 125
                };
                for (t in r = e.lazySizesConfig || e.lazysizesConfig || {},
                a)
                    t in r || (r[t] = a[t])
            }(),
            !t || !t.getElementsByClassName)
                return {
                    init: function() {},
                    cfg: r,
                    noSupport: !0
                };
            var i = t.documentElement
              , o = e.HTMLPictureElement
              , s = e.addEventListener.bind(e)
              , c = e.setTimeout
              , d = e.requestAnimationFrame || c
              , l = e.requestIdleCallback
              , u = /^picture$/i
              , m = ["load", "error", "lazyincluded", "_lazyloaded"]
              , h = {}
              , f = Array.prototype.forEach
              , p = function(e, t) {
                return h[t] || (h[t] = new RegExp("(\\s|^)" + t + "(\\s|$)")),
                h[t].test(e.getAttribute("class") || "") && h[t]
            }
              , b = function(e, t) {
                p(e, t) || e.setAttribute("class", (e.getAttribute("class") || "").trim() + " " + t)
            }
              , g = function(e, t) {
                var a;
                (a = p(e, t)) && e.setAttribute("class", (e.getAttribute("class") || "").replace(a, " "))
            }
              , w = function(e, t, a) {
                var n = a ? "addEventListener" : "removeEventListener";
                a && w(e, t),
                m.forEach((function(a) {
                    e[n](a, t)
                }
                ))
            }
              , v = function(e, a, r, i, o) {
                var s = t.createEvent("Event");
                return r || (r = {}),
                r.instance = n,
                s.initEvent(a, !i, !o),
                s.detail = r,
                e.dispatchEvent(s),
                s
            }
              , $ = function(t, a) {
                var n;
                !o && (n = e.picturefill || r.pf) ? (a && a.src && !t.getAttribute("srcset") && t.setAttribute("srcset", a.src),
                n({
                    reevaluate: !0,
                    elements: [t]
                })) : a && a.src && (t.src = a.src)
            }
              , k = function(e, t) {
                return (getComputedStyle(e, null) || {})[t]
            }
              , C = function(e, t, a) {
                for (a = a || e.offsetWidth; a < r.minSize && t && !e._lazysizesWidth; )
                    a = t.offsetWidth,
                    t = t.parentNode;
                return a
            }
              , y = (he = [],
            fe = [],
            pe = he,
            be = function() {
                var e = pe;
                for (pe = he.length ? fe : he,
                ue = !0,
                me = !1; e.length; )
                    e.shift()();
                ue = !1
            }
            ,
            ge = function(e, a) {
                ue && !a ? e.apply(this, arguments) : (pe.push(e),
                me || (me = !0,
                (t.hidden ? c : d)(be)))
            }
            ,
            ge._lsFlush = be,
            ge)
              , x = function(e, t) {
                return t ? function() {
                    y(e)
                }
                : function() {
                    var t = this
                      , a = arguments;
                    y((function() {
                        e.apply(t, a)
                    }
                    ))
                }
            }
              , q = function(e) {
                var t, n, r = function() {
                    t = null,
                    e()
                }, i = function() {
                    var e = a.now() - n;
                    e < 99 ? c(i, 99 - e) : (l || r)(r)
                };
                return function() {
                    n = a.now(),
                    t || (t = c(i, 99))
                }
            }
              , A = (K = /^img$/i,
            W = /^iframe$/i,
            G = "onscroll"in e && !/(gle|ing)bot/.test(navigator.userAgent),
            U = 0,
            Y = 0,
            Z = -1,
            V = function(e) {
                Y--,
                (!e || Y < 0 || !e.target) && (Y = 0)
            }
            ,
            Q = function(e) {
                return null == H && (H = "hidden" == k(t.body, "visibility")),
                H || !("hidden" == k(e.parentNode, "visibility") && "hidden" == k(e, "visibility"))
            }
            ,
            X = function(e, a) {
                var n, r = e, o = Q(e);
                for (z -= a,
                J += a,
                O -= a,
                D += a; o && (r = r.offsetParent) && r != t.body && r != i; )
                    (o = (k(r, "opacity") || 1) > 0) && "visible" != k(r, "overflow") && (n = r.getBoundingClientRect(),
                    o = D > n.left && O < n.right && J > n.top - 1 && z < n.bottom + 1);
                return o
            }
            ,
            ee = function() {
                var e, a, o, s, c, d, l, u, m, h, f, p, b = n.elements;
                if ((I = r.loadMode) && Y < 8 && (e = b.length)) {
                    for (a = 0,
                    Z++; a < e; a++)
                        if (b[a] && !b[a]._lazyRace)
                            if (!G || n.prematureUnveil && n.prematureUnveil(b[a]))
                                se(b[a]);
                            else if ((u = b[a].getAttribute("data-expand")) && (d = 1 * u) || (d = U),
                            h || (h = !r.expand || r.expand < 1 ? i.clientHeight > 500 && i.clientWidth > 500 ? 500 : 370 : r.expand,
                            n._defEx = h,
                            f = h * r.expFactor,
                            p = r.hFac,
                            H = null,
                            U < f && Y < 1 && Z > 2 && I > 2 && !t.hidden ? (U = f,
                            Z = 0) : U = I > 1 && Z > 1 && Y < 6 ? h : 0),
                            m !== d && (E = innerWidth + d * p,
                            B = innerHeight + d,
                            l = -1 * d,
                            m = d),
                            o = b[a].getBoundingClientRect(),
                            (J = o.bottom) >= l && (z = o.top) <= B && (D = o.right) >= l * p && (O = o.left) <= E && (J || D || O || z) && (r.loadHidden || Q(b[a])) && (M && Y < 3 && !u && (I < 3 || Z < 4) || X(b[a], d))) {
                                if (se(b[a]),
                                c = !0,
                                Y > 9)
                                    break
                            } else
                                !c && M && !s && Y < 4 && Z < 4 && I > 2 && (T[0] || r.preloadAfterLoad) && (T[0] || !u && (J || D || O || z || "auto" != b[a].getAttribute(r.sizesAttr))) && (s = T[0] || b[a]);
                    s && !c && se(s)
                }
            }
            ,
            te = function(e) {
                var t, n = 0, i = r.throttleDelay, o = r.ricTimeout, s = function() {
                    t = !1,
                    n = a.now(),
                    e()
                }, d = l && o > 49 ? function() {
                    l(s, {
                        timeout: o
                    }),
                    o !== r.ricTimeout && (o = r.ricTimeout)
                }
                : x((function() {
                    c(s)
                }
                ), !0);
                return function(e) {
                    var r;
                    (e = !0 === e) && (o = 33),
                    t || (t = !0,
                    (r = i - (a.now() - n)) < 0 && (r = 0),
                    e || r < 9 ? d() : c(d, r))
                }
            }(ee),
            ae = function(e) {
                var t = e.target;
                t._lazyCache ? delete t._lazyCache : (V(e),
                b(t, r.loadedClass),
                g(t, r.loadingClass),
                w(t, re),
                v(t, "lazyloaded"))
            }
            ,
            ne = x(ae),
            re = function(e) {
                ne({
                    target: e.target
                })
            }
            ,
            ie = function(e) {
                var t, a = e.getAttribute(r.srcsetAttr);
                (t = r.customMedia[e.getAttribute("data-media") || e.getAttribute("media")]) && e.setAttribute("media", t),
                a && e.setAttribute("srcset", a)
            }
            ,
            oe = x((function(e, t, a, n, i) {
                var o, s, d, l, m, h;
                (m = v(e, "lazybeforeunveil", t)).defaultPrevented || (n && (a ? b(e, r.autosizesClass) : e.setAttribute("sizes", n)),
                s = e.getAttribute(r.srcsetAttr),
                o = e.getAttribute(r.srcAttr),
                i && (l = (d = e.parentNode) && u.test(d.nodeName || "")),
                h = t.firesLoad || "src"in e && (s || o || l),
                m = {
                    target: e
                },
                b(e, r.loadingClass),
                h && (clearTimeout(F),
                F = c(V, 2500),
                w(e, re, !0)),
                l && f.call(d.getElementsByTagName("source"), ie),
                s ? e.setAttribute("srcset", s) : o && !l && (W.test(e.nodeName) ? function(e, t) {
                    try {
                        e.contentWindow.location.replace(t)
                    } catch (a) {
                        e.src = t
                    }
                }(e, o) : e.src = o),
                i && (s || l) && $(e, {
                    src: o
                })),
                e._lazyRace && delete e._lazyRace,
                g(e, r.lazyClass),
                y((function() {
                    var t = e.complete && e.naturalWidth > 1;
                    h && !t || (t && b(e, "ls-is-cached"),
                    ae(m),
                    e._lazyCache = !0,
                    c((function() {
                        "_lazyCache"in e && delete e._lazyCache
                    }
                    ), 9)),
                    "lazy" == e.loading && Y--
                }
                ), !0)
            }
            )),
            se = function(e) {
                if (!e._lazyRace) {
                    var t, a = K.test(e.nodeName), n = a && (e.getAttribute(r.sizesAttr) || e.getAttribute("sizes")), i = "auto" == n;
                    (!i && M || !a || !e.getAttribute("src") && !e.srcset || e.complete || p(e, r.errorClass) || !p(e, r.lazyClass)) && (t = v(e, "lazyunveilread").detail,
                    i && R.updateElem(e, !0, e.offsetWidth),
                    e._lazyRace = !0,
                    Y++,
                    oe(e, t, i, n, a))
                }
            }
            ,
            ce = q((function() {
                r.loadMode = 3,
                te()
            }
            )),
            de = function() {
                3 == r.loadMode && (r.loadMode = 2),
                ce()
            }
            ,
            le = function() {
                M || (a.now() - j < 999 ? c(le, 999) : (M = !0,
                r.loadMode = 3,
                te(),
                s("scroll", de, !0)))
            }
            ,
            {
                _: function() {
                    j = a.now(),
                    n.elements = t.getElementsByClassName(r.lazyClass),
                    T = t.getElementsByClassName(r.lazyClass + " " + r.preloadClass),
                    s("scroll", te, !0),
                    s("resize", te, !0),
                    s("pageshow", (function(e) {
                        if (e.persisted) {
                            var a = t.querySelectorAll("." + r.loadingClass);
                            a.length && a.forEach && d((function() {
                                a.forEach((function(e) {
                                    e.complete && se(e)
                                }
                                ))
                            }
                            ))
                        }
                    }
                    )),
                    e.MutationObserver ? new MutationObserver(te).observe(i, {
                        childList: !0,
                        subtree: !0,
                        attributes: !0
                    }) : (i.addEventListener("DOMNodeInserted", te, !0),
                    i.addEventListener("DOMAttrModified", te, !0),
                    setInterval(te, 999)),
                    s("hashchange", te, !0),
                    ["focus", "mouseover", "click", "load", "transitionend", "animationend"].forEach((function(e) {
                        t.addEventListener(e, te, !0)
                    }
                    )),
                    /d$|^c/.test(t.readyState) ? le() : (s("load", le),
                    t.addEventListener("DOMContentLoaded", te),
                    c(le, 2e4)),
                    n.elements.length ? (ee(),
                    y._lsFlush()) : te()
                },
                checkElems: te,
                unveil: se,
                _aLSL: de
            })
              , R = (N = x((function(e, t, a, n) {
                var r, i, o;
                if (e._lazysizesWidth = n,
                n += "px",
                e.setAttribute("sizes", n),
                u.test(t.nodeName || ""))
                    for (i = 0,
                    o = (r = t.getElementsByTagName("source")).length; i < o; i++)
                        r[i].setAttribute("sizes", n);
                a.detail.dataAttr || $(e, a.detail)
            }
            )),
            S = function(e, t, a) {
                var n, r = e.parentNode;
                r && (a = C(e, r, a),
                (n = v(e, "lazybeforesizes", {
                    width: a,
                    dataAttr: !!t
                })).defaultPrevented || (a = n.detail.width) && a !== e._lazysizesWidth && N(e, r, n, a))
            }
            ,
            L = q((function() {
                var e, t = _.length;
                if (t)
                    for (e = 0; e < t; e++)
                        S(_[e])
            }
            )),
            {
                _: function() {
                    _ = t.getElementsByClassName(r.autosizesClass),
                    s("resize", L)
                },
                checkElems: L,
                updateElem: S
            })
              , P = function() {
                !P.i && t.getElementsByClassName && (P.i = !0,
                R._(),
                A._())
            };
            var _, N, S, L;
            var T, M, F, I, j, E, B, z, O, D, J, H, K, W, G, U, Y, Z, V, Q, X, ee, te, ae, ne, re, ie, oe, se, ce, de, le;
            var ue, me, he, fe, pe, be, ge;
            return c((function() {
                r.init && P()
            }
            )),
            n = {
                cfg: r,
                autoSizer: R,
                loader: A,
                init: P,
                uP: $,
                aC: b,
                rC: g,
                hC: p,
                fire: v,
                gW: C,
                rAF: y
            }
        }(t, t.document, Date);
        t.lazySizes = n,
        e.exports && (e.exports = n)
    }("undefined" != typeof window ? window : {})
}
, function(e, t) {
    !function(e) {
        e(document).on("click", "[data-trigger='modal'], [data-trigger='nifty']", (function() {
            var t = e(this).data("target");
            return e(t).nifty("show"),
            !1
        }
        )),
        e(document).on("click", ".md-overlay", (function(t) {
            return t.stopPropagation(),
            e(this).prev().data("isnotcloseoverlay") || e(".nifty-modal.md-show").nifty("hide"),
            !1
        }
        )),
        e(document).on("click", ".nifty-modal.md-show .md-close", (function(t) {
            return t.stopPropagation(),
            e(this).closest(".nifty-modal.md-show").nifty("hide"),
            !1
        }
        )),
        e.fn.extend({
            nifty: function(t) {
                var a, n = this, r = "transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd";
                return "show" == t ? (a = !1,
                e(n).trigger("show.nifty.modal"),
                e(n).one(r, (function(t) {
                    a || (a = !0,
                    t.preventDefault(),
                    t.stopPropagation(),
                    e(n).trigger("shown.nifty.modal"))
                }
                )),
                e(n).addClass("md-show")) : "hide" == t && function() {
                    var t = !1;
                    e(n).trigger("hide.nifty.modal"),
                    e(n).one(r, (function(a) {
                        t || (t = !0,
                        a.preventDefault(),
                        a.stopPropagation(),
                        e(n).trigger("hidden.nifty.modal"))
                    }
                    )),
                    e(n).removeClass("md-show")
                }(),
                this
            }
        })
    }(jQuery)
}
, function(e, t) {
    !function(e) {
        function t(e, t, a) {
            var n = "";
            if (e.responseJSON) {
                if (n = e.responseJSON.message,
                e.responseJSON.hasOwnProperty("errors") && e.responseJSON.errors) {
                    var r = e.responseJSON.errors;
                    for (var i in n += "\n Errors :",
                    r)
                        r[i] && (n += "\n" + r[i])
                }
            } else
                n = e.responseText;
            sweetAlert(n)
        }
        window.xhr_get = function(t) {
            return e.ajax({
                url: t,
                type: "get",
                beforeSend: showLoadingImgFn
            }).always((function() {
                removeLoadingImgFn()
            }
            )).fail((function(e, t, a) {
                sweetAlert(e.responseText)
            }
            ))
        }
        ,
        window.showLoadingImgFn = function() {
            e("#loading--layout").nifty("show")
        }
        ,
        window.removeLoadingImgFn = function() {
            e("#loading--layout").nifty("hide")
        }
        ,
        window.json_get = function(t, a, n) {
            return e.ajax({
                url: t,
                method: "GET",
                type: "get",
                dataType: "json",
                beforeSend: function() {
                    a && a()
                }
            }).always((function() {
                n && n()
            }
            )).fail((function(e, t, a) {
                var n = e.responseJSON ? e.responseJSON.message : e.responseText
                  , r = !1;
                n == transMsgs.sessionExpired && (r = !0),
                sweetAlert(n, null, null, null, r)
            }
            ))
        }
        ,
        window.ajax_submit = function(a) {
            return e.ajax({
                url: e(a).attr("action"),
                method: "POST",
                type: "POST",
                data: new FormData(a),
                enctype: "multipart/form-data",
                processData: !1,
                contentType: !1,
                dataType: "json",
                cache: !1,
                beforeSend: showLoadingImgFn
            }).always((function() {
                removeLoadingImgFn(),
                e(a).find('button[type="submit"]').prop("disabled", !1)
            }
            )).fail((function(e, a, n) {
                t(e, a, n)
            }
            ))
        }
        ,
        window.json_post = function(a, n, r, i) {
            return e.ajax({
                url: a,
                method: "POST",
                type: "POST",
                data: n,
                dataType: "json",
                beforeSend: function() {
                    r && r()
                }
            }).always((function() {
                i && i()
            }
            )).fail((function(e, a, n) {
                t(e, a, n)
            }
            ))
        }
        ,
        e.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": e('meta[name="csrf-token"]').attr("content")
            }
        })
    }(jQuery)
}
, function(e, t) {
    $(document).on("click", "#bank_deposit_confirm", (function() {
        return $("#regbank_popup__depo").nifty("hide"),
        $("#btn_add_ubank__depo").prop("disabled", !1),
        !1
    }
    )),
    $(document).on("click", "#pulsa_add_cancel", (function() {
        return $("#regbank_popup__depo").nifty("hide"),
        $("#btn_add_ubank__depo").prop("disabled", !1),
        !1
    }
    ));
    var a = /^[^0-9*|\":<>[\]{}`\\()';@#%^*&$~!,`.=+_?-]+$/;
    "HKD" != window.currencyCode && "IDR" != window.currencyCode || (a = /^\s{0,1}[a-zA-Z-.\/,\']+(?:\s[a-zA-Z]+)*\s{0,1}$/),
    window.bindBankRegFormVal = function(e) {
        var t, n, r, i = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "";
        $(e).submit((function(e) {
            e.preventDefault()
        }
        )).validate({
            rules: {
                name: {
                    required: !0,
                    pattern: a,
                    minlength: 3
                },
                acc_no: {
                    required: !0,
                    minlength: function(e) {
                        return $("#acc_no").attr("minlength")
                    },
                    maxlength: function(e) {
                        return $("#acc_no").attr("maxlength")
                    },
                    pattern: /^[0-9]+$/,
                    remote: {
                        param: {
                            url: "/checkAccNo",
                            type: "post",
                            dataType: "json",
                            data: {
                                acc_type: 5
                            }
                        }
                    }
                },
                bsb_no: {
                    required: !0,
                    minlength: function(e) {
                        return $("#bsb_no").attr("minlength")
                    },
                    maxlength: function(e) {
                        return $("#bsb_no").attr("maxlength")
                    },
                    pattern: /^[0-9]+$/
                },
                ifsc_code: {
                    required: !0,
                    minlength: function(e) {
                        return $("#ifsc_code").attr("minlength")
                    },
                    maxlength: function(e) {
                        return $("#ifsc_code").attr("maxlength")
                    },
                    pattern: /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{11}$/
                },
                agency_code: {
                    minlength: 1,
                    maxlength: 4,
                    pattern: /^[0-9]+$/
                },
                bank_name: {
                    required: !0
                }
            },
            messages: {
                name: {
                    required: transMsgs.accountFullNameRequired,
                    pattern: transMsgs.fullNamesConsistOfAlphabets,
                    minlength: transMsgs.minimumThreeCharatersRequired
                },
                acc_no: {
                    required: transMsgs.bankAccountNumberRequired,
                    pattern: transMsgs.bankAccountPattern,
                    minlength: function(e) {
                        var t = $("#acc_no").attr("minlength");
                        transMsgs.minimumEightLetterRequired;
                        return 13 == t ? transMsgs.minimum13LetterRequired : 10 == t ? transMsgs.minimum10LetterRequired : 12 == t ? transMsgs.minimum12LetterRequired : 15 == t ? transMsgs.minimum15LetterRequired : transMsgs.minimumEightLetterRequired
                    },
                    maxlength: transMsgs.maximumTwentycharaters,
                    remote: transMsgs.bankAccountNamesNotAvailable
                },
                agency_code: {
                    required: transMsgs.agencyCodeRequired,
                    pattern: transMsgs.agencyCodePattern,
                    minlength: transMsgs.minimumOneLetterRequired,
                    maxlength: transMsgs.maximumFourcharaters
                },
                bsb_no: {
                    required: transMsgs.bsbCodeRequired,
                    pattern: transMsgs.bsbCodePattern,
                    minlength: transMsgs.minimum6LetterRequired,
                    maxlength: transMsgs.maximum6charaters
                },
                ifsc_code: {
                    required: transMsgs.ifscCodeRequired,
                    pattern: transMsgs.ifscCodePattern,
                    minlength: transMsgs.minimum11charaters,
                    maxlength: transMsgs.maximum11charaters
                },
                bank_name: {
                    required: transMsgs.bankRequired
                }
            },
            errorElement: "em",
            errorPlacement: function(e, t) {
                e.addClass("help-block"),
                t.addClass("has-feedback"),
                "checkbox" === t.prop("type") ? e.insertAfter(t.parent("label")) : e.insertAfter(t),
                t.next("i")[0] || $("<i class='icon-cancel form-control-feedback absolute'></i>").insertAfter(t)
            },
            success: function(e, t) {
                $(t).next("i")[0] || $("<i class='icon-checkmark  form-control-feedback absolute'></i>").insertAfter($(t))
            },
            highlight: function(e, t, a) {
                $(e).addClass("has-error").removeClass("has-success"),
                $(e).next("i").addClass("icon-cancel").removeClass("icon-checkmark")
            },
            unhighlight: function(e, t, a) {
                $(e).addClass("has-success").removeClass("has-error"),
                $(e).next("i").addClass("icon-checkmark").removeClass("icon-cancel")
            },
            submitHandler: function(e, t) {
                $("button[type=submit]").prop("disabled", !0),
                t.preventDefault();
                var a = $(e).serialize();
                return json_post(window.uriPrefix + "/add-user-bank", a).done((function(e) {
                    if ($("#regbank_popup__depo").nifty("hide"),
                    $("#btn_add_ubank__depo").prop("disabled", !1),
                    "" != i && "bounus_add_bank" == i)
                        return sweetAlert(e.m, "success", "Success"),
                        location.reload(),
                        !0;
                    var t = $("select#bank_user_id");
                    t.html(""),
                    t.append('<option selected value="">Select <span class="txt_metod_name">Bank</span> </option>');
                    var a = e.data;
                    if (a && a.length > 0) {
                        for (var n = 0; n < a.length; n++) {
                            var r = ""
                              , o = "";
                            1 != a[n].status && (r = "disble",
                            o = "disabled='true'");
                            var s = '<option status = "' + a[n].status + '" class="' + r + '" value="' + a[n].bank_id + '"  data-metName="' + a[n].method_name + '"  data-method="' + a[n].method + '" ' + o + ">" + a[n].bank_name + "-" + a[n].acc_no + "</option>";
                            t.append(s)
                        }
                        $("#full_name") && ($("#full_name").val(e.data[0].acc_name),
                        $("#full_name").prop("readonly", !0))
                    }
                    return t.data("originalHTML", t.html()),
                    window.setBankUserOptions(5),
                    sweetAlert(e.m, "success", "Success"),
                    $("button[type=submit]").prop("disabled", !1),
                    !0
                }
                )).fail((function() {
                    return $("button[type=submit]").prop("disabled", !1),
                    !1
                }
                )),
                !1
            }
        }),
        t = $("#acc_no").attr("minlength"),
        n = $("#acc_no").attr("maxlength"),
        $("#bankOpts--register").on("change", (function() {
            if (r = $(this).find("option:selected").attr("data-bcode"),
            console.log(r),
            "MDR" == r)
                e = 13,
                a = 13;
            else if ("BNI" == r || "BCA" == r || "DMN" == r || "BSI" == r || "BLA" == r)
                e = 10,
                a = 10;
            else if ("BRI" == r)
                e = 15,
                a = 15;
            else if ("CIMBN" == r || "BANKJAGO" == r || "MDRLV" == r || "SEABANK" == r)
                e = 12,
                a = 12;
            else
                var e = t
                  , a = n;
            $("#acc_no").attr("minlength", e),
            $("#acc_no").attr("maxlength", a)
        }
        ))
    }
    ,
    window.setBankUserOptions = function(e) {
        var t = $("select#bank_user_id");
        window.restoreOptions(t);
        var a = t.find("option").not("[data-method=" + e + "]").not('[value=""]');
        5 == e && (a = a.not("[data-method=7]")),
        window.removeOptions(t, a)
    }
    ,
    window.setOriginalSelect = function(e) {
        null == e.data("originalHTML") && e.data("originalHTML", e.html())
    }
    ,
    window.removeOptions = function(e, t) {
        window.setOriginalSelect(e),
        t.remove()
    }
    ,
    window.restoreOptions = function(e) {
        var t = e.data("originalHTML");
        null != t && e.html(t)
    }
    ,
    window.bindNewFundRegFormVal = function(e) {
        $(e).submit((function(e) {
            e.preventDefault()
        }
        )).validate({
            rules: {
                mobileno: {
                    required: !0,
                    pattern: /^[0-9]+$/
                },
                bank_name: {
                    required: !0
                },
                name: {
                    required: !0,
                    pattern: a,
                    minlength: 3
                }
            },
            messages: {
                name: {
                    required: transMsgs.mobileNumberRequired,
                    pattern: transMsgs.fullNamesConsistAlphabets,
                    minlength: transMsgs.minimumThreeCharatersRequired
                },
                mobileno: {
                    required: transMsgs.mobileNumberRequired,
                    pattern: transMsgs.mobileNumberNumbersOnly,
                    remote: transMsgs.mobileNumberNotAvailable
                },
                bank_name: {
                    required: transMsgs.bankRequired
                }
            },
            errorElement: "em",
            errorPlacement: function(e, t) {
                e.addClass("help-block"),
                t.addClass("has-feedback"),
                "checkbox" === t.prop("type") ? e.insertAfter(t.parent("label")) : e.insertAfter(t),
                t.next("i")[0] || $("<i class='icon-cancel form-control-feedback absolute'></i>").insertAfter(t)
            },
            success: function(e, t) {
                $(t).next("i")[0] || $("<i class='icon-checkmark  form-control-feedback absolute'></i>").insertAfter($(t))
            },
            highlight: function(e, t, a) {
                $(e).addClass("has-error").removeClass("has-success"),
                $(e).next("i").addClass("icon-cancel").removeClass("icon-checkmark")
            },
            unhighlight: function(e, t, a) {
                $(e).addClass("has-success").removeClass("has-error"),
                $(e).next("i").addClass("icon-checkmark").removeClass("icon-cancel")
            },
            submitHandler: function(e, t) {
                $("button[type=submit]").prop("disabled", !0),
                t.preventDefault();
                var a = $(e).serialize();
                return json_post(window.uriPrefix + "/add-user-pulsa", a).done((function(t) {
                    $("#regbank_popup__depo").nifty("hide"),
                    $("#btn_add_ubank__depo").prop("disabled", !1);
                    var a = $("select#bank_user_id");
                    a.html(""),
                    a.append('<option selected value="">Pilih <span class="txt_metod_name">Pulsa</span> </option>');
                    var n = t.data;
                    if (n && n.length > 0)
                        for (var r = 0; r < n.length; r++) {
                            var i = ""
                              , o = "";
                            1 != n[r].status && (i = "disble",
                            o = "disabled='true'");
                            var s = '<option class="' + i + '"value="' + n[r].bank_id + '"  data-metName="' + n[r].method_name + '"  data-method="' + n[r].method + '" ' + o + '><span class="sel-lvl-2">' + n[r].bank_name + "-" + n[r].acc_no + "</span>               </option>";
                            a.append(s)
                        }
                    return a.data("originalHTML", a.html()),
                    window.setBankUserOptions($(e).find('input[name="method"]').val()),
                    sweetAlert(t.m, "success", "Success"),
                    $("button[type=submit]").prop("disabled", !1),
                    !0
                }
                )).fail((function() {
                    return $("button[type=submit]").prop("disabled", !1),
                    !1
                }
                )),
                !1
            }
        })
    }
}
, function(e, t) {
    switch (window.lang) {
    case "id":
        window.transMsgs = {
            cfTimeout: "Jaringan Terputus, Silakan Coba Refresh kembali",
            sessionExpired: "Mohon login untuk melanjutkan. Sesi Anda sudah berakhir.",
            cfChallenge: "Sistem perlu meninjau keamanan koneksi Anda sebelum melanjutkan. Silakan Coba Refresh kembali",
            transFailedAmt0: "Transfer SEMUA ke dompet gagal. Jumlah Transfer harus lebih dari 0",
            currentPwdRequired: "Kata Sandi Saat Ini diperlukan",
            currentPwd5Chars: "Kata Sandi saat ini harus lebih dari 5 karakter",
            newPwdRequired: "Kata Sandi Baru diperlukan",
            newPwd5Chars: "Kata sandi baru harus lebih dari 5 karakter",
            confirmPwdRequired: "Konfirmasi Kata Sandi diperlukan",
            confirmPwd5chars: "Konfirmasi Kata Sandi harus lebih dari 5 karakter",
            confirmPwdNotMatched: "Konfirmasi Kata Sandi harus cocok dengan Kata Sandi Baru.",
            copied: "Disalin ke papan klip: ",
            emailRequired: "Email tidak boleh kosong",
            emailInvalid: "Email tidak valid",
            captchaRequired: "Captcha Diperlukan",
            captchaInvalid: "Captcha tidak valid",
            minimum4LetterRequired: "Diperlukan minimal 4 karakter",
            userNameRequired: "Username diperlukan dan tidak boleh kosong",
            pwdRequired: "Kata sandi diperlukan dan tidak boleh kosong",
            plsLogin: "Silahkan login terlebih dahulu sebelum membuka permainan",
            blockedFrGame: "Untuk saat ini Anda tidak dapat bermain permainan ini, silahkan hubungi CS untuk info lebih lanjut.",
            gameMaintenance: "Game sedang dalam maintenance.",
            gameComingSoon: "Game ini akan datang",
            pageComingSoon: "Halaman akan segera hadir",
            gamePromoBlock: "Game yang Anda klik bukan milik kategori promosi yang sedang berjalan. Setelah promosi selesai, Anda dapat kembali bermain",
            forgotPwdEmail: "Perubahan password Anda telah dikirim ke Email. Silahkan reset melalui Email Anda yang terdaftar. Jika Anda tidak menemukan pesan email di kotak masuk, silakan periksa di kotak spam / sampah.",
            pulsaRefNoPlaceholder: "Isi Nomor HP Pengirim atau Serial Number",
            transferSuccess: "Transfer Berhasil",
            accountFullNameRequired: "Nama Lengkap Diperlukan",
            fullNamesConsistOfAlphabets: "Nama lengkap hanya boleh terdiri dari huruf dan spasi, untuk spasi berturut-turut tidak diperbolehkan",
            minimumThreeCharatersRequired: "Diperlukan minimal 3 karakter",
            bankRequired: "Bank Diperlukan",
            bankAccountNumberRequired: "Nomor rekening bank Diperlukan",
            bankAccountPattern: "Nomor rekening bank hanya boleh terdiri dari angka",
            minimum6LetterRequired: "Diperlukan minimal 6 karakter",
            minimumEightLetterRequired: "Diperlukan minimal 8 karakter",
            minimum13LetterRequired: "Diperlukan minimal 13 karakter",
            minimum10LetterRequired: "Diperlukan minimal 10 karakter",
            minimum12LetterRequired: "Diperlukan minimal 12 karakter",
            minimum15LetterRequired: "Diperlukan minimal 15 karakter",
            maximumTwentycharaters: "Maksimal hanya 20 karakter",
            bankAccountNamesNotAvailable: "Nomor rekening bank sudah terdaftar",
            success: "Berhasil",
            pCodeConfirm: "Kode promo Anda belum dikonfirmasi. Anda yakin ingin melanjutkan?",
            offlineBank: "BANK SAAT INI OFFLINE, kami akan memproses transaksi Anda setelah bank online. Anda yakin ingin melanjutkan?",
            confirmDeliveryAddress: "Setelah mengonfirmasi alamat, Anda tidak dapat melakukan perubahan lagi. Apakah Anda yakin ingin melanjutkan?",
            walletTranserSuccess: "berhasil ditransfer ke game",
            fullNamesConsistAlphabets: "Nama lengkap hanya boleh terdiri dari huruf",
            mobileNumberRequired: "Nomor ponsel diperlukan",
            mobileNumberNumbersOnly: "Nomor ponsel harus terdiri dari angka saja",
            mobileNumberNotAvailable: "Nomor ponsel tidak tersedia",
            more: "LEBIH",
            minimumOneLetterRequired: "Diperlukan minimal 1 karakter",
            maximumFourcharaters: "Maksimal hanya 4 karakter",
            agencyCodeRequired: "Diperlukan Kode Agensi",
            agencyCodePattern: "Kode Agensi hanya boleh terdiri dari angka",
            balanceLimit: "Are your sure you wish to set balance limit?",
            spinSuccess: "Selamat, Anda telah menang",
            fa2Activated: "Selamat! 2FA Anda Diaktifkan.",
            fa2Deactivated: "2FA Anda Dinonaktifkan",
            ifscCodeRequired: "Kode IFSC diperlukan",
            ifscCodePattern: "Kode IFSC harus berisi setidaknya satu alfabet dan angka",
            minimum11charaters: "Diperlukan minimal 11 karakter",
            maximum11charaters: "Maksimal 11 karakter saja"
        };
        break;
    case "th":
        window.transMsgs = {
            cfTimeout: "หมดเวลาการเชื่อมต่อ โปรดลองรีเฟรชอีกครั้ง",
            sessionExpired: "กรุณาเข้าสู่ระบบเพื่อดำเนินการต่อ เซสชันของคุณอาจหมดอายุ",
            cfChallenge: "ระบบ จำเป็นต้องตรวจสอบความปลอดภัยของการเชื่อมต่อของคุณก่อนดำเนินการต่อ โปรดรีเฟรชหน้านี้",
            transFailedAmt0: "ไม่สามารถโอนทั้งหมดไปยังกระเป๋าเงินได้ จำนวนเงินโอนจะต้องมากกว่า 0",
            currentPwdRequired: "ต้องการรหัสผ่านปัจจุบัน",
            currentPwd5Chars: "รหัสผ่านปัจจุบันจะต้องเกิน 5 ตัวอักษร",
            newPwdRequired: "รหัสผ่านใหม่ต้องไม่ว่างเปล่า",
            newPwd5Chars: "รหัสผ่านใหม่จะต้องเกิน 5 ตัวอักษร",
            confirmPwdRequired: "ต้องยืนยันรหัสผ่าน",
            confirmPwd5chars: "ยืนยันรหัสผ่านจะต้องเกิน 5 ตัวอักษร",
            confirmPwdNotMatched: "รหัสผ่านการยืนยันจะต้องตรงกับรหัสผ่านใหม่",
            copied: "คัดลอกไปที่คลิปบอร์ด: ",
            emailRequired: "อีเมลต้องไม่ว่างเปล่า",
            emailInvalid: "อีเมลไม่ถูกต้อง",
            captchaRequired: "ต้องระบุ Captcha",
            captchaInvalid: "Captcha ไม่ถูกต้อง",
            minimum4LetterRequired: "ต้องมีตัวละครอย่างน้อย 4 ตัว",
            userNameRequired: "ต้องระบุชื่อผู้ใช้และต้องไม่ว่างเปล่า",
            pwdRequired: "ต้องใช้รหัสผ่านและต้องไม่ว่างเปล่า",
            plsLogin: "โปรดเข้าสู่ระบบเพื่อจะดำเนินการต่อ",
            blockedFrGame: "คุณถูกระงับ / ถูกบล็อกไม่ให้เล่นเกมนี้ กรุณาติดต่อฝ่ายบริการลูกค้าสำหรับข้อมูลเพิ่มเติม",
            gameMaintenance: "เกมอยู่ระหว่างการบำรุงรักษา",
            gameComingSoon: "เกมกำลังจะมาถึง",
            pageComingSoon: "เพจกำลังจะมาเร็วๆนี้",
            gamePromoBlock: "เกมที่คุณเลือกไม่ได้อยู่ในโปรโมชั่นที่คุณรับปัจุบัน หลังจากจบโปรโมชั่นถึงจะเล่นเกมอื่นได้",
            forgotPwdEmail: "โปรดตรวจสอบอีเมลของคุณอีเมลรีเซ็ตรหัสผ่านถูกส่งไปแล้ว. หากคุณไม่พบในกล่องจดหมายโปรดตรวจสอบในกล่องจดหมายขยะ / ขยะ",
            pulsaRefNoPlaceholder: "กรอกหมายเลขโทรศัพท์มือถือหรือหมายเลขซีเรียลของผู้ส่ง",
            transferSuccess: "ถ่ายโอนความสำเร็จ",
            accountFullNameRequired: "ต้องระบุชื่อนามสกุล",
            fullNamesConsistOfAlphabets: "ชื่อเต็มต้องประกอบด้วยตัวอักษรและช่องว่างเดียวเท่านั้นไม่อนุญาตให้เว้นวรรคติดต่อกันหลายช่อง",
            minimumThreeCharatersRequired: "ต้องมีตัวละครอย่างน้อย 3 ตัว",
            bankRequired: "ต้องใช้ธนาคาร",
            bankAccountNumberRequired: "ต้องระบุหมายเลขบัญชีธนาคาร",
            bankAccountPattern: "หมายเลขบัญชีธนาคารต้องประกอบด้วยตัวเลขเท่านั้น",
            minimum6LetterRequired: "ต้องมีตัวละครอย่างน้อย 6 ตัว",
            minimumEightLetterRequired: "ต้องมีตัวละครอย่างน้อย 8 ตัว",
            minimum13LetterRequired: "ต้องมีตัวละครอย่างน้อย 13 ตัว",
            minimum10LetterRequired: "ต้องมีตัวละครอย่างน้อย 10 ตัว",
            minimum12LetterRequired: "ต้องมีตัวละครอย่างน้อย 12 ตัว",
            minimum15LetterRequired: "ต้องมีตัวละครอย่างน้อย 15 ตัว",
            maximumTwentycharaters: "สูงสุด 20 ตัวอักษรเท่านั้น",
            bankAccountNamesNotAvailable: "ไม่มีชื่อบัญชีธนาคาร",
            success: "ความสำเร็จ",
            pCodeConfirm: "รหัสโปรโมชั่นของคุณยังไม่ได้รับการยืนยัน แน่ใจไหมว่าต้องการดำเนินการต่อ",
            offlineBank: "ธนาคารเป็นแบบออฟไลน์ในปัจจุบันเราจะดำเนินการธุรกรรมของคุณหลังจากที่ธนาคารออนไลน์ แน่ใจไหมว่าต้องการดำเนินการต่อ",
            confirmDeliveryAddress: "หลังจากยืนยันที่อยู่แล้วจะไม่สามารถทำการเปลี่ยนแปลงได้อีก คุณแน่ใจหรือไม่ว่าต้องการดำเนินการต่อ",
            walletTranserSuccess: "โอนไปยังเกมเรียบร้อยแล้ว",
            fullNamesConsistAlphabets: "ชื่อเต็มต้องประกอบด้วยตัวอักษรเท่านั้น",
            mobileNumberRequired: "จำเป็นต้องใช้หมายเลขโทรศัพท์มือถือ",
            mobileNumberNumbersOnly: "หมายเลขโทรศัพท์มือถือต้องประกอบด้วยตัวเลขเท่านั้น",
            mobileNumberNotAvailable: "ไม่มีหมายเลขโทรศัพท์มือถือ",
            more: "มากกว่า",
            minimumOneLetterRequired: "ต้องมีตัวละครอย่างน้อยหนึ่งตัว",
            maximumFourcharaters: "สูงสุดสี่ตัวอักษรเท่านั้น",
            agencyCodeRequired: "ต้องใช้รหัสหน่วยงาน",
            agencyCodePattern: "รหัสหน่วยงานต้องประกอบด้วยตัวเลขเท่านั้น",
            balanceLimit: "คุณแน่ใจหรือไม่ว่าต้องการตั้งค่าขีดจำกัดยอดเงินคงเหลือ?",
            spinSuccess: "ยินดีด้วย คุณชนะแล้ว",
            fa2Activated: "ยินดีด้วย! เปิดใช้งาน 2FA ของคุณแล้ว",
            fa2Deactivated: "2FA ของคุณถูกปิดใช้งาน",
            ifscCodeRequired: "ต้องใช้รหัส IFSC",
            ifscCodePattern: "รหัส IFSC ต้องมีตัวอักษรและตัวเลขอย่างน้อยหนึ่งตัว",
            minimum11charaters: "ต้องมีอักขระอย่างน้อย 11 ตัว",
            maximum11charaters: "สูงสุด 11 ตัวอักษรเท่านั้น"
        };
        break;
    case "vn":
        window.transMsgs = {
            cfTimeout: "Hết thời gian kết nối, Vui lòng thử Làm mới lại",
            sessionExpired: "Vui lòng Đăng nhập để tiến hành. Phiên của bạn có thể đã hết hạn.",
            cfChallenge: "Hệ thống cần xem lại tính bảo mật của kết nối của bạn trước khi tiếp tục. Vui lòng làm mới trang",
            transFailedAmt0: "Không thể chuyển tất cả vào ví. Số tiền chuyển phải lớn hơn 0",
            currentPwdRequired: "Cần mật khẩu hiện tại",
            currentPwd5Chars: "Mật khẩu hiện tại phải vượt quá 5 ký tự",
            newPwdRequired: "Mật khẩu mới không thể để trống",
            newPwd5Chars: "Mật khẩu mới phải vượt quá 5 ký tự",
            confirmPwdRequired: "Xác nhận mật khẩu là bắt buộc",
            confirmPwd5chars: "Xác nhận mật khẩu phải vượt quá 5 ký tự",
            confirmPwdNotMatched: "Mật khẩu xác nhận phải khớp với mật khẩu mới.",
            copied: "Sao chép vào clipboard: ",
            emailRequired: "Email không thể để trống",
            captchaRequired: "Captcha bắt buộc",
            captchaInvalid: "Đâu vao không hợp lệ",
            minimum4LetterRequired: "Yêu cầu tối thiểu 4 charaters",
            emailInvalid: "Email không hợp lệ",
            userNameRequired: "Tên người dùng là bắt buộc và không thể để trống",
            pwdRequired: "Mật khẩu là bắt buộc và không thể để trống",
            plsLogin: "Làm ơn đăng nhập để tiếp tục",
            blockedFrGame: "Bạn bị đình chỉ / chặn chơi trò chơi này. Vui lòng liên hệ với dịch vụ khách hàng để biết thêm.",
            gameMaintenance: "Trò chơi đang bảo trì.",
            gameComingSoon: "Trò chơi sẽ sớm ra mắt",
            pageComingSoon: "Trang sẽ sớm ra mắt",
            gamePromoBlock: "Trò chơi bạn đã nhấp không thuộc danh mục khuyến mãi hiện tại. Sau khi quảng cáo, bạn có thể quay lại trò chơi",
            forgotPwdEmail: "Vui lòng kiểm tra email của bạn, email mật khẩu đặt lại đã được gửi. Nếu bạn không tìm thấy nó trong hộp thư đến, vui lòng kiểm tra trong hộp thư rác / rác.",
            pulsaRefNoPlaceholder: "Điền số điện thoại di động hoặc số sê-ri của người gửi",
            transferSuccess: "Chuyển giao thành công",
            accountFullNameRequired: "Họ và Tên Yêu cầu",
            fullNamesConsistOfAlphabets: "Tên đầy đủ chỉ được bao gồm bảng chữ cái và dấu cách đơn, không được phép có nhiều dấu cách liên tiếp",
            minimumThreeCharatersRequired: "Yêu cầu tối thiểu 3 charaters",
            bankRequired: "Ngân hàng yêu cầu",
            bankAccountNumberRequired: "Số tài khoản ngân hàng Bắt buộc",
            bankAccountPattern: "Số tài khoản ngân hàng chỉ có thể bao gồm các số",
            minimum6LetterRequired: "Yêu cầu tối thiểu 6 charaters",
            minimumEightLetterRequired: "Yêu cầu tối thiểu 8 charaters",
            minimum13LetterRequired: "Yêu cầu tối thiểu 13 charaters",
            minimum10LetterRequired: "Yêu cầu tối thiểu 10 charaters",
            minimum12LetterRequired: "Yêu cầu tối thiểu 12 charaters",
            minimum15LetterRequired: "Yêu cầu tối thiểu 15 charaters",
            maximumTwentycharaters: "Chỉ tối đa 20 charaters",
            bankAccountNamesNotAvailable: "Tên tài khoản ngân hàng không có sẵn",
            success: "Sự thành công",
            pCodeConfirm: "Mã khuyến mãi của bạn chưa được xác nhận. Bạn có chắc chắn muốn tiếp tục không?",
            offlineBank: "NGÂN HÀNG HIỆN TẠI NGOẠI TUYẾN, chúng tôi sẽ xử lý giao dịch của bạn sau khi ngân hàng trực tuyến. Bạn có chắc chắn muốn tiếp tục không?",
            confirmDeliveryAddress: "Sau khi xác nhận địa chỉ không thể thay đổi nữa. Bạn có chắc chắn muốn tiếp tục không?",
            walletTranserSuccess: "chuyển thành công sang trò chơi",
            fullNamesConsistAlphabets: "Tên đầy đủ chỉ có thể bao gồm các bảng chữ cái",
            mobileNumberRequired: "Số điện thoại di động bắt buộc",
            mobileNumberNumbersOnly: "Số điện thoại di động chỉ cần bao gồm các số",
            mobileNumberNotAvailable: "Số điện thoại di động không khả dụng",
            more: "HƠN",
            minimumOneLetterRequired: "Cần tối thiểu một ký tự",
            maximumFourcharaters: "Chỉ tối đa bốn ký tự",
            agencyCodeRequired: "Yêu cầu mã đại lý",
            agencyCodePattern: "Mã đại lý chỉ có thể bao gồm các số",
            balanceLimit: "Are your sure you wish to set balance limit?",
            spinSuccess: "Bạn đã trúng",
            fa2Activated: "Chúc mừng! 2FA của bạn đã được kích hoạt.",
            fa2Deactivated: "2FA của bạn đã được hủy kích hoạt",
            ifscCodeRequired: "Yêu cầu mã IFSC",
            ifscCodePattern: "Mã IFSC phải chứa ít nhất một bảng chữ cái và số",
            minimum11charaters: "Cần tối thiểu 11 ký tự",
            maximum11charaters: "Chỉ tối đa 11 ký tự"
        };
        break;
    case "cn":
        window.transMsgs = {
            cfTimeout: "连接超时，请尝试刷新",
            sessionExpired: "请登录以继续。 您的会话可能已过期。",
            cfChallenge: "系統 需要在继续之前检查您的连接的安全性。请刷新页面",
            transFailedAmt0: "将全部转移到钱包失败。转账金额必须大于0",
            currentPwdRequired: "需要当前密码",
            currentPwd5Chars: "当前密码必须超过5个字符",
            newPwdRequired: "新密码不能为空",
            newPwd5Chars: "新密码必须超过5个字符",
            confirmPwdRequired: "确认密码为必填项",
            confirmPwd5chars: "确认密码必须超过5个字符",
            confirmPwdNotMatched: "确认密码必须与新密码匹配。",
            copied: "复制到剪贴板: ",
            emailRequired: "电子邮件不能为空",
            emailInvalid: "电邮无效",
            captchaRequired: "需要验证码",
            captchaInvalid: "无效输入",
            minimum4LetterRequired: "至少需要4个字符",
            userNameRequired: "用户名为必填项，不能为空",
            pwdRequired: "密码为必填项，不能为空",
            plsLogin: "请登录访问更多内容",
            blockedFrGame: "您已被暂停/被阻止玩此游戏。 请联系客服以获取更多信息。",
            gameMaintenance: "游戏正在维护中。",
            gameComingSoon: "游戏即将推出",
            pageComingSoon: "该页面即将推出",
            gamePromoBlock: "您单击的游戏不属于当前促销类别。 促销结束后，您可以返回游戏",
            forgotPwdEmail: "请检查您的电子邮件，重置密码电子邮件已发送。如果您没有在收件箱中找到它，请检查垃圾邮件/垃圾箱。",
            pulsaRefNoPlaceholder: "填写发件人的手机号码或序列号",
            transferSuccess: "转移成功",
            accountFullNameRequired: "需要全名",
            fullNamesConsistOfAlphabets: "全名只能由字母和单个空格组成，不允许多个连续的空格",
            minimumThreeCharatersRequired: "至少需要3个字符",
            bankRequired: "需要银行",
            bankAccountNumberRequired: "银行帐号必填",
            bankAccountPattern: "银行帐号只能包含数字",
            minimum6LetterRequired: "至少需要6个字符",
            minimumEightLetterRequired: "至少需要8个字符",
            minimum13LetterRequired: "至少需要13个字符",
            minimum10LetterRequired: "至少需要10个字符",
            minimum12LetterRequired: "至少需要12个字符",
            minimum15LetterRequired: "至少需要15个字符",
            maximumTwentycharaters: "最多20个字符",
            bankAccountNamesNotAvailable: "银行帐户名称不可用",
            success: "成功",
            pCodeConfirm: "您的促销代码尚未确认。您确定要继续吗？",
            offlineBank: "银行目前处于离线状态，我们将在银行在线后处理您的交易。您确定要继续吗？",
            confirmDeliveryAddress: "确认地址后无法再进行更改。您确定要继续吗？",
            walletTranserSuccess: "成功转移到游戏中",
            fullNamesConsistAlphabets: "全名只能包含字母",
            mobileNumberRequired: "手机号码必填",
            mobileNumberNumbersOnly: "手机号码仅需包含数字",
            mobileNumberNotAvailable: "手机号码不可用",
            more: "更多",
            minimumOneLetterRequired: "至少需要一个字符",
            maximumFourcharaters: "最多四个字符",
            agencyCodeRequired: "需要机构代码",
            agencyCodePattern: "机构代码只能由数字组成",
            balanceLimit: "Are your sure you wish to set balance limit?",
            spinSuccess: "恭喜你中奖了",
            fa2Activated: "恭喜！您的 2FA 已激活。",
            fa2Deactivated: "您的 2FA 已停用",
            ifscCodeRequired: "需要 IFSC 代码",
            ifscCodePattern: "IFSC 代码必须至少包含一个字母和数字",
            minimum11charaters: "至少需要 11 个字符",
            maximum11charaters: "最多只能有 11 个字符"
        };
        break;
    case "zh-hk":
        window.transMsgs = {
            cfTimeout: "連接超時，請嘗試刷新",
            sessionExpired: "請登錄繼續续。 您的會话可能已過期。",
            cfChallenge: "系统 需要在繼續之前檢查您的連接的安全性。請刷新頁面",
            transFailedAmt0: "將全部轉移到錢包失敗。轉賬金額必須大於0",
            currentPwdRequired: "需要當前密碼",
            currentPwd5Chars: "當前密碼必須超過5個字符",
            newPwdRequired: "新密碼不能為空",
            newPwd5Chars: "新密碼必須超過5個字符",
            confirmPwdRequired: "確認密碼為必填項",
            confirmPwd5chars: "确认密码必须超过5个字符",
            confirmPwdNotMatched: "確認密碼必須超過5個字符",
            copied: "複製到剪貼板: ",
            emailRequired: "電子郵件不能為空",
            emailInvalid: "電郵無效",
            captchaRequired: "需要驗證碼",
            captchaInvalid: "無效输入",
            minimum4LetterRequired: "至少需要4個字符",
            userNameRequired: "用戶名為必填項，不能為空",
            pwdRequired: "密碼為必填項，不能為空",
            plsLogin: "請登錄訪問更多內容",
            blockedFrGame: "您已被暫停/被阻止玩此遊戲。請聯繫客服以獲取更多信息。",
            gameMaintenance: "遊戲正在維護中。",
            gameComingSoon: "遊戲即將推出",
            pageComingSoon: "該頁面即將推出",
            gamePromoBlock: "您單擊的遊戲不屬於當前促銷類別。促銷結束後，您可以返回游戲",
            forgotPwdEmail: "請檢查您的電子郵件，重置密碼電子郵件已發送。如果您沒有在收件箱中找到它，請檢查垃圾郵件/垃圾箱。",
            pulsaRefNoPlaceholder: "填寫發件人的手機號碼或序列號",
            transferSuccess: "轉移成功",
            accountFullNameRequired: "需要全名",
            fullNamesConsistOfAlphabets: "全名只能由字母和單個空格組成，不允許多個連續的空格",
            minimumThreeCharatersRequired: "至少需要3個字符",
            bankRequired: "需要銀行",
            bankAccountNumberRequired: "銀行帳號必填",
            bankAccountPattern: "銀行帳號只能包含數字",
            minimum6LetterRequired: "至少需要6個字符",
            minimumEightLetterRequired: "至少需要8個字符",
            minimum13LetterRequired: "至少需要13個字符",
            minimum10LetterRequired: "至少需要10個字符",
            minimum12LetterRequired: "至少需要12個字符",
            minimum15LetterRequired: "至少需要15個字符",
            maximumTwentycharaters: "最多20個字符",
            bankAccountNamesNotAvailable: "銀行帳戶名稱不可用",
            success: "成功",
            pCodeConfirm: "您的促銷代碼尚未確認。您確定要繼續嗎？",
            offlineBank: "銀行目前處於離線狀態，我們將在銀行在線後處理您的交易。您確定要繼續嗎？",
            confirmDeliveryAddress: "地址確認後不可再更改。您確定要繼續嗎？",
            walletTranserSuccess: "成功轉移到遊戲中",
            fullNamesConsistAlphabets: "全名只能包含字母",
            mobileNumberRequired: "手機號碼必填",
            mobileNumberNumbersOnly: "手機號碼僅需包含數字",
            mobileNumberNotAvailable: "手機號碼不可用",
            more: "更多",
            minimumOneLetterRequired: "至少需要一個字符",
            maximumFourcharaters: "最多四個字符",
            agencyCodeRequired: "需要機構代碼",
            agencyCodePattern: "機構代碼只能由數字組成",
            balanceLimit: "Are your sure you wish to set balance limit?",
            spinSuccess: "恭喜你中獎了",
            fa2Activated: "恭喜！您的 2FA 已激活。",
            fa2Deactivated: "您的 2FA 已停用",
            ifscCodeRequired: "需要 IFSC 程式碼",
            ifscCodePattern: "IFSC 代碼必須包含至少一個字母和數字",
            minimum11charaters: "至少需要 11 個字符",
            maximum11charaters: "最多僅 11 個字符"
        };
        break;
    case "km":
        window.transMsgs = {
            cfTimeout: "អស់​ពេល​នៃ​ការ​តភ្ជាប់ សូម​ធ្វើ​ការ​ឡើងវិញ ហើយ​ព្យាយាម​ម្ដង​ទៀត។",
            sessionExpired: "សូមចូលដើម្បីបន្ត។ ការចូលរបស់អ្នកត្រូវបានផុតកំណត់ហើយ។",
            cfChallenge: "ប្រព័ន្ធ ត្រូវការពិនិត្យមើលសុវត្ថិភាពនៃការតភ្ជាប់របស់អ្នកមុនពេលបន្ត។ សូមផ្ទុកទំព័រឡើងវិញ",
            transFailedAmt0: "ការផ្ទេរទាំងអស់ទៅកាបូបបានបរាជ័យ។ ចំនួនទឹកប្រាក់ផ្ទេរត្រូវតែលើសពី ០",
            currentPwdRequired: "ពាក្យសម្ងាត់បច្ចុប្បន្នត្រូវបានទាមទារ",
            currentPwd5Chars: "ពាក្យសម្ងាត់បច្ចុប្បន្នត្រូវតែមានច្រើនជាង ៥ តួ",
            newPwdRequired: "ពាក្យសម្ងាត់ថ្មីត្រូវបានទាមទារ",
            newPwd5Chars: "ពាក្យសម្ងាត់ថ្មីត្រូវតែមានច្រើនជាង ៥ តួ",
            confirmPwdRequired: "បញ្ជាក់ពាក្យសម្ងាត់ត្រូវបានទាមទារ",
            confirmPwd5chars: "បញ្ជាក់លេខសំងាត់ត្រូវតែមានច្រើនជាង ៥ តួ",
            confirmPwdNotMatched: "បញ្ជាក់លេខសំងាត់ត្រូវតែត្រូវនឹងលេខសំងាត់ថ្មី។",
            copied: "បានចម្លងទៅក្តារតម្បៀតខ្ទាស់៖ ",
            emailRequired: "អ៊ីមែលមិនអាចទទេបានទេ",
            emailInvalid: "អ៊ីមែលមិនត្រឹមត្រូវ",
            captchaRequired: "ត្រូវការ Captcha",
            captchaInvalid: "captcha មិនត្រឹមត្រូវ",
            minimum4LetterRequired: "យ៉ាងហោចណាស់ 4 អក្សរ",
            userNameRequired: "ឈ្មោះអ្នកប្រើត្រូវបានទាមទារហើយមិនអាចទទេ",
            pwdRequired: "ពាក្យសម្ងាត់ត្រូវបានទាមទារហើយមិនអាចទទេ",
            plsLogin: "សូមចូលដើម្បីបន្ត",
            blockedFrGame: "អ្នកត្រូវបានព្យួរ / រារាំងពីការលេងហ្គេមនេះ។ សូមទាក់ទង CS សម្រាប់ព័ត៌មានបន្ថែម។",
            gameMaintenance: "ហ្គេមកំពុងស្ថិតនៅក្រោមការថែទាំ។",
            gameComingSoon: "ហ្គេមជិតមកដល់ហើយ",
            pageComingSoon: "ទំព័រនឹងមកដល់ឆាប់ៗនេះ",
            gamePromoBlock: "ហ្គេមដែលអ្នកបានចុចមិនមែនជាកម្មសិទ្ធិរបស់ប្រភេទផ្សព្វផ្សាយបច្ចុប្បន្នទេ។ បន្ទាប់ពីការផ្សព្វផ្សាយត្រូវបានបញ្ចប់អ្នកអាចត្រលប់ទៅលេងវិញ",
            forgotPwdEmail: "សូមពិនិត្យមើលអ៊ីមែលរបស់អ្នកអ៊ីមែលពាក្យសម្ងាត់កំណត់ឡើងវិញត្រូវបានផ្ញើ។ ប្រសិនបើអ្នកមិនបានរកឃើញវានៅក្នុងប្រអប់សារសូមឆែកក្នុងប្រអប់សារឥតបានការ",
            pulsaRefNoPlaceholder: "បំពេញលេខទូរស័ព្ទឬលេខសៀរៀលរបស់អ្នកផ្ញើ",
            transferSuccess: "ផ្ទេរជោគជ័យ",
            accountFullNameRequired: "ទាមទារឈ្មោះពេញគណនី",
            fullNamesConsistOfAlphabets: "ឈ្មោះពេញអាចមានតែអក្ខរក្រមនិងដកឃ្លាតែមួយគត់ដែលមានចន្លោះជាប់គ្នាមិនត្រូវបានអនុញ្ញាត",
            minimumThreeCharatersRequired: "តម្រូវឱ្យមានក្រុមយ៉ាងតិច ៣",
            bankRequired: "ធនាគារ Diperlukan",
            bankAccountNumberRequired: "ត្រូវការលេខគណនីធនាគារ",
            bankAccountPattern: "លេខគណនីធនាគារអាចមានតែលេខប៉ុណ្ណោះ",
            minimum6LetterRequired: "តម្រូវឱ្យមានក្រុមយ៉ាងតិច ៦",
            minimumEightLetterRequired: "តម្រូវឱ្យមានក្រុមយ៉ាងតិច ៨",
            minimum13LetterRequired: "តម្រូវឱ្យមានតួអក្សរយ៉ាងតិច ១៣",
            minimum10LetterRequired: "តម្រូវឱ្យមានក្រុមយ៉ាងតិច ១០",
            minimum12LetterRequired: "តម្រូវឱ្យមានយ៉ាងហោចណាស់ ១២ ជំពូក",
            minimum15LetterRequired: "តម្រូវឱ្យមានក្រុមយ៉ាងតិច ១៥",
            maximumTwentycharaters: "អតិបរមាតែ ២០ ជំពូកប៉ុណ្ណោះ",
            bankAccountNamesNotAvailable: "ឈ្មោះគណនីធនាគារមិនមានទេ",
            success: "ជោគជ័យ",
            pCodeConfirm: "លេខកូដប្រូម៉ូសិនរបស់អ្នកមិនទាន់មាននៅឡើយទេលេខកូដប្រូម៉ូសិនរបស់អ្នកមិនទាន់ត្រូវបានបញ្ជាក់ តើអ្នកប្រាកដថាចង់បន្តឬ? តើអ្នកប្រាកដថាចង់បន្តឬ?",
            offlineBank: "ធនាគារគឺក្រៅបណ្តាញបច្ចុប្បន្នយើងនឹងដំណើរការប្រតិបត្តិការរបស់អ្នកបន្ទាប់ពីធនាគារតាមអ៊ីនធឺណិត។ តើអ្នកប្រាកដថាចង់បន្តឬ?",
            confirmDeliveryAddress: "បន្ទាប់ពីបញ្ជាក់អាសយដ្ឋានមិនអាចធ្វើការផ្លាស់ប្តូរម្តងទៀតបានទេ។ តើអ្នកប្រាកដថាចង់បន្តទេ?",
            walletTranserSuccess: "ផ្ទេរទៅហ្គេមដោយជោគជ័យ",
            fullNamesConsistAlphabets: "ឈ្មោះពេញអាចមានតែអក្ខរក្រមប៉ុណ្ណោះ",
            mobileNumberRequired: "ត្រូវការលេខទូរស័ព្ទ",
            mobileNumberNumbersOnly: "លេខទូរស័ព្ទត្រូវការតែលេខប៉ុណ្ណោះ",
            mobileNumberNotAvailable: "មិនមានលេខទូរស័ព្ទទេ",
            more: "ច្រើនទៀត",
            minimumOneLetterRequired: "តម្រូវ​ឱ្យ​មាន​តួអក្សរ​មួយ​យ៉ាង​តិច",
            maximumFourcharaters: "អតិបរមាត្រឹមតែបួនតួអក្សរប៉ុណ្ណោះ។",
            agencyCodeRequired: "ទាមទារលេខកូដភ្នាក់ងារ",
            agencyCodePattern: "លេខកូដភ្នាក់ងារអាចមានតែលេខប៉ុណ្ណោះ។",
            balanceLimit: "Are your sure you wish to set balance limit?",
            spinSuccess: "សូមអបអរសាទរអ្នកបានឈ្នះ",
            fa2Activated: "អបអរសាទរ! ការផ្ទៀងផ្ទាត់ដោយបញ្ជូនតាមពាក្យសម្ងាត់របស់អ្នកត្រូវបានបើកហើយ។",
            fa2Deactivated: "ការផ្ទៀងផ្ទាត់ដោយបញ្ជូនតាមពាក្យសម្ងាត់របស់អ្នកត្រូវបានបិទហើយ។",
            ifscCodeRequired: "តម្រូវ​ឱ្យ​មាន​កូដ IFSC",
            ifscCodePattern: "លេខកូដ IFSC ត្រូវតែមានយ៉ាងហោចណាស់អក្ខរក្រមមួយ និងលេខ",
            minimum11charaters: "យ៉ាងហោចណាស់ 11 តួអក្សរត្រូវបានទាមទារ",
            maximum11charaters: "អតិបរមាត្រឹមតែ 11 តួអក្សរប៉ុណ្ណោះ។"
        };
        break;
    case "pt":
        window.transMsgs = {
            cfTimeout: "Tempo limite de conexão, atualize e tente novamente",
            sessionExpired: "Por favor, faça login para prosseguir. Sua sessão pode ter expirado.",
            cfChallenge: "A Sistema precisa revisar a segurança da sua conexão antes de prosseguir. Atualize a página",
            transFailedAmt0: "Falha na transferência de TODOS para a carteira. O valor da transferência deve ser maior que 0",
            currentPwdRequired: "A senha atual é obrigatória",
            currentPwd5Chars: "A senha atual deve ter mais de 5 caracteres",
            newPwdRequired: "Nova senha é necessária",
            newPwd5Chars: "A nova senha deve ter mais de 5 caracteres",
            confirmPwdRequired: "Confirmar senha é necessária",
            confirmPwd5chars: "Confirmar senha deve ter mais de 5 caracteres",
            confirmPwdNotMatched: "Confirmar Senha deve corresponder à Nova Senha.",
            copied: "Copiado para a área de transferência: ",
            emailRequired: "O e-mail não pode estar vazio",
            emailInvalid: "E-mail inválido",
            captchaRequired: "Captcha obrigatório",
            captchaInvalid: "Captcha está inválidoវ",
            minimum4LetterRequired: "É necessário um mínimo de 4 caracteres",
            userNameRequired: "O nome de usuário é obrigatório e não pode estar vazio",
            pwdRequired: "A senha é obrigatória e não pode estar vazia",
            plsLogin: "Por favor faça o login para continuar",
            blockedFrGame: "Você está suspenso/bloqueado de jogar este jogo. Entre em contato com CS para mais informações.",
            gameMaintenance: "O jogo está em manutenção.",
            gameComingSoon: "O jogo está chegando em breve",
            pageComingSoon: "A página chegará em breve",
            gamePromoBlock: "O jogo em que você clicou não pertence à categoria de promoção atual. Após o término da promoção, você pode voltar a jogar",
            forgotPwdEmail: "Por favor, verifique seu e-mail, o e-mail de redefinição de senha foi enviado. Se você não encontrou na caixa de entrada, verifique na caixa de spam/lixo.",
            pulsaRefNoPlaceholder: "Preencha o número do celular ou o número de série do remetente",
            transferSuccess: "Sucesso na transferência",
            accountFullNameRequired: "Nome completo da conta obrigatório",
            fullNamesConsistOfAlphabets: "Os nomes completos podem consistir apenas em letras e espaços simples, vários espaços consecutivos não são permitidos",
            minimumThreeCharatersRequired: "É necessário um mínimo de 3 caracteres",
            bankRequired: "Banco Obrigatório",
            bankAccountNumberRequired: "Número da conta bancária Obrigatório",
            bankAccountPattern: "Os números de contas bancárias só podem consistir em números",
            minimum6LetterRequired: "São necessários no mínimo 6 caracteres",
            minimumEightLetterRequired: "É necessário um mínimo de 8 caracteres",
            minimum13LetterRequired: "São necessários no mínimo 13 caracteres",
            minimum10LetterRequired: "São necessários no mínimo 10 caracteres",
            minimum12LetterRequired: "São necessários no mínimo 12 caracteres",
            minimum15LetterRequired: "São necessários no mínimo 15 caracteres",
            maximumTwentycharaters: "Máximo de 20 caracteres apenas",
            bankAccountNamesNotAvailable: "Os nomes das contas bancárias não estão disponíveis",
            success: "Sucesso",
            pCodeConfirm: "Seu código promocional ainda não existe Seu código promocional ainda não foi confirmado. Tem certeza de que deseja continuar?. Tem certeza de que deseja continuar?",
            offlineBank: "O BANCO ESTÁ ATUALMENTE OFFLINE, processaremos sua transação após o Bank Online. Tem certeza de que deseja continuar?",
            confirmDeliveryAddress: "Após confirmar o endereço não é possível fazer alterações novamente. Tem certeza de que deseja prosseguir?",
            walletTranserSuccess: "transferido com sucesso para o jogo",
            fullNamesConsistAlphabets: "Os nomes completos só podem consistir em alfabetos",
            mobileNumberRequired: "Número de celular obrigatório",
            mobileNumberNumbersOnly: "Os números de celular precisam consistir apenas em números",
            mobileNumberNotAvailable: "Número de celular não disponível",
            more: "MAIS",
            minimumOneLetterRequired: "São necessários no mínimo 1 caracteres",
            maximumFourcharaters: "Máximo de 4 caracteres apenas",
            agencyCodeRequired: "Código da Agência Necessário",
            agencyCodePattern: "O código da agência só pode consistir em números",
            balanceLimit: "Tem certeza de que deseja definir o limite de saldo?",
            spinSuccess: "Parabéns, você ganhou",
            fa2Activated: "Parabéns! Sua autenticação de dois fatores está ativada.",
            fa2Deactivated: "Sua autenticação de dois fatores está desativada.",
            ifscCodeRequired: "Código IFSC obrigatório",
            ifscCodePattern: "O Código IFSC deve conter pelo menos um alfabeto e um número",
            minimum11charaters: "São necessários no mínimo 11 caracteres",
            maximum11charaters: "Máximo de 11 caracteres apenas"
        };
        break;
    case "pk":
        window.transMsgs = {
            cfTimeout: "کنکشن کا وقت ختم ہو گیا، براہ کرم ریفریش کریں اور دوبارہ کوشش کریں۔",
            sessionExpired: "براہ کرم آگے بڑھنے کے لیے لاگ ان کریں۔ آپ کے سیشن کی میعاد ختم ہو سکتی ہے۔",
            cfChallenge: "سسٹم کو آگے بڑھنے سے پہلے آپ کے کنکشن کی سیکیورٹی کا جائزہ لینے کی ضرورت ہے۔ براہ کرم صفحہ کو ریفریش کریں۔",
            transFailedAmt0: "سبھی کو بٹوے میں منتقل کرنا ناکام ہو گیا۔ منتقلی کی رقم صفر سے زیادہ ہونی چاہیے۔",
            currentPwdRequired: "موجودہ پاس ورڈ درکار ہے۔",
            currentPwd5Chars: "موجودہ پاس ورڈ 5 حروف سے زیادہ ہونا چاہیے۔",
            newPwdRequired: "نیا پاس ورڈ درکار ہے۔",
            newPwd5Chars: "نیا پاس ورڈ 5 حروف سے زیادہ ہونا چاہیے۔",
            confirmPwdRequired: "تصدیق کریں پاس ورڈ درکار ہے۔",
            confirmPwd5chars: "تصدیقی پاس ورڈ 5 حروف سے زیادہ ہونا چاہیے۔",
            confirmPwdNotMatched: "پاس ورڈ کی تصدیق کریں نئے پاس ورڈ سے مماثل ہونا چاہیے۔",
            copied: "کلپ بورڈ پر کاپی کیا گیا:",
            emailRequired: "ای میل خالی نہیں ہو سکتی",
            emailInvalid: "ای میل غلط ہے۔",
            captchaRequired: "کیپچا درکار ہے۔",
            captchaInvalid: "کیپچا غلط ہے۔",
            minimum4LetterRequired: "کم از کم 4 حروف درکار ہیں۔",
            userNameRequired: "صارف نام درکار ہے اور خالی نہیں ہو سکتا",
            pwdRequired: "پاس ورڈ درکار ہے اور خالی نہیں ہو سکتا",
            plsLogin: "جاری رکھنے کے لئے لاگ ان کریں",
            blockedFrGame: "آپ کو یہ گیم کھیلنے سے معطل / بلاک کر دیا گیا ہے۔ براہ کرم مزید معلومات کے لیے CS سے رابطہ کریں۔",
            gameMaintenance: "کھیل کی دیکھ بھال جاری ہے۔",
            gameComingSoon: "کھیل جلد آرہا ہے۔",
            pageComingSoon: "پیج جلد آرہا ہے۔",
            gamePromoBlock: "آپ نے جس گیم پر کلک کیا ہے اس کا تعلق موجودہ پروموشن کے زمرے سے نہیں ہے۔ پروموشن ختم ہونے کے بعد، آپ کھیل میں واپس جا سکتے ہیں۔",
            forgotPwdEmail: "براہ کرم اپنا ای میل چیک کریں، پاس ورڈ کو دوبارہ ترتیب دینے والا ای میل بھیج دیا گیا ہے۔ اگر آپ کو یہ ان باکس میں نہیں ملا تو برائے مہربانی اسپام/جنک باکس میں چیک کریں۔",
            pulsaRefNoPlaceholder: "بھیجنے والے کا موبائل نمبر یا سیریل نمبر پُر کریں۔",
            transferSuccess: "منتقلی کی کامیابی",
            accountFullNameRequired: "اکاؤنٹ کا پورا نام درکار ہے۔",
            fullNamesConsistOfAlphabets: "مکمل نام صرف حروف تہجی اور واحد خالی جگہوں پر مشتمل ہو سکتے ہیں، متواتر متعدد خالی جگہوں کی اجازت نہیں ہے۔",
            minimumThreeCharatersRequired: "کم از کم 3 حروف کی ضرورت ہے۔",
            bankRequired: "بینک کی ضرورت ہے۔",
            bankAccountNumberRequired: "بینک اکاؤنٹ نمبر درکار ہے۔",
            bankAccountPattern: "بینک اکاؤنٹ نمبرز صرف نمبروں پر مشتمل ہو سکتے ہیں۔",
            minimum6LetterRequired: "کم از کم 6 حروف درکار ہیں۔",
            minimumEightLetterRequired: "کم از کم 8 حروف درکار ہیں۔",
            minimum13LetterRequired: "کم از کم 13 حروف درکار ہیں۔",
            minimum10LetterRequired: "کم از کم 10 حروف درکار ہیں۔",
            minimum12LetterRequired: "کم از کم 12 حروف درکار ہیں۔",
            minimum15LetterRequired: "کم از کم 15 حروف درکار ہیں۔",
            maximumTwentycharaters: "زیادہ سے زیادہ صرف 20 حروف",
            bankAccountNamesNotAvailable: "بینک اکاؤنٹس کے نام دستیاب نہیں ہیں۔",
            success: "کامیابی",
            pCodeConfirm: "آپ کا پرومو کوڈ ابھی تک نہیں ہے آپ کے پرومو کوڈ کی ابھی تک تصدیق نہیں ہوئی ہے۔ کیا آپ واقعی آگے بڑھنا چاہیں گے؟ کیا آپ واقعی آگے بڑھنا چاہیں گے؟",
            offlineBank: "بینک فی الحال آف لائن ہے، ہم بینک آن لائن کے بعد آپ کے لین دین پر کارروائی کریں گے۔ کیا آپ واقعی آگے بڑھنا چاہیں گے؟",
            confirmDeliveryAddress: "تصدیق کے بعد پتہ دوبارہ تبدیل نہیں ہو سکتا۔ کیا آپ واقعی آگے بڑھنا چاہیں گے؟",
            walletTranserSuccess: "کامیابی سے گیم میں منتقل کر دیا گیا۔",
            fullNamesConsistAlphabets: "مکمل نام صرف حروف تہجی پر مشتمل ہو سکتے ہیں۔",
            mobileNumberRequired: "موبائل نمبر درکار ہے۔",
            mobileNumberNumbersOnly: "موبائل نمبرز کو صرف نمبروں پر مشتمل ہونا ضروری ہے۔",
            mobileNumberNotAvailable: "موبائل نمبر دستیاب نہیں ہے۔",
            more: "مزید",
            minimumOneLetterRequired: "کم از کم ایک حروف درکار ہیں۔",
            maximumFourcharaters: "زیادہ سے زیادہ صرف 4 حروف",
            agencyCodeRequired: "ایجنسی کوڈ درکار ہے۔",
            agencyCodePattern: "ایجنسی کوڈ صرف نمبروں پر مشتمل ہو سکتا ہے۔",
            balanceLimit: "کیا آپ کو یقین ہے کہ آپ بیلنس کی حد مقرر کرنا چاہتے ہیں؟",
            spinSuccess: "مبارک ہو، آپ جیت گئے ہیں۔",
            fa2Activated: "مبارک ہو! آپ کی دو مرحلہ وار توثیق فعال ہوگئی ہے۔",
            fa2Deactivated: "آپ کی دو مرحلہ وار توثیق غیر فعال ہوچکی ہے۔",
            ifscCodeRequired: "IFSC کوڈ درکار ہے۔",
            ifscCodePattern: "IFSC کوڈ میں کم از کم ایک حروف تہجی اور نمبر ہونا چاہیے۔",
            minimum11charaters: "کم از کم 11 چارٹر درکار ہیں۔",
            maximum11charaters: "زیادہ سے زیادہ صرف 11 چارٹر"
        };
        break;
    case "ne":
        window.transMsgs = {
            cfTimeout: "जडान समय सकियो , कृपया ताजा गर्नुहोस् र पुन: प्रयास गर्नुहोस्",
            sessionExpired: "कृपया अगाडि बढ्न लगइन गर्नुहोस्। तपाईंको सत्रको म्याद सकिएको हुन सक्छ।",
            cfChallenge: "प्रणाली अगाडि बढ्नु अघि तपाइँको जडानको सुरक्षा समीक्षा गर्न आवश्यक छ। कृपया पृष्ठ रिफ्रेस गर्नुहोस्",
            transFailedAmt0: "ALL लाई वालेटमा स्थानान्तरण गर्न सकिएन। स्थानान्तरण रकम ० भन्दा बढी हुनुपर्छ",
            currentPwdRequired: "हालको पासवर्ड आवश्यक छ",
            currentPwd5Chars: "हालको पासवर्ड 5 वर्ण भन्दा बढी हुनुपर्छ",
            newPwdRequired: "नयाँ पासवर्ड आवश्यक छ",
            newPwd5Chars: "नयाँ पासवर्ड 5 वर्ण भन्दा बढी हुनुपर्छ",
            confirmPwdRequired: "पुष्टि पासवर्ड आवश्यक छ",
            confirmPwd5chars: "पुष्टि गर्नुहोस् पासवर्ड 5 वर्ण भन्दा बढी हुनुपर्छ",
            confirmPwdNotMatched: "पासवर्ड पुष्टि गर्नुहोस् नयाँ पासवर्डसँग मेल खानुपर्छ।",
            copied: "क्लिपबोर्डमा प्रतिलिपि गरियो: ",
            emailRequired: "इमेल खाली हुन सक्दैन",
            emailInvalid: "इमेल अवैध",
            captchaRequired: "क्याप्चा आवश्यक छ",
            captchaInvalid: "क्याप्चा अवैध",
            minimum4LetterRequired: "कम्तिमा 4 क्यारेटरहरू आवश्यक छन्",
            userNameRequired: "प्रयोगकर्ता नाम आवश्यक छ र खाली हुन सक्दैन",
            pwdRequired: "पासवर्ड आवश्यक छ र खाली हुन सक्दैन",
            plsLogin: "जारी राख्न कृपया लगइन गर्नुहोस्",
            blockedFrGame: "तपाइँलाई यो खेल खेल्नबाट निलम्बित / अवरुद्ध गरिएको छ। थप जानकारीको लागि कृपया CS लाई सम्पर्क गर्नुहोस्।",
            gameMaintenance: "खेल मर्मत अन्तर्गत छ।",
            gameComingSoon: "खेल चाँडै आउँदैछ",
            pageComingSoon: "पेज चाँडै आउँदैछ",
            gamePromoBlock: "तपाईंले क्लिक गर्नुभएको खेल हालको प्रमोशन कोटीसँग सम्बन्धित छैन। पदोन्नति समाप्त भएपछि, तपाईं खेल्न फर्कन सक्नुहुन्छ",
            forgotPwdEmail: "कृपया आफ्नो इमेल जाँच गर्नुहोस्, रिसेट पासवर्ड इमेल पठाइएको छ। यदि तपाईंले यसलाई इनबक्समा फेला पार्नुभएन भने, कृपया स्प्याम/जंक बक्समा जाँच गर्नुहोस्।",
            pulsaRefNoPlaceholder: "प्रेषकको मोबाइल नम्बर वा सिरियल नम्बर भर्नुहोस्",
            transferSuccess: "स्थानान्तरण सफलता",
            accountFullNameRequired: "खाता पूरा नाम आवश्यक छ",
            fullNamesConsistOfAlphabets: "पूर्ण नामहरूमा केवल अक्षरहरू र एकल स्पेसहरू समावेश हुन सक्छन्, धेरै लगातार स्पेसहरूलाई अनुमति छैन",
            minimumThreeCharatersRequired: "कम्तिमा ३ क्यारेटर आवश्यक छ",
            bankRequired: "बैंक आवश्यक छ",
            bankAccountNumberRequired: "बैंक खाता नम्बर आवश्यक छ",
            bankAccountPattern: "बैंक खाता नम्बरमा संख्या मात्र हुन सक्छ",
            minimum6LetterRequired: "कम्तिमा 6 क्यारेटरहरू आवश्यक छन्",
            minimumEightLetterRequired: "कम्तिमा 8 क्यारेटरहरू आवश्यक छन्",
            minimum13LetterRequired: "कम्तिमा 13 charaters आवश्यक छ",
            minimum10LetterRequired: "न्यूनतम 10 क्यारेटरहरू आवश्यक छन्",
            minimum12LetterRequired: "न्यूनतम 12 क्यारेटरहरू आवश्यक छन्",
            minimum15LetterRequired: "न्यूनतम 15 क्यारेटरहरू आवश्यक छन्",
            maximumTwentycharaters: "अधिकतम २० चार्टर मात्र",
            bankAccountNamesNotAvailable: "बैंक खाता नामहरू उपलब्ध छैनन्",
            success: "सफलता",
            pCodeConfirm: "तपाईंको प्रोमो कोड अझै छैन तपाईंको प्रोमो कोड अझै पुष्टि भएको छैन। के तपाइँ निश्चित हुनुहुन्छ कि तपाइँ अगाडि बढ्न चाहनुहुन्छ?. के तपाइँ निश्चित रूपमा अगाडि बढ्न चाहनुहुन्छ?",
            offlineBank: "बैंक हाल अफलाइन छ, हामी बैंक अनलाइन पछि तपाईंको लेनदेन प्रक्रिया गर्नेछौं। के तपाइँ निश्चित रूपमा अगाडि बढ्न चाहनुहुन्छ?",
            confirmDeliveryAddress: "पुष्टि गरेपछि ठेगाना फेरि परिवर्तन गर्न सकिँदैन। के तपाइँ निश्चित रूपमा अगाडि बढ्न चाहनुहुन्छ?",
            walletTranserSuccess: "सफलतापूर्वक खेलमा स्थानान्तरण गरियो",
            fullNamesConsistAlphabets: "पूरा नामहरू मात्र अक्षरहरू समावेश गर्न सकिन्छ",
            mobileNumberRequired: "मोबाइल नम्बर आवश्यक छ",
            mobileNumberNumbersOnly: "मोबाइल नम्बरहरूमा नम्बरहरू मात्र हुनुपर्छ",
            mobileNumberNotAvailable: "मोबाइल नम्बर उपलब्ध छैन",
            more: "थप",
            minimumOneLetterRequired: "कम्तिमा १ चार्टर आवश्यक छ",
            maximumFourcharaters: "अधिकतम 4 चार्टर मात्र",
            agencyCodeRequired: "एजेन्सी कोड आवश्यक छ",
            agencyCodePattern: "एजेन्सी कोड नम्बरहरू मात्र समावेश हुन सक्छ",
            balanceLimit: "के तपाइँ ब्यालेन्स सीमा सेट गर्न निश्चित हुनुहुन्छ?",
            spinSuccess: "बधाई छ, तपाईंले जित्नुभयो",
            fa2Activated: "बधाई छ! तपाईंको दुई-तह प्रमाणीकरण सक्रिय भएको छ।",
            fa2Deactivated: "तपाईंको दुई-तह प्रमाणीकरण निष्क्रिय भएको छ।",
            ifscCodeRequired: "IFSC कोड आवश्यक छ",
            ifscCodePattern: "IFSC कोडमा कम्तिमा एउटा अक्षर र नम्बर हुनुपर्छ",
            minimum11charaters: "न्यूनतम ११ वर्ण आवश्यक छ",
            maximum11charaters: "अधिकतम ११ वर्ण मात्र"
        };
        break;
    case "bn":
        window.transMsgs = {
            cfTimeout: "সংযোগের সময় শেষ, অনুগ্রহ করে রিফ্রেশ করুন এবং আবার চেষ্টা করুন৷",
            sessionExpired: "এগিয়ে যেতে লগইন করুন। আপনার সেশনের মেয়াদ শেষ হয়ে গিয়েছে।",
            cfChallenge: "ক্লাউডফ্লেয়ারকে এগিয়ে যাওয়ার আগে আপনার সংযোগের নিরাপত্তা পর্যালোচনা করতে হবে। পৃষ্ঠাটি রিফ্রেশ করুন",
            transFailedAmt0: "মানিব্যাগে সমস্ত স্থানান্তর ব্যর্থ হয়েছে৷ স্থানান্তরের পরিমাণ অবশ্যই 0-এর বেশি হতে হবে",
            currentPwdRequired: "বর্তমান পাসওয়ার্ড প্রয়োজন",
            currentPwd5Chars: "বর্তমান পাসওয়ার্ড অবশ্যই 5 অক্ষরের বেশি হতে হবে",
            newPwdRequired: "নতুন পাসওয়ার্ড প্রয়োজন",
            newPwd5Chars: "নতুন পাসওয়ার্ড অবশ্যই 5 অক্ষরের বেশি হতে হবে",
            confirmPwdRequired: "পাসওয়ার্ড নিশ্চিত করুন প্রয়োজন বোধ করা হয়",
            confirmPwd5chars: "নিশ্চিত করুন পাসওয়ার্ড 5 অক্ষরের বেশি হতে হবে",
            confirmPwdNotMatched: "কনফার্ম পাসওয়ার্ড অবশ্যই নতুন পাসওয়ার্ডের সাথে মিলবে।",
            copied: "ক্লিপবোর্ডে অনুলিপি করা হয়েছে:",
            emailRequired: "ইমেল খালি হতে পারে না",
            emailInvalid: "ইমেল অবৈধ৷",
            captchaRequired: "ক্যাপচা প্রয়োজন",
            captchaInvalid: "ক্যাপচা অবৈধ৷",
            minimum4LetterRequired: "ন্যূনতম 4টি ক্যারেটার প্রয়োজন৷",
            userNameRequired: "ব্যবহারকারীর নাম প্রয়োজন এবং খালি হতে পারে না৷",
            pwdRequired: "পাসওয়ার্ড প্রয়োজন এবং খালি করা যাবে না",
            plsLogin: "অবিরত লগ ইন করুন",
            blockedFrGame: "আপনাকে এই গেমটি খেলা থেকে সাসপেন্ড/ব্লক করা হয়েছে। আরও তথ্যের জন্য CS এর সাথে যোগাযোগ করুন।",
            gameMaintenance: "খেলা রক্ষণাবেক্ষণ অধীনে আছে.",
            gameComingSoon: "খেলা শীঘ্রই আসছে",
            pageComingSoon: "পাতাটি শীঘ্রই আসছে",
            gamePromoBlock: "আপনি যে গেমটিতে ক্লিক করেছেন সেটি বর্তমান প্রচার বিভাগের অন্তর্গত নয়৷ প্রচার শেষ হওয়ার পরে, আপনি খেলায় ফিরে আসতে পারেন",
            forgotPwdEmail: "আপনার ইমেল চেক করুন, পাসওয়ার্ড রিসেট ইমেল পাঠানো হয়েছে. যদি আপনি এটি ইনবক্সে খুঁজে না পান, অনুগ্রহ করে স্প্যাম/জাঙ্ক বক্সে চেক করুন৷",
            pulsaRefNoPlaceholder: "প্রেরকের মোবাইল নম্বর বা সিরিয়াল নম্বর পূরণ করুন",
            transferSuccess: "স্থানান্তর সফল",
            accountFullNameRequired: "অ্যাকাউন্টের পুরো নাম প্রয়োজন",
            fullNamesConsistOfAlphabets: "সম্পূর্ণ নাম শুধুমাত্র বর্ণমালা এবং একক স্পেস নিয়ে গঠিত হতে পারে, একাধিক পরপর স্পেস অনুমোদিত নয়",
            minimumThreeCharatersRequired: "ন্যূনতম ৩টি ক্যারেটার প্রয়োজন",
            bankRequired: "ব্যাংক ডিপারলুকান",
            bankAccountNumberRequired: "ব্যাঙ্ক অ্যাকাউন্ট নম্বর প্রয়োজন",
            bankAccountPattern: "ব্যাঙ্ক অ্যাকাউন্ট নম্বরে শুধুমাত্র সংখ্যা থাকতে পারে",
            minimum6LetterRequired: "ন্যূনতম ৬টি ক্যারেটার প্রয়োজন",
            minimumEightLetterRequired: "ন্যূনতম ৮টি ক্যারেটার প্রয়োজন",
            minimum13LetterRequired: "সর্বনিম্ন 13টি ক্যারেটার প্রয়োজন৷",
            minimum10LetterRequired: "ন্যূনতম 10টি ক্যারেটার প্রয়োজন৷",
            minimum12LetterRequired: "ন্যূনতম 12টি ক্যারেটার প্রয়োজন৷",
            minimum15LetterRequired: "ন্যূনতম 15টি ক্যারেটার প্রয়োজন৷",
            maximumTwentycharaters: "সর্বাধিক 20টি ক্যারেটার",
            bankAccountNamesNotAvailable: "ব্যাঙ্ক অ্যাকাউন্টের নাম পাওয়া যাচ্ছে না",
            success: "সফলতা",
            pCodeConfirm: "আপনার প্রচার কোড এখনও নেই আপনার প্রচার কোড এখনও নিশ্চিত করা হয়নি. আপনি কি নিশ্চিত আপনি এগিয়ে যেতে চান? আপনি কি নিশ্চিত আপনি এগিয়ে যেতে চান?",
            offlineBank: "ব্যাঙ্ক বর্তমানে অফলাইনে আছে, আমরা ব্যাঙ্ক অনলাইনের পরে আপনার লেনদেন প্রক্রিয়া করব। আপনি কি নিশ্চিত আপনি এগিয়ে যেতে চান?",
            confirmDeliveryAddress: "নিশ্চিত করার পরে ঠিকানাটি আবার পরিবর্তন করতে পারবেন না। আপনি কি নিশ্চিত আপনি এগিয়ে যেতে চান?",
            walletTranserSuccess: "সফলভাবে গেমে স্থানান্তরিত হয়েছে",
            fullNamesConsistAlphabets: "সম্পূর্ণ নাম শুধুমাত্র বর্ণমালা নিয়ে গঠিত হতে পারে",
            mobileNumberRequired: "মোবাইল নম্বর প্রয়োজন",
            mobileNumberNumbersOnly: "মোবাইল নম্বরে শুধুমাত্র সংখ্যা থাকতে হবে",
            mobileNumberNotAvailable: "মোবাইল নম্বর পাওয়া যাচ্ছে না",
            more: "আরও",
            minimumOneLetterRequired: "ন্যূনতম ১টি ক্যারেটার প্রয়োজন",
            maximumFourcharaters: "সর্বোচ্চ 4টি ক্যারেটার মাত্র",
            agencyCodeRequired: "এজেন্সি কোড প্রয়োজন",
            agencyCodePattern: "এজেন্সি কোড শুধুমাত্র সংখ্যা গঠিত হতে পারে",
            balanceLimit: "এজেন্সি কোড শুধুমাত্র সংখ্যা গঠিত হতে পারে",
            spinSuccess: "অভিনন্দন, আপনি জিতেছেন",
            fa2Activated: "অভিনন্দন! আপনার দুই-স্তর যাচাইকরণ সক্রিয় করা হয়েছে।",
            fa2Deactivated: "আপনার দুই-স্তর যাচাইকরণ নিষ্ক্রিয় করা হয়েছে।",
            ifscCodeRequired: "IFSC কোড প্রয়োজন",
            ifscCodePattern: "IFSC কোডে কমপক্ষে একটি বর্ণমালা এবং সংখ্যা থাকতে হবে",
            minimum11charaters: "ন্যূনতম 11টি অক্ষর প্রয়োজন৷",
            maximum11charaters: "সর্বাধিক 11টি অক্ষর"
        };
        break;
    default:
        window.transMsgs = {
            cfTimeout: "Connection time out , Please refresh and try again",
            sessionExpired: "Please Login to proceed. Your session may have expired.",
            cfChallenge: "System needs to review the security of your connection before proceeding. Please refresh the page",
            transFailedAmt0: "Transfer ALL to wallet failed. Transfer Amount must be more than 0",
            currentPwdRequired: "Current Password is required",
            currentPwd5Chars: "Current Password must be more than 5 characters",
            newPwdRequired: "New Password is required",
            newPwd5Chars: "New Password must be more than 5 characters",
            confirmPwdRequired: "Confirm Password is required",
            confirmPwd5chars: "Confirm Password must be more than 5 characters",
            confirmPwdNotMatched: "Confirm Password must match the New Password.",
            copied: "Copied to clipboard: ",
            emailRequired: "Email can't be empty",
            emailInvalid: "Email invalid",
            captchaRequired: "Captcha Required",
            captchaInvalid: "Captcha invalid",
            minimum4LetterRequired: "A minimum of 4 charaters are required",
            userNameRequired: "Username  is required and can't be empty",
            pwdRequired: "Password is required and can't be empty",
            plsLogin: "Please login to continue",
            blockedFrGame: "You are suspended / blocked from playing this game. Please contact CS for more info.",
            gameMaintenance: "Game is under maintenance.",
            gameComingSoon: "Game is coming soon",
            pageComingSoon: "The Page will coming soon",
            gamePromoBlock: "The game you clicked does not belong to the current promotion category. After the promotion is finished, you can return to playing",
            forgotPwdEmail: "Please check your email, the reset password email has been sent. If you did not find it in inbox, kindly check in the spam/junk box.",
            pulsaRefNoPlaceholder: "Fill in Sender's Mobile Number or Serial Number",
            transferSuccess: "Transfer success",
            accountFullNameRequired: "Account Full Name Required",
            fullNamesConsistOfAlphabets: "Full names can only consist of alphabets and single spaces, multiple consecutive spaces not allowed",
            minimumThreeCharatersRequired: "A minimum of 3 charaters is required",
            bankRequired: "Bank Diperlukan",
            bankAccountNumberRequired: "Bank account number Required",
            bankAccountPattern: "Bank account numbers can only consist of numbers",
            minimum6LetterRequired: "A minimum of 6 charaters are required",
            minimumEightLetterRequired: "A minimum of 8 charaters are required",
            minimum13LetterRequired: "A minimum of 13 charaters are required",
            minimum10LetterRequired: "A minimum of 10 charaters are required",
            minimum12LetterRequired: "A minimum of 12 charaters are required",
            minimum15LetterRequired: "A minimum of 15 charaters are required",
            maximumTwentycharaters: "Maximum of 20 charaters only",
            bankAccountNamesNotAvailable: "Bank account number is not available",
            success: "Success",
            pCodeConfirm: "Your promo code is not yet Your promo code is not yet confirmed. Are you sure you would like to proceed?. Are you sure you would like to proceed?",
            offlineBank: "BANK IS CURRENTLY OFFLINE , we will process your transaction after Bank Online. Are you sure you would like to proceed?",
            confirmDeliveryAddress: "After confirm the address can't make change again. Are you sure you would like to proceed?",
            walletTranserSuccess: "successfully transferred to the game",
            fullNamesConsistAlphabets: "Full names can only consist of alphabets",
            mobileNumberRequired: "Mobile number Required",
            mobileNumberNumbersOnly: "Mobile numbers need to consist of numbers only",
            mobileNumberNotAvailable: "Mobile number not available",
            more: "MORE",
            minimumOneLetterRequired: "A minimum of 1 charaters are required",
            maximumFourcharaters: "Maximum of 4 charaters only",
            agencyCodeRequired: "Agency Code Required",
            agencyCodePattern: "Agency Code can only consist of numbers",
            balanceLimit: "Are your sure you wish to set balance limit?",
            spinSuccess: "Congratulations, you've won",
            maximum6charaters: "Maximum of 6 charaters only",
            bsbCodeRequired: "BSB number Required",
            bsbCodePattern: "BSB number can only consist of numbers",
            fa2Activated: "Congrats! Your 2FA is Activated.",
            fa2Deactivated: "Your 2FA is De-Activated",
            ifscCodeRequired: "IFSC Code required",
            ifscCodePattern: "IFSC Code must contain at least one alphabet and number",
            minimum11charaters: "A minimum of 11 charaters are required",
            maximum11charaters: "Maximum of 11 charaters only"
        }
    }
}
, function(e, t) {
    $((function() {
        $('[data-toggle="tooltip"]').tooltip()
    }
    )),
    $((function() {
        $('[data-toggle="popover"]').popover()
    }
    )),
    window.loadScript = function(e, t) {
        var a = $.Deferred();
        return window.scriptsLoadState[e] ? (setTimeout((function() {
            a.resolve(!0)
        }
        ), 10),
        a) : ($.getScript(t).done((function() {
            window.scriptsLoadState[e] = !0,
            a.resolve(!0)
        }
        )).fail((function() {
            a.reject("failed to load ".scriptUrl)
        }
        )),
        a)
    }
    ,
    $((function() {
        var e, t = (e = new RegExp("ctry" + "=[0-9a-zA-Z]*&?"),
        window.location.href.replace(e, ""));
        window.history.pushState({}, "", t)
    }
    ));
    var a = $(".slider-content .btn-box.active");
    if (a.length) {
        var n = a.position().left;
        n = n + $(".slider-content").scrollLeft() - $(".slider-content").width() / 2 + a.outerWidth() / 2,
        $(".slider-content").animate({
            scrollLeft: n
        }, "fast")
    }
    if (window.openLiveChat = function(e, t) {
        if ("undefined" != typeof LiveChatWidget && LiveChatWidget)
            try {
                LiveChatWidget.call("maximize"),
                t && LiveChatWidget.call("set_customer_email", t)
            } catch (e) {
                console.error(e)
            }
        else
            e ? window.popitup(e, "livechat") : alert("Live Chat URL not set")
    }
    ,
    window.change_lang = function(e) {
        var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "";
        return $.ajax({
            url: window.uriPrefix + "/change_lang/" + e + (t ? "/" + t : ""),
            type: "get",
            data: {},
            success: function(e) {
                location.reload()
            }
        }),
        !1
    }
    ,
    window.bindChgPassFormJS = function() {
        var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,20}$/
          , t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 8
          , a = transMsgs.minimumEightLetterRequired;
        String(e) == String(/^[A-Za-z\d!@#$%^&*()_+]{6,20}$/) && (t = 6,
        a = transMsgs.minimum6LetterRequired),
        String(e) == String(/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d!@#$%^&*()_+]{8,20}$/) && (t = 8,
        a = transMsgs.minimumEightLetterRequired),
        $("#chgPwdForm").validate({
            rules: {
                currentPwd: {
                    required: !0,
                    minlength: 6
                },
                newPwd: {
                    required: !0,
                    minlength: t,
                    maxlength: 20,
                    pattern: e
                },
                confirmPwd: {
                    required: !0,
                    minlength: t,
                    equalTo: "#newPwd"
                }
            },
            messages: {
                currentPwd: {
                    required: transMsgs.currentPwdRequired,
                    minlength: transMsgs.currentPwd5Chars
                },
                newPwd: {
                    required: transMsgs.newPwdRequired,
                    minlength: a,
                    maxlength: transMsgs.maximumTwentycharaters
                },
                confirmPwd: {
                    required: transMsgs.confirmPwdRequired,
                    minlength: a,
                    maxlength: transMsgs.maximumTwentycharaters,
                    equalTo: transMsgs.confirmPwdNotMatched
                }
            },
            errorElement: "em",
            errorPlacement: function(e, t) {
                e.addClass("help-block"),
                t.addClass("has-feedback"),
                "checkbox" === t.prop("type") ? e.insertAfter(t.parent("label")) : e.insertAfter(t),
                t.next("i:not(.toggle-password)")[0] || $("<i class='icon-cancel form-control-feedback absolute'></i>").insertAfter(t)
            },
            success: function(e, t) {
                $(t).next("i:not(.toggle-password)")[0] || $("<i class='icon-checkmark  form-control-feedback absolute'></i>").insertAfter($(t))
            },
            highlight: function(e, t, a) {
                $(e).addClass("has-error").removeClass("has-success"),
                $(e).next("i:not(.toggle-password)").addClass("icon-cancel").removeClass("icon-checkmark")
            },
            unhighlight: function(e, t, a) {
                $(e).addClass("has-success").removeClass("has-error"),
                $(e).next("i:not(.toggle-password)").addClass("icon-checkmark").removeClass("icon-cancel")
            },
            submitHandler: function(e) {
                $("#chgPwdForm button[type=submit]").prop("disabled", !0),
                $(".message--chg-pass").hide();
                var t = $(e).attr("action")
                  , a = $(e).serialize();
                json_post(t, a).done((function(t) {
                    $(".message--chg-pass").show(),
                    $(e).each((function() {
                        this.reset()
                    }
                    )),
                    $("#chgPwdForm button[type=submit]").prop("disabled", !1)
                }
                )).fail((function() {
                    $("#chgPwdForm button[type=submit]").prop("disabled", !1)
                }
                ))
            }
        })
    }
    ,
    $(document).on("click", ".toggle-password", (function() {
        $(this).toggleClass("icon-eye icon-eye-slash");
        var e = $($(this).attr("input_id"));
        return "password" === e.attr("type") ? e.attr("type", "text") : e.attr("type", "password"),
        !1
    }
    )),
    $(document).on("click", "#btn-copy--profile-edit", (function() {
        var e = document.getElementById("elCopyText");
        e.focus(),
        e.select();
        try {
            document.execCommand("copy");
            alert(transMsgs.copied + e.value)
        } catch (e) {}
        return !1
    }
    )),
    $(document).on("click", ".btn-copy", (function() {
        var e = $(this).data("sel")
          , t = document.getElementById(e);
        if (navigator.userAgent.match(/ipad|ipod|iphone/i)) {
            try {
                navigator.clipboard.writeText(t.value),
                alert(transMsgs.copied + t.value)
            } catch (e) {}
            return !1
        }
        t.focus(),
        t.select();
        try {
            document.execCommand("copy");
            alert(transMsgs.copied + t.value)
        } catch (e) {}
        return !1
    }
    )),
    $(document).on("change", "#isOnSecondPin", (function(e) {
        var t = $("#isOnSecondPin").is(":checked") ? 1 : 0
          , a = {
            is_use_second_pin: t
        };
        console.log(a),
        json_post(window.uriPrefix + "/ajaxUpdate2ndPinFlag", a, window.showLoadingImgFn, window.removeLoadingImgFn).done((function(e) {
            $("#btn-reset2ndpin").toggle(1 == t)
        }
        ))
    }
    )),
    $(document).on("change", "#subscribeEmail", (function(e) {
        var t = $("#subscribeEmail").is(":checked") ? 1 : 0
          , a = {
            is_email_subscription: t
        };
        console.log(a),
        json_post(window.uriPrefix + "/ajaxUpdateEmailSubscription", a, window.showLoadingImgFn, window.removeLoadingImgFn).done((function(e) {
            $("#is_email_subscription").toggle(1 == t)
        }
        ))
    }
    )),
    $(window).on("load", (function() {
        var e = $("#langSelect").attr("data-selectLang");
        $("#langSelect #" + e).addClass("active")
    }
    )),
    $(".footer-body").length) {
        $(document).height();
        $("#collapsible-footer").click((function(e) {
            return $(".mobile .footer-title .i-collapse").toggleClass("rotate"),
            $("#more-txt").toggleClass("hide"),
            $("#less-txt").toggleClass("hide"),
            e.preventDefault(),
            $(".footer-body").slideToggle().removeClass("hide"),
            $("html, body").animate({
                scrollTop: $("#collapsible-footer").offset().top
            }, 2e3),
            !1
        }
        ))
    }
    window.bindChgComplaintFormJS = function() {
        $("#complaint-form").validate({
            rules: {
                complaint_name: {
                    required: !0
                },
                complaint_subject: {
                    required: !0
                },
                complaint_email: {
                    required: !0,
                    email: !0
                },
                complaint_message: {
                    required: !0
                },
                captcha: {
                    required: !0,
                    minlength: 4,
                    maxlength: 4,
                    remote: {
                        url: "/check_complaintForm_captcha",
                        type: "post",
                        dataType: "json",
                        complete: function(e) {
                            "refreshCaptcha" == e.responseJSON && $(".btn-refresh-captcha").trigger("click")
                        }
                    }
                }
            },
            messages: {
                complaint_name: {
                    required: transMsgs.nameRequired
                },
                complaint_subject: {
                    required: transMsgs.subjectRequired
                },
                complaint_email: {
                    required: transMsgs.emailRequired,
                    email: transMsgs.emailRequired
                },
                complaint_message: {
                    required: transMsgs.messageRequired
                },
                captcha: {
                    required: transMsgs.captchaRequired,
                    remote: transMsgs.captchaRequired
                }
            },
            errorElement: "em",
            errorPlacement: function(e, t) {
                e.addClass("help-block"),
                t.addClass("has-feedback"),
                "checkbox" === t.prop("type") ? e.insertAfter(t.parent("label")) : e.insertAfter(t),
                t.next("i")[0] || $("<i class='icon-cancel form-control-feedback absolute'></i>").insertAfter(t)
            },
            success: function(e, t) {
                $(t).next("i")[0] || $("<i class='icon-checkmark  form-control-feedback absolute'></i>").insertAfter($(t))
            },
            highlight: function(e, t, a) {
                $(e).addClass("has-error").removeClass("has-success"),
                $(e).next("i").addClass("icon-cancel").removeClass("icon-checkmark")
            },
            unhighlight: function(e, t, a) {
                $(e).addClass("has-success").removeClass("has-error"),
                $(e).next("i").addClass("icon-checkmark").removeClass("icon-cancel")
            },
            submitHandler: function(e) {
                var t = $(e).attr("action")
                  , a = $(e).serialize();
                json_post(t, a).done((function(t) {
                    $(".message--chg-pass").show(),
                    $(e).each((function() {
                        this.reset()
                    }
                    )),
                    $("#complaint-form button[type=submit]").prop("disabled", !0),
                    (t.status = "s") ? ($(e).each((function() {
                        this.reset()
                    }
                    )),
                    $(e).validate().resetForm(),
                    sweetAlert(t.m, "success", transMsgs.success).then((function() {
                        location.reload()
                    }
                    ))) : sweetAlert(t.msg)
                }
                )).fail((function() {
                    $("#complaint-form button[type=submit]").prop("disabled", !1)
                }
                ))
            }
        }),
        $(".btn-refresh-captcha").on("click", (function(e) {
            e.preventDefault(),
            e.stopPropagation();
            var t = $(this).parent().find("img")
              , a = t.attr("data-url") + Date.now() + Math.floor(1e8 * Math.random());
            t.attr("src", a)
        }
        ))
    }
    ,
    $(".home-trans-outerwrapper").carousel({
        interval: 2e3
    }),
    $(".home-trans-outerwrapper .item").each((function() {
        var e = $(this).next();
        e.length || (e = $(this).siblings(":first")),
        e.children(":first-child").clone().appendTo($(this)),
        e.next().length > 0 ? e.next().children(":first-child").clone().appendTo($(this)) : $(this).siblings(":first").children(":first-child").clone().appendTo($(this))
    }
    )),
    $("#btn-copy-visible-code").click((function() {
        var e = document.getElementById("visible-code");
        e.select();
        try {
            document.execCommand("copy"),
            alert(transMsgs.copied + e.value)
        } catch (e) {}
        return !1
    }
    ))
}
, function(e, t) {
    function a() {
        return $(".btn-refresh-wallet").prop("disabled", !0),
        $(".bal-txt").text(""),
        $("#mainwallet_amount").val(""),
        $("#maxSliderApk").text(""),
        $(".bal-txt").addClass("loader"),
        json_get(window.uriPrefix + "/getBal").done((function(e) {
            $(".bal-txt").removeClass("loader"),
            $(".bal-txt").text(e.data),
            $("#mainwallet_amount").attr("value", e.data),
            $(".customwallet-wraper #min").val(e.data),
            $("#maxSlider").text(e.data),
            $("#mainwallet_amount").val(e.data),
            $("#maxSliderApk").text(e.data),
            mainwallet = $("#mainwallet_amount").val(),
            $(".btn-refresh-wallet").prop("disabled", !1)
        }
        )).fail((function() {
            $(".bal-txt").removeClass("loader"),
            $(".btn-refresh-wallet").prop("disabled", !1)
        }
        )),
        !1
    }
    $(document).on("click", ".btn-refresh-wallet", (function() {
        var e = this;
        return $(this).prop("disabled", !0),
        $(".bal-txt").text(""),
        $("#mainwallet_amount").val(""),
        $("#maxSliderApk").text(""),
        $(".bal-txt").addClass("loader"),
        json_get(window.uriPrefix + "/getBal").done((function(t) {
            $(".bal-txt").removeClass("loader"),
            $(".bal-txt").text(window.currencyCode + " " + t.data),
            $("#mainwallet_amount").attr("value", t.data),
            $("#mainwallet_amount").val(t.data),
            $("#maxSliderApk").text(t.data),
            mainwallet = $("#mainwallet_amount").val(),
            $(e).prop("disabled", !1)
        }
        )).fail((function() {
            $(".bal-txt").removeClass("loader"),
            $(e).prop("disabled", !1)
        }
        )),
        !1
    }
    )),
    $(document).on("click", ".btn-refresh-wallet-ref", (function() {
        var e = this;
        return $(this).prop("disabled", !0),
        $(".bal-ref-txt").text(""),
        $(".bal-ref-txt").addClass("loader"),
        json_get(window.uriPrefix + "/getRefWalletBal").done((function(t) {
            $(".bal-ref-txt").removeClass("loader"),
            $(".bal-ref-txt").text(window.currencyCode + " " + t.data),
            $(e).prop("disabled", !1)
        }
        )).fail((function() {
            $(".bal-ref-txt").removeClass("loader"),
            $(e).prop("disabled", !1)
        }
        )),
        !1
    }
    )),
    $(document).on("click", ".btn-refresh-betswiz", (function(e) {
        return e.isSys || $("#other-game-bals button").prop("disabled", !0),
        $(".bal-betswiz").text(""),
        json_get(window.uriPrefix + "/ajaxBetswizBal").done((function(e) {
            $(".bal-betswiz").text(window.currencyCode + " " + e.data),
            $("#other-game-bals button").prop("disabled", !1)
        }
        )).fail((function() {
            $("#other-game-bals button").prop("disabled", !1)
        }
        )),
        !1
    }
    )),
    $(document).on("click", ".btn-refresh-9wicket", (function(e) {
        return e.isSys || $("#other-game-bals button").prop("disabled", !0),
        $(".bal-9wicket").text(""),
        json_get(window.uriPrefix + "/ajax9WicketBal").done((function(e) {
            $(".bal-9wicket").text(window.currencyCode + " " + e.data),
            $("#other-game-bals button").prop("disabled", !1)
        }
        )).fail((function() {
            $("#other-game-bals button").prop("disabled", !1)
        }
        )),
        !1
    }
    )),
    $(document).on("click", ".btn-refresh-IDN", (function(e) {
        return e.isSys || $("#other-game-bals button").prop("disabled", !0),
        $(".bal-IDN").text(""),
        json_get(window.uriPrefix + "/ajaxIDNBal").done((function(e) {
            $(".bal-IDN").text(window.currencyCode + " " + e.data),
            $("#other-game-bals button").prop("disabled", !1)
        }
        )).fail((function() {
            $("#other-game-bals button").prop("disabled", !1)
        }
        )),
        !1
    }
    )),
    $(document).on("click", ".btn-refresh-mega888", (function(e) {
        return e.isSys || $("#other-game-bals button").prop("disabled", !0),
        $(".bal-mega888").text(""),
        json_get(window.uriPrefix + "/ajaxMega888Bal").done((function(e) {
            $(".bal-mega888").text(window.currencyCode + " " + e.data),
            $("#other-game-bals button").prop("disabled", !1)
        }
        )).fail((function() {
            $("#other-game-bals button").prop("disabled", !1)
        }
        )),
        !1
    }
    )),
    $(document).on("click", ".btn-refresh-CMD", (function(e) {
        return e.isSys || $("#other-game-bals button").prop("disabled", !0),
        $(".bal-CMD").text(""),
        json_get(window.uriPrefix + "/ajaxCMDBal").done((function(e) {
            $(".bal-CMD").text(e.data),
            $("#other-game-bals button").prop("disabled", !1)
        }
        )).fail((function() {
            $("#other-game-bals button").prop("disabled", !1)
        }
        )),
        !1
    }
    )),
    $(document).on("click", ".btn-refresh-PT", (function(e) {
        return e.isSys || $("#other-game-bals button").prop("disabled", !0),
        $(".bal-PT").text(""),
        json_get(window.uriPrefix + "/ajaxPTBal").done((function(e) {
            $(".bal-PT").text(e.data),
            $("#other-game-bals button").prop("disabled", !1)
        }
        )).fail((function() {
            $("#other-game-bals button").prop("disabled", !1)
        }
        )),
        !1
    }
    )),
    $(document).on("click", ".btn-refresh-918kiss", (function(e) {
        return e.isSys || $("#other-game-bals button").prop("disabled", !0),
        $(".bal-918kiss").text(""),
        json_get(window.uriPrefix + "/ajax918kissBal").done((function(e) {
            $(".bal-918kiss").text(e.data),
            $("#other-game-bals button").prop("disabled", !1)
        }
        )).fail((function() {
            $("#other-game-bals button").prop("disabled", !1)
        }
        )),
        !1
    }
    )),
    $(document).on("click", ".btn-refresh-pussy888", (function(e) {
        return e.isSys || $("#other-game-bals button").prop("disabled", !0),
        $(".bal-918kiss").text(""),
        json_get(window.uriPrefix + "/ajaxPussy888Bal").done((function(e) {
            $(".bal-pussy888").text(e.data),
            $("#other-game-bals button").prop("disabled", !1)
        }
        )).fail((function() {
            $("#other-game-bals button").prop("disabled", !1)
        }
        )),
        !1
    }
    )),
    $(document).on("click", ".btn-wd-all", (function() {
        return json_post(window.uriPrefix + "/ajaxBetswizAnd9WicketTran").done((function(e) {
            return a(),
            sweetAlert(transMsgs.transferSuccess, "success", "Success")
        }
        )).fail((function() {
            return !1
        }
        )),
        !1
    }
    )),
    $(document).on("click", ".btn-tran-betswiz", (function() {
        $("#other-game-bals button").prop("disabled", !0);
        var e = $(".bal-betswiz").text();
        if (0 == (e = window.convertToNumber(e)))
            return sweetAlert(transMsgs.transFailedAmt0);
        var t = {
            amt: e
        };
        return $(".bal-betswiz").text(""),
        json_post(window.uriPrefix + "/ajaxBetswizTran", t).done((function(e) {
            return $(".bal-betswiz").text(window.currencyCode + " " + e.data),
            $("#other-game-bals button").prop("disabled", !1),
            a(),
            sweetAlert(transMsgs.transferSuccess, "success", "Success")
        }
        )).fail((function() {
            $("#other-game-bals button").prop("disabled", !1)
        }
        )),
        !1
    }
    )),
    $(document).on("click", ".btn-tran-9wickets", (function() {
        $("#other-game-bals button").prop("disabled", !0);
        var e = $(".bal-9wicket").text();
        if (0 == (e = window.convertToNumber(e)))
            return sweetAlert(transMsgs.transFailedAmt0);
        var t = {
            amt: e
        };
        return $(".bal-9wicket").text(""),
        json_post(window.uriPrefix + "/ajax9WicketTran", t).done((function(e) {
            return $(".bal-9wicket").text(window.currencyCode + " " + e.data),
            $("#other-game-bals button").prop("disabled", !1),
            a(),
            sweetAlert(transMsgs.transferSuccess, "success", "Success")
        }
        )).fail((function() {
            $("#other-game-bals button").prop("disabled", !1)
        }
        )),
        !1
    }
    )),
    $(document).on("click", ".btn-tran-mega888", (function() {
        $("#other-game-bals button").prop("disabled", !0);
        var e = $(".bal-mega888").text();
        if (0 == (e = window.convertToNumber(e)))
            return sweetAlert(transMsgs.transFailedAmt0);
        var t = {
            amt: e
        };
        return $(".bal-mega888").text(""),
        json_post(window.uriPrefix + "/ajaxMega888Tran", t).done((function(e) {
            return $(".bal-mega888").text(window.currencyCode + " " + e.data),
            $("#other-game-bals button").prop("disabled", !1),
            a(),
            sweetAlert(transMsgs.transferSuccess, "success", "Success")
        }
        )).fail((function() {
            $("#other-game-bals button").prop("disabled", !1)
        }
        )),
        !1
    }
    )),
    $(document).on("click", ".btn-tran-IDN", (function() {
        $("#other-game-bals button").prop("disabled", !0);
        var e = $(".bal-IDN").text();
        if (0 == (e = window.convertToNumber(e)))
            return sweetAlert(transMsgs.transFailedAmt0);
        var t = {
            amt: e
        };
        return $(".bal-IDN").text(""),
        json_post(window.uriPrefix + "/ajaxIDNTran", t).done((function(e) {
            return $(".bal-IDN").text(window.currencyCode + " " + e.data),
            $("#other-game-bals button").prop("disabled", !1),
            a(),
            sweetAlert(transMsgs.transferSuccess, "success", "Success")
        }
        )).fail((function() {
            $("#other-game-bals button").prop("disabled", !1)
        }
        )),
        !1
    }
    )),
    $(document).on("click", ".btn-tran-CMD", (function() {
        $("#other-game-bals button").prop("disabled", !0);
        var e = $(".bal-CMD").text();
        if (0 == (e = window.convertToNumber(e)))
            return sweetAlert(transMsgs.transFailedAmt0);
        var t = {
            amt: e
        };
        return $(".bal-CMD").text(""),
        json_post(window.uriPrefix + "/ajaxCMDTran", t).done((function(e) {
            return $(".bal-CMD").text(e.data),
            $("#other-game-bals button").prop("disabled", !1),
            a(),
            sweetAlert(transMsgs.transferSuccess, "success", "Success")
        }
        )).fail((function() {
            $("#other-game-bals button").prop("disabled", !1)
        }
        )),
        !1
    }
    )),
    $(document).on("click", ".btn-tran-PT", (function() {
        $("#other-game-bals button").prop("disabled", !0);
        var e = $(".bal-PT").text();
        if (0 == (e = window.convertToNumber(e)))
            return sweetAlert(transMsgs.transFailedAmt0);
        var t = {
            amt: e
        };
        return $(".bal-PT").text(""),
        json_post(window.uriPrefix + "/ajaxPTTran", t).done((function(e) {
            return $(".bal-PT").text(e.data),
            $("#other-game-bals button").prop("disabled", !1),
            a(),
            sweetAlert(transMsgs.transferSuccess, "success", "Success")
        }
        )).fail((function() {
            $("#other-game-bals button").prop("disabled", !1)
        }
        )),
        !1
    }
    )),
    $(document).on("click", ".btn-tran-918kiss", (function() {
        $("#other-game-bals button").prop("disabled", !0);
        var e = $(".bal-918kiss").text();
        if (0 == (e = window.convertToNumber(e)))
            return sweetAlert(transMsgs.transFailedAmt0);
        var t = {
            amt: e
        };
        return $(".bal-918kiss").text(""),
        json_post(window.uriPrefix + "/ajax918kissTran", t).done((function(e) {
            return $(".game-bals .btn-refresh-918kiss").trigger("click"),
            $("#other-game-bals button").prop("disabled", !1),
            a(),
            sweetAlert(transMsgs.transferSuccess, "success", "Success")
        }
        )).fail((function() {
            $("#other-game-bals button").prop("disabled", !1)
        }
        )),
        !1
    }
    )),
    $(document).on("click", ".btn-tran-pussy888", (function() {
        $("#other-game-bals button").prop("disabled", !0);
        var e = $(".bal-pussy888").text();
        if (0 == (e = window.convertToNumber(e)))
            return sweetAlert(transMsgs.transFailedAmt0);
        var t = {
            amt: e
        };
        return $(".bal-pussy888").text(""),
        json_post(window.uriPrefix + "/ajaxPussy888Tran", t).done((function(e) {
            return $(".game-bals .btn-refresh-pussy888").trigger("click"),
            $("#other-game-bals button").prop("disabled", !1),
            a(),
            sweetAlert(transMsgs.transferSuccess, "success", "Success")
        }
        )).fail((function() {
            $("#other-game-bals button").prop("disabled", !1)
        }
        )),
        !1
    }
    )),
    window.ajaxLoginForm = function() {
        json_get(window.uriPrefix + "/ajaxCSRFToken", showLoadingImgFn, removeLoadingImgFn).done((function(e) {
            $("#sec_token--loginForm").val(e.data)
        }
        ))
    }
    ,
    window.update_memo_status = function(e, t, a) {
        var n = {
            type: e,
            msg_id: t,
            mode: a
        };
        json_post(window.uriPrefix + "/update-memo-status", n).done((function(e) {
            Swal.fire("Success", e.m, "success").then((function() {
                location.reload()
            }
            ))
        }
        )).fail((function() {
            return !1
        }
        ))
    }
    ,
    window.ajaxResetPwdForm = function() {
        json_get(window.uriPrefix + "/ajaxCSRFToken", showLoadingImgFn, removeLoadingImgFn).done((function(e) {
            $("#sec_token--resetPwdForm").val(e.data)
        }
        ))
    }
    ,
    window.getAllGameBal = function() {
        window.isAuth && ($(".game-bals .btn-refresh-PT").click(),
        $(".btn-refresh-PT").click(),
        $("#other-game-bals button").prop("disabled", !1),
        $(".game-bals .btn-refresh-CMD").click(),
        $(".btn-refresh-CMD").click(),
        $("#other-game-bals button").prop("disabled", !1),
        "IDR" == window.currencyCode && $(" .btn-refresh-IDN").click(),
        "INR" != window.currencyCode && "BDT" != window.currencyCode && "NPR" != window.currencyCode || ($(".btn-refresh-9wicket").trigger("click"),
        setTimeout((function() {
            $(".btn-refresh-betswiz").trigger("click")
        }
        ), 2e3)),
        "MYR" != window.currencyCode && "THB" != window.currencyCode || ($(".btn-refresh-918kiss").click(),
        $("#other-game-bals button").prop("disabled", !1),
        $(".game-bals .btn-refresh-pussy888").click(),
        $(".btn-refresh-mega888").click()))
    }
    ,
    $(document).on("click", ".btn-notifications", (function() {
        return json_get(window.uriPrefix + "/api/ajaxGetNotifications", showLoadingImgFn, removeLoadingImgFn).done((function(e) {
            var t = "";
            $.each(e.data, (function(e, a) {
                t += "<li><p>" + a.created_at + "</p><p>" + a.description + "</p>"
            }
            )),
            $(".noti_list").html(t)
        }
        )).fail((function() {
            return !1
        }
        )),
        !1
    }
    )),
    window.check_notification_status = function() {
        json_get(window.uriPrefix + "/api/ajaxCheckMsgs", null, null).done((function(e) {
            e.data;
            if (!e.data)
                return !1;
            var t = e.data.inboxCnt;
            e.data.notiCnt;
            return t > 0 ? ($(".mail_icon, .txt_mail_cnt").text(t),
            $(".mail_icon").toggle(!0)) : ($(".mail_icon, .txt_mail_cnt").toggle(!1),
            $(".mail_icon").text(0)),
            !0
        }
        )).fail((function() {
            return !1
        }
        ))
    }
    ,
    $(document).ready((function() {
        window.isAuth && "BDT" == window.currencyCode && json_get(window.uriPrefix + "/getCurrTo").done((function(e) {
            $(".curr_to_bal").removeClass("loader"),
            $(".curr_to_bal").text(window.currencyCode + " " + e.curr_to)
        }
        )).fail((function() {
            $(".curr_to_bal").removeClass("loader")
        }
        ));
        var e, t, n, r, i, o = 5;
        "THB" == window.currencyCode && (o = 20),
        "IDR" == window.currencyCode && (o = 5e3),
        window.tw_information = function() {
            var a = loadScript("jqueryUI", "https://cdn.sitestatic.net/assets/jquery/jquery-ui.min.js");
            $.when(a).done((function() {
                var a = loadScript("jqueryUITouch", "https://cdn.sitestatic.net/assets/jquery/jquery.ui.touch-punch.min.js");
                $.when(a).done((function() {
                    n = $("#mainwallet_amount").val(),
                    parseInt(n),
                    e = n.replace(/,/g, ""),
                    t = parseInt(e),
                    r = (r = $("#transfer_amount").val()).replace(/,/g, ""),
                    i = parseInt(r),
                    parseInt(i);
                    $("#slider").slider({
                        value: 0,
                        orientation: "horizontal",
                        range: "min",
                        min: 0,
                        max: t,
                        animate: !0,
                        step: o,
                        change: function(t, a) {
                            $("#transfer_amount").val(a.value.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",")),
                            $("#mainwallet_amount").val((e - a.value).toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ","))
                        }
                    });
                    $(".ui-slider-horizontal").draggable()
                }
                ))
            }
            ))
        }
        ,
        $("#tw_increase_btn").click((function() {
            var e = $("#slider").slider("option", "value")
              , t = $("#mainwallet_amount").val();
            t = t.replace(/,/g, ""),
            (t = parseInt(t)) >= o && ($("#slider").slider("value", e + o),
            $("#transfer_amount").val((e + o).toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",")))
        }
        )),
        $("#tw_decrease_btn").click((function() {
            var e = $("#slider").slider("option", "value");
            currentTranAmt = $("#transfer_amount").val(),
            currentTranAmt <= o ? $("#slider").slider("option", "value", 0) : ($("#slider").slider("value", e - o),
            $("#transfer_amount").val((e - o).toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",")))
        }
        )),
        $("#slider").on("slide", (function(t, a) {
            $("#transfer_amount").val(a.value.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",")),
            $("#mainwallet_amount").val((e - a.value).toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ","));
            var n = ($("#transfer_amount").val() || "").replace(/\,/g, "");
            $("#transfer_amount").val(n)
        }
        )),
        $("#tw_transfer_form").validate({
            rules: {
                transfer_amount: {
                    required: !0
                }
            },
            messages: {
                new_password: {
                    required: "please enter the amount to transfer"
                }
            },
            errorElement: "em",
            errorPlacement: function(e, t) {
                e.addClass("help-block"),
                t.addClass("has-feedback"),
                "checkbox" === t.prop("type") ? e.insertAfter(t.parent("label")) : e.insertAfter(t),
                t.next("i")[0] || $("<i class='icon-cancel form-control-feedback absolute'></i>").insertAfter(t)
            },
            success: function(e, t) {
                $(t).next("i")[0] || $("<i class='icon-checkmark  form-control-feedback absolute'></i>").insertAfter($(t))
            },
            highlight: function(e, t, a) {
                $(e).addClass("has-error").removeClass("has-success"),
                $(e).next("i").addClass("icon-cancel").removeClass("icon-checkmark")
            },
            unhighlight: function(e, t, a) {
                $(e).addClass("has-success").removeClass("has-error"),
                $(e).next("i").addClass("icon-checkmark").removeClass("icon-cancel")
            },
            submitHandler: function(e, t) {
                $("input[type=submit]").prop("disabled", !0);
                var n = "#" + e.id;
                $(n + " input[type=submit]").prop("disabled", !0);
                var r = $(e).attr("action")
                  , i = $(e).serialize();
                return json_post(r, i).done((function(t) {
                    $(e).each((function() {
                        this.reset()
                    }
                    )),
                    $(e).validate().resetForm(),
                    "1" == t.status ? (a(),
                    $(n + " input[type=submit], .btn-primary").prop("disabled", !1),
                    sweetAlert(window.currencyCode + " " + window.commaSeparateNumber(t.amount) + " " + transMsgs.walletTranserSuccess, "success", "success").then((function() {
                        window.tw_information(),
                        $("#slider").slider("option", "value", 0),
                        window.open(launchurl, "_blank")
                    }
                    ))) : sweetAlert(t.msg, "error", "failed").then((function() {
                        $("#slider").slider("option", "value", 0)
                    }
                    ))
                }
                )).always((function() {
                    return $(n + " input[type=submit], .btn-primary").prop("disabled", !1),
                    !1
                }
                )),
                !1
            }
        })
    }
    ))
}
, function(e, t) {
    $(document).on("click", "#right-button", (function() {
        return event.preventDefault(),
        $(".slider-content").animate({
            scrollLeft: "+=300px"
        }, "fast"),
        !1
    }
    )),
    $(document).on("click", "#left-button", (function() {
        return event.preventDefault(),
        $(".slider-content").animate({
            scrollLeft: "-=300px"
        }, "fast"),
        !1
    }
    ))
}
, function(e, t) {
    var n;
    function r(e) {
        var t = $(e)
          , a = $(e).attr("data-url") + Date.now() + Math.floor(1e8 * Math.random());
        t.attr("src", a)
    }
    $(".message[_login-modal]").hide(),
    $("#pinForm").hide(),
    $("#resetPwdForm").hide(),
    $("#loginForm").validate({
        rules: {
            username: {
                required: !0
            },
            password: {
                required: !0
            },
            LoginCaptcha: {
                required: !0
            }
        },
        messages: {
            username: {
                required: transMsgs.userNameRequired
            },
            password: {
                required: transMsgs.pwdRequired
            },
            LoginCaptcha: {
                required: transMsgs.captchaRequired
            }
        },
        errorElement: "em",
        errorPlacement: function(e, t) {
            e.addClass("help-block"),
            t.addClass("has-feedback"),
            "checkbox" === t.prop("type") ? e.insertAfter(t.parent("label")) : e.insertAfter(t),
            t.next("i:not(.toggle-password)")[0] || $("<i class='icon-cancel form-control-feedback absolute'></i>").insertAfter(t)
        },
        success: function(e, t) {
            $(t).next("i:not(.toggle-password)")[0] || $("<i class='icon-checkmark  form-control-feedback absolute'></i>").insertAfter($(t))
        },
        highlight: function(e, t, a) {
            $(e).addClass("has-error").removeClass("has-success"),
            $(e).next("i:not(.toggle-password):not(.left)").addClass("icon-cancel").removeClass("icon-checkmark")
        },
        unhighlight: function(e, t, a) {
            $(e).addClass("has-success").removeClass("has-error"),
            $(e).next("i:not(.toggle-password):not(.left)").addClass("icon-checkmark").removeClass("icon-cancel")
        },
        submitHandler: function(e, t) {
            t.preventDefault();
            var a = "#" + e.id;
            $(a + " button[type=submit], .btn-refresh").prop("disabled", !0);
            var n = $(e).attr("action")
              , r = $(e).serialize();
            return $(a + " .message").hide(),
            json_post(n, r).done((function(e) {
                if ("validate-2fa" == e.action)
                    $("#pinForm").attr("action", "/" + e.action),
                    $("#infoText").hide(),
                    $("#fa2InfoText").show(),
                    $("#loginForm").slideUp(),
                    $("#resetPwdForm").hide(),
                    $("#pinForm").fadeIn();
                else {
                    if ("r" == e.s)
                        return $("#btn-close--login-modal").trigger("click"),
                        sweetAlert(e.m, "warning", "Warning", !0).then((function(e) {
                            location.href = window.uriPrefix + "/setup-pin"
                        }
                        )),
                        !1;
                    if ("s" !== e.s)
                        return $(a + " button[type=submit], .btn-refresh").prop("disabled", !1),
                        $(a + " .message").toggle(),
                        $(a + " .message").html(e.m),
                        "refreshCaptcha" == e.s && $("#loginfreshCaptcha").trigger("click"),
                        !1;
                    if (e.redirectUrl)
                        return location.href = window.uriPrefix + e.redirectUrl,
                        !1;
                    if ("no 2nd pin" == e.sp)
                        return window.location.href = window.uriPrefix + "/?isFirstLogin=1" + (e.qs ? e.qs : ""),
                        !1
                }
                $("#loginForm").slideUp(),
                $("#pinForm").fadeIn(),
                $("#footer--login-modal").hide()
            }
            )).fail((function() {
                return $(a + " button[type=submit], .btn-refresh").prop("disabled", !1),
                !1
            }
            )),
            !1
        }
    }),
    n = "#resetPwdForm",
    $(n).validate({
        rules: {
            email: {
                required: function() {
                    return "email" == $('input[name="comm_type"]:checked').val()
                },
                email: !0
            },
            mobile: {
                required: function() {
                    return "mobile" == $('input[name="comm_type"]:checked').val()
                },
                minlength: function(e) {
                    return $("#mobile").attr("minlength")
                },
                maxlength: function(e) {
                    return $("#mobile").attr("maxlength")
                },
                pattern: /^[0-9]+$/
            },
            forgotPwCaptchaimg: {
                required: !0,
                minlength: 4,
                maxlength: 4,
                remote: {
                    url: "/check_forgotPw_captcha",
                    type: "post",
                    dataType: "json",
                    complete: function(e) {
                        console.log(e),
                        e && "Invalid captcha" == e.responseJSON && $("#fogotrefreshCaptcha").trigger("click")
                    }
                }
            }
        },
        messages: {
            email: {
                required: transMsgs.emailRequired,
                email: transMsgs.emailInvalid
            },
            forgotPwCaptchaimg: {
                required: transMsgs.captchaRequired,
                remote: transMsgs.captchaInvalid,
                minlength: transMsgs.minimum4LetterRequired
            }
        },
        errorElement: "em",
        errorPlacement: function(e, t) {
            e.addClass("help-block"),
            t.addClass("has-feedback"),
            "checkbox" === t.prop("type") ? e.insertAfter(t.parent("label")) : e.insertAfter(t),
            t.next("i")[0] || $("<i class='icon-cancel form-control-feedback absolute'></i>").insertAfter(t)
        },
        success: function(e, t) {
            $(t).next("i")[0] || $("<i class='icon-checkmark  form-control-feedback absolute'></i>").insertAfter($(t))
        },
        highlight: function(e, t, a) {
            $(e).addClass("has-error").removeClass("has-success"),
            $(e).next("i").addClass("icon-cancel").removeClass("icon-checkmark")
        },
        unhighlight: function(e, t, a) {
            $(e).addClass("has-success").removeClass("has-error"),
            $(e).next("i").addClass("icon-checkmark").removeClass("icon-cancel")
        },
        submitHandler: function(e, t) {
            t.preventDefault(),
            $("button[type=submit]").prop("disabled", !0);
            var a = $(e).attr("action")
              , r = $(e).serialize();
            return $(n + " .alert.message").text("").hide(),
            $.post(a, r).done((function(e) {
                var t;
                $("button[type=submit]").prop("disabled", !1),
                $(n + " .alert.message").addClass("alert-success").removeClass("alert-danger").text(null !== (t = e.m) && void 0 !== t ? t : transMsgs.forgotPwdEmail).show()
            }
            )).fail((function(e, t, a) {
                $("button[type=submit]").prop("disabled", !1);
                var r = e.responseJSON ? e.responseJSON.message : a;
                return $(n + " .alert.message").removeClass("alert-success").addClass("alert-danger").text(r).show(),
                !1
            }
            )),
            !1
        }
    }),
    $(document).on("click", "#forgotPwd-btn--login-modal", (function(e) {
        e.preventDefault(),
        e.stopPropagation(),
        r("#forgotPwCaptchaimgpath"),
        $("#resetPwdForm").show(),
        $("#loginForm").hide()
    }
    )),
    $(document).on("click", "#btn-back--login-modal", (function(e) {
        return e.preventDefault(),
        e.stopPropagation(),
        $("#resetPwdForm").hide(),
        $("#loginForm").show(),
        !1
    }
    ));
    $("#loginfreshCaptcha").click((function(e) {
        e.preventDefault(),
        e.stopPropagation(),
        $("#LoginCaptcha").val("");
        var t = $("#loginCaptchaimg").attr("data-url") + Date.now() + Math.floor(1e8 * Math.random());
        $("#loginCaptchaimg").attr("src", t)
    }
    )),
    $("#fogotrefreshCaptcha").click((function(e) {
        e.preventDefault(),
        e.stopPropagation(),
        $("#forgotPwCaptchaimg").val(""),
        r("#forgotPwCaptchaimgpath")
    }
    )),
    $(document).on("submit", "#pinForm", (function(e) {
        e.preventDefault(),
        $("#" + this.id + " .btn-submit").prop("disabled", !0);
        var t = "#" + this.id;
        $(t + " .message").hide();
        var a = "";
        if ($(".pin-in-grp input").each((function() {
            a += this.value
        }
        )),
        a.length < 6)
            return $(t + " .btn-submit").prop("disabled", !1),
            $(t + " .message").show(),
            $(t + " .message").html("Pin is incomplete"),
            !1;
        var n = $(this).attr("action");
        return data = "/validate-2fa" == n ? {
            fa2_token: a
        } : $(this).serialize(),
        $.post(n, data).done((function(e) {
            if ("f" === e.s || "r" === e.s)
                return $(t + " .message").show(),
                $(t + " .message").html(e.m),
                "r" === e.s ? setTimeout((function() {
                    location.reload()
                }
                ), 2e3) : ($(".pincode").val(""),
                $(t + " .btn-submit").removeAttr("disabled")),
                !1;
            if ("resetup" == e.s)
                return $(t + " .message").show(),
                $(t + " .message").html(e.m),
                setTimeout((function() {
                    location.href = window.uriPrefix + "/setup-pin"
                }
                ), 2e3),
                !1;
            return window.location.href = window.uriPrefix + "/?isFirstLogin=1" + (e.qs ? e.qs : ""),
            !1
        }
        )).fail((function(e, a, n) {
            $(t + " .btn-submit").removeAttr("disabled");
            var r = e.responseJSON ? e.responseJSON.message : n;
            return sweetAlert(r),
            !1
        }
        )),
        !1
    }
    )),
    $(document).on("click", ".pinkey", (function() {
        var e = $(this).val();
        if ("Back" != e)
            return $(".pincode").each((function() {
                if (!$(this).val())
                    return $(this).val(e),
                    $(this).val().length == $(this).attr("maxlength") && $(this).nextAll("input:enabled:not([readonly])")[0] && $(this).nextAll("input:enabled:not([readonly])")[0].focus(),
                    !1
            }
            )),
            !1
    }
    )),
    $(document).on("click", "#back_bt", (function(e) {
        return e.preventDefault(),
        $($(".pincode:not([readonly])").get().reverse()).each((function() {
            if ($(this).val())
                return $(this).val(""),
                $(this).focus(),
                !1
        }
        )),
        !1
    }
    )),
    $(".pin-in-grp").keyup((function(e) {
        8 == e.keyCode ? function e(t) {
            a = $(t).prev(),
            $(a).is("[readonly]") ? e(a) : a.focus()
        }($(this).find(":focus")) : function e(t) {
            a = $(t).next(),
            $(a).is("[readonly]") ? e(a) : a.focus()
        }(e.target);
        return !1
    }
    )),
    $("#emailInput").hide(),
    $('input[name="comm_type"][value="mobile"]').prop("checked", !0),
    $(document).on("click", ".fpwContactMethod", (function() {
        var e = $(this).data("type");
        $("#mobileInput, #emailInput").hide(),
        "mobileOpt" == e ? ($("#mobileInput").show(),
        $('input[name="comm_type"][value="mobile"]').prop("checked", !0),
        $('input[name="comm_type"][value="email"]').prop("checked", !1)) : ($("#emailInput").show(),
        $('input[name="comm_type"][value="mobile"]').prop("checked", !1),
        $('input[name="comm_type"][value="email"]').prop("checked", !0))
    }
    )),
    $("#fpw-contact-country .js-opt").on("click", (function(e) {
        e.preventDefault(),
        e.stopPropagation();
        var t = $(this).data("value");
        $("input[name=contact_country]").val(t),
        $("#txt-contact-country").text("+" + t),
        $("#def-ctrycontact-opt").text($(this).text()).data("value", t),
        $(this).parents(".input-group-btn").removeClass("open")
    }
    ))
}
, function(e, t) {
    function a() {
        showLoadingImgFn();
        $.get("/load_check_in_popup", (function(e) {
            $(".reward-program-popup").html(e),
            $("#checkin-modal--layout").nifty("show"),
            removeLoadingImgFn()
        }
        )).fail((function(e, t, a) {
            removeLoadingImgFn(),
            sweetAlert(e.responseJSON ? e.responseJSON.message : e.responseText)
        }
        ))
    }
    function n() {
        showLoadingImgFn();
        $.get("/ajax_wheel_data", (function(e) {
            $("#spin-wheel-modal--layout").nifty("show"),
            function(e, t, a) {
                for (var n = 0, r = function() {
                    ++n == e.length && t(a)
                }, i = 0; i < e.length; i++) {
                    var s = new Image;
                    s.addEventListener("load", r),
                    s.src = e[i],
                    o.push(s)
                }
            }(i, s, e),
            removeLoadingImgFn()
        }
        )).fail((function(e, t, a) {
            removeLoadingImgFn(),
            sweetAlert(e.responseJSON ? e.responseJSON.message : e.responseText)
        }
        ))
    }
    function r(e, t, a) {
        setTimeout((function() {
            !function(e, t, a) {
                var n = "/load_claimed_reward_popup?message=" + e + "&extra_message=" + t + "&rewards_type=" + a;
                $.get(n, (function(e) {
                    $(".claimed-reward-popup").html(e),
                    $("#reward-modal--layout").nifty("show"),
                    $("#checkin-modal--layout").nifty("hide"),
                    $("#spin-wheel-modal--layout").nifty("hide")
                }
                )).fail((function(e, t, a) {
                    sweetAlert(e.responseJSON ? e.responseJSON.message : e.responseText)
                }
                ))
            }(e, t, a)
        }
        ), 3e3)
    }
    $(document).on("click", ".lucky-draw-head .mdc-tab-bar .mdc-tab", (function(e) {
        e.preventDefault(),
        e.stopPropagation(),
        $(".lucky-draw-head .mdc-tab-bar .mdc-tab").removeClass("active"),
        $(".lucky-draw-head .mdc-tab-bar .mdc-tab .mdc-tab-indicator").removeClass("active"),
        $(".lucky-draw-head .mdc-tab-bar .mdc-tab--active").removeClass("mdc-tab--active"),
        $(".lucky-draw-head .mdc-tab-bar .mdc-tab .mdc-tab-indicator--active").removeClass("mdc-tab-indicator--active"),
        $(this).addClass("active"),
        $(this).children(".mdc-tab-indicator").addClass("active");
        var t = $(this).data("tabname");
        switch ($(".lucky-draw-head .outlet .tab-pane").html(""),
        t) {
        default:
        case "prizes":
            xhr_get(window.uriPrefix + "/ajaxTicketInfo").done((function(e) {
                $(".lucky-draw-head .outlet .tab-pane").html(e)
            }
            ));
            break;
        case "how-to-win":
            xhr_get(window.uriPrefix + "/ajaxHowToWin").done((function(e) {
                $(".lucky-draw-head .outlet .tab-pane").html(e)
            }
            ));
            break;
        case "my-prizes":
            xhr_get(window.uriPrefix + "/ajaxPrize").done((function(e) {
                $(".lucky-draw-head .outlet .tab-pane").html(e)
            }
            ))
        }
        return !1
    }
    )),
    $(document).on("click", ".loyalty-mega-prize-head .mdc-tab-bar .mdc-tab", (function(e) {
        e.preventDefault(),
        e.stopPropagation(),
        $(".loyalty-mega-prize-head .mdc-tab-bar .mdc-tab").removeClass("active"),
        $(".loyalty-mega-prize-head .mdc-tab-bar .mdc-tab .mdc-tab-indicator").removeClass("active"),
        $(".loyalty-mega-prize-head .mdc-tab-bar .mdc-tab--active").removeClass("mdc-tab--active"),
        $(".loyalty-mega-prize-head .mdc-tab-bar .mdc-tab .mdc-tab-indicator--active").removeClass("mdc-tab-indicator--active"),
        $(this).addClass("active"),
        $(this).children(".mdc-tab-indicator").addClass("active");
        var t = $(this).data("tabname");
        switch ($(".loyalty-mega-prize-head .outlet .tab-pane").html(""),
        t) {
        default:
        case "prizes":
            xhr_get(window.uriPrefix + "/ajaxPrizes").done((function(e) {
                $(".loyalty-mega-prize-head .outlet .tab-pane").html(e)
            }
            ));
            break;
        case "redemption":
            xhr_get(window.uriPrefix + "/ajaxRedemption").done((function(e) {
                $(".loyalty-mega-prize-head .outlet .tab-pane").html(e)
            }
            ))
        }
        return !1
    }
    )),
    $(document).on("click", "#btn-close--checkin-modal", (function() {
        return $("#checkin-modal--layout").nifty("hide"),
        !1
    }
    )),
    $(document).on("click", "#btn-close--reward-modal", (function() {
        return $("#reward-modal--layout").nifty("hide"),
        !1
    }
    )),
    $(document).on("click", "#btn-close--spin-wheel-modal", (function() {
        return $("#spin-wheel-modal--layout").nifty("hide"),
        !1
    }
    )),
    $(document).on("click", "#btn-close--redeem-ticket-modal", (function() {
        return $("#redeem-ticket-modal--layout").nifty("hide"),
        !1
    }
    )),
    $(document).on("click", "#redeem-ticket-btn", (function() {
        return showLoadingImgFn(),
        $.get("/load_redeem_ticket_popup", (function(e) {
            $(".redeem-ticket-popup").html(e),
            $("#redeem-ticket-modal--layout").nifty("show"),
            removeLoadingImgFn()
        }
        )).fail((function(e, t, a) {
            removeLoadingImgFn(),
            sweetAlert(e.responseJSON ? e.responseJSON.message : e.responseText)
        }
        )),
        !1
    }
    )),
    $(document).on("click", "#check-in-btn", (function() {
        return a(),
        !1
    }
    )),
    $(document).on("click", "#check-in-popup", (function() {
        return a(),
        !1
    }
    )),
    $(document).on("click", "#close-check-in-popup", (function() {
        return document.getElementById("check-in-popup").style.display = "none",
        !1
    }
    )),
    $(document).on("click", ".btn-refresh-reward", (function() {
        var e = this;
        return $(this).prop("disabled", !0),
        $(".reward-btn-silver-txt").text(""),
        $(".reward-btn-gold-txt").text(""),
        $(".reward-btn-silver-txt").addClass("loader"),
        $(".reward-btn-gold-txt").addClass("loader"),
        json_get(window.uriPrefix + "/get_reward_balance").done((function(t) {
            $(".reward-btn-silver-txt").removeClass("loader"),
            $(".reward-btn-silver-txt").text(t.silver_coins),
            $(".reward-btn-gold-txt").removeClass("loader"),
            $(".reward-btn-gold-txt").text(t.gold_coins),
            $(e).prop("disabled", !1)
        }
        )).fail((function() {
            $(".reward-btn-silver-txt").removeClass("loader"),
            $(".reward-btn-gold-txt").removeClass("loader"),
            $(e).prop("disabled", !1)
        }
        )),
        !1
    }
    )),
    $(document).on("click", "#spin-btn", (function() {
        return $("#checkin-modal--layout").nifty("hide"),
        n(),
        !1
    }
    )),
    $(document).on("click", "#claim-btn", (function() {
        return $("#checkin-modal--layout").nifty("hide"),
        (showLoadingImgFn(),
        new Promise((function(e, t) {
            $.get("/claim_reward", (function(t) {
                e(t),
                removeLoadingImgFn()
            }
            )).fail((function(e, t, a) {
                removeLoadingImgFn(),
                sweetAlert(e.responseJSON ? e.responseJSON.message : e.responseText)
            }
            ))
        }
        ))).then((function(e) {
            return result = e,
            r(result.message, result.data.extra_message, result.data.rewards_type),
            result
        }
        )),
        !1
    }
    )),
    $(document).on("click", "#redeem-btn", (function() {
        $("#redeem-btn").prop("disabled", !0),
        showLoadingImgFn();
        var e = "/ajax_redeem_ticket?qty=" + document.getElementById("ticket-qty").innerText;
        return $.get(e, (function(e) {
            removeLoadingImgFn(),
            sweetAlert(e.message, "success", "Success"),
            location.reload()
        }
        )).fail((function(e, t, a) {
            removeLoadingImgFn(),
            sweetAlert(e.responseJSON ? e.responseJSON.message : e.responseText)
        }
        )),
        !1
    }
    )),
    $(document).on("click", "#minus-btn", (function() {
        var e = document.getElementById("ticket-qty").innerText
          , t = parseInt(e) - 1;
        return t > 0 ? (document.getElementById("ticket-qty").innerText = t,
        $("#redeem-btn").prop("disabled", !1),
        $("#add-btn").hasClass("disabledBtn") && $("#add-btn").removeClass("disabledBtn"),
        $("#minus-btn").hasClass("disabledBtn") && $("#minus-btn").removeClass("disabledBtn")) : ($("#redeem-btn").prop("disabled", !0),
        $("#minus-btn").addClass("disabledBtn")),
        !1
    }
    )),
    $(document).on("click", "#add-btn", (function() {
        var e = document.getElementById("ticket-qty").innerText
          , t = parseInt(e) + 1;
        return t <= document.getElementById("available_claim").value ? (document.getElementById("ticket-qty").innerText = t,
        $("#redeem-btn").prop("disabled", !1),
        $("#minus-btn").hasClass("disabledBtn") && $("#minus-btn").removeClass("disabledBtn"),
        $("#add-btn").hasClass("disabledBtn") && $("#add-btn").removeClass("disabledBtn")) : ($("#redeem-btn").prop("disabled", !0),
        $("#add-btn").addClass("disabledBtn")),
        !1
    }
    ));
    var i = ["https://files.sitestatic.net/assets/imgs/rewards/silver_coin.webp?v=0.1", "https://files.sitestatic.net/assets/imgs/rewards/gold_coin.webp?v=0.1"]
      , o = [];
    function s(e) {
        if (document.querySelector("#wheelCanvas")) {
            for (var t = [], a = 0; a < e.length; a++)
                e[a].color = (a + 1) % 2 == 0 ? "#fff" : "#000",
                e[a].bgColor = (a + 1) % 2 == 0 ? "#ee7b30" : "#fefdfa",
                t.push(e[a]);
            console.log("sectors", t),
            c(t, o)
        }
    }
    var c = function(e, t) {
        console.log("loaded img ", t);
        var a = e.length
          , n = document.querySelector("#wheelCanvas").getContext("2d")
          , i = n.canvas.width / 2
          , o = Math.PI
          , s = 2 * o
          , c = s / a
          , d = 0
          , l = 0
          , u = !1
          , m = !1
          , h = null
          , f = []
          , p = 0
          , b = null
          , g = null
          , w = function() {
            var e = l - o / 2;
            n.canvas.style.transform = "rotate(".concat(e, "rad)");
            var t = (Math.round(100 * l) / 100).toFixed(2);
            if (null !== b) {
                var a = Math.abs(b - Number(t));
                b > Number(t) && a > .5 && p++
            }
            b = Number(t)
        }
          , v = function t() {
            !function() {
                if (u) {
                    var t = g ? f.filter((function(e) {
                        return e.id === g.data.hit_prize.item_seq
                    }
                    )) : []
                      , a = g ? e.findIndex((function(e) {
                        return e.item_seq === g.data.hit_prize.item_seq
                    }
                    )) + 1 : 1
                      , n = .4;
                    switch (a) {
                    case 10:
                        n = 1.08;
                        break;
                    case 9:
                        n = 1.03;
                        break;
                    case 8:
                    case 7:
                    case 6:
                        n = .7;
                        break;
                    case 5:
                        n = .5;
                        break;
                    default:
                        n = 1.1
                    }
                    if (d >= n && (m = !1),
                    m)
                        d || (d = .002),
                        d *= 1.06,
                        d = Number(d.toFixed(6));
                    else {
                        d > .004 && (d *= d <= .07 || a > 5 && p > 2 && d < .05 ? .991 : .97),
                        d = Number(d.toFixed(6));
                        var i = [.03, .06, .09, .12];
                        if (t.length > 0 && l >= t[0].startAng + i[Math.floor(Math.random() * i.length)] && l <= t[0].endAng && (d <= .02 || a > 5 && p > 2 && d <= .03))
                            return p = 0,
                            u = !1,
                            !1,
                            cancelAnimationFrame(h),
                            void r(g.message, g.data.extra_message, g.data.hit_prize.item)
                    }
                    l += d,
                    l %= s,
                    w()
                }
            }(),
            h = requestAnimationFrame(t)
        };
        document.querySelector("#spinBtn").addEventListener("click", (function() {
            var e, t;
            u || (document.getElementById("spinBtn").disabled = !0,
            (e = document.getElementById("seq").value,
            t = "/spin_wheel_result?today_sequence=" + e,
            new Promise((function(e, a) {
                $.get(t, (function(t) {
                    e(t)
                }
                )).fail((function(e, t, a) {
                    sweetAlert(e.responseJSON ? e.responseJSON.message : e.responseText)
                }
                ))
            }
            ))).then((function(e) {
                return g = e,
                console.log("promise res", e),
                u = !0,
                m = !0,
                v(),
                g
            }
            )))
        }
        )),
        e.forEach((function(e, a) {
            var r = c * a;
            n.save();
            var o, s, d, l = 1;
            switch (e.item_seq) {
            case 1:
                l = 10;
                break;
            case 2:
                l = 9;
                break;
            case 3:
                l = 8;
                break;
            case 4:
                l = 7;
                break;
            case 5:
                l = 6;
                break;
            case 6:
                l = 5;
                break;
            case 7:
                l = 4;
                break;
            case 8:
                l = 3;
                break;
            case 9:
                l = 2;
                break;
            case 10:
                l = 1
            }
            if (f.push({
                id: l,
                startAng: r,
                endAng: r + c
            }),
            n.beginPath(),
            n.fillStyle = e.bgColor,
            n.moveTo(i, i),
            n.arc(i, i, i, r, r + c),
            n.lineTo(i, i),
            n.fill(),
            n.translate(i, i),
            n.rotate(r + c / 2),
            n.textAlign = "right",
            n.fillStyle = e.color,
            n.font = "14px sans-serif",
            1 === Number(e.item_id) || 2 === Number(e.item_id)) {
                console.log("sector", e);
                var u = i - 55;
                n.fillText((o = e.amount,
                s = Math.abs(o),
                d = Math.sign(o),
                s >= 1e12 ? d * (s / 1e12).toFixed(1) + "T" : s >= 1e9 ? d * (s / 1e9).toFixed(1) + "B" : s >= 1e6 ? d * (s / 1e6).toFixed(1) + "M" : s >= 1e3 ? d * (s / 1e3).toFixed(1) + "K" : d * s), u, 5),
                1 === e.item_id ? n.drawImage(t[0], u + 5, -15, 26, 26) : n.drawImage(t[1], u + 5, -15, 26, 26)
            } else if (4 === Number(e.item_id)) {
                var m = e.item.split(" ");
                n.fillText(m[0] + " " + m[1], i - 20, 5),
                n.fillText(m[2], i - 40, 20)
            } else
                n.fillText(e.item, i - 30, 10);
            n.restore()
        }
        )),
        w()
    }
}
, function(e, t) {
    $("#save-visible-code").change((function() {
        this.checked ? $("#verification-code").fadeIn() : $("#verification-code").fadeOut()
    }
    )),
    $(document).on("submit", "#enable2FA", (function(e) {
        e.preventDefault(),
        $("#" + this.id + " .btn-submit").prop("disabled", !0);
        var t = "#" + this.id;
        $(t + " .message").hide();
        var a = "";
        if ($(".pin-in-grp input").each((function() {
            a += this.value
        }
        )),
        a.length < 6)
            return $(t + " .btn-submit").prop("disabled", !1),
            $(t + " .message").show(),
            $(t + " .message").html("Pin is incomplete"),
            !1;
        var n = $(this).attr("action");
        return json_post(n, {
            fa2_token: a
        }).done((function(e) {
            return console.log("enable fa2"),
            sweetAlert(transMsgs.fa2Activated, "success", "Success"),
            $(t + " .btn-submit").removeAttr("disabled"),
            setTimeout((function() {
                window.location.reload()
            }
            ), 2e3),
            !0
        }
        )).always((function(e, a, n) {
            return $(".pincode").val(""),
            $(t + " .btn-submit").removeAttr("disabled"),
            !1
        }
        )),
        !1
    }
    )),
    $(document).on("submit", "#disable2FA", (function(e) {
        e.preventDefault();
        var t = "#" + this.id;
        $(t + " .btn-submit").prop("disabled", !0),
        $(t + " .message").hide();
        var a = "";
        if ($(".pin-in-grp input").each((function() {
            a += this.value
        }
        )),
        a.length < 6)
            return $(t + " .btn-submit").prop("disabled", !1),
            $(t + " .message").show(),
            $(t + " .message").html("Pin is incomplete"),
            !1;
        var n = $(this).attr("action");
        return json_post(n, {
            fa2_token: a
        }).done((function(e) {
            return console.log("disable fa2"),
            sweetAlert(transMsgs.fa2Deactivated, "success", "Success"),
            $(t + " .btn-submit").removeAttr("disabled"),
            setTimeout((function() {
                window.location.reload()
            }
            ), 2e3),
            !0
        }
        )).always((function(e, a, n) {
            return $(".pincode").val(""),
            $(t + " .btn-submit").removeAttr("disabled"),
            !1
        }
        )),
        !1
    }
    )),
    $(".desktop .copy-link").on("click", (function(e) {
        e.preventDefault();
        var t, a, n = $(this).attr("href");
        t = n,
        a = $("<input>"),
        $("body").append(a),
        a.val(t).select(),
        document.execCommand("copy"),
        a.remove(),
        alert("Link copied to clipboard: " + t)
    }
    ))
}
, , , , function(e, t, a) {
    e.exports = a(15)
}
, function(e, t, a) {
    "use strict";
    a.r(t);
    a(0);
    lazySizes.cfg.lazyClass = "lazy",
    lazySizes.cfg.loadMode = 1,
    a(1),
    a(2),
    function(e) {
        e(document).on("lazyloaded", (function(t) {
            e(t.target).next().hide();
            var a = t.target;
            a.complete && void 0 !== a.naturalWidth && 0 != a.naturalWidth || e(a).parents(".game-box").remove()
        }
        )),
        a(3),
        e("#carousel-fixed-height").on("slide.bs.carousel", (function(t) {
            var a;
            (a = e(t.relatedTarget).find("img[data-src]")) && a.length > 0 && (a.attr("src", a.data("src")),
            a.removeAttr("data-src"))
        }
        )),
        a(4),
        a(5),
        a(6),
        a(7),
        a(16),
        a(9),
        a(10),
        a(8);
        var t = !1;
        try {
            t = sessionStorage.getItem("isCloseAPKDownBar")
        } catch (e) {}
        if ("true" !== t && e("#apk-down-bar").show(),
        e("#btn-close--apk").click((function() {
            e("#apk-down-bar").fadeToggle();
            try {
                sessionStorage.setItem("isCloseAPKDownBar", "true")
            } catch (e) {}
        }
        )),
        document.getElementById("collapsible-footer") && (window.onscroll = function() {
            var t;
            t = e("#collapsible-footer").offset().top + e(window).height(),
            document.body.scrollTop > t || document.documentElement.scrollTop > t ? e("#btn-wrap--goToTop").show() : e("#btn-wrap--goToTop").hide()
        }
        ),
        window.topFunction = function() {
            document.body.scrollTop = e("#collapsible-footer").offset().top - 150,
            document.documentElement.scrollTop = e("#collapsible-footer").offset().top - 150;
            var t = e(".footer-body").offset().top + e(".footer-body").height()
              , a = e(document).height();
            e(".footer-title .i-collapse").toggleClass("rotate"),
            e(".footer-body").slideToggle().removeClass("hide"),
            e("html, body").animate({
                scrollTop: t + a
            }, 2e3)
        }
        ,
        e("#home_float-menu1").length > 0 && (e(document).click((function(t) {
            !e(t.target).closest("#home_float-menu1").length && e("#home_float-menu1").hasClass("visible") && e("#home_float-menu1").removeClass("visible")
        }
        )),
        e("#home_float-menu1").click((function() {
            e("#home_float-menu1").addClass("visible")
        }
        ))),
        window.isAuth)
            check_notification_status()
    }(jQuery),
    a(17)
}
, function(e, t) {
    $(document).on("click", ".profile-head .mdc-tab-bar .mdc-tab", (function(e) {
        e.preventDefault(),
        e.stopPropagation(),
        $(".profile-head .mdc-tab-bar .mdc-tab").removeClass("active"),
        $(".profile-head .mdc-tab-bar .mdc-tab .mdc-tab-indicator").removeClass("active"),
        $(".profile-head .mdc-tab-bar .mdc-tab--active").removeClass("mdc-tab--active"),
        $(".profile-head .mdc-tab-bar .mdc-tab .mdc-tab-indicator--active").removeClass("mdc-tab-indicator--active"),
        $(this).addClass("active"),
        $(this).children(".mdc-tab-indicator").addClass("active");
        var t = $(this).data("tabname");
        switch ($(".profile-head .outlet .tab-pane").html(""),
        t) {
        case "edit":
            xhr_get(window.uriPrefix + "/ajaxprofileEdit").done((function(e) {
                $(".profile-head .outlet .tab-pane").html(e)
            }
            ));
            break;
        case "change-password":
            xhr_get(window.uriPrefix + "/ajaxchgPass").done((function(e) {
                $(".profile-head .outlet .tab-pane").html(e)
            }
            ));
            break;
        case "suspend-account":
            xhr_get(window.uriPrefix + "/ajaxsuspendAccount").done((function(e) {
                $(".profile-head .outlet .tab-pane").html(e)
            }
            ));
            break;
        case "deposit-limit":
            xhr_get(window.uriPrefix + "/ajaxdepositLimit").done((function(e) {
                $(".profile-head .outlet .tab-pane").html(e)
            }
            ));
            break;
        case "my-bonus":
            xhr_get(window.uriPrefix + "/ajaxmyBonus").done((function(e) {
                $(".profile-head .outlet .tab-pane").html(e)
            }
            ));
            break;
        case "my-withdraw-to":
            xhr_get(window.uriPrefix + "/ajaxmyTurnover").done((function(e) {
                $(".profile-head .outlet .tab-pane").html(e)
            }
            ));
            break;
        case "my-promo":
            xhr_get(window.uriPrefix + "/ajaxmyPromo").done((function(e) {
                $(".profile-head .outlet .tab-pane").html(e)
            }
            ))
        }
        return !1
    }
    ))
}
, function(e, t) {
    !function(e) {
        function t(t) {
            t.stopPropagation(),
            t.preventDefault(),
            e("#mainContent").toggleClass("rightSideBarOpen"),
            e("#r-side-bar").toggleClass("open"),
            window.isAuth ? (e("#r-side-bar .side-bar-content").html(""),
            xhr_get(window.uriPrefix + "/ajaxProfile").done((function(t) {
                e("#r-side-bar .side-bar-content").html(t),
                e(".profile-head .mdc-tab-bar .mdc-tab[data-tabname=edit]").addClass("active"),
                e(".profile-head .mdc-tab-bar .mdc-tab[data-tabname=edit] .mdc-tab-indicator").addClass("active"),
                e(".top-bar .mail_icon").is(":visible") && (e("#r-side-bar .side-bar-content .mail_icon").toggle(!0),
                e(".side-bar-content .mail_icon,.side-bar-content .txt_mail_cnt").text(e(".top-bar .mail_icon").text()))
            }
            ))) : e("#loginfreshCaptcha").trigger("click")
        }
        e(document).on("click", "#btnToggleRSideNav", (function(e) {
            return t(e),
            !1
        }
        )),
        e(document).on("click", "#btnLogin--home", (function(e) {
            return t(e),
            !1
        }
        )),
        e(document).on("click", "#btnToggleSideNav", (function(t) {
            return t.stopPropagation(),
            t.preventDefault(),
            e("#sideNav").toggleClass("open"),
            e("#mainContent").toggleClass("sideNavOpen"),
            !1
        }
        )),
        e(".downloadmodal-trigger").click((function() {
            var t = e(this).attr("data-title")
              , a = e(this).attr("data-launchurl")
              , n = e(this).attr("data-apkurl")
              , r = e(this).attr("data-title").toUpperCase()
              , i = (r = "/transferto" + t,
            e(this).attr("data-transWallet"));
            e("#downloadurl").parent().toggle(!!n),
            e("#launchurl").parent().toggleClass("col-xs-6", !!n).toggleClass("col-xs-8 col-xs-offset-2", !n),
            e("#trans_to_game_menu__game-modal").parent().toggle(!!i),
            e("#downloadurl").attr("href", n),
            e("#downloadgame-title").html(t),
            e("#gamename").html(t),
            e("#launchurl").attr("href", a),
            e("#tw_transfer_form").attr("action", r),
            e("#apk-modal").addClass("md-show"),
            window.tw_information(),
            e("#apk-modal").on("hidden.nifty.modal", (function() {
                e("#tw_transfer_form").validate().resetForm(),
                e("#slider").slider("option", "value", 0)
            }
            ))
        }
        )),
        window.location.href.indexOf("reLogin=yes") >= 0 && !window.isAuth && e("#btnToggleRSideNav").trigger("click")
    }(jQuery)
}
]);
