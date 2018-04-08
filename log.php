<?php 
class Log { 
	public function __construct($filename, $path) { 
		$this->path     = ($path) ? $path : "/"; 
		$this->filename = ($filename) ? $filename : "log"; 
		$this->date     = date("Y-m-d H:i:s"); 
		//$this->ip       = ($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : 0; 
	} 
		
	
	public function insert($text, $dated, $clear, $username) { 
		if ($dated) { 
			$date   = "_" . str_replace(" ", "_", $this->date); 
			$append = null; 
		} else { 
			$date   = ""; 
			$append = ($clear) ? null : FILE_APPEND; 
		}; 
		$log    = $this->date . " [username] " . $username . PHP_EOL . " [text] " . $text . PHP_EOL; 
		$result = (file_put_contents($this->path . $this->filename . $date . ".log", $log, $append)) ? 1 : 0;   
		 
	}
} 
?>