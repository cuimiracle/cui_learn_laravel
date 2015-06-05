<?php namespace App\Repositories\Pages;
 
/**
 * Interface for Page repositories.
 *
 */
interface PageRepositoryInterface
{
 
	/**
	 * Find a page by a given ID.
	 *
	 * @param	int	$id
	 * @return	Page
	 */
	public function find($id);
 
}