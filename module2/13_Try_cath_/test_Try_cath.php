<?php

class CustomException extends Exception
{
    public function errorMessage()
    {
        return 'loi o dong ' . $this->getLine() . ' trong' . $this->getFile()
            . ': <b>' . $this->getMessage() . '</b> is not a valid E-Mail address';
    }
}

$email = "someoneexample.com";

try {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new CustomException($email);
    }
    if (str_contains($email, "example")) {
        throw new Exception("$email is an example e-mail");
    }
} catch (CustomException $e) {
    echo $e->errorMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}