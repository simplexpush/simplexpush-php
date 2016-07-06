<?php 
class SimplexPush {
	const POST   = 'POST';
	const GET    = 'GET';
	const DELETE = 'DELETE';
  
	const HTTP_OK = 200;
	const HTTP_CREATED = 201;
	const HTTP_ACEPTED = 202;

	public function _exec($type, $url, $params = array()) {
		$headers = array('Content-type' => 'Application/json'); //$this->_headers;
	    $s = curl_init();
	 	curl_setopt($s, CURLINFO_HEADER_OUT, true);
	    switch ($type) {
			case self::DELETE:
				curl_setopt($s, CURLOPT_URL, $url . '?' . http_build_query($params));
				curl_setopt($s, CURLOPT_CUSTOMREQUEST, self::DELETE);
				break;
			case self::POST:
				curl_setopt($s, CURLOPT_URL, $url);
				curl_setopt($s, CURLOPT_POST, true);
				curl_setopt($s, CURLOPT_POSTFIELDS, $params);
				break;
			case self::GET:
				curl_setopt($s, CURLOPT_URL, $url . '?' . http_build_query($params));
				break;
	    }
	 	
	    curl_setopt($s, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($s, CURLOPT_HTTPHEADER, $headers);
		
	    $_out = curl_exec($s);
	    $status = curl_getinfo($s, CURLINFO_HTTP_CODE);
	    curl_close($s);
		$out = $_out;
        print($out);
	    switch ($status) {
			case self::HTTP_OK:
			case self::HTTP_CREATED:
			case self::HTTP_ACEPTED:
			    break;
		default:
            echo 'error!';
	    }
        print($out);
	    return $out;
	}
}
