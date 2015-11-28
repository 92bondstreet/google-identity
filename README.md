# Google Identity

> A kickstarter for the Google Identity Toolkit

## Why

Some boilerplate files to help to create a quick login access to your application with the [Google Identity Toolkit](https://developers.google.com/identity/toolkit/)

## Structure

```txt
├── callback.php
├── identity
│   ├── callback-server-config.json
│   └── composer.json
├── index.php
└── login.php
```

File | Description
---- | -----------
index.php | Entry point where we checked if the user is logged. If not, redirection to `/login`
login.php | Page with the signin button
callback.php | the page to return to when authentication is complete

## Usage

```sh
git clone https://github.com/92bondstreet/google-identity.git
cd google-identity/identity
curl -s https://getcomposer.org/installer | php
php composer.phar install
```

### Update the `callback.php`

```js
var config = {
  // Copy and paste client configuration here
};
```

### Update the `callback-server-config.json`

Once configuration done in Google Developers Console, there are two code snippets at the bottom of the page.
The second snippet should be saved in `identity/callback-server-config.json` file.

### Change permission for the private key file

```sh
chmod 755 /absolute/path/to/p12/file
```

## Tips

On the [login](./login.php) page, I hide the `navbar` button:

```html
<div id="navbar" style="display:none"></div>
```

to use a custom button instead and dispatch the click event:

```js
document.querySelector('button.gitkit-button.gitkit-id-submit').dispatchEvent(event);
```

## Licence

[Uncopyrighted](http://zenhabits.net/uncopyright/)
