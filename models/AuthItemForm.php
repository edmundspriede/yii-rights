<?php
/**
* Authorization item form class file.
*
* @author Christoffer Niska <cniska@live.com>
* @copyright Copyright &copy; 2010 Christoffer Niska
* @since 0.5
*/
class AuthItemForm extends CFormModel
{
	public $name;
	public $description;
	public $type;
	public $bizRule;
	public $data;

	/**
	* Declares the validation rules.
	*/
	public function rules()
	{
		return array(
			array('name', 'required'),
			array('name', 'nameIsAvailable', 'on'=>'create'),
			array('name', 'newNameIsAvailable', 'on'=>'update'),
			array('name', 'isSuperuser', 'on'=>'update'),
			array('type', 'required', 'on'=>'create'),
		   	array('description, type, bizRule, data', 'safe'),
		);
	}

	/**
	* Declares attribute labels.
	*/
	public function attributeLabels()
	{
		return array(
			'name'			=> Yii::t('RightsModule.core', 'Name'),
			'description'	=> Yii::t('RightsModule.core', 'Description'),
			'type'			=> Yii::t('RightsModule.core', 'Type'),
			'bizRule'		=> Yii::t('RightsModule.core', 'Business rule'),
			'data'			=> Yii::t('RightsModule.core', 'Data'),
		);
	}

	/**
	* Makes sure that the name is available.
	* This is the 'nameIsAvailable' validator as declared in rules().
	*/
	public function nameIsAvailable($attribute, $params)
	{
		// Make sure that an authorization item with the name does not already exist
		if( Rights::getAuthorizer()->authManager->getAuthItem($this->name)!==null )
			$this->addError('name', Yii::t('RightsModule.core', 'An item with this name already exists.', array(':name'=>$this->name)));
	}

	/**
	* Makes sure that the new name is available if the name been has changed.
	* This is the 'newNameIsAvailable' validator as declared in rules().
	*/
	public function newNameIsAvailable($attribute, $params)
	{
		if( strtolower($_GET['name'])!==strtolower($this->name) )
			$this->nameIsAvailable($attribute, $params);
	}

	/**
	* Makes sure that the superuser roles name is not changed.
	* This is the 'isSuperuser' validator as declared in rules().
	*/
	public function isSuperuser($attribute, $params)
	{
		if( $_GET['name']!==$this->name && strtolower($_GET['name'])===strtolower(Rights::getConfig('superuserRole')) )
			$this->addError('name', Yii::t('RightsModule.core', 'Name of the superuser cannot be changed.'));
	}
}

