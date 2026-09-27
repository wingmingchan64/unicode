<?php
/*
php H:\github\unicode\部首、筆劃→字.php 一 2
*/
require_once( "h:\\github\\Dufu-Analysis\\analysis_programs\\函式.php" );
require_once( 'H:\github\unicode\部首、筆劃、字.php' );

checkARGV( $argv, 3, "必須提供部首、筆劃" );
$部首 = trim( $argv[ 1 ] );
if( !array_key_exists( $部首, $部首、筆劃、字 ) )
{
	echo "部首'${部首}'不存在。", NL;
	exit;
}
$筆劃 = intval( trim( $argv[ 2 ] ) );

if( !array_key_exists( $筆劃, $部首、筆劃、字[ $部首 ] ) )
{
	echo $部首、筆劃、字[ $部首 ][ 0 ], NL;
}
else
{
	echo $部首、筆劃、字[ $部首 ][ $筆劃 ], NL;
}
?>