<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Models\Settings;
use App\Http\Controllers\Admin\AdminController;
use Image;
use App\Http\Requests;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class SettingsController extends AdminController
{
	/**
	 * Display a listing of setting.
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		save_resource_url();

		return $this->view('settings.settings.index')->with('items', Settings::all());
	}

	/**
	 * Show the form for creating a new setting.
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function create()
	{
		return $this->view('settings.settings.create_edit');
	}

	/**
	 * Store a newly created setting in storage.
	 *
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function store()
	{
		$attributes = request()->validate(Settings::$rules, Settings::$messages);

        $setting = $this->createEntry(Settings::class, $attributes);

        log_activity('Settings Created', 'A Settings was successfully created', $setting);

        return redirect_to_resource();
	}

	/**
	 * Display the specified setting.
	 *
	 * @param Settings $setting
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function show(Settings $setting)
	{
		return $this->view('settings.settings.show')->with('item', $setting);
	}

	/**
	 * Show the form for editing the specified setting.
	 *
	 * @param Settings $setting
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Settings $setting)
	{
		return $this->view('settings.settings.create_edit')->with('item', $setting);
	}

	/**
	 * Update the specified setting in storage.
	 *
	 * @param Settings  $setting
	 * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Settings $setting, Request $request)
	{
		
    	//$attributes = request()->validate(Settings::$rules, Settings::$messages);

    	//$photo = $this->uploadProfilePicture(request()->file('photo'));

        //$request->merge(['image' => $photo]);
		//$setting = $this->updateEntry($setting, $attributes, $request);
        
		
        //settings(true); // save new settings in session

		// submit without a file
        if (is_null($request->file('photo'))) {
            $this->validate($request, Arr::except(Settings::$rules, 'photo'));
        }
        else {
            $this->validate($request, Settings::$rules);

            $photo = $this->uploadProfilePicture($request->file('photo'));

            $request->merge(['image' => $photo]);
        }

        
        $this->updateEntry($setting, $request->only([
        'name',
        'slogan',
        'description',
        'keywords',
        'author',
        'email',
        'cellphone',
        'telephone',
        'address',
        'po_box',
        'facebook',
        'twitter',
        'googleplus',
        'linkedin',
        'youtube',
        'instagram',
        'zoom_level',
        'latitude',
        'longitude',
        'image'
        ]));

        log_activity('Settings Updated', 'A Settings was successfully updated', $setting);

        return redirect_to_resource();
	}

	/**
	 * Remove the specified setting from storage.
	 *
	 * @param Settings  $setting
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function destroy(Settings $setting)
	{
		$this->deleteEntry($setting, request());

        return redirect_to_resource();
	}
	private function uploadProfilePicture($file)
    {
        $name = token();
        $extension = $file->guessClientExtension();

        $filename = $name . '.' . $extension;
        $imageTmp = Image::make($file->getRealPath());

        if (!$imageTmp) {
            return notify()->error('Oops', 'Something went wrong', 'warning shake animated');
        }

        $path = upload_path_images('logo');

        // save the image
        $imageTmp->save($path . $filename);

        return $filename;
    }
}
