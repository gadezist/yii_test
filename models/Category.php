<?php


namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    function getTree($dataset) {
        $tree = array();
        foreach ($dataset as $node) {
            $parentID = $node->id_parent == 0 ? '#' : $node->id_parent;

            $tree[] = [
                'id' => $node->id,
                'parent' => $parentID,
                'text' => $node->name,
            ];
        }
        return $tree;
    }
}