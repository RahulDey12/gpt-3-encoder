# GPT-3-Encoder for PHP

<a href="https://styleci.io/repos/610924109"><img src="https://github.styleci.io/repos/610924109/shield" alt="StyleCI Status"></a>
<a href="https://github.com/rahuldey12/gpt-3-encoder/actions"><img src="https://github.com/RahulDey12/gpt-3-encoder/workflows/CI/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/rahul900day/gpt-3-encoder"><img src="https://poser.pugx.org/rahul900day/gpt-3-encoder/version" alt="Version"></a>
[![PHP Version Require](http://poser.pugx.org/rahul900day/gpt-3-encoder/require/php)](https://packagist.org/packages/rahul900day/gpt-3-encoder)

PHP BPE Encoder Decoder for GPT-2/GPT-3 

## About
GPT-2 and GPT-3 use byte pair encoding to turn text into a series of integers to feed into the model. This is a PHP implementation of OpenAI's original python encoder/decoder which can be found [here](https://github.com/openai/gpt-2).

## Get Started

> Requires [PHP 7.4+](https://php.net/releases/)

Install GPT-3-Encoder via the [Composer](https://getcomposer.org/) package manager

```bash
composer require rahul900day/gpt-3-encoder
```

## Usage

Encoding a text to tokens

```php
use Rahul900day\Gpt3Encoder\Encoder;

Encoder::encode("Your prompt.");
```

Decoding to text from tokens

```php
use Rahul900day\Gpt3Encoder\Encoder;

Encoder::decode([8582, 242, 98]);
```

## Credits

- [Rahul Dey](https://github.com/RahulDey12)
- [All Contributors](https://github.com/RahulDey12/gpt-3-encoder/graphs/contributors)

This packages has some codes and test inspiration from node's [gpt-3-encoder](https://github.com/latitudegames/GPT-3-Encoder)

## License

This package is released under the [MIT License](https://github.com/RahulDey12/gpt-3-encoder/blob/main/LICENSE.md).
