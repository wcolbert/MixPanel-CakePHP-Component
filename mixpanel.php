<?php
class MixpanelComponent extends Object {
	//Set MixPanel Project Token
	//Usage:$this->Mixpanel->token = "124124121fasdfas1212";
	public $token;
    private $host = 'http://api.mixpanel.com/';
	
	//Set Construct and submit event
	//Usage:$this->Mixpanel->track("Test Event", 'param1'=>$value1, 'param2'=>$value2);
    function track($event, $properties=array()) {
        $params = array(
            'event' => $event,
            'properties' => $properties
        );
		//Check if token is passed in properties array
        if (!isset($params['properties']['token'])){
            $params['properties']['token'] = $this->token;
        }
        //create url to send an HTTP POST Request
        $url = $this->host . 'track/?data=' . base64_encode(json_encode($params));
        //Execute HTTP POST in the background
        exec("curl '" . $url . "' >/dev/null 2>&1 &"); 
    }
}
?>