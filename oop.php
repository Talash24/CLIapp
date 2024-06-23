
<?php

// class vehicle{
//     public $name;
//     public $color;

//     function displayName(){
//         echo "Name is : {$this -> name}";
//         echo "color is : {$this -> color}";
//     }

//     function set($name, $color){
//         $this -> name = $name;
//         $this -> color = $color;
//     }

// }

// $vehicle = new vehicle();
// $vehicle -> set("tata", "black");

// $vehicle -> displayName();

// class Fruit{
//     public $name;
//     public $color;

//     function set_name($name){
//         $this -> name = $name;
//     }

//     function get_name(){
//         return $this -> name;
//     }
// }

// $apple = new Fruit();
// $banana = new Fruit();

// $apple -> set_name('Apple');
// $banana -> set_name('Banana');

// echo $apple -> get_name();

//  class Fruit{
      
//       public $name;
//       public $color;
//        function set_name($name){
        
//        }
//  }

// php constructor 


// class Fruit{
//     public $name;
//     public $color;

//     function __construct($name, $color){
//         $this -> name = $name;
//         $this -> color = $color;
//     }

//     function get_name(){
//         return $this -> name;
//     }

//     function get_color(){
//        return $this -> color;
//     }
// }

// $apple = new Fruit("Apple", "red");
// echo $apple -> get_name();
// echo $apple -> get_color();



// $longOptions = ["f:", "t::"];

// $options = getopt("", $longOptions);

// $contents = file_get_contents($options['f']);
// file_put_contents($options['t'], $contents);

// $input = readline("Enter the input text");
// var_dump($input);

// fscanf(STDIN, "%d %d\n", $a, $b);
// printf("%d %d\n", $a, $b);

// $options = getopt("", ["min::", "max::"]);

// $min = $options["min"] ?? 1;
// $max = $options["max"] ?? 100;

// $number = rand($min, $max);

// while(true){

//     $guess = readline("What is the number?");
    
//     if($guess == $number){
//         printf("Yes, you are correct\n");
//         break;
//     }else if($guess > $number){
//         printf("Try a small number");
//     }else{
//         printf("Try a higher number");
//     }
// }

// class Student{
//     public $name;
//     public $roll;

//     function getName(): string{
//         return $this -> name;
//     }

//     function getRoll(){
//         return $this -> roll;
//     }

//     function display(): void{
//         echo "Name is" . $this -> getName();
//         printf("\n");
//         echo "Roll is" . $this -> getRoll();
//     }
// }

// $std = new Student();
// $std -> name = "abcd dd";
// $std -> roll = 34;
// echo $std -> getName();
// $std -> display();

// $std2 = new Student();
// $std2 -> name = "dkdkdk";
// echo $std2 -> getName();

// class Student{
//     public $name;
//     public $roll;

//     function __construct(string $name, int $roll){
//         $this -> name = $name;
//         $this -> roll = $roll;
//     }

//     function display(): void{
//         echo "Name is {$this -> name}";
//         printf("\n");
//         echo "Roll is {$this -> roll}";
//     }
// }

// $std = new Student("abcd dd", 34);
// $std -> display();

// class Student{
//     private $name = "talash";

//     public function display(){
//         echo "Student Name is: {$this-> name}";
//         $this -> test();
//     }

//     private function test(){
//         echo "Welcome to Text\n";
//     }

    
// }

// $std = new Student;
// $std -> display();

// class Animal{
//     protected $species;
//     public function __construct($species){
//         $this -> species = $species;
//         echo "Animal constructor called. Species is: {$this -> species}";
//     }

//     public function getSpecies(){
//         return $this -> species;
//     }
// }

// class Dog extends Animal{
//     private $name;
//     private $age;

//     public function __construct($species, $name, $age){
//         parent::__construct($species);
//         $this -> name = $name;
//         $this -> age = $age;
//         echo "Dog constructor called. Name is: {$this -> name}, Age is: {$this -> age}\n";
//     }

//     public function getName(){
//         return $this -> name;
//     }

//     public function getAge(){
//         return $this -> age;
//     }
    
//     public function displayDetails(){
//         echo "Species: " . $this -> getSpecies() . ", Name: " . $this -> getName() . ", Age: " . $this -> getAge() . "\n";
//     }
// }

