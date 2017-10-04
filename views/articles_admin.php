<html>
<head>
    <title>News</title>
    <meta charset="Unicode">
</head>
<body>
<div>
    <div>
        <h1>News</h1>
        <h3><a href="index.php?action=add" <em>Add article</em></h3>
    </div>
    <div>
        <table border="1">
            <tr>
                <th>Date</th>
                <th>Title</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach($articles as $a): ?>
            <tr>
                <td><?=$a["date"]?></td>
                <td><?=$a["title"]?></td>
                <td><a href="index.php?action=edit&id=<?=$a["id"]?>">Edit</a> </td>
                <td><a href="index.php?action=delete&id=<?=$a["id"]?>">Delete</a></td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>
    <footer>
        <p>Da Strateg 2017 &copy</p>
    </footer>
</div>
</body>
</html>