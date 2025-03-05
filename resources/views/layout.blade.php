<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') |NZT </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <nav class="navbar navbar-expand-lg bg-body-tertiary"data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">NZT doc Wepp</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="menu">vCARD</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="">ใบขอใช้รถ</a>
          </li> 
        </form>
      </div>
    </div>
  </nav>
    </div class="container py-2">
     @yield('content')
    </div>
  </body>
</html>