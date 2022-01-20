<?php

require 'base_config.php';

try {
	
	// Get a command object from the client
	$command = $s3->getCommand('GetObject', [
		    'Bucket' => 'php-backet',
		    'Key'    => 'test/2022/02/testKey.txt', // name file
		]);

	// Create a pre-signed URL
	$presignedRequest = $s3->createPresignedRequest($command, '+20 minutes');

	// Get the actual presigned-url
	var_export("\n\n" . (string)  $presignedRequest->getUri() . "\n\n");

} catch (Aws\S3\Exception\S3Exception $e) {
    echo "\n\nError!!\n\n".$e->getMessage()."\n\n";
}
