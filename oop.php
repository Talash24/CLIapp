
<?php





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
