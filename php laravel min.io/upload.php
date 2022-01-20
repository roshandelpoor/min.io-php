<?php

require 'base_config.php';

try {
	// Put request
	$upload = $s3->putObject([
	     'Bucket' => 'php-bucket',
	     'Key'    => 'test/2022/02/testKey.txt', // name file
	     'Body'   => 'Hello from MinIO!!'
	]);


	var_export($upload);

} catch (Aws\S3\Exception\S3Exception $e) {
    echo "\n\nError!!\n\n".$e->getMessage()."\n\n";
}
