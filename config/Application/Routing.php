<?php
    namespace Config\Application;

	 	/**
     * Klasa konfiguracyjna przyjaznych adresów
   	 */
    final class Routing {
        public static $routes = [

          ['GET','/', array('controller' => 'schowek', 'action' => 'showAll'), 'home'],

         ['GET','/jezyk/?', array('controller' => 'jezyk', 'action' => 'showAll'), 'jezyk'],
         ['GET','/jezyk/[i:id]/?', array('controller' => 'jezyk', 'action' => 'showOne'), 'jezyk_showOne'],
         ['GET','/jezyk/usun/[i:id]/?', array('controller' => 'jezyk', 'action' => 'delete'), 'jezyk_delete'],
         ['GET','/jezyk/formularz/?', array('controller' => 'jezyk', 'action' => 'ajaxAddForm'), 'jezyk_form'],
         ['POST','/jezyk/dodaj/?', array('controller' => 'jezyk', 'action' => 'insert'), 'jezyk_insert'],
         ['GET','/jezyk/formularz-edycja/[i:id]/?', array('controller' => 'jezyk', 'action' => 'ajaxEditForm'), 'jezyk_form_edit'],
         ['POST','/jezyk/aktualizuj/?', array('controller' => 'jezyk', 'action' => 'update'), 'jezyk_update'],

         ['GET','/schowek/?', array('controller' => 'schowek', 'action' => 'showAll'), 'schowek'],
         ['GET','/schowek/[i:id]/?', array('controller' => 'schowek', 'action' => 'showOne'), 'schowek_showOne'],
         ['GET','/schowek/usun/[i:id]/?', array('controller' => 'schowek', 'action' => 'delete'), 'schowek_delete'],
         ['GET','/schowek/formularz/?', array('controller' => 'schowek', 'action' => 'ajaxAddForm'), 'schowek_form'],
         ['POST','/schowek/dodaj/?', array('controller' => 'schowek', 'action' => 'insert'), 'schowek_insert'],
         ['GET','/schowek/formularz-edycja/[i:id]/?', array('controller' => 'schowek', 'action' => 'ajaxEditForm'), 'schowek_form_edit'],
         ['POST','/schowek/aktualizuj/?', array('controller' => 'schowek', 'action' => 'update'), 'schowek_update'],

           //konfiguracja logowania
           ['GET','/formularz-logowania/?', array('controller' => 'Access', 'action' => 'logForm'), 'login_form'],
             ['GET','/formularz-rejestracji/?', array('controller' => 'Reg', 'action' => 'regForm'), 'register_form'],
             ['POST','/zarejestruj/?', array('controller' => 'Reg', 'action' => 'register'), 'Reg_register'],
             ['POST','/zaloguj/?', array('controller' => 'Access', 'action' => 'login'), 'login'],
             ['GET','/wyloguj/?', array('controller' => 'Access', 'action' => 'logout'), 'logout'],
            ['GET','/formularz-zmiany-hasla/?', array('controller' => 'Access', 'action' => 'editPasswordForm'), 'edit_password_form'],
            ['POST','/zmienHaslo/?', array('controller' => 'Access', 'action' => 'editPassword'), 'edit_password']
    ];
}
