<?php

defined ( 'SYSPATH' ) or die ( 'No direct script access.' );
class Calendar {
	
	public static function banner_message($calendar_url, $outlay){
		$return = '';
		
		// load Google Calendar classes
		Zend_Loader::loadClass('Zend_Gdata');
		Zend_Loader::loadClass('Zend_Gdata_AuthSub');
		Zend_Loader::loadClass('Zend_Gdata_ClientLogin');
		Zend_Loader::loadClass('Zend_Gdata_Calendar');
		
		//setup calendar query
		$service = new Zend_Gdata_Calendar();
		$query = $service->newEventQuery();
		$query->setUser($calendar_url);
		$query->setVisibility('public');
		$query->setProjection('full');
		$query->setStartMin(Date('Y-n-j'));
		$query->setStartMax(Date('Y-n-j', strtotime("+" . $outlay . "days")));
		$query->setOrderby('startTime');
		
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
					$return = (new DateTime($when->startTime))->format('D M d, Y') . ' ' . $event->title->text;
				}
				if($event_found) break;
			}
			if($event_found) break;
		}
		return $return;	
	}
	
}
?>