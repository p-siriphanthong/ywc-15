<?php

$ret = (Object) array();
$data = json_decode(file_get_contents('https://ywc15.ywc.in.th/api/interview'));

usort($data, function ($a, $b) {
	return strcmp($a->interviewRef, $b->interviewRef);
});

foreach ($data as $index => $value) {
	if(!isset($ret->{$value->major}))
		$ret->{$value->major} = array();
	array_push($ret->{$value->major}, $value);
}

print json_encode($ret);
exit(0);

?>