<?php
$xmlDocument = '<?xml version="1.0"?>
<users>
    <user>
        <name>
            Wizard user 1050
        </name>
        <type>
            omputer Wizard
        </type>
    </user>
    <user>
        <name>
            Redditie 2030
        </name>
        <type>
            Computer Hacker
        </type>
    </user>
</users>';

$xml = simplexml_load_string($xmlDocument);
print "
<PRE>";
print_r($xml);
print "</PRE>";
?>