<?php

require 'base_config.php';

try {
	// Put request
	$upload = $s3->putObject([
	     'Bucket' => 'php-bucket',
	     'Key'    => 'video'.rand(1000,9999).'.mp4', // name file
	     'Body'   => fopen(__DIR__ . '/assets/video.mp4', 'r')
	]);


	var_export($upload);

} catch (Aws\S3\Exception\S3Exception $e) {
    echo "\n\nError!!\n\n".$e->getMessage()."\n\n";
}
