<?php echo '<table>';
echo '<thead>';
echo '<tr>';
echo '<th>Title</th>';
echo '<th>Description</th>';
echo '<th>Date</th>';
echo '</tr>';
echo '</thead>';
foreach ($articles as $article) {
echo '<tr>';
echo '<td>' . $article['title'] . '</td>';
echo '<td>' . $article['description'] . '</td>';
echo '<td>' . $article['date'] . '</td>';
echo '</tr>';
}
echo '</table>';
?>