<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Models\Greeting;
use App\Http\Controllers\Admin\AdminController;
use Image;
use App\Http\Requests;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class GreetingController extends AdminController
{
	/**
	 * Display a listing of setting.
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		save_resource_url();

		return $this->view('settings.greeting.index')->with('items', Greeting::all());
	}

	/**
	 * Show the form for creating a new setting.
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function create()
	{
		return $this->view('settings.greeting.create_edit');
	}

	/**
	 * Store a newly created setting in storage.
	 *
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function store()
	{
		$attributes = request()->validate(Greeting::$rules, Greeting::$messages);

        $setting = $this->createEntry(Greeting::class, $attributes);

        log_activity('Greeting Created', 'A Greeting was successfully created');

        return redirect_to_resource();
	}

	/**
	 * Display the specified setting.
	 *
	 * @param Settings $setting
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function show(Greeting $greeting)
	{
		return $this->view('settings.greeting.show')->with('item', $greeting);
	}

	/**
	 * Show the form for editing the specified setting.
	 *
	 * @param Settings $setting
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Greeting $greeting)
	{
		return $this->view('settings.greeting.create_edit')->with('item', $greeting);
	}

	/**
	 * Update the specified setting in storage.
	 *
	 * @param Settings  $setting
	 * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Greeting $greeting, Request $request)
	{
		
    	//$attributes = request()->validate(Settings::$rules, Settings::$messages);

    	//$photo = $this->uploadProfilePicture(request()->file('photo'));

        //$request->merge(['image' => $photo]);
		//$setting = $this->updateEntry($setting, $attributes, $request);
        
		
        //settings(true); // save new settings in session

		// submit without a file
        if (is_null($request->file('photo'))) {
            $this->validate($request, Arr::except(Greeting::$rules, 'photo'));
        }
        else {
            $this->validate($request, Greeting::$rules);

            $photo = $this->uploadProfilePicture($request->file('photo'));

            $request->merge(['image' => $photo]);
        }

        
        $this->updateEntry($greeting, $request->only([
        'title',
        'subtitle',
        'message',
		'buttonlink',
        'image'
        ]));

        log_activity('Greeting Updated', 'A Greeting was successfully updated', $greeting);

        return redirect_to_resource();
	}

	/**
	 * Remove the specified setting from storage.
	 *
	 * @param Settings  $setting
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function destroy(Greeting $greeting)
	{
		$this->deleteEntry($greeting, request());

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
