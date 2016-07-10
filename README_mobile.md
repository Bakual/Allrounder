Mobile Features
===============

How to use
----------
1. Enable mobile view for phones/tablets under "Global Template Layout" (default is enabled for phones)

   The Options are translated to pixel values. This means, that a small window will enable the Mobile-View.  
   **Phones** is translated to a maximum width of 767px;  
   **Tablets** is translated to a maximum width of 979px;

2. Add the needed classes to the modules

New Classes
-----------
- `.no_child`: hides submenu-items in same menu (assigned to Menu-Item as Class)
- `.mobile_fold`: folds the modules in Mobile-View (assaigned to Module Class Suffix; Module Class Suffix of folded Modules must be unique, spaces are replaced by underscore)
- `.mobile_menu`: makes the menu-module mobile-friendly (asseigned to Menu Class Suffix or choose mobile as alternative layout)
  - `.desktop_fold`: if a sidebar-menu should behave for Mobile-View like topmenu and for Desktop-View like sidebar-menu (asseigned to Menu Class Suffix; Show Sub-menu Items must be set to "Yes")
  - `.nav-bar`: if the menu shold be hidden behind an navbar-button in Mobile-View (button is displayed like an menu-item; asseigned to Menu Class Suffix)

Useful Bootstrap Classes
------------------------
The following classes can be used to hide elements in Desktop- or Mobile-View. If asseigned to Modul Class Suffix the modules will appear/disappear.
- if used "Phones" for Mobile-View in the backend:
  - `.visible-phone`: hides element in Desktop-View
  - `.hidden-phone`: hides elements in Mobile-View
- if used "Tablets" for Mobile-View in the backend:
  - `hidden-desktop`: hides elements in Desktop-View
  - `visible-desktop`: hides elements in Mobile-View
- for more info look at http://getbootstrap.com/2.3.2/scaffolding.html#responsive

Technic
-------
All mobile folding/unfolding is realized with checkboxes.  
For detailed info use links below (both in German):
- https://wiki.selfhtml.org/wiki/HTML/Formulare/input/Radio-Buttons_und_Checkboxen#Der_Checkbox-Hack
- https://wiki.selfhtml.org/wiki/CSS/Anwendung_und_Praxis/Men%C3%BCs_und_mehr_mit_dem_Checkbox-Hack
