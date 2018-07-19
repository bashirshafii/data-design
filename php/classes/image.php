<?php//imageId(Primary Key)//imageSize//imageFileType//imageCaption//imageCopyrightOwner/** * Newspaper image class * @author Bashir Shafii * @version 1.0.0 */Class Image {	/**	 * id for Newspaper image. This is the primary key	 */	private $imageId;	private $imageSize;	private $imageFileType;	private $imageCaption;	private $imageCopyrightOwner;	//mutator method for imageID	public function setImageId() {		return $this->imageId;	}	//accessor method for imageId	public function getImageId(){		return ($this->imageId);	}	//mutator method for imageSize	public function setImageSize() {		//enforce image size requirements in megabytes		if($_FILES["fileToUpload"]["size"] > 500000) {			echo "Sorry, your file is too large.";		}		return ($this->imageSize);	}	//accessor method for imageSize	public function getImageSize() {		return ($this->imageSize);	}//mutator method for imageFileType	public function setImageFileType($imageFileType) {		// Allow certain file formats		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"			&& $imageFileType != "gif") {			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		} return ($this->imageFileType);	}	//accessor method for imageFileType	public function getImageFileType() {		return ($this->imageFileType);		}//mutator method for imageCaption	public function setImageCaption() {		return ($this->imageCaption);	}	//accessor method for imageCaption	public function getImageCaption() {		return ($this->imageCaption);	}//mutator method for ImageCopyrightOwner	public function setImageCopyrightOwner() {		return ($this->imageCopyrightOwner);	}	//accessor method for ImageCopyrightOwner	public function getImageCopyrightOwner() {		return ($this->imageCopyrightOwner);		}}