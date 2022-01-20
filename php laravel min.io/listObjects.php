<?php

require 'base_config.php';

try {
	// list
	$objects = $s3->listObjects([
		    'Bucket' => 'laravel-bucket'
	]);

	foreach($objects['Contents'] as $obj)
	{
		var_export($obj);
	}

} catch (Aws\S3\Exception\S3Exception $e) {
    echo "\n\nError!!\n\n".$e->getMessage()."\n\n";
}
