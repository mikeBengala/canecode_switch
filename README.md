# canecode_switch
jQuery plugin for select elements

Example here:
http://switch.migueldeveloper.pt/


To install include this on your project
<!--Insert inside a <head> tag or right before closing your <body> tag-->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
<script src="http://switch.migueldeveloper.pt/js/canecode_switch.js" type="text/javascript"></script>
<link href="http://switch.migueldeveloper.pt/css/canecode_switch.css" rel="stylesheet" type="text/css">
<!--:-->


Description:

This is a simple plugin
it basicly takes a html select element and displays it as a "ipod-like" switch.
And as an extra, the switch can show/hide other elemens


How to use:

Simply write this fonction on document ready event.
canecode_switch( selector_1 , selector_2 , selector_3);


About the function parameters:

selector_1
(String) countaining the select element id or class.

selector_2
(String) or (array) countaining class and id's of elements to show while the switch is off.

selector_3
(String) or (array) countaining class and id's of elements to show while the switch is on.