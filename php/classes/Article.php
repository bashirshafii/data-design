<?php
namespace BashirShafii\DataDesign;
require_once("autoload.php");
require_once(dirname(__DIR__, 2) . "/vendor/autoload.php");
use Ramsey\Uuid\Uuid;
/**
 * Newspaper article class
 * @author Bashir Shafii
 * @version 1.0.0
 */

Class Article {
	use ValidateUuid;
	/**
	 * id for Newspaper article. This is the primary key
	 * @var Uuid $articleId
	 */

	private $articleId;

	/**
	 * This is the article header. It's unique index for the day's Newspaper
	 * @var string $articleHeader
	 */
	private $articleHeader;

	/**
	 * This is the author of the newspaper article
	 * @var string $articleAuthor
	 */
	private $articleAuthor;

	/**
	 * This is the date and time article was published online
	 * @var datetime $articlePublishDateAndTime
	 */
	private $articlePublishDateAndTime;

	/**
	 * This is the body of the article
	 * @var string $articleContent
	 */
	private $articleContent;

	/**
	 * Article constructor.
	 * @param string $newArticleId
	 * @param string $newArticleHeader
	 * @param string $newArticleAuthor
	 * @param string $newArticlePublishDateAndTime
	 * @param string $newArticleContent
	 * @throws \InvalidArgumentException if data types are not valid
	 * @throws \RangeException if data values are out of bounds (e.g., strings too long, negative integers)
	 * @throws \TypeError if a data type violates a data hint
	 * @throws \Exception if some other exception occurs
	 */

	public function __construct(string $newArticleId, string $newArticleHeader, string $newArticleAuthor, string $newArticlePublishDateAndTime, string $newArticleContent ) {
	 try{
	 	$this->setArticleId($newArticleId);
		$this->setArticleHeader($newArticleHeader);
		$this->setArticleAuthor($newArticleAuthor);
		$this->setArticlePublishDateAndTime($newArticlePublishDateAndTime);
		$this->setarticleContent($newArticleContent);

	 } catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception){
	 	$exceptionType = get_class($exception);
	 	throw(new $exceptionType($exception->getMessage(),0, $exception));

	 }

	}
	/**
	 * accessor method for articleId
	 * @return Uuid for article Id
	 */

	public function getArticleId(): Uuid {
		return ($this->articleId);
	}

	/**
	 * mutator method for profile id
	 *
	 * @param  Uuid| string $newArticleId value of new article id
	 * @throws \RangeException if $newArticleId is not positive
	 * @throws \TypeError if the article  Id is not binary data type
	 **/
	public function setArticleId($newArticleId): void {
		try {
			$uuid = self::validateUuid($newArticleId);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
		// convert and store the article id
		$this->articleId = $uuid;

	}
	//accessor method for articleHeader
	public function getArticleHeader() : string {

		return ($this->articleHeader);
	}

	/**
	 * mutator method for articleHeader
	 * @param $newArticleHeader
	 * @throw Range Exception if article header is empty or longer than 200 characters
	 */


	public function setArticleHeader($newArticleHeader) : void {
		//make sure article header is not empty
		if(empty($newArticleHeader) === true) {
			throw(new \RangeException("article header field can't be empty"));

		}

		//make sure article header  is not longer than 200 characters
		if(strlen($newArticleHeader) > 200) {
			throw(new\RangeException("article header can't be longer than 200 characters."));
		}
		$this->$newArticleHeader = $newArticleHeader;

	}
	/**
	 * accessor method for articleAuthor
	 * @return string
	 */

	public function getArticleAuthor() : string {
		return ($this->articleAuthor);
	}

	/**
	 * @param string $newArticleAuthor new value of article author
	 * @throws \InvalidArgumentException if $newArticleAuthor is not a string or insecure
	 * @throws \RangeException if $newArticleAuthor is > 32 characters
	 * @throws \TypeError if $newArticleAuthor is not a string
	 */
	public function setArticleAuthor($newArticleAuthor) : void{
		// verify the article author  is secure
		$newArticleAuthor = trim($newArticleAuthor);
		$newArticleAuthor= filter_var($newArticleAuthor, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newArticleAuthor) === true) {
			throw(new \InvalidArgumentException("article author field is empty or insecure"));
		}
		// verify the article author name will fit in the database
		if(strlen($newArticleAuthor) > 32) {
			throw(new \RangeException("article author field  is too long"));
		}
		// store the author article info
		$this->articleAuthor = $newArticleAuthor;
	}
	/**
	 * accessor method for articlePublishDateAndTime
	 * @return datetime
	 */

	public function getArticlePublishDateAndTime() : DateTime {
		return ($this->articlePublishDateAndTime);
	}
	/**
	 * @param $newArticlePublishDateAndTime
	 * mutator method for articlePublishDateAndTime
	 */


	public function setArticlePublishDateAndTime($newArticlePublishDateAndTime) : void {
		$this->articlePublishDateAndTime = $newArticlePublishDateAndTime;
	}


  //accessor method for articleContent
   public function getArticleContent() : string {
	return ($this->articleContent);
}
	/**
	 * mutator method for articleContent
	 * @param $newArticleContent
	 */

	public function setArticleContent($newArticleContent): void {
		// verify the article is not empty and  is secure
		$newArticleContent = trim($newArticleContent);
		$newArticleContent= filter_var($newArticleContent, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newArticleContent) === true) {
			throw(new \InvalidArgumentException("article author content is empty or insecure"));
		}
		// verify the article content  will fit in the database
		if(strlen($newArticleContent) > 6000) {
			throw(new \RangeException("article content  is too long"));
		}
		// store the article content
		$this->articleContent = $newArticleContent;
	}
}


$sundayArticle = new Article("18f2b5309fcd4a0885fabfefb9cf2933","today's news ","Bashir Shafii", "1/2/2018", "Blah Blah Blah");
//$sundayArticle->setArticleHeader("Global Warming in Real!");
$sundayArticle->getArticleHeader();