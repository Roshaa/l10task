<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>L10_Task</title>

  <link rel="stylesheet" href="jquery-ui-1.13.2/jquery-ui.css" />
  <link rel="stylesheet" href="style/css.css" />
  <script src="https://cdn.tailwindcss.com"></script>

  {{-- blade-formatter-disable --}}
  <style type="text/tailwindcss">
    .btn{
        @apply rounded-md px-2 py-1 text-center font-medium shadow-sm ring-1 text-slate-700 ring-slate-700/10 hover:bg-slate-500 mt-3
    }
    .link{
        @aplly font-medium text-gray-700 underline decoration-pink-500
    }
    label{
        @apply block uppercase text-slate-700 mb-2
    }
    input, textarea{
        @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none
    }
    .error{
        @apply text-red-500 text-sm
    }
  </style>
  {{-- blade-formatter-enable --}}
  <!-- Write your comments here
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  -->

  @yield('styles')
</head>
<body>


<div class="container mx-auto mt-10 border p-10">
            <div><h1 class="text-2xl mb-5">@yield('title')</h1></div>
            @if (session()->has('success'))
                <div>{{session('success')}}</div>
            @endif
            <div>@yield('content')</div>
</div>




<script src="jquery-3.7.1.min.js"></script>
<script src="jquery-ui-1.13.2/jquery-ui.js"></script>
<script src="js.js"></script>

<!-- Write your comments here 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>-->
<script src="https://kit.fontawesome.com/fbe6b2fb71.js" crossorigin="anonymous"></script>

</body>
</html>