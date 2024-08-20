<?php

class Book {
	// Private properties
	private $title;
	private $availableCopies;

	// Constructor to initialize properties
	public function __construct($title, $availableCopies) {
    	$this->title = $title;
    	$this->availableCopies = $availableCopies;
	}

	// Method to get the title of the book
	public function getTitle() {
    	return $this->title;
	}

	// Method to get the available copies of the book
	public function getAvailableCopies() {
    	return $this->availableCopies;
	}

	// Method to borrow a book
	public function borrowBook() {
    	if ($this->availableCopies > 0) {
        	$this->availableCopies--;
        	return true;
    	}
    	return false;
	}

	// Method to return a book
	public function returnBook() {
    	$this->availableCopies++;
	}
}

class Member {
	// Private property
	private $name;

	// Constructor to initialize properties
	public function __construct($name) {
    	$this->name = $name;
	}

	// Method to get the name of the member
	public function getName() {
    	return $this->name;
	}

	// Method for the member to borrow a book
	public function borrowBook(Book $book) {
    	$book->borrowBook();
	}

	// Method for the member to return a book
	public function returnBook(Book $book) {
    	$book->returnBook();

	}
}

// Usage

// Create 2 books with the given properties
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members with the given properties
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Members borrow books
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Print available copies of books
echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . "\n";
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() . "\n";

?>
