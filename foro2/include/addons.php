<?php

// Make sure no one attempts to run this script "directly"
if (!defined('PUN'))
	exit;

class flux_addon_manager
{
	var $hooks = array();

	var $loaded = false;

	function load()
	{
		$this->loaded = true;

		$d = dir(PUN_ROOT.'addons');
		if (!$d) return;

		while (($addon_file = $d->read()) !== false)
		{
			if (!is_dir(PUN_ROOT.'addons/'.$addon_file) && preg_match('%(\w+)\.php$%', $addon_file))
			{
				$addon_name = 'addon_'.substr($addon_file, 0, -4);

				include PUN_ROOT.'addons/'.$addon_file;
				$addon = new $addon_name;

				$addon->register($this);
			}
		}
		$d->close();
	}

	function bind($hook, $callback)
	{
		if (!isset($this->hooks[$hook]))
			$this->hooks[$hook] = array();

		if (is_callable($callback))
			$this->hooks[$hook][] = $callback;
	}

	function hook($name)
	{
		if (!$this->loaded)
			$this->load();

		$callbacks = isset($this->hooks[$name]) ? $this->hooks[$name] : array();

		// Execute every registered callback for this hook
		foreach ($callbacks as $callback)
		{
			list($addon, $method) = $callback;
			$addon->$method();
		}
	}
}

class flux_addon
{
	function register($manager)
	{ }
}
