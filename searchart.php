<?php include("includes/connection.php");
include("includes/head.php");?>

<!DOCTYPE html>
<html>
<head>
    <style>
    .head-my {
             font-size: 30px;
              font-family: "Yu Gothic UI Light";
              color: rgb( 45, 112, 213 );
              position: absolute;
              left: 68px;
              top: 180px;
              z-index: 19;
        }


        .hr{
            position: relative;
            border: 1px solid #2d70d5;
            top: 180px;
            width: 1130px;
            left: 0px;
        }

     select {
           border-radius: 8px;
           box-shadow: 1px 1.732px 5px 0px rgb( 55, 52, 52 );
          border: 1px solid steelblue;
          background-color: white;
          font-family: "Yu Gothic UI Light";
          position: relative;
          left: 200px;
          top: 150px;
          width: 250px;
          height: 50px;
        }

       input{
           border-radius: 8px;
           box-shadow: 1px 1.732px 5px 0px rgb( 55, 52, 52 );
           border: 1px solid rgb(33,33,33);
          font-weight: bold;
          background-color: #234;
          font-family: "Yu Gothic UI Light";
          color: white;
          position: relative;
          left: 200px;
          top: 150px;
          width: 150px;
          height: 50px;
       }
         .unlist{

          background-color: #2d70d5;
          box-shadow: 1px 1.732px 2px 0px rgb( 55, 52, 52 );
          position: absolute;
          left: 420px;
          top: 70px;
          width: 386px;
          height: 38px;
          z-index: 2;

        }


        .list2 {
          float: left;
          overflow: auto;
          border-right: 1.5px solid #f2f2f2;
        }
        .list2:last-child{
          border-right: none;
        }

        .list2 .link2 {
          display: block;
          color: #234;
          font-size: 17px;
          font-family: "Yu Gothic UI Light";
          font-weight: bold;
          padding: 8px 10px  8px 10px;
          text-decoration: none;

         }

       .list2 .link2:hover {
          background-color: #f2f2f2;
        }

        .photo {
            position: relative ;
            width: 300px;
           height : 250px;
        }

    .desc-title{
        color:#2d70d5;
        font-variant: small-caps;
        font-family: "Yu Gothic UI Light";
        font-size: 29px;
        position: relative;
        top: 0px;
        left: 5px;
        text-decoration: none;
    }
    .desc-content{
        position: relative;
        font-size: 18px;
        font-family:  "Yu Gothic UI Light";
        top: 0px;

    }
    .desc-content2{
        position: relative;
        font-size: 18px;
        font-family:  "Yu Gothic UI Light";
        top: -20px;
    }

     .pic-table{
            border: 8px solid white;
            box-shadow: 0px 6px 20px 0px rgba(0, 0, 0, 0.2);
            background-color: #fafafa;
            border-collapse: collapse;
            float: left;
            overflow: auto;
            margin: 0px 50px 50px 0px;
        }
        .space{
          margin-top: 100px;
          position: relative;
          left:130px;

        }
        .back{
          border-radius: 8px;
          text-decoration: none;
          border: 1px solid none;
          background-color: #43b353;
          padding:7px;
          color: #234;
        font-size: 20px;
        font-family:  "Yu Gothic UI Light";
        position: absolute;
        top: 80px;
        left: 70px;
    }
    select {
           border-radius: 5px;
           box-shadow: 1px 1.732px 5px 0px rgb( 55, 52, 52 );
          border: 1px solid steelblue;
          background-color: white;
          font-family: "Yu Gothic UI Light";
          position: relative;
          left: 200px;
          top: 80px;
          width: 250px;
          height: 40px;
        }

       input{
           border-radius: 5px;
           box-shadow: 1px 1.732px 5px 0px rgb( 55, 52, 52 );
           border: 1px solid rgb(33,33,33);
          font-weight: bold;
          background-color: #234;
          font-family: "Yu Gothic UI Light";
          color: white;
          position: relative;
          left: 200px;
          top: 80px;
          width: 150px;
          height: 40px;
       }
    </style>

