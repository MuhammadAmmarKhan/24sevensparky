<?php $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
define('BASE_URL', $protocol . $host . '/');
function asset($path)
{
    $localPath = __DIR__ . '/assets/' . $path;
    $baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/assets/";
    $version = '1.8.4';
    if (file_exists($localPath)) {
        $version = filemtime($localPath);
    }
    return $baseUrl . $path . '?v=' . $version;
} ?>
<!doctype html>
<html lang="en-AU" data-bs-theme="light">
<head><?php include 'head.php'; ?></head>
<body style="overflow-x:hidden;">

<?php $current_page = basename($_SERVER['PHP_SELF']);
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if (($request_uri === '/' || $request_uri === '/index.php' || $request_uri === '') && !isset($_COOKIE['sp_visited'])) {
    include 'loader.php';
}
?>
<header><?php include 'header.php'; ?></header>
<main><?= $content ?></main>
<footer><?php include 'footer.php'; ?></footer>
<?php include 'footer-scripts.php'; ?>
</body>
</html>