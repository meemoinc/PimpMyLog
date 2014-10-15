<?php if(realpath(__FILE__)===realpath($_SERVER["SCRIPT_FILENAME"])){header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");die();}?>{
	"apache1filePHP1": {
		"display" : "Apache Error #1",
		"path"    : "\/var\/log\/apache2\/error.log",
		"refresh" : 5,
		"max"     : 10,
		"notify"  : true,
		"format"  : {
			"type" : "HTTPD 2.2",
			"regex": "|^\\[(.*)\\] \\[(.*)\\] (\\[client (.*)\\] )*((?!\\[client ).*)(, referer: (.*))*$|U",
			"match": {
				"Date"     : 1,
				"IP"       : 4,
				"Log"      : 5,
				"Severity" : 2,
				"Referer"  : 7
			},
			"types": {
				"Date"     : "date:H:i:s",
				"IP"       : "ip:http",
				"Log"      : "pre",
				"Severity" : "badge:severity",
				"Referer"  : "link"
			},
			"exclude": {
				"Log": ["\/PHP Stack trace:\/", "\/PHP *[0-9]*\\. \/"]
			}
		}
	}
}
