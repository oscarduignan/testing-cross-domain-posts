# Testing out how cross domain posts within sessions

```
caddy run
```

Then go to https://internal.localhost/start.php

It will set a secure cookie and display a remote page in an iframe with a form

When you click the button in the iframe it will post the form back to internal/iframe.php which will redirect the top window

Beside that, it will also check for our fake session cookie and if it doesn't exist then create one

I've found that we end up with our cookie overwritten, but if we remove the bit that can overwrite the cookie on the internal/iframe.php then the js based top window redirection that sends you to the result.php will use the session cookie even though the external post to internal/iframe.php didn't have it