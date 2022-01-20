<?php

require 'base_config.php';

try {
	// Get request
	$download = $s3->getObject([
	     'Bucket' => 'php-bucket',
	     'Key'    => 'video1262.mp4', // name file
	     'SaveAs' => __DIR__ . '/files/new_video.mp4'
	]);


	var_export($download);

} catch (Aws\S3\Exception\S3Exception $e) {
    echo "\n\nError!!\n\n".$e->getMessage()."\n\n";
}
