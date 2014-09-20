<?php

/**
 * This is the model class for table "users_cv_work_experience".
 *
 * The followings are the available columns in table 'users_cv_work_experience':
 * @property integer $cv_work_exp_id
 * @property string $company_organization
 * @property string $company_business
 * @property string $company_location
 * @property string $title_designation
 * @property string $job_type
 * @property string $start_date
 * @property string $end_date
 * @property string $job_description
 * @property integer $user_id
 */
class UsersCvWorkExperience extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users_cv_work_experience';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('company_organization, company_business, title_designation, job_type, start_date, end_date, job_description, user_id', 'required'),
			array('company_organization, company_business,user_id', 'required'),
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('company_organization, company_business', 'length', 'max'=>100),
			array('title_designation', 'length', 'max'=>50),
			array('job_type', 'length', 'max'=>60),
			array('start_date, end_date', 'length', 'max'=>45),
			array('company_location', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cv_work_exp_id, company_organization, company_business, company_location, title_designation, job_type, start_date, end_date, job_description, user_id', 'safe', 'on'=>'search'),
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
			'cv_work_exp_id' => 'Cv Work Exp',
			'company_organization' => 'Company Organization',
			'company_business' => 'Company Business',
			'company_location' => 'Company Location',
			'title_designation' => 'Title Designation',
			'job_type' => 'Job Type',
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
			'job_description' => 'Job Description',
			'user_id' => 'User',
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

		$criteria->compare('cv_work_exp_id',$this->cv_work_exp_id);
		$criteria->compare('company_organization',$this->company_organization,true);
		$criteria->compare('company_business',$this->company_business,true);
		$criteria->compare('company_location',$this->company_location,true);
		$criteria->compare('title_designation',$this->title_designation,true);
		$criteria->compare('job_type',$this->job_type,true);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('end_date',$this->end_date,true);
		$criteria->compare('job_description',$this->job_description,true);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UsersCvWorkExperience the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
