<?php
function validateAddress($address, $patternselect = null)
{
    if (null === $patternselect) {
        $patternselect = 'php';
    }
    if (is_callable($patternselect)) {
        return $patternselect($address);
    }
    //Reject line breaks in addresses; it's valid RFC5322, but not RFC5321
    if (strpos($address, "\n") !== false || strpos($address, "\r") !== false) {
        return false;
    }
    switch ($patternselect) {
        case 'pcre': //Kept for BC
        case 'pcre8':
            /*
             * A more complex and more permissive version of the RFC5322 regex on which FILTER_VALIDATE_EMAIL
             * is based.
             * In addition to the addresses allowed by filter_var, also permits:
             *  * dotless domains: `a@b`
             *  * comments: `1234 @ local(blah) .machine .example`
             *  * quoted elements: `'"test blah"@example.org'`
             *  * numeric TLDs: `a@b.123`
             *  * unbracketed IPv4 literals: `a@192.168.0.1`
             *  * IPv6 literals: 'first.last@[IPv6:a1::]'
             * Not all of these will necessarily work for sending!
             *
             * @see       http://squiloople.com/2009/12/20/email-address-validation/
             * @copyright 2009-2010 Michael Rushton
             * Feel free to use and redistribute this code. But please keep this copyright notice.
             */
            return (bool) preg_match(
                '/^(?!(?>(?1)"?(?>\\\[ -~]|[^"])"?(?1)){255,})(?!(?>(?1)"?(?>\\\[ -~]|[^"])"?(?1)){65,}@)' .
                '((?>(?>(?>((?>(?>(?>\x0D\x0A)?[\t ])+|(?>[\t ]*\x0D\x0A)?[\t ]+)?)(\((?>(?2)' .
                '(?>[\x01-\x08\x0B\x0C\x0E-\'*-\[\]-\x7F]|\\\[\x00-\x7F]|(?3)))*(?2)\)))+(?2))|(?2))?)' .
                '([!#-\'*+\/-9=?^-~-]+|"(?>(?2)(?>[\x01-\x08\x0B\x0C\x0E-!#-\[\]-\x7F]|\\\[\x00-\x7F]))*' .
                '(?2)")(?>(?1)\.(?1)(?4))*(?1)@(?!(?1)[a-z0-9-]{64,})(?1)(?>([a-z0-9](?>[a-z0-9-]*[a-z0-9])?)' .
                '(?>(?1)\.(?!(?1)[a-z0-9-]{64,})(?1)(?5)){0,126}|\[(?:(?>IPv6:(?>([a-f0-9]{1,4})(?>:(?6)){7}' .
                '|(?!(?:.*[a-f0-9][:\]]){8,})((?6)(?>:(?6)){0,6})?::(?7)?))|(?>(?>IPv6:(?>(?6)(?>:(?6)){5}:' .
                '|(?!(?:.*[a-f0-9]:){6,})(?8)?::(?>((?6)(?>:(?6)){0,4}):)?))?(25[0-5]|2[0-4][0-9]|1[0-9]{2}' .
                '|[1-9]?[0-9])(?>\.(?9)){3}))\])(?1)$/isD',
                $address
            );
        case 'html5':
            /*
             * This is the pattern used in the HTML5 spec for validation of 'email' type form input elements.
             *
             * @see http://www.whatwg.org/specs/web-apps/current-work/#e-mail-state-(type=email)
             */
            return (bool) preg_match(
                '/^[a-zA-Z0-9.!#$%&\'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}' .
                '[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/sD',
                $address
            );
        case 'php':
        default:
            return filter_var($address, FILTER_VALIDATE_EMAIL) !== false;
    }
}
?>
