<?php
openlog('CrawlerApp', LOG_CONS | LOG_NDELAY | LOG_PID, LOG_USER | LOG_PERROR);
syslog(LOG_WARNING, "User #14 is logged from two different places.");
closelog();


//The above will log a new message to /var/log/syslog: