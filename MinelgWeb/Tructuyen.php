<?php
error_reporting(0);
//cấm copy! author xPAW Spigot and edit by Đỗ Thế Administrator Minelg.com
	use Minelg\MinecraftPing;
	use Minelg\MinecraftPingException;

	define( 'IP_minelg', '103.68.81.175' );
	define( 'PORT_minelg', 25565 );
	define( 'TIMEOUT_minelg', 1 );
	
	require __DIR__ . '/src/MinecraftPing.php';
	require __DIR__ . '/src/MinecraftPingException.php';
	try
	{
		$Query = new MinecraftPing( IP_minelg, PORT_minelg, TIMEOUT_minelg );

		$Info = $Query->Query( );
	}
	catch( MinecraftPingException $e )
	{
		$Exception = $e;
	}
?>					
							<?php
		if( !$Info )
		{
			echo "Server Bảo Trì";
		}
		else
		{
			print_r( $Info['players']['online'] );print_r(' / ' );print_r( $Info['players']['max'] );
		}
?>
