<html> 

    <body style="font-family: Arial,
             sans-serif; background-color: hsl(194, 85%, 68%);
             margin: 0; padding: 0; display: flex;
             flex-direction: column; align-items: center;
             justify-content: center; height: 100vh;">
    Welcome <?php echo $_POST["nama"]; ?>!<br /> You are <?php echo $_POST["usia"]; ?> years old. <br>
    Fist Name <?php echo $_POST["fname"]; ?><br> Last Name <?php echo $_POST["lname"]; ?><br>
    Your Gender <?php echo $_POST["gender"]; ?><br>
    Your Bahasa <?php echo $_POST["nationality"];?><br>
    Your Country <?php
        if(isset($_POST['language'])) {
            $languages = $_POST["language"];
            echo "Menggunakan bahasa ";
            foreach($languages as $language) {
                echo $language . ", ";
            }
            echo "<br>";
        } else {
            echo "Anda belum memilih bahasa<br>";
       }; ?><br>
    <?php echo $_POST["message"]; ?>
    </body>
</html>