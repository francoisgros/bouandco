<?php
if (!isset($_GET['membre']) || empty($_GET['membre'])) {
	header('Location: http://bouandco.fr/');
	exit;
}

$db = new SQLite3('../bouandco.db');

$result = $db->query('SELECT membre FROM bataille WHERE membre LIKE \'' . str_replace('\'', '\'\'', stripslashes($_GET['membre'])) . '\'');
$membre = $result->fetchArray();

?>
<html>
<head>
<title>BouAndCo</title>
</head>
<body>

<h1>Ordre de mission pour <?php echo $membre['membre']; ?></h1>

<table border="1">
<tr>
	<th>Attaqué</th>
	<th>Ville</th>
	<th>Type</th>
	<th>Niv</th>
	<th>X</th>
	<th>Y</th>
	<th>Distance</th>
	<th>Ville proche</th>
</tr>
<?php

$results = $db->query('SELECT * FROM bataille WHERE membre LIKE \'' . str_replace('\'', '\'\'', $membre['membre']) . '\' ORDER BY ville, cible, typecible, niv DESC');
$cible = '';
while ($row = $results->fetchArray()) {
	if ($cible != $row['cible']) {
		$cible = $row['cible'];
		echo '<tr>';
		echo '<td colspan="8" bgcolor="#ffcccc"><b>' . $row['cible'] . '</b> (' . $row['alliancecible'] . ') - Pui : ' . number_format($row['pui'], 0, ',', ' ') . '</td>';
		echo '</tr>';
	}
	echo '<tr>';
	echo '<td><input type="checkbox" name="" /></td>';
	echo '<td>' . $row['villecible'] . '</td>';
	echo '<td>' . $row['typecible'] . '</td>';
	echo '<td>' . $row['niv'] . '</td>';
	echo '<td><b>' . $row['coox'] . '</b></td>';
	echo '<td><b>' . $row['cooy'] . '</b></td>';
	echo '<td>' . number_format($row['distancecible'], 0, ',', ' ') . '</td>';
	echo '<td>' . $row['ville'] . '</td>';
	echo '</tr>';
}

?>
</table>

</body>
</html>