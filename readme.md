# Web Cakru ARC

This web is made for ARC regeneration program. Powered by Laravel 5.1.11 and Bootstrap v4. Live on [cakruarc2017.esy.es](http://cakruarc2017.esy.es)

## Installation

Requirement:
1. PHP 5.5.9+

Howto:
1. Download the source code, edit the /config/database.php to match your sql configuration.
2. Edit the ./.env file to match sql configuration.
3. Make the table with this code:
```sql
CREATE TABLE `cakru_member` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `nim` int(8) NOT NULL,
  `prodi` varchar(20) DEFAULT NULL,
  `bio` text,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```
4. You are good to go (hopefully).

## Credit

### Front-end
1. Joseph Salimin (16516378): Home
1. Louis Leslie (16516382): Home
1. Wildan Dicky Alnatara (16516084): Member
1. Harso Adjie Brotosukmono (16516076): Gallery
1. Yonas Adiel Wiguna (16516283): Sign Up
1. Gabriel Bentara Raphael (16516171): Sign Up

### Back-end
1. Yonas Adiel Wiguna (16516283)
1. Gabriel Bentara Raphael (16516171)
