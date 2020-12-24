<html>
<head>
    <style>
        div {
          text-align: center;
          margin-top: 100px;
        }
        .footer {
              color: grey;
          }
      </style>
    <meta name="viewport" content="width=device-width, minimum-scale=0.1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Meoowww</title>
</head>
    <body style="margin: 0px; background: #0e0e0e;">
        <div class="button">
            <a href="{{ route('search') }}" class="btn btn-primary">Another Random Cat</a>
            <a href="{{ route('index') }}" class="btn btn-warning text-center">More Cat</a>
        </div>
        <div>
            @if(isset($getImageCat))
            <img style="-webkit-user-select: none;margin: auto;cursor: zoom-in;" src="{{ $getImageCat[0]['url'] }}" width="394" height="338">
            @elseif(isset($getRandomCat))
            <img style="-webkit-user-select: none;margin: auto;cursor: zoom-in;" src="{{ $getRandomCat }}" width="394" height="338">
            @endif
        </div>
        <section class="footer" id="footer">
            <footer class="navbar-nav bg-outline-primary text-center pt-4 pb-3 mt-4">
              <h6>&#169; Copyright by Umar Sabirin</h6>
            </footer>
          </section>
    </body>
</html>
