<?php

require 'base_config.php';

try {
	// list
	$buckets = $s3->listBuckets();


	var_export($buckets['Buckets']);

} catch (Aws\S3\Exception\S3Exception $e) {
    echo "\n\nError!!\n\n".$e->getMessage()."\n\n";
}
