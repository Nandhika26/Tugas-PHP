<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
            
        h1, h2 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;

        }
        
        label {
            font-weight: bold;
   
        }

        input[type="text"],
        input[type="radio"],
        select {
            width: 100%;
            padding:5px;
            display: flexbox;
            margin-bottom: 1px; 
            border: 1px solid #ccc;
            border-radius: 9px;
            margin-right: 5px;

        }

        input[type="checkbox"] {
            margin-right: 1px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 2px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        a {
            text-decoration: none;
        }
   </style>

</head>
<body>
    <h1> Buat Account Baru </h1>
    <h2> Sign Up Form</h2>
    <form action="welkome.php" method="post">
    
        <label for="value">First name:</label><br>
        <input type="text" name="fname" value=" "><br><br>

        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" value="">
      </form>

    
        <p>Gender</p>
        <input type="radio" id="male" name="fav_language" value="Male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="fav_language" value="Female">
        <label for="female">Female</label><br>
          </form>
    
    
        <p>Nationality</p><br>
        <select id="Nationality" name="Nationality"> 
            <option value="Indonesia"> Indonesia </option>
            <option value="Amerika"> Amerika </option>
            <option value="Inggris"> Inggris </option>
        </select>
        </form>


    
            <p>Language Spoken</p>
            <input type="checkbox" id="vehicle1" name="vehicle1" value="bahasa Indonesia">
            <label for="vehicle1"> Bahasa Indonesia </label><br>
            <input type="checkbox" id="vehicle2" name="vehicle2" value="English">
            <label for="vehicle2"> English </label><br>
            <input type="checkbox" id="vehicle3" name="vehicle3" value="other">
            <label for="vehicle3"> Other </label><br>

    
        <p>Bio</p>
        <textarea name="message" rows="10" cols="30"></textarea><br>  
        <input type="submit" /><br>
    </form> 

</body>
</html>