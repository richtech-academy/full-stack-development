<?php

$accountDetails = array(
    'name' => '',
    'passwrd' => '',
    'accountNo' => 0,
    'balence' => 0
);
$transactionHistory = array();

$bankName = "Indian Bank";

$breakLine = "\n";

echo "Welcome to $bankName. How may i assist you? $breakLine";

while(true){

    echo "$breakLine 1. Open a account $breakLine 2. Credit amount $breakLine 3. debit amouny $breakLine 4. Balance Check $breakLine 5. Transaction History $breakLine 6. Close account $breakLine";

    $option = readline("Enter Your Option :");

    switch($option){
        case 1:
            echo "Welcome to open account. $breakLine";

            $customerName = readline("Enter your Name : ");

            $customerpass = readline("Enter your Password :");

            $accountNumber = rand(11111111, 99999999);

            $accountDetails['name'] =  $customerName;
            $accountDetails['passwrd'] = $customerpass;
            $accountDetails['accountNo'] = $accountNumber;

            echo "Congratulations! Your account was opened successfully. Your account number is : $accountNumber";

            break;
        case 2:
            // echo "Welcome to credit section. $breakLine";

            // $customerAccountNumber = readline("Enter your Account Number :");
            
            // $customerPass = readline("Enter your Account Password :");

            // if($accountDetails['accountNo'] ==  $customerAccountNumber && $accountDetails['passwrd'] == $customerPass){
                $balence = readline("Enter The amount : $breakLine");
                $accountDetails['balence'] = $accountDetails['balence'] + $balence;

                $transactionHistory = array(
                    'transactionType' => 'credit',
                    'amount' => $balence,
                    'transactionTime' => date('m/d/Y h:i:s', time())
                );

                echo "Your amount was credited to your account. Your current balence is ".$accountDetails['balence'];

            // }else{
            //     echo "Unauthorized person";
            // }


            break;
        case 3:
            echo "Welcome to debit. $breakLine";

            $DebitAmount = readline("Enter amount : ");


               $currentBalence = $accountDetails['balence'];

               $actualBalence = $currentBalence - $DebitAmount;

               $accountDetails['balence'] = $actualBalence;

                $transactionHistory = array(
                    'transactionType' => 'Debit',
                    'amount' => $DebitAmount,
                    'transactionTime' => date('m/d/Y h:i:s', time())
                );

                echo "Your amount was debited from your account. Your current balence is ".$accountDetails['balence'];

            break;
        case 4:
            echo "Welcome to balence check. $breakLine";

            echo "Your current account balence is : ".$accountDetails['balence'];

            break;
        case 5:
            echo "Welcome to Transaction history. $breakLine";

            $transactionHistoryCount = sizeof($transactionHistory);
            for($i=0; $i<=$transactionHistoryCount; $i++){
                // echo $transactionHistory["$i"];
                print_r($transactionHistory);
            }

            echo $breakLine;

            break;
        case 6:

            $closeAccount = readline("Are you sure you are gone to close this account? Y / N : ");
            if($closeAccount == 'y'){
                echo "Your account was closed.";

                unset($accountDetails);

            }else{
                echo "Thanks to change your option";
            }
            break;
        default:
        print_r($accountDetails);
        print_r($transactionHistory);
            echo "Unknown transaction. $breakLine";
    }

}
?>