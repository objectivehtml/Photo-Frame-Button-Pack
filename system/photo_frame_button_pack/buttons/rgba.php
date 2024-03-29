<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RgbaButton extends PhotoFrameButton {
	
	public $name = 'RGBA';
	
	public $className = 'Rgba';
	
	public $moduleName = 'photo_frame_button_pack';
	
	public function render($manipulation = array())
	{
		$d = $manipulation->data;
		
		$this->image->rgba($d->r, $d->g, $d->b, $d->a);
	}
}