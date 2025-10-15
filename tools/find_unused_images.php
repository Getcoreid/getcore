<?php
// Scans assets/images and reports image files that are not referenced in the repository
$root = realpath(__DIR__ . '/../') . DIRECTORY_SEPARATOR;
$imagesDir = $root . 'assets' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR;
$exts = ['png', 'jpg', 'jpeg', 'svg', 'gif', 'webp', 'ico', 'bmp'];

if (!is_dir($imagesDir)) {
    echo "assets/images directory not found: $imagesDir\n";
    exit(1);
}

function listFiles($dir, $exts)
{
    $files = [];
    $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    foreach ($it as $f) {
        if (!$f->isFile()) continue;
        $path = $f->getPathname();
        $lower = strtolower($path);
        foreach ($exts as $e) {
            if (substr($lower, -strlen($e) - 1) === '.' . $e) {
                $files[] = $path;
                break;
            }
        }
    }
    return $files;
}

$images = listFiles($imagesDir, $exts);
// Build a list of searchable files (code assets)
$searchExts = ['php', 'html', 'htm', 'js', 'css', 'scss', 'json', 'txt', 'md'];
$searchFiles = [];
$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root));
foreach ($it as $f) {
    if (!$f->isFile()) continue;
    $path = $f->getPathname();
    // skip node_modules, vendor, .git and the images folder itself
    if (strpos($path, DIRECTORY_SEPARATOR . 'node_modules' . DIRECTORY_SEPARATOR) !== false) continue;
    if (strpos($path, DIRECTORY_SEPARATOR . '.git' . DIRECTORY_SEPARATOR) !== false) continue;
    if (strpos($path, DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR) !== false) continue;
    $lower = strtolower($path);
    foreach ($searchExts as $e) {
        if (substr($lower, -strlen($e) - 1) === '.' . $e) {
            $searchFiles[] = $path;
            break;
        }
    }
}

// Read all searchable files into memory (should be OK for this repo)
$contents = [];
foreach ($searchFiles as $sf) {
    $c = @file_get_contents($sf);
    if ($c === false) $c = '';
    $contents[$sf] = $c;
}

$candidates = [];
foreach ($images as $imgPath) {
    $rel = str_replace($root, '', $imgPath);
    // Normalize slashes to forward for searching
    $relFwd = str_replace('\\', '/', $rel);
    $found = false;
    foreach ($contents as $sf => $c) {
        if (strpos($c, $relFwd) !== false) {
            $found = true;
            break;
        }
        // also try without the leading 'assets/images/' (maybe referenced via shorter path)
        $basename = basename($imgPath);
        if (strpos($c, $basename) !== false) {
            $found = true;
            break;
        }
    }
    if (!$found) {
        $candidates[] = $relFwd;
    }
}

// Output
echo "Scanned " . count($images) . " image files and " . count($searchFiles) . " searchable files.\n";
if (count($candidates) === 0) {
    echo "No unreferenced images found.\n";
    exit(0);
}

echo "Found " . count($candidates) . " candidate unreferenced images:\n";
foreach ($candidates as $c) {
    echo $c . "\n";
}

// Also write to a temp file for review
file_put_contents($root . 'tools' . DIRECTORY_SEPARATOR . 'unused_images.txt', implode("\n", $candidates));

echo "Wrote list to tools/unused_images.txt\n";
