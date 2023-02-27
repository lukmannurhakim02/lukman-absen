<?php
// connect to the database
include "../koneksi.php";

// get the total number of records
$result = mysqli_query($conn, 'SELECT COUNT(*) as total FROM siswa');
$row = mysqli_fetch_assoc($result);
$total = $row['total'];

// set the number of records to display per page
$limit = 10;

// calculate the total number of pages needed
$pages = ceil($total / $limit);

// get the current page number
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// calculate the starting record for the current page
$start = ($page - 1) * $limit;

// retrieve the records for the current page
$result = mysqli_query($conn, "SELECT * FROM table LIMIT $start, $limit");

// display the records in a table or list using Bootstrap styling
echo '<table class="table">';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['column1'] . '</td>';
    echo '<td>' . $row['column2'] . '</td>';
    echo '<td>' . $row['column3'] . '</td>';
    echo '</tr>';
}
echo '</table>';

// display pagination links
echo '<ul class="pagination">';
for ($i = 1; $i <= $pages; $i++) {
    $active = $i == $page ? 'active' : '';
    echo '<li class="page-item ' . $active . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
}
echo '</ul>';
?>
