<?php
header("Content-Type: application/octet-stream");
echo $dbh->result($dbh->query("SELECT " . idf_escape($_GET["field"]) . " FROM " . idf_escape($_GET["download"]) . " WHERE " . implode(" AND ", where($_GET)) . " LIMIT 1"));
