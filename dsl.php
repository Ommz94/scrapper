
<?php

//Scope
//The order id starts with “a2d”
//The customer website ends with “.com”
//The billing first name equals “John”
//The status is either Authorized or Settled
//The amount is between 10 and 20 dollars

$collection = Braintree_Transaction::search(array(
Braintree_TransactionSearch::orderId()->startsWith('a2d'),
Braintree_TransactionSearch::customerWebsite()->endsWith('.com'),
Braintree_TransactionSearch::billingFirstName()->is('John'),
Braintree_TransactionSearch::status()->in(array(
Braintree_Transaction::AUTHORIZED,
Braintree_Transaction::SETTLED
)),
Braintree_TransactionSearch::amount()->between('10.00', '20.00')
));

foreach($collection as $transaction) {
print_r($transaction->id);
}
