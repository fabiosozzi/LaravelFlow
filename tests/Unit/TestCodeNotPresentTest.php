<?php

test('that the project does not contain env(), dump() or dd()')
    ->expect([
        'env',
        'dump',
        'dd',
    ])
    ->not
    ->toBeUsed();