// $dog = new Dog("Canine", "Buddy", 5);
// $dog -> displayDetails();

// class ParentClass{
//     public $publicVar = "Public Variable";
//     protected $protectedVar = "Protected Variable";
//     private $privateVar = "Private Variable";

//     public function publicMethod(){
//         return "Public Method";
//     }

//     protected function protectedMethod(){
//         return "Protected Method";
//     }

//     private function privateMethod(){
//         return "Private Method";
//     }

//     public function showPrivate(){
//         return $this -> privateVar . " - " . $this-> privateMethod();
//     }
// }

// class ChildClass extends ParentClass{
//     public function accessProtected(){
//         return $this -> protectedVar . " - " . $this -> protectedMethod();
//     }
// }

// $child = new ChildClass();
// echo $child -> showPrivate();


// class Account{
//     private $accountNumber;
//     private $balance;

//     public function __construct($accountNumber, $initialBalance = 0){
//         $this -> accountNumber = $accountNumber;
//         $this -> balance = $initialBalance;
//     }

//     public function getBalance(){
//         return $this -> balance;
//     }

//     public function deposit($amount){
//         if($amount > 0){
//             $this -> balance += $amount;
//             echo "Deposit successful. New balance: " . $this -> balance . "\n";
//         }else{
//             echo "Deposit amount must be positive. \n";
//         }
//     }
//     public function withdraw($amount){
//         if($amount > 0 && $amount <= $this -> balance){
//             $this -> balance -= $amount;
//             echo "Withdrawal successful. New balance: " . $this -> balance . "\n";
//         }else if($amount > $this -> balance){
//             echo "Insufficient funds. Withdrawal failed.\n";
//         }else{
//             echo "Withdrawal amount must be positive";
//         }
//     }
// }

// class ATM{
//     private $currentAccount;

//     public function insertCard(Account $account){
//          $this -> currentAccount = $account;
//          echo "Card inserted. Welcome!\n";
//     }

//     public function ejectCard(){
//         $this -> currentAccount = null;
//         echo "Card ejected. Thank you for using the ATM.\n";
//     }

//     public function checkBalance(){
//         if($this -> currentAccount){
//             echo "Current balance: " . $this -> currentAccount -> getBalance() . "\n";
//         }else{
//             echo "No card inserted.\n";
//         }
//     }

//     public function deposit($amount){
//          if($this -> currentAccount){
//             $this -> currentAccount -> deposit($amount);
//          }else{
//             echo "No card inserted.\n";
//          }
//     }

//     public function withdraw($amount){
//         if($this -> currentAccount){
//             $this -> currentAccount -> withdraw($amount);
//         }else{
//             echo "No card inserted.\n";
//         }
//     }
// }

// $account = new Account('34443344', 1000);

// $atm = new ATM();

// $atm-> insertCard($account);
// $atm -> checkBalance();
// $atm -> deposit(400);
// $atm -> withdraw(599);
// $atm -> checkBalance();
// $atm -> withdraw(1000);
// $atm -> ejectCard();
// class User{
//     private $userId;
//     private $userName;
//     private $email;

//     public function __construct($userId, $userName, $email){
//         $this -> userId = $userId;
//         $this -> userName = $userName;
//         $this -> email = $email;
//     }

//     public function getUserId(){
//         return $this -> userId;
//     }

//     public function getUserName(){
//         return $this -> userName;
//     }

//     public function getEmail(){
//         return $this -> email;
//     }
// }

// class Train{
//     private $trainId;
//     private $trainName;
//     private $schedule;
//     private $totalTickets;
//     private $bookedTickets;

//     public function __construct($trainId, $trainName, $schedule, $totalTickets){
//         $this -> trainId = $trainId;
//         $this -> trainName = $trainName;
//         $this -> schedule = $schedule;
//         $this -> totalTickets = $totalTickets;
//         $this -> bookedTickets = 0;
//     }

//     public function getTrainId(){
//         return $this -> trainId;
//     }

//     public function getTrainName(){
//         return $this -> trainName;
//     }

//     public function getSchedule(){
//         return $this -> totalTickets;
//     }

//     public function getTotalTickets() {
//         return $this->totalTickets;
//     }

