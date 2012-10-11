<?php
// UItoTop by Leftaf V1.0
// $Id$

# Command order is important: jQuery is last to be loaded at first
cs_scriptload('uitotop', 'javascript', 'easing', 0);
cs_scriptload('uitotop', 'javascript', 'jquery.ui.totop', 0);
cs_scriptload('uitotop', 'stylesheet', 'ui.totop.css', 0);

?>