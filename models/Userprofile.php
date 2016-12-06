<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userprofile".
 *
 * @property integer $id
 * @property string $full_name
 * @property string $gender
 * @property string $dob
 * @property string $years_of_experience
 * @property string $industry
 * @property string $location
 * @property string $about_me
 * @property string $profile_picture
 * @property string $professional_title
 * @property integer $career_level
 * @property integer $communication_level
 * @property integer $organizational_level
 * @property integer $job_related_level
 * @property string $address
 * @property integer $phone_number
 * @property string $website
 * @property string $email
 */
class Userprofile extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'userprofile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['full_name', 'gender', 'years_of_experience', 'industry', 'location', 'about_me', 'profile_picture', 'professional_title', 'career_level', 'communication_level', 'organizational_level', 'job_related_level', 'address', 'phone_number', 'website', 'email'], 'required'],
            [['dob'], 'safe'],
            [['career_level', 'communication_level', 'organizational_level', 'job_related_level', 'phone_number'], 'integer'],
            [['full_name', 'gender', 'years_of_experience', 'industry', 'location', 'about_me', 'professional_title', 'address', 'website', 'email'], 'string', 'max' => 100],
            [['profile_picture'], 'string', 'max' => 300],
            [['file'],'file'],
            [['file'],'file','extensions'=>'jpg,gif,png,jpeg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'User ID',
            'full_name' => 'Full Name',
            'gender' => 'Gender',
            'dob' => 'Dob',
            'years_of_experience' => 'Years Of Experience',
            'industry' => 'Industry',
            'location' => 'Location',
            'about_me' => 'About Me',
            'file ' => 'Profile Picture',
            'professional_title' => 'Professional Title',
            'career_level' => 'Career Level',
            'communication_level' => 'Communication Level',
            'organizational_level' => 'Organizational Level',
            'job_related_level' => 'Job Related Level',
            'address' => 'Address',
            'phone_number' => 'Phone Number',
            'website' => 'Website',
            'email' => 'Email',
        ];
    }
}
