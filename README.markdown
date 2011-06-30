Open Source Bridge Wordpress Theme
==================================

This is the WordPress theme for `opensourcebridge.org`.

Quick Overview
--------------

To make changes to the WordPress theme:

1. Clone this repository.
2. Make changes to the files, e.g. `frontpage.php`.
3. Deploy them to the production server by running `rake deploy`.
4. Optionally login to WordPress on the production server and use "Delete cache" to make it use the changes immediately.
5. Commit them back to this repository and push the changes, else submit a github pull request.

Common Styles
-------------

We're sharing a set of common styles between several different web apps, so this repository only contains styles that relate directly to the WordPress installation. The common styles, which handle the majority of styling and branding on the site, can be found at [http://github.com/osbridge/osbp_styles/](http://github.com/osbridge/osbp_styles/)

If you're developing the theme, you need to be aware that by default it gets its CSS styles from the production servers at `opensourcebridge.org`. However, you can override this by creating a file in this theme directory called `my_common_styles_url.txt` and put the URL containing the common style to use into it. For example, if you're running a local instance of OCW with its checkout of the styles, you might put the following into the `my_common_styles_url.txt` to have it use those:

    http://localhost:3000/themes/bridgepdx/stylesheets/common_css/osbp_common_v3.css

Shared Fragments
----------------

This WordPress theme reads the header and menu (e.g. "2011 | Attend | Sessions...") from a "shared fragment", a file produced by the OpenConferenceWare Ruby on Rails application. This is necessary because the menu items change depending on the state of the OpenConferenceWare event, such as whether a schedule is available. However, this introduces additional complexity in that not all HTML, CSS and JavaScript that's part of the page is coming from this theme.

Modifying
---------

If you need to make changes to the theme, please do not update files directly on the production server. Instead, modify files in this repository and push them. If you have access to the production server, you can run `rake deploy` from within this directory, which will install them on the production server. If you don't have access to the production server, push your changes into this repository or a fork, and ask someone with access to deploy them.

Contact
-------

If you have any questions, please contact `web@opensourcebridge.org`.
