<?php
echo "<h1>Halloween week</h1>";

class Books {
  /* Member variables */
  var $price;
  var $title;
  var $bookStoreName = "NJIT deal day<br/>";
  /* Member functions */
  function setPrice($par){
     $this->price = $par;
  }
  
  function getPrice(){
     echo $this->price ."<br/>";
  }
  
  function setTitle($par){
     $this->title = $par;
  }
  
  function getTitle(){
     echo $this->title ." <br/>";
  }
}

$physics = new Books;
$maths = new Books;
$chemistry = new Books;

$physics->setTitle( "Physics for High School" );
$chemistry->setTitle( "Advanced Chemistry" );
$maths->setTitle( "Algebra" );

$physics->setPrice( 10 );
$chemistry->setPrice( 15 );
$maths->setPrice( 7 );

$physics->getTitle();
$chemistry->getTitle();
$maths->getTitle();
$physics->getPrice();
$chemistry->getPrice();
$maths->getPrice();

echo $physics->bookStoreName;
echo $chemistry->bookStoreName;
echo $maths->bookStoreName;

#Constructor
// class Books {
//   /* Member variables */
//   var $price;
//   var $title;
//   var $bookStoreName = "NJIT deal day<br/>";

//   function __construct( $par1, $par2, $par3 ) {
// 	   $this->title = $par1;
// 	   $this->price = $par2;
// 	   $this->bookStoreName = $par3."<br/>";
// 	}
//   /* Member functions */
//   function setPrice($par){
//      $this->price = $par;
//   }
  
//   function getPrice(){
//      echo $this->price ."<br/>";
//   }
  
//   function setTitle($par){
//      $this->title = $par;
//   }
  
//   function getTitle(){
//      echo $this->title ." <br/>";
//   }
// }

// $physics = new Books( "Physics for High School", 22, "NJIT-physics" );
// $maths = new Books ( "Advanced Chemistry", 33 , "NJIT-maths");
// $chemistry = new Books ("Algebra", 44 , "NJIT-chemistry");

// /* Get those set values */
// $physics->getTitle();
// $chemistry->getTitle();
// $maths->getTitle();

// $physics->getPrice();
// $chemistry->getPrice();
// $maths->getPrice();

// echo $physics->bookStoreName;
// echo $chemistry->bookStoreName;
// echo $maths->bookStoreName;

// #Inheritance
// class Novel extends Books {
//    var $publisher;
   
//    function setPublisher($par){
//       $this->publisher = $par;
//    }
   
//    function getPublisher(){
//       echo $this->publisher. "<br />";
//    }
// }
// echo "<br>";
// $history = new Novel('Independent war', '100');
// $history->setPublisher('MIT');
// $history->getTitle();
// $history->getPrice();
// $history->getPublisher();


#overriding
// class Books {
//   /* Member variables */
//   var $price;
//   var $title;
  
//   function __construct( $par1, $par2 ) {
// 	   $this->title = $par1;
// 	   $this->price = $par2;
// 	}
//   /* Member functions */
//   function setPrice($par){
//      $this->price = $par;
//   }
  
//   function getPrice(){
//      echo $this->price ."<br/>";
//   }
  
//   function setTitle($par){
//      $this->title = $par;
//   }
  
//   function getTitle(){
//      echo $this->title ." <br/>";
//   }
// }

// class Novel extends Books {
//    var $publisher;
   
//    function setPublisher($par){
//       $this->publisher = $par;
//    }
   
//    function getPublisher(){
//       echo $this->publisher. "<br />";
//    }

//    function getPrice() {
// 	   echo "The price of this book is ".$this->price . "<br/>";
// 	}
	   
// 	function getTitle(){
// 	   echo "The title of this book is ".$this->title . "<br/>";
// 	}
// }
// $history = new Novel('Independent war', '100');
// $history->setPublisher('MIT');
// $history->getTitle();
// $history->getPrice();
// $history->getPublisher();

#private members
// class MyClass {
//    private $car = "skoda";
//    var $driver = "SRK";
   
//    function __construct($par) {
//       // Statements here run every time
//       // an instance of the class
//       // is created.
//    }
   
//    function myPublicFunction() {
//       return("I'm visible! <br/>");
//    }
   
//    private function myPrivateFunction() {
//       return("I'm  not visible outside!<br/>");
//    }
// }

// $demo = new MyClass(' ');
// echo $demo->myPublicFunction();
// echo $demo->myPrivateFunction();

#Protected members
// class MyClass {
//    protected $car = "skoda";
//    var $driver = "SRK";

//    function __construct($par) {
//       echo "we are in ".$par."class<br />";
//       echo $this->myPrivateFunction();
//    }
   
//    function myPublicFunction() {
//       return("I'm visible!<br/>");
//    }
   
//    protected function myProtectedFunction() {
//       return("I'm  visible in child class!<br/>");
//    }

//    private function myPrivateFunction() {
//       return("I'm  not visible outside!<br/>");
//    }
// }
// $parent = new MyClass('parent');
// echo $parent->myPublicFunction();
// echo $parent->myProtectedFunction();
// echo $parent->myPrivateFunction();

// class childClass extends MyClass{
//  function test(){
//  	echo $this->myProtectedFunction();
//  	echo $this->myPrivateFunction();
//  }
// }

// $child = new childClass('child');
// echo $child->test();


?>















