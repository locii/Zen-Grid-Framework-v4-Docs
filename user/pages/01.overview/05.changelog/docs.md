---
title: Changelog
taxonomy:
    category: docs
---

This is the changelog for the Zen Grid Framework v4. The framework is a folder of files that are included in each ZGFv4 based theme. When a theme is updated the framework is automatically updated. The changelog below is a record of changes made to the framework.

v1.4.0
---

First themes started to be rolled out with this update on 16th Nov, 2015.

New Features
---
- General template overrides can now be found in the zengrid/html folder. Templates released before this version will need to be updated with this fix and in most cases the template's html/com_content remains unaffected
- Allow the user to override the default positions.json by adding their own to the templates/your template/custom/positions.json


Improvements
---
- Improved display of offcanvas transition.
- Adds home icon to social icons fields
- Adds first-level class to top level menu items
- Add 500px icon to social icon field
- Improved handling of toggle menu on touch devices
- Adds get images from main images folder field 
- Improved display and functionality of com_config views
- Updated Font Awesome to v4.4
- Menu headings now use default pointer rather than link cursor
- Improved offscreen menu detection and display
- Adds js to retrieve image captions
- Add missing label styles
- Improved handling of empty values in less compiler
- Adds table-hover style
- Improved display of login, register, reset and remind views
- Removes unnecessary bootstrap markup
- Better organised joomla specific less in zengrid folder
- Improved display of module sin a menu


Fixes
---
- Fixed various bootstrap2 and bootstrap3 display issues
- Fix for dropdown menu visibility
- Adds missing zen-icon class to login overrides
- Fix duplicate display of page headings
- Fix template width not exactly matching setting sue to miscalculation of -ve margin
- Fix for min height input on select boxes
- Fix extra closing div in html override for user pages
- Adds missing clear fix to article content
- Fix icon-remove icon in edit screen
- Fix missing save and cancel icons on edit form
- Fix font icon font size for BS
- Fix compiler not working if placeholder html file in root
- Remove @gutter from mean menu module
- Change bottom margin on forms to 10px rather than use @gutter
- Fix display of chosen dropdowns on edit screens
- Fix modal being applied to all modal elements
- Adds missing glyphicons white
- Fix .hide hiding everything
- Fix com_finder display error
- Fix missing variable in html overrides



v1.3.3
---
- Remove gutter variable from .control-label and replace with 10px margin
- Make sections clear properly
- Fix bottom margin on forms elements
- Adds default smart search styling; 
- Fix sticky nav jumping
- Adds ability to override overview panel
- Fix no margin on tablets and phones


v1.3.2
---
- Default for get images input
- Adds get image input field
- Fix mime type for js compressor
- Fix background fixed images
- Fix missing search icon
- Fix color of close button for alerts
- Update less.js to v2.5

v1.3.1
---
- Change module chrome for modules in menu to zendefault
- Fixes fonts not loading if using subset.
- Fix link to zgf4 page
- Adds glyph icons to bootstrap2 options
- Carets now use default link colour
- Fix double slash in assets files


v1.3.0
---

New Features
----
- Add less maps and improve compiler
- Adds new social icons fields

Improvements
----
- Add max-width to iframe
- Fix clearfix mixin
- Add backstretch to library files
- Adds @path variable for compiler
- Updates social icons to also include envelope, user and search icon classes
- Adds notice if user is using admintools pro
- Adds a safety if user adds none as css field in colour chooser


v1.2.1
---
Fix for Joomla 3.4 compatibility

v1.2.0
---

New Features
----
- Adds get_files field for display files in a select box. use type="get_files" folder="your_folder" target=".php" show_empty="0" 
- Adds new row_style class. Retrieves styles in the less/styles folder and applies the class to the main row.
- Adds image resize field, helper and lib
- Adds more hooks to html class. language, rendered layout and specified layout, .responsive-disabled

Improvements
----
- Adds alert-message for framework alert styles
- html selector now uses width:100% in reset
- Responsive code is now wrapped in .responsive-enabled class
- Fix widths for bootstrap checkbox and radio buttons
- Check folder exists in main get_files class
- Adds cursor pointer for toggle menu
- Adds pad-push-col and pad-pull-col classes
- Improved check main layout function
- Adds missing bootstrap responsive classes
- Adds getMainLayout function
- Check mobile detect class already loaded
- Add system variable for loading assets with doc or as links.(custom.css now definitely loads last)

Bug Fixes
----
- Fix google fonts not loading when using https and not using font loader
- Left align menu items using zen center
- Fix responsive stacked menu
- Fix checkbox setting not saved if changed form default
- Fix not being able to compile rgba less values
- Fix chz z-index 
- Fix animate and font awesome not available in dev mode
- Fix for warning regarding object for params check- 


v1.1.0
----
- Adds new folder layout field for upcoming Focus2 template
- Remove padding and margin on footer .zen-container to compensate for footer now displayed as a spotlight
- Prevent custom asset function outputting empty script tags
- Adds min-height variable to select boxes
- Adds subheading field for settings
- Adds folder icon for modal screens
- Rename default config and default theme files to settings/default-config.json and settings/default-theme.json
- Fix offcanvas visible on all screens
- Move btn mixin out of framework
- Adds file and folder libs to main zen class
- Adds Joomla language to body class
- Adds onepage menu to body class
- Adds no change option to layout tool to prevent collapsing of modules at breakpoints
- Adds container, tablet max width variables for the container
- Fix undefined variables when loading new layouts
- Prevent warnings when copying a template
- Replace preset folder name when loading new settings
- Fix z-index on menu 
- Fix border-color for inputs

v1.0.8
---
- Fix pencil not showing for jmodedit icon. 
- Fix Base Font compile issue. 

v1.0.7 
---
- Renamed zen folder to zengrid to avoid Site Ground reserved name issue
- Appends current time to json file to avoid cache
- Sets post rather than get for posting Theme data


v1.0.6
----
- Appends version number to admin assets via a variable
- Fix disappearing module rows in layout tool if only one item left in row
- Optimised save routine
- Change language for default style for load settings dropdown
- fix menu assignment not getting saved


v1.0.5
----
- Adds clearing for tab-content
- Fix typo for load settings
- Change the display for style overview
- Compile button change
- Adds versioning to assets to avoid cache
- Improved save routine
- Admin improvements
- Fix save and close not closing
- Fix bs3 incompatibility with inputs
- Fix message box not re-appearing when load settings
- Improved language for template.css enabled. 
- Devmode and template.css warnings are now dynamic.


v1.0.4
----
- Removes need to refresh page when clicking save to save changes
- Moves message box to top of the page.

Notes - Please ensure you clear your browser cache as the css for the admin has changed.


v1.0.3
----
- Adds support for custom fonts
- Fix double quotes added to inputs

v1.0.2
----
- Change to naming convention for template settings files.


v1.0.1
----
- Safety check for settings file.

v1.0
----
Initial release.