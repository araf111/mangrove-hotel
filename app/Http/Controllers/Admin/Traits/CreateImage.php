<?php

namespace App\Http\Controllers\Admin\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait CreateImage
{
    public function createImageFromBase64($requestFile = NULL, $link = NULL, $userId = NULL)
    {
        if ($requestFile) {
            $file_name                = 'avatar_' . time() . '.png';
            list($type, $requestFile) = explode(';', $requestFile);
            list(, $requestFile)      = explode(',', $requestFile);

            if ($requestFile != "") {
                $imageUrl = Str::getAbsolute('images' . DIRECTORY_SEPARATOR . $userId . DIRECTORY_SEPARATOR . $link . DIRECTORY_SEPARATOR . $file_name);
                Storage::put($imageUrl, base64_decode($requestFile));
                return $imageUrl;
            }
        }
        return false;
    }

    private function imgStore($fieldName, $obj = NULL, $link = NULL, $fileObj = NULL, $userId = NULL)
    {
        if (!$fileObj) {
            $file = request()->file($fieldName);
        } else {
            $file = $fileObj;
        }
        $imageUrl = Str::getAbsolute('images' . DIRECTORY_SEPARATOR . $userId . DIRECTORY_SEPARATOR . $link);
        if ($file) {
            $imageName = time() . '_' . Str::getFileName($file->getClientOriginalName());
            if (!empty($obj)) {
                Storage::delete($imageUrl . DIRECTORY_SEPARATOR . $obj->$fieldName);
            }
            $file->storeAs($imageUrl, $imageName);
            if (!empty($obj)) {
                $obj->update([$fieldName => $imageName]);
            } else {
                return $imageName;
            }
        }
    }

    public function createImageFromRemoteUrl($url, $dir = '', $basename = false)
    {
        $info = new \SplFileInfo($url);
        if (in_array($info->getExtension(), config('conf.rfq_allowed_file_types'))) {
            $fileName = (string) Str::uuid() . '.' . $info->getExtension();
            if ($basename) {
                $fileName = Str::getFileName($info->getBasename());
            }
            $contents = file_get_contents($info);
            if ($contents) {
                $imageUrl = Str::getAbsolute($dir . DIRECTORY_SEPARATOR . $fileName);
                $result   = Storage::put($imageUrl, $contents);
                if ($result) {
                    return $imageUrl;
                }
            }
        }
        return false;
    }
}
