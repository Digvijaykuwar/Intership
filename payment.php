<?php include './connection.php' ?>

<?php  
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $sender = $_POST['sender'];
        $rec = $_POST['rec'];
        $amount = $_POST['amount'];
    }
     $sql3 ="SELECT balance FROM customers where Name='$sender';";
     $sql = "UPDATE customers SET balance=(balance-$amount) where Name='$sender';";
     $sql1 = "UPDATE customers SET balance=(balance+$amount) where Name='$rec';";
     $sql2 = "INSERT INTO transactions (sender,reciever,amount)VALUES('$sender','$rec',$amount)";
        $result3=mysqli_query($con,$sql3);
    while($row3 = mysqli_fetch_array($result3)){
        if($amount>$row3["balance"]){
            echo "<script> alert('Insufficient Balance')</script>";
            echo "<script> window.location.href='customer.php'</script>";   
        }
        else{
            $result=mysqli_query($con,$sql);
            $result1=mysqli_query($con,$sql1);
            $result2=mysqli_query($con,$sql2);
            echo "<script> alert('Transaction is Successful !!!')</script>";
            echo "<script> window.location.href='mainpage.php'</script>";
        }
    }
?>
