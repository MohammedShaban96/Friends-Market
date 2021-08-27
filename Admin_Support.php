<!--connection to database-->
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "friends_market";

$describtion="";
$subcatagory="";
$image="";
$price="";
$item_date="";  
        
$connect = new mysqli($host,$user,$pass,$db_name);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no">

        <title>Friends Market</title>
        <link rel = "stylesheet" type = "text/css" href="Css_Files/font-awesome.min.css">
        <link rel = "stylesheet" type = "text/css" href="Css_Files/bootstrap.css">
        <link rel = "stylesheet" type = "text/css" href="Css_Files/style.css">

    </head>

    <body id="admin_page">

    <?php
    include "Main_Header.php";
    ?>
      <?php   
      //  insert button
      if(isset($_POST['btn_insert']))
{
   
     $describtion=$_POST['describtion'];
        $subcatagory=$_POST['subcatagory'];
    $image =$_POST['image'];
    $price =$_POST['price'];
     $item_date =$_POST['item_date'];
    $insert_Query = "insert into items (describtion,subcatg,img,price, item_date) values ('".$describtion."','".$subcatagory."','".$image."','".$price."','".$item_date."')";
        $result=mysqli_query($connect, $insert_Query);
        
        if($result)
        {
          echo "Data is inserted";
          
          
        }
        else
        {
          
          die ("Error in insert".mysqli_error($connect));
        }
        
   
}
      ?>
      <?php
      
       //select or read from database
         if(isset($_POST['btn_select']))
         {
           
           $query="select  * from items where subcatg='".$_POST['subcatagory']."' or describtion='".$_POST['describtion']."' ";
           $result=mysqli_query($connect,$query);
         
           if($result)
           {
       if(mysqli_num_rows($result))
       {       
      while($row=mysqli_fetch_array($result))
      {
        
      $describtion=$row['describtion'];
      $subcatagory=$row['subcatg'];
      $image=$row['img'];
      $price=$row['price'];
      $item_date=$row['item_date'];  
        
      }
      
         }else{echo "no data is selected for this subCatagory";}
             
           }
           else{ echo "result error";}
         }
      ?>
      
      <?php 
           
      //  delete button
      if(isset($_POST['btn_delete']))
    {
   
    $delete_Query = "delete from  items where subcatg='".$_POST['subcatagory']."' and describtion='".$_POST['describtion']."'";
        $result=mysqli_query($connect, $delete_Query);
        
        if($result)
        {
          echo "Data is Deleted";
          
          
        }
        else
        {
          
          die ("Error in delete".mysqli_error($connect));
        }
    }
      ?>
      
      <?php   
       // update  button      
      
      if(isset($_POST['btn_update']))
{
        $img=$_POST['image'];
        $price=$_POST['price'];
        $item_date=$_POST['item_date'];
        $subcatagory=$_POST['subcatagory'];
        $describtion=$_POST['describtion'];
    $update_Query = "update items set img='".$img."', price='".$price."',item_date='".$item_date."' where subcatg='".$subcatagory."' or describtion='".$describtion."' " ;
    
        $update_Result = mysqli_query($connect, $update_Query);
        
       if($update_Result)
        {
          echo "Data UPDATED";
          
          
        }
        else
        {
          
          die ("Error In UPDATE".mysqli_error($connect));
        }
}
   



      
      ?>
      
<?php mysqli_close($connect); ?>
      
      
      <div class = "container-fluid">
        <div class="row">
        <div class="adminsupport" style=" text-align:center;">
       <form action="Admin_Support.php" method="post"class="adminform2" >
         <label style="font-family:fantasy;">describtion:</label>
            <input type="text" class="login_input"name="describtion" placeholder="Enter describtion"
                   value="<?php echo $describtion;  ?>">
         <br/><br/>
         <lable >  subcatagory:</lable>
        <select name="subcatagory" value="<?php echo $subcatagory;  ?>">
         <option value="Accessories">Accessories</option>
          <option value="Hoodies">Hoodies</option>
          <option value="Coats&Jackets">Jackets</option>
           <option value="jeans">Jeans</option>
         </select> 
           <br/><br/>
            <lable>image:</lable>
            <input type="file" class="login_input" name="image"  placeholder="url"
                   value="<?php echo $image;  ?>">
           <br/><br/>
         <lable>price:</lable>
            <input type="price" class="login_input" name="price" placeholder="Enter product price" value="<?php echo $price;  ?>">
           <br/><br/>
         <label style="font-family:fantasy;"> item_date:</label>
            <input type="item_date" class="login_input" name="item_date" value="<?php echo $item_date;  ?>">
           <br/><br/>
         
         
         <button  id='buy' class='btn btn-primary' name="btn_insert" value="Insert">Insert</button>
         <button  id='buy' class='btn btn-primary' name="btn_select" value="Select">Select</button>
         <br><br>
         <button  id='buy' class='btn btn-primary' name="btn_delete" value="Delete">Delete</button>
         <button  id="buy" class='btn btn-primary' name="btn_update" value="Update" style="margin-top:3px;">Update</button>
          </form>
      </div>
        </div>
    </div>  
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      

    <?php
    include "Footer.php";
    ?>

    <script src="Js_Files/jquery-3.3.1.min.js"></script>
    <script src="Js_Files/bootstrap.min.js"></script>
    <script type="text/javascript" src="Js_Files/script.js"></script>
    </body>
</html>