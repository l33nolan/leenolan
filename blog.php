<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://dnxi05fu5z434.cloudfront.net/bootstrap.min.css">

    <!--Fonts and custom CSS-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i|Saira" rel="stylesheet">
    <link rel="stylesheet" href="https://dnxi05fu5z434.cloudfront.net/styles_compiled.css">
    <script defer src="https://dnxi05fu5z434.cloudfront.net/fontawesome.min.js"></script>
    <script defer src="https://dnxi05fu5z434.cloudfront.net/fa-brands.min.js"></script>
    <title>Lee Nolan</title>
</head>

<body class="container-fluid">

<!--mobile navigation-->

<div class="menu-overlay">
    <div class="menu-list hideOnLoad">
        <a href="index.php#callout">Home</a>
        <a href="index.php#projects">Projects</a>
        <a href="index.php#process">Process</a>
        <a href="index.php#contact">Contact</a>
        <a href="#">Blog</a>
    </div>
</div>

<div id="nav-icon">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div>

<!--main navigation (large devices)-->

<nav id="main-nav">
    <a href="index.php#callout">Home</a>
    <a href="index.php#projects">Projects</a>
    <a href="index.php#process">Process</a>
    <a href="index.php#contact">Contact</a>
    <a href="#">Blog</a>
</nav>

<div id="blog">
    <div class="articles">
        <!--First Article-->
        <div class="row">
            <div class="head-img col-md-4">
                <img src="https://dnxi05fu5z434.cloudfront.net/me.jpg" alt="picture of Lee Nolan">
            </div>
            <div class="head-titles col-md-8">
                <h3>Every (Milli)Second Counts.</h3>
                <h6>by Lee Nolan, February 15th, 2018.</h6>
            </div>
        </div>
        <p> You will hear lots of stats and facts about the subject of page load time. From “47% of users expect a
            site to load in under 2 seconds” to “40% of people will abandon your site if it takes more than 4 seconds to
            load” and even “Amazon would lose $1.6bn in sales if their site slowed down by just one second”. </p>
        <p>Regardless of the truths behind these stats, one thing is for sure; nobody likes a web site that takes
            forever to load. Sadly, many web designers and developers out there do not pay enough attention to this
            crucial metric.</p>
        <p> Like anything, before we can make your site faster, we need to know what is slowing it down. Thankfully,
            there are a
            few tools available that do just that. The most well known among them is Google’s own PageSpeed insights.
            This simple tool allows us to enter a URL and Google analyses your site’s performance under a number of
            categories, giving you a score out of 100 for both mobile and desktop renderings of your site. If available,
            PageSpeed will also give you real life speed information if your site has been active enough.</p>

        <figure>
            <h5>Google PageSpeed Insights <a target="_blank"
                                             href="https://developers.google.com/speed/pagespeed/insights">https://developers.google.com/speed/</a>
            </h5>
            <img src="https://dnxi05fu5z434.cloudfront.net/googlepage.jpg"
                 alt="screenshot of google page speed insights">
            <figcaption>
                Google PageSpeed Insights - a good starting point, but not without flaws.
            </figcaption>
        </figure>

        <p>Whilst Google PageSpeed is a good starting point, it does have its flaws. It can
            make suggestions that are not possible, such as specifying cache headers on external resources of which you
            have no control, or downloading their optimised images, which can be too small for your site's needs and
            break
            the layout. </p>

        <p>The good news is, there are other tools that I, and much of the web dev community, believe give more
            meaningful insights. The three services below are all dead easy yo use, free, and highly detailed.
        </p>

        <figure>
            <h5>Pingdom Tools <a target="_blank" href="https://tools.pingdom.com/">https://tools.pingdom.com/</a></h5>
            <img src="https://dnxi05fu5z434.cloudfront.net/pingdom.jpg"
                 alt="screenshot of google page speed insights">
            <figcaption>
                Pingdom tools - nice UI, choice of locations, detailed analysis. Additional features such as DNS health.
            </figcaption>
        </figure>

        <figure>
            <h5>GTMetrix <a target="_blank" href="https://gtmetrix.com/">https://gtmetrix.com/</a></h5>
            <img src="https://dnxi05fu5z434.cloudfront.net/gtmetrix.jpg"
                 alt="screenshot of google page speed insights">
            <figcaption>
                GTMetrix (probably my favourite). Very detailed. Allows you to compare to other websites (such as your
                competitors!).
            </figcaption>
        </figure>

        <figure>
            <h5>WebPagetest <a target="_blank" href="http://www.webpagetest.org/">http://www.webpagetest.org/</a></h5>
            <img src="https://dnxi05fu5z434.cloudfront.net/webtest.jpg"
                 alt="screenshot of google page speed insights">
            <figcaption>
                WebPagetest. Like the others, very detailed, choose browsers and locations, gives speed index
                measurement.
            </figcaption>
        </figure>

        <p>All of these tools have similar features, simply enter your URL and let the site do the rest. The
            information is presented in a 'school report card' style, with grades for different categories, and
            actionable suggestions. Some of these sites allow you to choose different locations around the world, and
            different
            browsers. These tools provide a high level of detail and in depth explanations of each issue.</p>

        <h5>Steps For Success</h5>
        <p>With all of this information to hand, it just takes a little bit of time and effort to make an impact on
            those grades, and the happiness of your users.</p>
        <ul>
            <li><span>Optimise images</span>. The biggest assets on most websites are images. Think about what the
                biggest size an
                image will ever be when viewed on your site, and make sure the files you serve are scaled appropriately.
                I have literally seen images that will never ever be bigger than 400px by 300px on the screen, being
                sourced from an image file that is four times that size! Tools like Photoshop have web specific export
                options
                that can drastically reduce file size with minimal quality loss.
            </li>
            <li><span>Specify cache headers.</span> When someone visits your site for the first time, all of the code
                and assets has
                to be downloaded from your servers, however, those clever web browsers can hide away a copy of those
                files to be served immediately on future visits. The thing is, we need to tell it to do so by including
                HTTP response headers that specify how long the file should be made available.
            </li>
            <li><span>Compression and minification.</span> Most code is written in a legible and organised way during
                development,
                with spaces, tabs, line breaks, indentation and comments to make the code
                as human readable as possible. Computers on the other hand, don’t need such luxury! They can interpret
                code without all the stuff that us dumb humans need. Minification is the process of stripping
                out all of the stuff that the computer doesn't care about, making the file much smaller.
                Compression is a method of shrinking files into smaller packages on
                the server using technologies such as Gzip.
            </li>
            <li><span>Harness the power of CDN.</span> Using a CDN, or Content Delivery Network, is a great way to shave
                off even
                more milliseconds. By hosting your static assets (images, scripts, stylesheets) externally, your own
                server has less work to do. Services such as Amazon Cloudfront have what they call “Edge Locations”
                around the world, so your content is essentially replicated in many areas, meaning that it is served
                from a location closer to your user.
            </li>
            <li><span>Have everything load in the right order.</span> Your pages will no doubt include some CSS and
                JavaScript, it is important that they are placed in the correct order. Incorrect placement can lead to
                these requests blocking the page content, or ‘render blocking’. As a rule of thumb, CSS should be at the top of your
                page, JS at the bottom, and where appropriate, use special attributes such as ‘defer’ and ‘async’ to
                delay the execution of scripts until the page content has loaded.
            </li>
        </ul>
        <p> So as you can see, a few things to think about! The good news is that there are a few great
            tools available, and with a little bit of thought and time, we can deliver the most optimised experiences we
            can. Now we just need to hope that all of our users have a decent internet connection!
        </p>
        <p>Why not enter your website URL into these tools? Get in touch if you need help improving those grades!</p>
    </div>
