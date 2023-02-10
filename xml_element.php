<?php
$xmlDocument = '<?xml version="1.0"?>
<users xmlns:h="http://www.w3.org/TR/html4/">
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

$xml = new SimpleXMLElement($xmlDocument);
print "
<PRE>";
print_r($xml);
print "</PRE>";
?>