# contactmeet

![Screenshot](/images/screenshot.png)

The CiviCRM module for the number of meetings (Activity) of a contact

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Requirements

* PHP v7.2+
* CiviCRM v5.30+
* MySQL 5.7+

## Installation (Web UI)

Learn more about installing CiviCRM extensions in the [CiviCRM Sysadmin Guide](https://docs.civicrm.org/sysadmin/en/latest/customize/extensions/).

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl contactmeethttps://github.com/djgacay/contactmeet-01b/archive/refs/tags/01b.tar.gz
```
## Extension test environment

System: Ubuntu 20.04

* PHP version: 7.4.22(NTS)
* MySQL version: mysql  Ver 14.14 Distrib 5.7.35, for Linux (x86_64)
* Apache version: Apache/2.4.41 (Ubuntu)
* Drupal(7) version: 7.82 release 

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/djgacay/contactmeet-01b.git
cv en contactmeet
```

## Getting Started

Install the module, and use the token from token search or just put **{contactmeet.total_meetings}**. 

*If the contact has any meeting - then it will return the number of **meetings**
* else number of meetings returns is **0** when the contact has no meeting


## Known Issues

The extension is not installing, MySQL version should be 5.7+, only Mysql 5.7 latest version is required. 
