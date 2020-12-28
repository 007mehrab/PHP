<?

class Book{
	private $title;
	private $isbn;
	private $copies;

	function __construct($title,$isbn,$copies){

		$this->setIsbn($isbn);
		$this->title = $title;
		$this->copies = $copies;
	}

	public function setIsbn($isbn){
		$this->isbn = $isbn;
	}

	public function bookInfo(){

		return "ISBN : " . $this->isbn ." <br> Book Name : ". $this->title ."<br> Number of copies : ". $this->copies;
	}

}

$book = new Book("0615303889", "Bible", "220");
echo $book->bookInfo();
?>