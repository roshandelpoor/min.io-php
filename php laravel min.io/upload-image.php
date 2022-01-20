<?php

require 'base_config.php';

try {
	// Put request
	$upload = $s3->putObject([
	     'Bucket' => 'init-hesab',
	     'Key'    => 'image'.rand(1000,9999).'.jpg', // name file
	     'Body'   => fopen(__DIR__ . '/assets/image.jpg', 'r')
	]);

	var_export(fopen(__DIR__ . '/assets/image.jpg', 'r'));

	var_export($upload);

} catch (Aws\S3\Exception\S3Exception $e) {
    echo "\n\nError!!\n\n".$e->getMessage()."\n\n";
}
