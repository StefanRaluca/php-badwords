<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>

    <h2>Enter the paragraph and the word to censor</h2>
    <form action="script.php" method="get">
        <label for="paragraph">Paragraph:</label><br>
        <textarea name="paragraph" rows="4" cols="50"></textarea><br>
        <label for="word">Word to censor:</label><br>
        <input type="text" name="word"><br><br>
     <button type="submit">Send</button>
    </form>


</body>
</html>