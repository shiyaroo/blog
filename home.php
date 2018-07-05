

<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title> Blog task </title>

<style type="text/css">
body {
  margin: 0;
    padding: 10px;
    width: 1000px;
margin-left: auto;
    margin-right: auto;
   font-family: Arial, Helvetica, sans-serif; 
background-color: #73b4d1;
text-align: center;
color: white;
height: auto;
}
//background-image: url('bg.jpg');
border-style: solid;
    border-width: 1px;
//

</style>
<link rel="stylesheet" href="style.css" media="all">

</head>

<body>
  <div style="color: white; float: left; text-align: left;   borer:solid; " >
    <h1 > Blog</h1>
     <h4  >Welcome <?php echo $_SESSION['username']; ?></h4>
     
    <button >
    <a href="logout.php" style="width: 45px; height: 35px; border-bottom: solid; "  >Log Out</a> 
     </button>
   

<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
 </div>
 
<header>


<div class="topnav" >
      
        <a class="active" href="home.php">Home</a>
        <a href="news.php">News</a>
        <a href="add.php">Add Post</a>
        <a href="contact.php">Contact</a>
        <a href="register.php">Register</a>
       <div class="search-container">
    <form action="search.php">
  <input type="text" placeholder="Search.." name="search">

  <button type="submit" style="width: 30px; height: 30px; " > </button>
</form>

</div>
    </div>
  	




</header>


<section style="float: right; text-align: center; color: black;
   height: 200px;
   width: 24%;
   margin: 0;
   border:------------ solid; 
    border-color: red; 
        border-width: 1px; 
       padding: 10px; ">
  
<h2 style="text-align: center;">Recent Posts</h2>
<div>
<?php
include("connect.php");

$query=" select * from posts order by 1 DESC LIMIT 0,5";

$run = mysql_query ($query);

while ($row=mysql_fetch_array($run)){
  
  $post_id=$row['post_id'];
  $post_title=$row['post_title'];
  $post_auther=$row['post_auther'];

?>


<center> 

<h3><?php echo $post_title; ?></h3></a>

<a href="pages.php?id=<?php echo $post_id; ?>"> </a>

</center>
<?php } ?>


  </div>

<div style=" text-align: center; border-top: outset;   background-color: gray; width: 200px;     overflow:auto;

">
<h4 style="text-align: center;" >FOLLOW US</h4>
<a href="https://www.facebook.com/shiyaroo.ali" target="blank"><img src="pic/f.png" height="50" width="50" padding="10" ></a>

<a href="https://plus.google.com/u/1/115270900787917817178" target="blank"><img src="pic/g.png" height="50" width="50" padding="10"  ></a>

<a href="https://www.youtube.com/user/rrodi1980" target="blank"><img src="pic/u.png" height="50" width="50" padding="10" ></a>

<a href="https://www.instagram.com/shiyar.kurdish" target="blank"><img src="pic/i.png" height="50" width="50" padding="10" ></a>

<a href="https://twitter.com/shiyaroo" target="blank"><img src="pic/t.png" height="50" width="50" padding="10" ></a>

<a href="https://vk.com/shiyarkurdish" target="blank"><img src="pic/vk.png" height="50" width="50" padding="10" ></a>



<h5>CALL:+380633965886 </h5>

  <h5 >SHIYAR.90@GMAIL.COM</h5>

</div>
</section></p>

 
  
<section  >
<div style="text-align:left;
height: auto; 
width: 73.5%;
 border-------solid;
  border-color: black;
      border-width: 1px;
      float: left; ">
	<h1 > Welcome To our blog  </h1>
 
<?php include  ("main_content.php"); ?>


</div>

</section>

</body>
</html>
