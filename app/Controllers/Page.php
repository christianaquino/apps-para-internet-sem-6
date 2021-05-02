<?php

namespace App\Controllers;

class Page extends BaseController
{
	public function category($page = 'inicio')
	{
		if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php')) {
        	throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
    	}

    	//$data['title'] = ucfirst($page); // Capitalize the first letter

    	
		return view('pages/'.$page);
	}
}
