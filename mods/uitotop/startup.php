<?php
// ClanSphere 2010 - www.clansphere.net
// $Id$

# Command order is important: jQuery is last to be loaded at first
cs_scriptload('UItoTop', 'javascript', 'easing', 2);
cs_scriptload('UItoTop', 'javascript', 'jquery.ui.totop', 2);
cs_scriptload('UItoTop', 'stylesheet', 'ui.totop.css', 2);

