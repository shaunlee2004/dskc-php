  <?php
		
defined ( 'SYSPATH' ) or die ( 'No direct script access.' );
		class Controller_Page extends Controller_Basic {
			public $pageData = array(
					'headerTitle' => 'default header title',
					'headerSubtitle' => 'default header subtitle',
					'mainContent' => 'default main content'
			);

			private function fill_template(){
				$this->template->content = View::factory ( 'pageTemplate', $this->pageData );
			}
			
			public function action_home() {
				$this->template->title = __ ( 'Welcome To Dominion Shotokan Karate Club' );
				$this->pageData['headerTitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['headerSubtitle'] = 'Traditional Shotokan Karate Instruction';
				$this->pageData['mainContent'] = View::factory ('home');		
				$this->fill_template();
			}
			public function action_news() {
				$this->template->title = __ ( 'News' );
				$this->pageData['headerTitle'] = 'News';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ( 'news' );
				$this->fill_template();
			}
			public function action_instructors() {
				$this->template->title = __ ( 'Instructors' );
				$this->pageData['headerTitle'] = 'Instructors';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ( 'instructors' );
				$this->fill_template();
			}
			public function action_classes() {
				$this->template->title = __ ( 'Classes' );
				$this->pageData['headerTitle'] = 'Classes';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ( 'classes' );
				$this->fill_template();
			}
			public function action_dojoRules() {
				$this->template->title = __ ( 'Dojo Rules - Introduction' );
				$this->pageData['headerTitle'] = 'Dojo Rules - Introduction';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('dojoRules-introduction');
				$this->fill_template();
			}
			public function action_dojoRulesFaqs() {
				$this->template->title = __ ( 'Dojo Rules - FAQs' );
				$this->pageData['headerTitle'] = 'Dojo Rules - FAQs';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('dojoRules-faqs');
				$this->fill_template();
			}
			public function action_dojoRulesEtiquette() {
				$this->template->title = __ ( 'Dojo Rules - Etiquette' );
				$this->pageData['headerTitle'] = 'Dojo Rules - Etiquette';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('dojoRules-etiquette');
				$this->fill_template();
			}
			public function action_dojoRulesProtocols() {
				$this->template->title = __ ( 'Dojo Rules - Protocols' );
				$this->pageData['headerTitle'] = 'Dojo Rules - Protocols';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('dojoRules-protocols');
				$this->fill_template();
			}
			public function action_dojoRulesRanks() {
				$this->template->title = __ ( 'Dojo Rules - Ranks' );
				$this->pageData['headerTitle'] = 'Dojo Rules - Ranks';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('dojoRules-ranks');
				$this->fill_template();
			}
			public function action_dojoRulesEvents() {
				$this->template->title = __ ( 'Dojo Rules - Events' );
				$this->pageData['headerTitle'] = 'Dojo Rules - Events';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('dojoRules-events');
				$this->fill_template();
			}
			public function action_dojoRulesTerminology() {
				$this->template->title = __ ( 'Dojo Rules - Terminology' );
				$this->pageData['headerTitle'] = 'Dojo Rules - Terminology';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('dojoRules-terminology');
				$this->fill_template();
			}
			public function action_dojoRulesKata() {
				$this->template->title = __ ( 'Dojo Rules - Shotokan Kata' );
				$this->pageData['headerTitle'] = 'Dojo Rules - Shotokan Kata';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('dojoRules-shotokanKata');
				$this->fill_template();
			}
			public function action_dojoRulesDojoKun() {
				$this->template->title = __ ( 'Dojo Rules - Dojo Kun' );
				$this->pageData['headerTitle'] = 'Dojo Rules - Dojo Kun';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('dojoRules-dojoKun');
				$this->fill_template();
			}
			public function action_dojoRulesNijuKun() {

				$this->template->title = __ ( 'Dojo Rules - Niju Kun' );
				$this->pageData['headerTitle'] = 'Dojo Rules - Niju Kun';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('dojoRules-nijuKun');
				$this->fill_template();
			}
			public function action_events() {
				$this->template->title = __ ( 'Events' );
				$this->pageData['headerTitle'] = 'Events';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('events');
				$this->fill_template();
			}
			public function action_photos() {

				$this->template->title = __ ( 'Photos from DSKC Events' );
				$this->pageData['headerTitle'] = 'Photos from DSKC Events';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('photos');
				$this->fill_template();
			}
			public function action_resources() {

				$this->template->title = __ ( 'Resources' );
				$this->pageData['headerTitle'] = 'Resources';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('links');
				$this->fill_template();
			}
			public function action_contactUs() {
				$this->template->title = __ ( 'Contacting DSKC' );
				$this->pageData['headerTitle'] = 'Contacting DSKC';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('contactUs');
				$this->fill_template();
			}
			

		} 