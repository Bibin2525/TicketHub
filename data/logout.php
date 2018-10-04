<?php

require('sessions.php');

delSession('uid');
delSession('type', $type);
session_destroy();

header('location:../index.php');