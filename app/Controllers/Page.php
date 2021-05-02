<?php

namespace App\Controllers;

class Page extends BaseController
{
	public function category($page = 'inicio')
	{
		if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php')) {
        	throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
    	}

    	$data['title'] = ucfirst($page);
		$data['showSecondary'] = true;

    	
		return view('pages/'.$page, $data);
	}
}
