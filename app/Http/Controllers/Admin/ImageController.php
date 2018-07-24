<?php

namespace app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ImageController extends Controller {
    /**
     *
     */
    const IMAGE_DIR = '/images/';

    /**
     *
     */
    const IMAGE_DRIVE = 'public';

    /**
     * @var Request
     */
    private $request;

    /**
     * @var \Illuminate\Contracts\Validation\Validator
     */
    private $validator;

    function __construct() {
        $this->middleware('auth');
        $this->request = request();

        $this->validator = Validator::make($this->request->all(), [
            'file' => 'mimetypes:image/*'
        ]);


    }

    /**
     * put uploaded image on the server.
     *
     * @return Response
     */
    function put() {
        // check file was uploaded and is valid.
        if($this->request->hasFile('file') && $this->request->file('file')->isValid() && $this->request->file('file')) {
            $photo = $this->request->file('file');
            $filename = $photo->getClientOriginalName();
            $index = 0;
            // Don't let the upload overwrite a existing file.
            while(Storage::disk(self::IMAGE_DRIVE)->exists(date('Y/m/d') . $filename)) {
                $filename =  $photo->getClientOriginalName() . ++$index . $photo->getClientOriginalExtension();
            }

            $photo->storeAs('/images/' . date('Y/m/d'), $filename, 'public');

            return response()->json(['location' => self::IMAGE_DIR . date('Y/m/d/') . $filename]);
        }

        return response("Invalid file specified", 403);
    }

    function getList() {
        $files = Storage::disk(self::IMAGE_DRIVE)->allFiles(self::IMAGE_DIR);

        return response()->json($files);
    }
}