<?php

use Rahul900day\Gpt3Encoder\Exceptions\FileNotFoundException;
use Rahul900day\Gpt3Encoder\Support\File;

it('can get file', function () {
    $path = __DIR__.'/../../data/encoder.json';

    expect(File::get($path))->toBe(file_get_contents($path));
});

it('can throw error', function () {
    File::get(__DIR__.'/fake_file_location.txt');
})->throws(FileNotFoundException::class);
