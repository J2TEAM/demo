<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />
    <title>JUNO_OKYO</title>
</head>

<body>
    <main class="container">
        <h1>Demo: Referer Header</h1>

        <p>
            <?php if (isset($_SERVER['HTTP_REFERER'])) : ?>
                Bạn truy cập trang này từ: <strong><?php echo htmlspecialchars($_SERVER['HTTP_REFERER'], ENT_QUOTES, 'UTF-8'); ?></strong>
            <?php else : ?>
                Bạn truy cập trực tiếp trang này.
            <?php endif; ?>
        </p>
    </main>

    <script>
        if (document.referrer) {
            console.log('Bạn truy cập trang này từ:', document.referrer);
        } else {
            console.log('Bạn truy cập trực tiếp trang này.');
        }
    </script>
</body>

</html>
