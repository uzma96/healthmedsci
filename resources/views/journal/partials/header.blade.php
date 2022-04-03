<!DOCTYPE html>
<html>
<head>
	<title>International Journal Of Pharmaceuticals Sciences</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style type="text/css">
    	.nav-link{
    		color:white;
    	}

    	.nav-link:hover{
    		color:grey;
    	}

    	.btn:hover{
    		background-color: grey;

    	}   

    	.jumbotron{
    		display: flex;
    		justify-content: center;
    	} 	
    </style>
</head>
<body>
	

<nav class="navbar navbar-light bg-light d-flex justify-content-between">
      <a class="nav-link" href="//healthmedsci.org">
            
                    <img src="public/assets/web/images/log.png" alt="logo">
                </a>
    <h2>International Journal of Pharmaceutical Sciences</h2>

 @if(Auth::check())
                            @if(auth()->user()->role=='author')
                                  <button onclick="document.location='author/dashboard'" class="btn btn-outline-dark mr-sm-0" type="submit"> {{Auth::user()->first_name.' '.auth()->user()->last_name}}
                                    ({{Auth::user()->role}})</button>
                                    
                            @else
                                  <button onclick="document.location='admin/dashboard'" class="btn btn-outline-dark mr-sm-0" type="submit"> {{Auth::user()->first_name.' '.auth()->user()->last_name}}
                                    ({{Auth::user()->role}})</button>
                            @endif
                            
                            @else
                            
                                <button onclick="document.location='journal/login'" class="btn btn-outline-dark mr-sm-0" type="submit">Login</button>
                            @endif
                            
@if(Auth::check())          
                            <button onclick="document.location='logout'" class="btn btn-outline-dark mr-sm-0" type="submit">Sign Out</button>
@endif
</nav>
<nav class="navbar navbar-dark bg-dark d-flex justify-content-center">
    <ul class="nav navbar">
    	                <li class="nav-item"><a class="nav-link" href="journal">Journal Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="page/about-the-journal">About the Journal</a></li>
                        <li class="nav-item"><a class="nav-link" href="page/scope-of-the-journal">Scope of the Journal</a></li>
                        <li class="nav-item"><a class="nav-link" href="page/journal-indexing">Journal Indexing</a></li>
                        <li class="nav-item"><a class="nav-link" href="page/editorial-board">Editorial Board</a></li>
                        <li class="nav-item"><a class="nav-link" href="page/guide-for-authors">Guide For Authors</a></li>
                        <li class="nav-item"><a class="nav-link" href="author/submit-menuscript">Submit Your Manuscript</a></li>
                        <li class="nav-item"><a class="nav-link" href="author/newFile">New File</a></li>
                        <li class="nav-item"><a class="nav-link" href="journal/contact">Contact Us</a></li>
    </ul>

</nav>

</body>
</html>
