<?php

/**
 *
 * Set active css class if the specific URI is current URI
 *
 * @param string $path       A specific URI
 * @param string $class_name Css class name, optional
 * @return string            Css class name if it's current URI,
 *                           otherwise - empty string
 */
function setActive(string $path, string $class_name = "active")
{
    //return Request::path() === $path ? $class_name : "";
    return Request::segment(2) === $path ? $class_name : "";
}

/**
 *
 * Set active css class if the specific URI is current URI by fragments.
 *
 * Works when URI looks like 'admin/messages/feedback/{id}'
 * And compares only 'admin/messages/feedback'
 *
 * @param string $path          A specific URI
 * @param string $class_name    Css class name, optional
 * @return string               Css class name if it's current URI,
 *                              otherwise - empty string
 */
function setActiveBySegments(string $path, string $class_name = "active")
{
    //$request_path = Request::segment(1) . '/' . Request::segment(2) . '/' . Request::segment(3);
    //$request_path = Request::segment(1) . '/' . Request::segment(2);
    $request_path = Request::segment(2);
    return $request_path === $path ? $class_name : "";
}



/* function displayPath()
{
		$page = substr(strrchr(url()->current(),"/"),1);
		if($page === 'en'){
			$path = '';
		}else if($page === 'watersupply'){
			$path =  '';
			
		}
		return $path;
} */