class MCQ{
	
	const PREFIX = 'MCQ_';
	private $cache;
	public function __construct() 
	{	
		$this->cache = new Memcached();
		$this->cache->addServers([
        		['127.0.0.1', 11211]
		]);

	}


	public function add($key, $value) 
	{
		$key .= $this->_increment($key);
		$this->cache->set($key, $value);	
	}
	

	private function _increment($key, $value = 1) 
	{
		$val = $this->cache->get(self::PREFIX.$key);
		if($val === false) {
		   $val = $value;
		}else if(!is_numeric($val)) {
		   $val = $value;
		}else{
		   $val = $val+$value;		  
		}
		 $this->cache->set(self::PREFIX.$key, $val);
		 return $val;
	}
	
	public function get($key, $number = 1) 
	{
		$result = [];
		for($i=0; $i<1; $i++){
			$key .= $this->_increment($key.'r');
            $value = $this->cache->get($key);
            if($value !== false) {
            	$this->cache->delete($key);
            	$result[] = $value;
            }else{
            	break;
            }
		}
		return $result;
	}

	public function len($key)
	{
		$valw = $this->cache->get(self::PREFIX.$key);
		$valr = $this->cache->get(self::PREFIX.$key.'r');
		return $valw-$valr;
	}
}
