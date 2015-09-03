# PHP Ratings Plugin Demo

This is a demo for https://github.com/xinxinw1/ratings

Run it at http://musiclifephilosophy.com/codes/ratings-demo/

## Installation

You need a server that has php, mysql and git.

1. `$ git clone --recursive https://github.com/xinxinw1/ratings-demo.git`
2. Create a ratings table in MySQL based on `ratings-demo/lib/ratings/ratings.sql`
3. Create a ratings user in MySQL with database-specific SELECT,INSERT,UPDATE,DELETE privileges on the ratings table.
4. Copy `ratings-demo/lib/ratings/authinfo.php.example` to `ratings-demo/lib/ratings/authinfo.php` and change the info to fit your system.
5. Open `ratings-demo/`

## License

This program is dedicated to the public domain using the [Creative Commons CC0](http://creativecommons.org/publicdomain/zero/1.0/). See `LICENSE.txt` for details.
