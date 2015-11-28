'use strict';

(function login () {
  var signin = document.querySelector('#signin');

  signin.addEventListener('click', function onClick () {
    var event = new MouseEvent('click', {
      'view': window,
      'bubbles': true,
      'cancelable': true
    });

    document.querySelector('button.gitkit-button.gitkit-id-submit').dispatchEvent(event);
  });
}());
