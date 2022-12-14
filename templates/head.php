<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-C1TDX897LS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-C1TDX897LS');
    </script>
    <script>
        function isIE() {
            // IE 10 and IE 11 and Edge legacy
            return /Trident\/|MSIE/.test(window.navigator.userAgent);
        }
        let showBrowserAlert = (function () {
            if (isIE() && window.location.pathname.indexOf("browserNotSupportedPage.php") ===  -1) {
                window.location.href = '/pages/browserNotSupportedPage.php';
            }
        });
        document.addEventListener('DOMContentLoaded', showBrowserAlert);

    </script>
    <meta charset='UTF-8'>
    <meta name='author' content='Pavel Alexandru'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet'
          integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <title><?php echo $pageTitle; ?></title>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js'
            integrity='sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3'
            crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
