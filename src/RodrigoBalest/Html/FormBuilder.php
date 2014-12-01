<?php namespace RodrigoBalest\Html;

class FormBuilder extends \Illuminate\Html\FormBuilder {

	/**
	 * Get the check state for a checkbox input.
	 *
	 * @param  string  $name
	 * @param  mixed  $value
	 * @param  bool  $checked
	 * @return bool
	 */
	protected function getCheckboxCheckedState($name, $value, $checked)
	{
		if (isset($this->session) && ! $this->oldInputIsEmpty() && is_null($this->old($name))) return false;

		if ($this->missingOldAndModel($name)) return $checked;

		$posted = $this->getValueAttribute($name);
		
		$posted = ($posted instanceof \Illuminate\Database\Eloquent\Collection ? $this->checkRelationship($posted, $value) : $posted);

		return is_array($posted) ? in_array($value, $posted) : (bool) $posted;
	}
	
	/**
	 * Cycle through the Eloquent Collection to see if any relationship models
	 * include the given input value as the model ID.
	 *
	 * @param \Illuminate\Database\Eloquent\Collection $collection
	 * @param string $value
	 * @return bool
	 */
	protected function checkRelationship($collection, $value)
	{
		foreach ($collection as $relation)
		{
			if ($relation->getKey() == $value) return true;
		}
		
		return false;
	}

}
