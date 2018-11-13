// add this on pages you want analytics on

<?php
if ($_SERVER["HTTP_USER_AGENT"] == "Mozilla/5.0+(compatible; UptimeRobot/2.0; http://www.uptimerobot.com/)" || $_SERVER['HTTP_DNT'] == "1") {
die(); // makes sure uptimerobot won't affect the analytics, won't include users with DNT in analytics
}

$website="PrivacyInfinity";
$ip = preg_replace('/([0-9]{1,3}.[0-9]{1,3})(.[0-9]{1,3})(.[0-9]{1,3})/', '$1', $_SERVER["REMOTE_ADDR"]).".xxx.xxx"; // masks the last two octets of the IP
shell_exec("echo [".date('j F Y')."] ".$website." ".$ip." >> /var/analytics/webserver.txt");
?>

