<?php

function getPositionsData()
{
    return [
        [
            [
                'text' => 'TEQUILA GIRLS',
                'callback_data' => 'TEQUILA_GIRLS',
                'require_fields' => ['photo'],
                'special_fields' => ['height']
            ],
            [
                'text' => 'TEQUILA MODELS', 
                'callback_data' => 'TEQUILA_MODELS', 
                'require_fields' => ['photo'],
                'special_fields' => ['height']
            ],
        ],
        [
            [
                'text' => 'TEQUILA BOYS', 
                'callback_data' => 'TEQUILA_BOYS', 
                'require_fields' => ['photo'],
                'special_fields' => ['height']
            ],
            [
                'text' => 'GO-GO GIRLS', 
                'callback_data' => 'GO_GO_GIRLS', 
                'require_fields' => ['photo'],
                'special_fields' => ['height']
            ],
        ],
        [
            [
                'text' => 'PARTY GIRLS', 
                'callback_data' => 'PARTY_GIRLS', 
                'require_fields' => ['photo'],
                'special_fields' => ['height']
            ],
            [
                'text' => 'PROMO MODELS', 
                'callback_data' => 'PROMO_MODELS', 
                'require_fields' => ['photo'],
                'special_fields' => ['height']
            ],
        ],
        [
            [
                'text' => 'IMAGE MODELS', 
                'callback_data' => 'IMAGE_MODELS', 
                'require_fields' => ['photo'],
                'special_fields' => ['height']
            ],
            [
                'text' => 'DJ - ДИДЖЕИ', 
                'callback_data' => 'DJ', 
                'require_fields' => []
            ],
        ],
        [
            ['text' => 'МС - ВЕДУЩИЕ', 'callback_data' => 'MC', 'require_fields' => []],
            ['text' => 'STAFF PERSONS', 'callback_data' => 'STAFF_PERSONS', 'require_fields' => []],
        ],
        [
            ['text' => 'PHOTO & VIDEO', 'callback_data' => 'PHOTO_VIDEO', 'require_fields' => []],
            ['text' => 'SECURITY', 'callback_data' => 'SECURITY', 'require_fields' => []],
        ]
    ];
}

function fieldIsSpecial($positions, $field)
{
    foreach ($positions as $position) {
        foreach (getPositionsData() as $key => $value) {
            foreach ($value as $i => $v) {
                $r = in_array($field, $v['special_fields'] ?? []);
                if ($v['callback_data'] === $position && $r === true) {
                    return true;
                }
            }
        }
    }
    return false;
}

function fieldIsRequired($positions, $field)
{
    foreach ($positions as $position) {
        foreach (getPositionsData() as $key => $value) {
            foreach ($value as $i => $v) {
                $r = in_array($field, $v['require_fields']);
                if ($v['callback_data'] === $position && $r === true) {
                    return true;
                }
            }
        }
    }
    return false;
}

function getPositionsArray()
{
    return array_map(function ($value) {
        return array_map(function ($value) {
            return ['text' => $value['text'], 'callback_data' => $value['callback_data']];
        }, $value);
    }, getPositionsData());
}

function changePositionText($positions, $callback_data, $text)
{
    return array_map(function ($value) use ($callback_data, $text) {
        return array_map(function ($value) use ($callback_data, $text) {
            if ($value['callback_data'] === $callback_data) return ['text' => $text, 'callback_data' => $value['callback_data']];
            return ['text' => $value['text'], 'callback_data' => $value['callback_data']];
        }, $value);
    }, $positions);
}

function getTextByData($data)
{
    $positions = getPositionsArray();

    $result = array_reduce($positions, function ($carry, $item) use ($data) {
        $r = array_reduce($item, function ($c, $i) use ($data) {
            if ($i['callback_data'] === $data) return $i['text'];
            return $c;
        }, null);
        if (isset($r)) return $r;
        return $carry;
    }, null);

    return $result;
}
