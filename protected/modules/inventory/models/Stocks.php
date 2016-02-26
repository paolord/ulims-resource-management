<?php

/**
 * This is the model class for table "stocks".
 *
 * The followings are the available columns in table 'stocks':
 * @property integer $id
 * @property string $chemical_name
 * @property string $CAS
 * @property string $product_number
 * @property string $container_barcode
 * @property integer $location
 * @property integer $manufacturer
 * @property integer $supplier
 * @property double $quantity
 * @property integer $unit
 * @property double $qty_remaining
 * @property integer $container_type
 * @property string $exp_date
 * @property string $date_acquired
 * @property string $date_opened
 * @property string $remarks
 */
class Stocks extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'stocks';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('chemical_name, CAS, product_number, container_barcode, location, manufacturer, supplier, quantity, unit, qty_remaining, container_type, exp_date, date_acquired, date_opened, remarks', 'required'),
			array('location, manufacturer, supplier, unit, container_type', 'numerical', 'integerOnly'=>true),
			array('quantity, qty_remaining', 'numerical'),
			array('chemical_name, CAS, product_number, container_barcode', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, chemical_name, CAS, product_number, container_barcode, location, manufacturer, supplier, quantity, unit, qty_remaining, container_type, exp_date, date_acquired, date_opened, remarks', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'chemical_name' => 'Chemical Name',
			'CAS' => 'Cas',
			'product_number' => 'Product Number',
			'container_barcode' => 'Container Barcode',
			'location' => 'Location',
			'manufacturer' => 'Manufacturer',
			'supplier' => 'Supplier',
			'quantity' => 'Quantity',
			'unit' => 'Unit',
			'qty_remaining' => 'Qty Remaining',
			'container_type' => 'Container Type',
			'exp_date' => 'Exp Date',
			'date_acquired' => 'Date Acquired',
			'date_opened' => 'Date Opened',
			'remarks' => 'Remarks',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('chemical_name',$this->chemical_name,true);
		$criteria->compare('CAS',$this->CAS,true);
		$criteria->compare('product_number',$this->product_number,true);
		$criteria->compare('container_barcode',$this->container_barcode,true);
		$criteria->compare('location',$this->location);
		$criteria->compare('manufacturer',$this->manufacturer);
		$criteria->compare('supplier',$this->supplier);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('unit',$this->unit);
		$criteria->compare('qty_remaining',$this->qty_remaining);
		$criteria->compare('container_type',$this->container_type);
		$criteria->compare('exp_date',$this->exp_date,true);
		$criteria->compare('date_acquired',$this->date_acquired,true);
		$criteria->compare('date_opened',$this->date_opened,true);
		$criteria->compare('remarks',$this->remarks,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * @return CDbConnection the database connection used for this class
	 */
	public function getDbConnection()
	{
		return Yii::app()->inventoryDb;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Stocks the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