//     public function getAvailableTickets(){
//           return $this -> totalTickets - $this -> bookedTickets;
//     }

//     public function bookTickets($numberOfTickets){
//         if($numberOfTickets <= $this -> getAvailableTickets()){
//             $this -> bookedTickets += $numberOfTickets;
//             return true;
//         }else{
//             return false;
//         }
//     }

//     public function cancelTickets($numberOfTickets){
//         if($numberOfTickets <= $this -> bookedTickets){
//             $this -> bookedTickets -= $numberOfTickets;
//             return true;
//         }else{
//             return false;
//         }
//     }
// }

// class Ticket{
//     private $ticketId;
//     private $trainId;
//     private $userId;

//     public function __construct($ticketId, $trainId, $userId){
//         $this -> ticketId = $ticketId;
//         $this -> trainId = $trainId;
//         $this -> userId = $userId;
//     }

//     public function getTicketId(){
//         return $this -> ticketId;
//     }

//     public function getTrainId(){
//         return $this -> trainId;
//     }

//     public function gerUserId(){
//         return $this -> userId;
//     }
// }

// class BookingManager{
//     private $users;
//     private $trains;
//     private $tickets;

//     public function __construct(){
//         $this -> users = [];
//         $this -> trains = [];
//         $this -> tickets = [];
//     }

//     public function registerUser(User $user){
//         $this -> users[$user->getUserId()] = $user;
//     }

//     public function getUser($userId){
//         return isset($this -> users[$userId]) ? $this -> users[$userId] : null;
//     }

//     public function addTrain(Train $train){
//         $this -> trains[$train -> getTrainId()] = $train;
//     }

//     public function getTrain($trainId){
//         return isset($this -> trains[$trainId]) ? $this -> trains[$trainId] : null;
//     }

//     public function bookTicket($trainId, $userId, $numberOfTickets){
//         $train = $this -> getTrain($trainId);
//         $user = $this -> getUser($userId);
//         if($train && $user && $train -> bookTickets($numberOfTickets)){
//             for($i = 0; $i < $numberOfTickets; $i++){
//                 $ticketId = uniqid();
//                 $ticket = new Ticket($ticketId, $trainId, $userId);
//                 $this -> tickets[$ticketId] = $ticket;
//             }

//             return true;
//         } else{
//             return false;
//         }
//     }

//     public function cancelTicket($ticketId){
//         if(isset($this -> tickets[$ticketId])){
//             $ticket = $this -> tickets[$ticketId];
//             $train = $this -> getTrain($ticket -> getTrainId());
//             if($train && $train -> cancelTickets(1)){
//                 unset($this -> tickets[$ticketId]);
//                 return true;
//             }
//         }

//         return false;
//     }

//     public function getTicketsByUser($userId){
//         $userTickets = [];
//         foreach($this -> tickets as $ticket){
//             if($ticket -> gerUserId() === $userId){
//                 $userTickets[] = $ticket;
//             }
//         }

//         return $userTickets;
//     }
// }

// $bookingManager = new BookingManager();
// $user1 = new User('user123', 'John Doe', 'jonh@exampl.com');
// $user2 = new User('user444', 'abcd dd', 'abcd@example.com');
// $bookingManager -> registerUser($user1);
// $bookingManager -> registerUser($user2);

// $train1 = new Train(1, "Express A", "10:00 AM", 100);
// $train2 = new Train(2, "Express B", "2:00 PM", 50);

// $bookingManager -> addTrain($train1);
// $bookingManager -> addTrain($train2);

// if($bookingManager -> bookTicket(1, 'user123', 3)){
//      echo "Tickets booked successfully for Express A by john Doe.\n";
// }else{
//     echo "Failed to book tickets for Express A by john Doe.\n";
// }

// if ($bookingManager->bookTicket(1, 'user456', 5)) {
//     echo "Tickets booked successfully for Express A by Jane Smith.\n";
// } else {
//     echo "Failed to book tickets for Express A by Jane Smith.\n";
// }

// $tickets = $bookingManager -> getTicketsByUser('user123');
// echo "Tickets for john Doe";
// foreach($tickets as $ticket){
//     echo "Ticket ID" . $ticket -> getTicketId() . ", Train ID: " . $ticket -> getTrainId(). "\n";
// }


