New Classes
===========
- `.no_mobile`: hides elements for Mobile-View
- `.no_desktop`: hides elements for Desktop-View
- `.no_child`: hides submenu-items in same menu (assigned to Menu-Item as Class)
- `.mobile_fold`: folds the modules in Mobile-View (assaigned to Module Class Suffix; Modul Class Suffix of folded Modules must be unique)
- `.mobile_menu`: makes the menu-module mobile-friendly (asseigned to Menu Class Suffix; Menu Tag ID must be set)
  - `.desktop_fold`: if a sidebar-menu should behave for Mobile-View like topmenu and for Desktop-View like sidebar-menu (asseigned to Menu Class Suffix; Show Sub-menu Items must be set to "Yes")
  - `.nav-bar`: if the menu shold be hidden behind an navbar-button in Mobile-View (button is displayed like an menu-item)

Technic
=======
All mobile folding/unfolding is realized with checkboxes.
For detailed info use links below (both in German):
- https://wiki.selfhtml.org/wiki/HTML/Formulare/input/Radio-Buttons_und_Checkboxen#Der_Checkbox-Hack
- https://wiki.selfhtml.org/wiki/CSS/Anwendung_und_Praxis/Men%C3%BCs_und_mehr_mit_dem_Checkbox-Hack