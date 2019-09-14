<?php 

class WriteToFile
{

	public $handle;

	public function __construct($nameFile)
	{

		if(is_writable($nameFile)){
			if(!$this->handle = fopen($nameFile, 'a')){
				echo "Невозможно открыть фаил {$nameFile}";
			}
		}else{
			echo "Файла {$nameFile} не существует!";
			exit;
		}

	}

	public function write($string){

		if(fwrite($this->handle, $string . PHP_EOL) === false){
			echo "Невозможно произвести запись в фаил!";
			exit; // PHP_EOL - перенос на следующую строку!
		}

		return "Запись успешно произведена!";
	}


	public function __destruct(){
		if($this->handle != null){
			fclose($this->handle);
			echo "<br>" . "Фаил успешно закрыт!";
		}
	}
}




 ?>