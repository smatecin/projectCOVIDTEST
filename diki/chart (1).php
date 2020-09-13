
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Peta Sebaran</title>

<meta name="description" content="">
<meta name="author" content="">

<meta property="og:site_name" content="covid19.go.id">
<link rel="shortcut icon" href="https://covid19.go.id/storage/app/media/logo-satgas.png" type="image/png" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet" href="https://covid19.go.id/combine/4264e13b5d4541f0e50703d8c5894959-1585797363.css" type="text/css">
<link rel="stylesheet" href="https://covid19.go.id/combine/13cee48b50998d93f86a4957c181a5a4-1586069099.css" type="text/css">
</head>
<body class='font-weight-light' data-target="#header" data-spy="scroll" data-offset="100">
<section class="section section-height-2 bg-color-light position-relative border-0 m-0">
<div class="container py-2">
<div class="row text-center align-items-center pb-4 pt-lg-4 mb-3 mb-lg-0 ">
<div class="col-md-12 col-lg-12 mb-12 mb-lg-0 loading-overlay-showing">
<div class="loading-overlay background-transparent">
<div class="bounce-loader z-index-0">
<div class="bounce1"></div>
<div class="bounce2"></div>
<div class="bounce3"></div>
</div>
</div>
<iframe id='ifram' class='w-100 d-block' frameborder="0" allowfullscreen></iframe>
</div>
</div>
</div>
</section> <footer id="footer" class='m-0'>

</div>
</div>
</div>
</footer> </div>
<link rel="stylesheet" href="https://covid19.go.id/combine/07be291f7b46d9873bcb393482c1a4f6-1585797363.css" type="text/css">
<link rel="stylesheet" href="https://covid19.go.id/combine/95522ccfc58b3dfe45c9d40ff4277e60-1585797295.css" type="text/css">
<link rel="stylesheet" href="https://covid19.go.id/combine/753ca4be1e0ec67f8cedc0a3dd1765b4-1586153509.css" type="text/css">
<link rel="stylesheet" href="https://covid19.go.id/combine/fdbfe0e246e864108e96053397df8bb9-1588651554.css?v=1.01" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Roboto:ital,wght@0,100;@0,300;@0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" type="text/css">
<style>
#ifram {       /* iframes are inline by default */
    background: transparent;
    border: none; 
    min-height: 300px;
    transition: opacity .3s;
    opacity: 0;
    height: 0;
}
</style>
<script src="https://covid19.go.id/combine/27ade3b203d33c97729bc56c27c6809b-1585797264.js"></script>
<script src="https://covid19.go.id/combine/6236e311d1f8c64965e6615063b14e66-1585797366.js"></script>
<script src="https://covid19.go.id/combine/f98e1a525f785fcc9517eba24d54b290-1585797362.js"></script>
<script src="https://covid19.go.id/combine/391b6d8112798a2bc1dc23daa693ca88-1585797363.js"></script>
<script src="https://covid19.go.id/combine/a3ae8394c9c1d1b278628081bf8709c7-1585797362.js"></script>
<script src="https://covid19.go.id/combine/9807b5b11874997659efd65294780cf2-1585797294.js"></script>
<script src="https://covid19.go.id/combine/a7a46d3341060080b8365c68bf447abc-1585797264.js"></script>
<script src="https://covid19.go.id/combine/00b9ebbb869a588f9dfd11f704ade530-1589134639.js?v=1.07"></script>
<script>
    var elx = document.createElement('textarea');
    elx.innerHTML = 'https://data.covid19.go.id';
    window.__DATA_DOMAIN__ = elx.value;
    delete elx;

    window.onbeforeunload = function() {
        window.__PARENT_EXITING__ = true;
    };
    window.__MSGLISTENER__ = function(e) {
        console.log('Message received!', e.data, e.origin);
        var elifram = document.getElementById('ifram');
        //var btnreselifram = document.getElementById('btn-reset-elifram');

        if (e.origin ==  window.__DATA_DOMAIN__ && e.data && e.data.state) {
            switch (e.data.state) {
                case 'check':
                    elifram.contentWindow.postMessage('success', window.__DATA_DOMAIN__);
                    break;
                case 'loaded':
                    if (window.__C7TIMER__ !== undefined) {
                        clearTimeout(window.__C7TIMER__);
                        delete window.__C7TIMER__;
                    }
                    //setTimeout(function() {
                        console.log('Reisizing frame to ' + (e.data.height + 20) + 'px...');
                        elifram.parentElement.className = elifram.parentElement.className.replace(/\s*loading-overlay-showing/, ' ');
                        elifram.style.height = (e.data.height + 20) + 'px';
                        elifram.style.opacity = '1';
                        //btnreselifram.style.display = ['/', '/covid', '/covid/'].indexOf(e.data.path) < 0 ? '' : 'none';
                    //}, (e.data.delay && e.data.delay === parseInt(e.data.delay, 10)) ? e.data.delay : 1e3 );
                    break;
                case 'unload':
                    if (window.__PARENT_EXITING__ === undefined) {
                        elifram.style.height = '300px';
                        elifram.style.opacity = '0';
                        elifram.parentElement.className += ' loading-overlay-showing';
                        //btnreselifram.style.display = 'none';
                    }
                    break;
            }
        }
    };
    window.__GETPRECALCHEIGHT__ = function() {
        var cw = $(document.body).outerWidth();
        if (cw >= 1200) return 4599;
        return 6766;
    };
    $(window).on('resize', function(e) {
        //console.log('window resized!', e);
        if (window.__C7TIMER__ !== undefined) {
            clearTimeout(window.__C7TIMER__);
            delete window.__C7TIMER__;
            //console.log('previous window resize handler cancelled.');
        }
        window.__C7TIMER__ = setTimeout(window.__MSGLISTENER__.bind({}, {
            origin: window.__DATA_DOMAIN__,
            data: {
                height: window.__GETPRECALCHEIGHT__(),
                delay: 10,
                state: 'loaded'
            }
        }), e.originalEvent ? 1e3 : 10e3);
    }).trigger('resize');
    window.addEventListener('message', window.__MSGLISTENER__);
    function reset_elifram() {
        $('#ifram').attr('src', window.__DATA_DOMAIN__ + '/public/index.html');
        setTimeout(reset_elifram.bind(), 3 * 3600 * 1000);
    }
    $(function () {
        reset_elifram();
    });
</script>
<script>(function(t,e,s,o){var n,c,l;t.SMCX=t.SMCX||[],e.getElementById(o)||(n=e.getElementsByTagName(s),c=n[n.length-1],l=e.createElement(s),l.type="text/javascript",l.async=!0,l.id=o,l.src="https://widget.surveymonkey.com/collect/website/js/tRaiETqnLgj758hTBazgdxwJiYoUFBK9Ae_2B4KhNg6bLR1V7_2BlX560ZF_2FsMhKQnNP.js",c.parentNode.insertBefore(l,c))})(window,document,"script","smcx-sdk");</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-160294340-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    
    gtag('config', 'UA-160294340-1');
</script> <script> 
 var lennawebchat = document.createElement('script'); lennawebchat.src = "https://covid19.lenna.ai/webchat/lenna-init.js";var app = document.createElement('script');app.src = "https://covid19.lenna.ai/webchat/app.js";document.head.prepend(lennawebchat);document.head.prepend(app);lennawebchat.onload = function () {LennaWebchatInit('lejRej')}; 
</script> <script>
// add additional code here...
//$('#myModal').modal('show');
</script>
</body>
</html>