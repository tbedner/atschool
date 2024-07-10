# Customerror

## Contents of this file

- Introduction
- Recommended modules
- Installation
- Configuration
- FAQ
- Maintainers


## Introduction

**Customerror** allows the site administrator to create custom error
pages for HTTP status codes 403 (access denied) and 404 (page not
found), without the need to create nodes for each of them.

Main features:

- Configurable page title and descriptions.
- There are no author and date/time headers as with normal nodes.
- Any HTML formatted text can be be put in the page body.
- The error pages are themeable.
- Users who are not logged in and try to access an area that requires
  login will be redirected to the page they were trying to access after
  they login.
- Allows custom redirects for 404s.

Since the error pages are not real nodes, they do not have a specific
content type, and will not show up in node listings.

At present, the module can be set up to handle 403 and 404
errors. Drupal only allows those two errors to be assigned custom
pages. However, the design of the module is flexible and can
accommodate future error codes easily.

- For a full description of the module, visit the [project page][1].
- To submit bug reports and feature suggestions, or to track changes
  visit the project's [issue tracker][2].
- For community documentation, visit the [documentation page][3].


## Recommended modules

* [Advanced Help][4]:  
  When this module is enabled, display of the project's `README.md`
  will be rendered when you visit
  `/admin/help/ah/customerror/README.md`.


## Installation

1. Install as you would normally install a contributed drupal
   module. See: [Installing modules][5] for further information.
2. To install, tick the **Customerror** module on the *Extend*
   page. Click on "Install".


## Configuration

First, configure Basic site error reporting:

1. Navigate to **Manage » Configuration » System » Basic site
   settings**
    - In the "Error pages" section, for 403 (access denied), enter
      the value: `customerror/403` 
    - For 404 (not found), enter the value: `customerror/404`
    - Click on "Save configuration".
1. Configure the module:
    - Navigate to **Manage » Configuration » System » Custom error**.
    - Enter any title and description you want for the 404 (not found)
      and 403 (access denied) pages.
    - You can use any HTML tags to format the text.
    - Click on Save configuration.
1. Test your error pages.
    - Copy your present admin page url.
    - Try to go to a non-existent Drupal page on your site.
      You should see your custom error page for 404 (not found) page.
    - Log out from your site.
    - Paste the admin page url and try to go there.
      You should see your custom error page for 403 (access denied) page.

Note that **Customerror** keeps track of what page the user is trying to
access, so after logging in, the user will be redirected to that page.

### Set up custom redirects for 404 errors

It is possible to set up custom redirects for status code 404 (page
not found). You do this in the field named "Redirect list" on the
module's configiuration page.

For example if you had a page called "foo" and a page called "xyz",
then you moved them to a page called "bar", and "abc" respectively,
you can setup a redirect pair of:

    ^foo$ bar
    ^xyz$ abc

The first pair will transparently redirect users trying to access
"example.com/foo" to "example.com/bar".  The second pair will
transparently redirect users trying to access "example.com/xyz" to
"example.com/abc".

You can have multiple pairs of redirects. Each must be on a line by
itself.

Note that the first argument is a *regexp*, and the second argument is
a *path*. You have to use one space between them, and enter each
pattern on a line by itself. You cannot use variables.

For more flexible URL rewriting, including variables, you may consider
using an external URL rewrite engine, such as Apache `mod_rewrite`.


## FAQ

**Q: I want to prevent robots from indexing my custom error pages by
setting the robots meta tag in the HTML head to "noindex".**

**A:** There is no need to. **Customerror** returns the correct HTTP
status codes (403 and 404). This will prevent robots from indexing the
error pages.

**Q: I want to customize the custom error template output.**

**A:** In your theme template folder for your site, copy the template
provided by the **Customerror** module
(i.e. `templates/customerror.html.twig`) and then make your
modifications there.

**Q: I want to have a different template for my 404 and 403 pages.**

**A:** Copy `customerror.html.twig` to
`customerror--404.html.twig` and `customerror--403.html.twig`. You
do not need a `customerror.html.twig` for this to work.

**Q: Some 403 errors (e.g. "http://example.org/includes") are served
by the Apache web server and not by Customerror. Isn't that a
bug?**

**A:** No. **Customerror** is only designed to provide a custom error
page when the page is processed by Drupal.  The `.htaccess` file that
comes with Drupal will catch some attempts to access forbidden
directories before Drupal even see the requests.  These access
attempts will get the default Apache 403 error document, unless you
use the Apache ErrorDocument directive to override this, e.g:
ErrorDocument 403 /error/403.html For more information about this, see
[Apache Custom Error Responses][A].


## Maintainers

The project's owner is [kbahey][6] (Khalid Baheyeldin -
[https://baheyeldin.com/khalid][7] and [https://2bits.com/][8]).

The current maintainer is [gisle][8] (Gisle Hannemyr).

The authors can be contacted for paid customizations of this module
as well as Drupal consulting, installation, development, and
customizations.

[1]: https://www.drupal.org/project/customerror
[2]: https://www.drupal.org/project/issues/customerror
[3]: https://www.drupal.org/docs/contributed-modules/customerror
[4]: https://www.drupal.org/project/advanced_help

[5]: https://www.drupal.org/docs/extending-drupal/installing-modules

[A]: https://httpd.apache.org/docs/current/custom-error.html

[6]: https://www.drupal.org/u/kbahey
[7]: https://baheyeldin.com/khalid
[8]: https://2bits.com/
[9]: https://www.drupal.org/u/gisle
