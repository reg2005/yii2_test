<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "phones".
 *
 * @property integer $id
 * @property integer $phone
 * @property integer $code
 */
class Phones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone', 'code'], 'required'],
            [['phone', 'code'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone' => 'Phone',
            'code' => 'Code',
        ];
    }
}
