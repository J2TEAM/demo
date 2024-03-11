<?php
class Fshare {
    private $url;
    private $cookie;
    private $token;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function getLink(): string
    {
        $this->login();
        $this->getToken();
        $link = $this->getDownloadLink();

        return $link;
    }

    private function login()
    {
        // cURL
    }

    private function getToken()
    {
        // DOM parser, regex, cookie handling
    }

    private function getDownloadLink()
    {
        // cURL, DOM parser, regex
    }
}

class Fshare2 {
    private $url;
    private $cookie;
    private $token;
    private $result;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function getLink(): string
    {
        $this->login();
        $this->getToken();
        $this->downloadFileToServer();
        return $this->result;
    }

    private function login() {}
    private function getToken() {}
    private function downloadFileToServer()
    {
        // cURL, file handling
    }
}

if (isset($_GET['url']) && !empty($_GET['url'])) {
    $url = $_GET['url'];

    // $fshare = new Fshare($url);
    // $result = $fshare->getLink();

    header('Content-Type: application/json');
    // echo json_encode(['url' => $result]);
    echo json_encode(['url' => 'https://example.com/uploads/file.zip']);
    exit;
}

header('Content-Type: application/json');
echo json_encode(['error' => 'URL not found']);