</div>


<!--Footer-->
<footer>
    <div class="row no-gutters">
        <div class="legal col-md-4">
            <ul class="footer-txt">
                <li><a href="privacy.html" target="_blank">Privacy</a></li>
                <li><a href="tos.html" target="_blank">Terms of Use</a></li>
            </ul>
        </div>
        <div class="copyright col-md-4">
            <p>All rights reserved. Lee Nolan &copy;2018</p>
        </div>
        <div class="social col-md-4">
            <a href="https://github.com/n0lanl33?tab=repositories" target="_blank"><i
                        class="fab fa-github-square fa-3x"></i></a>
            <a href="https://www.linkedin.com/in/lee-nolan-0b670815a/" target="_blank"><i
                        class="fab fa-linkedin fa-3x"></i></a>
            <a href="https://twitter.com/LeePNolan" target="_blank"><i class="fab fa-twitter-square fa-3x"></i></a>
        </div>
    </div>
</footer>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script defer src="https://dnxi05fu5z434.cloudfront.net/jquery-3.3.1.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script defer src="https://dnxi05fu5z434.cloudfront.net/bootstrap.min.js"></script>
<script defer src="https://dnxi05fu5z434.cloudfront.net/nav.js"></script>
<script defer src="https://dnxi05fu5z434.cloudfront.net/form.js"></script>
<script defer src="https://dnxi05fu5z434.cloudfront.net/modal-form.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115337383-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-115337383-1');
</script>


</body>
</html>