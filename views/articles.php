<html>
<head>
    <title>News</title>
    <meta charset="Unicode">
</head>
<body>
<div>
    <div>
        <h1>News</h1>
        <a><a href="../admin/index.php" <em>Admin Panel</em></a></h3>
    </div>
    <div>
        <?php foreach($articles as $a): ?>
            <h3><a href="article.php?id=<?=$a["id"]?>"><?=$a["title"]?></a></h3>
        <em>Published: <?=$a["date"]?></em>
        <p><?=$a["content"]?></p>
        <?php endforeach ?>
    </div>
    <footer>
        <p>Da Strateg 2017 &copy</p>
    </footer>
</div>
</body>
</html>