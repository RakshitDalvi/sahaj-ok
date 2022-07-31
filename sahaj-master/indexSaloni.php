<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="styleSaloni.css">
        <title>Patient Information</title>
    </head>
    
    <header>
        <div class="flex">
            <div class="logo">
                <!--<a href="#"><img src="https://www.pngmart.com/files/6/Healthcare-PNG-Free-Download.png" alt="Healthcare" style= "width= 40px height= 5px"/></a>-->
            </div>
            <nav>
                <button id="nav-toggle" class="hamburger-menu">
                    <span class="strip"></span>
                    <span class="strip"></span>
                    <span class="strip"></span>
                </button>
                <ul id="nav-menu-container">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Help desk</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
    <table class="tbl">
          <tr>
              <td>Sr.No</td>
              <td>Name</td>
              <td>Sex</td>
              <td>DoB</td>
              <td>Mobile</td>
              <td>Blood Group</td>
          </tr>
          <?php
                include "dbconn.php";
                
                $records = mysqli_query($conn,"*select id,name,age,address,blood group,phone,dob,gender,medical where id='UserID' ");
                if(!$result){
                    echo 'could not run query' .mysql_error();
                    exit;
                }
                $row= mysql_fetch_row($result);
                echo $row['UserID'];
                // while($data = mysqli_fetch_array($records))
                // {
                //     ?>
                //     <tr>
                //         <td class="tblrow"></td>
                //         <td><?php echo $data['name'];?></td>
                //         <td><?php echo $data['gender'];?></td>
                //         <td><?php echo $data['dob'];?></td>
                //         <td><?php echo $data['phone'];?></td>
                //         <td><?php echo $data['blood group'];?></td>
                //     </tr>
                //     <?php
                // }
              ?>
      </table>
      <?php mysqli_close($conn);?> 
    </main>

</html>