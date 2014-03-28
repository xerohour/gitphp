<?php
/** 
 * Custom exception when a user attempts directory traversal
 *
 * @author Christopher Han <xiphux@gmail.com>
 * @copyright Copyright (c) 2012 Christopher Han
 * @package GitPHP
 * @subpackage Exception
 */
class GitPHP_DirectoryTraversalException extends GitPHP_MessageException
{
	/**
	 * Path
	 *
	 * @var string
	 */
	public $Path;

	/**
	 * Constructor
	 *
	 * @param string $path path
	 * @param string $message message
	 * @param int $code exception code
	 */
	public function __construct($path, $message = '', $code = 0)
	{
		$this->Path = $path;
		if (empty($message))
			$message = sprintf('%1$s is attempting directory traversal', $path);
		parent::__construct($message, true, 200, $code);
	}
}
