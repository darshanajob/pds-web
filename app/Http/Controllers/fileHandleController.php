<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

class fileHandleController extends Controller
{
    public function upload_file() {
		$destination_path = storage_path('uploads');
		$files = $request->file('files');
		foreach($files as $file) {
			$validator = Validator::make(
				[
					'file' => $file,
					'extension' => Str::lower($file->getClientOriginalExtension()),
				],
				[
					'file' => 'required|max:100000',
					'extension' => 'required|in:jpg,jpeg,bmp,png,doc,docx,zip,rar,pdf,rtf,xlsx,xls,txt,csv'
				]
            );
			
			if($validator->passes()){
				$filename = $file->getClientOriginalName();
				$upload_success = $file->move($destination_path, $filename);
				if ($upload_success) {
					#if needed, save to your table
					$attach = new attachments();
					$attach->file_name = $filename;
					$attach->mime = $file->getClientMimeType();
					$attach->save();
				}
			}
		}
	}
	
	public function download( $filename = '' )
	{
		// Check if file exists in app/storage/file folder
		$file_path = storage_path() . "/app/public/applications/" . $filename;
		$headers = array(
			'Content-Type: pdf',
			'Content-Disposition: attachment; filename='.$filename,
		);
		if ( file_exists( $file_path ) ) {
			// Send Download
			return \Response::download( $file_path, $filename, $headers );
		} else {
			// Error
			exit( 'Requested file does not exist on our server!' );
		}
	}
     
}
