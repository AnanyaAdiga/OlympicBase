<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="title" content="OLYMPIC BASE">
    <meta name="description" content="The Olympic Medallists Database">
    <meta name="author" content="Bhommika & Gagana">
    <link href="/images/favicon.ico" rel="shortcut icon">
    <title>COMMENTS</title>

    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
    </script>


    <!--Font Awesome CDN-->
    <script src="https://kit.fontawesome.com/c93e5b0e53.js" crossorigin="anonymous">
    </script>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  text-align: center;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: #D6EEEE;
}
</style>
</head>
<body>
<div>
          <nav style="text-align:right;">
            <p class="header-links">
              <a href="/index.php" class="px-2">HOME</a> |
              <a href="#footer" class="px-1">ABOUT US</a> |
              <a href="/login.php" class="px-2">LOGIN</a>
            </p>
          </nav>
        </div>
    <div class="container"> 
        <div class="row">
          <div class="text-center">
            <h2 class="site-title desc" style="font-size:40px; font-family:Verdana, Geneva, Tahoma, sans-serif; color:#DC143C">Comments</h2>
          </div>
        </div>
    </div>
    <table>
      <tr>
        <th>Comment ID</th>
        <th>User Name</th>
        <th>Comment</th>
      </tr>
    <?php
      $conn=mysqli_connect("localhost","root","","olympic_base");
      $sql="SELECT * FROM comments";
      $result=$conn->query($sql);
      if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
          echo "<tr><td>".$row["C_id"]."</td><td>".$row["Name"]."</td><td>".$row["Message"]."</tr>";
        }
      }
        else{
          echo "no results";
        }
      $conn->close();
    ?>
    </table>
    <form action="" method="post">
      <table>
      <tr>
      <th><div class="col-75">
        <input type="text" name="Name" placeholder="Name.." required>
      </div></th>
      <th><div class="col-75">
        <input type="text" name="Message" placeholder="Comment.." required>
      </div></th>
    </tr>
      </table>
    <div class="row">
      <input type="submit" name="submit">
    </div>
    </form>
    <?php
    $db=mysqli_connect("localhost","root","","olympic_base");
    if($db==true){
      echo "connected";
    }
    if(isset($_POST['submit'])){
      echo "posted";
      $Name=htmlentities($_POST["Name"]);
      $Message=htmlentities($_POST["Message"]);
    $sql="INSERT INTO `comments` (Name, Message) VALUES
    ('$Name', '$Message');";
    if(mysqli_query($db, $sql))
        echo "Inserted!";
      }
      $db->close();
    ?>
    <p class="text-center">FOR DELETION:</p>
<form action="" method="post">
      <table>
      <tr>
      <th><div class="col-75">
        <input type="text" name="C_id" placeholder="Comment id.." required>
      </div></th>
    </tr>
      </table>
    <div class="row">
      <input type="submit" name="delete">
    </div>
    </form>
    <?php
    $db=mysqli_connect("localhost","root","","olympic_base");
    if($db==true){
      echo "connected";
    }
    if(isset($_POST['delete'])){
      echo "posted";
      $C_id=htmlentities($_POST["C_id"]);
    $sql="DELETE FROM `comments` WHERE C_id=$C_id;";
    if(mysqli_query($db, $sql))
        echo "Deleted!";
      }
      $db->close();
    ?>
<!-- footer -->
<footer id="footer" class="text-center" style="background-color:#E6E6FA">
    <a href="https://www.linkedin.com/in/bhoomika-poojari/" add target="_blank"> <i class=" foot fab fa-linkedin fa-lg"></i></a>
    <a href="https://www.linkedin.com/in/gagana-darshana/" add target="_blank"><i class=" foot fab fa-linkedin fa-lg"></i></a>
    <a href="mailto:poojaribhoomika5@gmail.com" add target="_blank"><i class=" foot fas fa-envelope fa-lg "></i></a>
    <a href="mailto:gagana.darshana@gmail.com" add target="_blank"> <i class=" foot fas fa-envelope fa-lg"></i></a>
    <p class="cp"> Built by Bhoomika.B.Poojari & Gagana <br>*This website consists of results of only selected games and it's events.</p>
  </footer>
  <!-- /footer  -->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
          crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
          integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" 
          crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
          integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
          crossorigin="anonymous">
        </script>

</body>
</html>