<?php

$languages = [
    '1' => 'Français',
    '2' => 'English',
    '3' => 'Italiano',
    '4' => 'Español',
    '5' => 'Deutsch',
    '6' => 'Português'
];

$urls = [
    '1' => 'https://example.com/fr',
    '2' => 'https://example.com/en',
    '3' => 'https://example.com/it',
    '4' => 'https://example.com/es',
    '5' => 'https://example.com/de',
    '6' => 'https://example.com/pt'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['language'])) {
    $selectedLanguage = $_POST['language'];
    if (isset($urls[$selectedLanguage])) {
        header('Location: ' . $urls[$selectedLanguage]);
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Selection</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="container">
        <h1>Select Your Language</h1>
        <div class="button-group">
            <?php foreach ($languages as $key => $language): ?>
                <button onclick="redirectToLanguage('<?php echo $key; ?>')">
                    <?php echo $language; ?>
                </button>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="home.js"></script>
</body>
</html>
