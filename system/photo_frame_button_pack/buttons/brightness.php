<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BrightnessButton extends PhotoFrameButton {
	
	public $name = 'Brightness';
	
	public $moduleName = 'photo_frame_button_pack';
	
	public function render($manipulation = array())
	{
		$this->image->brightness((int) $manipulation->data->value);
	}
}