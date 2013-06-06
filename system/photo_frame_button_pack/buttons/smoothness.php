<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SmoothnessButton extends PhotoFrameButton {
	
	public $name = 'Smoothness';
	
	public $moduleName = 'photo_frame_button_pack';
	
	public function render($manipulation = array())
	{
		$this->image->smoothness((float) $manipulation->data->value);
	}
}