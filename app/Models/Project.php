<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public static $project, $image, $imageName, $imageUrl, $directory, $extension;
    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'project-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function createProject($request)
    {
        self::$project = new Project();
        self::$project->title = $request->title;
        self::$project->description = $request->description;
        self::$project->image = self::getImageUrl($request);
        self::$project->save();
    }
    public static function updateProject($request, $id)
    {
        self::$project = Project::find($id);
        if($request->file('image'))
        {
            if($request->file('image'))
            {
                if(file_exists(self::$project->image))
                {
                    unlink(self::$project->image);
                }
                self::$imageUrl = self::getImageUrl($request);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$project->image;
        }
        self::$project->title = $request->title;
        self::$project->description = $request->description;
        self::$project->image = self::$imageUrl;
        self::$project->save();
    }
    public static function deleteProject($id)
    {
        self::$project = Project::find($id);
        if(file_exists(self::$project->image))
        {
            unlink(self::$project->image);
        }
        self::$project->delete();
    }
}
