<html>
<head>
    <title>News</title>
    <meta charset="Unicode">
</head>
<body>
<h1>News</h1>
<form method="post" action="../admin/index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
    <label for="1">
        Title
    </label>
    <input type="text" name="title" value="<?=$article['title']?>" required id="1">
    <br>
    <br>
    <label for="2">
        Date
    </label>
    <input type="date" name="date" value="<?=$article['date']?>" id="2"required>
    <br>
    <br>
    <label for="3">
        Content
    </label>
    <textarea name="content" required id="3">
        <?=$article['content']?>
          </textarea>
    <br>
    <br>
    <input type="submit" value="Save">
</form>
<footer>
    <p>Da Strateg 2017 &copy</p>
</footer>
</body>
</html>