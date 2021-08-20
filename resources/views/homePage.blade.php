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
    <title>Movie Bucket</title>

   

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
                        <a href="#" class="nav-link text-warning " id="text">Home  &nbsp;&nbsp;&nbsp;&nbsp; </a>
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

    <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
        
    </div>

    <div class="bg-text">
        <h2 class="text-white">The best free movies in one website.</h2>
        <h3 class="text-white">Best quality & HD small size</h3><br>
        <form class="d-flex" action="/data" method="POST">
        @csrf
        <input class="form-control me-1" type="search" name="sname" placeholder="Search movies" >
        <button class="btn btn-success" type="submit">Search</button>
        </form><br><br>
    </div>
    
    <div class="bg-dark">
        <div class="p-5 border">
            <h1 style="font-family: 'Monoton', cursive; color:whitesmoke; text-align:center;">Top &nbsp;&nbsp; Catogories</h1>
        </div>
        
        <div class="d-flex justify-content-around">
            <div class="w-25" id="containerimg">
                <img src="/images/j1.jpg" alt="Avatar" class="image" style="width:100%; height:600px">
                <div class="middle">
                    <div>
                        <a href="/action"><button class="btn btn-success">Action & Thriller</button></a>
                    </div>
                </div>
            </div>
            <div class="w-25" id="containerimg">
                <img src="/images/a1.jpg" alt="Avatar" class="image" style="width:100%; height:600px">
                <div class="middle">
                    <div>
                        <a href="/sciencefic"><button class="btn btn-success">Sceince Fiction</button></a>
                    </div>
                </div>
          </div>
            <div class="w-25" id="containerimg">
            <img src="/images/solo.jpg" alt="Avatar" class="image" style="width:100%; height:600px">
            <div class="middle">
                <div>
                    <a href="/horror"><button class="btn btn-success">Horror</button></a>
                </div>
            </div>
          </div>
          
        
        </div>
        <br><br><br><hr style="color: whitesmoke;">
        
        
    </div>
   
    <div class="footer-dark">
    <footer id="footer">
        <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <h3>Request</h3>
                            <ul>
                                <li><a href="#">Movies</a></li>
                                <li><a href="#">upcoming Movies</a></li>
                                
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 item">
                            <h3>About</h3>
                            <ul>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Team</a></li>
                                
                            </ul>
                        </div>
                        <div class="col-md-6 item text">
                            <h3>Movie Bucket</h3>
                            <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                        </div>
                        <div class="col item social"><a href="#"><i class="fa fa-facebook-square" style="font-size:30px;color:blue"></i></a><a href="#"><i class="fa fa-instagram" style="font-size:30px;color:pink"></i></a><a href="#"><i class="fa fa-telegram" style="font-size:30px;color:lightblue"></i></a></div>
                    </div>
                    <p class="copyright">Movie Bucket © 2018</p>
                </div>

        </footer>
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