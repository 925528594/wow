<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wow</title>
    <style>
        body{margin: 0;font-family: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;font-size: 1rem;font-weight: 300;line-height: 1.4;color: #363636;text-align: left;background-color: #fff}
        body,ul,ol,li,p,dl,dt,dd,h1,h2,h3,h4,input,button,textarea,img,div,a,span,nav,header,main,footer,section,table,td,tr,th,:after,:before,aside,picture,article,summary,strong,select,label,form{box-sizing: border-box;}
        body, input, p, h1, h2, h3, h4, form {margin: 0;}
        .container{max-width: 1220px;margin: 0 auto;padding: 0 10px;}
        .hidden{display: none;}

        /* font color */
        .text-white {color: #fcfaf9;}
        .text-gray {color: #999;}
        .text-black {color: #363636;}

        /* font align */
        .text-left {text-align: left;}
        .text-center {text-align: center;}
        .text-right {text-align: right;}

        /* flex */
        .flexible {display:flex;}
        .inline-flexible {display:inline-flex;}
        .flex-direction-row {flex-direction:row;}
        .flex-direction-column {flex-direction:column;}
        .flex-wrap-nowrap {flex-wrap:nowrap;}
        .flex-wrap-wrap {flex-wrap:wrap;}
        .flex-wrap-reverse {flex-wrap:wrap-reverse;}
        .flex-justify-start {justify-content:flex-start;}
        .flex-justify-end {justify-content:flex-end;}
        .flex-justify-center {justify-content:center;}
        .flex-justify-between {justify-content:space-between;}
        .flex-justify-around {justify-content:space-around;}
        .flex-align-start {align-items:flex-start;}
        .flex-align-end {align-items:flex-end;}
        .flex-align-center {align-items:center;}
        .flex-align-baseline {align-items:baseline;}
        .flex-align-stretch {align-items:stretch;}
        .flex-cont-start {align-content:flex-start;}
        .flex-cont-end {align-content:flex-end;}
        .flex-cont-center {align-content:center;}
        .flex-cont-baseline {align-content:baseline;}
        .flex-cont-stretch {align-content:stretch;}
        .flex-self-start {align-self:flex-start;}
        .flex-self-end {align-self:flex-end;}
        .flex-self-center {align-self:center;}
        .flex-self-baseline {align-self:baseline;}
        .flex-self-stretch {align-self:stretch;}

        header{height: 180px;margin-bottom: -180px;}
        header .container{height: inherit}
        #top-banner{height: 100vh;background: rgba(0, 0, 0, 0) linear-gradient(90deg, #160696, #08f9ce) repeat scroll 0 0;padding: 200px 0 0;}
        #top-banner .lft, #top-banner .rgt{max-width: 600px;margin: 0 30px;}
        #top-banner .lft .title{font-size: 3rem;margin-bottom: 20px;}
        #top-banner .lft .content{font-size: 1.2rem;}
        @media(max-width: 960px) {
            header .logo{display: block;}
            #top-banner .container{flex-direction: column;}
            #top-banner .rgt{display: none;}
        }
    </style>
</head>
<body>
    <header>
        <div class="container flexible flex-justify-center flex-align-center">
            <div class="logo hidden">
                <a target="_blank" href="https://github.com/925528594/wow">
                    <img src="https://github.com/925528594/wow/raw/master/logo.png" alt="wow framework" width="120">
                </a>
            </div>
        </div>
    </header>
    <main>
        <div id="top-banner">
            <div class="container flexible flex-justify-around flex-align-center text-white">
                <div class="lft">
                    <h1 class="title"><?php echo 'Welcome to '.config('app.name').'!'; ?></h1>
                    <div class="content">
                        <p>If you see this page, the Wow Framework is successfully installed and working. Further configuration is required.</p>
                        <p>Thank you for using Wow.</p>
                    </div>
                </div>
                <div class="rgt text-center">
                    <a href="https://github.com/925528594/wow" target="_blank">
                        <picture>
                            <img src="https://github.com/925528594/wow/raw/master/logo.png" alt="wow framework" width="340">
                        </picture>
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>