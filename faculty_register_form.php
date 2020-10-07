<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="css/faculty.css" type="text/css">


</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html">ATTENDANCE PORTAL</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html" target="_self">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html" target="_self">AboutUs</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="faculty.html" target="_self">Faculty</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="student.html" target="_self">Student</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html" target="_self">ContactUS</a>
                        </li>
                    </ul>
                </div>
        </div>
        </nav>
    </header>


    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Create Faculty Account</h4><br>
            <form method="POST" action="linker_faculty.php">
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input id="Text1" type="text" name="f_name" class="form-control" placeholder="Full name"
                    maxlength="30" required>
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input id="Text2" type="text" name="f_id" class="form-control" placeholder="ID" maxlength="4" required>
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-book"></i> </span>
                    </div>
                    <input id="Text3" type="text" name="f_course" class="form-control" placeholder="Course"
                    maxlength="20">
                </div>
                <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input id="Text5" type="text" name="f_gmail" class="form-control" placeholder="Email address"
                    maxlength="30">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>
                    <input id="Text4" type="text" name="f_number" class="form-control" placeholder="Phone number"
                    maxlength="10">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input id="Text6" type="text" name="f_login" class="form-control" placeholder="Login ID"
                    maxlength="8">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input id="Text7" type="password" name="f_password" class="form-control" placeholder="Password"
                    maxlength="8">
                </div> <!-- form-group// -->
                <div class="form-group">
                    <button id="Submit1" type="submit" value="REGISTER" class="btn btn-primary btn-block"> Create
                        Account </button>
                </div> <!-- form-group// -->
                <p class="text-center">Have an account? <a href="faculty.html">Log In</a> </p>
            </form>
        </article>
    </div>


    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
        <div class="container text-center">
            <small>Copyright &copy; zeem.Chaudhary &nbsp; Apurva.Bhosle &nbsp; Jayesh.Ghosh</small>
        </div>
    </footer>

    <div
    style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;">
    <a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank"
        href="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website&utm_content=footer_img"><img
            src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"
            alt="www.000webhost.com"></a></div>
<script>
    function getCookie(e) {
        for (var t = e + "=", n = decodeURIComponent(document.cookie).split(";"), o = 0; o < n.length; o++) {
            for (var i = n[o];
                " " == i.charAt(0);) i = i.substring(1);
            if (0 == i.indexOf(t)) return i.substring(t.length, i.length)
        }
        return ""
    }
    getCookie("hostinger") && (document.cookie = "hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;", location
        .reload());
    var notification = document.getElementsByClassName("notice notice-success is-dismissible"),
        hostingerLogo = document.getElementsByClassName("hlogo"),
        mainContent = document.getElementsByClassName("notice_content")[0],
        newList = ["Powerful and Easy-To-Use Control Panel.", "1-Click Auto Installer and 24/7 Live Support.",
            "Free Domain, Email and SSL Bundle.", "5x faster WordPress performance",
            "Weekly Backups and Fast Response Time."
        ];
    if (notification.length > 0 && null != mainContent) {
        var googleFont = document.createElement("link");
        googleFontHref = document.createAttribute("href"), googleFontRel = document.createAttribute("rel"),
            googleFontHref.value = "https://fonts.googleapis.com/css?family=Open+Sans:300,400,600",
            googleFontRel.value = "stylesheet", googleFont.setAttributeNode(googleFontHref), googleFont
            .setAttributeNode(googleFontRel);
        var css =
            "@media only screen and (max-width: 768px) {.web-hosting-90-off-image-wrapper {position: absolute;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 0.3;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} .web-hosting-90-off-image-wrapper {padding: 0 5%}} .content-wrapper {z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{border: 0; border-radius: 3px; background-color: #ff123a !important; padding: 15px 55px !important; margin-left: 30px; font-family: 'Open Sans', sans-serif; font-size: 16px; font-weight: 600; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: #d10303 !important;}",
            style = document.createElement("style"),
            sheet = window.document.styleSheets[0];
        style.styleSheet ? style.styleSheet.cssText = css : style.appendChild(document.createTextNode(css)),
            document.getElementsByTagName("head")[0].appendChild(style), document.getElementsByTagName("head")[
                0].appendChild(googleFont);
        var button = document.getElementsByClassName("upgrade_button_red")[0],
            link = button.parentElement;
        link.setAttribute("href",
                "https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&utm_medium=panel&utm_campaign=000-wp"
                ), link.innerHTML = '<button class="upgrade_button_red_sale">TRANSFER NOW</button>', (
                notification = notification[0]).setAttribute("style",
                "padding-bottom: 10px; padding-top: 5px; background-image: url(https://cdn.000webhost.com/000webhost/promotions/springsale/mountains-neon-background.jpg); background-color: #000000; background-size: cover; background-repeat: no-repeat; color: #ffffff; border-color: #ff123a; border-width: 8px;"
                ), notification.className = "notice notice-error is-dismissible", (hostingerLogo =
                hostingerLogo[0]).setAttribute("src",
                "https://cdn.000webhost.com/000webhost/promotions/springsale/logo-hostinger-white.svg"),
            hostingerLogo.setAttribute("style",
                "float: none !important; height: auto; max-width: 100%; margin: 40px 20px 10px 30px;");
        var h1Tag = notification.getElementsByTagName("H1")[0];
        h1Tag.remove();
        var paragraph = notification.getElementsByTagName("p")[0];
        paragraph.innerHTML =
            "Fast & Secure Web Hosting. <br>Limited time offer: get an SSL certificate for FREE", paragraph
            .setAttribute("style",
                'max-width: 600px; margin-left: 30px; font-family: "Open Sans", sans-serif; font-size: 16px; font-weight: 600;'
                );
        var list = notification.getElementsByTagName("UL")[0];
        list.setAttribute("style", "max-width: 675px;");
        for (var listElements = list.getElementsByTagName("LI"), i = 0; i < newList.length; i++) listElements[i]
            .setAttribute("style",
                "color:#ffffff; list-style-type: disc; margin-left: 30px; font-family: 'Open Sans', sans-serif; font-size: 14px; font-weight: 300; line-height: 1.5;"
                ), listElements[i].innerHTML = newList[i];
        listElements[listElements.length - 1].remove();
        var org_html = mainContent.innerHTML,
            new_html = '<div class="content-wrapper">' + mainContent.innerHTML +
            '</div><div class="web-hosting-90-off-image-wrapper"><img class="web-hosting-90-off-image" src="https://cdn.000webhost.com/000webhost/promotions/springsale/web-hosting-90-off.png"></div>';
        mainContent.innerHTML = new_html;
        var saleImage = mainContent.getElementsByClassName("web-hosting-90-off-image")[0]
    }
</script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>