# Fatal error: Call to a member function prepare() on null

Reproducing and fixing the "Fatal error: Call to a member function prepare() on null" error in PHP/MySQL. This error
is caused when trying to reference a PDO object but using a null variable by mistake. The \*broken and \*fixed PHP files
show both the error condition and the working one.

## System requirements

Some flavor of Linux with Docker installed

## Setup

To run the Docker image, simply execute the `run.sh` script.

Once it's running, execute the SQL in `people.sql` file in the database and then change the credentials in each of the
PHP files. The username "admin" will always be the same, but the password will be different. The password can be found
in the standard output of the Docker container once it's finished booting.

For an in-depth look at how to reproduce and fix the "Fatal error: Call to a member function prepare() on null"
error and a walk-through of this code,
[check out the corresponding article on badcodernocookie.com](https://badcodernocookie.com/fatal-error-call-to-a-member-function-prepare-on-null/)!
