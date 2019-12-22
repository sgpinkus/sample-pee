<?php
$dirname = dirname(__file__);
ini_set('log_errors', true);
ini_set('error_log', ".${dirname}/logs/log.log");
error_reporting((E_ALL)&~(E_NOTICE|E_USER_NOTICE|E_STRICT));
ini_set('display_errors', E_ALL);
