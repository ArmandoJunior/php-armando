<?php
$pass = 'Armando';
$password = password_hash($pass, PASSWORD_DEFAULT);
echo "{$password}\n";

$matches = password_verify('foo', $password);
echo "foo: {$matches}\n";

$matches = password_verify($pass, $password);
echo "Armando: {$matches}\n";

echo '------------------------------------------------------' . PHP_EOL;

if (password_needs_rehash($password, PASSWORD_DEFAULT, ['cost' => 12])) {
    $newHash = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 16]);
    echo "{$newHash}\n";
}

