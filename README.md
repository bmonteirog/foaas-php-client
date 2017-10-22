# FOAAS PHP Client

The best way to tell people to f* off in PHP.

### Usage

You can install via composer:

```bash
composer require bmonteirog/foaas-php-client
```

Include the Composer's autoload file into your script:
```bash
require __DIR__ . '/vendor/autoload.php';
```

Now you can call all the methods available at the `Bmonteirog\FOAAS\ClientInterface`

```php
$fuck = new Bmonteirog\FOAAS\Client;

// Lists all available operations
echo $fuck->operations();

// Response: {"message":"Please choke on a bucket of cocks.","subtitle":"- Me"}
echo $fuck->asJson()->bucket('Me');

// Response: "Fuck me. - Myself"
echo $fuck->asText()->me('Myself');

// Response: "Juliet, Thou clay-brained guts, thou knotty-pated fool, thou whoreson obscene greasy tallow-catch! - Romeo"
echo $fuck->shakespeare('Juliet', 'Romeo');

// Response: "DO the fucking SOMETHING! - Myself"
echo $fuck->asText()->dosomething('DO', 'SOMETHING', 'Myself');
```

You can check all the responses on the [FOAAS official docs](https://www.foaas.com/).

### Content Negotiation

You can use the following methods to define the response type:

```php
// Adds 'Accept: application/json' header
public function asJson();

// Adds 'Accept: text/html' header
public function asHtml();

// Adds 'Accept: text/plain' header
public function asText();

// Adds 'Accept: application/xml' header
public function asXml();
```


### Shoutcloud

You can also use the `shout()` method to integrate with [Shoutcloud - ALL CAPS AS A SERVICE](http://shoutcloud.io/) and get your messages shouted back to you.

```php
// Response: "JULIET, THOU CLAY-BRAINED GUTS, THOU KNOTTY-PATED FOOL, THOU WHORESON OBSCENE GREASY TALLOW-CATCH! - ROMEO"
echo $fuck->shout()->shakespeare('Juliet', 'Romeo');
```
