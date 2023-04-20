   
        <?php

    // Connect to database
    $con = mysqli_connect("localhost","root","","test");

        if(isset($_POST['submit'])){
            $price=$_POST['price'];
            $discount =$_POST['discount'];
            $selling  = $price - ($price * ($discount / 100));
            echo $selling;
            
            $sql = "INSERT INTO maths (discount) VALUES ($selling)";
            $test=mysqli_query($con,$sql);
            
            if($test){
                echo "success";
            }else{
                echo "denied";
            }


            }
      
             ?>
             
    <form method="post">
    <h1>Price:</h1>
           <input type="text" name="price"  placeholder="price">
            <br>
            <h1>discount</h1><input type="text" name="discount"  placeholder="Discount">
       <input type="submit" name="submit">
    </form>
