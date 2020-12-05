<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Kris\LaravelFormBuilder\FormBuilder;
use Kris\LaravelFormBuilder\Field;

class ProfileController extends Controller
{
    //

    public function edit(FormBuilder $formBuilder)
    {

        // print(route('profile.update'));
        $user = Auth::user();
        $user->load('profile');
        // ddd($user->profile);


        $profileForm = $formBuilder->createByArray(
            [
                [
                    'name' => 'first_name',
                    'type' => 'text',
                    'label' => 'Ism',
                    'attr' => [
                        'placeholder' => 'Palonchi',
                    ],
                    'value' => $user->profile->first_name

                ],
                [
                    'name' => 'last_name',
                    'type' => 'text',
                    'label' => 'Familiya',
                    'value' => $user->profile->last_name,
                    'attr' => [
                        'placeholder' => 'Palonchiyev',
                    ]
                ],
                [
                    'name' => 'father_name',
                    'type' => 'text',
                    'label' => 'Ota ismi',
                    'value' => $user->profile->father_name,
                    'attr' => [
                        'placeholder' => "Palonchi o'g'li/qizi",
                    ]
                ],
                [
                    'name' => 'passport_serial',
                    'type' => 'text',
                    'label' => 'Passport seriya',
                    'value' => $user->profile->passport_serial,
                    'attr' => [
                        'placeholder' => "AA",
                    ]
                ],
                [
                    'name' => 'passport_numbers',
                    'type' => 'number',
                    'label' => 'Passport raqam',
                    'value' => $user->profile->passport_numbers,
                    'attr' => [
                        'placeholder' => "12345678",
                    ]
                ],
                [
                    'name' => 'phone',
                    'type' => 'text',
                    'label' => 'Telefon',
                    'value' => $user->profile->phone,
                    'attr' => [
                        'placeholder' => '+998112223344',
                    ]
                ],
                [
                    'name' => 'profile_submit',
                    'type' => 'submit',
                    'label' => 'Saqlash',
                    'attr' => [
                        'class' => 'form-control btn-secondary'
                    ]
                ],

            ],
            [
                'method' => 'POST',
                'url' => route('profile.update')
            ]
        );


        return view('profile.edit', compact('profileForm'));
    }

    public function update(Request $request)
    {
        // dd($request->all());

        $validator = Validator::make($request->all(), [
                'first_name' => [
                    'required', 'alpha'
                ],
                'last_name' => [
                    'sometimes', 'alpha'
                ],
                'father_name' => [
                    'sometimes', 'alpha'
                ],
                'passport_serial' => [
                    'sometimes', 'max:2|alpha'
                ],
                'passport_numbers' => [
                    'sometimes', 'digits_between:6,10'
                ],
                'phone' => ['required', 'string', 'regex:/^\+([0-9+]){12}$/'],
            ], [
                'first_name.required' => "Ismingiz kiriting",
                'first_name.alpha' => "Ism faqat harflardan iborat bo'lishi kerak",
                'last_name.alpha' => "Familiya faqat harflardan iborat bo'lishi kerak",
                'father_name.alpha' => "Ota ism faqat harflardan iborat bo'lishi kerak",
                'passport_serial.alpha' => "Pasport seriya faqat harflardan iborat bo'lishi kerak",
                'passport_serial.max:3' => "Pasport seriyani maksimal 3 ta belgidan iborat kerak",
                'passport_numbers' => "Pasport raqam 6-10 tagacha raqamdan iborat bo'lishi kerak",
                'phone' => "Telefon raqam +998112223344 format kiritilishi kerak!"
                // 'father_name.max:200|alpha' => "Familiya faqat harflardan iborat bo'lishi kerak",

            ]);
        if ($validator->fails()) {
            return redirect('/profile')
                        ->withErrors($validator)
                        ->withInput();
        }


        $user = Auth::user();
        $user->load('profile');

        $update = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'father_name' => $request->father_name,
            'passport_serial' => $request->passport_serial,
            'passport_numbers' => $request->passport_numbers,
            'phone' => $request->phone,
        ];

        $user->profile->update($update);

        // ddd($user->profile);
        return redirect()->back()->with('success', "Ma'lumotlar omadli saqlandi!");
    }
}
