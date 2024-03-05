<?php

if (is_page(17)) {
    $phrase = 'Ensemble concrétisons votre projet!';
} else {
    $phrase = 'Services Web Complet |Création de Site refonte et référencement SEO';
}

// Séparez directement la phrase en mots
$words = explode(' ', $phrase);
echo '<h1 class="text-banner">';

foreach ($words as $word) {
    if (strpos($word, '|') !== false) {
        // Remplacez | par un saut de ligne dans le mot
        $word = str_replace('|', '', $word);
        echo '<br>';
    }
    // Encapsulez chaque mot dans un span, puis chaque lettre dans un span
    echo '<span class="word">';
    $letters = preg_split('//u', $word, -1, PREG_SPLIT_NO_EMPTY); // Séparation UTF-8 sûre
    foreach ($letters as $char) {
        echo "<span class=\"letter\">$char</span>";
    }
    echo '</span> ';
}
echo '</h1>';