// $ticketToCancel = $tickets[0] -> getTicketId();
// if($bookingManager -> cancelTicket($ticketToCancel)){
//     echo "Ticket {$ticketToCancel} cancelled successfully.\n";
// }else{
//     echo "Failed to cancel ticket {$ticketToCancel}.\n";
// }



class FinanceManager{
    private $totalIncome = 0;
    private $savings = 0;
    private $file_path;
    private $file_path1;
    private $nowdoc = <<<'EOD'
        Name: Salary, Type: INCOME
        Name: Business, Type: INCOME
        Name: Loan, Type: INCOME
        Name: Rent, Type: EXPENSE
        Name: Family, Type: EXPENSE
        Name: Recreation, Type: EXPENSE
        Name: Sadakah, Type: EXPENSE
        Name: Food, Type: EXPENSE
        EOD;

    public function __construct($file_path, $file_path1){
        $this -> file_path = $file_path;
        $this -> file_path1 = $file_path1;
    }

    public function addIncome($amount, $category){

        if($amount > 0){
            $this -> savings += $amount;
            echo "Income added successfully.\n";
            $data = "Income: {$amount}\n";
            $file_handle = fopen($this -> file_path, 'a');
            fwrite($file_handle, $data);
            echo "\n";
            
        }else{
            echo "Please insert valid amount. Thank you!\n";
        }
    }

    public function addExpense($amount, $category){

         if($amount >= $this -> savings){
            $this -> savings -= $amount;
            $data = "Expense: {$amount}\n";
            $file_handle1 = fopen($this -> file_path1, 'a');
            fwrite($file_handle1, $data);
            echo "\n";
         }else{
            echo "Insufficient amount.\n";
         }
    }

    public function showSavings(){
        echo $this -> savings;
    }

    public function showIncomes(){
         
        $data = file_get_contents($this -> file_path);
        echo $data;
        echo "\n";
    }

    public function showExpenses(){
        $data = file_get_contents($this -> file_path1);
        echo $data;
        echo "\n";
    }

    public function showCategories(){ 

         echo $this -> nowdoc;
         echo "\n";
    }

    
}

class CLIApp{

    private $financeManager;


    private const ADD_INCOME = 1;
    private const ADD_EXPENSE = 2;
    private const VIEW_INCOME = 3;
    private const VIEW_EXPENSE = 4;
    private const VIEW_SAVINGS = 5;
    private const VIEW_CATEGORIES = 6;
    private const EXIT_APP = 7;

    private $options = [

        self::ADD_INCOME => 'Add income',
        self::ADD_EXPENSE => 'Add expense',
        self::VIEW_INCOME => 'View incomes',
        self::VIEW_EXPENSE => 'View expenses',
        self::VIEW_SAVINGS => 'View savings',
        self::VIEW_CATEGORIES => 'View categories',
        self::EXIT_APP => 'Exit'
    ];

    public function __construct($financeManager){
          $this -> financeManager = $financeManager;
    }

    public function run():void{

        while(true){
            foreach($this -> options as $option => $label){
                printf("%d. %s\n", $option, $label);
            }

            $choice = intval(readline("Enter your option: "));
            switch($choice){
                case self::ADD_INCOME:
                    $amount = (float)trim(readline("Enter income amount: "));
                    $category = trim(readline("Enter income category: "));
                    $this -> financeManager -> addIncome($amount, $category);
                    break;
                case self::ADD_EXPENSE:
                    $amount = (float)trim(readline("Enter expense amount: "));
                    $category = trim(readline("Enter expense category: "));
                    $this -> financeManager -> addExpense($amount, $category);
                    break;
                case self::VIEW_INCOME:
                    $this -> financeManager -> showIncomes();
                    break;
                case self::VIEW_EXPENSE:
                    $this -> financeManager -> showExpenses();
                    break;
                case self::VIEW_SAVINGS:
                    $this -> financeManager -> showSavings();
                    break;
                case self::VIEW_CATEGORIES:
                    $this -> financeManager -> showCategories();
                    break;
                case self::EXIT_APP:
                    return;
                default:
                    echo "Invalid option.\n";
            }
            
        }
    }


}

$financeManager = new FinanceManager('d1.txt', 'd2.txt');
$capp = new CLIapp($financeManager);
$capp -> run();
