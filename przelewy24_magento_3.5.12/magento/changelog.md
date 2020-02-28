# Change Log #

## 3.5.12 - 04.09.2019

- add payment method 218.

## 3.5.11 - 12.07.2018

- fixed link to payment finish in multistore and run to another browser 
- add logo mBank to installment payment
- email template translate

## 3.5.10 - 14.06.2018

- Protection against deleting saved cards from another user

## 3.5.9 - 18-12-2017

- Security fixes

## 3.5.8 - 07.11.2017

- Critical security fixes

## 3.5.7 - 18.10.2017 
- Fixed email sending
- Added english email template

## 3.5.6 - 28.06.2017 
- zencard performance

## 3.5.5 - 03.03.2017 - 

- Added translations.
- Translated texts in JavaScript (config.js).

## 3.5.4 - 01.03.2017 - 

- Fixed setting slow payments.

## 3.5.3 - 01.03.2017 - 

##### Fixed saving used credit cards:

- Cards are not deleted when option not to save credit cards is checked,
- option can be disabled in payment checkout.

## 3.5.2 - 23.02.2017

- Base language: EN

## 3.5.1 - 22.02.2017

- Added Hungarian translations.

## 3.5.0 - 07.02.2017 -  (Bug #2352)

- Added function getStoreID in Przelewy24 Helper. Function is used to get settings from different scopes.

## 3.4.9 - 03.01.2017 ##
- Added JS for 3ds returns (Feature #1904)

## 3.4.8 - 28.12.2016 ##
- Mostrami plugin version.

## 3.4.7 - 3.11.2016 ##

- Updated ZenCard library.
- Fixed discount on invoice.

## 3.4.6 - 27.10.2016 ##

- Fixed zencard with extracharge. 

## 3.4.5 - 18.10.2016 ##

- Fixed oneclick - save cart in shop account.

## 3.4.4 - 14.10.2016 ##

- Added class `Przelewy24Product`.
- Prepare products cart for p24. 

## 3.4.3 - 12.10.2016 ##

- Default payment methods.

## 3.4.2 - 05.10.2016 -  ##

- Changed functionality of ZenCard coupons to new version.
- Added _zencard field and withZencard method to the Transaction Class.

## 3.4.1 - 29.09.2016 -  ##

- Fixed displaying amount with discount counted by products prices with taxes.

## 3.3.10 - 29.09.2016 ##

- Order pdf invoice with ZenCard discount.
- ZenCard discount info in bottom cart.

## 3.3.9 - 28.09.2016 -  ##

- Fixed applying ZenCard discount to a cart amount without taxes.

## 3.3.8 - 28.09.2016 ##

- Fixed ZenCard styles for box and discount info.

## 3.3.7 - 27.09.2016 ##

- Fixed applying ZenCard discount to all prices in cart totals.

## 3.3.6 - 20.09.2016 ##

- Changed ZenCardApi class to use `number_format` function in setting `p24_amount_discount`.

## 3.3.5 - 20.09.2016 ##

- Unification plugin version in all xmls.

## 3.2.10 - 20.09.2016 ##

- Added default mail template for payment link in pl locale. Mail for "Send an e-mail with the link for P24".

## 3.2.9 - 19.09.2016 ##

- Fixed double zencard confirm.

## 3.2.8 - 14.09.2016 -  ##

- Fixed bug - logging into account having an existing cart while checkouting an order causing bad shipping cost in order review.

## 3.2.7 - 14.09.2016 -  ##

- Changed a functionality of adding a ZenCard discount to the orders.

## 3.2.6 - 09.09.2016 ##

- Fixed empty discount

## 3.2.5 - 08.09.2016 ##

- display 'Pay with Przelewy24' only on order details with payment method Przelewy24


## 3.2.4 - 01.09.2016 ##

- app/code/local/Dialcom/Przelewy/Model/Payment/Przelewy.php, app/design/frontend/base/default/template/dialcom/przelewy/redirect.phtml
- Added shipping cost,
- quantity, price - fixed format

