<?php
	function jscommpress($str){
		//--This is setup for all comments in your code to be started with //-- or //##.
		$str=str_replace("  ", " ", $str);
		$str=str_replace("  ", " ", $str);
		$str=preg_replace('/((?=^)(\s*))|((\s*)(?>$))/', '', $str);
		$str=preg_replace('/[\t]+/', '', trim($str));
		$str=preg_replace('/(?<!\S)\/\/\--s*[^\r\n]*/', '', $str);
		$str=preg_replace('/(?<!\S)\/\/\##s*[^\r\n]*/', '', $str);
		$str=preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $str);
		$str=preg_replace("/\n /", "\n", $str);
		$str=preg_replace("/}\n\s*var/", "} var", $str);
		$str=preg_replace("/}\nsetTimeout/", "} setTimeout", $str);
		$str=preg_replace("/{\nsetTimeout/", "{ setTimeout", $str);
		$str=preg_replace("/\n\s*var/", " var", $str);
		$str=preg_replace("/\r\s*var/", " var", $str);
		$str=preg_replace("/\n\s*if/", " if", $str);
		$str=preg_replace("/\r\s*if/", " if", $str);
		$str=preg_replace("/,\s*\n/", ", ", $str);
		$str=preg_replace("/,\s*\r/", ", ", $str);
		$str=preg_replace("/\nwhile/", " while", $str);
		$str=preg_replace("/\rwhile/", " while", $str);
		$str=preg_replace("/;\n/", "; ", $str);
		$str=preg_replace("/{\n/", "{ ", $str);
		$str=preg_replace("/\n {/", "{ ", $str);
		$str=preg_replace("/\n{/", "{ ", $str);
		$str=preg_replace("/\nelse{/", "else{", $str);
		$str=preg_replace("/;\s*\n/", "; ", $str);
		$str=preg_replace("/{\s*\n/", "{ ", $str);
		$str=preg_replace("/\n\s*}/", " }", $str);
		$str=preg_replace("/\r\s*}/", " }", $str);
		$str=preg_replace("/\nreturn/", " return", $str);
		$str=preg_replace("/\n\\\$/", " $", $str);
		$str=preg_replace("/\ndocument./", " document.", $str);
		$str=str_replace("  ", " ", $str);
		$str=str_replace("  ", " ", $str);
		return $str;
	}
?>