  <?php
		
defined ( 'SYSPATH' ) or die ( 'No direct script access.' );
		class Controller_Page extends Controller_Basic {
			public $pageData = array(
					'headerTitle' => 'default header title',
					'headerSubtitle' => 'default header subtitle'
			);
	
			public function action_home() {
				$this->template->title = __ ( 'Welcome To Dominion Shotokan Karate Club' );
				$this->pageData['headerTitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['headerSubtitle'] = 'Traditional Shotokan Karate Instruction';				
				$this->template->content = View::factory ( 'home', $this->pageData );
			}
			public function action_news() {
				$this->template->title = __ ( 'News' );
				$this->pageData['headerTitle'] = 'News';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				
				$this->template->content = View::factory ( 'news' );
			}
			public function action_instructors() {
				$this->template->title = __ ( 'Instructors' );
				
				$this->template->content = View::factory ( 'instructors' );
			}
			public function action_classes() {
				$this->template->title = __ ( 'Classes' );
				
				$this->template->content = View::factory ( 'classes' );
			}
			public function action_dojoRules() {
				$this->template->title = __ ( 'Dojo Rules - Introduction' );
				
				$this->template->content = View::factory ( 'dojorules-introduction' );
			}
			public function action_dojoRulesFaqs() {
				$this->template->title = __ ( 'Dojo Rules - FAQs' );
				
				$this->template->content = View::factory ( 'dojorules-faqs' );
			}
			public function action_dojoRulesEtiquette() {
				$this->template->title = __ ( 'Dojo Rules - Etiquette' );
				
				$this->template->content = View::factory ( 'dojorules-etiquette' );
			}
			public function action_dojoRulesProtocols() {
				$this->template->title = __ ( 'Dojo Rules - Protocols' );
				
				$this->template->content = View::factory ( 'dojorules-protocols' );
			}
			public function action_dojoRulesRanks() {
				$this->template->title = __ ( 'Dojo Rules - Ranks' );
				
				$this->template->content = View::factory ( 'dojorules-ranks' );
			}
			public function action_dojoRulesEvents() {
				$this->template->title = __ ( 'Dojo Rules - Events' );
				
				$this->template->content = View::factory ( 'dojorules-events' );
			}
			public function action_dojoRulesTerminology() {
				$this->template->title = __ ( 'Dojo Rules - Terminology' );
				
				$this->template->content = View::factory ( 'dojorules-terminology' );
			}
			public function action_dojoRulesKata() {
				$this->template->title = __ ( 'Dojo Rules - Shotokan Kata' );
				
				$this->template->content = View::factory ( 'dojorules-shotokankata' );
			}
			public function action_dojoRulesDojoKun() {
				$this->template->title = __ ( 'Dojo Rules - Dojo Kun' );
				
				$this->template->content = View::factory ( 'dojorules-dojokun' );
			}
			public function action_dojoRulesNijuKun() {
				$this->template->title = __ ( 'Dojo Rules - Niju Kun' );
				
				$this->template->content = View::factory ( 'dojorules-nijukun' );
			}
			public function action_events() {
				$this->template->title = __ ( 'Events' );
				
				$this->template->content = View::factory ( 'events' );
			}
			public function action_photos() {
				$this->template->title = __ ( 'Photos from DSKC Events' );
				
				$this->template->content = View::factory ( 'photos' );
			}
			public function action_resources() {
				$this->template->title = __ ( 'Resources' );
				
				$this->template->content = View::factory ( 'links' );
			}
			public function action_contactUs() {
				$this->template->title = __ ( 'Contacting DSKC' );
				
				$this->template->content = View::factory ( 'contactus' );
			}
		} 