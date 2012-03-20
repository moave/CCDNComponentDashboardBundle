<?php

/*
 * This file is part of the CCDNComponent DashboardBundle
 *
 * (c) CCDN (c) CodeConsortium <http://www.codeconsortium.com/> 
 * 
 * Available on github <http://www.github.com/codeconsortium/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CCDNComponent\DashboardBundle\Component\Chain;


/**
 * 
 * @author Reece Fowell <reece@codeconsortium.com> 
 * @version 1.0
 */
class SubscriberChain
{
	
	
	
	/**
	 *
	 */
	private $subscribers;



	public function __construct()
	{
		$this->subscribers = array();
	}
	
	
	
	/**
	 *
	 */
	public function addSubscriber($subscriber)
	{
		$this->subscribers[] = $subscriber;
	}
	
	
	
	/**
	 *
	 */
	public function getSubscribers()
	{
		return $this->subscribers;
	}
	
}
