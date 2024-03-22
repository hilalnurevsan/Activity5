<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview</title>
</head>
<body>
    <h2>Preview:</h2>
    <?php
    $fields = array(
        'Name' => $_POST['name'],
        'Username' => $_POST['username'],
        'Password' => $_POST['password'],
        'Address' => $_POST['address'] ?? 'Not provided',
        'Country' => $_POST['country'],
        'ZIP Code' => $_POST['zip'] ?? 'Not provided',
        'Email' => $_POST['email'],
        'Sex' => $_POST['sex'],
        'Language' => isset($_POST['language']) ? implode(", ", $_POST['language']) : 'Not provided',
        'About' => $_POST['about'] ?? 'Not provided'
    );

    foreach ($fields as $field => $value) {
        echo "<p>$field: ";
        if ($value === '') {
            echo "Not provided</p>";
        } else {
            echo "$value</p>";
        }
    }
    ?>
</body>
</html>
