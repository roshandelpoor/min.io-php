<?php

require 'base_config.php';

try {
	// Put request
	$upload = $s3->putObject([
	     'Bucket' => 'init-hesab',
	     'Key'    => 'zip/2022/02/folderTestZip.zip', // name file
	     'Body'   => fopen(__DIR__ . '/assets/filezip.zip', 'r')
	]);


	var_export($upload);

} catch (Aws\S3\Exception\S3Exception $e) {
    echo "\n\nError!!\n\n".$e->getMessage()."\n\n";
}
