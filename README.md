# Paystation for CiviCRM

PayStation payment processor extension for CiviCRM.

## Installation & Upgrading

Refer to [CiviCRM Extensions documentation](https://docs.civicrm.org/user/en/4.7/introduction/extensions/)

For upgrade to 4.7, special steps are required. Please refer to [#4: Upgrade to 4.7](https://github.com/fuzionnz/nz.co.fuzion.paystation/issues/4).

## HMAC Key

As of [#9: Dynamic Return URLs](https://github.com/fuzionnz/nz.co.fuzion.paystation/issues/9), it's possible to have the processor set the return URL automatically during the transaction (rather than having the IPN/return URL configured at Paystation end). In order to do this, you need to add your account's "HMAC Key" in the payment processor configuration. If this field is not visible, try clearing CiviCRM's cache (visit `civicrm/clearcache` or execute `cv flush`, `drush cvapi System.flush` etc).

## Contributors

* Elliot Pahl (@halcyonCorsair)
* Eileen McNaughton (@eileenmcnaughton)
* Chris Burgess (@xurizaemon)
* Jitendra Purohit (@jitendrapurohit)

## Supporting Organisations

* InternetNZ (@internetnz)
* Catalyst IT (@catalyst)
* Fuzion NZ (@fuzionnz)
