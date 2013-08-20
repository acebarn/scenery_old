<?php

/**
 * This is the model class for table "gallery".
 *
 * The followings are the available columns in table 'gallery':
 * @property integer $id
 * @property string $name
 * @property string $photograph
 * @property string $date
 * @property string $tags
 * @property string $camera
 * @property string $lens
 * @property string $focal
 * @property string $aperture
 * @property string $location
 * @property double $latitude
 * @property double $longitude
 * @property integer $rating
 * @property string $url
 */
class Gallery extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gallery';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, name, photograph, date, tags, camera, lens, focal, aperture, location, latitude, longitude, rating, url', 'required'),
			array('id, rating', 'numerical', 'integerOnly'=>true),
			array('latitude, longitude', 'numerical'),
			array('name, camera, lens', 'length', 'max'=>50),
			array('photograph', 'length', 'max'=>30),
			array('focal, aperture', 'length', 'max'=>10),
			array('location', 'length', 'max'=>100),
			array('url', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, photograph, date, tags, camera, lens, focal, aperture, location, latitude, longitude, rating, url', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'photograph' => 'Photograph',
			'date' => 'Date',
			'tags' => 'Tags',
			'camera' => 'Camera',
			'lens' => 'Lens',
			'focal' => 'Focal',
			'aperture' => 'Aperture',
			'location' => 'Location',
			'latitude' => 'Latitude',
			'longitude' => 'Longitude',
			'rating' => 'Rating',
			'url' => 'Url',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('photograph',$this->photograph,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('tags',$this->tags,true);
		$criteria->compare('camera',$this->camera,true);
		$criteria->compare('lens',$this->lens,true);
		$criteria->compare('focal',$this->focal,true);
		$criteria->compare('aperture',$this->aperture,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('latitude',$this->latitude);
		$criteria->compare('longitude',$this->longitude);
		$criteria->compare('rating',$this->rating);
		$criteria->compare('url',$this->url,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Gallery the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
