<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- *1 -->
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}"> <!-- *2 -->
    <style type="text/css">
      /* GLOBAL STYLES
      -------------------------------------------------- */
      /* Padding below the footer and lighter body text */

      body {
        padding-top: 3rem;
        padding-bottom: 3rem;
        color: #5a5a5a;
      }


      /* CUSTOMIZE THE CAROUSEL
      -------------------------------------------------- */

      /* Carousel base class */
      .carousel {
        margin-bottom: 4rem;
      }
      /* Since positioning the image, we need to help out the caption */
      .carousel-caption {
        bottom: 3rem;
        z-index: 10;
      }

      /* Declare heights because of positioning of img element */
      .carousel-item {
        height: 32rem;
        background-color: #777;
      }
      .carousel-item > img {
        position: absolute;
        top: 0;
        left: 0;
        min-width: 100%;
        height: 32rem;
      }


      /* MARKETING CONTENT
      -------------------------------------------------- */

      /* Center align the text within the three columns below the carousel */
      .marketing .col-lg-4 {
        margin-bottom: 1.5rem;
        text-align: center;
      }
      .marketing h2 {
        font-weight: 400;
      }
      .marketing .col-lg-4 p {
        margin-right: .75rem;
        margin-left: .75rem;
      }


      /* Featurettes
      ------------------------- */

      .featurette-divider {
        margin: 5rem 0; /* Space out the Bootstrap <hr> more */
      }

      /* Thin out the marketing headings */
      .featurette-heading {
        font-weight: 300;
        line-height: 1;
        letter-spacing: -.05rem;
      }


      /* RESPONSIVE CSS
      -------------------------------------------------- */

      @media (min-width: 40em) {
        /* Bump up size of carousel content */
        .carousel-caption p {
          margin-bottom: 1.25rem;
          font-size: 1.25rem;
          line-height: 1.4;
        }

        .featurette-heading {
          font-size: 50px;
        }
      }

      @media (min-width: 62em) {
        .featurette-heading {
          margin-top: 7rem;
        }
      }
    </style>
    <title>Carousel Template for Bootstrap</title>
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Learn Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/hello') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/hello') }}">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="{{ url('/hello') }}">Disabled</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
              alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>ハローワールド</h1>
                <p>PHPフレームワーク Laravel入門（<a href="https://www.amazon.co.jp/gp/product/B07CLLW4MX">https://www.amazon.co.jp/gp/product/B07CLLW4MX</a>） を参考に、学習用に作成したもの</p>
                <p><a class="btn btn-lg btn-primary" href="{{ url('/hello') }}" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
              alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>ToDo</h1>
                <p>データベース追加・更新・削除の学習に作成したToDo管理ページ</p>
                <p><a class="btn btn-lg btn-primary" href="{{ url('/todo') }}" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
              alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>出席管理</h1>
                <p>Laravel+Vue の学習のために、<a href="https://luftgarden.work/laravel-vue-attendance-part">https://luftgarden.work/laravel-vue-attendance-part</a>のソースコードを模倣し作成。</p>
                <p><a class="btn btn-lg btn-primary" href="{{ url('/attends') }}" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
              alt="Generic placeholder image" width="140" height="140">
            <h2>ハローワールド</h2>
            <p><a href="https://www.amazon.co.jp/gp/product/B07CLLW4MX">https://www.amazon.co.jp/gp/product/B07CLLW4MX</a> を参考に、学習用に作成したもの</p>
            <p><a class="btn btn-secondary" href="{{ url('/hello') }}" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>ToDo</h2>
            <p>データベース追加・更新・削除の学習に作成したToDo管理ページ</p>
            <p><a class="btn btn-secondary" href="{{ url('/todo') }}" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>出席管理</h2>
            <p>Laravel+Vue の学習のために、<a href="https://luftgarden.work/laravel-vue-attendance-part">https://luftgarden.work/laravel-vue-attendance-part</a>のソースコードを模倣し作成。</p>
            <p><a class="btn btn-secondary" href="{{ url('/attends') }}" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">このページはBootStrap4サンプルページのCarouselを使用しました。</h2>
            <p class="lead"><a href="https://getbootstrap.com/docs/4.0/examples/carousel/">https://getbootstrap.com/docs/4.0/examples/carousel/</a></p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">ソースコードはGitHubリポジトリを参照ください。</h2>
            <p class="lead"><a href="https://github.com/AraiKotaro/learn_laravel">https://github.com/AraiKotaro/learn_laravel</a></p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2018 Arai Kotaro &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main>

    <div id="app"></div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ mix('js/app.js') }}"></script> <!-- *2 -->
  </body>
</html>
