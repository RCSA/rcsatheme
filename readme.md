# RCSA Theme

The rcsa theme provides the theming for the rcsa website.  It is based off Bartik.  In addition to defining the layout of the site, it also modifies the display of a number of custom content types on the site, which, in parallel with the views module, provide most of the dynamic portions of the site.

**Note that lots of stuff is defined in the css so read this if your confused about something which isn't showing up/behaves unexpectedly**

## Page

The only behavioural modification to take real note of here is the way that the menus behave.  Some fairly complex CSS rules are used to hide the bulk of the menu tree when not in use for the left side bar, and the user menu doesn't display for the admin user as it would then contain everybody's links (too many to fit in the space).

The code responsible for hiding the user menu is on line 152 of page.tpl.php:

    !user_access('edit any committee_member content')

## Newsletter

Our college newsletter (The Brick) is displayed as a list of links directly to PDFs using the following files to modify its display.

 - node--newsletter.tpl.php (select the layout of the fields to include)
 - field--field_file--newsletter.tpl.php (return a plain-text version of the path)

## Sponsor

This uses a very similar structure to the Newsletter type to display just an image with a link to the homepage.  This is then used to display the logos of our sponsors.

 - node--sponsor.tpl.php (Structure the image tag inside an anchor tag)
 - field--field_logo.tpl.php (Return the plain text link to the image)
 - field--field_homepage.tpl.php (Return the plain text link to the homeage)

## Committee Member

Customise the display of the committee member's contact details, including some JavaScript code.  The purpose of the Javascript code is to pull the Facebook UserID from the facebook URL and use it as the user's profile photo if they haven't already created one.  This could probably be better done with a Drupal module, but I couldn't be bothered to write the code in php and thought it would be a neat feature.

 - node--committee_member.tpl.php

## Open Meeting

Customise the display of open meetings to always use names "Agenda" and "Minutes" for files include edit links if authorised and not link titles.

 - node--open_meeting.tpl.php (layout and edit links)
 - field--field_agenda.tpl.php (Display with text "Agenda")
 - field--field_minutes.tpl.php (Display with text "Minutes")


## Disclaimer

This module is provided as is, neither the RCSA, nor the authors of this module accept any liability for errors it may cause.