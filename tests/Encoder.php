<?php

use Rahul900day\Gpt3Encoder\Encoder;

test('empty string', function () {
    $str = '';

    expect(Encoder::encode($str))->toBe([]);
    expect(Encoder::decode(Encoder::encode($str)))->toBe($str);
});

test('space', function () {
    $str = ' ';

    expect(Encoder::encode($str))->toBe([220]);
    expect(Encoder::decode(Encoder::encode($str)))->toBe($str);
});

test('tab', function () {
    $str = "\t";

    expect(Encoder::encode($str))->toBe([197]);
    expect(Encoder::decode(Encoder::encode($str)))->toBe($str);
});

test('simple text', function () {
    $str = 'This is some text';

    expect(Encoder::encode($str))->toBe([1212, 318, 617, 2420]);
    expect(Encoder::decode(Encoder::encode($str)))->toBe($str);
});

test('multi-token word', function () {
    $str = 'indivisible';

    expect(Encoder::encode($str))->toBe([521, 452, 12843]);
    expect(Encoder::decode(Encoder::encode($str)))->toBe($str);
});

test('emojis', function () {
    $str = 'hello 👋 world 🌍';

    expect(Encoder::encode($str))->toBe([31373, 50169, 233, 995, 12520, 234, 235]);
    expect(Encoder::decode(Encoder::encode($str)))->toBe($str);
});

test('OpenAI example', function () {
    $str = <<<'EOD'
Many words map to one token, but some don't: indivisible.

Unicode characters like emojis may be split into many tokens containing the underlying bytes: 🤚🏾

Sequences of characters commonly found next to each other may be grouped together: 1234567890
EOD;

    expect(Encoder::encode($str))->toBe([7085, 2456, 3975, 284, 530, 11241, 11, 475, 617, 836, 470, 25, 773, 452, 12843, 13, 198, 198, 3118, 291, 1098, 3435, 588, 795, 13210, 271, 743, 307, 6626, 656, 867, 16326, 7268, 262, 10238, 9881, 25, 12520, 97, 248, 8582, 237, 122, 198, 198, 44015, 3007, 286, 3435, 8811, 1043, 1306, 284, 1123, 584, 743, 307, 32824, 1978, 25, 17031, 2231, 30924, 3829]);
    expect(Encoder::decode(Encoder::encode($str)))->toBe($str);
});
