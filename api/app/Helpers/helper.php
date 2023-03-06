<?php

function getTree($data):array{
    $tree = [];
    $data2 = array();
    foreach ($data as $key => $value) {
        $data2[$value['id']] = $value;
    }
    foreach ($data2 as  &$node) {
        $id = $node['id'];
        if (!$node['parent_id']){
            $tree[] = &$node;
        }
        else {
            $data2[$node['parent_id']]['children'][] = &$node;
        }
    }
    unset($node);
    return $tree;
}
