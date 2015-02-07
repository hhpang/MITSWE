<?
    session_start();

    require_once('database_connection.php');

    unset($_SESSION['SESS_MEM_SEARCH_RESULTS']);

    $searchterm = $_POST['find'];
    $searchterm = mysql_real_escape_string($searchterm);
    $parts = explode(" ",trim($searchterm));
    $searchColumns = array("Name", "Email", "freshiap", "freshsummer", "sophiap", "sophsummer", "junioriap", "juniorsummer", "senioriap");
    $clauses = array();
    foreach($parts as $part) {
        foreach($searchColumns as $fieldName) {
            $clauses[] = $fieldName . " LIKE '%" . $part . "%'";
        }
    }
    $searchterm = implode(' OR ', $clauses);

    $query = "SELECT * FROM members WHERE " . $searchterm;
    echo $query;
    $result = mysql_query($query);

    $memresults = array();
    if($result) {
        while($row = mysql_fetch_array($result)) {
            $memresults[] = '<td><a href="https://swe.mit.edu:444/portal/show_search_members_info.php?id=' . $row['id'] . '">' . $row['Name'] . '</a>' . '</td><td>' . $row['Email'] . '</td><td>' . $row['Year'] . '</td><td>';
        }
        $_SESSION['SESS_MEM_SEARCH_RESULTS'] = $memresults;
        session_write_close();
    }

    header("location: members_lookup.php");
    exit();
?>
