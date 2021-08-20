<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Action & Thriller</title>
   
    <style>
        body {
            background-image: linear-gradient(#121216, #3E3E43, #121216);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            width: 100%;
        
        }
    </style>

</head>
<body>

        <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3 ">
                <div class="container">
                    <a href="#" class="navbar-brand"><h2 style="font-family: 'Monoton', cursive;">MOVIE BUCKET</h2></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="mx-auto"></div>
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a href="/homepage" class="nav-link text-warning " id="text">Home  &nbsp;&nbsp;&nbsp;&nbsp; </a>
                            </li>
                            <li class="nav-item">
                                <a href="/aboutus" class="nav-link text-warning" id="text">About Us  &nbsp;&nbsp;&nbsp;&nbsp; </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-warning" id="text">Login &nbsp;&nbsp;</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> 

            <div class="containerhead">
              <h2 class="text-white" style="font-size: 40px;">Action & Thriller Movies</h2><br><br><br><br>
            </div>   

           <div class="container py-5">
              <div class="row">

                 @foreach($showmovies as $showmovie)
                   @if($showmovie->keyword=="action")
                        <div class="col-md-3">
                            <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('/images/' . $showmovie->mimage) }}" width="100%" height="400px" alt="...">
                                <center><br>
                                
                                <h4 class="card-title">{{$showmovie->mname}}</h4>
                                <h5 class="card-title">{{$showmovie->myear}}</h5>
                                <a href="/search/{{$showmovie->id}}"><button class="btn btn-success">View</button></a>
                                </center>
                            </div>
                            </div><br>
                        </div>
                    @endif    
                 @endforeach

              </div>
           </div>
            
     <script>
            var nav = document.querySelector('nav');

            window.addEventListener('scroll', function() {
                if(window.pageYOffset > 100) {
                    nav.classList.add('bg-dark', 'shadow');
                } else {
                    nav.classList.remove('bg-dark', 'shadow');
                }
            });
    </script> 
</body>
</html>