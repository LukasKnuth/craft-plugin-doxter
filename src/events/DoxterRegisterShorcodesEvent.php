<?php
namespace selvinortiz\doxter\events;

use yii\base\Event;

class DoxterRegisterShorcodesEvent extends Event
{
    /**
     * @var array
     */
    protected $shortcodes = [];

    public function addShortcodes(array $shortcodes)
    {
        $this->shortcodes = array_merge($this->shortcodes, $shortcodes);
    }

    public function getShortcodes()
    {
        return $this->shortcodes;
    }
}
