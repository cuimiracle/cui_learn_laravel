<?php namespace App\Repositories\Pages;
 
use Illuminate\Redis\Database;
 
/**
 * Page repository using Redis.
 *
 */
class RedisPageRepository implements PageRepositoryInterface
{
 
	/**
	 * @var		Illuminate\Redis\Database	$redis	Redis database.
	 */
	protected $redis;
	
	/**
	 * Set the dependencies.
	 *
	 * @param	Illuminate\Redis\Database	$redis
	 * @return	void
	 */
	public function __construct(Database $redis)
	{
		$this->redis = $redis->connection();
	}
 
	/**
	 * Find a post by a given ID.
	 *
	 * @author	Andrea Marco Sartori
	 * @param	int	$id
	 * @return	Post
	 */
	public function find($id)
	{
		return $this->redis->hgetall("page:{$id}");
	}
 
}