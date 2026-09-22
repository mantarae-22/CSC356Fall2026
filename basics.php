<?php
    // this is a block of php code, if you write code outside of this block, the PHP interpreter will assume it is HTML code

    // variable - chunk of code that holds a value
    // PHP is loosely types, just like JavaScript
    // each of your php variables, starts with a $
    // variables must begin with a letter or _ underscore; there should only be alpha-numeric characters and _ underscores in variable names
    // no spaces in PHP variable names, PHP variables name are case sensitive

    $name = "Rae"; // use lower case for regular variable names
    // $Name = "Joe"; avoid using capital letters unless working with a CONSTANT (variable where the value does not change)

    // PHP Data Types - String, Integer (whole number), Float (number with decimal point), Boolean (true/false), Array, Object

    // Variable scope - where your variable exists; There are 4 variable scopes: local (in a function), global (outside a function), static (function variable that remembers its value), function paramters

    // this function will calculate payrolll; it does not take any parameters
    function calcPayroll(){ // << this is camelCase; snake case would be calc_payroll
        // local variable - it only exists within this function
        $hoursPerWeek = 20; 
        $payRate = 20;

        $totalPay = $hoursPerWeek * $payRate;

        // echo is the print statement of the PHP world
        // to concatenate separate text, in PHP use the . instead of the +
        echo "Total Pay: " . $totalPay;
    }

    // call the calc payroll function
    calcPayroll();


    // global variable
    $hoursWorkedPerWeek = 30;

    function calcuatePayroll(){
        // reference to the global variable
        global $hoursWorkedPerWeek;

        // local variable
        $payRate = 20;

        $totalPay = $hoursWorkedPerWeek * $payRate;
        echo "Total Pay: " . $totalPay;
    }

    calcuatePayroll();

    // function parameters are like local variables - they are local to the function
    // function parameters can only be accessed inside the function
    function calcPayHours($hoursWorked){
        // local variable
        $payRate = 20;

        $totalPay = $hoursWorked * $payRate;
        echo "<p>Total Pay: " . $totalPay . "</p>";
    }

    calcPayHours(50);

    // static allows us to retain the value of a variable in a function
    function calcMoreHours(){
        $hoursPerWeek = 4;
        static $calc = 3;
        $calc = $calc * $hoursPerWeek;
        echo $calc . "<BR>";
    }

    calcMoreHours();
    calcMoreHours();
    calcMoreHours();

    // to add an external file, use include - if the file is not available a warning will appear
    include 'include_me.php';

    include 'include_me.php';

    // to include a file just one time, use include_once, for example, the header section of the website with the logo
    include_once 'include_once.php';

    // require will produce a fatal error if the file cannot be found and the page will stop running
    require 'require_me.php';

    // when the file should only be included 1 time
    // for example, to connect to the database use require_once
    require_once 'require_once.php';
?>