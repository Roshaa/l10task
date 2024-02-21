<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HomePage</title>

  <link rel="stylesheet" href="jquery-ui-1.13.2/jquery-ui.css" />
  <link rel="stylesheet" href="style/css.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  @yield('styles')
</head>
<body>


<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-3"></div>
        <div class="col-6 text-center">
            <div><h1>@yield('title')</h1></div>
            @if (session()->has('success'))
                <div>{{session('success')}}</div>
            @endif
            <div>@yield('content')</div>
        </div>
        <div class="col-3"></div>
    </div>
</div>




<script src="jquery-3.7.1.min.js"></script>
<script src="jquery-ui-1.13.2/jquery-ui.js"></script>
<script src="js.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/fbe6b2fb71.js" crossorigin="anonymous"></script>

</body>
</html>