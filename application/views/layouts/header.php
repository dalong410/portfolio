<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="/saebom/">Spring's Blog</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/saebom/">Home</a>
                </li>
                <?php
                for ($i=0; $i < count($gnb_list); $i++) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/saebom/<?php echo $gnb_list[$i][route].$gnb_list[$i][menu_name];?>"><?php echo $gnb_list[$i][menu_name];?></a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Header -->
<header class="masthead" style="background-image: url('/saebom/img/home-bg.jpg')">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134315263-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-134315263-1');
    </script>

    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1 style="color:#ffffff;">Spring's Blog</h1>
                    <span class="subheading">A Blog About Travel</span>
                </div>
            </div>
        </div>
    </div>
</header>