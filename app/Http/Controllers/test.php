<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Kris\LaravelFormBuilder\FormBuilder;
use Kris\LaravelFormBuilder\Field;
use App\Forms\SongForm;

class SongsController extends BaseController {

    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->createByArray([
                        [
                            'name' => 'name',
                            'type' => Field::TEXT,
                        ],
                        [
                            'name' => 'lyrics',
                            'type' => Field::TEXTAREA,
                        ],
                        [
                            'name' => 'publish',
                            'type' => Field::CHECKBOX
                        ],
                    ]
            ,[
            'method' => 'POST',
            'url' => route('song.store')
        ]);

        return view('song.create', compact('form'));
    }
}
