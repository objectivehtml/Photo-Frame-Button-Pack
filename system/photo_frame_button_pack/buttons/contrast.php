<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ContrastButton extends PhotoFrameButton {
	
	public $name = 'Contrast';
	
	public $moduleName = 'photo_frame_button_pack';
	
	public function render($manipulation = array())
	{
		$this->image->contrast((int) $manipulation->data->value);
	}
}