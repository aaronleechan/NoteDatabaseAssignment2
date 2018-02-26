<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 2/25/18
 * Time: 5:21 PM
 */

require_once 'loginsql.php';
$linkdb = mysqli_connect($hn,$un,$pw,$db) or die("unable to connect");

if(mysqli_connect_error() ){
    die("Could not connect to database");
}

function sql_to_html_table($results) {
    // starting table
    $delim="\n";
    $htmltable =  "<table>" . $delim ;
    $counter = 0 ;
    // make sure data exists
    if (is_bool($results)) {
        $htmltable .=   "</table>"   . $delim ;
        return( $htmltable ) ;
    }
    // putting in lines
    while( $row = $results->fetch_assoc()){
        if ( $counter===0 ) {
            // table header
            $htmltable .=   "<tr>"  . $delim;
            foreach ($row as $key => $value ) {
                $htmltable .=   "<th>" . $key . "</th>"  . $delim ;
            }
            $htmltable .=   "</tr>"  . $delim ;
            $counter = 22;
        }
        // table body
        $htmltable .=   "<tr>"  . $delim ;
        foreach ($row as $key => $value ) {
            $htmltable .=   "<td>" . $value . "</td>"  . $delim ;
        }
        $htmltable .=   "</tr>"   . $delim;
    }
    // closing table
    $htmltable .=   "</table>"   . $delim ;
    // return
    return( $htmltable ) ;
}

if ($query != '') {
    if($results = mysqli_query($linkdb,$query)){
        echo sql_to_html_table($results);
    } else {
        echo "Query failed";
    }
} else {
    echo "No Query";
}
?>