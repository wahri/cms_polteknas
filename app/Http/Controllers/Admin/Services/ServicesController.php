<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\UploadImageHelper;
use App\Models\Announcement;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ServicesController extends AdminController
{
    use UploadImageHelper;

    public function index()
    {
        save_resource_url();

        return $this->view('announcements.index')->with('items', Announcement::all());
    }
    
    public function create()
    {
        $pages = Page::getAllList();

        return $this->view('announcements.create_edit')->with('pages', $pages);
    }
    
    public function store()
    {
        $attributes = request()->validate(Announcement::$rules, Announcement::$messages);

        $photo = $this->uploadImage($attributes['photo'], Announcement::$IMAGE_SIZE);
        if ($photo) {
            $attributes['image'] = $photo;
            unset($attributes['photo']);
            $announcements = $this->createEntry(Announcement::class, $attributes);
        }

        return redirect_to_resource();
    }
    
    public function show(Announcement $announcement)
    {
        return $this->view('announcements.show')->with('item', $announcement);
    }
    
    public function edit(Announcement $announcement)
    {
        $pages = Page::getAllList();
        return $this->view('announcements.create_edit')->with('pages', $pages)->with('item', $announcement);
    }
    
    public function update(Announcement $announcement)
    {
        if (request()->file('photo') === null) {
            $attributes = request()->validate(
                Arr::except(Announcement::$rules, 'photo'),
                Announcement::$messages
            );
        } else {
            $attributes = request()->validate(Announcement::$rules, Announcement::$messages);

            $photo = $this->uploadImage($attributes['photo'], Announcement::$IMAGE_SIZE);
            if ($photo) {
                $attributes['image'] = $photo;
            }
        }

        unset($attributes['photo']);

        $announcement = $this->updateEntry($announcement, $attributes);

        return redirect_to_resource();
    }
    
    public function destroy(Announcement $announcement)
    {
        $this->deleteEntry($announcement, request());

        return redirect_to_resource();
    }
}
