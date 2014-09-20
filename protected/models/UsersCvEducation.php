<?php

/**
 * This is the model class for table "users_cv_education".
 *
 * The followings are the available columns in table 'users_cv_education':
 * @property integer $cv_edu_id
 * @property string $level_of_education
 * @property string $degree
 * @property string $group
 * @property string $institutions
 * @property string $passing_year
 * @property string $duration
 * @property string $cgpa_result
 * @property string $achievement
 * @property integer $user_id
 */
class UsersCvEducation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users_cv_education';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('level_of_education, degree, group, institutions, passing_year, user_id', 'required'),
			array('level_of_education, degree,user_id', 'required'),
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('level_of_education', 'length', 'max'=>100),
			array('degree, group', 'length', 'max'=>60),
			array('passing_year, cgpa_result', 'length', 'max'=>20),
			array('duration, achievement', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cv_edu_id, level_of_education, degree, group, institutions, passing_year, duration, cgpa_result, achievement, user_id', 'safe', 'on'=>'search'),
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
			'cv_edu_id' => 'Cv Edu',
			'level_of_education' => 'Level Of Education',
			'degree' => 'Degree',
			'group' => 'Group',
			'institutions' => 'Institutions',
			'passing_year' => 'Passing Year',
			'duration' => 'Duration',
			'cgpa_result' => 'Cgpa Result',
			'achievement' => 'Achievement',
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

		$criteria->compare('cv_edu_id',$this->cv_edu_id);
		$criteria->compare('level_of_education',$this->level_of_education,true);
		$criteria->compare('degree',$this->degree,true);
		$criteria->compare('group',$this->group,true);
		$criteria->compare('institutions',$this->institutions,true);
		$criteria->compare('passing_year',$this->passing_year,true);
		$criteria->compare('duration',$this->duration,true);
		$criteria->compare('cgpa_result',$this->cgpa_result,true);
		$criteria->compare('achievement',$this->achievement,true);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UsersCvEducation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
