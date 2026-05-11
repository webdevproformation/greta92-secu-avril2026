<?php

/**
 * XSS échappement des caractères spéciaux de HTML
 *
 * @param string|null $value
 * @return string
 */
function h(?string $value): string
{
    return htmlspecialchars($value ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/**
 * Générer une token aléatoire pour CSRF
 *
 * @return string
 */
function generateCsrfToken(): string
{
    if (empty($_SESSION['_csrf_token'])) {
        $_SESSION['_csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['_csrf_token'];
}

/**
 * Vérifier que le token transmis est valide
 * via la fonction hash_equals() https://www.php.net/manual/fr/function.hash-equals.php
 *
 * @param string|null $token
 * @return boolean
 */
function validateCsrfToken(?string $token): bool
{
    if (empty($_SESSION['_csrf_token']) || empty($token)) {
        return false;
    }
    return hash_equals($_SESSION['_csrf_token'], $token);
}

/**
 * Générer input hidden CSRF pour les formulaires
 *
 * @return string
 */
function csrfField(): string
{
    return '<input type="hidden" name="_csrf_token" value="' . generateCsrfToken() . '">';
}

/**
 * Brut Force compteur de nombre de tentative manquée + 
 * Définir la durée de blocage
 *
 * @param boolean $success
 * @return void
 */
function recordLoginAttempt(bool $success): void
{
    if ($success) {
        unset($_SESSION['_login_fails'], $_SESSION['_login_blocked_until']);
        return;
    }

    $_SESSION['_login_fails'] = ($_SESSION['_login_fails'] ?? 0) + 1;
    $fails = $_SESSION['_login_fails'];

    if ($fails >= 5) {
        $duration = min(30 * (2 ** ($fails - 5)), 300);
        $_SESSION['_login_blocked_until'] = time() + $duration;
    }
}

/**
 * Brut Force Récupérer la durée de blocage 
 *
 * @return integer
 */
function getLoginBlockTime(): int
{
    if (empty($_SESSION['_login_blocked_until'])) {
        return 0;
    }
    return max(0, $_SESSION['_login_blocked_until'] - time());
}

/**
 * Brut Force 
 *
 * @return boolean
 */
function isLoginBlocked(): bool
{
    $remaining = getLoginBlockTime();
    if ($remaining > 0) {
        return true;
    }
    unset($_SESSION['_login_blocked_until']);
    return false;
}
