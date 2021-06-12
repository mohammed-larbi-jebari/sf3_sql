<?php
/**
 * verification Pass
 * @param array $password
 * @return bool
 */
function verificationPass(string $password)
{
    // Validate password
    //"Password should be at least 8 characters one letters one numbers and one special characters"
    return preg_match('/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[$@$!%*#?&\[\]_])([a-zA-Z0-9$@$!%*#?&\[\]_]{8,})$/', $password);
}

echo 'password: "mojeb" is ' .(verificationPass('mojeb') ? 'OK' : 'KO'); //false
echo '<br/>';
echo 'password: "Mojeb82@@" is ' .(verificationPass('Mojeb82Mojeb82[]') ? 'OK' : 'KO'); ;//true
echo '<br/>';
echo 'password: "Mojeb82Mojeb82@@#" is ' .(verificationPass('Mojeb82Mojeb82@@#') ? 'OK' : 'KO');//true
echo '<br/>';
echo 'password: "Mojeb82Mojeb82#@" is ' .(verificationPass('Mojeb82Mojeb82#@') ? 'OK' : 'KO');//true
