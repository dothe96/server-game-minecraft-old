<?php

$data = array();

function add_person( $username, $password, $realname)

{

global $data;

$data[]=array('username'=>$username,'password'=>$password,'realname'=>$realname);

}

if( $_FILES['file']['tmp_name'])

{

$dom = DOMDocument::load( $_FILES['file']['tmp_name'] );

$rows = $dom->getElementsByTagName('Row');

$first_row = true;

foreach ($rows as $row)

{

if( !$first_row)

{

$username = "";

$password = "";

$realname = "";

$index = 1;

$cells = $row->getElementsByTagName( 'Cell' );

foreach( $cells as $cell )

{

$ind = $cell->getAttribute( 'Index' );

if ( $ind != null ) $index = $ind;

if ( $index == 1 ) $username = $cell->nodeValue;

if ( $index == 2 ) $password = $cell->nodeValue;

if ( $index == 3 ) $realname = $cell->nodeValue;

$index += 1;

}

add_person( $username, $password, $realname);

}

$first_row = false;

}

}

?>

<?php 

foreach($data as $row)

{

//luu y : du lieu 1 dong trong file xml neu rong o 1 o^ nao do, thi se khong import dong do vao db

require_once('db.php');

//neu username trong file excel rỗng thì chèn vào database 1 khoảng trắng(tùy ý),tuong tu voi password

$a1 =$row['username'];

if($a1=='') $a1=' ';

$a2 =$row['password'];

if($a2=='') $a2=' ';

$a3 =$row['realname'];

if($a3=='') $a3=0;

mysql_query("Insert into thongtin(username,password,realname) values ('$a1','$a2','$a3')") or die(mysql_error());

}

echo "Import thành công !";

?>