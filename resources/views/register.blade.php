<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>

    <h3>Sign Up Form</h3>
    <form action="/welcome" method="post">
        @csrf
        <label>First Name:</label><br><br>
        <input type="text" name="firstname"><br><br>

        <label>Last Name:</label><br><br>
        <input type="text" name="lastname"><br><br>

        <label>Gender:</label><br><br>
        <input type="radio" name="gender">Male<br>
        <input type="radio" name="gender">Female<br><br>

        <label>Nationality:</label><br><br>
        <select name="nationality">
            <option value="indonesian">Indonesian</option>
            <option value="indonesian">Singaporean</option>
            <option value="indonesian">Malaysian</option>
            <option value="indonesian">Australian</option>
        </select><br><br>

        <label>Language Spoken:</label><br><br>
        <input type="checkbox" name="language" value="Bahasa Indonesia">Bahasa Indonesia<br>
        <input type="checkbox" name="language" value="English">English<br>
        <input type="checkbox" name="language" value="Arabic">Arabic<br>
        <input type="checkbox" name="language" value="Other">Other<br><br>

        <label>Bio:</label><br><br>
        <textarea name="bio" id="" cols="30" rows="10"></textarea><br><br>
        <input type="submit" value="Welcome">
    </form>
</body>

</html>
