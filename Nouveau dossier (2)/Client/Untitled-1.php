?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "BDstockUahb";
    // $conn = mysqli_connect($servername, $username, $password, $dbname);
    $conn=new PDO("mysql:host=localhost;dbname=bdstockuahb;",);
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    } 
    if(isset($_POST['submit'])){
        extract($_POST);
        if(!empty($pseudo)&&!empty($pass)){
            $insert=$conn->prepare("select * from utilisateur WHERE pseudo='".$pseudo."' and pass='".$pass."'");
            $insert->execute();
            if($insert->rowcount()>0){
                header("location:nav.php");
            }
        }
    }
?>
