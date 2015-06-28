  <?php
		
defined ( 'SYSPATH' ) or die ( 'No direct script access.' );
		class Controller_Page extends Controller_Basic {
			public $pageData = array(
					'headerTitle' => 'default header title',
					'headerSubtitle' => 'default header subtitle',
					'mainContent' => 'default main content',
					'full_version_name' => 'default full version name',
					'banner' => array(),
					'isLogoWrapping' => true
			);

			private function fill_template(){
				$config = Kohana::$config->load('dskc');
				$full_version_name = '';
				if( strtoupper($config['environment']) != 'PROD'){
					$full_version_name .= $config['environment']." ";
				}
				$full_version_name .= $config['version']['name']." ";
				$full_version_name .= '('.$config['version']['released'].')';
				$this->pageData['full_version_name'] = $full_version_name;
				
				$this->pageData['banner'] = Calendar::banner($config['calendar']['url'], $config['calendar']['banner_outlay']);
				
				//build page
				$this->template->content = View::factory ( 'template'.DIRECTORY_SEPARATOR.'pageTemplate', $this->pageData );
			}
			
			public function action_home() {
				$this->template->title =  __t( 'Welcome To Dominion Shotokan Karate Club' );
				$this->pageData['headerTitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['headerSubtitle'] = 'Traditional Shotokan Karate Instruction';
				$this->pageData['mainContent'] = View::factory ('home');		
				$this->fill_template();
			}
			public function action_news() {
				$this->template->title = __t( 'News' );
				$this->pageData['headerTitle'] = 'News';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ( 'news' );
				$this->fill_template();
			}
			public function action_instructors() {
				$this->template->title = __t( 'Instructors' );
				$this->pageData['headerTitle'] = 'Instructors';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ( 'instructors' );
				$this->fill_template();
			}
			public function action_classes() {
				$this->template->title = __t( 'Classes' );
				$this->pageData['headerTitle'] = 'Classes';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ( 'classes' );
				$this->fill_template();
			}
		public function action_calendar() {
				$this->template->title = __t( 'Calendar' );
				$this->pageData['headerTitle'] = 'Calendar';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ( 'calendar' );
				$this->fill_template();
			}
			public function action_dojoRules() {
				$this->template->title = __t( 'Dojo Rules - Introduction' );
				$this->pageData['headerTitle'] = 'Dojo Rules - Introduction';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('dojoRules-introduction');
				$this->fill_template();
			}
			public function action_dojoRulesFaqs() {
				$this->template->title = __t( 'Dojo Rules - FAQs' );
				$this->pageData['headerTitle'] = 'Dojo Rules - FAQs';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('dojoRules-faqs');
				$this->fill_template();
			}
			public function action_dojoRulesEtiquette() {
				$this->template->title = __t( 'Dojo Rules - Etiquette' );
				$this->pageData['headerTitle'] = 'Dojo Rules - Etiquette';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('dojoRules-etiquette');
				$this->fill_template();
			}
			public function action_dojoRulesProtocols() {
				$this->template->title = __t( 'Dojo Rules - Protocols' );
				$this->pageData['headerTitle'] = 'Dojo Rules - Protocols';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('dojoRules-protocols');
				$this->fill_template();
			}
			public function action_dojoRulesRanks() {
				$this->template->title = __t( 'Dojo Rules - Ranks' );
				$this->pageData['headerTitle'] = 'Dojo Rules - Ranks';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('dojoRules-ranks');
				$this->fill_template();
			}
			public function action_dojoRulesEvents() {
				$this->template->title = __t( 'Dojo Rules - Special Trainings' );
				$this->pageData['headerTitle'] = 'Dojo Rules - Special Trainings';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('dojoRules-events');
				$this->fill_template();
			}
			public function action_dojoRulesTerminology() {
				$this->template->title = __t( 'Dojo Rules - Terminology' );
				$this->pageData['headerTitle'] = 'Dojo Rules - Terminology';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('dojoRules-terminology');
				$this->fill_template();
			}
			public function action_dojoRulesKata() {
				$this->template->title = __t( 'Dojo Rules - Shotokan Kata' );
				$this->pageData['headerTitle'] = 'Dojo Rules - Shotokan Kata';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('dojoRules-shotokanKata');
				$this->pageData['isLogoWrapping'] = false;
				$this->fill_template();
			}
			public function action_dojoRulesDojoKun() {
				$this->template->title = __t( 'Dojo Rules - Dojo Kun' );
				$this->pageData['headerTitle'] = 'Dojo Rules - Dojo Kun';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('dojoRules-dojoKun');
				$this->fill_template();
			}
			public function action_dojoRulesNijuKun() {

				$this->template->title = __t( 'Dojo Rules - Niju Kun' );
				$this->pageData['headerTitle'] = 'Dojo Rules - Niju Kun';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('dojoRules-nijuKun');
				$this->pageData['isLogoWrapping'] = false;
				$this->fill_template();
			}
			public function action_events() {
				$this->template->title = __t( 'Events' );
				$this->pageData['headerTitle'] = 'Events';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('events');
				$this->fill_template();
			}
			public function action_photosShiai2014() {
			
				$this->template->title = __t( 'Photos from DSKC Events' );
				$this->pageData['headerTitle'] = 'Photos from DSKC Events';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('photos-shiai2014');
				$this->fill_template();
			}				
			public function action_photosRiellyPohle2015() {
			
				$this->template->title = __t( 'Photos from DSKC Events' );
				$this->pageData['headerTitle'] = 'Photos from DSKC Events';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('photos-riellyPohle2015');
				$this->fill_template();
			}				

			public function action_photosAmin2014() {
			
				$this->template->title = __t( 'Photos from DSKC Events' );
				$this->pageData['headerTitle'] = 'Photos from DSKC Events';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('photos-amin2014');
				$this->fill_template();
			}				
			public function action_photosTuluceanu2013() {
			
				$this->template->title = __t( 'Photos from DSKC Events' );
				$this->pageData['headerTitle'] = 'Photos from DSKC Events';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('photos-tuluceanu2013');
				$this->fill_template();
			}				
			public function action_photosRastegarFoltz2012() {
				$this->template->title = __t( 'Photos from DSKC Events' );
				$this->pageData['headerTitle'] = 'Photos from DSKC Events';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('photos-rastegarFoltz2012');
				$this->fill_template();
			}
			public function action_photosHoffman2011() {
				$this->template->title = __t( 'Photos from DSKC Events' );
				$this->pageData['headerTitle'] = 'Photos from DSKC Events';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('photos-hoffman2011');
				$this->fill_template();
			}
			public function action_photosPohle2010() {
				$this->template->title = __t( 'Photos from DSKC Events' );
				$this->pageData['headerTitle'] = 'Photos from DSKC Events';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('photos-pohle2010');
				$this->fill_template();
			}
			public function action_photosMaeshima2009() {
				$this->template->title = __t( 'Photos from DSKC Events' );
				$this->pageData['headerTitle'] = 'Photos from DSKC Events';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('photos-maeshima2009');
				$this->fill_template();
			}
			public function action_equipment() {
			
				$this->template->title = __t( 'Equipment' );
				$this->pageData['headerTitle'] = 'Equipment';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('equipment');
				$this->fill_template();
			}				
			public function action_resources() {

				$this->template->title = __t( 'Resources' );
				$this->pageData['headerTitle'] = 'Resources';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
				$this->pageData['mainContent'] = View::factory ('resources');
				$this->pageData['isLogoWrapping'] = false;
				$this->fill_template();
			}
			public function action_contactUs() {
				$this->template->title = __t( 'Contacting DSKC' );
				$this->pageData['headerTitle'] = 'Contacting DSKC';
				$this->pageData['headerSubtitle'] = 'Dominion Shotokan Karate Club, LLC';
								
				$contact_form = ContactForm::create();

				if($_POST){
					$config = Kohana::$config->load('dskc');
					if(!$form_errors = ContactForm::verify_form($_POST)){
						ContactForm::send_mail($_POST, $config['contact_us']['mail_admin'], $config['contact_us']['mail_recipient']);
					}
				}
				
				$this->pageData['mainContent'] = View::factory ('contactUs')
					->bind("contact_form", $contact_form)
					->bind("form_errors", $form_errors);
				$this->fill_template();
			}

		} 