<?php

namespace frontend\models;

use backend\models\Item as ModelsItem;
use Yii;


/**
 * This is the model class for table "item".
 *
 * @property int $id
 * @property string $name
 * @property int $price
 * @property int $category_id
 *
 * @property ItemCategory $category
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price', 'category_id', 'dosis', 'kegunaan'], 'required'],
            [['price', 'category_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['dosis'], 'string', 'max' => 255],
            [['kegunaan'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => ItemCategory::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'price' => 'Price',
            'category_id' => 'Category ID',
            'dosis' => 'Dosis',
            'kegunaan' => 'Kegunaan',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(ItemCategory::className(), ['id' => 'category_id']);
    }

    public function getItems()
    {
        return Item::find()->all();
    }
}
