<?php
class HtmlRenderer
{
	public function render(HmlElement $element)
	{
	$html=sprintf(
		'<%s  %s> %s </%s>',
		$element ->getTag(),
		$this->renderAttributes($element->getAttributes())),
		$element ->getContent(),
		$element ->getTag()
		);
		return $html;
	}
	
	protected function renderAttributes(array $attributes)
	{
	$attributes='';
	foreach ($attributes as $key =>$value){
		$attributes="\" $key=$value\"";
		}
		return $attributes;
	}

}
?>