</head>
<body>

                <form action="searchart.php" method="POST">
                <select id="Category" name="Category">

                 <option value="">CATEGORY</option>
                 <option value="Painting">Paintings</option>
                 <option value="Sculpture">Sculpture</option>
                 <option value="Photography">Photography</option>
                 <option value="Drawing">Drawings</option>

                  </select>

                  <select id="medium"  name="Medium">
                  <option value="">FOR PAINTIN MEDIUM  </option>
                 <option value="Airbrush">Airbrush</option>
                 <option value="Enamel">Enamel</option>
                 <option value="Gouache">Gouache</option>
                 <option value="Acrylic">Acrylic</option>
                 <option value="Oil">Oil</option>
                 <option value="Spray Paint">Spray Paint</option>
                 <option value="Tempera">Tempera</option>
                 <option value="Watercolor">Watercolor</option>
                 <option value="Ink">Ink</option>
                 <option value="Gesso">Gesso</option>

  <option value="">FOR SCULPTURE MEDIUM </option>
                 <option value="Ceramic">Ceramic</option>
                 <option value="Clay">Clay</option>
                 <option value="Digital">Digital</option>
                 <option value="Fiberglass">Fiberglass</option>
                 <option value="Pottery">Pottery</option>
                 <option value="Fabric">Fabric</option>
                 <option value="Neon">Neon</option>
                 <option value="Glass">Glass</option>
                 <option value="Interactive">Interactive</option>
                 <option value="Latex">Latex</option>
                 <option value="Leather">Leather</option>
                  <option value="LED">LED</option>
                  <option value="Metal">Metal</option>
                  <option value="Mosaic">Mosaic</option>
                  <option value="Paint">Paint</option>
                  <option value="Paper">Paper</option>
                  <option value="Paper Mache">Paper Mache</option>
                  <option value="Plastic">Plastic</option>
                  <option value="Rubber">Rubber</option>
                  <option value="Stone">Stone</option>
                  <option value="Wax">Wax</option>
                  <option value="Wood">Wood</option>
                  <option value="Steel">Steel</option>
                  <option value="Bronze">Bronze</option>
                  <option value="Granite">Granite</option>
                  <option value="Marble">Marble</option>

                <option> FOR DRAWING MEDIUM</option>
                 <option value="Ballpoint Pen">Ballpoint Pen</option>
                 <option value="Chalk">Chalk</option>
                 <option value="Charcoal">Charcoal</option>
                 <option value="Digital">Digital</option>
                 <option value="Graphite">Graphite</option>
                 <option value="Ink">Ink</option>
                 <option value="Marker">Marker</option>
                 <option value="Pastel">Pastel</option>
                 <option value="Pencil">Pencil</option>

      <option value="">FOR PHOTOGRAPHY MEDIUM</option>
                 <option value="Polaroid">Polaroid</option>
                 <option value="Color">Color</option>
                 <option value="Digital">Digital</option>
                 <option value="C-type">C-type</option>
                 <option value="Black & White">Black & White</option>
                 <option value="Photogram">Photogram</option>
                 <option value="Platinum">Platinum</option>
                 <option value="Gelatin">Gelatin</option>
                 <option value="Manipulated">Manipulated</option>


                  </select>
                  <select id="Price" name="Price">

                  <option value="">PRICE</option>
                 <option value="5001">less than 5,000 pesos</option>
                 <option value="10001">less than 10,000 pesos</option>
                 <option value="50001">less than 50,000 pesos</option>
                 <option value="500001">less than 500,000 pesos</option>
                  <option value="1000001">less than 1,000,000 pesos</option>

                  </select>

                 <input type="submit" name="submit" value="SEARCH">

                  </form>


<br>
<a class ="back" href="artworks.php"> &#10096;&#10096; Go Back </a>

<?php
$category = $_POST['Category'];
$medium = $_POST['Medium'];
$price = $_POST['Price'];

            $query_category="SELECT art_work.art_imagepath,art_work.art_id, art_work.art_title,art_work.art_price, user.user_fname, user.user_mname,user.user_lname,art_work.art_description,art_work.art_imagepath,art_work.art_category
                         FROM art_work,user
                        where art_work.user_id = user.user_id AND (art_category = '$category') OR (art_media = '$medium') OR (art_price between 0 AND '$price') GROUP BY art_work.art_id ORDER BY art_work.art_title ASC
                            ";
            $result_category = mysqli_query($conn,$query_category);
 if(mysqli_num_rows($result_category) <=0)
        {
            echo '<br><br><br><br><br><br><br><br><br><h1 align="Center">No Results found </h1>';
        }
        else{
            while($row = mysqli_fetch_array($result_category))
{

               echo ' <div class="space" >
                            <table  class="pic-table">
                                <tr>
                                    <td>
                                        <img class="photo" src="pictures/arts/'.$row['art_imagepath'].'" > <br>'.

                                        '<a  href=info_art.php?id='.$row['art_id'].' class="desc-title"> '.$row['art_title'].' </a>

                                         <p class="desc-content">'.$row['art_category'].'</p>

                                         <p class="desc-content" style="float: right;">P'.$row['art_price'].'.00</p> <br>

                                         <p class="desc-content2">'.$row['user_fname'].' '.$row['user_mname'].' '.$row['user_lname'].'</p>
                                    </td>
                                </tr>
                            </table>
                        </div>';
            }
        }
        ?>
    </div>
</body>
</html>
