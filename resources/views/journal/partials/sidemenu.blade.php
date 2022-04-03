@if(auth()->check() && auth()->user()->role=='author')
    @include('journal.partials.usermenu')
@else
 <!DOCTYPE html>

<html lang="en">

<head>
       <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    
    <style>
        
    .wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
             }
             
    #sidebar {
    min-width: 250px;
    max-width: 250px;
    min-height: 100vh;
}

   #sidebar.active {
    margin-left: -250px;
  }



#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}


#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}
#sidebar ul li a:hover {
    color: #7386D5;
    background: #fff;
}

#sidebar ul li.active > a, a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
}

        
    </style>
</head>
<body>
<div class="wrapper">
<nav id="sidebar">
<ul class="list-unstyled components">
    <li><a href="journal/new">Early Online</a>
    </li>
    <li><a href="journal/current">Current
            Issue</a></li>
    <li><a href="journal/archive">Archive</a></li>
    <li><a href="journal/most-viewed">Most Viewed
            Articles</a></li>
    <li><a href="author/dashboard">Track Your Manuscript</a></li>
    <li><a href="journal/login">Sign up for Article Alert</a></li>
    <li><a href="journal/open-access-policy">Open
            Access Policy</a></li>
    <li><a href="journal/announcement">Announcement</a></li>
    <li><a href="journal/search">Search</a></li>
</ul>
</nav>
</div>
</body>  
@endif
