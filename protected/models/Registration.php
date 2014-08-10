<?php

/**
 * This is the model class for table "dtw2014".
 *
 * The followings are the available columns in table 'dtw2014':
 * @property integer $Id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $phone_number
 * @property string $assembly
 * @property string $marital_status
 * @property string $gender
 * @property string $home_address
 * @property string $proposed_arrival_date
 * @property string $comments
 * @property string $created_at
 * @property string $date_of_birth
 */
class Registration extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dtw2014';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('firstname, lastname, email, phone_number, created_at', 'required'),
			array('firstname, lastname, email, phone_number, assembly, marital_status, gender, home_address, date_of_birth
			, proposed_arrival_date', 'required'),
			array('assembly', 'length', 'max'=>25),
            // email has to be a valid email address
            array('email', 'email'),
			array('marital_status', 'length', 'max'=>7),
			array('gender', 'length', 'max'=>6),
			array('home_address, comments', 'length', 'max'=>255),
			array('date_of_birth', 'length', 'max'=>10),
			array('proposed_arrival_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Id, firstname, lastname, email, phone_number, assembly, marital_status, gender, home_address, proposed_arrival_date, comments, date_of_birth', 'safe', 'on'=>'search'),
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
			'Id' => 'ID',
			'firstname' => 'Firstname',
			'lastname' => 'Lastname',
			'email' => 'Email',
			'phone_number' => 'Phone Number',
			'assembly' => 'Assembly',
			'marital_status' => 'Marital Status',
			'gender' => 'Gender',
			'home_address' => 'Home Address',
			'proposed_arrival_date' => 'Proposed Arrival Date',
			'comments' => 'Comments',
			//'created_at' => 'Created At',
			'date_of_birth' => 'Date Of Birth',
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

		$criteria->compare('Id',$this->Id);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone_number',$this->phone_number,true);
		$criteria->compare('assembly',$this->assembly,true);
		$criteria->compare('marital_status',$this->marital_status,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('home_address',$this->home_address,true);
		$criteria->compare('proposed_arrival_date',$this->proposed_arrival_date,true);
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('created_at',$this->created_at,true);
		//$criteria->compare('date_of_birth',$this->date_of_birth,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Registration the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
