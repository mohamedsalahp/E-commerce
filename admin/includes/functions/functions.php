<?php



/*
	** Get All Function v2.0
	** Function To Get All Records From Any Database Table
	*/

	function getAllFrom($field, $table, $where = NULL, $and = NULL, $orderfield, $ordering = "DESC") {

		global $con;

		$getAll = $con->prepare("SELECT $field FROM $table $where $and ORDER BY $orderfield $ordering");

		$getAll->execute();

		$all = $getAll->fetchAll();

		return $all;

	}




/*
1- this func that echo the page title in case the page 
2- has the var $pagetitle and ecgo default title for other pages 
*/

function getTitle()
{
    global $pageTitle;
    if (isset($pageTitle)) {
        echo $pageTitle;
    } else {
        echo 'Default ';
    }
}


// home redirect func v1.0
// this func accept parm 
// $theMsg = echo the message 
// $second = Seconds before redirect 

function redirectHome($theMsg, $url = null, $seconds = 2) {

    if ($url === null) {

        $url = 'index.php';

        $link = 'Homepage';

    } else {

        if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] !== '') {

            $url = $_SERVER['HTTP_REFERER'];

            $link = 'Previous Page';

        } else {

            $url = 'index.php';

            $link = 'Homepage';

        }

    }

    echo $theMsg;

    echo "<div class='alert alert-info'>You Will Be Redirected to $link After $seconds Seconds.</div>";

    header("refresh:$seconds;url=$url");

    exit();

}




// check items func v1.0 
// func to check item in database 
// $select = the item to select
// $form = the Table to select from [ Ex: user ]
// $value - the value if select [ Ex: medo, box, electronics]


function checkItem($select, $from, $value)
{


    global $con;

    $statment = $con->prepare("SELECT $select FROM $from WHERE $select = ?");

    $statment->execute(array($value));

    $count = $statment->rowCount();

    return $count;
}

// count number of items func v1.0
// func to count number if items rows 
//  $item = the item to count 
// $table = the tabel to choose from 

function countItems($item, $table) {

    global $con;

    $stmt2 = $con->prepare("SELECT COUNT($item) FROM $table");

    $stmt2->execute();

    return $stmt2->fetchColumn();
}


// get latest records func v1.0 
// func to get lastes from database {users, items, comments}
// $select = Filed to select 
// $table = the table to chosse from 
// number of records to get (whatever u want)
//


function getLatest($select, $table, $order, $limit = 5) {

    global $con;

    $getStmt = $con->prepare("SELECT $select FROM $table ORDER BY $order DESC LIMIT $limit");

    $getStmt->execute();

    $rows = $getStmt->fetchAll();

    return $rows;

}
