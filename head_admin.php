<?php
session_start();
include("includes/connection.php"); ?>
<!DOCTYPE html>
 <html>
 <head>
  <title>Home</title>

  <style>
         body {
                margin:0 auto;
                height: 100%;
                width: 100%;
                background: url(pictures/ForBackground.jpg) no-repeat fixed;
                background-size: cover;
         }

        .ART {
           text-indent: -99px;
          margin-top: 15px;
          font-size: 35px;
          font-family: "Yu Gothic UI";
          color: rgb( 45, 112, 213 );
          text-align: center;

          position: absolute;
          left: 0px;
          top: -15px;
          width: 215px;
          height: 35px;
          z-index: 19;
        }

        ._BAY {
          text-indent: 120px;
          margin-top: 15px;
          font-size: 35px;
          font-family: "Yu Gothic UI";
          color: rgb( 20, 20, 20);
          text-align: center;
          position: absolute;
          left: -40px;
          top: -15px;
          width: 215px;
          height: 35px;
          z-index: 19;
        }

        .Albay_ {

          margin-top: 97px;
          font-size: 13px;
          font-family: "MingLiU_HKSCS-ExtB";
          color: #f5f5f5;
          text-align: left;
          position: absolute;
          left: 78px;
          top: -55px;
          width: 215px;
          height: 35px;
           z-index: 3;
        }

        .Original_ {

          margin-top: 97px;
          font-size: 13px;
         font-family: "MingLiU_HKSCS-ExtB";
          color: #f5f5f5;
          text-align: left;
          position: absolute;
          left: 120px;
          top: -55px;
          width: 215px;
          height: 35px;
           z-index: 3;
        }

        .Artworks_ {

          margin-top: 97px;
          font-size: 13px;
          font-family: "MingLiU_HKSCS-ExtB";
          color: #f5f5f5;
          text-align: left;
          position: absolute;
          left: 180px;
          top: -55px;
          width: 215px;
          height: 35px;
          z-index: 3;
        }

        ul {

          background-color: #333d46;
          box-shadow: 1px 1.732px 2px 0px rgb( 55, 52, 52 );
          position: absolute;
          left: -10px;
          top: -15px;
          width: 1249px;
          height: 65px;
          z-index: 1;

        }

        li {
          float: left;
          overflow: auto;
          padding: 5px ;
        }

        li a {
          display: block;
          color: white;
          font-size: 14px;
          font-family: "Yu Gothic UI Light";
          margin:18px 10px 0px 50px;
          text-decoration: none;

         }

        li a:hover:not(.logo) {
          border-bottom: 2px solid #2d70d5;
        }

         /*Explore Hover Dropdown-Admin Dropown*/
.dropbtn3 {
          border-radius: 10px;
          background-color: #2d70d5;
          color: white;
          padding: 8px;
          font-size: 16px;
          border: none;
          cursor: pointer;
        }

        .dropbtn3:hover, .dropbtn3:focus {
          background-color: grey;
        }
        .dropdown3 {
          position: absolute;
          top: 16px;
          left: 1070px;
          display: inline-block;
          z-index: 100;
        }

         .dropdown-content3 {
           display: none;
           position: absolute;
           background-color: #f9f9f9;
           font-size: 13px;
           min-width: 160px;
          overflow: auto;
           box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
         }
        .dropdown-content3 a {
           color: black;
           padding: 10px 10px;
           text-decoration: none;
           display: block;
        }
         .dropdown3 a:hover {
          background-color: #f1f1f1;

        }
         .show {
          display:block;
        }
 /*Explore Hover Dropdown*/
        .dpbtn {
   border-radius: 10px;
          background-color: #2d70d5;
    color: white;
    padding: 8px;
    font-size: 13px;
    border: none;
    cursor: pointer;
}

.dpdown {
    position: absolute;
      top: 16px;
      left: 240px;
    display: inline-block;
    z-index: 30;
}

.dpdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #f9f9f9;
    font-size: 13px;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dpdown-content a {
    color: black;
    padding: 10px 10px;
    text-decoration: none;
    display: block;
}

.dpdown-content a:hover {background-color: #f1f1f1}

.dpdown:hover .dpdown-content {
    display: block;
}

.dpdown:hover .dpbtn {
    background-color: grey;
}
  </style>

</head>
<body>

 <div class="dpdown">
  <button class="dpbtn">Explore </button>
  <div class="dpdown-content" style="left:0;">
                   <a href="artworks.php">Artworks</a>
                    <a href="artist.php">Artists</a>
                     <a href="artists_guide.php">Art Guide</a>
                     ------------------------------------<br>
                    <a href="about_us.php"> About ART+BAY</a>
  </div>
</div>


  <h1 class="ART">ART </h1>
  <h1 class="_BAY">+BAY </h1>

  <h2 class="Albay_">Albay </h2>
  <h2 class="Original_">Original </h2>
  <h2 class="Artworks_">Artworks </h2>

<ul> <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li><a href="admin_user.php">USERS</a></li></li> <li>
   <a href="admin_artworks.php">ARTWORKS</a> </li> <li>
   <a href="admin_orders.php">ORDERS</a> </li> <li>
   <a href="admin_comment.php">COMMENTS</a> </li> <li>

   <a href="admin_rating.php">RATINGS</a> </li>

   <?php if(isset($_SESSION['USER_ID'])){
    $id = $_SESSION['USER_ID'];
            $query_category="SELECT user_fname,user_mname,user_lname FROM user WHERE user_id = '$id'";
            $result_category = mysqli_query($conn,$query_category);

            while($row=mysqli_fetch_array($result_category)){
              //<a href= "pictures/arts/'.$row[0].'">
              echo
                 '<div class="dropdown3">'.
                    '<button onclick="myFunction()" class="dropbtn3">' .$row['user_fname'].' '.$row['user_mname'].' '.$row['user_lname']. ''.''. '&#9660;'. '</button>'.'
                       <div id="myDropdown" class="dropdown-content3">
                        <a href="account_home.php">My ART+BAY Admin</a>
                         <a href="admin_editprofile.php">Account Profile</a>
                            <a href="logout.php">Log Out</a>

                       </div>
                  </div>';
            }


}else{
    include("portal.php");
}




?>

</ul>
 <script>
        function myFunction() {
           document.getElementById("myDropdown") .classList.toggle("show");
        }
         window.onclick = function(event) {

           if(!event.target.matches('.dropbtn3')){

             var dropdowns = document .getElementsByClassName ("dropdown-content3");
             var i; for(i=0; i < dropdowns.length; i++) {

               var openDropdown = dropdowns[i];
                 if (openDropdown.classList.contains ('show')) {

                  openDropdown.classList.remove('show');
                 }
             }
           }
         }

      </script>

</body>
</html>