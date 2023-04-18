<?php
require_once 'vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$request = Request::createFromGlobals();

function searchKeyword($keyword)
{
    $results = array();
    foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator('.')) as $filename) {
        if ($filename->getFilename() == 'scripts_improved.txt') {
            $filepath = $filename->getPathname();
            $lines = file($filepath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach ($lines as $idx => $line) {
                if (strpos($line, $keyword) !== false) {
                    $context = array();
                    $start_line_number = max(0, $idx - 2);
                    $end_line_number = min($idx + 10, count($lines) - 1);
                    for ($i = $start_line_number; $i <= $end_line_number; $i++) {
                        $context[] = $lines[$i];
                    }
                    $subdir = $filename->getPath();
                    if (!array_key_exists($subdir, $results)) {
                        $results[$subdir] = array();
                    }
                    $result = array(
                        'filename' => $filename->getFilename(),
                        'line_number' => $idx,
                        'context' => implode("\n", $context)
                    );
                    array_push($results[$subdir], $result);
                }
            }
        }
    }
    return $results;
}

if ($request->getPathInfo() === '/' && $request->getMethod() === 'GET') {
    $html = file_get_contents('templates/index.html');
    $response = new Response($html);
} elseif ($request->getPathInfo() === '/search' && $request->getMethod() === 'POST') {
    $keyword = $request->request->get('keyword');
    $results = searchKeyword($keyword);
    $response = new JsonResponse($results);
} else {
    $response = new Response('Not found', 404);
}

$response->send();
