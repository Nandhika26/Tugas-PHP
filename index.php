<html>
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

    <body>
        <form action="welkome.php" method="post"> Name: <input type="text" name="nama" /><br> Age: 
            <input type="text" name="usia" /><br>
            <label for="value">First name:</label>
        <input type="text" name="fname"><br>

        <label for="lname">Last name:</label>
        <input type="text" name="lname"><br>
        
        <input type="radio"  name="gender" value="Male">
        <label for="male">Male</label><br>
        <input type="radio"  name="gender" value="Female">
        <label for="female">Female</label>
        <input type="submit" /><br>

        <p>Nationality</p>
        <select name="nationality" id="nationality" required>
            <option value="Indonesia">Indonesia</option>
            <option value="English">English</option>
            <option value="India">India</option>
            <option value="Johar">Johar</option>
            <option value="CKM">CitraKebunMas</option> 
        </select>

        <p>Language Spoken</p>
        <input type="checkbox" id="language1" value="Indonesia" name="language[]">
        <label for="language1"> Bahasa Indonesia</label><br>
        <input type="checkbox" id="language2" value="English" name="language[]">
        <label for="language2"> English</label><br>
        <input type="checkbox" id="language3" value="Palestina" name="language[]">
        <label for="language3"> Palestine</label><br>
        <input type="checkbox" id="language4" value="Sunda" name="language[]">
        <label for="language4"> Sunda</label><br>

            <textarea name="message" rows="10" cols="30"></textarea><br>  
        
    </form>
    </body>
</html>