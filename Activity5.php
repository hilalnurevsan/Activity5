<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
    label {
        display: inline-block;
        width: 120px; /* Label genişliği */
        text-align: left; /* Labelleri sola hizala */
        margin-right: 10px; /* Labeller ile input alanları arasındaki boşluk */
        margin-bottom: 5px;
        vertical-align: top; /* Labelleri üste hizala */
    }

    textarea {
        vertical-align: top; /* Textarea'yı üste hizala */
        margin-bottom: 5px; /* Textarea ile sonraki eleman arasındaki boşluk */
    }
    
    input[type="submit"] {
        margin-left: 130px; /* Submit butonunu labellerle aynı hizada tutmak için label genişliği kadar sola it */
    }
</style>

</head>
<body>
    <h2>Registration Form:</h2>
    <form action="Activity5-preview.php" method="POST">
        <label for="name">Name:</label><input type="text" id="name" name="name"><br>
        
        <label for="username">Username:</label><input type="text" id="username" name="username"><br>
        
        <label for="password">Password:</label><input type="password" id="password" name="password"><br>
        
        <label for="address">Address:</label><input type="text" id="address" name="address"><br>
        
        <label for="country">Country:</label>
        <select id="country" name="country">
            <option value="USA">USA</option>
            <option value="UK">UK</option>
            <option value="Canada">Canada</option>
            <option value="Germany">Germany</option>
            <!-- Add more countries as needed -->
        </select><br>
        
        <label for="zip">ZIP Code:</label><input type="text" id="zip" name="zip"><br>
        
        <label for="email">Email:</label><input type="email" id="email" name="email"><br>
        
        <label for="sex">Sex:</label>
        <input type="radio" id="female" name="sex" value="Female"><label for="female">Female</label>
        <input type="radio" id="male" name="sex" value="Male"><label for="male">Male</label><br>
        
        <label for="language">Language:</label>
        <input type="checkbox" id="english" name="language[]" value="English"><label for="english">English</label>
        <input type="checkbox" id="french" name="language[]" value="French"><label for="french">French</label>
        <input type="checkbox" id="german" name="language[]" value="German"><label for="german">German</label><br>
        
        <label for="about">About:</label><textarea id="about" name="about"></textarea><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
