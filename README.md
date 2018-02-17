# Delipress Utils
## Installation
Be sure you have installed [Delipress](https://delipress.io) on your WordPress. You can download [free version](https://fr.wordpress.org/plugins/delipress/) or choose [your subscription plan](https://delipress.io/pricing/)

Be sure your plugin is activated.

Download `tco-delipress.php` file, move it to `mu-plugins` directory and it's done!
 
## Usage
- Get Subscriber ID from Subscriber e-mail and list ID :

`delipress_get_subscriber_id( $listId, $email, $args = array()  )`

| Variables | Type | What is it ? |
|---|---|---|
| `$list id` | `int` | is ID of the list in which you want to search for |
| `$email` | `string` | is subscriber e-mail you search for |
| `$args` | `array` | is `optional` |