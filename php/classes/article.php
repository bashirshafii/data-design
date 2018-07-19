<?php


//articleId(Primary Key)
//articleHeader
//articleAuthor
//articlePublishDateAndTime

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

	//mutator method for articleID
	public function setArticleId(){
		 return $this->articleIdId;

	}
	//accessor method for articleId
	public function getArticleId(): string {
		return ($this->articleId);
	}
	//mutator method for articleHeader
	public function setArticleHeader($articleHeader){
		//validate articleHeader is string
		if(!is_string($articleHeader)){
			throw new Exception('$articleHeader must be a string!');
		}
		return ($this->articleHeader);
	}
	//accessor method for articleHeader
	public function getArticleHeader(){

		return ($this->articleHeader);
	}
//mutator method for articleAuthor
	public function setArticleAuthor($articleAuthor){
		//validate articleAuthor is string
		if(!is_string($articleAuthor)){
			throw new Exception('$articleAuthor must be a string!');
		}
		return ($this->articleAuthor);
	}
	//accessor method for articleAuthor
	public function getArticleAuthor(){
		return ($this->articleAuthor);
	}
//mutator method for articlePublishDateAndTime
	public function setArticlePublishDateAndTime(){
		return ($this->articlePublishDateAndTime);
	}
	//accessor method for articlePublishDateAndTime
	public function getArticlePublishDateAndTime(){
		return ($this->articlePublishDateAndTime);
	}

//mutator method for articleContent
	public function setArticleContent($articleContent){
		//validate articleAuthor is string
		if(!is_string($articleContent)){
			throw new Exception('$articleAuthor must be a string!');
		}
		return ($this->articleContent);
	}
	//accessor method for articleContent
	public function getArticleContent(){
		return ($this->articleContent);
	}
}