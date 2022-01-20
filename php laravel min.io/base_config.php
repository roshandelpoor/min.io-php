<?php

// Include the SDK using the Composer autoloader
// composer require aws/aws-sdk-php

date_default_timezone_set('Asia/Tehran');
require 'vendor/autoload.php';

try {
	$s3 = new Aws\S3\S3Client([
		'version' => 'latest',
		'region'  => 'tehran',
		'endpoint' => 'http://0.0.0.0:9001',
		'use_path_style_endpoint' => true,
		'credentials' => [
		        'key'    => 'test',
		        'secret' => '87654321',
		    ],
	]);

} catch (Aws\S3\Exception\S3Exception $e) {
    echo "\n\nError!!\n\n".$e->getMessage()."\n\n";
}
