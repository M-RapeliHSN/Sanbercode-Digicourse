<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SanberBook</title>
</head>
<body>

    <h1>Buat Account Baru!</h1>

    <h2>Sign Up Form</h2>

    <form action="/welcome" method="post">
    @csrf
    <label>First Name</label> <br>
    <input type="text" name="fullname" required <br> <br> <br>

    <label>Last Name</label> <br>
    <input type="text" name="lastname" required <br> <br> <br>

    <label>Gender:</label> <br> <br>
    <input type="radio" name="gender" value="1" required >Male <br>
    <input type="radio" name="gender" value="2" required >Female <br>
    <input type="radio" name="gender" value="3" required >Others <br> <br> <br>

    <label>Nationality</label> <br> <br>
    <select name="Indonesian">
        <option value="1">Indonesian</option>
        <option value="1">American</option>
        <option value="1">German</option>
    </select> <br> <br> <br>

    <label>Language Spoken</label> <br> <br>
    <input type="checkbox" name="language" value="1" >Bahasa Indonesia <br>
    <input type="checkbox" name="language" value="2" >English <br>
    <input type="checkbox" name="language" value="3" >Others <br> <br> <br>

    <label>Bio:</label> <br> <br>
    <textarea name="bio" cols="50" rows="10"></textarea> <br> <br> <br>

    <button type="submit">SUBMIT</button>
    
</body>
</html>