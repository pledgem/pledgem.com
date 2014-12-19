<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation</title>
    <link rel="stylesheet" href="stylesheets/app.css" />
    <script src="bower_components/modernizr/modernizr.js"></script>
</head>

<body>
	<div class="contain-to-grid sticky">
    <nav class="top-bar" data-topbar>
        <ul class="title-area">

            <li class="name">
                <h1>
          <a href="#">
            <img style="height:40px;" src="img/pledgem-big.png"></img>
          </a>
        </h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a>
            </li>
        </ul>

        <section class="top-bar-section">

            <ul class="right">
                <li class="divider"></li>
                <li>
                    <a href="/">About</a>
                </li>
                <li class="divider"></li>
                <li>
                	<a href="/download">Download</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="/docs">Docs</a>
                </li>
                <li class="divider"></li>
            </ul>
        </section>
    </nav>
	</div>
	
	<div class="row">
	 @yield('content')
	</div>
	
    <footer class="row">
        <div class="large-12 columns">
            <hr/>
            <div class="row">
                <div class="large-6 columns">
                    <p>© Copyright no one at all. Go to town.</p>
                </div>
                <div class="large-6 columns">
                    <ul class="inline-list right">
                        <li><a href="#">Usage License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="reveal-modal" id="mapModal">
        <h4>Where We Are</h4>
        <p><img src="http://placehold.it/800x600" />
        </p>
        <a href="#" class="close-reveal-modal">×</a>
    </div>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>
