$input_text = "https://viro33.ru/https:/wiki.i-edu.ru/mediawiki/index.php/";
$pattern = '/https:\/\/viro33\.ru\/(https:\/)/';
$replacement = '$1';

if (preg_match($pattern, $input_text)) {
    $formatted_text = preg_replace($pattern, $replacement, $input_text);
    echo $formatted_text;
} else {
    echo "Паттерн не найден в тексте.";
}