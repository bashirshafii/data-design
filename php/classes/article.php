<?php



/**
 * Newspaper article class
 * @author Bashir Shafii
 * @version 1.0.0
 */

Class Article {
	/**
	 * id for Newspaper article. This is the primary key
	 */

	private $articleId;
	private $articleHeader;
	private $articleAuthor;
	private $articlePublishDateAndTime;
	private $articleContent;

	public function __construct(string $articleId, string $articleHeader, string $articleAuthor, datetime $articlePublishDateAndTime, string $articleContent ) {
	 try{
	 	$this->setArticleId();
		$this->setArticleHeader();
		$this->setArticleAuthor();
		$this->setArticlePublishDateAndTime();
		$this->setarticleContent();

	 } catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception){
	 	$exceptionType = get_class($exception);
	 	throw(new $exceptionType($exception->getMessage(),0, $exception));

	 }


	}

	//mutator method for articleID
	public function setArticleId(): void{
		return ($this->articleId);

	}
	//accessor method for articleId
	public function getArticleId(): Uuid {
		return ($this->articleId);
	}
	//mutator method for articleHeader
	public function setArticleHeader() : void {

		return ($this->articleHeader);
	}
	//accessor method for articleHeader
	public function getArticleHeader() : string {

		return ($this->articleHeader);
	}
//mutator method for articleAuthor
	public function setArticleAuthor() : void{
		

		return ($this->articleAuthor);
	}
	//accessor method for articleAuthor
	public function getArticleAuthor() : string {
		return ($this->articleAuthor);
	}
//mutator method for articlePublishDateAndTime
	public function setArticlePublishDateAndTime() : void{
		return ($this->articlePublishDateAndTime);
	}
	//accessor method for articlePublishDateAndTime
	public function getArticlePublishDateAndTime() : datetime {
		return ($this->articlePublishDateAndTime);
	}

//mutator method for articleContent
	public function setArticleContent(): void{
		//validate articleAuthor is string
		return ($this->articleContent);
	}
	//accessor method for articleContent
	public function getArticleContent() : string {
		return ($this->articleContent);
	}
}