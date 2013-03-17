<html>
<head>
    <title>BouAndCo</title>
</head>
<body>

<h1>Ordres de mission par Officier</h1>

<ul>
    <?php

    $db = new SQLite3('../bouandco.db');

    $results = $db->query('SELECT DISTINCT membre FROM bataille2 ORDER BY membre');
    while ($row = $results->fetchArray()) {
        echo '<li><a href="mission2.php?membre=' . urlencode($row['membre']) . '">' . htmlentities($row['membre']) . '</a></li>';
    }

    ?>
</ul>

</body>
</html>