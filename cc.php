
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
    <script src="https://ajax.com.goggleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootsrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOBILE HUB</title>

<style>
body
{
    margin: 0;
    padding: 0;
    text-align: center;
    background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(Iphone-X-HD.jpg);
    background-size:cover;
    background-position:center;
    font-family:sans-serif;    
}
.contact-title
{
 margin-top:100px;
 color:#ffff;
 text-transformation: uppercase;
 transition:all 4s ease-in-out;    
}
.contact-title h1
{
    font-size:32px;
    line-height:10px;
}
.contact-title h2
{
    font-size:16px;
}

form
{
    margin-top:50px;
    transition:all 4s ease-in-out;
}
.form-control
{
    width:600px;
    background:transparent;
    border:none;
    outline:none;
    border-bottom:1px solid gray;
    color:#fff;
    font-size:18px;
    margin-bottom:16px;
}
input
{
    height:45px;
}
form.submit 
{
    background:#ff5722;
    border-color:transparent;
    color:#fff;
    font-size:20px;
    font-weight:bold;
    letter-spacing:2px;
    height:50px;
    margin-top:20px;
}

form .submit:hover
{
    background-color:#f44336;
    cursor:pointer;
}
</style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MOBILE HUB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-2">
        
        

  <li class="nav-item dropdown">
          
          <div class="container mt-3">
  <center>
    <div class="btn-group">
     <a href="project.php" button type="button" class="btn btn-primary" >HOME</a>
     <a href="index.php" button type="button" class="btn btn-primary">BEST SELLER</a>
     <a href="gallery.php" button type="button" class="btn btn-primary">GALLERY</a>
     <a href="contact.php" button type="button" class="btn btn-primary">CONTACT US</a>
     <a href="rate.html" button type="button" class="btn btn-primary">SUPPORT US</a>
     <a href="table.html" button type="button" class="btn btn-primary">COMPARISON</a>
    </center>
    </div>
        </ul>       
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="contact-title">
    <h1> SAY HELLO </h1>
    <h2> WE ARE READY TO SERVE YOU !!</h2>
</div>

<div class="contact-form">
    <form id="contact-form" method="post" action="">
        <input name="name" type="text" class="form-control" placeholder="your name" required>
        <br>
        <input name="email" type="email" class="form-control" placeholder="your email" required><br>

        <textarea name="message" class="form-control" placeholder="message" row="4" required></textarea><br>

        <input type="submit" class="form-control submit" value="SEND MESSAGE">
