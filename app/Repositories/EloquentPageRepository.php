<?php namespace App\Repositories\Pages;
use App\Page;
/**
 * Page repository using Eloquent.
 *
 */
class EloquentPageRepository implements PageRepositoryInterface
{
 
	/**
	 * @var	Page	$page	The Page model.
	 */
	protected $page;
	
	/**
	 * Set the dependencies.
	 *
	 * @param	Page	$page
	 * @return	void
	 */
	public function __construct(Page $page)
	{
		$this->page = $page;
	}
 
	/**
	 * Find a page by a given ID.
	 *
	 * @param	int	$id
	 * @return	Page
	 */
	public function find($id)
	{
		return $this->page->find($id);
	}
 
}