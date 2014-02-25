<?php

defined ( 'SYSPATH' ) or die ( 'No direct script access.' );
class Calendar {
	
	public static function banner($calendar_url, $outlay){
		$return = array();
		
		// load Google Calendar classes
		Zend_Loader::loadClass('Zend_Gdata');
		Zend_Loader::loadClass('Zend_Gdata_AuthSub');
		Zend_Loader::loadClass('Zend_Gdata_ClientLogin');
		Zend_Loader::loadClass('Zend_Gdata_Calendar');
		
		//setup calendar query
		$service = new Zend_Gdata_Calendar();
		$query = $service->newEventQuery();
		$query->setUser($calendar_url)
			->setVisibility('public')
			->setProjection('full')
			->setStartMin(Date('Y-n-j'))
			->setStartMax(Date('Y-n-j', strtotime("+" . $outlay . "days")))
			->setOrderby('startTime')
			->setSortOrder('ascending');
		
		//query calendar
		try { $eventFeed = $service->getCalendarEventFeed($query); }
		catch (Zend_Gdata_App_Exception $e) { return; }
		
		//determine banner news
		$event_found = false;
		foreach ($eventFeed as $event) {
			
			foreach ($event->when as $when) {
				$startTime = new DateTime($when->startTime);
				$endTime = new DateTime($when->endTime);
				if($startTime->add(new DateInterval('P1D')) == $endTime) {
					$event_found = true;
					$date = new DateTime($when->startTime);
					$return['message'] = $date->format('D M d, Y') . ' ' . $event->title->text;
					$return['href'] = $event->link[0]->gethref();
				}
				if($event_found) break;
			}
			if($event_found) break;
		}
		return $return;	
	}
	
}
?>