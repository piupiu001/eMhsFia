<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    @livewireStyles {{--perintah untuk pemanggilan css --}}
  </head>
  <body>
    <!-- LOGO -->
    <nav class="navbar navbar-dark bg-info">
      <a class="navbar-brand" href="#">
        <img src="https://img.freepik.com/premium-vector/cute-happy-fox-cartoon-vector-icon-illustration-animal-nature-icon
        -concept-cute-happy-fox-logo_617647-12.jpg?w=2000" width="100" height="100" alt="">
      </a>
    </nav>

    <div class="container mt-4">
      @livewire('form-artikel') {{--VIEW FOLDER LIVEWIRE - FORM--}}
      @livewire('index-artikel') {{--VIEW FOLDER LIVEWIRE - INDEX--}}
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    @livewireScripts {{--perintah untuk pemanggilan javascript  --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>