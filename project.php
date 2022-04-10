<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>PORTFOLIO WEBSITE</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .bo {
            background-image: url(ga.jpg);
            height: 700px;
            width: 100%;
            color: white;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin-top: 50px;
        }
        

        image {
            height: 400px;
            width: 400px;
            margin-top: 50px;
            margin-left: 40px;
            border-radius: 40px;

        }

        .imagesl {
            height: 500px;
            width: 600px;

            display: none;
        }

        .imco {
            margin-left: 300px;
            margin-top: 30px;
            height: 500px;
            width: 600px;
        
        }
    </style>
</head>

<body>

        
<div class="container mt-3">
  <center>
    <div class="btn-group">
     <a href="project.php" button type="button" class="btn btn-primary">HOME</a>
     <a href="index.php" button type="button" class="btn btn-primary">BEST SELLER</a>
     <a href="gallery.php" button type="button" class="btn btn-primary">GALLERY</a>
     <a href="contact.php" button type="button" class="btn btn-primary">CONTACT US</a>
     <a href="rate.html" button type="button" class="btn btn-primary">SUPPORT US</a>
     <a href="table.html" button type="button" class="btn btn-primary">COMPARISON</a>
    </center>
    </div>

    <div class="con">

        <div class="box">
            <p class="p"style="color:white;">
                HELLO WELCOME THIS WEBSITE.HERE YOU CAN SEE ALL ABOUT MOBILE MODELS WITH THEIR SPECIFICATIONS
            </p>
        </div>
    </div>
    <div style="display: flex; margin-top: 40px; height: 400px; width: 100%;">
        <img src="spe.webp">
        <p style="margin-top: 100px; margin-left: 500px; font-size: 50px;"> CONNECT EVERYONE </p>
    </div>
    <div style="display: flex; margin-top: 40px; height: 400px; width: 100%;">
        <p style="margin-top: 100px; margin-left: 50px; font-size: 70px;"> EASY SURF </p>
        <img src="ro.webp" style="margin-left: 500px;">
    </div>

    <div class="bo">

    </div>
    <div style=" background-color: grey;padding: 1px ;">
        <p style="margin-top: 50px; margin-left: 200px; font-size: 70px; color: greenyellow ;">BETTER GAMING EXPIRENCE
        </p>
    </div>
    <div class="imco">
        <img src="img1.jpg" class="imagesl" style="display: block;" width="50%">
        
    </div>

    <div class="container mt-3" >
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="index.php">Next</a></li>
        </ul>
      </div>

    
</body>

<script>
    var index = 1
    function my(x) {
        var a = 0
        var b = x
        if (index < 3) {
            document.getElementsByClassName("imagesl")[index].style.display = "block"
            for (let i = 0; i < index; i++) {
                document.getElementsByClassName("imagesl")[i].style.display = "none"
            }

            index = index + b
            console.log(index)
        }
        else {
            document.getElementsByClassName("imagesl")[2].style.display = "none"
            index = 0
            document.getElementsByClassName("imagesl")[index].style.display = "block"
            index = index + 1

        }
    }


</script>

</html>
