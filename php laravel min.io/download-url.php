<?php

require 'base_config.php';

try {
	$plainUrl = $s3->getObjectUrl('php-bucket', 'test/2022/02/testKey.txt');

	var_export("\n\n". $plainUrl . "\n\n");

} catch (Aws\S3\Exception\S3Exception $e) {
    echo "\n\nError!!\n\n".$e->getMessage()."\n\n";
}
