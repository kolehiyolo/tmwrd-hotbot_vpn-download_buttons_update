<?php
function flog(...$objects) {
	try {
		$filepath = __DIR__ . '/../logs/log_' . date('Y-m-d') . '.log';
		$string = date('H:i:s - ');
		foreach ($objects as $object) {
			switch (gettype($object)) {
				case 'string':
					$string .= $object;
					break;
				case 'NULL':
					$string .= 'NULL';
					break;
				case 'boolean':
					$string .= $object ? 'true' : 'false';
					break;
				default:
					$string .= print_r($object, true);
			}
		}
		@file_put_contents($filepath, $string, FILE_APPEND);
	} catch (Exception $e) {}
}
